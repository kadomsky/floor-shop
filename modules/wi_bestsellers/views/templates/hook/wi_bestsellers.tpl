{**
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License 3.0 (AFL-3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* https://opensource.org/licenses/AFL-3.0
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
* @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
* International Registered Trademark & Property of PrestaShop SA
*}

<section class="wi-bestseller-products">
	<h2 class="h1 products-section-title text-uppercase">
		{l s='Best Sellers' mod='wi_bestsellers'}
	</h2>
	<div class="products">	
	<div class="product_bestseller">
		{assign var='sliderVal' value=5} <!-- Define Number of product for SLIDER -->
		{if $slider == 1 && $no_prod >= $sliderVal}
			<ul id="wi-bestseller-carousel" class="wi-carousel product_list">
		{else}
			<ul id="wi-bestseller-grid" class="bestseller_grid product_list grid row gridcount">
		{/if}
		
		{foreach from=$products item="product"}
			<li class="{if $slider == 1 && $no_prod >= $sliderVal}slider_item{else}product_item col-xs-12 col-sm-6 col-md-4 col-lg-2{/if}">
				{include file="catalog/_partials/miniatures/product.tpl" product=$product}
			</li>
		{/foreach}
		</ul>
		
		{if $slider == 1 && $no_prod >= $sliderVal}
			<div class="customNavigation">
				<a class="btn prev slider_prev">&nbsp;</a>
				<a class="btn next slider_next">&nbsp;</a>
			</div>
		{/if}
		
		{if $slider == 0 && $no_prod >= $sliderVal}
		<a class="all-product-link pull-xs-left pull-md-right h4" href="{$allBestSellers}">
			{l s='see all best sellers' mod='wi_bestsellers'}<i class="material-icons">&#xE315;</i>
		</a>
		{/if}
		</div>
	</div>
</section>
