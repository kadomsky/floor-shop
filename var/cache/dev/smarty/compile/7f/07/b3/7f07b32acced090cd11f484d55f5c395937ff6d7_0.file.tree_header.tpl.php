<?php
/* Smarty version 3.1.33, created on 2019-04-04 15:18:43
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/admin444r1iiva/themes/default/template/helpers/tree/tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca5f6238114d1_81317387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f07b32acced090cd11f484d55f5c395937ff6d7' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/admin444r1iiva/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1550644741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca5f6238114d1_81317387 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
