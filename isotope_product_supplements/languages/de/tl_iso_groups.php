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
$GLOBALS['TL_LANG']['tl_iso_groups']['supplement_legend'] = 'Produktbeilagen';


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_iso_groups']['supplement_activate'] = array('Produktbeilagen aktivieren', 'Bestimmen Sie, ob bei Kauf eines Produktes dieser Gruppe Produktbeilagen hinzugefügt werden sollen.');
$GLOBALS['TL_LANG']['tl_iso_groups']['supplements'] = array('Produktbeilagen definieren', 'Geben Sie die Produktbeilagen ein. Diese werden dann als "Surcharges" zum Warenkorb hinzugefügt.');
$GLOBALS['TL_LANG']['tl_iso_groups']['supplement_product'] = array('Produktbeilage', 'Geben Sie den Namen der Produktbeilage an.');
$GLOBALS['TL_LANG']['tl_iso_groups']['supplement_condition'] = array('Berechnungsformel', 'Geben Sie die Formel für die Berechnung ein, mit der die Anzahl der Produktbeilagen berechnet wird. Q wird mit der Produktanzahl ergänzt; A wird mit der Summe ergänzt. Bsp.: Q/3 bedeutet, für je drei Produkte gibt es eine Produktbeilage.');
$GLOBALS['TL_LANG']['tl_iso_groups']['supplement_maximum'] = array('max. Menge', 'Füllen Sie das Feld aus, wenn Sie die maximale Anzahl an Produktbeilagen eingrenzen wollen.');
