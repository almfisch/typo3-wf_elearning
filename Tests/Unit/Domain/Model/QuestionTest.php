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
 * Test case for class \TYPO3\WfElearning\Domain\Model\Question.
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
class QuestionTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \TYPO3\WfElearning\Domain\Model\Question
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \TYPO3\WfElearning\Domain\Model\Question();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() { 
		$this->fixture->setTitle('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTitle()
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
	public function getTypeReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getType()
		);
	}

	/**
	 * @test
	 */
	public function setTypeForIntegerSetsType() { 
		$this->fixture->setType(12);

		$this->assertSame(
			12,
			$this->fixture->getType()
		);
	}
	
	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() { 
		$this->fixture->setDescription('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getDescription()
		);
	}
	
	/**
	 * @test
	 */
	public function getPointsReturnsInitialValueForFloat() { 
		$this->assertSame(
			0.0,
			$this->fixture->getPoints()
		);
	}

	/**
	 * @test
	 */
	public function setPointsForFloatSetsPoints() { 
		$this->fixture->setPoints(3.14159265);

		$this->assertSame(
			3.14159265,
			$this->fixture->getPoints()
		);
	}
	
	/**
	 * @test
	 */
	public function getQ1ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setQ1ForStringSetsQ1() { 
		$this->fixture->setQ1('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getQ1()
		);
	}
	
	/**
	 * @test
	 */
	public function getA1ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setA1ForStringSetsA1() { 
		$this->fixture->setA1('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getA1()
		);
	}
	
	/**
	 * @test
	 */
	public function getC1ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setC1ForStringSetsC1() { 
		$this->fixture->setC1('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getC1()
		);
	}
	
	/**
	 * @test
	 */
	public function getC2ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setC2ForStringSetsC2() { 
		$this->fixture->setC2('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getC2()
		);
	}
	
	/**
	 * @test
	 */
	public function getC3ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setC3ForStringSetsC3() { 
		$this->fixture->setC3('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getC3()
		);
	}
	
	/**
	 * @test
	 */
	public function getImgDragReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setImgDragForStringSetsImgDrag() { 
		$this->fixture->setImgDrag('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getImgDrag()
		);
	}
	
	/**
	 * @test
	 */
	public function getImgDropReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setImgDropForStringSetsImgDrop() { 
		$this->fixture->setImgDrop('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getImgDrop()
		);
	}
	
	/**
	 * @test
	 */
	public function getC4ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setC4ForStringSetsC4() { 
		$this->fixture->setC4('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getC4()
		);
	}
	
}
?>