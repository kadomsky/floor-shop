<?php
/* Smarty version 3.1.33, created on 2019-02-28 12:41:54
  from 'module:wiinstagramviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c77ace2ac9d10_15889742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '955e6bb7763433161e78a60c3f2f7cda2252853c' => 
    array (
      0 => 'module:wiinstagramviewstemplates',
      1 => 1550645572,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c77ace2ac9d10_15889742 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '16875368745c77ace2abb8b5_70382944';
?>
<!-- begin /home/a0280957/domains/shop.floor-shop.ru/public_html/modules/wiinstagram/views/templates/hook/wiinstagram.tpl -->
<div class="wi-block-instagram-social">
	<h2 class="h1 products-section-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instagram','mod'=>'wiinstagram'),$_smarty_tpl ) );?>
</h2>
	<div class="content">
		
		<?php if ($_smarty_tpl->tpl_vars['imagesIns']->value['data'] && count($_smarty_tpl->tpl_vars['imagesIns']->value['data']) > 0) {?>
		<a id="next_instagram" class="button-arrow next" href="#">skip_next</a>
		<a id="prev_instagram" class="button-arrow prev" href="#">skip_previous</a>
		<div class="cycleElementsContainer">
			<div class="list_carousel responsive">
					
			<ul id="carousel_instagram" class="product-list">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imagesIns']->value['data'], 'imagesIn', false, NULL, 'imagesIn', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagesIn']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_imagesIn']->value['iteration']++;
?>
				<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_imagesIn']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_imagesIn']->value['iteration'] : null) <= 8) {?>
				<li class="item">
					<a href="#">
					 	<div class="insta_btn"><i class="fa fa-instagram" aria-hidden="true"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View Post','mod'=>'wiinstagram'),$_smarty_tpl ) );?>
</span></div>
						<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imagesIn']->value['images']['standard_resolution']['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"  style="float:left;" />
					</a>
					 <!-- <a target="_blank" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imagesIn']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
					 	<div class="insta_btn"><i class="fa fa-instagram" aria-hidden="true"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View Post','mod'=>'wiinstagram'),$_smarty_tpl ) );?>
</span></div>
						<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imagesIn']->value['images']['standard_resolution']['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"  style="float:left;" />
					</a> -->
				</li>
				<?php }?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
			</div>
		</div>
		<?php }?>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['imagesIns']->value['data'] && count($_smarty_tpl->tpl_vars['imagesIns']->value['data']) > 0) {
echo '<script'; ?>
 type="text/javascript">

<?php echo '</script'; ?>
>
<?php }?><!-- end /home/a0280957/domains/shop.floor-shop.ru/public_html/modules/wiinstagram/views/templates/hook/wiinstagram.tpl --><?php }
}
