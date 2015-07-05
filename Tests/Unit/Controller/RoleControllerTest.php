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
 * Test case for class PHTH\Dracv\Controller\RoleController.
 *
 * @author Michael Blunck <michael.blunck@phth.de>
 */
class RoleControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \PHTH\Dracv\Controller\RoleController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('PHTH\\Dracv\\Controller\\RoleController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllRolesFromRepositoryAndAssignsThemToView() {

		$allRoles = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$roleRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\RoleRepository', array('findAll'), array(), '', FALSE);
		$roleRepository->expects($this->once())->method('findAll')->will($this->returnValue($allRoles));
		$this->inject($this->subject, 'roleRepository', $roleRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('roles', $allRoles);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenRoleToView() {
		$role = new \PHTH\Dracv\Domain\Model\Role();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('role', $role);

		$this->subject->showAction($role);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenRoleToView() {
		$role = new \PHTH\Dracv\Domain\Model\Role();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newRole', $role);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($role);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenRoleToRoleRepository() {
		$role = new \PHTH\Dracv\Domain\Model\Role();

		$roleRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\RoleRepository', array('add'), array(), '', FALSE);
		$roleRepository->expects($this->once())->method('add')->with($role);
		$this->inject($this->subject, 'roleRepository', $roleRepository);

		$this->subject->createAction($role);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenRoleToView() {
		$role = new \PHTH\Dracv\Domain\Model\Role();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('role', $role);

		$this->subject->editAction($role);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenRoleInRoleRepository() {
		$role = new \PHTH\Dracv\Domain\Model\Role();

		$roleRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\RoleRepository', array('update'), array(), '', FALSE);
		$roleRepository->expects($this->once())->method('update')->with($role);
		$this->inject($this->subject, 'roleRepository', $roleRepository);

		$this->subject->updateAction($role);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenRoleFromRoleRepository() {
		$role = new \PHTH\Dracv\Domain\Model\Role();

		$roleRepository = $this->getMock('PHTH\\Dracv\\Domain\\Repository\\RoleRepository', array('remove'), array(), '', FALSE);
		$roleRepository->expects($this->once())->method('remove')->with($role);
		$this->inject($this->subject, 'roleRepository', $roleRepository);

		$this->subject->deleteAction($role);
	}
}
