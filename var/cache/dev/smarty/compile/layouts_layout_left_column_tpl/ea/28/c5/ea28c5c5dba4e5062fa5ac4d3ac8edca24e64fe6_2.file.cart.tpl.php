<?php
/* Smarty version 3.1.33, created on 2019-04-18 12:43:31
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/checkout/cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb846c384b6f5_12624190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea28c5c5dba4e5062fa5ac4d3ac8edca24e64fe6' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/checkout/cart.tpl',
      1 => 1550645573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-detailed.tpl' => 1,
    'file:checkout/_partials/cart-detailed-totals.tpl' => 1,
    'file:checkout/_partials/cart-detailed-actions.tpl' => 1,
  ),
),false)) {
function content_5cb846c384b6f5_12624190 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20986426825cb846c3841069_29318672', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'cart_overview'} */
class Block_8735307065cb846c3841e50_66806795 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
          <?php
}
}
/* {/block 'cart_overview'} */
/* {block 'continue_shopping'} */
class Block_11711212275cb846c3844f32_37161032 extends Smarty_Internal_Block
{
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
/* {block 'hook_shopping_cart_footer'} */
class Block_18035967185cb846c3846770_02278608 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCartFooter'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'hook_shopping_cart_footer'} */
/* {block 'hook_shopping_cart'} */
class Block_1552397575cb846c3847b12_31707236 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCart'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_shopping_cart'} */
/* {block 'cart_totals'} */
class Block_16031746325cb846c3848920_40139227 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
            <?php
}
}
/* {/block 'cart_totals'} */
/* {block 'cart_actions'} */
class Block_1170913245cb846c3849650_27593561 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
            <?php
}
}
/* {/block 'cart_actions'} */
/* {block 'cart_summary'} */
class Block_799060815cb846c3847604_03303192 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="card cart-summary">

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1552397575cb846c3847b12_31707236', 'hook_shopping_cart', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16031746325cb846c3848920_40139227', 'cart_totals', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1170913245cb846c3849650_27593561', 'cart_actions', $this->tplIndex);
?>


          </div>
        <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'hook_reassurance'} */
class Block_5930590425cb846c384a744_58203623 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'hook_reassurance'} */
/* {block 'content'} */
class Block_20986426825cb846c3841069_29318672 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20986426825cb846c3841069_29318672',
  ),
  'cart_overview' => 
  array (
    0 => 'Block_8735307065cb846c3841e50_66806795',
  ),
  'continue_shopping' => 
  array (
    0 => 'Block_11711212275cb846c3844f32_37161032',
  ),
  'hook_shopping_cart_footer' => 
  array (
    0 => 'Block_18035967185cb846c3846770_02278608',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_799060815cb846c3847604_03303192',
  ),
  'hook_shopping_cart' => 
  array (
    0 => 'Block_1552397575cb846c3847b12_31707236',
  ),
  'cart_totals' => 
  array (
    0 => 'Block_16031746325cb846c3848920_40139227',
  ),
  'cart_actions' => 
  array (
    0 => 'Block_1170913245cb846c3849650_27593561',
  ),
  'hook_reassurance' => 
  array (
    0 => 'Block_5930590425cb846c384a744_58203623',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">
    <div class="cart-grid row">

      <!-- Left Block: cart product informations & shpping -->
      <div class="cart-grid-body col-xs-12 col-lg-8">

        <!-- cart products detailed -->
        <div class="card cart-container">
          <div class="card-block">
            <h1 class="h1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h1>
          </div>
          <hr class="separator">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8735307065cb846c3841e50_66806795', 'cart_overview', $this->tplIndex);
?>

        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11711212275cb846c3844f32_37161032', 'continue_shopping', $this->tplIndex);
?>


        <!-- shipping informations -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18035967185cb846c3846770_02278608', 'hook_shopping_cart_footer', $this->tplIndex);
?>

        </div>

      <!-- Right Block: cart subtotal & cart total -->
      <div class="cart-grid-right col-xs-12 col-lg-4">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_799060815cb846c3847604_03303192', 'cart_summary', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5930590425cb846c384a744_58203623', 'hook_reassurance', $this->tplIndex);
?>


      </div>

    </div>
  </section>
<?php
}
}
/* {/block 'content'} */
}
