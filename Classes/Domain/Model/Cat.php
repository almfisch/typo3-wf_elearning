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
class Cat extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * title
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * parentCat
	 *
	 * @var \integer
	 */
	protected $parentCat;

	/**
	 * description
	 *
	 * @var \string
	 */
	protected $description;

	/**
	 * feGroup
	 *
	 * @var \string
	 */
	protected $feGroup;

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
	 * Returns the parentCat
	 *
	 * @return \integer $parentCat
	 */
	public function getParentCat() {
		return $this->parentCat;
	}

	/**
	 * Sets the parentCat
	 *
	 * @param \integer $parentCat
	 * @return void
	 */
	public function setParentCat($parentCat) {
		$this->parentCat = $parentCat;
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
	 * Returns the feGroup
	 *
	 * @return \string $feGroup
	 */
	public function getFeGroup() {
		return $this->feGroup;
	}

	/**
	 * Sets the feGroup
	 *
	 * @param \string $feGroup
	 * @return void
	 */
	public function setFeGroup($feGroup) {
		$this->feGroup = $feGroup;
	}

}
?>