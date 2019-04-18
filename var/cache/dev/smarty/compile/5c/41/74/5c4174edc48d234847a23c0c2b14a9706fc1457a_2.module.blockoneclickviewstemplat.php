<?php
/* Smarty version 3.1.33, created on 2019-04-17 11:52:11
  from 'module:blockoneclickviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb6e93b47b690_61146389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c4174edc48d234847a23c0c2b14a9706fc1457a' => 
    array (
      0 => 'module:blockoneclickviewstemplat',
      1 => 1555491117,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb6e93b47b690_61146389 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/a0280957/domains/shop.floor-shop.ru/public_html/modules/blockoneclick/views/templates/front/button.tpl --><!--заказ в один клик-->
<?php if (isset($_smarty_tpl->tpl_vars['id_product']->value)) {?>
<button class="oneClickButton btn-danger" data-id-product="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_product']->value), ENT_QUOTES, 'UTF-8');?>
"><span>Забрать в один клик</span></button>
<?php }?>
<!--// заказ в один клик--><!-- end /home/a0280957/domains/shop.floor-shop.ru/public_html/modules/blockoneclick/views/templates/front/button.tpl --><?php }
}
