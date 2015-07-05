<?php
namespace PHTH\Dracv\Tests\Unit\Controller;
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
 * Test case for class PHTH\Dracv\Controller\VersionController.
 *
 * @author Michael Blunck <michael.blunck@phth.de>
 */
class VersionControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \PHTH\Dracv\Controller\VersionController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('PHTH\\Dracv\\Controller\\VersionController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllVersionsFromRepositoryAndAssignsThemToView() {

		$allVersions = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$versionRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\VersionRepository', array('findAll'), array(), '', FALSE);
		$versionRepository->expects($this->once())->method('findAll')->will($this->returnValue($allVersions));
		$this->inject($this->subject, 'versionRepository', $versionRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('versions', $allVersions);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenVersionToView() {
		$version = new \PHTH\Dracv\Domain\Model\Version();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('version', $version);

		$this->subject->showAction($version);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenVersionToView() {
		$version = new \PHTH\Dracv\Domain\Model\Version();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newVersion', $version);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($version);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenVersionToVersionRepository() {
		$version = new \PHTH\Dracv\Domain\Model\Version();

		$versionRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\VersionRepository', array('add'), array(), '', FALSE);
		$versionRepository->expects($this->once())->method('add')->with($version);
		$this->inject($this->subject, 'versionRepository', $versionRepository);

		$this->subject->createAction($version);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenVersionToView() {
		$version = new \PHTH\Dracv\Domain\Model\Version();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('version', $version);

		$this->subject->editAction($version);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenVersionInVersionRepository() {
		$version = new \PHTH\Dracv\Domain\Model\Version();

		$versionRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\VersionRepository', array('update'), array(), '', FALSE);
		$versionRepository->expects($this->once())->method('update')->with($version);
		$this->inject($this->subject, 'versionRepository', $versionRepository);

		$this->subject->updateAction($version);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenVersionFromVersionRepository() {
		$version = new \PHTH\Dracv\Domain\Model\Version();

		$versionRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\VersionRepository', array('remove'), array(), '', FALSE);
		$versionRepository->expects($this->once())->method('remove')->with($version);
		$this->inject($this->subject, 'versionRepository', $versionRepository);

		$this->subject->deleteAction($version);
	}
}
