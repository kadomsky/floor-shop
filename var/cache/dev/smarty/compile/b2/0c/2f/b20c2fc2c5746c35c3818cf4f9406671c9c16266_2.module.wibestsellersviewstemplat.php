<?php
/* Smarty version 3.1.33, created on 2019-08-01 11:35:41
  from 'module:wibestsellersviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42a45d978824_07066478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b20c2fc2c5746c35c3818cf4f9406671c9c16266' => 
    array (
      0 => 'module:wibestsellersviewstemplat',
      1 => 1550645572,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5d42a45d978824_07066478 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/a0280957/domains/shop.floor-shop.ru/public_html/modules/wi_bestsellers/views/templates/hook/wi_bestsellers.tpl -->
<section class="wi-bestseller-products">
	<h2 class="h1 products-section-title text-uppercase">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Best Sellers','mod'=>'wi_bestsellers'),$_smarty_tpl ) );?>

	</h2>
	<div class="products">	
	<div class="product_bestseller">
		<?php $_smarty_tpl->_assignInScope('sliderVal', 5);?> <!-- Define Number of product for SLIDER -->
		<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderVal']->value) {?>
			<ul id="wi-bestseller-carousel" class="wi-carousel product_list">
		<?php } else { ?>
			<ul id="wi-bestseller-grid" class="bestseller_grid product_list grid row gridcount">
		<?php }?>
		
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
			<li class="<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderVal']->value) {?>slider_item<?php } else { ?>product_item col-xs-12 col-sm-6 col-md-4 col-lg-2<?php }?>">
				<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
			</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
		
		<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderVal']->value) {?>
			<div class="customNavigation">
				<a class="btn prev slider_prev">&nbsp;</a>
				<a class="btn next slider_next">&nbsp;</a>
			</div>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['slider']->value == 0 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderVal']->value) {?>
		<a class="all-product-link pull-xs-left pull-md-right h4" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allBestSellers']->value, ENT_QUOTES, 'UTF-8');?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'see all best sellers','mod'=>'wi_bestsellers'),$_smarty_tpl ) );?>
<i class="material-icons">&#xE315;</i>
		</a>
		<?php }?>
		</div>
	</div>
</section>
<!-- end /home/a0280957/domains/shop.floor-shop.ru/public_html/modules/wi_bestsellers/views/templates/hook/wi_bestsellers.tpl --><?php }
}
