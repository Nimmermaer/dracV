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
 * By default, if this property is not grouped with other properties it specifies
 * the pronunciation of the FN property of the vCard object. It may point to an
 * external URL or may be embedded in the vCard as a Base64 encoded block of text.
 */
class Sound extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * title
	 * 
	 * @var string
	 */
	protected $title = '';

	/**
	 * Returns the title
	 * 
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 * 
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

}