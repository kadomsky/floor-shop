{**
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
* @author    PrestaShop SA <contact@prestashop.com>
* @copyright 2007-2017 PrestaShop SA
* @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
* International Registred Trademark & Property of PrestaShop SA
*}

<!-- Block Last post-->

<div class="lastest_block block">
	<h4 class="block_title">{l s='Latest News' mod='psblog'}</h4>
	<div class="block_content">
		{foreach from=$blogs item=blog name="item_name" }
			<div class="blog_container row clearfix">
				{if $blog.image}
					<div class="blog-image col-xs-4 col-sm-4 text-xs-center">
						<a href="{$blog.link_rewrite|escape:'html':'UTF-8'}" title="{$blog.title|escape:'html':'UTF-8'}" class="link">
							<img src="{$blog.preview_url|escape:'html':'UTF-8'}" alt="{$blog.title|escape:'html':'UTF-8'}" class="img-fluid"/>
						</a>
					</div>
				{/if}
				<div class="blog-inner col-xs-8 col-sm-8">
					<div class="blog-meta">
						<span class="blog-author">
							<span class="fa fa-user"> {l s='Posted By' mod='psblog'}:</span> 
							<a href="{$blog.author_link|escape:'html':'UTF-8'}" title="{$blog.author|escape:'html':'UTF-8'}">{$blog.author|escape:'html':'UTF-8'}</a> 
						</span>					
						<span class="blog-cat"> 
							<span class="fa fa-list"> {l s='In' mod='psblog'}:</span> 
							<a href="{$blog.category_link|escape:'html':'UTF-8'}" title="{$blog.category_title|escape:'html':'UTF-8'}">{$blog.category_title|escape:'html':'UTF-8'}</a>
						</span>
						<span class="blog-created">
							<span class="fa fa-calendar"> {l s='On' mod='psblog'}: </span> 
							<time class="date" datetime="{strtotime($blog.date_add)|date_format:"%Y"|escape:'html':'UTF-8'}">
								<!-- {l s=strtotime($blog.date_add)|date_format:"%A"|escape:'html':'UTF-8' mod='psblog'}, -->	<!-- day of week -->
								{l s=strtotime($blog.date_add)|date_format:"%B"|escape:'html':'UTF-8' mod='psblog'}		<!-- month-->
								{l s=strtotime($blog.date_add)|date_format:"%e"|escape:'html':'UTF-8' mod='psblog'},	<!-- day of month -->
								{l s=strtotime($blog.date_add)|date_format:"%Y"|escape:'html':'UTF-8' mod='psblog'}		<!-- year -->
							</time>
						</span>
					</div>
					<h4 class="blog-title">
						<a href="{$blog.link_rewrite|escape:'html':'UTF-8'}" title="{$blog.title|escape:'html':'UTF-8'}">{$blog.title|escape:'html':'UTF-8'}</a>
					</h4>				
				</div>
			</div>
		{/foreach}
	</div>
</div>
<!-- /Block Last Post -->
