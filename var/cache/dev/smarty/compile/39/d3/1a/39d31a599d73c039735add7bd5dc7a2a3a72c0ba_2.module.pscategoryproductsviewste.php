<?php
/* Smarty version 3.1.33, created on 2019-04-17 11:52:11
  from 'module:pscategoryproductsviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb6e93b747f36_03743896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39d31a599d73c039735add7bd5dc7a2a3a72c0ba' => 
    array (
      0 => 'module:pscategoryproductsviewste',
      1 => 1550645573,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5cb6e93b747f36_03743896 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/modules/ps_categoryproducts/views/templates/hook/ps_categoryproducts.tpl --><section class="wi-productscategory-products clearfix mt-3">
	<div class="products-tab-content">
	<h2 class="h1 products-section-title text-uppercase">
	<span class="title-inner">
	<?php if (count($_smarty_tpl->tpl_vars['products']->value) == 1) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s other product in the same category:','sprintf'=>array(count($_smarty_tpl->tpl_vars['products']->value)),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

	<?php } else { ?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s other products in the same category:','sprintf'=>array(count($_smarty_tpl->tpl_vars['products']->value)),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

	<?php }?>
	</span>
	</h2>
  	</div>
	<div class="products">
	<div class="product_category">
		<?php $_smarty_tpl->_assignInScope('sliderVal', 5);?> <!-- Define Number of product for SLIDER -->
		<?php $_smarty_tpl->_assignInScope('productsCount', count($_smarty_tpl->tpl_vars['products']->value));?>
		
		<?php if ($_smarty_tpl->tpl_vars['productsCount']->value >= $_smarty_tpl->tpl_vars['sliderVal']->value) {?>
			<ul id="wi-productscategory-carousel" class="wi-carousel product_list">
		<?php } else { ?>
			<ul id="wi-productscategory-grid" class="productscategory_grid product_list grid row gridcount">
		<?php }?>
	
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
			<li class="<?php if ($_smarty_tpl->tpl_vars['productsCount']->value >= $_smarty_tpl->tpl_vars['sliderVal']->value) {?>item<?php } else { ?>product_item col-xs-12 col-sm-2 col-md-4 col-lg-6<?php }?>">
				<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
			</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
		
		<?php if ($_smarty_tpl->tpl_vars['productsCount']->value >= $_smarty_tpl->tpl_vars['sliderVal']->value) {?>
			<div class="customNavigation">
				<a class="btn prev wi_productscategory_prev">&nbsp;</a>
				<a class="btn next wi_productscategory_next">&nbsp;</a>
			</div>
		<?php }?>
		</div>
	</div>
</section>
<!-- end /home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/modules/ps_categoryproducts/views/templates/hook/ps_categoryproducts.tpl --><?php }
}
