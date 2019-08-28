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
	    <div class="row-header">
			<div class="header-left hidden-sm-down col-md-7 col-lg-8">
				<div class="col-md-7 col-lg-5"><h3>Высококачественная продукция</h3>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i> 
				Лучших брендов Европы</div>
				<div class="col-md-5 col-lg-4"><h3>Свыше 3 тысяч видов</h3>
				<i class="fa fa-sticky-note faLeftIcon hidden-md-down" aria-hidden="true"></i>
				Напольных покрытий</div>
				<div class="hidden-md-down col-lg-3"><h3>Прямые поставки</h3>
				<svg style="display:none" xmlns="http://www.w3.org/2000/svg">
			`	<symbol id="industry" viewBox="0 0 64 64">
					<title>industry</title>
					<path d="M9.79,12H16a5,5,0,0,1,4.61,3.06A8,8,0,0,0,35,15.91a6,6,0,0,0,7-6.09A6.17,6.17,0,0,0,35.73,4H14a6,6,0,0,0-6,6v.19A1.81,1.81,0,0,0,9.79,12Z"/>
					<circle cx="53.83" cy="8" r="4"/>
					<circle cx="45.83" cy="6" r="2"/>
					<path d="M6.26,32.71l-.18,2.13A1.07,1.07,0,0,0,7.16,36h9.28a1.07,1.07,0,0,0,1.07-1.16l-.17-2.13a.77.77,0,0,0-.77-.71H7A.77.77,0,0,0,6.26,32.71Z"/>
					<path d="M6.93,24.71l-.18,2.13A1.07,1.07,0,0,0,7.82,28h8a1.07,1.07,0,0,0,1.07-1.16l-.17-2.13a.77.77,0,0,0-.77-.71H7.7A.77.77,0,0,0,6.93,24.71Z"/>
					<path d="M56.23,35.55l-7.46,3.61a1.67,1.67,0,0,0-.94,1.51v4.14a1,1,0,1,1-2,0v-7a2.51,2.51,0,0,0-3.6-2.26l-7.46,3.61a1.67,1.67,0,0,0-.94,1.51v4.14a1,1,0,1,1-2,0v-7a2.51,2.51,0,0,0-3.6-2.26l-6.59,3.24a2.79,2.79,0,0,0-1.56,2.65l.16,3.07a1,1,0,0,1-2,.15L18,41.21A1.31,1.31,0,0,0,16.66,40H7.22a1.7,1.7,0,0,0-1.69,1.56L4.18,57.67A2.15,2.15,0,0,0,6.33,60l51.35-.17a2.15,2.15,0,0,0,2.14-2.15V37.81A2.51,2.51,0,0,0,56.23,35.55Zm-30.4,15.9a.35.35,0,0,1-.35.35H22.18a.35.35,0,0,1-.35-.35V49.92a2.07,2.07,0,0,1,1.66-2.08,2,2,0,0,1,2.34,2Zm16,0a.35.35,0,0,1-.35.35H38.18a.35.35,0,0,1-.35-.35V49.92a2.07,2.07,0,0,1,1.66-2.08,2,2,0,0,1,2.34,2Zm14,0a.35.35,0,0,1-.35.35H52.18a.35.35,0,0,1-.35-.35V49.92a2.07,2.07,0,0,1,1.66-2.08,2,2,0,0,1,2.34,2Z"/>
					<path d="M7.61,16.57l-.19,2.27A1.07,1.07,0,0,0,8.49,20h6.66a1.07,1.07,0,0,0,1.07-1.16L16,16.57a.61.61,0,0,0-.61-.56H8.22A.61.61,0,0,0,7.61,16.57Z"/>
				</symbol>
				</svg>
				<svg class="iconIndustry">
					<use xlink:href="#industry" />
				</svg>
				<!--i class="fa fa-industry faLeftIcon" aria-hidden="true"></i-->
				<i class="fa fa-truck fa-flip-horizontal" aria-hidden="true"></i>
				от производителей</div>
			</div>
			<div class="header-center col-sm-6 col-md-2 col-lg-2">
				{hook h='displayNav1'}
			</div>
			<div class="header-right col-sm-6 col-md-3 col-lg-2">
				<div  id="_mobile_cart"></div>
				<div  id="_mobile_user_info"></div>
				{hook h='displayNav2'}
			</div>
	    </div>
	</div>
</nav>
{/block}
{block name='header_top'}
	<div class="header-top">
		<div class="container">
		<div class="row">
			<div class="header-logo col-sm-4 col-md-4 col-lg-3">
				<div class="main-logo">
					<div class="wi_header_logo">
					<a href="{$urls.base_url}">
					<img class="logo img-responsive" src="{$shop.logo}" alt="{$shop.name}">
					</a>
					</div>
				</div>
			</div>
			<div class="main-slogan hidden-sm-down hidden-md-down col-lg-2">
				<div class="wi_header_slogan">
					<div id="contact-link-slogan"></div>
				</div>
			</div>
			<div class="header-center col-sm-8 col-md-8 col-lg-7">
				<div class="header-menu">
				<div class="container">
				<div class="row">
				<div id="mobile_top_menu_wrapper" class="row hidden-lg-up">
					<div class="menu-icon">
					<div class="menu-title"> <i class="fa fa-bars" aria-hidden="true"></i><span>Меню</span></div>
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
		</div>
		</div>
	</div>	

  {hook h='displayNavFullWidth'}
{/block}