<?php
/**
 * 2007-2018 PrestaShop.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
class dbupdate {
	public $sql = [];
	public function __construct() {
		$this->sql[_DB_PREFIX_."cart_product_0"] = [
			'install' => "ALTER TABLE `"._DB_PREFIX_."cart_product` CHANGE `quantity` `quantity` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0'",
			'uninstall' => "ALTER TABLE `"._DB_PREFIX_."cart_product` CHANGE `quantity` `quantity` int(10) UNSIGNED NOT NULL DEFAULT '0'"
		];

		$this->sql[_DB_PREFIX_."cart_rule_0"] = [
			'install' => "ALTER TABLE `"._DB_PREFIX_."cart_rule` CHANGE `quantity` `quantity` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0'",
			'uninstall' => "ALTER TABLE `"._DB_PREFIX_."cart_rule` CHANGE `quantity` `quantity` int(10) UNSIGNED NOT NULL DEFAULT '0'"
		];

		$this->sql[_DB_PREFIX_."cart_rule_1"] = [
			'install' => "ALTER TABLE `"._DB_PREFIX_."cart_rule` CHANGE `quantity_per_user` `quantity_per_user` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0'",
			'uninstall' => "ALTER TABLE `"._DB_PREFIX_."cart_rule` CHANGE `quantity_per_user` `quantity_per_user` int(10) UNSIGNED NOT NULL DEFAULT '0'"
		];

		$this->sql[_DB_PREFIX_."ps_cart_rule_product_rule_group_0"] = [
			'install' => "ALTER TABLE `"._DB_PREFIX_."cart_rule_product_rule_group` CHANGE `quantity` `quantity` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '1'",
			'uninstall' => "ALTER TABLE `"._DB_PREFIX_."cart_rule_product_rule_group` CHANGE `quantity` `quantity` int(10) UNSIGNED NOT NULL DEFAULT '1'"
		];

		$this->sql[_DB_PREFIX_."order_detail_0"] = [
			'install' => "ALTER TABLE `"._DB_PREFIX_."order_detail` CHANGE `product_quantity` `product_quantity` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0'",
			'uninstall' => "ALTER TABLE `"._DB_PREFIX_."order_detail` CHANGE `product_quantity` `product_quantity` int(10) UNSIGNED NOT NULL DEFAULT '0'"
		];

		$this->sql[_DB_PREFIX_."order_detail_1"] = [
			'install' => "ALTER TABLE `"._DB_PREFIX_."order_detail` CHANGE `product_quantity_in_stock` `product_quantity_in_stock` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0'",
			'uninstall' => "ALTER TABLE `"._DB_PREFIX_."order_detail` CHANGE `product_quantity_in_stock` `product_quantity_in_stock` int(10) UNSIGNED NOT NULL DEFAULT '0'"
		];

		$this->sql[_DB_PREFIX_."order_detail_2"] = [
			'install' => "ALTER TABLE `"._DB_PREFIX_."order_detail` CHANGE `product_quantity_reinjected` `product_quantity_reinjected` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0'",
			'uninstall' => "ALTER TABLE `"._DB_PREFIX_."order_detail` CHANGE `product_quantity_reinjected` `product_quantity_reinjected` int(10) UNSIGNED NOT NULL DEFAULT '0'"
		];

		$this->sql[_DB_PREFIX_."order_detail_3"] = [
			'install' => "ALTER TABLE `"._DB_PREFIX_."order_detail` CHANGE `product_quantity_refunded` `product_quantity_refunded` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0'",
			'uninstall' => "ALTER TABLE `"._DB_PREFIX_."order_detail` CHANGE `product_quantity_refunded` `product_quantity_refunded` int(10) UNSIGNED NOT NULL DEFAULT '0'"
		];

		$this->sql[_DB_PREFIX_."order_detail_4"] = [
			'install' => "ALTER TABLE `"._DB_PREFIX_."order_detail` CHANGE `product_quantity_return` `product_quantity_return` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0'",
			'uninstall' => "ALTER TABLE `"._DB_PREFIX_."order_detail` CHANGE `product_quantity_return` `product_quantity_return` int(10) UNSIGNED NOT NULL DEFAULT '0'"
		];

		$this->sql[_DB_PREFIX_."order_return_detail_0"] = [
			'install' => "ALTER TABLE `"._DB_PREFIX_."order_return_detail` CHANGE `product_quantity` `product_quantity` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0'",
			'uninstall' => "ALTER TABLE `"._DB_PREFIX_."order_return_detail` CHANGE `product_quantity` `product_quantity` int(10) UNSIGNED NOT NULL DEFAULT '0'"
		];

		$this->sql[_DB_PREFIX_."order_slip_detail_0"] = [
			'install' => "ALTER TABLE `"._DB_PREFIX_."order_slip_detail` CHANGE `product_quantity` `product_quantity` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0'",
			'uninstall' => "ALTER TABLE `"._DB_PREFIX_."order_slip_detail` CHANGE `product_quantity` `product_quantity` int(10) UNSIGNED NOT NULL DEFAULT '0'"
		];

		$this->sql[_DB_PREFIX_."pack_0"] = [
			'install' => "ALTER TABLE `"._DB_PREFIX_."pack` CHANGE `quantity` `quantity` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '1'",
			'uninstall' => "ALTER TABLE `"._DB_PREFIX_."pack` CHANGE `quantity` `quantity` int(10) UNSIGNED NOT NULL DEFAULT '1'"
		];
		$this->sql[_DB_PREFIX_."product_0"] = [
			'install' => "ALTER TABLE `"._DB_PREFIX_."product` CHANGE `quantity` `quantity` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0'",
			'uninstall' => "ALTER TABLE `"._DB_PREFIX_."product` CHANGE `quantity` `quantity` int(10) UNSIGNED NOT NULL DEFAULT '0'"
		];
		$this->sql[_DB_PREFIX_."product_1"] = [
			'install' => "ALTER TABLE `"._DB_PREFIX_."product` CHANGE `out_of_stock` `out_of_stock` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '2'",
			'uninstall' => "ALTER TABLE `"._DB_PREFIX_."product` CHANGE `out_of_stock` `out_of_stock` int(10) UNSIGNED NOT NULL DEFAULT '2'"
		];
		
		$this->sql[_DB_PREFIX_."product_sale_0"] = [
			'install' => "ALTER TABLE `"._DB_PREFIX_."product_sale` CHANGE `quantity` `quantity` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0'",
			'uninstall' => "ALTER TABLE `"._DB_PREFIX_."product_sale` CHANGE `quantity` `quantity` int(10) UNSIGNED NOT NULL DEFAULT '0'"
		];
		$this->sql[_DB_PREFIX_."product_attribute_0"] = [
			'install' => "ALTER TABLE `"._DB_PREFIX_."product_attribute` CHANGE `quantity` `quantity` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0'",
			'uninstall' => "ALTER TABLE `"._DB_PREFIX_."product_attribute` CHANGE `quantity` `quantity` int(10) UNSIGNED NOT NULL DEFAULT '0'"
		];
		$this->sql[_DB_PREFIX_."specific_price_rule_0"] = [
			'install' => "ALTER TABLE `"._DB_PREFIX_."specific_price_rule` CHANGE `from_quantity` `from_quantity` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0'",
			'uninstall' => "ALTER TABLE `"._DB_PREFIX_."specific_price_rule` CHANGE `from_quantity` `from_quantity` int(10) UNSIGNED NOT NULL DEFAULT '0'"
		];
		$this->sql[_DB_PREFIX_."stock_0"] = [
			'install' => "ALTER TABLE `"._DB_PREFIX_."stock` CHANGE `physical_quantity` `physical_quantity` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0'",
			'uninstall' => "ALTER TABLE `"._DB_PREFIX_."stock` CHANGE `physical_quantity` `physical_quantity` int(10) UNSIGNED NOT NULL DEFAULT '0'"
		];
		$this->sql[_DB_PREFIX_."stock_1"] = [
			'install' => "ALTER TABLE `"._DB_PREFIX_."stock` CHANGE `usable_quantity` `usable_quantity` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0'",
			'uninstall' => "ALTER TABLE `"._DB_PREFIX_."stock` CHANGE `usable_quantity` `usable_quantity` int(10) UNSIGNED NOT NULL DEFAULT '0'"
		];
		$this->sql[_DB_PREFIX_."stock_available_0"] = [
			'install' => "ALTER TABLE `"._DB_PREFIX_."stock_available` CHANGE `quantity` `quantity` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0'",
			'uninstall' => "ALTER TABLE `"._DB_PREFIX_."stock_available` CHANGE `quantity` `quantity` int(10) UNSIGNED NOT NULL DEFAULT '0'"
		];
		$this->sql[_DB_PREFIX_."stock_mvt_0"] = [
			'install' => "ALTER TABLE `"._DB_PREFIX_."stock_mvt` CHANGE `physical_quantity` `physical_quantity` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0'",
			'uninstall' => "ALTER TABLE `"._DB_PREFIX_."stock_mvt` CHANGE `physical_quantity` `physical_quantity` int(10) UNSIGNED NOT NULL DEFAULT '0'"
		];
		$this->sql[_DB_PREFIX_."customization_0"] = [
			'install' => "ALTER TABLE `"._DB_PREFIX_."customization` CHANGE `quantity` `quantity` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0'",
			'uninstall' => "ALTER TABLE `"._DB_PREFIX_."customization` CHANGE `quantity` `quantity` int(10) UNSIGNED NOT NULL DEFAULT '0'"
		];
		$this->sql[_DB_PREFIX_."customization_1"] = [
			'install' => "ALTER TABLE `"._DB_PREFIX_."customization` CHANGE `quantity_refunded` `quantity_refunded` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0'",
			'uninstall' => "ALTER TABLE `"._DB_PREFIX_."customization` CHANGE `quantity_refunded` `quantity_refunded` int(10) UNSIGNED NOT NULL DEFAULT '0'"
		];
		$this->sql[_DB_PREFIX_."customization_2"] = [
			'install' => "ALTER TABLE `"._DB_PREFIX_."customization` CHANGE `quantity_returned` `quantity_returned` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0'",
			'uninstall' => "ALTER TABLE `"._DB_PREFIX_."customization` CHANGE `quantity_returned` `quantity_returned` int(10) UNSIGNED NOT NULL DEFAULT '0'"
		];
		/*
ALTER TABLE `ps_product` CHANGE `available_date` `available_date` DATE NOT NULL DEFAULT '2019-01-01';
ALTER TABLE `ps_product_attribute` CHANGE `available_date` `available_date` DATE NOT NULL DEFAULT '2019-01-01';
> ALTER TABLE `ps_cart_product` CHANGE `quantity` `quantity` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0';
> ALTER TABLE `ps_cart_rule` CHANGE `quantity` `quantity` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0';
> ALTER TABLE `ps_cart_rule` CHANGE `quantity_per_user` `quantity_per_user` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0';
> ALTER TABLE `ps_cart_rule_product_rule_group` CHANGE `quantity` `quantity` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '1';
> ALTER TABLE `ps_order_detail` CHANGE `product_quantity` `product_quantity` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0';
> ALTER TABLE `ps_order_detail` CHANGE `product_quantity_in_stock` `product_quantity_in_stock` DECIMAL(15,2) NOT NULL DEFAULT '0';
> ALTER TABLE `ps_order_detail` CHANGE `product_quantity_reinjected` `product_quantity_reinjected` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0';
> ALTER TABLE `ps_order_detail` CHANGE `product_quantity_refunded` `product_quantity_refunded` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0';
> ALTER TABLE `ps_order_detail` CHANGE `product_quantity_return` `product_quantity_return` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0';
> ALTER TABLE `ps_order_return_detail` CHANGE `product_quantity` `product_quantity` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0';
> ALTER TABLE `ps_order_slip_detail` CHANGE `product_quantity` `product_quantity` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0';
> ALTER TABLE `ps_pack` CHANGE `quantity` `quantity` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '1';
> ALTER TABLE `ps_product` CHANGE `quantity` `quantity` DECIMAL(15,2) NOT NULL DEFAULT '0';
> ALTER TABLE `ps_product` CHANGE `out_of_stock` `out_of_stock` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '2';
> ALTER TABLE `ps_product_sale` CHANGE `quantity` `quantity` DECIMAL(15,2) UNSIGNED NOT NULL DEFAULT '0';
> ALTER TABLE `ps_product_attribute` CHANGE `quantity` `quantity` DECIMAL(15,2) NOT NULL DEFAULT '0';
> ALTER TABLE `ps_specific_price_rule` CHANGE `from_quantity` `from_quantity` DECIMAL(15,2) UNSIGNED NOT NULL;
> ALTER TABLE `ps_stock` CHANGE `physical_quantity` `physical_quantity` DECIMAL(15,2) UNSIGNED NOT NULL;
> ALTER TABLE `ps_stock` CHANGE `usable_quantity` `usable_quantity` DECIMAL(15,2) UNSIGNED NOT NULL;
> ALTER TABLE `ps_stock_available` CHANGE `quantity` `quantity` DECIMAL(15,2) NOT NULL DEFAULT '0';
> ALTER TABLE `ps_stock_mvt` CHANGE `physical_quantity` `physical_quantity` DECIMAL(15,2) UNSIGNED NOT NULL;
> ALTER TABLE `ps_customization` CHANGE `quantity` `quantity` DECIMAL(15,2) NOT NULL;
> ALTER TABLE `ps_customization` CHANGE `quantity_refunded` `quantity_refunded` DECIMAL(15,2) NOT NULL DEFAULT '0';
> ALTER TABLE `ps_customization` CHANGE `quantity_returned` `quantity_returned` DECIMAL(15,2) NOT NULL DEFAULT '0';
ALTER TABLE `ps_product` CHANGE `reference` `reference` VARCHAR(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL;
		*/
	}
	public function _install() {
		$res = true;
		foreach ($this->sql as $table=>$query) {
			$res &= (bool)Db::getInstance()->execute($query['install']);
//			$res .= $query['install']."\n";
		}
		return $res;
	}
	public function _uninstall() {
		$res = true;
		foreach ($this->sql as $table=>$query) {
			$res &= (bool)Db::getInstance()->execute($query['uninstall']);
		}
		return $res;
	}
}
