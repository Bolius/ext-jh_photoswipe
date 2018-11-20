<?php
namespace Heilmann\JhPhotoswipe\ViewHelpers\Math;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016-2018 Jonathan Heilmann <mail@jonathan-heilmann.de>
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
 * Class DivisionViewHelper
 * @package Heilmann\JhPhotoswipe\ViewHelpers\Math
 */
class DivisionViewHelper extends \TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper
{

    /**
     * @param int $dividend
     * @param int $divisor
     * @return int
     */
    public function render($dividend, $divisor)
    {
        if ($divisor === 0)
            return 0;

        return ($dividend / $divisor);
    }

}