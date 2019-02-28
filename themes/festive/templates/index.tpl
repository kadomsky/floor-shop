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
{extends file='page.tpl'}

    {block name='page_content_container'}
      <section id="content" class="page-home">
        {block name='page_content_top'}{/block}
       		 {hook h='displayTopColumn'}
		<!-- Webinth Customize -->
			
			<section class="wi-hometabcontent">
				<div class="container">
				<div class="row">
				<div class="hometabcontent">
				<h1 class="h1 products-section-title text-uppercase">{l s='our products' d='Shop.Theme'}</h1>
				<div class="tabs">
<!-- 				<span class="tabs_title">{l s='Our Products' mod='Shop.Theme'}</span> -->
					<ul id="home-page-tabs" class="nav nav-tabs clearfix">
						<li class="nav-item">
							<a data-toggle="tab" href="#featureProduct" class="nav-link active" data-text="{l s='Featured products' mod='Shop.Theme'}">
								<span>{l s='Featured' mod='Shop.Theme'}</span>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="tab" href="#newProduct" class="nav-link" data-text="{l s='New products' mod='Shop.Theme'}">
								<span>{l s='New products' mod='Shop.Theme'}</span>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="tab" href="#bestseller" class="nav-link" data-text="{l s='Best Sellers' mod='Shop.Theme'}">
								<span>{l s='Best Sellers' mod='Shop.Theme'}</span>
							</a>
						</li>
					</ul>
					<div class="tab-content">
						<div id="featureProduct" class="wi_productinner tab-pane active">	
							{hook h='displayWiFeature'}
						</div>
						<div id="newProduct" class="wi_productinner tab-pane">
							{hook h='displayWiNew'}
						</div>
						<div id="bestseller" class="wi_productinner tab-pane">
							{hook h='displayWiBestseller'}
						</div>
						</div>
						</div>
					</div>
					</div>
				</div>
			</section>


		<!-- Webinth Customize -->
		
		{block name='page_content'}
{block name='hook_home'}
          {$HOOK_HOME nofilter}
 {/block}
        {/block}
      </section>
    {/block}