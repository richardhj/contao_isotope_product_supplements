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
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_iso_groups']['palettes']['__selector__'][] = 'supplement_activate';
$GLOBALS['TL_DCA']['tl_iso_groups']['palettes']['default'] .= ';{supplement_legend},supplement_activate';


/**
 * Subpalettes
 */
$GLOBALS['TL_DCA']['tl_iso_groups']['subpalettes']['supplement_activate'] = 'supplements';


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_iso_groups']['fields']['supplement_activate'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_iso_groups']['supplement_activate'],
	'exclude'       => true,
	'inputType'     => 'checkbox',
	'eval'          => array('submitOnChange'=>true)
);

$GLOBALS['TL_DCA']['tl_iso_groups']['fields']['supplements'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_iso_groups']['supplements'],
	'exclude'       => true,
	'inputType'     => 'multiColumnWizard',
	'eval'          => array
	(
		'columnFields' => array
		(
			'product' => array
			(
				'label'             => &$GLOBALS['TL_LANG']['tl_iso_groups']['supplement_product'],
				'exclude'           => true,
				'inputType'         => 'text',
				'eval'              => array('mandatory'=>true, 'style'=>'width:300px')
			),
			'condition' => array
			(
				'label'             => &$GLOBALS['TL_LANG']['tl_iso_groups']['supplement_condition'],
				'exclude'           => true,
				'inputType'         => 'text',
				'eval'              => array('mandatory'=>true, 'rgxp'=>'supplementQuantityCondition', 'style'=>'width:160px')
			),
			'maximum' => array
			(
				'label'             => &$GLOBALS['TL_LANG']['tl_iso_groups']['supplement_maximum'],
				'exclude'           => true,
				'inputType'         => 'text',
				'eval'              => array('rgxp'=>'digit', 'style'=>'width:85px')
			)
		)
	)
);
