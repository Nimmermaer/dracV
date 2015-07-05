<?php

namespace PHTH\Dracv\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Michael Blunck <michael.blunck@phth.de>, PHTH
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
 * Test case for class \PHTH\Dracv\Domain\Model\Organization.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Michael Blunck <michael.blunck@phth.de>
 */
class OrganizationTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \PHTH\Dracv\Domain\Model\Organization
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \PHTH\Dracv\Domain\Model\Organization();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getCorporateCompanyLogoReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getCorporateCompanyLogo()
		);
	}

	/**
	 * @test
	 */
	public function setCorporateCompanyLogoForFileReferenceSetsCorporateCompanyLogo() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setCorporateCompanyLogo($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'corporateCompanyLogo',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCorporateCompanyNameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getCorporateCompanyName()
		);
	}

	/**
	 * @test
	 */
	public function setCorporateCompanyNameForStringSetsCorporateCompanyName() {
		$this->subject->setCorporateCompanyName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'corporateCompanyName',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAdressReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getAdress()
		);
	}

	/**
	 * @test
	 */
	public function setAdressForStringSetsAdress() {
		$this->subject->setAdress('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'adress',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTownReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTown()
		);
	}

	/**
	 * @test
	 */
	public function setTownForStringSetsTown() {
		$this->subject->setTown('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'town',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getWwwReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getWww()
		);
	}

	/**
	 * @test
	 */
	public function setWwwForStringSetsWww() {
		$this->subject->setWww('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'www',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDescription()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() {
		$this->subject->setDescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPhoneReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPhone()
		);
	}

	/**
	 * @test
	 */
	public function setPhoneForStringSetsPhone() {
		$this->subject->setPhone('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'phone',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContactReturnsInitialValueForVcard() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getContact()
		);
	}

	/**
	 * @test
	 */
	public function setContactForObjectStorageContainingVcardSetsContact() {
		$contact = new \PHTH\Dracv\Domain\Model\Vcard();
		$objectStorageHoldingExactlyOneContact = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneContact->attach($contact);
		$this->subject->setContact($objectStorageHoldingExactlyOneContact);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneContact,
			'contact',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addContactToObjectStorageHoldingContact() {
		$contact = new \PHTH\Dracv\Domain\Model\Vcard();
		$contactObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$contactObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($contact));
		$this->inject($this->subject, 'contact', $contactObjectStorageMock);

		$this->subject->addContact($contact);
	}

	/**
	 * @test
	 */
	public function removeContactFromObjectStorageHoldingContact() {
		$contact = new \PHTH\Dracv\Domain\Model\Vcard();
		$contactObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$contactObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($contact));
		$this->inject($this->subject, 'contact', $contactObjectStorageMock);

		$this->subject->removeContact($contact);

	}
}
