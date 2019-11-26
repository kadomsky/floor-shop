<?php
/* Smarty version 3.1.33, created on 2019-11-26 15:40:45
  from 'module:pscontactinfopscontactinf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddd1d4d2dfeb9_24749227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:pscontactinfopscontactinf',
      1 => 1552398564,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddd1d4d2dfeb9_24749227 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/modules/ps_contactinfo/ps_contactinfo.tpl -->
<div class="block-contact col-md-4 links wrapper">
  
  <h3 class="text-uppercase block-contact-title hidden-sm-down"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['stores'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a></h3>
      
    <div class="title clearfix hidden-md-up" data-target="#block-contact_list" data-toggle="collapse">
      <span class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
      <span class="float-xs-right">
        <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
        </span>
      </span>
    </div>
    
    <ul id="block-contact_list" class="collapse">
    <div class="contact_address info">
    <!-- <div class="address"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address :','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div> -->
      <div class="shop-address">
      <?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted'];?>

      </div>
      </div>
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?> <div class="contact_phone info"><!-- <div class="phone"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone :','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div> -->
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]%phone%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

        </div>
      <?php }?>
      
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?><div class="contact_fax info"><!-- <div class="fax"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fax :','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div> -->
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]%fax%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%fax%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['fax']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

        </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?> <div class="contact_email info"><!-- <div class="mail"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'E-mail :','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div> -->
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]%email%[/1]','sprintf'=>array('[1]'=>(('<a href="mailto:').($_smarty_tpl->tpl_vars['contact_infos']->value['email'])).('" class="dropdown">'),'[/1]'=>'</a>','%email%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

        </div>
      <?php }?>
      
    </ul>
  
</div><!-- end /home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/modules/ps_contactinfo/ps_contactinfo.tpl --><?php }
}
