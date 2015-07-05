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
 * Test case for class \PHTH\Dracv\Domain\Model\Vcard.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Michael Blunck <michael.blunck@phth.de>
 */
class VcardTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \PHTH\Dracv\Domain\Model\Vcard
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \PHTH\Dracv\Domain\Model\Vcard();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getCaladruriReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getCaladruri()
		);
	}

	/**
	 * @test
	 */
	public function setCaladruriForStringSetsCaladruri() {
		$this->subject->setCaladruri('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'caladruri',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCaluriReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getCaluri()
		);
	}

	/**
	 * @test
	 */
	public function setCaluriForStringSetsCaluri() {
		$this->subject->setCaluri('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'caluri',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getClassReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getClass()
		);
	}

	/**
	 * @test
	 */
	public function setClassForIntegerSetsClass() {
		$this->subject->setClass(12);

		$this->assertAttributeEquals(
			12,
			'class',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getClientpidmapReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getClientpidmap()
		);
	}

	/**
	 * @test
	 */
	public function setClientpidmapForStringSetsClientpidmap() {
		$this->subject->setClientpidmap('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'clientpidmap',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFburlReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getFburl()
		);
	}

	/**
	 * @test
	 */
	public function setFburlForStringSetsFburl() {
		$this->subject->setFburl('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'fburl',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFnReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getFn()
		);
	}

	/**
	 * @test
	 */
	public function setFnForStringSetsFn() {
		$this->subject->setFn('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'fn',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGeolatitudeReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getGeolatitude()
		);
	}

	/**
	 * @test
	 */
	public function setGeolatitudeForStringSetsGeolatitude() {
		$this->subject->setGeolatitude('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'geolatitude',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGeolongitudeReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getGeolongitude()
		);
	}

	/**
	 * @test
	 */
	public function setGeolongitudeForStringSetsGeolongitude() {
		$this->subject->setGeolongitude('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'geolongitude',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getVcardKeyReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getVcardKey()
		);
	}

	/**
	 * @test
	 */
	public function setVcardKeyForStringSetsVcardKey() {
		$this->subject->setVcardKey('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'vcardKey',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getKindReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getKind()
		);
	}

	/**
	 * @test
	 */
	public function setKindForStringSetsKind() {
		$this->subject->setKind('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'kind',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMailerReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getMailer()
		);
	}

	/**
	 * @test
	 */
	public function setMailerForStringSetsMailer() {
		$this->subject->setMailer('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'mailer',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMemberReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getMember()
		);
	}

	/**
	 * @test
	 */
	public function setMemberForStringSetsMember() {
		$this->subject->setMember('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'member',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getNReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getN()
		);
	}

	/**
	 * @test
	 */
	public function setNForStringSetsN() {
		$this->subject->setN('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'n',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getNoteReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getNote()
		);
	}

	/**
	 * @test
	 */
	public function setNoteForStringSetsNote() {
		$this->subject->setNote('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'note',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPhotoReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getPhoto()
		);
	}

	/**
	 * @test
	 */
	public function setPhotoForFileReferenceSetsPhoto() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setPhoto($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'photo',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getProdidReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getProdid()
		);
	}

	/**
	 * @test
	 */
	public function setProdidForStringSetsProdid() {
		$this->subject->setProdid('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'prodid',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getProfileReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getProfile()
		);
	}

	/**
	 * @test
	 */
	public function setProfileForStringSetsProfile() {
		$this->subject->setProfile('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'profile',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSortstringReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getSortstring()
		);
	}

	/**
	 * @test
	 */
	public function setSortstringForStringSetsSortstring() {
		$this->subject->setSortstring('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'sortstring',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSourceReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getSource()
		);
	}

	/**
	 * @test
	 */
	public function setSourceForStringSetsSource() {
		$this->subject->setSource('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'source',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTimezoneReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTimezone()
		);
	}

	/**
	 * @test
	 */
	public function setTimezoneForStringSetsTimezone() {
		$this->subject->setTimezone('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'timezone',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getXmlReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getXml()
		);
	}

	/**
	 * @test
	 */
	public function setXmlForStringSetsXml() {
		$this->subject->setXml('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'xml',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBirthplaceReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getBirthplace()
		);
	}

	/**
	 * @test
	 */
	public function setBirthplaceForStringSetsBirthplace() {
		$this->subject->setBirthplace('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'birthplace',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDeathdateReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getDeathdate()
		);
	}

	/**
	 * @test
	 */
	public function setDeathdateForDateTimeSetsDeathdate() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setDeathdate($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'deathdate',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDeathplaceReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getDeathplace()
		);
	}

	/**
	 * @test
	 */
	public function setDeathplaceForDateTimeSetsDeathplace() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setDeathplace($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'deathplace',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCategoryReturnsInitialValueForCategories() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getCategory()
		);
	}

	/**
	 * @test
	 */
	public function setCategoryForObjectStorageContainingCategoriesSetsCategory() {
		$category = new \PHTH\Dracv\Domain\Model\Categories();
		$objectStorageHoldingExactlyOneCategory = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneCategory->attach($category);
		$this->subject->setCategory($objectStorageHoldingExactlyOneCategory);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneCategory,
			'category',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addCategoryToObjectStorageHoldingCategory() {
		$category = new \PHTH\Dracv\Domain\Model\Categories();
		$categoryObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$categoryObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($category));
		$this->inject($this->subject, 'category', $categoryObjectStorageMock);

		$this->subject->addCategory($category);
	}

	/**
	 * @test
	 */
	public function removeCategoryFromObjectStorageHoldingCategory() {
		$category = new \PHTH\Dracv\Domain\Model\Categories();
		$categoryObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$categoryObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($category));
		$this->inject($this->subject, 'category', $categoryObjectStorageMock);

		$this->subject->removeCategory($category);

	}

	/**
	 * @test
	 */
	public function getAgentReturnsInitialValueForVcard() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getAgent()
		);
	}

	/**
	 * @test
	 */
	public function setAgentForObjectStorageContainingVcardSetsAgent() {
		$agent = new \PHTH\Dracv\Domain\Model\Vcard();
		$objectStorageHoldingExactlyOneAgent = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneAgent->attach($agent);
		$this->subject->setAgent($objectStorageHoldingExactlyOneAgent);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneAgent,
			'agent',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addAgentToObjectStorageHoldingAgent() {
		$agent = new \PHTH\Dracv\Domain\Model\Vcard();
		$agentObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$agentObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($agent));
		$this->inject($this->subject, 'agent', $agentObjectStorageMock);

		$this->subject->addAgent($agent);
	}

	/**
	 * @test
	 */
	public function removeAgentFromObjectStorageHoldingAgent() {
		$agent = new \PHTH\Dracv\Domain\Model\Vcard();
		$agentObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$agentObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($agent));
		$this->inject($this->subject, 'agent', $agentObjectStorageMock);

		$this->subject->removeAgent($agent);

	}

	/**
	 * @test
	 */
	public function getOrganizationReturnsInitialValueForOrganization() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getOrganization()
		);
	}

	/**
	 * @test
	 */
	public function setOrganizationForObjectStorageContainingOrganizationSetsOrganization() {
		$organization = new \PHTH\Dracv\Domain\Model\Organization();
		$objectStorageHoldingExactlyOneOrganization = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneOrganization->attach($organization);
		$this->subject->setOrganization($objectStorageHoldingExactlyOneOrganization);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneOrganization,
			'organization',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addOrganizationToObjectStorageHoldingOrganization() {
		$organization = new \PHTH\Dracv\Domain\Model\Organization();
		$organizationObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$organizationObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($organization));
		$this->inject($this->subject, 'organization', $organizationObjectStorageMock);

		$this->subject->addOrganization($organization);
	}

	/**
	 * @test
	 */
	public function removeOrganizationFromObjectStorageHoldingOrganization() {
		$organization = new \PHTH\Dracv\Domain\Model\Organization();
		$organizationObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$organizationObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($organization));
		$this->inject($this->subject, 'organization', $organizationObjectStorageMock);

		$this->subject->removeOrganization($organization);

	}

	/**
	 * @test
	 */
	public function getRelatedReturnsInitialValueForRelated() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getRelated()
		);
	}

	/**
	 * @test
	 */
	public function setRelatedForObjectStorageContainingRelatedSetsRelated() {
		$related = new \PHTH\Dracv\Domain\Model\Related();
		$objectStorageHoldingExactlyOneRelated = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneRelated->attach($related);
		$this->subject->setRelated($objectStorageHoldingExactlyOneRelated);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneRelated,
			'related',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addRelatedToObjectStorageHoldingRelated() {
		$related = new \PHTH\Dracv\Domain\Model\Related();
		$relatedObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$relatedObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($related));
		$this->inject($this->subject, 'related', $relatedObjectStorageMock);

		$this->subject->addRelated($related);
	}

	/**
	 * @test
	 */
	public function removeRelatedFromObjectStorageHoldingRelated() {
		$related = new \PHTH\Dracv\Domain\Model\Related();
		$relatedObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$relatedObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($related));
		$this->inject($this->subject, 'related', $relatedObjectStorageMock);

		$this->subject->removeRelated($related);

	}

	/**
	 * @test
	 */
	public function getRoleReturnsInitialValueForRole() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getRole()
		);
	}

	/**
	 * @test
	 */
	public function setRoleForObjectStorageContainingRoleSetsRole() {
		$role = new \PHTH\Dracv\Domain\Model\Role();
		$objectStorageHoldingExactlyOneRole = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneRole->attach($role);
		$this->subject->setRole($objectStorageHoldingExactlyOneRole);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneRole,
			'role',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addRoleToObjectStorageHoldingRole() {
		$role = new \PHTH\Dracv\Domain\Model\Role();
		$roleObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$roleObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($role));
		$this->inject($this->subject, 'role', $roleObjectStorageMock);

		$this->subject->addRole($role);
	}

	/**
	 * @test
	 */
	public function removeRoleFromObjectStorageHoldingRole() {
		$role = new \PHTH\Dracv\Domain\Model\Role();
		$roleObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$roleObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($role));
		$this->inject($this->subject, 'role', $roleObjectStorageMock);

		$this->subject->removeRole($role);

	}

	/**
	 * @test
	 */
	public function getSoundReturnsInitialValueForSound() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getSound()
		);
	}

	/**
	 * @test
	 */
	public function setSoundForObjectStorageContainingSoundSetsSound() {
		$sound = new \PHTH\Dracv\Domain\Model\Sound();
		$objectStorageHoldingExactlyOneSound = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneSound->attach($sound);
		$this->subject->setSound($objectStorageHoldingExactlyOneSound);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneSound,
			'sound',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addSoundToObjectStorageHoldingSound() {
		$sound = new \PHTH\Dracv\Domain\Model\Sound();
		$soundObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$soundObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($sound));
		$this->inject($this->subject, 'sound', $soundObjectStorageMock);

		$this->subject->addSound($sound);
	}

	/**
	 * @test
	 */
	public function removeSoundFromObjectStorageHoldingSound() {
		$sound = new \PHTH\Dracv\Domain\Model\Sound();
		$soundObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$soundObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($sound));
		$this->inject($this->subject, 'sound', $soundObjectStorageMock);

		$this->subject->removeSound($sound);

	}

	/**
	 * @test
	 */
	public function getVersionReturnsInitialValueForVersion() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getVersion()
		);
	}

	/**
	 * @test
	 */
	public function setVersionForObjectStorageContainingVersionSetsVersion() {
		$version = new \PHTH\Dracv\Domain\Model\Version();
		$objectStorageHoldingExactlyOneVersion = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneVersion->attach($version);
		$this->subject->setVersion($objectStorageHoldingExactlyOneVersion);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneVersion,
			'version',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addVersionToObjectStorageHoldingVersion() {
		$version = new \PHTH\Dracv\Domain\Model\Version();
		$versionObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$versionObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($version));
		$this->inject($this->subject, 'version', $versionObjectStorageMock);

		$this->subject->addVersion($version);
	}

	/**
	 * @test
	 */
	public function removeVersionFromObjectStorageHoldingVersion() {
		$version = new \PHTH\Dracv\Domain\Model\Version();
		$versionObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$versionObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($version));
		$this->inject($this->subject, 'version', $versionObjectStorageMock);

		$this->subject->removeVersion($version);

	}

	/**
	 * @test
	 */
	public function getExpertiseReturnsInitialValueForExpertise() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getExpertise()
		);
	}

	/**
	 * @test
	 */
	public function setExpertiseForObjectStorageContainingExpertiseSetsExpertise() {
		$expertise = new \PHTH\Dracv\Domain\Model\Expertise();
		$objectStorageHoldingExactlyOneExpertise = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneExpertise->attach($expertise);
		$this->subject->setExpertise($objectStorageHoldingExactlyOneExpertise);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneExpertise,
			'expertise',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addExpertiseToObjectStorageHoldingExpertise() {
		$expertise = new \PHTH\Dracv\Domain\Model\Expertise();
		$expertiseObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$expertiseObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($expertise));
		$this->inject($this->subject, 'expertise', $expertiseObjectStorageMock);

		$this->subject->addExpertise($expertise);
	}

	/**
	 * @test
	 */
	public function removeExpertiseFromObjectStorageHoldingExpertise() {
		$expertise = new \PHTH\Dracv\Domain\Model\Expertise();
		$expertiseObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$expertiseObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($expertise));
		$this->inject($this->subject, 'expertise', $expertiseObjectStorageMock);

		$this->subject->removeExpertise($expertise);

	}

	/**
	 * @test
	 */
	public function getHobbyReturnsInitialValueForHobby() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getHobby()
		);
	}

	/**
	 * @test
	 */
	public function setHobbyForObjectStorageContainingHobbySetsHobby() {
		$hobby = new \PHTH\Dracv\Domain\Model\Hobby();
		$objectStorageHoldingExactlyOneHobby = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneHobby->attach($hobby);
		$this->subject->setHobby($objectStorageHoldingExactlyOneHobby);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneHobby,
			'hobby',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addHobbyToObjectStorageHoldingHobby() {
		$hobby = new \PHTH\Dracv\Domain\Model\Hobby();
		$hobbyObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$hobbyObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($hobby));
		$this->inject($this->subject, 'hobby', $hobbyObjectStorageMock);

		$this->subject->addHobby($hobby);
	}

	/**
	 * @test
	 */
	public function removeHobbyFromObjectStorageHoldingHobby() {
		$hobby = new \PHTH\Dracv\Domain\Model\Hobby();
		$hobbyObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$hobbyObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($hobby));
		$this->inject($this->subject, 'hobby', $hobbyObjectStorageMock);

		$this->subject->removeHobby($hobby);

	}

	/**
	 * @test
	 */
	public function getInterestReturnsInitialValueForInterest() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getInterest()
		);
	}

	/**
	 * @test
	 */
	public function setInterestForObjectStorageContainingInterestSetsInterest() {
		$interest = new \PHTH\Dracv\Domain\Model\Interest();
		$objectStorageHoldingExactlyOneInterest = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneInterest->attach($interest);
		$this->subject->setInterest($objectStorageHoldingExactlyOneInterest);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneInterest,
			'interest',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addInterestToObjectStorageHoldingInterest() {
		$interest = new \PHTH\Dracv\Domain\Model\Interest();
		$interestObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$interestObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($interest));
		$this->inject($this->subject, 'interest', $interestObjectStorageMock);

		$this->subject->addInterest($interest);
	}

	/**
	 * @test
	 */
	public function removeInterestFromObjectStorageHoldingInterest() {
		$interest = new \PHTH\Dracv\Domain\Model\Interest();
		$interestObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$interestObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($interest));
		$this->inject($this->subject, 'interest', $interestObjectStorageMock);

		$this->subject->removeInterest($interest);

	}

	/**
	 * @test
	 */
	public function getCoworkersReturnsInitialValueForVcard() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getCoworkers()
		);
	}

	/**
	 * @test
	 */
	public function setCoworkersForObjectStorageContainingVcardSetsCoworkers() {
		$coworker = new \PHTH\Dracv\Domain\Model\Vcard();
		$objectStorageHoldingExactlyOneCoworkers = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneCoworkers->attach($coworker);
		$this->subject->setCoworkers($objectStorageHoldingExactlyOneCoworkers);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneCoworkers,
			'coworkers',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addCoworkerToObjectStorageHoldingCoworkers() {
		$coworker = new \PHTH\Dracv\Domain\Model\Vcard();
		$coworkersObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$coworkersObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($coworker));
		$this->inject($this->subject, 'coworkers', $coworkersObjectStorageMock);

		$this->subject->addCoworker($coworker);
	}

	/**
	 * @test
	 */
	public function removeCoworkerFromObjectStorageHoldingCoworkers() {
		$coworker = new \PHTH\Dracv\Domain\Model\Vcard();
		$coworkersObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$coworkersObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($coworker));
		$this->inject($this->subject, 'coworkers', $coworkersObjectStorageMock);

		$this->subject->removeCoworker($coworker);

	}

	/**
	 * @test
	 */
	public function getImppReturnsInitialValueForImpp() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getImpp()
		);
	}

	/**
	 * @test
	 */
	public function setImppForObjectStorageContainingImppSetsImpp() {
		$impp = new \PHTH\Dracv\Domain\Model\Impp();
		$objectStorageHoldingExactlyOneImpp = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneImpp->attach($impp);
		$this->subject->setImpp($objectStorageHoldingExactlyOneImpp);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneImpp,
			'impp',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addImppToObjectStorageHoldingImpp() {
		$impp = new \PHTH\Dracv\Domain\Model\Impp();
		$imppObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$imppObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($impp));
		$this->inject($this->subject, 'impp', $imppObjectStorageMock);

		$this->subject->addImpp($impp);
	}

	/**
	 * @test
	 */
	public function removeImppFromObjectStorageHoldingImpp() {
		$impp = new \PHTH\Dracv\Domain\Model\Impp();
		$imppObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$imppObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($impp));
		$this->inject($this->subject, 'impp', $imppObjectStorageMock);

		$this->subject->removeImpp($impp);

	}
}
