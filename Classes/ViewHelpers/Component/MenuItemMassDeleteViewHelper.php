<?php
namespace TYPO3\CMS\Vidi\ViewHelpers\Component;
/***************************************************************
*  Copyright notice
*
*  (c) 2013 Fabien Udriot <fabien.udriot@typo3.org>
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
use TYPO3\CMS\Backend\Utility\IconUtility;

/**
 * View helper which renders a "mass delete" menu item to be placed in the grid menu.
 */
class MenuItemMassDeleteViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 * @var \TYPO3\CMS\Vidi\ViewHelpers\Uri\MassDeleteViewHelper
	 * @inject
	 */
	protected $uriMassDeleteViewHelper;

	/**
	 * Renders a "mass delete" menu item to be placed in the grid menu.
	 *
	 * @return string
	 */
	public function render() {
		return sprintf('<li><a href="%s" class="mass-delete" >%s Delete</a>',
			$this->uriMassDeleteViewHelper->render(),
			IconUtility::getSpriteIcon('actions-edit-delete')
		);
	}
}
