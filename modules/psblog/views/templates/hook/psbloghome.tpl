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

<div class="lastest_block block tmoblog-latest">
<div class="container">
<div class="row">
	<h2 class="h1 products-section-title text-uppercase">
		<div class="blog-title">{l s='latest new & blog' mod='psblog'}</div>
	</h2>
		
	<div class="homeblog-inner">
	  <div class="homeblog_block">
		{assign var='no_blog' value=count($blogs)}
		{assign var='sliderFor' value=2} <!-- Define Number of product for SLIDER -->
		{if $no_blog >= $sliderFor}
			<ul id="blog-carousel" class="ps-carousel product_list">
		{else}
			<ul id="blog-grid" class="blog_grid product_list grid row gridcount">
		{/if}
		{foreach from=$blogs item=blog name="item_name" }
			<li class="blog-post">
				<div class="blog-item">
					{if $blog.image}
						<div class="blog-image text-xs-center">
							<a href="{$blog.link|escape:'html':'UTF-8'}" title="{$blog.title|escape:'html':'UTF-8'}" class="link">
								<img src="{$blog.preview_url|escape:'html':'UTF-8'}" alt="{$blog.title|escape:'html':'UTF-8'}" class="img-fluid"/>
							</a>
						<div class="post-image-hover"> </div>
						<p class="post_hover">
						<span class="tmo_zooming">
						<a class="icon zoom" title="View Full Image" href="{$blog.preview_url|escape:'html':'UTF-8'}" data-lightbox="example-set"><i class="fa fa-search-plus"></i></a>
						</span>
						<span class="tmo_readmore">		
							<a class="icon readmore_link" title="Read More " href="{$blog.link|escape:'html':'UTF-8'}"><i class="fa fa-link"></i></a>
						</span>
						</p>
						<div class="blog-date">
<!-- 						<span class="blog-author">
							<span class="fa fa-user-o"> {l s='' mod='psblog'}</span> 
							<a href="{$blog.author_link|escape:'html':'UTF-8'}" title="{$blog.author|escape:'html':'UTF-8'}">{$blog.author|escape:'html':'UTF-8'}</a> 
						</span>	 -->
						<span class="blog-created">
							  <span class="fa fa-clock-o"></span><time class="date" datetime="{strtotime($blog.date_add)|date_format:"%Y"|escape:'html':'UTF-8'}">
								<!-- {l s=strtotime($blog.date_add)|date_format:"%A"|escape:'html':'UTF-8' d='Modules.PsBlog.Shop'}, -->	<!-- day of week -->
								{l s=strtotime($blog.date_add)|date_format:"%b"|escape:'html':'UTF-8' d='Modules.PsBlog.Shop'}<!-- month-->
								{l s=strtotime($blog.date_add)|date_format:"%e"|escape:'html':'UTF-8' d='Modules.PsBlog.Shop'},<!-- /day --> 
								{l s=strtotime($blog.date_add)|date_format:"%Y"|escape:'html':'UTF-8' d='Modules.PsBlog.Shop'} <!-- year -->

							</time>
						</span>
						</div>
						</div>
					{/if}
					
					
					
					<div class="blog-content-wrap">	
						<div class="blog-info">	
<!-- 						<span class="blog-cat">  
							<a href="{$blog.category_link|escape:'html':'UTF-8'}" title="{$blog.category_title|escape:'html':'UTF-8'}">{$blog.category_title|escape:'html':'UTF-8'}</a>
						</span> -->
						<h4 class="title">
							<a href="{$blog.link|escape:'html':'UTF-8'}" title="{$blog.title|escape:'html':'UTF-8'}">{$blog.title|escape:'html':'UTF-8'|truncate:30:'...' nofilter}</a>
						</h4>
						<div class="blog-shortinfo">
							 {$blog.description|strip_tags:'UTF-8'|truncate:70:'...' nofilter}{* HTML form , no escape necessary *} 
						</div>	

						</div>	
					</div>


				</div>
			</li>
		{/foreach}
		</ul>
		
	</div>

	{if $no_blog >= $sliderFor}
		<div class="customNavigation">
		<a class="btn prev blog_prev">&nbsp;</a>
		<a class="btn next blog_next">&nbsp;</a>
		</div>
		{/if}
			</div>
</div>
</div>
</div>
<!-- /Block Last Post -->
