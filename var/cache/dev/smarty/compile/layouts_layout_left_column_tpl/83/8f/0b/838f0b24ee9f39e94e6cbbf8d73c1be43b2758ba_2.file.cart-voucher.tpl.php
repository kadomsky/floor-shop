<?php
/* Smarty version 3.1.33, created on 2019-08-26 10:19:11
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/checkout/_partials/cart-voucher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d6387ef6f71c5_38905640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '838f0b24ee9f39e94e6cbbf8d73c1be43b2758ba' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/checkout/_partials/cart-voucher.tpl',
      1 => 1550645573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d6387ef6f71c5_38905640 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['cart']->value['vouchers']['allowed']) {?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4593377395d6387ef6e61a6_89024402', 'cart_voucher');
?>

<?php }
}
/* {block 'cart_voucher_list'} */
class Block_11648610865d6387ef6e7679_35954893 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <ul class="promo-name card-block">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['vouchers']['added'], 'voucher');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->value) {
?>
            <li class="cart-summary-line">
              <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['delete_url'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="remove-voucher"><i class="material-icons">&#xE872;</i></a>
                  <div class="float-xs-right">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['reduction_formatted'], ENT_QUOTES, 'UTF-8');?>

              </div>
            </li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
          <?php
}
}
/* {/block 'cart_voucher_list'} */
/* {block 'cart_voucher_form'} */
class Block_13701058825d6387ef6eefe9_99278998 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="add-voucher" method="post">
          <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
          <input type="hidden" name="addDiscount" value="1">
          <input class="promo-input" type="text" name="discount_name" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Promo code','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
">
          <button type="submit" class="btn btn-primary"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></button>
        </form>
          <?php
}
}
/* {/block 'cart_voucher_form'} */
/* {block 'cart_voucher_notifications'} */
class Block_17397046905d6387ef6f28f5_82469720 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="alert alert-danger js-error" role="alert">
              <i class="material-icons">&#xE001;</i><span class="ml-1 js-error-text"></span>
        </div>
          <?php
}
}
/* {/block 'cart_voucher_notifications'} */
/* {block 'cart_voucher'} */
class Block_4593377395d6387ef6e61a6_89024402 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_voucher' => 
  array (
    0 => 'Block_4593377395d6387ef6e61a6_89024402',
  ),
  'cart_voucher_list' => 
  array (
    0 => 'Block_11648610865d6387ef6e7679_35954893',
  ),
  'cart_voucher_form' => 
  array (
    0 => 'Block_13701058825d6387ef6eefe9_99278998',
  ),
  'cart_voucher_notifications' => 
  array (
    0 => 'Block_17397046905d6387ef6f28f5_82469720',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="block-promo">
    <div class="cart-voucher">
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['vouchers']['added']) {?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11648610865d6387ef6e7679_35954893', 'cart_voucher_list', $this->tplIndex);
?>

      <?php }?>

      <p>
        <a class="collapse-button promo-code-button" data-toggle="collapse" href="#promo-code" aria-expanded="false" aria-controls="promo-code">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Have a promo code?','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

        </a>
      </p>

      <div class="promo-code collapse<?php if (count($_smarty_tpl->tpl_vars['cart']->value['discounts']) > 0) {?> in<?php }?>" id="promo-code">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13701058825d6387ef6eefe9_99278998', 'cart_voucher_form', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17397046905d6387ef6f28f5_82469720', 'cart_voucher_notifications', $this->tplIndex);
?>

      </div>

      <?php if (count($_smarty_tpl->tpl_vars['cart']->value['discounts']) > 0) {?>
        <p class="block-promo promo-highlighted">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Take advantage of our exclusive offers:','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

        </p>
        <ul class="js-discount card-block promo-discounts">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['discounts'], 'discount');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['discount']->value) {
?>
          <li class="cart-summary-line">
            <span class="label"><span class="code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['code'], ENT_QUOTES, 'UTF-8');?>
</span> - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
          </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      <?php }?>
    </div>
  </div>
  <?php
}
}
/* {/block 'cart_voucher'} */
}
