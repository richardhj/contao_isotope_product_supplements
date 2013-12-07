<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Richard Henkenjohann 2013
 * @author     Richard Henkenjohann
 * @package    Isotope
 * @license    LGPL
 * @filesource
 */


/**
 * Selectors
 */
$GLOBALS['TL_LANG']['tl_iso_groups']['supplement_legend'] = 'Product supplements';


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_iso_groups']['supplement_activate'] = array('Activate supplements', 'Choose whether supplements should be add to the cart.');
$GLOBALS['TL_LANG']['tl_iso_groups']['supplements'] = array('Define supplements', 'Enter the supplements that will be added as surcharges to the cart.');
$GLOBALS['TL_LANG']['tl_iso_groups']['supplement_product'] = array('Supplement', 'Choose the supplement.');
$GLOBALS['TL_LANG']['tl_iso_groups']['supplement_condition'] = array('Calculation condition', 'Enter the condition for the supplement\'s calculation. Q will be replaced with the quantity; A with the amount. Example: Q/3 adds 1 supplement every 3 products.');
$GLOBALS['TL_LANG']['tl_iso_groups']['supplement_maximum'] = array('max. quantity', 'Fill in this field if you want to limit the supplement\'s maximum quantity.');
