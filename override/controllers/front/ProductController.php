<?php
/**
 * 2007-2019 PrestaShop and Contributors
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
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
class ProductController extends ProductControllerCore
{
    /**
     * @return array
     */
    public function getTemplateVarPage()
    {
        $page = parent::getTemplateVarPage();
        $page['body_classes']['product-id-' . $this->product->id] = true;
        $page['body_classes']['product-' . $this->product->name] = true;
        $page['body_classes']['product-id-category-' . $this->product->id_category_default] = true;
        $page['body_classes']['product-id-manufacturer-' . $this->product->id_manufacturer] = true;
        $page['body_classes']['product-id-supplier-' . $this->product->id_supplier] = true;

        if ($this->product->on_sale) {
            $page['body_classes']['product-on-sale'] = true;
        }

        if ($this->product->available_for_order) {
            $page['body_classes']['product-available-for-order'] = true;
        }

        if ($this->product->customizable) {
            $page['body_classes']['product-customizable'] = true;
        }
        $page['admin_notifications'] = array_merge($page['admin_notifications'], $this->adminNotifications);
        $page['meta']['title'] = $this->getProductPageTitle($page['meta']);
        $page['meta']['keywords'] = implode(', ', Tag::getProductTags((int)$this->product->id)[$this->context->language->id]);
        return $page;
    }

}
