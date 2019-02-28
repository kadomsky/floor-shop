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

<article class="blog-item clearfix">
	{if $blog.image && $config->get('listing_show_image',1)}
		<div class="blog-image col-xs-12 col-sm-12">
			<img src="{$blog.preview_url|escape:'html':'UTF-8'}" title="{$blog.title|escape:'html':'UTF-8'}" alt="" class="img-fluid" />
<!-- 			<span class="tmo-blogicons">
								<a title="Click to view Full Image" href="{$blog.preview_url|escape:'html':'UTF-8'}" data-lightbox="example-set" class="icon blogzoom"><i class="fa fa-search"></i>&nbsp;</a> 
								<a title="Click to view Read More" href="{$blog.link|escape:'html':'UTF-8'}" class="icon blogreadmore"><i class="fa fa-link"></i>&nbsp;</a>
			</span> -->
		</div>
	{/if}
	<div class="col-xs-12 col-sm-12 blog-content-wrap">
		{if $config->get('listing_show_title','1')}
		<h4 class="title media-heading"><a href="{$blog.link|escape:'html':'UTF-8'}" title="{$blog.title|escape:'html':'UTF-8'}">{$blog.title|escape:'html':'UTF-8'}</a></h4>
		{/if}
		<div class="blog-meta">
			{if $config->get('listing_show_author','1')&&!empty($blog.author)}
			<span class="blog-author">				
				<!-- <i class="fa fa-user-o"></i> -->{l s='Posted By' mod='psblog'}:
				<a href="{$blog.author_link|escape:'html':'UTF-8'}" title="{$blog.author|escape:'html':'UTF-8'}">{$blog.author|escape:'html':'UTF-8'}</a> 
			</span>
			{/if}
			
			{if $config->get('listing_show_category','1')}
			<span class="blog-cat">
				<!-- <i class="fa fa-file-o"></i> -->{l s='In' mod='psblog'}:  
				<a href="{$blog.category_link|escape:'html':'UTF-8'}" title="{$blog.category_title|escape:'html':'UTF-8'}">{$blog.category_title|escape:'html':'UTF-8'}</a>
			</span>
			{/if}
			
			{if $config->get('listing_show_created','1')}
			<span class="blog-created">				
				<!-- <i class="fa fa-calendar"></i> -->{l s='On' mod='psblog'}:
				<time class="date" datetime="{strtotime($blog.date_add)|date_format:"%Y"|escape:'html':'UTF-8'}">
					{l s=strtotime($blog.date_add)|date_format:"%a"|escape:'html':'UTF-8' mod='psblog'},	<!-- day of week -->
					{l s=strtotime($blog.date_add)|date_format:"%b"|escape:'html':'UTF-8' mod='psblog'}		<!-- month-->
					{l s=strtotime($blog.date_add)|date_format:"%e"|escape:'html':'UTF-8' mod='psblog'},	<!-- day of month -->
					{l s=strtotime($blog.date_add)|date_format:"%Y"|escape:'html':'UTF-8' mod='psblog'}		<!-- year -->
				</time>
			</span>
			{/if}
			
			{if isset($blog.comment_count)&&$config->get('listing_show_counter','1')}	
			<span class="blog-ctncomment">				
				<!-- i class="fa fa-comment-o"></i> -->{l s='Comment' mod='psblog'}: 
				{$blog.comment_count|intval}
			</span>
			{/if}

			{if $config->get('listing_show_hit','1')}	
			<span class="blog-hit">				
				<!-- <i class="fa fa-heart-o"></i> -->{l s='Hit' mod='psblog'}:
				{$blog.hits|intval}
			</span>
			{/if}
		</div>


		<div class="blog-shortinfo">
			{if $config->get('listing_show_description','1')}
			{$blog.description|strip_tags:'UTF-8'|truncate:160:'...' nofilter}{* HTML form , no escape necessary *}
			{/if}
			{if $config->get('listing_show_readmore',1)}
			<div class="readmore">
				<a href="{$blog.link|escape:'html':'UTF-8'}" title="{$blog.title|escape:'html':'UTF-8'}" class="more btn btn-primary">{l s='Read more' mod='psblog'}</a>
			</div>
			{/if}
		</div>
	</div>
</article>
	
<!---
	Translation Day of Week - NOT REMOVE
	{l s='Sunday' mod='psblog'}
	{l s='Monday' mod='psblog'}
	{l s='Tuesday' mod='psblog'}
	{l s='Wednesday' mod='psblog'}
	{l s='Thursday' mod='psblog'}
	{l s='Friday' mod='psblog'}
	{l s='Saturday' mod='psblog'}
-->
<!---
	Translation Month - NOT REMOVE
		{l s='January' mod='psblog'}
		{l s='February' mod='psblog'}
		{l s='March' mod='psblog'}
		{l s='April' mod='psblog'}
		{l s='May' mod='psblog'}
		{l s='June' mod='psblog'}
		{l s='July' mod='psblog'}
		{l s='August' mod='psblog'}
		{l s='September' mod='psblog'}
		{l s='October' mod='psblog'}
		{l s='November' mod='psblog'}
		{l s='December' mod='psblog'}
-->