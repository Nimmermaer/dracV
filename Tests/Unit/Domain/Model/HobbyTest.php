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
 * Test case for class \PHTH\Dracv\Domain\Model\Hobby.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Michael Blunck <michael.blunck@phth.de>
 */
class HobbyTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \PHTH\Dracv\Domain\Model\Hobby
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \PHTH\Dracv\Domain\Model\Hobby();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() {
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
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
	public function getJobrelatedReturnsInitialValueForBoolean() {
		$this->assertSame(
			FALSE,
			$this->subject->getJobrelated()
		);
	}

	/**
	 * @test
	 */
	public function setJobrelatedForBooleanSetsJobrelated() {
		$this->subject->setJobrelated(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'jobrelated',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFrequencyReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getFrequency()
		);
	}

	/**
	 * @test
	 */
	public function setFrequencyForStringSetsFrequency() {
		$this->subject->setFrequency('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'frequency',
			$this->subject
		);
	}
}
