{*
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
*  International Registered Trademark & Property of PrestaShop SA
*}

{extends file=$layout}

{block name='content'}

	{if isset($category) && $category->id_psblogcat && $category->active}
	{if isset($no_follow) AND $no_follow}
		{assign var='no_follow_text' value='rel="nofollow"'}
	{else}
		{assign var='no_follow_text' value=''}
	{/if}
	<div id="blog-category" class="blogs-container">
		<div class="inner">	
			{if $config->get('listing_show_categoryinfo',1)}
						{if $category->image}
							<div class="row">
								<div class="category-image col-xs-12 col-sm-12 col-lg-4 col-md-4 text-center">
									<img src="{$category->image|escape:'html':'UTF-8'}" class="img-fluid" alt="" />
								</div>
								<div class="col-xs-12 col-sm-12 col-lg-8 category-info caption">
									<h1>{$category->title|escape:'html':'UTF-8'}</h1>
									{$category->content_text nofilter}{* HTML form , no escape necessary *}
								</div>	
							</div>	
						{else}
							<div class="category-info caption">
								<h1>{$category->title|escape:'html':'UTF-8'}</h1>
								{$category->content_text nofilter}{* HTML form , no escape necessary *}
							</div>
						{/if}					 
					</div>
				</div> 
			{/if}

			{if $childrens&&$config->get('listing_show_subcategories',1)}
			<div class="childrens">
				<h3 class="subcategories-title">{l s='Childrens' mod='psblog'}</h3>
				<div class="row">
					{foreach $childrens item=children name=children}
						<div class="col-lg-6">
							{if isset($children.thumb)}
							<img src="{$children.thumb|escape:'html':'UTF-8'}" class="img-fluid"/>
							{/if}
							<h4 class="category-title"><a href="{$children.category_link|escape:'html':'UTF-8'}" title="{$children.title|escape:'html':'UTF-8'}">{$children.title|escape:'html':'UTF-8'}</a></h4>
							<div class="child-desc">{$children.content_text nofilter}</div>{* HTML form , no escape necessary *}
						</div>
					{/foreach}
			 	</div>
			</div>
			{/if}

		 
			{if count($leading_blogs)+count($secondary_blogs)}
				<div class="Recent-blog">
					<h3 class="Recent-title h3">{l s='Recent blog posts' mod='psblog'}</h3>
					{if count($leading_blogs)}
					<div class="leading-blog" style="margin-bottom: 15px;">  
						{foreach from=$leading_blogs item=blog name=leading_blog}
						 
							{if ($blog@iteration%$listing_leading_column==1)&&$listing_leading_column>1}
								<div class="flexRow">
							{/if}
							<div class="{if $listing_leading_column<=1}no{/if}col-lg-{floor(12/$listing_leading_column|escape:'html':'UTF-8')}">
								{include file="module:psblog/views/templates/front/default/_listing_blog.tpl"}
							</div>	
							{if ($blog@iteration%$listing_leading_column==0||$smarty.foreach.leading_blog.last)&&$listing_leading_column>1}
								</div>
							{/if}
						
						{/foreach}
					</div>
					{/if}
					{if count($secondary_blogs)}
					<div class="secondary-blog">
						{foreach from=$secondary_blogs item=blog name=secondary_blog}
							{if ($blog@iteration%$listing_secondary_column==1)&&$listing_secondary_column>1}
							  <div class="flexRow">
							{/if}

							<div class="{if $listing_secondary_column<=1}no{/if}col-lg-{floor(12/$listing_secondary_column|escape:'html':'UTF-8')}">
								{include file="module:psblog/views/templates/front/default/_grid_blog.tpl"}
							</div>	
							{if ($blog@iteration%$listing_secondary_column==0||$smarty.foreach.secondary_blog.last)&&$listing_secondary_column>1}
							</div>
							{/if}
						{/foreach}
					</div>
					{/if}
				
					<div class="ps_sortPagiBar clearfix bottom-line">
						{include file="module:psblog/views/templates/front/default/_pagination.tpl"}
					</div>
				</div>  
			{elseif empty($childrens)}
				<div class="alert alert-warning">{l s='Sorry, We are updating data, please come back later!!!!' mod='psblog'}</div>
			{/if}		  
		</div>
	</div>
	{else}
	<div class="alert alert-warning">{l s='Sorry, We are updating data, please come back later!!!!' mod='psblog'}</div>
	{/if}
{/block}