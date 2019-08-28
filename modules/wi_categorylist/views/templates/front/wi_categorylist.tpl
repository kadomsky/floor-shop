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



<div  class="wicategorylist block" id="categorylist_home">
<div class="container">
<div class="row">
		<div class="products-tab-content">
		<h2 class="h1 products-section-title">
		{l s='shop by category' d='Modules.Categoryslist.Shop'}
		</h2>
		</div>
		<div id="spe_res">
			<div class="wicategory-container">
				{if isset($wicategoryinfos) && $wicategoryinfos}
				
				{assign var='sliderVal' value=2}
				{assign var='productsCount' value=count($wicategoryinfos)}
				{$categorycount=0}
				{if $productsCount > $sliderVal}

									<ul id="wicategorylist-carousel" class="wi-carousel product_list product_slider_grid">
								{else}
									<ul id="wicategorylist" class="product_list grid gridcount product_slider_grid">
								{/if}
								
					{foreach from=$wicategoryinfos item=wicategoryinfo}
						<li class="{if $productsCount > $sliderVal}slider{else}grid{/if}">
						<div class="categoryblock{$categorycount} categoryblock item">
							<div class="block_content">
								
								
								{if isset($wicategoryinfo.cate_id) && $wicategoryinfo.cate_id}
									{if $wicategoryinfo.id == $wicategoryinfo.cate_id.id_category}
										<div class="categoryimage">
										<a href="{$link->getCategoryLink($wicategoryinfo.category->id_category, $wicategoryinfo.category->link_rewrite)}">
											<img src="{$image_url}/{$wicategoryinfo.cate_id.image}" alt="" class="img-responsive" border="0" />
										</a>
										</div>
									{/if}
									{else}
										<div class="categoryimage">
										<a href="{$link->getCategoryLink($wicategoryinfo.category->id_category, $wicategoryinfo.category->link_rewrite)}">
											<img src="img/cms/Cat-img.jpg" alt="" class="img-responsive" border="0" />
										</a>
										</div>
								{/if}
								
								<div class="categorylist">
									<div class="cate-heading">
										<a href="{$link->getCategoryLink($wicategoryinfo.category->id_category, $wicategoryinfo.category->link_rewrite)}">{$wicategoryinfo.name}</a>
									</div>
									<div class="cate-button">
										<a href="{$link->getCategoryLink($wicategoryinfo.category->id_category, $wicategoryinfo.category->link_rewrite)}">View Collection</a>
									</div>
									<ul class="subcategory">
									{$categorychildcount = 1}
									{foreach $wicategoryinfo.child_cate item=child}
										{if $categorychildcount <=10}
										<li>
											<a href="{$link->getCategoryLink({$child.id_category},{$child.link_rewrite})}">{$child.name}</a>
										</li>
										 {/if}
										 {$categorychildcount = $categorychildcount + 1}
									{/foreach}
									<li>
										<a href="{$link->getCategoryLink($wicategoryinfo.category->id_category, $wicategoryinfo.category->link_rewrite)}">
											{l s='View all' mod='wicategorylist'}</a>
									</li>
								</ul>
								</div>
							</div>
						
						</div>
						</li>
					   
						{$categorycount = $categorycount + 1}
					{/foreach}
					</ul>
				{if  $productsCount > $sliderVal}
					<div class="customNavigation">
						<a class="btn prev cat_prev">&nbsp;</a>
						<a class="btn next cat_next">&nbsp;</a>
					</div>
				{/if}
					
				{else}
					<div class="alert alert-info">{l s='No Category is Selected.' mod='wicategorylist'}</div>
				{/if}
				
			</div>
			</div>
</div>
</div>
</div>