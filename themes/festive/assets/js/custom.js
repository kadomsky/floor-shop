/* Customized by Webinth  Services */

$(window).load(function () { 
	$("#wi-pageload").fadeOut("slow"); 
	$('body').removeClass("scrolllock");
})

$(document).ready(function(){
	
	bindGrid();
	additionalCarousel("#main #additional-carousel");
	
	$(".wi-flexslider ul > li").addClass(function(i){return "item" + (i + 1);});

	$(".footer .col-md-4.links").addClass(function(i){return "link" + (i + 1);});

	$('.cart_block .block_content').on('click', function (event) {
		event.stopPropagation();
	});

	$('#custom_tab a').tabs();

	// Loading image before flex slider load
	$(window).load(function() { 
		$(".wi-loading").removeClass("spinner"); 
	});
		
		// Add/Remove active class on menu active in responsive  
	$('.menu-icon').on('click', function() {
		$('body').toggleClass('active');
		$('#wrapper').toggleClass('active');
	});

	$('input[name="email"], #search_widget input[type="text"]').focus(function(){
		$(this).data('placeholder',$(this).attr('placeholder')).attr('placeholder','');
	}).blur(function(){
		$(this).attr('placeholder',$(this).data('placeholder'));
	});


	//Search toggle

	$('#header .header-nav .search_button').click(function(event){			
		$(this).parent().toggleClass('active');		
		event.stopPropagation();		
		$('#header .header-nav .search_toggle').slideToggle();		
		$( "#header .header-nav .search-widget form input[type=text]" ).focus();
		$(".user-info").slideUp("slow");
		$('.wi_userinfotitle').removeClass('active');
		$(".cart_block").slideUp("slow");
	
	});
	
	$("#header .header-nav .search_toggle").on("click", function (event) {
		event.stopPropagation();	
	});

	$('.close_button').click(function(event){			
		$(this).parent().removeClass('active');		
		event.stopPropagation();		
		$('#header .header-top .search_toggle').slideToggle();
	});

	//toggle closed when other open
		
	$(".wi_userinfotitle").click(function(){
		   	$(".cart_block").slideUp("slow");
   			$("#header .search_toggle").slideUp("slow");
			$('#search_widget').removeClass('active');
        	return false;
    	});

	$('#_desktop_cart').on('click', function() {
			$(".user-info").slideUp("slow");
			$('.wi_userinfotitle').removeClass('active');

			$("#header .search_toggle").slideUp("slow");
			$('#search_widget').removeClass('active');
		});

		"use strict";   
    	$("#top-menu .sub-menu li").parent().parent().parent().addClass("mega");
//    	$("#top-menu .sub-menu li:has(ul)").parent().parent().parent().addClass("mega");

    	//add more links in when menu is above max_elem

		var max_elem = 5;	
		if($(window).width() <=1289){ max_elem = 4;}
		if($(window).width() <=1199){ max_elem = 3;}
		var items = $('.menu ul#top-menu > li');	
		var surplus = items.slice(max_elem, items.length);
		
		surplus.wrapAll('<li class="category more_menu" id="more_menu"><div id="top_moremenu" class="popover sub-menu js-sub-menu collapse"><ul class="top-menu more_sub_menu">');
		
		//alert('Hello');

		$('.menu ul#top-menu .more_menu').prepend('<a href="#" class="dropdown-item" data-depth="0"><span class="float-xs-right hidden-md-up"><span data-target="#top_moremenu" data-toggle="collapse" class="navbar-toggler collapse-icons"><i class="material-icons add">&#xE313;</i><i class="material-icons remove">&#xE316;</i></span></span></span>More</a>');
	
		$('.menu ul#top-menu .more_menu').mouseover(function(){
			$(this).children('div').css('display', 'block');
		})
		.mouseout(function(){
			$(this).children('div').css('display', 'none');
		});
	// ---------------- end more menu setting ----------------------
	$("#contact-link-slogan").html($("div#contact-link a:first-child").clone());

});
$(document).click(function(){
	$(".cart_block").slideUp("slow");
	$(".user-info").slideUp("slow");
	$('.wi_userinfotitle').removeClass('active');
});

// Add/Remove acttive class on menu active in responsive  
	$('#menu-icon').on('click', function() {
		$(this).toggleClass('active');
	});

