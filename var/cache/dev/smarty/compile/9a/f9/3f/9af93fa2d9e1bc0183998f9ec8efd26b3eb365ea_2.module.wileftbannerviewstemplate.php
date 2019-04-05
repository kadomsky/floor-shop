<?php
/* Smarty version 3.1.33, created on 2019-04-04 14:07:48
  from 'module:wileftbannerviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca5e5845fdfa9_75086642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9af93fa2d9e1bc0183998f9ec8efd26b3eb365ea' => 
    array (
      0 => 'module:wileftbannerviewstemplate',
      1 => 1550645572,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca5e5845fdfa9_75086642 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/a0280957/domains/shop.floor-shop.ru/public_html/modules/wi_leftbanner/views/templates/hook/wileftbanner.tpl -->
<?php if ($_smarty_tpl->tpl_vars['wileftbanner']->value['slides']) {?>
	<div id="wi-leftbanner"  class="block">
		<h4 class="block_title hidden-lg-up" data-target="#leftbanner_tonggle" data-toggle="collapse">Banner
	    <span class="pull-xs-right">
	      <span class="navbar-toggler collapse-icons">
	      <i class="material-icons add">&#xE313;</i>
	      <i class="material-icons remove">&#xE316;</i>
	      </span>
	    </span>
	  </h4>
		<ul class="block_content collapse" id="leftbanner_tonggle">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wileftbanner']->value['slides'], 'slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
?>
				<li class="slide wileftbanner-container">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
">
						<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
" />
					</a>				
				</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>			
<?php }?><!-- end /home/a0280957/domains/shop.floor-shop.ru/public_html/modules/wi_leftbanner/views/templates/hook/wileftbanner.tpl --><?php }
}
