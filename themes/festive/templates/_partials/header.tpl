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
{block name='header_nav'}
<nav class="header-nav">
	<div class="container">
	    <div class="row">
	    </div>
	</div>
</nav>
{/block}
{block name='header_top'}
	<div class="header-top">
		<div class="container">
		<div class="row">
		<div class="header-logo">
				<div class="main-logo">
					<div class="wi_header_logo">
					<a href="{$urls.base_url}">
					<img class="logo img-responsive" src="{$shop.logo}" alt="{$shop.name}">
					</a>
					</div>
				</div>
			</div>
			<div class="header-left">
				{hook h='displayNav1'}
				<!--<div id="_mobile_contact_link"></div>-->
				<div class="clearfix"></div>
			</div>
			<div class="header-center">
				<div class="header-menu">
				<div class="container">
				<div class="row">
				<div id="mobile_top_menu_wrapper" class="row hidden-lg-up">
					<div class="menu-icon">
					
					<div class="menu-title"> <i class="fa fa-bars" aria-hidden="true"></i><span>Category</span></div>
					</div>
					<div class="js-top-menu mobile" id="_mobile_top_menu"></div>
					<div class="menu-icon">
						<i class="fa fa-times" aria-hidden="true"></i>
						<!-- <div class="menu-title">close</div>	 -->		  
					</div>
				</div>
					{hook h='displayTop'}
				</div>
				</div>
				</div>
			</div>
			<div class="header-right">
				<div  id="_mobile_cart"></div>
				<div  id="_mobile_user_info"></div>
				{hook h='displayNav2'}	
			</div>
		</div>
		</div>
	</div>	

  {hook h='displayNavFullWidth'}
{/block}