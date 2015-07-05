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
 * Test case for class PHTH\Dracv\Controller\ExpertiseController.
 *
 * @author Michael Blunck <michael.blunck@phth.de>
 */
class ExpertiseControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \PHTH\Dracv\Controller\ExpertiseController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('PHTH\\Dracv\\Controller\\ExpertiseController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllExpertisesFromRepositoryAndAssignsThemToView() {

		$allExpertises = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$expertiseRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\ExpertiseRepository', array('findAll'), array(), '', FALSE);
		$expertiseRepository->expects($this->once())->method('findAll')->will($this->returnValue($allExpertises));
		$this->inject($this->subject, 'expertiseRepository', $expertiseRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('expertises', $allExpertises);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenExpertiseToView() {
		$expertise = new \PHTH\Dracv\Domain\Model\Expertise();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('expertise', $expertise);

		$this->subject->showAction($expertise);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenExpertiseToView() {
		$expertise = new \PHTH\Dracv\Domain\Model\Expertise();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newExpertise', $expertise);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($expertise);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenExpertiseToExpertiseRepository() {
		$expertise = new \PHTH\Dracv\Domain\Model\Expertise();

		$expertiseRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\ExpertiseRepository', array('add'), array(), '', FALSE);
		$expertiseRepository->expects($this->once())->method('add')->with($expertise);
		$this->inject($this->subject, 'expertiseRepository', $expertiseRepository);

		$this->subject->createAction($expertise);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenExpertiseToView() {
		$expertise = new \PHTH\Dracv\Domain\Model\Expertise();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('expertise', $expertise);

		$this->subject->editAction($expertise);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenExpertiseInExpertiseRepository() {
		$expertise = new \PHTH\Dracv\Domain\Model\Expertise();

		$expertiseRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\ExpertiseRepository', array('update'), array(), '', FALSE);
		$expertiseRepository->expects($this->once())->method('update')->with($expertise);
		$this->inject($this->subject, 'expertiseRepository', $expertiseRepository);

		$this->subject->updateAction($expertise);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenExpertiseFromExpertiseRepository() {
		$expertise = new \PHTH\Dracv\Domain\Model\Expertise();

		$expertiseRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\ExpertiseRepository', array('remove'), array(), '', FALSE);
		$expertiseRepository->expects($this->once())->method('remove')->with($expertise);
		$this->inject($this->subject, 'expertiseRepository', $expertiseRepository);

		$this->subject->deleteAction($expertise);
	}
}
