<?php
/* Smarty version 3.1.33, created on 2019-08-26 10:19:26
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/checkout/_partials/cart-summary-items-subtotal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d6387fe1397d8_07577971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e01df045a802e9643d349f6377ab3491e881779' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/checkout/_partials/cart-summary-items-subtotal.tpl',
      1 => 1550645573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d6387fe1397d8_07577971 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9868672625d6387fe138012_97212460', 'cart_summary_items_subtotal');
?>

<?php }
/* {block 'cart_summary_items_subtotal'} */
class Block_9868672625d6387fe138012_97212460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_items_subtotal' => 
  array (
    0 => 'Block_9868672625d6387fe138012_97212460',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card-block cart-summary-line cart-summary-items-subtotal clearfix" id="items-subtotal">
  <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</span>
  <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
</div>
<?php
}
}
/* {/block 'cart_summary_items_subtotal'} */
}