// Loading image before flex slider load
	$(window).load(function() { 
		$(".wi-loading").removeClass("spinner"); 
	});

// Flex slider load
	$(window).load(function() {
		if($('.wi-flexslider').length > 0){ 
			$('.wi-flexslider').flexslider({		
				slideshowSpeed: $('.flexslider').data('interval'),
				pauseOnHover: $('.flexslider').data('pause'),
				animation: "fade",
				prevText: "Prev", 
				nextText: "Next", 
			});
		}
	});		

// Scroll page bottom to top
	$(window).scroll(function() {
		if ($(this).scrollTop() > 500) {
			$('.wi_top_button').addClass("fixed");
		} else {
			$('.wi_top_button').removeClass("fixed");
		}
	});							
	$('.wi_top_button').click(function(event) {
		event.preventDefault();		
		$('html, body').animate({scrollTop: 0}, 800);
	});


/* Additional Product Carousel  */
function additionalCarousel(sliderId){
	/*======  curosol For Additional ==== */
	 var wiadditional = $(sliderId);
      wiadditional.owlCarousel({
     	 items : 4, //10 items above 1000px browser width
     	 itemsDesktop : [1289,3], 
     	 itemsDesktopSmall : [991,2], 
     	 itemsTablet: [767,2], 
     	 itemsMobile : [320,2] 
      });
      // Custom Navigation Events
      $(".additional_next").click(function(){
        wiadditional.trigger('owl.next');
      })
      $(".additional_prev").click(function(){
        wiadditional.trigger('owl.prev');
      });
}


/* Feature Product Slider */
	
	var wifeature = $("#wi-feature-carousel");
	wifeature.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1119,3], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2],
		itemsMobile : [479,1] 
	});

	// Custom Navigation Events
	$(".slider_next").click(function(){
		wifeature.trigger('owl.next');
	})
	$(".slider_prev").click(function(){
		wifeature.trigger('owl.prev');
	});
	

/* New Product Slider */
	
	var winewproduct = $("#wi-newproduct-carousel");
	winewproduct.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1119,3], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2],
		itemsMobile : [479,1] 
	});
	// Custom Navigation Events
	$(".slider_next").click(function(){
		winewproduct.trigger('owl.next');
	})
	$(".slider_prev").click(function(){
		winewproduct.trigger('owl.prev');
	});


/* Bestseller Product Slider */
	
	var wibestseller = $("#wi-bestseller-carousel");
	wibestseller.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1119,3], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2],
		itemsMobile : [479,1] 
	});
	// Custom Navigation Events
	$(".slider_next").click(function(){
		wibestseller.trigger('owl.next');
	})
	$(".slider_prev").click(function(){
		wibestseller.trigger('owl.prev');
	});


/* Special Product Slider */

	var wispecial = $("#wi-special-carousel");
	wispecial.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1119,3], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2],
		itemsMobile : [479,1] 
	});
	// Custom Navigation Events
	$(".special_next").click(function(){
		wispecial.trigger('owl.next');
	})
	$(".special_prev").click(function(){
		wispecial.trigger('owl.prev');
	});


/* Accessories Product Slider */

	var wiaccessories = $("#wi-accessories-carousel");
	wiaccessories.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1119,3], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2],
		itemsMobile : [479,1] 
	});
	// Custom Navigation Events
	$(".accessories_next").click(function(){
		wiaccessories.trigger('owl.next');
	})
	$(".accessories_prev").click(function(){
		wiaccessories.trigger('owl.prev');
	});


/* Category Product Slider */

	var wiproductscategory = $("#wi-productscategory-carousel");
	wiproductscategory.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1119,3], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2],
		itemsMobile : [479,1] 
	});
	// Custom Navigation Events
	$(".productscategory_next").click(function(){
		wiproductscategory.trigger('owl.next');
	})
	$(".productscategory_prev").click(function(){
		wiproductscategory.trigger('owl.prev');
	});


/* Viewed Product Slider */

	var wiviewed = $("#wi-viewed-carousel");
	wiviewed.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1119,3], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2],
		itemsMobile : [479,1] 
	});
	// Custom Navigation Events
	$(".viewed_next").click(function(){
		wiviewed.trigger('owl.next');
	})
	$(".viewed_prev").click(function(){
		wiviewed.trigger('owl.prev');
	});	


