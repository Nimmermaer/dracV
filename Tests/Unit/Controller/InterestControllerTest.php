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
 * Test case for class PHTH\Dracv\Controller\InterestController.
 *
 * @author Michael Blunck <michael.blunck@phth.de>
 */
class InterestControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \PHTH\Dracv\Controller\InterestController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('PHTH\\Dracv\\Controller\\InterestController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllInterestsFromRepositoryAndAssignsThemToView() {

		$allInterests = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$interestRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\InterestRepository', array('findAll'), array(), '', FALSE);
		$interestRepository->expects($this->once())->method('findAll')->will($this->returnValue($allInterests));
		$this->inject($this->subject, 'interestRepository', $interestRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('interests', $allInterests);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenInterestToView() {
		$interest = new \PHTH\Dracv\Domain\Model\Interest();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('interest', $interest);

		$this->subject->showAction($interest);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenInterestToView() {
		$interest = new \PHTH\Dracv\Domain\Model\Interest();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newInterest', $interest);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($interest);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenInterestToInterestRepository() {
		$interest = new \PHTH\Dracv\Domain\Model\Interest();

		$interestRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\InterestRepository', array('add'), array(), '', FALSE);
		$interestRepository->expects($this->once())->method('add')->with($interest);
		$this->inject($this->subject, 'interestRepository', $interestRepository);

		$this->subject->createAction($interest);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenInterestToView() {
		$interest = new \PHTH\Dracv\Domain\Model\Interest();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('interest', $interest);

		$this->subject->editAction($interest);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenInterestInInterestRepository() {
		$interest = new \PHTH\Dracv\Domain\Model\Interest();

		$interestRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\InterestRepository', array('update'), array(), '', FALSE);
		$interestRepository->expects($this->once())->method('update')->with($interest);
		$this->inject($this->subject, 'interestRepository', $interestRepository);

		$this->subject->updateAction($interest);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenInterestFromInterestRepository() {
		$interest = new \PHTH\Dracv\Domain\Model\Interest();

		$interestRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\InterestRepository', array('remove'), array(), '', FALSE);
		$interestRepository->expects($this->once())->method('remove')->with($interest);
		$this->inject($this->subject, 'interestRepository', $interestRepository);

		$this->subject->deleteAction($interest);
	}
}
