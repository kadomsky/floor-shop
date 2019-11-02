<?php
/* Smarty version 3.1.33, created on 2019-11-02 08:54:54
  from 'module:wifeaturedproductsviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbd1a2e12c0e5_91277823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e905110a5182e24de63f7192ab1919cb69871de' => 
    array (
      0 => 'module:wifeaturedproductsviewste',
      1 => 1550645572,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5dbd1a2e12c0e5_91277823 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13957353825dbd1a2e124274_62931950';
?>

<section class="wi-featured-products clearfix">
<div class="container">
<div class="row">
	<h2 class="h1 products-section-title text-uppercase">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Featured products','mod'=>'wi_featuredproducts'),$_smarty_tpl ) );?>

	</h2>
	<div class="products">	
	<div class="product_featured">		
		<?php $_smarty_tpl->_assignInScope('sliderVal', 5);?> <!-- Define Number of product for SLIDER -->
		<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderVal']->value) {?>
			<ul id="wi-feature-carousel" class="wi-carousel product_list">
		<?php } else { ?>
			<ul id="wi-feature-grid" class="featured_grid product_list grid row gridcount">
		<?php }?>
		
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
			<li class="<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderVal']->value) {?>slider_item<?php } else { ?>product_item col-xs-12 col-sm-6 col-md-4 col-lg-2<?php }?>">
				<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
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
			<a class="all-product-link pull-xs-left pull-md-right h4" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allProductsLink']->value, ENT_QUOTES, 'UTF-8');?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'See all products','mod'=>'wi_featuredproducts'),$_smarty_tpl ) );?>
<i class="material-icons">&#xE315;</i>
			</a>
		<?php }?>
		</div>
	</div>
	</div>
</div>
</section>
<?php }
}