/* Crosssell Product Slider */

	var wicrosssell = $("#wi-crosssell-carousel");
	wicrosssell.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1119,3], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2],
		itemsMobile : [479,1] 
	});
	// Custom Navigation Events
	$(".crosssell_next").click(function(){
		wicrosssell.trigger('owl.next');
	})
	$(".crosssell_prev").click(function(){
		wicrosssell.trigger('owl.prev');
	});

/* Manufacture Slider */
	 var wibrand = $("#wi-brand-carousel");
      wibrand.owlCarousel({
      	 dots:false,
     	 items : 6, //10 items above 1000px browser width
     	 itemsDesktop : [1289,4], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [543,2],
		itemsMobile : [479,1] 
      });
      // Custom Navigation Events
      $(".brand_next").click(function(){
        wibrand.trigger('owl.next');
      })
      $(".brand_prev").click(function(){
        wibrand.trigger('owl.prev');
      });


/* Blog Slider */
	
	var wiblog = $("#blog-carousel");
	wiblog.owlCarousel({
		autoPlay: false,
		navigation: true,
		dots: false,
		items : 3, //10 items above 1000px browser width
     	itemsDesktop : [1289,3], 
		itemsDesktopSmall : [991,2], 
		itemsTablet: [767,2],
		itemsMobile : [543,1] 
	});
	
	$(".blog_next").click(function(){
	wiblog.trigger('owl.next');
	})
	$(".blog_prev").click(function(){
		wiblog.trigger('owl.prev');
	});


/* Testimonial  Slider */

	var witestimonial = $("#testimonial-carousel");
	witestimonial.owlCarousel({
		autoPlay: false,
		animateOut: 'fadeOut',
		dots: true,
		items : 1, //10 items above 1000px browser width
		itemsDesktop : [1199,1], 
		itemsDesktopSmall : [991,1], 
		itemsTablet: [543,1], 
		itemsMobile : [319,1] 

	});
	$(".testimonial_next").click(function(){
		witestimonial.trigger('owl.next');
	})
	$(".testimonial_prev").click(function(){
		witestimonial.trigger('owl.prev');
	});


/* Category list Slider */
	
	var wicategory = $("#wicategorylist-carousel");
	wicategory.owlCarousel({
		items : 6, //10 items above 1000px browser width
		itemsDesktop : [1289,4], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2],
		itemsMobile : [479,1]
	});

	// Custom Navigation Events
	$(".cat_next").click(function(){
		wicategory.trigger('owl.next');
	})
	$(".cat_prev").click(function(){
		wicategory.trigger('owl.prev');
	});

// ---------------- Fixed header responsive ----------------------
$(window).bind('scroll', function () {
	if ($(window).scrollTop() > 200) {
		$('#header .header-menu').addClass('fixed');
		$('#_desktop_cart').insertAfter('.header-menu.fixed #_desktop_top_menu');
		$('#_mobile_cart').insertAfter('.header-menu.fixed #_desktop_top_menu');
	}else{
		$('#header .header-menu').removeClass('fixed');
		$('#_desktop_cart').prependTo('.header-nav .header-right');
		$('#_mobile_cart').prependTo('.header-nav .header-right');
		}
	});


function bindGrid()
{
	var view = $.totalStorage("display");

	if (view && view != 'grid')
		display(view);
	else
		$('.display').find('li#grid').addClass('selected');

	$(document).on('click', '#grid', function(e){
		e.preventDefault();
		display('grid');
	});

	$(document).on('click', '#list', function(e){
		e.preventDefault();
		display('list');		
	});	
}

