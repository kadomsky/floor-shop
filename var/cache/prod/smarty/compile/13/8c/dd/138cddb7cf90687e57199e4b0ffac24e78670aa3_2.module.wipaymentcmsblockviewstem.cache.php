<?php
/* Smarty version 3.1.33, created on 2019-11-02 08:54:54
  from 'module:wipaymentcmsblockviewstem' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbd1a2e2582b2_43232214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '138cddb7cf90687e57199e4b0ffac24e78670aa3' => 
    array (
      0 => 'module:wipaymentcmsblockviewstem',
      1 => 1550645572,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbd1a2e2582b2_43232214 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '6144466325dbd1a2e2569f0_94383840';
?>

<div id="wipaymentcmsblock" class="col-md-4 links block links">
   <div class="title clearfix hidden-lg-up" data-target="#payment_block" data-toggle="collapse">
        <span class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
        <span class="float-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">&#xE313;</i>
            <i class="material-icons remove">&#xE316;</i>
          </span>
        </span>
      </div>
  <ul class="payment-cms collapse" id="payment_block">
   <?php echo $_smarty_tpl->tpl_vars['wipaymentcmsblockinfos']->value['text'];?>

</ul>

</div><?php }
}
