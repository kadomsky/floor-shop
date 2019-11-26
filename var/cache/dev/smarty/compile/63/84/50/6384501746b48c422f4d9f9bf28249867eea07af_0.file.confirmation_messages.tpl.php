<?php
/* Smarty version 3.1.33, created on 2019-11-26 13:05:43
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/admin444r1iiva/themes/new-theme/template/components/layout/confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddcf8f723b0e3_48228784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6384501746b48c422f4d9f9bf28249867eea07af' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/admin444r1iiva/themes/new-theme/template/components/layout/confirmation_messages.tpl',
      1 => 1566972080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddcf8f723b0e3_48228784 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
