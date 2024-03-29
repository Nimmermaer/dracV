<?php
namespace PHTH\Dracv\Controller;


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
 * RoleController
 */
class RoleController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * roleRepository
	 * 
	 * @var \PHTH\Dracv\Domain\Repository\RoleRepository
	 * @inject
	 */
	protected $roleRepository = NULL;

	/**
	 * action list
	 * 
	 * @return void
	 */
	public function listAction() {
		$roles = $this->roleRepository->findAll();
		$this->view->assign('roles', $roles);
	}

	/**
	 * action show
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Role $role
	 * @return void
	 */
	public function showAction(\PHTH\Dracv\Domain\Model\Role $role) {
		$this->view->assign('role', $role);
	}

	/**
	 * action new
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Role $newRole
	 * @ignorevalidation $newRole
	 * @return void
	 */
	public function newAction(\PHTH\Dracv\Domain\Model\Role $newRole = NULL) {
		$this->view->assign('newRole', $newRole);
	}

	/**
	 * action create
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Role $newRole
	 * @return void
	 */
	public function createAction(\PHTH\Dracv\Domain\Model\Role $newRole) {
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->roleRepository->add($newRole);
		$this->redirect('list');
	}

	/**
	 * action edit
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Role $role
	 * @ignorevalidation $role
	 * @return void
	 */
	public function editAction(\PHTH\Dracv\Domain\Model\Role $role) {
		$this->view->assign('role', $role);
	}

	/**
	 * action update
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Role $role
	 * @return void
	 */
	public function updateAction(\PHTH\Dracv\Domain\Model\Role $role) {
		$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->roleRepository->update($role);
		$this->redirect('list');
	}

	/**
	 * action delete
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Role $role
	 * @return void
	 */
	public function deleteAction(\PHTH\Dracv\Domain\Model\Role $role) {
		$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->roleRepository->remove($role);
		$this->redirect('list');
	}

}