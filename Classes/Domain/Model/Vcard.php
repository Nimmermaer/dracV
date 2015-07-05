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
 * Vcard
 */
class Vcard extends \TYPO3\CMS\Extbase\Domain\Model\FrontendUser {

	/**
	 * A URL to use for sending a scheduling request to the person's calendar.
	 * 
	 * @var string
	 */
	protected $caladruri = '';

	/**
	 * A URL to the person's calendar.
	 * 
	 * @var string
	 */
	protected $caluri = '';

	/**
	 * Describes the sensitivity of the information in the vCard.
	 * 
	 * @var integer
	 */
	protected $class = 0;

	/**
	 * Used for synchronizing different revisions of the same vCard.
	 * 
	 * @var string
	 */
	protected $clientpidmap = '';

	/**
	 * Defines a URL that shows when the person is "free" or "busy" on their calendar.
	 * 
	 * @var string
	 */
	protected $fburl = '';

	/**
	 * The formatted name string associated with the vCard object.
	 * 
	 * @var string
	 */
	protected $fn = '';

	/**
	 * geolatitude
	 * 
	 * @var string
	 */
	protected $geolatitude = '';

	/**
	 * geolongitude
	 * 
	 * @var string
	 */
	protected $geolongitude = '';

	/**
	 * The public encryption key associated with the vCard object. It may point to an
	 * external URL, may be plain text, or may be embedded in the vCard as a Base64
	 * encoded block of text.
	 * 
	 * @var string
	 */
	protected $vcardKey = '';

	/**
	 * Defines the type of entity that this vCard represents: 'application',
	 * 'individual, 'group', 'location' or 'organization'; 'x-*' values may be used for
	 * experimental purposes.[5][6]
	 * 
	 * @var string
	 */
	protected $kind = '';

	/**
	 * Type of email program used.
	 * 
	 * @var string
	 */
	protected $mailer = '';

	/**
	* Defines a member that is part of the group that this vCard represents.
	* Acceptable values include:
	a "mailto:" URL containing an email address
	a UID
	* which references the member's own vCard
	The KIND property must be set to "group"
	* in order to use this property.
	* 
	* @var string
	*/
	protected $member = '';

	/**
	 * A structured representation of the name of the person, place or thing associated
	 * with the vCard object.
	 * 
	 * @var string
	 */
	protected $n = '';

	/**
	 * Specifies supplemental information or a comment that is associated with the
	 * vCard.
	 * 
	 * @var string
	 */
	protected $note = '';

	/**
	 * photo
	 * 
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $photo = NULL;

	/**
	 * The identifier for the product that created the vCard object.
	 * 
	 * @var string
	 */
	protected $prodid = '';

	/**
	 * States that the vCard is a vCard.
	 * 
	 * @var string
	 */
	protected $profile = '';

	/**
	 * Defines a string that should be used when an application sorts this vCard in
	 * some way.
	 * Not supported in version 4.0. Instead, this information is stored
	 * in the SORT-AS parameter of the N and/or ORG properties.
	 * 
	 * @var string
	 */
	protected $sortstring = '';

	/**
	 *  URL that can be used to get the latest version of this vCard.
	 * 
	 * @var string
	 */
	protected $source = '';

	/**
	 * The time zone of the vCard object.
	 * 
	 * @var string
	 */
	protected $timezone = '';

	/**
	 * Any XML data that is attached to the vCard. This is used if the vCard was
	 * encoded in XML (xCard standard) and the XML document contained elements which
	 * are not part of the xCard standard.
	 * 
	 * @var string
	 */
	protected $xml = '';

	/**
	 * The location of the individual's birth. RFC 6474
	 * 
	 * @var string
	 */
	protected $birthplace = '';

	/**
	 * The individual's time of death.
	 * 
	 * @var \DateTime
	 */
	protected $deathdate = NULL;

	/**
	 * The location of the individual death.
	 * 
	 * @var \DateTime
	 */
	protected $deathplace = NULL;

	/**
	 * category
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Categories>
	 */
	protected $category = NULL;

	/**
	 * agent
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Vcard>
	 */
	protected $agent = NULL;

	/**
	 * organization
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Organization>
	 */
	protected $organization = NULL;

	/**
	 * related
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Related>
	 */
	protected $related = NULL;

	/**
	 * role
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Role>
	 */
	protected $role = NULL;

	/**
	 * sound
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Sound>
	 */
	protected $sound = NULL;

	/**
	 * version
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Version>
	 */
	protected $version = NULL;

