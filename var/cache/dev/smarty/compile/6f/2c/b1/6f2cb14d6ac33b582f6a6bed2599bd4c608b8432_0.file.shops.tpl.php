<?php
/* Smarty version 3.1.33, created on 2019-08-01 11:30:57
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/modules/ps_facetedsearch/views/templates/admin/_partials/shops.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42a34187e2a9_58412997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f2cb14d6ac33b582f6a6bed2599bd4c608b8432' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/modules/ps_facetedsearch/views/templates/admin/_partials/shops.tpl',
      1 => 1562920116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42a34187e2a9_58412997 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['asso_shops']->value)) {?>
  <div class="form-group">
    <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose shop association:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
    <div class="col-lg-9"><?php echo $_smarty_tpl->tpl_vars['asso_shops']->value;?>
</div>
  </div>
<?php }
}
}
