<?php
namespace PHTH\Dracv\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Michael Blunck <michael.blunck@phth.de>, PHTH
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
 * The version of the vCard specification. In versions 3.0 and 4.0, this must come
 * right after the BEGIN property.
 */
class Version extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * versionNumber
	 * 
	 * @var string
	 */
	protected $versionNumber = '';

	/**
	 * Returns the versionNumber
	 * 
	 * @return string $versionNumber
	 */
	public function getVersionNumber() {
		return $this->versionNumber;
	}

	/**
	 * Sets the versionNumber
	 * 
	 * @param string $versionNumber
	 * @return void
	 */
	public function setVersionNumber($versionNumber) {
		$this->versionNumber = $versionNumber;
	}

}