	/**
	 * expertise
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Expertise>
	 */
	protected $expertise = NULL;

	/**
	 * hobby
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Hobby>
	 */
	protected $hobby = NULL;

	/**
	 * interest
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Interest>
	 */
	protected $interest = NULL;

	/**
	 * coworkers
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Vcard>
	 */
	protected $coworkers = NULL;

	/**
	 * impp
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Impp>
	 * @cascade remove
	 */
	protected $impp = NULL;

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
		$this->category = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->agent = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->organization = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->related = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->role = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->sound = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->version = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->expertise = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->hobby = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->interest = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->coworkers = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->impp = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the caladruri
	 * 
	 * @return string $caladruri
	 */
	public function getCaladruri() {
		return $this->caladruri;
	}

	/**
	 * Sets the caladruri
	 * 
	 * @param string $caladruri
	 * @return void
	 */
	public function setCaladruri($caladruri) {
		$this->caladruri = $caladruri;
	}

	/**
	 * Returns the caluri
	 * 
	 * @return string $caluri
	 */
	public function getCaluri() {
		return $this->caluri;
	}

	/**
	 * Sets the caluri
	 * 
	 * @param string $caluri
	 * @return void
	 */
	public function setCaluri($caluri) {
		$this->caluri = $caluri;
	}

	/**
	 * Returns the class
	 * 
	 * @return integer $class
	 */
	public function getClass() {
		return $this->class;
	}

	/**
	 * Sets the class
	 * 
	 * @param integer $class
	 * @return void
	 */
	public function setClass($class) {
		$this->class = $class;
	}

	/**
	 * Returns the clientpidmap
	 * 
	 * @return string $clientpidmap
	 */
	public function getClientpidmap() {
		return $this->clientpidmap;
	}

	/**
	 * Sets the clientpidmap
	 * 
	 * @param string $clientpidmap
	 * @return void
	 */
	public function setClientpidmap($clientpidmap) {
		$this->clientpidmap = $clientpidmap;
	}

	/**
	 * Returns the fburl
	 * 
	 * @return string $fburl
	 */
	public function getFburl() {
		return $this->fburl;
	}

	/**
	 * Sets the fburl
	 * 
	 * @param string $fburl
	 * @return void
	 */
	public function setFburl($fburl) {
		$this->fburl = $fburl;
	}

	/**
	 * Returns the fn
	 * 
	 * @return string $fn
	 */
	public function getFn() {
		return $this->fn;
	}

	/**
	 * Sets the fn
	 * 
	 * @param string $fn
	 * @return void
	 */
	public function setFn($fn) {
		$this->fn = $fn;
	}

	/**
	 * Returns the geolatitude
	 * 
	 * @return string $geolatitude
	 */
	public function getGeolatitude() {
		return $this->geolatitude;
	}

	/**
	 * Sets the geolatitude
	 * 
	 * @param string $geolatitude
	 * @return void
	 */
	public function setGeolatitude($geolatitude) {
		$this->geolatitude = $geolatitude;
	}

	/**
	 * Returns the geolongitude
	 * 
	 * @return string $geolongitude
	 */
	public function getGeolongitude() {
		return $this->geolongitude;
	}

	/**
	 * Sets the geolongitude
	 * 
	 * @param string $geolongitude
	 * @return void
	 */
	public function setGeolongitude($geolongitude) {
		$this->geolongitude = $geolongitude;
	}

	/**
	 * Returns the vcardKey
	 * 
	 * @return string $vcardKey
	 */
	public function getVcardKey() {
		return $this->vcardKey;
	}

	/**
	 * Sets the vcardKey
	 * 
	 * @param string $vcardKey
	 * @return void
	 */
	public function setVcardKey($vcardKey) {
		$this->vcardKey = $vcardKey;
	}

	/**
	 * Returns the kind
	 * 
	 * @return string $kind
	 */
	public function getKind() {
		return $this->kind;
	}

	/**
	 * Sets the kind
	 * 
	 * @param string $kind
	 * @return void
	 */
	public function setKind($kind) {
		$this->kind = $kind;
	}

	/**
	 * Returns the mailer
	 * 
	 * @return string $mailer
	 */
	public function getMailer() {
		return $this->mailer;
	}

	/**
	 * Sets the mailer
	 * 
	 * @param string $mailer
	 * @return void
	 */
	public function setMailer($mailer) {
		$this->mailer = $mailer;
	}

	/**
	 * Returns the member
	 * 
	 * @return string $member
	 */
	public function getMember() {
		return $this->member;
	}

