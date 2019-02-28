<?php
/**
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2018 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registred Trademark & Property of PrestaShop SA
*/

define('_Ps_BLOG_PREFIX_', 'PsBLG_');
require_once(_PS_MODULE_DIR_.'psblog/classes/config.php');

$config = PsBlogConfig::getInstance();


define('_PsBLOG_BLOG_IMG_DIR_', _PS_MODULE_DIR_.'psblog/views/img/');
define('_PsBLOG_BLOG_IMG_URI_', __PS_BASE_URI__.'modules/psblog/views/img/');


define('_PsBLOG_CATEGORY_IMG_URI_', _PS_MODULE_DIR_.'psblog/views/img/');
define('_PsBLOG_CATEGORY_IMG_DIR_', __PS_BASE_URI__.'modules/psblog/views/img/');

define('_PsBLOG_CACHE_IMG_DIR_', _PS_IMG_DIR_.'psblog/');
define('_PsBLOG_CACHE_IMG_URI_', _PS_IMG_.'psblog/');

$link_rewrite = 'link_rewrite'.'_'.Context::getContext()->language->id;
define('_Ps_BLOG_REWRITE_ROUTE_', $config->get($link_rewrite, 'blog'));

if (!is_dir(_PsBLOG_BLOG_IMG_DIR_.'c')) {
    # validate module
    mkdir(_PsBLOG_BLOG_IMG_DIR_.'c', 0777, true);
}

if (!is_dir(_PsBLOG_BLOG_IMG_DIR_.'b')) {
    # validate module
    mkdir(_PsBLOG_BLOG_IMG_DIR_.'b', 0777, true);
}

if (!is_dir(_PsBLOG_CACHE_IMG_DIR_)) {
    # validate module
    mkdir(_PsBLOG_CACHE_IMG_DIR_, 0777, true);
}
if (!is_dir(_PsBLOG_CACHE_IMG_DIR_.'c')) {
    # validate module
    mkdir(_PsBLOG_CACHE_IMG_DIR_.'c', 0777, true);
}
if (!is_dir(_PsBLOG_CACHE_IMG_DIR_.'b')) {
    # validate module
    mkdir(_PsBLOG_CACHE_IMG_DIR_.'b', 0777, true);
}

require_once(_PS_MODULE_DIR_.'psblog/libs/Helper.php');
require_once(_PS_MODULE_DIR_.'psblog/classes/psblogcat.php');
require_once(_PS_MODULE_DIR_.'psblog/classes/blog.php');
require_once(_PS_MODULE_DIR_.'psblog/classes/link.php');
require_once(_PS_MODULE_DIR_.'psblog/classes/comment.php');
require_once(_PS_MODULE_DIR_.'psblog/classes/PsblogOwlCarousel.php');
