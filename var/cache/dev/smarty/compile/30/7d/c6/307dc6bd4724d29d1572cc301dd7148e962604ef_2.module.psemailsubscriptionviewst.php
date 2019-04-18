<?php
/* Smarty version 3.1.33, created on 2019-04-17 11:52:11
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb6e93b841d94_41564597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1550645573,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb6e93b841d94_41564597 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl --><div class="block_newsletter col-lg-12 col-md-12 col-sm-12 links block links">
    <h3 class="h3 hidden-md-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Newsletter','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3>
      <div class="title h3 block_title hidden-lg-up" data-target="#block_newsletter" data-toggle="collapse">
        <span class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'News Letter','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
        <span class="float-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">&#xE313;</i>
            <i class="material-icons remove">&#xE316;</i>
          </span>
        </span>
      </div>
    <div class="col-md-7 col-xs-12 form collapse" id="block_newsletter">
      <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
        <div class="row">
          <?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>
            <span class="subtitle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</span>
          <?php }?>
          <div class="col-xs-12 inputbox">
            <div class="input-wrapper">
              <input
                name="email"
                type="text"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter Your Email','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
"
              aria-labelledby="block-newsletter-label"
              >
            </div>
              <input
              class="btn btn-primary float-xs-right hidden-xs-down"
              name="submitNewsletter"
              type="submit"
              value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submit','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
            >
            <input
              class="btn btn-primary float-xs-right hidden-sm-up"
              name="submitNewsletter"
              type="submit"
              value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submit','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
            >
            
            <input type="hidden" name="action" value="0">
            <div class="clearfix"></div>
            <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
                <p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

                </p>
              <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['id_module']->value)) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

              <?php }?>
          </div>
        </div>
      </form>
  </div>
</div>
<!-- end /home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl --><?php }
}
