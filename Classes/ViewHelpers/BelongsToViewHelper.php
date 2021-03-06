<?php
namespace TYPO3\CMS\Vidi\ViewHelpers;
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

/**
 * View helper for telling whether a Content belongs to a Related Content.
 *
 * @category    ViewHelpers
 * @package     TYPO3
 * @subpackage  media
 * @author      Fabien Udriot <fabien.udriot@typo3.org>
 */
class BelongsToViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 * Tells whether a User belongs to a User Group.
	 *
	 * @param \TYPO3\CMS\Vidi\Domain\Model\Content $content
	 * @param string $relationProperty
	 * @param \TYPO3\CMS\Vidi\Domain\Model\Content $relatedContent
	 * @return boolean
	 */
	public function render($content, $relationProperty, $relatedContent) {

		// Build an array of user group uids
		$relatedContentsUid = array();
		foreach ($content[$relationProperty] as $_content) {
			$relatedContentsUid[] = $_content->getUid();
		}

		return in_array($relatedContent->getUid(), $relatedContentsUid);
	}
}
