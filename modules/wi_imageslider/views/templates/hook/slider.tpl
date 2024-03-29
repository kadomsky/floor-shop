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
{if $wihomeslider.slides}
	<div class="wi-flexslider" data-interval="{$wihomeslider.speed}" data-pause="{$wihomeslider.pause}">
<script type="text/javascript">
document.write('<div class="wi-loading spinner"></div>');
</script>
<noscript><!--div class="wi-loading spinner"></div--></noscript>
		<ul class="slides">
			{foreach from=$wihomeslider.slides item=slide}
				<li class="slide">
					<a href="{$slide.url}" title="{$slide.legend}">
					<img src="{$slide.image_url}" alt="{$slide.legend}" title="{$slide.title}" />
					</a>
					{if $slide.description }
						<div class="container">
						<div class="row">
							<div class="caption-description">
								{$slide.description nofilter}
							</div>
						</div>
					</div>
					{/if}					
				</li>
			{/foreach}
		</ul>
	</div>
{/if}