	/**
	 * Sets the member
	 * 
	 * @param string $member
	 * @return void
	 */
	public function setMember($member) {
		$this->member = $member;
	}

	/**
	 * Returns the n
	 * 
	 * @return string $n
	 */
	public function getN() {
		return $this->n;
	}

	/**
	 * Sets the n
	 * 
	 * @param string $n
	 * @return void
	 */
	public function setN($n) {
		$this->n = $n;
	}

	/**
	 * Returns the note
	 * 
	 * @return string $note
	 */
	public function getNote() {
		return $this->note;
	}

	/**
	 * Sets the note
	 * 
	 * @param string $note
	 * @return void
	 */
	public function setNote($note) {
		$this->note = $note;
	}

	/**
	 * Returns the photo
	 * 
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
	 */
	public function getPhoto() {
		return $this->photo;
	}

	/**
	 * Sets the photo
	 * 
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
	 * @return void
	 */
	public function setPhoto(\TYPO3\CMS\Extbase\Domain\Model\FileReference $photo) {
		$this->photo = $photo;
	}

	/**
	 * Returns the prodid
	 * 
	 * @return string $prodid
	 */
	public function getProdid() {
		return $this->prodid;
	}

	/**
	 * Sets the prodid
	 * 
	 * @param string $prodid
	 * @return void
	 */
	public function setProdid($prodid) {
		$this->prodid = $prodid;
	}

	/**
	 * Returns the profile
	 * 
	 * @return string $profile
	 */
	public function getProfile() {
		return $this->profile;
	}

	/**
	 * Sets the profile
	 * 
	 * @param string $profile
	 * @return void
	 */
	public function setProfile($profile) {
		$this->profile = $profile;
	}

	/**
	 * Returns the sortstring
	 * 
	 * @return string $sortstring
	 */
	public function getSortstring() {
		return $this->sortstring;
	}

	/**
	 * Sets the sortstring
	 * 
	 * @param string $sortstring
	 * @return void
	 */
	public function setSortstring($sortstring) {
		$this->sortstring = $sortstring;
	}

	/**
	 * Returns the source
	 * 
	 * @return string $source
	 */
	public function getSource() {
		return $this->source;
	}

	/**
	 * Sets the source
	 * 
	 * @param string $source
	 * @return void
	 */
	public function setSource($source) {
		$this->source = $source;
	}

	/**
	 * Returns the timezone
	 * 
	 * @return string $timezone
	 */
	public function getTimezone() {
		return $this->timezone;
	}

	/**
	 * Sets the timezone
	 * 
	 * @param string $timezone
	 * @return void
	 */
	public function setTimezone($timezone) {
		$this->timezone = $timezone;
	}

	/**
	 * Returns the xml
	 * 
	 * @return string $xml
	 */
	public function getXml() {
		return $this->xml;
	}

	/**
	 * Sets the xml
	 * 
	 * @param string $xml
	 * @return void
	 */
	public function setXml($xml) {
		$this->xml = $xml;
	}

	/**
	 * Returns the birthplace
	 * 
	 * @return string $birthplace
	 */
	public function getBirthplace() {
		return $this->birthplace;
	}

	/**
	 * Sets the birthplace
	 * 
	 * @param string $birthplace
	 * @return void
	 */
	public function setBirthplace($birthplace) {
		$this->birthplace = $birthplace;
	}

	/**
	 * Returns the deathdate
	 * 
	 * @return \DateTime $deathdate
	 */
	public function getDeathdate() {
		return $this->deathdate;
	}

	/**
	 * Sets the deathdate
	 * 
	 * @param \DateTime $deathdate
	 * @return void
	 */
	public function setDeathdate(\DateTime $deathdate) {
		$this->deathdate = $deathdate;
	}

	/**
	 * Returns the deathplace
	 * 
	 * @return \DateTime $deathplace
	 */
	public function getDeathplace() {
		return $this->deathplace;
	}

	/**
	 * Sets the deathplace
	 * 
	 * @param \DateTime $deathplace
	 * @return void
	 */
	public function setDeathplace(\DateTime $deathplace) {
		$this->deathplace = $deathplace;
	}

	/**
	 * Adds a Categories
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Categories $category
	 * @return void
	 */
	public function addCategory(\PHTH\Dracv\Domain\Model\Categories $category) {
		$this->category->attach($category);
	}

