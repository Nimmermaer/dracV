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
 * Test case for class PHTH\Dracv\Controller\SoundController.
 *
 * @author Michael Blunck <michael.blunck@phth.de>
 */
class SoundControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \PHTH\Dracv\Controller\SoundController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('PHTH\\Dracv\\Controller\\SoundController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllSoundsFromRepositoryAndAssignsThemToView() {

		$allSounds = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$soundRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\SoundRepository', array('findAll'), array(), '', FALSE);
		$soundRepository->expects($this->once())->method('findAll')->will($this->returnValue($allSounds));
		$this->inject($this->subject, 'soundRepository', $soundRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('sounds', $allSounds);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenSoundToView() {
		$sound = new \PHTH\Dracv\Domain\Model\Sound();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('sound', $sound);

		$this->subject->showAction($sound);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenSoundToView() {
		$sound = new \PHTH\Dracv\Domain\Model\Sound();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newSound', $sound);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($sound);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenSoundToSoundRepository() {
		$sound = new \PHTH\Dracv\Domain\Model\Sound();

		$soundRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\SoundRepository', array('add'), array(), '', FALSE);
		$soundRepository->expects($this->once())->method('add')->with($sound);
		$this->inject($this->subject, 'soundRepository', $soundRepository);

		$this->subject->createAction($sound);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenSoundToView() {
		$sound = new \PHTH\Dracv\Domain\Model\Sound();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('sound', $sound);

		$this->subject->editAction($sound);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenSoundInSoundRepository() {
		$sound = new \PHTH\Dracv\Domain\Model\Sound();

		$soundRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\SoundRepository', array('update'), array(), '', FALSE);
		$soundRepository->expects($this->once())->method('update')->with($sound);
		$this->inject($this->subject, 'soundRepository', $soundRepository);

		$this->subject->updateAction($sound);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenSoundFromSoundRepository() {
		$sound = new \PHTH\Dracv\Domain\Model\Sound();

		$soundRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\SoundRepository', array('remove'), array(), '', FALSE);
		$soundRepository->expects($this->once())->method('remove')->with($sound);
		$this->inject($this->subject, 'soundRepository', $soundRepository);

		$this->subject->deleteAction($sound);
	}
}
