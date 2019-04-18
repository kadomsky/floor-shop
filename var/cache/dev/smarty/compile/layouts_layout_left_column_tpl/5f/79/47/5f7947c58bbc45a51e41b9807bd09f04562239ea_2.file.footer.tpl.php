<?php
/* Smarty version 3.1.33, created on 2019-04-18 12:12:46
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb83f8ead6ab7_47613769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f7947c58bbc45a51e41b9807bd09f04562239ea' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/_partials/footer.tpl',
      1 => 1551346729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb83f8ead6ab7_47613769 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="wi-footer-before">
  <div class="container">
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13537638205cb83f8ead1b52_80394505', 'hook_footer_before');
?>

      </div>
    </div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      <div class="footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20704313725cb83f8ead2b48_30470793', 'hook_footer');
?>

      </div>
  </div>
  </div>
  </div>
  <div class="footer-bottom">
  <div class="container">
  <div class="row">
     <div class="footer-copyright">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6891615145cb83f8ead3a06_71859877', 'copyright_link');
?>

      </div>
      <div class="footer-after">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20625412345cb83f8ead5ec3_54523221', 'hook_footer_after');
?>

      </div>

      </div>
      </div>
    </div>
<a class="wi_top_button" href="#" style="">TOP<i class="fa fa-arrow-up" aria-hidden="true"></i></a>
<?php }
/* {block 'hook_footer_before'} */
class Block_13537638205cb83f8ead1b52_80394505 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_13537638205cb83f8ead1b52_80394505',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_20704313725cb83f8ead2b48_30470793 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_20704313725cb83f8ead2b48_30470793',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'copyright_link'} */
class Block_6891615145cb83f8ead3a06_71859877 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_6891615145cb83f8ead3a06_71859877',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <p class="copyright">
                  <a class="_blank" href="http://www.Kadomsky.net" target="_blank">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %Kadomsky.net%','sprintf'=>array('%Kadomsky.net%'=>'Kadomsky.net™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

                  </a>
                </p>
        <?php
}
}
/* {/block 'copyright_link'} */
/* {block 'hook_footer_after'} */
class Block_20625412345cb83f8ead5ec3_54523221 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_20625412345cb83f8ead5ec3_54523221',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'hook_footer_after'} */
}
