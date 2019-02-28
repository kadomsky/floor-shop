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

{if $wileftbanner.slides}
	<div id="wi-leftbanner"  class="block">
		<h4 class="block_title hidden-lg-up" data-target="#leftbanner_tonggle" data-toggle="collapse">Banner
	    <span class="pull-xs-right">
	      <span class="navbar-toggler collapse-icons">
	      <i class="material-icons add">&#xE313;</i>
	      <i class="material-icons remove">&#xE316;</i>
	      </span>
	    </span>
	  </h4>
		<ul class="block_content collapse" id="leftbanner_tonggle">
			{foreach from=$wileftbanner.slides item=slide}
				<li class="slide wileftbanner-container">
					<a href="{$slide.url}" title="{$slide.title}">
						<img src="{$slide.image_url}" alt="{$slide.title}" title="{$slide.title}" />
					</a>				
				</li>
			{/foreach}
		</ul>
	</div>			
{/if}