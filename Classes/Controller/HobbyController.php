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
 * HobbyController
 */
class HobbyController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * hobbyRepository
	 * 
	 * @var \PHTH\Dracv\Domain\Repository\HobbyRepository
	 * @inject
	 */
	protected $hobbyRepository = NULL;

	/**
	 * action list
	 * 
	 * @return void
	 */
	public function listAction() {
		$hobbies = $this->hobbyRepository->findAll();
		$this->view->assign('hobbies', $hobbies);
	}

	/**
	 * action show
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Hobby $hobby
	 * @return void
	 */
	public function showAction(\PHTH\Dracv\Domain\Model\Hobby $hobby) {
		$this->view->assign('hobby', $hobby);
	}

	/**
	 * action new
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Hobby $newHobby
	 * @ignorevalidation $newHobby
	 * @return void
	 */
	public function newAction(\PHTH\Dracv\Domain\Model\Hobby $newHobby = NULL) {
		$this->view->assign('newHobby', $newHobby);
	}

	/**
	 * action create
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Hobby $newHobby
	 * @return void
	 */
	public function createAction(\PHTH\Dracv\Domain\Model\Hobby $newHobby) {
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->hobbyRepository->add($newHobby);
		$this->redirect('list');
	}

	/**
	 * action edit
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Hobby $hobby
	 * @ignorevalidation $hobby
	 * @return void
	 */
	public function editAction(\PHTH\Dracv\Domain\Model\Hobby $hobby) {
		$this->view->assign('hobby', $hobby);
	}

	/**
	 * action update
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Hobby $hobby
	 * @return void
	 */
	public function updateAction(\PHTH\Dracv\Domain\Model\Hobby $hobby) {
		$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->hobbyRepository->update($hobby);
		$this->redirect('list');
	}

	/**
	 * action delete
	 * 
	 * @param \PHTH\Dracv\Domain\Model\Hobby $hobby
	 * @return void
	 */
	public function deleteAction(\PHTH\Dracv\Domain\Model\Hobby $hobby) {
		$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->hobbyRepository->remove($hobby);
		$this->redirect('list');
	}

}