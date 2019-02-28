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
	{if isset($no_follow) AND $no_follow}
		{assign var='no_follow_text' value='rel="nofollow"'}
	{else}
		{assign var='no_follow_text' value=''}
	{/if} 
	<div id="blog-listing" class="blogs-container box">
		{if isset($filter.type)}
			{if $filter.type=='tag'}
				<h1>{l s='Filter Blogs By Tag' mod='psblog'} : <span>{$filter.tag|escape:'html':'UTF-8'}</span></h1>
			{elseif $filter.type=='author'}
				<h1>{l s='Filter Blogs By Blogger' mod='psblog'} : <span>{$filter.employee->firstname|escape:'html':'UTF-8'} {$filter.employee->lastname|escape:'html':'UTF-8'}</span></h1>
			{/if}
		{else}
			<h1 class="blog-heading">{l s='Latest Blogs' mod='psblog'}</h1>
		{/if}

		<div class="inner">
			{if count($leading_blogs)+count($secondary_blogs)>0}
				{if count($leading_blogs)}
				<div class="leading-blog" style="margin-bottom: 15px;">  
					{foreach from=$leading_blogs item=blog name=leading_blog}
						{if ($blog@iteration%$listing_leading_column==1)&&$listing_leading_column>1}
						  <div class="row">
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
						  	<div class="row">
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
			{else}
				<div class="alert alert-warning">{l s='Sorry, We are update data, please come back later!!!!' mod='psblog'}</div>
			{/if}    

		</div>
	</div>
{/block}