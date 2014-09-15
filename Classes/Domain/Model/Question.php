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
class Question extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * catId
	 *
	 * @var \integer
	 * @validate NotEmpty
	 */
	protected $catId;

	/**
	 * type
	 *
	 * @var \integer
	 * @validate NotEmpty
	 */
	protected $type;

	/**
	 * description
	 *
	 * @var \string
	 */
	protected $description;

	/**
	 * points
	 *
	 * @var \float
	 */
	protected $points;

	/**
	 * q1
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $q1;

	/**
	 * a1
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $a1;

	/**
	 * c1
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $c1;

	/**
	 * c2
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $c2;

	/**
	 * c3
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $c3;

	/**
	 * imgDrag
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $imgDrag;

	/**
	 * imgDrop
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $imgDrop;

	/**
	 * c4
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $c4;

	/**
	 * title
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * answer
	 *
	 * @var \string
	 */
	protected $answer;

	/**
	 * okey
	 *
	 * @var \string
	 */
	protected $okey;

	/**
	 * imgDesc
	 *
	 * @var \string
	 */
	protected $imgDesc;

	/**
	 * videoDesc
	 *
	 * @var \string
	 */
	protected $videoDesc;

	/**
	 * originalNorm
	 *
	 * @var \string
	 */
	protected $originalNorm;

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
	 * Returns the type
	 *
	 * @return \integer $type
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets the type
	 *
	 * @param \integer $type
	 * @return void
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * Returns the description
	 *
	 * @return \string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param \string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the points
	 *
	 * @return \float $points
	 */
	public function getPoints() {
		return $this->points;
	}

	/**
	 * Sets the points
	 *
	 * @param \float $points
	 * @return void
	 */
	public function setPoints($points) {
		$this->points = $points;
	}

	/**
	 * Returns the q1
	 *
	 * @return \string $q1
	 */
	public function getQ1() {
		return $this->q1;
	}

	/**
	 * Sets the q1
	 *
	 * @param \string $q1
	 * @return void
	 */
	public function setQ1($q1) {
		$this->q1 = $q1;
	}

	/**
	 * Returns the a1
	 *
	 * @return \string $a1
	 */
	public function getA1() {
		return $this->a1;
	}

	/**
	 * Sets the a1
	 *
	 * @param \string $a1
	 * @return void
	 */
	public function setA1($a1) {
		$this->a1 = $a1;
	}

	/**
	 * Returns the c1
	 *
	 * @return \string $c1
	 */
	public function getC1() {
		return $this->c1;
	}

	/**
	 * Sets the c1
	 *
	 * @param \string $c1
	 * @return void
	 */
	public function setC1($c1) {
		$this->c1 = $c1;
	}

	/**
	 * Returns the c2
	 *
	 * @return \string $c2
	 */
	public function getC2() {
		return $this->c2;
	}

	/**
	 * Sets the c2
	 *
	 * @param \string $c2
	 * @return void
	 */
	public function setC2($c2) {
		$this->c2 = $c2;
	}

	/**
	 * Returns the c3
	 *
	 * @return \string $c3
	 */
	public function getC3() {
		return $this->c3;
	}

	/**
	 * Sets the c3
	 *
	 * @param \string $c3
	 * @return void
	 */
	public function setC3($c3) {
		$this->c3 = $c3;
	}

	/**
	 * Returns the imgDrag
	 *
	 * @return \string $imgDrag
	 */
	public function getImgDrag() {
		return $this->imgDrag;
	}

	/**
	 * Sets the imgDrag
	 *
	 * @param \string $imgDrag
	 * @return void
	 */
	public function setImgDrag($imgDrag) {
		$this->imgDrag = $imgDrag;
	}

	/**
	 * Returns the imgDrop
	 *
	 * @return \string $imgDrop
	 */
	public function getImgDrop() {
		return $this->imgDrop;
	}

	/**
	 * Sets the imgDrop
	 *
	 * @param \string $imgDrop
	 * @return void
	 */
	public function setImgDrop($imgDrop) {
		$this->imgDrop = $imgDrop;
	}

	/**
	 * Returns the c4
	 *
	 * @return \string $c4
	 */
	public function getC4() {
		return $this->c4;
	}

	/**
	 * Sets the c4
	 *
	 * @param \string $c4
	 * @return void
	 */
	public function setC4($c4) {
		$this->c4 = $c4;
	}

	/**
	 * Returns the title
	 *
	 * @return \string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param \string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the answer
	 *
	 * @return \string $answer
	 */
	public function getAnswer() {
		return $this->answer;
	}

	/**
	 * Sets the answer
	 *
	 * @param \string $answer
	 * @return void
	 */
	public function setAnswer($answer) {
		$this->answer = $answer;
	}

	/**
	 * Returns the okey
	 *
	 * @return \string $answer
	 */
	public function getOkey() {
		return $this->okey;
	}

	/**
	 * Sets the okey
	 *
	 * @param \string $okey
	 * @return void
	 */
	public function setOkey($okey) {
		$this->okey = $okey;
	}

	/**
	 * Returns the imgDesc
	 *
	 * @return \string $imgDesc
	 */
	public function getImgDesc() {
		return $this->imgDesc;
	}

	/**
	 * Sets the imgDesc
	 *
	 * @param \string $imgDesc
	 * @return void
	 */
	public function setImgDesc($imgDesc) {
		$this->imgDesc = $imgDesc;
	}

	/**
	 * Returns the videoDesc
	 *
	 * @return \string $videoDesc
	 */
	public function getVideoDesc() {
		return $this->videoDesc;
	}

	/**
	 * Sets the videoDesc
	 *
	 * @param \string $videoDesc
	 * @return void
	 */
	public function setVideoDesc($videoDesc) {
		$this->videoDesc = $videoDesc;
	}

	/**
	 * Returns the originalNorm
	 *
	 * @return \string $originalNorm
	 */
	public function getOriginalNorm() {
		return $this->originalNorm;
	}

	/**
	 * Sets the originalNorm
	 *
	 * @param \string $originalNorm
	 * @return void
	 */
	public function setOriginalNorm($originalNorm) {
		$this->originalNorm = $originalNorm;
	}

}
?>
