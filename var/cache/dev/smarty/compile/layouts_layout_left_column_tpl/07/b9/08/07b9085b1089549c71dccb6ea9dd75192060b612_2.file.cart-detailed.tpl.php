<?php
/* Smarty version 3.1.33, created on 2019-08-26 10:19:11
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/checkout/_partials/cart-detailed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d6387ef684e12_92107382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07b9085b1089549c71dccb6ea9dd75192060b612' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/checkout/_partials/cart-detailed.tpl',
      1 => 1550645573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-detailed-product-line.tpl' => 1,
  ),
),false)) {
function content_5d6387ef684e12_92107382 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11135943025d6387ef66d839_98322780', 'cart_detailed_product');
?>

<?php }
/* {block 'cart_detailed_product_line'} */
class Block_11817696615d6387ef679803_34935920 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
          <?php
}
}
/* {/block 'cart_detailed_product_line'} */
/* {block 'cart_detailed_product'} */
class Block_11135943025d6387ef66d839_98322780 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_detailed_product' => 
  array (
    0 => 'Block_11135943025d6387ef66d839_98322780',
  ),
  'cart_detailed_product_line' => 
  array (
    0 => 'Block_11817696615d6387ef679803_34935920',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="cart-overview js-cart" data-refresh-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'cart','params'=>array('ajax'=>true,'action'=>'refresh')),$_smarty_tpl ) );?>
">
  <?php if ($_smarty_tpl->tpl_vars['cart']->value['products']) {?>
  <ul class="cart-items">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
      <li class="cart-item">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11817696615d6387ef679803_34935920', 'cart_detailed_product_line', $this->tplIndex);
?>

</li>
      <?php if (count($_smarty_tpl->tpl_vars['product']->value['customizations']) > 1) {?><hr><?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
  <?php } else { ?>
    <span class="no-items"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are no more items in your cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
  <?php }?>
</div>
<?php
}
}
/* {/block 'cart_detailed_product'} */
}
