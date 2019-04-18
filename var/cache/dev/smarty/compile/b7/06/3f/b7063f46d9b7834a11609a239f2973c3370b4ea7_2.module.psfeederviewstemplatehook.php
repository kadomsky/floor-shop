<?php
/* Smarty version 3.1.33, created on 2019-04-17 11:52:11
  from 'module:psfeederviewstemplatehook' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb6e93b1b83b0_21217772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7063f46d9b7834a11609a239f2973c3370b4ea7' => 
    array (
      0 => 'module:psfeederviewstemplatehook',
      1 => 1550646194,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb6e93b1b83b0_21217772 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/a0280957/domains/shop.floor-shop.ru/public_html/modules/ps_feeder/views/template/hook/ps_feeder.tpl --><link rel="alternate" type="application/rss+xml" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'ps_feeder','controller'=>'rss','params'=>array('id_category'=>$_smarty_tpl->tpl_vars['id_category']->value,'orderby'=>$_smarty_tpl->tpl_vars['orderBy']->value,'orderway'=>$_smarty_tpl->tpl_vars['orderWay']->value)),$_smarty_tpl ) );?>
">
<!-- end /home/a0280957/domains/shop.floor-shop.ru/public_html/modules/ps_feeder/views/template/hook/ps_feeder.tpl --><?php }
}
