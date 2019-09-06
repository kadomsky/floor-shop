<?php
/* Smarty version 3.1.33, created on 2019-09-06 13:27:16
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/admin444r1iiva/themes/default/template/helpers/tree/tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d723484870e95_36862550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c85e8ee4c8b8336c775488d327d0af0d15a6275b' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/admin444r1iiva/themes/default/template/helpers/tree/tree_toolbar.tpl',
      1 => 1566972078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d723484870e95_36862550 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}