	/**
	 * Removes a Categories
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Categories $categoryToRemove The Categories to be removed
	 * @return void
	 */
	public function removeCategory(\PHTH\Dracv\Domain\Model\Categories $categoryToRemove) {
		$this->category->detach($categoryToRemove);
	}

	/**
	 * Returns the category
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Categories> $category
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Sets the category
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Categories> $category
	 * @return void
	 */
	public function setCategory(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $category) {
		$this->category = $category;
	}

	/**
	 * Adds a Vcard
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Vcard $agent
	 * @return void
	 */
	public function addAgent(\PHTH\Dracv\Domain\Model\Vcard $agent) {
		$this->agent->attach($agent);
	}

	/**
	 * Removes a Vcard
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Vcard $agentToRemove The Vcard to be removed
	 * @return void
	 */
	public function removeAgent(\PHTH\Dracv\Domain\Model\Vcard $agentToRemove) {
		$this->agent->detach($agentToRemove);
	}

	/**
	 * Returns the agent
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Vcard> $agent
	 */
	public function getAgent() {
		return $this->agent;
	}

	/**
	 * Sets the agent
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Vcard> $agent
	 * @return void
	 */
	public function setAgent(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $agent) {
		$this->agent = $agent;
	}

	/**
	 * Adds a Organization
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Organization $organization
	 * @return void
	 */
	public function addOrganization(\PHTH\Dracv\Domain\Model\Organization $organization) {
		$this->organization->attach($organization);
	}

	/**
	 * Removes a Organization
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Organization $organizationToRemove The Organization to be removed
	 * @return void
	 */
	public function removeOrganization(\PHTH\Dracv\Domain\Model\Organization $organizationToRemove) {
		$this->organization->detach($organizationToRemove);
	}

	/**
	 * Returns the organization
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Organization> $organization
	 */
	public function getOrganization() {
		return $this->organization;
	}

	/**
	 * Sets the organization
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Organization> $organization
	 * @return void
	 */
	public function setOrganization(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $organization) {
		$this->organization = $organization;
	}

	/**
	 * Adds a Related
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Related $related
	 * @return void
	 */
	public function addRelated(\PHTH\Dracv\Domain\Model\Related $related) {
		$this->related->attach($related);
	}

	/**
	 * Removes a Related
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Related $relatedToRemove The Related to be removed
	 * @return void
	 */
	public function removeRelated(\PHTH\Dracv\Domain\Model\Related $relatedToRemove) {
		$this->related->detach($relatedToRemove);
	}

	/**
	 * Returns the related
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Related> $related
	 */
	public function getRelated() {
		return $this->related;
	}

	/**
	 * Sets the related
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Related> $related
	 * @return void
	 */
	public function setRelated(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $related) {
		$this->related = $related;
	}

	/**
	 * Adds a Role
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Role $role
	 * @return void
	 */
	public function addRole(\PHTH\Dracv\Domain\Model\Role $role) {
		$this->role->attach($role);
	}

	/**
	 * Removes a Role
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Role $roleToRemove The Role to be removed
	 * @return void
	 */
	public function removeRole(\PHTH\Dracv\Domain\Model\Role $roleToRemove) {
		$this->role->detach($roleToRemove);
	}

	/**
	 * Returns the role
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Role> $role
	 */
	public function getRole() {
		return $this->role;
	}

	/**
	 * Sets the role
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Role> $role
	 * @return void
	 */
	public function setRole(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $role) {
		$this->role = $role;
	}

	/**
	 * Adds a Sound
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Sound $sound
	 * @return void
	 */
	public function addSound(\PHTH\Dracv\Domain\Model\Sound $sound) {
		$this->sound->attach($sound);
	}

	/**
	 * Removes a Sound
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Sound $soundToRemove The Sound to be removed
	 * @return void
	 */
	public function removeSound(\PHTH\Dracv\Domain\Model\Sound $soundToRemove) {
		$this->sound->detach($soundToRemove);
	}

	/**
	 * Returns the sound
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Sound> $sound
	 */
	public function getSound() {
		return $this->sound;
	}

	/**
	 * Sets the sound
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Sound> $sound
	 * @return void
	 */
	public function setSound(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $sound) {
		$this->sound = $sound;
	}

	/**
	 * Adds a Version
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Version $version
	 * @return void
	 */
	public function addVersion(\PHTH\Dracv\Domain\Model\Version $version) {
		$this->version->attach($version);
	}

	/**
	 * Removes a Version
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Version $versionToRemove The Version to be removed
	 * @return void
	 */
	public function removeVersion(\PHTH\Dracv\Domain\Model\Version $versionToRemove) {
		$this->version->detach($versionToRemove);
	}