function display(view)
{
	if (view == 'list')
	{
		$('#products ul.product_list').removeClass('grid').addClass('list row');
		$('#products .product_list > li').removeClass('col-xs-12 col-sm-2 col-md-4 col-lg-6').addClass('col-xs-12');
		
		
		$('#products .product_list > li').each(function(index, element) {
			var html = '';
			html = '<div class="product-miniature js-product-miniature" data-id-product="'+ $(element).find('.product-miniature').data('id-product') +'" data-id-product-attribute="'+ $(element).find('.product-miniature').data('id-product-attribute') +'" itemscope itemtype="http://schema.org/Product"><div class="row">';
				html += '<div class="thumbnail-container col-xs-4 col-xs-5 col-md-4">' + $(element).find('.thumbnail-container').html() + '</div>';
				
				html += '<div class="product-description center-block col-xs-4 col-xs-7 col-md-8">';
					html += '<h1 class="h3 product-title" itemprop="name">'+ $(element).find('h1').html() + '</h1>';

					html += '<div class="comments_note">'+ $(element).find('.comments_note').html() + '</div>';
					
					html += '<div class="product-detail">'+ $(element).find('.product-detail').html() + '</div>';
					
					var colorList = $(element).find('.highlighted-informations').html();
					if (colorList != null) {
						html += '<div class="highlighted-informations">'+ colorList +'</div>';
					}

					var price = $(element).find('.product-price-and-shipping').html();       // check : catalog mode is enabled
					if (price != null) {
						html += '<div class="product-price-and-shipping">'+ price + '</div>';
					}
					
					html += '<div class="hoverimage">'+ $(element).find('.hoverimage').html() + '</div>';
				html += '</div>';
			html += '</div></div>';
		$(element).html(html);
		});
		$('.display').find('li#list').addClass('selected');
		$('.display').find('li#grid').removeAttr('class');
		$.totalStorage('display', 'list');
	}
	else
	{
		$('#products ul.product_list').removeClass('list').addClass('grid row');
		$('#products .product_list > li').removeClass('col-xs-12').addClass('col-xs-12 col-sm-2 col-md-4 col-lg-6');
		$('#products .product_list > li').each(function(index, element) {
		var html = '';
		html += '<div class="product-miniature js-product-miniature" data-id-product="'+ $(element).find('.product-miniature').data('id-product') +'" data-id-product-attribute="'+ $(element).find('.product-miniature').data('id-product-attribute') +'" itemscope itemtype="http://schema.org/Product">';
			html += '<div class="thumbnail-container">' + $(element).find('.thumbnail-container').html() +'</div>';
			
			html += '<div class="product-description">';

				html += '<h1 class="h3 product-title" itemprop="name">'+ $(element).find('h1').html() +'</h1>';
				
				html += '<div class="comments_note">'+ $(element).find('.comments_note').html() + '</div>';

				var price = $(element).find('.product-price-and-shipping').html();       // check : catalog mode is enabled
				if (price != null) {
					html += '<div class="product-price-and-shipping">'+ price + '</div>';
				}

				html += '<div class="product-detail">'+ $(element).find('.product-detail').html() + '</div>';
				
				var colorList = $(element).find('.highlighted-informations').html();
				if (colorList != null) {
					html += '<div class="highlighted-informations">'+ colorList +'</div>';
				}
				
			html += '</div>';
		html += '</div>';
		$(element).html(html);
		});
		$('.display').find('li#grid').addClass('selected');
		$('.display').find('li#list').removeAttr('class');
		$.totalStorage('display', 'grid');
	}
}


function responsivecolumn(){
if ($(document).width() <= 991)
{
$('#wrapper #columns_inner #left-column').appendTo('#wrapper #columns_inner');

}
else if($(document).width() >= 992)
{
$('#wrapper #columns_inner #left-column').prependTo('#wrapper #columns_inner');

}
}
$(document).ready(function(){responsivecolumn();});
$(window).resize(function(){responsivecolumn();});


/* Js gor Tabs adds by Webinth */
$.fn.tabs = function() {
	var selector = this;
	
	this.each(function() {
		var obj = $(this); 
		
		$(obj.attr('href')).hide();
		
		obj.click(function() {
			$(selector).removeClass('selected');
			
			$(this).addClass('selected');
			
			$($(this).attr('href')).fadeIn();
			
			$(selector).not(this).each(function(i, element) {
				$($(element).attr('href')).hide();
			});
			return false;
		});
	});

	$(this).show();
	
	$(this).first().click();
	
};

//sign in toggle
$(document).ready(function(){
	
	 $('.wi_userinfotitle').click(function(event){
		  $(this).toggleClass('active');
		  event.stopPropagation();
		  $(".user-info").slideToggle("fast");
		});
		$(".user-info").on("click", function (event) {
		  event.stopPropagation();
		});
		
});




