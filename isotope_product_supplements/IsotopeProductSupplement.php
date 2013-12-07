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
 * Class IsotopeProductSupplement
 *
 * Provide hooks used in the isotope frontend.
 * @copyright  Richard Henkenjohann 2013
 * @author     Richard Henkenjohann
 * @package    Isotope
 */
class IsotopeProductSupplement extends Frontend
{

	/**
	 * Add supplements as surcharges
	 * @param array
	 * @return array
	 */
	public function checkoutSurcharge($arrSurcharges)
	{
		$arrSupplements = array();

		// Get supplements quantity
		foreach (Isotope::getInstance()->Cart->getProducts() as $objProduct)
		{
			$objProperties = $this->Database->prepare("SELECT supplement_activate AS 'active', supplements AS 'supplements' FROM tl_iso_groups WHERE id=(SELECT gid FROM tl_iso_products WHERE id=?)")
			                                ->execute($objProduct->id);

			if ($objProperties->active)
			{
				foreach (($arrProductSettings = deserialize($objProperties->supplements)) as $arrSupplementSetting)
				{
					// Add requested quantity to array
					$hid = md5($arrSupplementSetting['condition'] . $arrSupplementSetting['product']);
					$arrSupplements[$hid]['quantity_requested'] += $objProduct->quantity_requested;
					$arrSupplements[$hid]['amount'] += $objProduct->total_price;
					$arrSupplements[$hid]['supplement_name'] = $arrSupplementSetting['product'];
					$arrSupplements[$hid]['condition'] = $arrSupplementSetting['condition'];
					$arrSupplements[$hid]['max'] = $arrSupplementSetting['maximum'];
				}
			}
		}

		// Set supplements as surcharges
		foreach ($arrSupplements as $arrSupplement)
		{
			// Calculate supplement quantity
			preg_match('/([QA])([\+\-\*\/])*(\d+)*/', $arrSupplement['condition'], $chunks);
			$chunks = (count($chunks) > 1) ? $chunks : array('', '', '');
			$quantity = 0;

			if ($chunks[1] == 'Q')
			{
				eval("\$quantity = floor(\$arrSupplement['quantity_requested'] $chunks[2] $chunks[3]);");
			}
			elseif ($chunks[1] == 'A')
			{
				eval("\$quantity = floor(\$arrSupplement['amount'] $chunks[2] $chunks[3]);");
			}

			if ($arrSupplement['max'])
			{
				$quantity = min($quantity, intval($arrSupplement['max']));
			}

			if ($quantity > 0)
			{
				$arrSurcharges[] = array
				(
					'label' => sprintf($GLOBALS['TL_LANG']['MSC']['tax_supplement'][0], $arrSupplement['supplement_name']),
					'price' => sprintf($GLOBALS['TL_LANG']['MSC']['tax_supplement'][1], $quantity),
					'total_price' => 0,
					'tax_class' => 0,
					'before_tax' => 0,
					'products' => array()
				);
			}
		}

		return $arrSurcharges;
	}


	/**
	 * Handle supplement quantity condition RegExp
	 * @param string
	 * @param var
	 * @param Widget
	 * @return bool
	 */
	public function supplementQuantityConditionRegexp($strRegexp, $varValue, Widget $objWidget)
	{
		if ($strRegexp == 'supplementQuantityCondition')
		{
			// Check for expression error
			if (!preg_match('/^[QA]([\+\-\*\/])*(\d+)*$/', $varValue))
			{
				$objWidget->addError(sprintf($GLOBALS['TL_LANG']['MSC']['supplement_condition_error'], $objWidget->value));
			}

			return true;
		}

		return false;
	}
}
