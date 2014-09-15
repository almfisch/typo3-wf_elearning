<?php

namespace TYPO3\WfElearning\Tests;
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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \TYPO3\WfElearning\Domain\Model\Save.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage TYPO3 eLearning Tool
 *
 * @author Andi Platen <info@wireframe.de>
 */
class SaveTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \TYPO3\WfElearning\Domain\Model\Save
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \TYPO3\WfElearning\Domain\Model\Save();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getUserIdReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getUserId()
		);
	}

	/**
	 * @test
	 */
	public function setUserIdForIntegerSetsUserId() { 
		$this->fixture->setUserId(12);

		$this->assertSame(
			12,
			$this->fixture->getUserId()
		);
	}
	
	/**
	 * @test
	 */
	public function getCatIdReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getCatId()
		);
	}

	/**
	 * @test
	 */
	public function setCatIdForIntegerSetsCatId() { 
		$this->fixture->setCatId(12);

		$this->assertSame(
			12,
			$this->fixture->getCatId()
		);
	}
	
	/**
	 * @test
	 */
	public function getQuestionIdReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getQuestionId()
		);
	}

	/**
	 * @test
	 */
	public function setQuestionIdForIntegerSetsQuestionId() { 
		$this->fixture->setQuestionId(12);

		$this->assertSame(
			12,
			$this->fixture->getQuestionId()
		);
	}
	
}
?>