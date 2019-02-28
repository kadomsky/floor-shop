<?php
/**
* 2007-2017 PrestaShop
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
*  @copyright 2007-2017 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registred Trademark & Property of PrestaShop SA
*/

$blog_config = array(
    'template' => 'default',
    'blog_link_title_1' => 'Blog',
    'blog_link_title_3' => 'Blog',
    'link_rewrite' => 'blog',
    'category_rewrite' => 'category',
    'detail_rewrite' => 'detail',
    'meta_title_1' => 'Blog',
    'meta_title_3' => 'Blog',
    'meta_description_1' => '',
    'meta_description_3' => '',
    'meta_keywords_1' => '',
    'meta_keywords_3' => '',
    'indexation' => 0,
    #'rss_limit_item' => 5,
    #'rss_title_item' => 'RSS FEED',
    #'latest_limit_items' => 20,
    'saveConfiguration' => '',
    'listing_show_categoryinfo' => 1,
    'listing_show_subcategories' => 1,
    'listing_leading_column' => 1,
    'listing_leading_limit_items' => 2,
    'listing_leading_img_width' => 1000,
    'listing_leading_img_height' => 786,
    'listing_secondary_column' => 2,
    'listing_secondary_limit_items' => 2,
    'listing_secondary_img_width' => 1000,
    'listing_secondary_img_height' => 786,
    'listing_show_title' => 1,
    'listing_show_description' => 1,
    'listing_show_readmore' => 1,
    'listing_show_image' => 1,
    'listing_show_author' => 1,
    'listing_show_category' => 1,
    'listing_show_created' => 1,
    'listing_show_hit' => 1,
    'listing_show_counter' => 1,
    'item_img_width' => 1000,
    'item_img_height' => 786,
    'item_show_description' => 1,
    'item_show_image' => 1,
    'item_show_author' => 1,
    'item_show_category' => 1,
    'item_show_created' => 1,
    'item_show_hit' => 1,
    'item_show_counter' => 1,
    'social_code' => '',
    'item_comment_engine' => 'local',
    'item_limit_comments' => '10',
    'item_diquis_account' => '',
    'item_facebook_appid' => '',
    'item_facebook_width' => '600',
    'url_use_id' => '1',
);

PsBlogConfig::updateConfigValue('cfg_global', serialize($blog_config));
