<?php
/* Smarty version 3.1.33, created on 2019-08-24 11:02:00
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/catalog/_partials/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d60eef8729602_45059230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ea2bc1681fe03c07cc204cb7dccd7d1ba6d38b1' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/catalog/_partials/products.tpl',
      1 => 1564555143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/wi-listgrid.tpl' => 1,
    'file:_partials/pagination.tpl' => 1,
  ),
),false)) {
function content_5d60eef8729602_45059230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list">
	<div class="products row">
		<ul class="product_list grid gridcount"> <!-- removed product_grid-->
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2673027705d60eef87241f3_31134977', 'product_miniature');
?>

			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
  

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8166380705d60eef8725fe6_73168539', 'pagination');
?>


	<!--<div class="hidden-md-up text-xs-right up">
		<a href="#header" class="btn btn-secondary">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to top','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

			<i class="material-icons">&#xE316;</i>
		</a>
	</div>-->
</div>
<div class="block-category-button ">
    <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
	<div id="category-description" class="text-muted"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['description']) {?>
    <div id="manufacturer-description"><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['description'];?>
</div>
    <?php }?>
</div>
<?php }
/* {block 'product_miniature'} */
class Block_2673027705d60eef87241f3_31134977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature' => 
  array (
    0 => 'Block_2673027705d60eef87241f3_31134977',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<li class="product_item col-xs-12 col-sm-2 col-md-3 col-lg-3 col-xl-2">
						<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/wi-listgrid.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
					</li>
				<?php
}
}
/* {/block 'product_miniature'} */
/* {block 'pagination'} */
class Block_8166380705d60eef8725fe6_73168539 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_8166380705d60eef8725fe6_73168539',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php $_smarty_tpl->_subTemplateRender('file:_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, false);
?>
	<?php
}
}
/* {/block 'pagination'} */
}
