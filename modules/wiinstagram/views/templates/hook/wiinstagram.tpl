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

<div class="wi-block-instagram-social">
	<h2 class="h1 products-section-title">{l s='Instagram' mod='wiinstagram'}</h2>
	<div class="content">
		
		{if $imagesIns.data && count($imagesIns.data)>0}
		<a id="next_instagram" class="button-arrow next" href="#">skip_next</a>
		<a id="prev_instagram" class="button-arrow prev" href="#">skip_previous</a>
		<div class="cycleElementsContainer">
			<div class="list_carousel responsive">
					
			<ul id="carousel_instagram" class="product-list">
			{foreach from=$imagesIns.data item=imagesIn name=imagesIn}
				{if $smarty.foreach.imagesIn.iteration <=8}
				<li class="item">
					<a href="#">
					 	<div class="insta_btn"><i class="fa fa-instagram" aria-hidden="true"></i><span>{l s='View Post' mod='wiinstagram'}</span></div>
						<img src="{$imagesIn.images.standard_resolution.url|escape:'html':'UTF-8'}"  style="float:left;" />
					</a>
					 <!-- <a target="_blank" href="{$imagesIn.link|escape:'html':'UTF-8'}">
					 	<div class="insta_btn"><i class="fa fa-instagram" aria-hidden="true"></i><span>{l s='View Post' mod='wiinstagram'}</span></div>
						<img src="{$imagesIn.images.standard_resolution.url|escape:'html':'UTF-8'}"  style="float:left;" />
					</a> -->
				</li>
				{/if}
			{/foreach}
			</ul>
			</div>
		</div>
		{/if}
	</div>
</div>

{if $imagesIns.data && count($imagesIns.data)>0}
<script type="text/javascript">

</script>
{/if}