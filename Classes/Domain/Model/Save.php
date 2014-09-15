<?php
namespace TYPO3\WfElearning\Domain\Model;

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
class Save extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * userId
	 *
	 * @var \integer
	 * @validate NotEmpty
	 */
	protected $userId;

	/**
	 * catId
	 *
	 * @var \integer
	 * @validate NotEmpty
	 */
	protected $catId;

	/**
	 * questionId
	 *
	 * @var \integer
	 * @validate NotEmpty
	 */
	protected $questionId;

	/**
	 * Returns the userId
	 *
	 * @return \integer $userId
	 */
	public function getUserId() {
		return $this->userId;
	}

	/**
	 * Sets the userId
	 *
	 * @param \integer $userId
	 * @return void
	 */
	public function setUserId($userId) {
		$this->userId = $userId;
	}

	/**
	 * Returns the catId
	 *
	 * @return \integer $catId
	 */
	public function getCatId() {
		return $this->catId;
	}

	/**
	 * Sets the catId
	 *
	 * @param \integer $catId
	 * @return void
	 */
	public function setCatId($catId) {
		$this->catId = $catId;
	}

	/**
	 * Returns the questionId
	 *
	 * @return \integer $questionId
	 */
	public function getQuestionId() {
		return $this->questionId;
	}

	/**
	 * Sets the questionId
	 *
	 * @param \integer $questionId
	 * @return void
	 */
	public function setQuestionId($questionId) {
		$this->questionId = $questionId;
	}

}
?>