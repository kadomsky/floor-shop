<?php
/* Smarty version 3.1.33, created on 2019-04-17 11:52:20
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/modules/blockoneclick/views/templates/front/ajax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb6e944cb5db2_17061221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50b9172d4a17dc10f2a09e59dfb72f32c17f73c2' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/modules/blockoneclick/views/templates/front/ajax.tpl',
      1 => 1555491117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb6e944cb5db2_17061221 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="OneClickfancyBlock">
<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request_uri']->value, ENT_QUOTES, 'UTF-8');?>
" method="post" class="oneClickSendMessage" name="OneClickoneClickSendMessage" enctype="multipart/form-data">

<fieldset>
<div id="leftBlockOneClick">
<h2 class="page-heading bottom-indent">Заказ в ОДИН клик</h2>
<input type="hidden" id="OneClickid_contact" class="form-control" name="OneClickid_contact" value="1">
<input type="hidden" id="OneClickaction" class="form-action" name="action" value="submitOneClick">
<label for="OneClickemail">Укажите e-mail (очень желательно)</label>
<input class="form-control grey validate" type="text" id="OneClickemail" name="OneClickfrom" data-validate="isEmail" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['email']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" size="30" />

<label for="OneClickphone">Укажите Телефон <b style='color:red' id="BOCmessagePhone">(обязательно)</b></label>
<input class="form-control grey" type="text" id="OneClickphone" name="OneClickphone" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['phone']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" size="30" placeholder="+7(___)___-__-__" />
<label for="OneClickqty">Укажите Количество (желательно)</label><br>
<input type="text" id="OneClickqty" name="OneClickqty" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['qty']->value), ENT_QUOTES, 'UTF-8');?>
" size="3" style="width:30px" /> x <b id="OneClickcurrent-price-clone"><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value->price), ENT_QUOTES, 'UTF-8');?>
р.</b>
<input type="hidden" name="OneClickid_product" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value->id), ENT_QUOTES, 'UTF-8');?>
">
<label for="OneClickmessage">Комментарий по связи и доставке (не обязателен)</label>
<textarea class="form-control" id="OneClickmessage" name="OneClickmessage"><?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {
echo htmlspecialchars(stripslashes(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['message']->value,'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');
}?></textarea>
<div class="submit">
<button type="submit" name="OneClicksubmitMessage" id="OneClicksubmitMessage" class="btn btn-default btn-md">
<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send'),$_smarty_tpl ) );?>
<i class="fa fa-chevron-right right"></i></span>
</button>
</div>
</div>
<div id="rightBlockOneClick">
<img itemprop="image" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'home_default'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cover']->value['legend'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->name,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" alt="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cover']->value['legend'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->name,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>"/>
<div id="OneClickproduct_variants_attributes"></div>

<h4><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->name,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h4>
</div>
</fieldset>
</form>
</div>
<?php }
}
