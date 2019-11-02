<?php
/* Smarty version 3.1.33, created on 2019-11-02 08:54:54
  from 'module:wicategorylistviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbd1a2e09d472_24512394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72c6a1a2434eb4b3cb3822ed4e3e4a59ec87eef6' => 
    array (
      0 => 'module:wicategorylistviewstempla',
      1 => 1565963426,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbd1a2e09d472_24512394 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '8134643865dbd1a2e0882c1_65278265';
?>



<div  class="wicategorylist block" id="categorylist_home">
<div class="container">
<div class="row">
		<div class="products-tab-content">
		<h2 class="h1 products-section-title">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'shop by category','d'=>'Modules.Categorylist.Shop'),$_smarty_tpl ) );?>

		</h2>
		</div>
		<div id="spe_res">
			<div class="wicategory-container">
				<?php if (isset($_smarty_tpl->tpl_vars['wicategoryinfos']->value) && $_smarty_tpl->tpl_vars['wicategoryinfos']->value) {?>
				
				<?php $_smarty_tpl->_assignInScope('sliderVal', 2);?>
				<?php $_smarty_tpl->_assignInScope('productsCount', count($_smarty_tpl->tpl_vars['wicategoryinfos']->value));?>
				<?php $_smarty_tpl->_assignInScope('categorycount', 0);?>
				<?php if ($_smarty_tpl->tpl_vars['productsCount']->value > $_smarty_tpl->tpl_vars['sliderVal']->value) {?>

									<ul id="wicategorylist-carousel" class="wi-carousel product_list product_slider_grid">
								<?php } else { ?>
									<ul id="wicategorylist" class="product_list grid gridcount product_slider_grid">
								<?php }?>
								
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wicategoryinfos']->value, 'wicategoryinfo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['wicategoryinfo']->value) {
?>
						<li class="<?php if ($_smarty_tpl->tpl_vars['productsCount']->value > $_smarty_tpl->tpl_vars['sliderVal']->value) {?>slider<?php } else { ?>grid<?php }?>">
						<div class="categoryblock<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categorycount']->value, ENT_QUOTES, 'UTF-8');?>
 categoryblock item">
							<div class="block_content">
								
								
								<?php if (isset($_smarty_tpl->tpl_vars['wicategoryinfo']->value['cate_id']) && $_smarty_tpl->tpl_vars['wicategoryinfo']->value['cate_id']) {?>
									<?php if ($_smarty_tpl->tpl_vars['wicategoryinfo']->value['id'] == $_smarty_tpl->tpl_vars['wicategoryinfo']->value['cate_id']['id_category']) {?>
										<div class="categoryimage">
										<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['wicategoryinfo']->value['category']->id_category,$_smarty_tpl->tpl_vars['wicategoryinfo']->value['category']->link_rewrite), ENT_QUOTES, 'UTF-8');?>
">
											<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wicategoryinfo']->value['cate_id']['image'], ENT_QUOTES, 'UTF-8');?>
" alt="" class="img-responsive" border="0" />
										</a>
										</div>
									<?php }?>
									<?php } else { ?>
										<div class="categoryimage">
										<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['wicategoryinfo']->value['category']->id_category,$_smarty_tpl->tpl_vars['wicategoryinfo']->value['category']->link_rewrite), ENT_QUOTES, 'UTF-8');?>
">
											<img src="img/cms/Cat-img.jpg" alt="" class="img-responsive" border="0" />
										</a>
										</div>
								<?php }?>
								
								<div class="categorylist">
									<div class="cate-heading">
										<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['wicategoryinfo']->value['category']->id_category,$_smarty_tpl->tpl_vars['wicategoryinfo']->value['category']->link_rewrite), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wicategoryinfo']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
									</div>
									<div class="cate-button">
										<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['wicategoryinfo']->value['category']->id_category,$_smarty_tpl->tpl_vars['wicategoryinfo']->value['category']->link_rewrite), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View Collection','d'=>'Modules.Categorylist.Shop'),$_smarty_tpl ) );?>
</a>
									</div>
									<ul class="subcategory">
									<?php $_smarty_tpl->_assignInScope('categorychildcount', 1);?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wicategoryinfo']->value['child_cate'], 'child');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
?>
										<?php if ($_smarty_tpl->tpl_vars['categorychildcount']->value <= 10) {?>
										<li>
											<a href="<?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['child']->value['id_category'], ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['child']->value['link_rewrite'], ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_prefixVariable1,$_prefixVariable2), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['child']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
										</li>
										 <?php }?>
										 <?php $_smarty_tpl->_assignInScope('categorychildcount', $_smarty_tpl->tpl_vars['categorychildcount']->value+1);?>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<li>
										<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['wicategoryinfo']->value['category']->id_category,$_smarty_tpl->tpl_vars['wicategoryinfo']->value['category']->link_rewrite), ENT_QUOTES, 'UTF-8');?>
">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all','d'=>'Modules.Categorylist.Shop'),$_smarty_tpl ) );?>
</a>
									</li>
								</ul>
								</div>
							</div>
						
						</div>
						</li>
					   
						<?php $_smarty_tpl->_assignInScope('categorycount', $_smarty_tpl->tpl_vars['categorycount']->value+1);?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				<?php if ($_smarty_tpl->tpl_vars['productsCount']->value > $_smarty_tpl->tpl_vars['sliderVal']->value) {?>
					<div class="customNavigation">
						<a class="btn prev cat_prev">&nbsp;</a>
						<a class="btn next cat_next">&nbsp;</a>
					</div>
				<?php }?>
					
				<?php } else { ?>
					<div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Category is Selected.','d'=>'Modules.Categorylist.Shop'),$_smarty_tpl ) );?>
</div>
				<?php }?>
				
			</div>
			</div>
</div>
</div>
</div><?php }
}
