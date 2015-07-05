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
 * Organization
 */
class Organization extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * corporateCompanyLogo
	 * 
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $corporateCompanyLogo = NULL;

	/**
	 * corporateCompanyName
	 * 
	 * @var string
	 */
	protected $corporateCompanyName = '';

	/**
	 * adress
	 * 
	 * @var string
	 */
	protected $adress = '';

	/**
	 * town
	 * 
	 * @var string
	 */
	protected $town = '';

	/**
	 * www
	 * 
	 * @var string
	 */
	protected $www = '';

	/**
	 * description
	 * 
	 * @var string
	 */
	protected $description = '';

	/**
	 * phone
	 * 
	 * @var string
	 */
	protected $phone = '';

	/**
	 * contact
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Vcard>
	 */
	protected $contact = NULL;

	/**
	 * __construct
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties
	 * Do not modify this method!
	 * It will be rewritten on each save in the extension builder
	 * You may modify the constructor of this class instead
	 * 
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->contact = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the corporateCompanyLogo
	 * 
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $corporateCompanyLogo
	 */
	public function getCorporateCompanyLogo() {
		return $this->corporateCompanyLogo;
	}

	/**
	 * Sets the corporateCompanyLogo
	 * 
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $corporateCompanyLogo
	 * @return void
	 */
	public function setCorporateCompanyLogo(\TYPO3\CMS\Extbase\Domain\Model\FileReference $corporateCompanyLogo) {
		$this->corporateCompanyLogo = $corporateCompanyLogo;
	}

	/**
	 * Returns the corporateCompanyName
	 * 
	 * @return string $corporateCompanyName
	 */
	public function getCorporateCompanyName() {
		return $this->corporateCompanyName;
	}

	/**
	 * Sets the corporateCompanyName
	 * 
	 * @param string $corporateCompanyName
	 * @return void
	 */
	public function setCorporateCompanyName($corporateCompanyName) {
		$this->corporateCompanyName = $corporateCompanyName;
	}

	/**
	 * Returns the adress
	 * 
	 * @return string $adress
	 */
	public function getAdress() {
		return $this->adress;
	}

	/**
	 * Sets the adress
	 * 
	 * @param string $adress
	 * @return void
	 */
	public function setAdress($adress) {
		$this->adress = $adress;
	}

	/**
	 * Returns the town
	 * 
	 * @return string $town
	 */
	public function getTown() {
		return $this->town;
	}

	/**
	 * Sets the town
	 * 
	 * @param string $town
	 * @return void
	 */
	public function setTown($town) {
		$this->town = $town;
	}

	/**
	 * Returns the www
	 * 
	 * @return string $www
	 */
	public function getWww() {
		return $this->www;
	}

	/**
	 * Sets the www
	 * 
	 * @param string $www
	 * @return void
	 */
	public function setWww($www) {
		$this->www = $www;
	}

	/**
	 * Returns the description
	 * 
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 * 
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the phone
	 * 
	 * @return string $phone
	 */
	public function getPhone() {
		return $this->phone;
	}

	/**
	 * Sets the phone
	 * 
	 * @param string $phone
	 * @return void
	 */
	public function setPhone($phone) {
		$this->phone = $phone;
	}

	/**
	 * Adds a Vcard
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Vcard $contact
	 * @return void
	 */
	public function addContact(\PHTH\Dracv\Domain\Model\Vcard $contact) {
		$this->contact->attach($contact);
	}

	/**
	 * Removes a Vcard
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Vcard $contactToRemove The Vcard to be removed
	 * @return void
	 */
	public function removeContact(\PHTH\Dracv\Domain\Model\Vcard $contactToRemove) {
		$this->contact->detach($contactToRemove);
	}

	/**
	 * Returns the contact
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Vcard> $contact
	 */
	public function getContact() {
		return $this->contact;
	}

	/**
	 * Sets the contact
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Vcard> $contact
	 * @return void
	 */
	public function setContact(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $contact) {
		$this->contact = $contact;
	}

}