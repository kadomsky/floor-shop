<?php
/* Smarty version 3.1.33, created on 2019-04-18 12:43:31
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/checkout/cart-empty.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb846c3838d92_01862845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9be782e9b7b409618bc39e6f341c468cc23a5ed9' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/checkout/cart-empty.tpl',
      1 => 1550645573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb846c3838d92_01862845 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3565479325cb846c38324f4_30135792', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3993458455cb846c3833fb7_34868096', 'continue_shopping');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1846733465cb846c3836443_28943716', 'cart_actions');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6708766485cb846c3837535_40555453', 'continue_shopping');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14904070765cb846c3837e63_65181327', 'cart_voucher');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8927556125cb846c3838685_76703485', 'display_reassurance');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'checkout/cart.tpl');
}
/* {block 'content'} */
class Block_3565479325cb846c38324f4_30135792 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3565479325cb846c38324f4_30135792',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCrossSellingShoppingCart'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'content'} */
/* {block 'continue_shopping'} */
class Block_3993458455cb846c3833fb7_34868096 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'continue_shopping' => 
  array (
    0 => 'Block_3993458455cb846c3833fb7_34868096',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <a class="label" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <i class="material-icons">chevron_left</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

  </a>
<?php
}
}
/* {/block 'continue_shopping'} */
/* {block 'cart_actions'} */
class Block_1846733465cb846c3836443_28943716 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_actions' => 
  array (
    0 => 'Block_1846733465cb846c3836443_28943716',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="checkout text-sm-center card-block">
    <button type="button" class="btn btn-primary disabled" disabled><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
  </div>
<?php
}
}
/* {/block 'cart_actions'} */
/* {block 'continue_shopping'} */
class Block_6708766485cb846c3837535_40555453 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'continue_shopping' => 
  array (
    0 => 'Block_6708766485cb846c3837535_40555453',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'continue_shopping'} */
/* {block 'cart_voucher'} */
class Block_14904070765cb846c3837e63_65181327 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_voucher' => 
  array (
    0 => 'Block_14904070765cb846c3837e63_65181327',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'cart_voucher'} */
/* {block 'display_reassurance'} */
class Block_8927556125cb846c3838685_76703485 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'display_reassurance' => 
  array (
    0 => 'Block_8927556125cb846c3838685_76703485',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'display_reassurance'} */
}
