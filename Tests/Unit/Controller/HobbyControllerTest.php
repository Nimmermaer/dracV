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
 * Test case for class PHTH\Dracv\Controller\HobbyController.
 *
 * @author Michael Blunck <michael.blunck@phth.de>
 */
class HobbyControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \PHTH\Dracv\Controller\HobbyController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('PHTH\\Dracv\\Controller\\HobbyController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllHobbiesFromRepositoryAndAssignsThemToView() {

		$allHobbies = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$hobbyRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\HobbyRepository', array('findAll'), array(), '', FALSE);
		$hobbyRepository->expects($this->once())->method('findAll')->will($this->returnValue($allHobbies));
		$this->inject($this->subject, 'hobbyRepository', $hobbyRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('hobbies', $allHobbies);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenHobbyToView() {
		$hobby = new \PHTH\Dracv\Domain\Model\Hobby();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('hobby', $hobby);

		$this->subject->showAction($hobby);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenHobbyToView() {
		$hobby = new \PHTH\Dracv\Domain\Model\Hobby();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newHobby', $hobby);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($hobby);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenHobbyToHobbyRepository() {
		$hobby = new \PHTH\Dracv\Domain\Model\Hobby();

		$hobbyRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\HobbyRepository', array('add'), array(), '', FALSE);
		$hobbyRepository->expects($this->once())->method('add')->with($hobby);
		$this->inject($this->subject, 'hobbyRepository', $hobbyRepository);

		$this->subject->createAction($hobby);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenHobbyToView() {
		$hobby = new \PHTH\Dracv\Domain\Model\Hobby();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('hobby', $hobby);

		$this->subject->editAction($hobby);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenHobbyInHobbyRepository() {
		$hobby = new \PHTH\Dracv\Domain\Model\Hobby();

		$hobbyRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\HobbyRepository', array('update'), array(), '', FALSE);
		$hobbyRepository->expects($this->once())->method('update')->with($hobby);
		$this->inject($this->subject, 'hobbyRepository', $hobbyRepository);

		$this->subject->updateAction($hobby);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenHobbyFromHobbyRepository() {
		$hobby = new \PHTH\Dracv\Domain\Model\Hobby();

		$hobbyRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\HobbyRepository', array('remove'), array(), '', FALSE);
		$hobbyRepository->expects($this->once())->method('remove')->with($hobby);
		$this->inject($this->subject, 'hobbyRepository', $hobbyRepository);

		$this->subject->deleteAction($hobby);
	}
}
