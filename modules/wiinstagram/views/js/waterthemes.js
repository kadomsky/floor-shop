/**
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
*/

function getWidthBrowser() {
	var myWidth;

	if( typeof( window.innerWidth ) == 'number' ) { 
		//Non-IE 
		myWidth = window.innerWidth;
		//myHeight = window.innerHeight; 
	} 
	else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) { 
		//IE 6+ in 'standards compliant mode' 
		myWidth = document.documentElement.clientWidth; 
		//myHeight = document.documentElement.clientHeight; 
	} 
	else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) { 
		//IE 4 compatible 
		myWidth = document.body.clientWidth; 
		//myHeight = document.body.clientHeight; 
	}
	
	return myWidth;
}

function isMobileIpad() {
	if(navigator.userAgent.match(/Android/i) ||
		navigator.userAgent.match(/webOS/i) ||
		navigator.userAgent.match(/iPad/i) ||
		navigator.userAgent.match(/iPhone/i) ||
		navigator.userAgent.match(/iPod/i)
		){
			return true;
	}
	else return false;
}

function isMobile() {
	if(navigator.userAgent.match(/Android/i) ||
		navigator.userAgent.match(/webOS/i) ||
		navigator.userAgent.match(/iPhone/i) ||
		navigator.userAgent.match(/iPod/i)
		){
			return true;
	}
	else return false;
}

function checkBrowser()
{
	var isOpera = !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;
	var isFirefox = typeof InstallTrigger !== 'undefined';
	var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;
	var isChrome = !!window.chrome && !isOpera;
	var isIE = false || !!document.documentMode;
	
	if(isChrome || isSafari)
	{
		$('.bn-top-home ul li:first-child').css('margin-bottom','1px');
	}
	else
		return false;
}


$(document).ready(function()
{
	
		runSliderimagesIns();


	
	
	
	
});
$(window).resize(function() {
			runSliderimagesIns();
	});
	
function runSliderimagesIns(){
	
	var item_instag = 5;
		
		if(getWidthBrowser() > 1459)
		{	
			item_instag = 5; 
		}
		else
		if(getWidthBrowser() > 991)
		{	
			item_instag = 4; 
		}
		else
		if(getWidthBrowser() > 767)
		{	
			item_instag = 3; 
		}		
		else
		if(getWidthBrowser() > 540)
		{	
			item_instag = 2; 
		}
		else
		if(getWidthBrowser() > 320)
		{	
			item_instag = 2; 
		}			
		
			$('#carousel_instagram').carouFredSel({
				responsive: true,
				width: '100%',
				height: 'variable',
				onWindowResize: 'debounce',
				prev: '#prev_instagram',
				next: '#next_instagram',
				auto: false,
				swipe: {
					onTouch : true
				},
				items: {
					width:330,
					height: 'auto',
					visible: {
						min: 1,
						max: item_instag
					}
				},
				scroll: {
					items:2,
					direction : 'left',    
					duration  : 700 ,  
					onBefore: function(data) { 
						
					},
					onAfter	: function(data) {
						var n=5;
						n=data.items.visible.length;
						
				   }
				}
			});
	}
