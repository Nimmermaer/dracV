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
 * Test case for class PHTH\Dracv\Controller\RelatedController.
 *
 * @author Michael Blunck <michael.blunck@phth.de>
 */
class RelatedControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \PHTH\Dracv\Controller\RelatedController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('PHTH\\Dracv\\Controller\\RelatedController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllRelatedsFromRepositoryAndAssignsThemToView() {

		$allRelateds = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$relatedRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\RelatedRepository', array('findAll'), array(), '', FALSE);
		$relatedRepository->expects($this->once())->method('findAll')->will($this->returnValue($allRelateds));
		$this->inject($this->subject, 'relatedRepository', $relatedRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('relateds', $allRelateds);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenRelatedToView() {
		$related = new \PHTH\Dracv\Domain\Model\Related();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('related', $related);

		$this->subject->showAction($related);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenRelatedToView() {
		$related = new \PHTH\Dracv\Domain\Model\Related();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newRelated', $related);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($related);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenRelatedToRelatedRepository() {
		$related = new \PHTH\Dracv\Domain\Model\Related();

		$relatedRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\RelatedRepository', array('add'), array(), '', FALSE);
		$relatedRepository->expects($this->once())->method('add')->with($related);
		$this->inject($this->subject, 'relatedRepository', $relatedRepository);

		$this->subject->createAction($related);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenRelatedToView() {
		$related = new \PHTH\Dracv\Domain\Model\Related();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('related', $related);

		$this->subject->editAction($related);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenRelatedInRelatedRepository() {
		$related = new \PHTH\Dracv\Domain\Model\Related();

		$relatedRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\RelatedRepository', array('update'), array(), '', FALSE);
		$relatedRepository->expects($this->once())->method('update')->with($related);
		$this->inject($this->subject, 'relatedRepository', $relatedRepository);

		$this->subject->updateAction($related);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenRelatedFromRelatedRepository() {
		$related = new \PHTH\Dracv\Domain\Model\Related();

		$relatedRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\RelatedRepository', array('remove'), array(), '', FALSE);
		$relatedRepository->expects($this->once())->method('remove')->with($related);
		$this->inject($this->subject, 'relatedRepository', $relatedRepository);

		$this->subject->deleteAction($related);
	}
}
