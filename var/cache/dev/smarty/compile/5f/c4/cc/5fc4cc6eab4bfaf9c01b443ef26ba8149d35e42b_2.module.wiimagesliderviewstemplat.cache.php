<?php
/* Smarty version 3.1.33, created on 2019-11-26 15:40:48
  from 'module:wiimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddd1d509a1a73_27161887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fc4cc6eab4bfaf9c01b443ef26ba8149d35e42b' => 
    array (
      0 => 'module:wiimagesliderviewstemplat',
      1 => 1551512791,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddd1d509a1a73_27161887 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1779926575ddd1d5099c5f6_46985291';
?>
<!-- begin /home/a0280957/domains/shop.floor-shop.ru/public_html/modules/wi_imageslider/views/templates/hook/slider.tpl --><?php if ($_smarty_tpl->tpl_vars['wihomeslider']->value['slides']) {?>
	<div class="wi-flexslider" data-interval="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wihomeslider']->value['speed'], ENT_QUOTES, 'UTF-8');?>
" data-pause="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wihomeslider']->value['pause'], ENT_QUOTES, 'UTF-8');?>
">
<?php echo '<script'; ?>
 type="text/javascript">
document.write('<div class="wi-loading spinner"></div>');
<?php echo '</script'; ?>
>
<noscript><!--div class="wi-loading spinner"></div--></noscript>
		<ul class="slides">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wihomeslider']->value['slides'], 'slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
?>
				<li class="slide">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8');?>
">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
" />
					</a>
					<?php if ($_smarty_tpl->tpl_vars['slide']->value['description']) {?>
						<div class="container">
						<div class="row">
							<div class="caption-description">
								<?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>

							</div>
						</div>
					</div>
					<?php }?>					
				</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
<?php }?>


<!-- end /home/a0280957/domains/shop.floor-shop.ru/public_html/modules/wi_imageslider/views/templates/hook/slider.tpl --><?php }
}
