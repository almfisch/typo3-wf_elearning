<?php
namespace TYPO3\WfElearning\Controller;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Andi Platen <info@wireframe.de>, WireFrame Internet Agentur
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package wf_elearning
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class QuestionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * questionRepository
	 *
	 * @var \TYPO3\WfElearning\Domain\Repository\QuestionRepository
	 * @inject
	 */
	protected $questionRepository;


	/**
	 * action initialize
	 *
	 * @return void
	 */
	function initializeAction()
	{
		//$this->formAnswers = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\WfElearning\\Domain\\Model\\Question');

		$this->config = $this->configurationManager->getConfiguration(\TYPO3\CMS\Extbase\Configuration\ConfigurationManager::CONFIGURATION_TYPE_FRAMEWORK);
		//$this->config = $this->configurationManager->getConfiguration(\TYPO3\CMS\Extbase\Configuration\ConfigurationManager::CONFIGURATION_TYPE_SETTINGS);
		//$this->config = $this->configurationManager->getConfiguration(\TYPO3\CMS\Extbase\Configuration\ConfigurationManager::CONFIGURATION_TYPE_FULL_TYPOSCRIPT);
	}


	/**
	 * action show
	 *
	 * @param array $formAnswers
     * @dontvalidate $formAnswers
	 * @return void
	 */
	function showAction($formAnswers = array())
	{
		if($this->settings['question']['template'])
		{
			$this->view->setTemplatePathAndFilename($this->settings['question']['template']);
		}

		$catId = $this->settings['flexform']['cat'];
		$questions = $this->questionRepository->findByCatId($catId);
		$this->view->assign('questions', $questions);
		$this->view->assign('allQuestions', count($questions));
		
		if($this->settings['showAllPoints'] == 1)
		{
			$allPoints = 0;
			foreach($questions as $key => $value)
			{
				$allPoints = $allPoints + $questions[$key]->getPoints();
			}
			$this->view->assign('allPoints', $allPoints);
		}

		if($this->request->getArguments())
		{
			$formAnswers = $this->request->getArgument('formAnswers');
			$this->view->assign('formAnswers', $formAnswers);
			$actPoints = 0;
			$actQuestions = 0;

			foreach($this->request->getArgument('formAnswers') as $key => $value)
			{
				$nextKey = array_keys($value);
				$questions[($key - 1)]->setAnswer($formAnswers[$key][$nextKey[0]]);
			}

			foreach($questions as $key => $value)
			{
				if($questions[$key]->getType() == 1)
				{
					$correctAnswer = explode(',', $questions[$key]->getC1());
					sort($correctAnswer);
					$userAnswer = $questions[$key]->getAnswer();
					$aCount = count($correctAnswer);

					$arr = array();
					foreach($userAnswer as $a => $b)
					{
						if($b != '')
						{
							$arr[] = $a;
						}
					}

					if(implode($arr) == implode($correctAnswer))
					{
						$actPoints = $actPoints + $questions[$key]->getPoints();
						$actQuestions++;
						$questions[$key]->setOkey('answer_ok');
					}
					else
					{
						$questions[$key]->setOkey('answer_notok');
					}
				}

				if($questions[$key]->getType() == 2)
				{
					$correctAnswer = explode(',', $questions[$key]->getC2());
					$correctAnswer = array_map('strtolower', $correctAnswer);
					$correctAnswer = array_map('trim', $correctAnswer);
					$userAnswer = $questions[$key]->getAnswer();
					$userAnswer = strtolower($userAnswer);
					$userAnswer = trim($userAnswer);

					if(in_array($userAnswer, $correctAnswer))
					{
						$actPoints = $actPoints + $questions[$key]->getPoints();
						$actQuestions++;
						$questions[$key]->setOkey('answer_ok');
					}
					else
					{
						$questions[$key]->setOkey('answer_notok');
					}
				}

				if($questions[$key]->getType() == 3)
				{
					$correctAnswer = explode("\r\n", $questions[$key]->getC3());
					foreach($correctAnswer as $a => $b)
					{
						$correctAnswer[$a] = explode(',', $b);
						$correctAnswer[$a] = array_map('strtolower', $correctAnswer[$a]);
						$correctAnswer[$a] = array_map('trim', $correctAnswer[$a]);
					}
					$userAnswer = $questions[$key]->getAnswer();
					$userAnswer = array_map('strtolower', $userAnswer);
					$userAnswer = array_map('trim', $userAnswer);
					$aCount = count($correctAnswer);

					$arr = array();
					foreach($userAnswer as $a => $b)
					{
						if($b != '')
						{
							$arr[] = $b;
						}
					}
					
					$correct = 0;
					foreach($correctAnswer as $a => $b)
					{
						if(in_array($arr[$a], $b))
						{
							$correct++;
						}
					}
					
					if($correct == count($correctAnswer))
					{
						$actPoints = $actPoints + $questions[$key]->getPoints();
						$actQuestions++;
						$questions[$key]->setOkey('answer_ok');
					}
					else
					{
						$questions[$key]->setOkey('answer_notok');
					}
				}

				if($questions[$key]->getType() == 4)
				{
					$correctAnswer = explode(',', $questions[$key]->getC4());
					sort($correctAnswer);
					$userAnswer = $questions[$key]->getAnswer();
					$aCount = count($correctAnswer);

					$arr = array();
					foreach($userAnswer as $a => $b)
					{
						if($b != '')
						{
							$arr[] = $a;
						}
					}

					if(in_array($arr[0], $correctAnswer))
					{
						$actPoints = $actPoints + $questions[$key]->getPoints();
						$actQuestions++;
						$questions[$key]->setOkey('answer_ok');
					}
					else
					{
						$questions[$key]->setOkey('answer_notok');
					}
				}
				$this->view->assign('actPoints', $actPoints);
				$this->view->assign('actQuestions', $actQuestions);
			}
		}
	}
}
?>