	/**
	 * Returns the version
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Version> $version
	 */
	public function getVersion() {
		return $this->version;
	}

	/**
	 * Sets the version
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Version> $version
	 * @return void
	 */
	public function setVersion(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $version) {
		$this->version = $version;
	}

	/**
	 * Adds a Expertise
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Expertise $expertise
	 * @return void
	 */
	public function addExpertise(\PHTH\Dracv\Domain\Model\Expertise $expertise) {
		$this->expertise->attach($expertise);
	}

	/**
	 * Removes a Expertise
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Expertise $expertiseToRemove The Expertise to be removed
	 * @return void
	 */
	public function removeExpertise(\PHTH\Dracv\Domain\Model\Expertise $expertiseToRemove) {
		$this->expertise->detach($expertiseToRemove);
	}

	/**
	 * Returns the expertise
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Expertise> $expertise
	 */
	public function getExpertise() {
		return $this->expertise;
	}

	/**
	 * Sets the expertise
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Expertise> $expertise
	 * @return void
	 */
	public function setExpertise(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $expertise) {
		$this->expertise = $expertise;
	}

	/**
	 * Adds a Hobby
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Hobby $hobby
	 * @return void
	 */
	public function addHobby(\PHTH\Dracv\Domain\Model\Hobby $hobby) {
		$this->hobby->attach($hobby);
	}

	/**
	 * Removes a Hobby
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Hobby $hobbyToRemove The Hobby to be removed
	 * @return void
	 */
	public function removeHobby(\PHTH\Dracv\Domain\Model\Hobby $hobbyToRemove) {
		$this->hobby->detach($hobbyToRemove);
	}

	/**
	 * Returns the hobby
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Hobby> $hobby
	 */
	public function getHobby() {
		return $this->hobby;
	}

	/**
	 * Sets the hobby
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Hobby> $hobby
	 * @return void
	 */
	public function setHobby(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $hobby) {
		$this->hobby = $hobby;
	}

	/**
	 * Adds a Interest
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Interest $interest
	 * @return void
	 */
	public function addInterest(\PHTH\Dracv\Domain\Model\Interest $interest) {
		$this->interest->attach($interest);
	}

	/**
	 * Removes a Interest
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Interest $interestToRemove The Interest to be removed
	 * @return void
	 */
	public function removeInterest(\PHTH\Dracv\Domain\Model\Interest $interestToRemove) {
		$this->interest->detach($interestToRemove);
	}

	/**
	 * Returns the interest
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Interest> $interest
	 */
	public function getInterest() {
		return $this->interest;
	}

	/**
	 * Sets the interest
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Interest> $interest
	 * @return void
	 */
	public function setInterest(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $interest) {
		$this->interest = $interest;
	}

	/**
	 * Adds a Vcard
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Vcard $coworker
	 * @return void
	 */
	public function addCoworker(\PHTH\Dracv\Domain\Model\Vcard $coworker) {
		$this->coworkers->attach($coworker);
	}

	/**
	 * Removes a Vcard
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Vcard $coworkerToRemove The Vcard to be removed
	 * @return void
	 */
	public function removeCoworker(\PHTH\Dracv\Domain\Model\Vcard $coworkerToRemove) {
		$this->coworkers->detach($coworkerToRemove);
	}

	/**
	 * Returns the coworkers
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Vcard> $coworkers
	 */
	public function getCoworkers() {
		return $this->coworkers;
	}

	/**
	 * Sets the coworkers
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Vcard> $coworkers
	 * @return void
	 */
	public function setCoworkers(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $coworkers) {
		$this->coworkers = $coworkers;
	}

	/**
	 * Adds a Impp
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Impp $impp
	 * @return void
	 */
	public function addImpp(\PHTH\Dracv\Domain\Model\Impp $impp) {
		$this->impp->attach($impp);
	}

	/**
	 * Removes a Impp
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Impp $imppToRemove The Impp to be removed
	 * @return void
	 */
	public function removeImpp(\PHTH\Dracv\Domain\Model\Impp $imppToRemove) {
		$this->impp->detach($imppToRemove);
	}

	/**
	 * Returns the impp
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Impp> $impp
	 */
	public function getImpp() {
		return $this->impp;
	}

	/**
	 * Sets the impp
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PHTH\Dracv\Domain\Model\Impp> $impp
	 * @return void
	 */
	public function setImpp(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $impp) {
		$this->impp = $impp;
	}

}