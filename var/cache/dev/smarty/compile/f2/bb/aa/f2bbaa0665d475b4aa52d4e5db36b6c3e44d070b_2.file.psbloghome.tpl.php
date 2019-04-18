<?php
/* Smarty version 3.1.33, created on 2019-04-17 20:27:55
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/modules/psblog/views/templates/hook/psbloghome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb7621b0def09_86003965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2bbaa0665d475b4aa52d4e5db36b6c3e44d070b' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/modules/psblog/views/templates/hook/psbloghome.tpl',
      1 => 1550650992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb7621b0def09_86003965 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/a0280957/domains/shop.floor-shop.ru/public_html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<!-- Block Last post-->

<div class="lastest_block block tmoblog-latest">
<div class="container">
<div class="row">
	<h2 class="h1 products-section-title text-uppercase">
		<div class="blog-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'latest new & blog','mod'=>'psblog'),$_smarty_tpl ) );?>
</div>
	</h2>
		
	<div class="homeblog-inner">
	  <div class="homeblog_block">
		<?php $_smarty_tpl->_assignInScope('no_blog', count($_smarty_tpl->tpl_vars['blogs']->value));?>
		<?php $_smarty_tpl->_assignInScope('sliderFor', 2);?> <!-- Define Number of product for SLIDER -->
		<?php if ($_smarty_tpl->tpl_vars['no_blog']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
			<ul id="blog-carousel" class="ps-carousel product_list">
		<?php } else { ?>
			<ul id="blog-grid" class="blog_grid product_list grid row gridcount">
		<?php }?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs']->value, 'blog', false, NULL, 'item_name', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
?>
			<li class="blog-post">
				<div class="blog-item">
					<?php if ($_smarty_tpl->tpl_vars['blog']->value['image']) {?>
						<div class="blog-image text-xs-center">
							<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="link">
								<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['preview_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img-fluid"/>
							</a>
						<div class="post-image-hover"> </div>
						<p class="post_hover">
						<span class="tmo_zooming">
						<a class="icon zoom" title="View Full Image" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['preview_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-lightbox="example-set"><i class="fa fa-search-plus"></i></a>
						</span>
						<span class="tmo_readmore">		
							<a class="icon readmore_link" title="Read More " href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><i class="fa fa-link"></i></a>
						</span>
						</p>
						<div class="blog-date">
<!-- 						<span class="blog-author">
							<span class="fa fa-user-o"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'','mod'=>'psblog'),$_smarty_tpl ) );?>
</span> 
							<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['author_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['author'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['author'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a> 
						</span>	 -->
						<span class="blog-created">
							  <span class="fa fa-clock-o"></span><time class="date" datetime="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%Y"),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
								<!-- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%A"),'html','UTF-8' )),'d'=>'Modules.PsBlog.Shop'),$_smarty_tpl ) );?>
, -->	<!-- day of week -->
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%b"),'html','UTF-8' )),'d'=>'Modules.PsBlog.Shop'),$_smarty_tpl ) );?>
<!-- month-->
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%e"),'html','UTF-8' )),'d'=>'Modules.PsBlog.Shop'),$_smarty_tpl ) );?>
,<!-- /day --> 
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%Y"),'html','UTF-8' )),'d'=>'Modules.PsBlog.Shop'),$_smarty_tpl ) );?>
 <!-- year -->

							</time>
						</span>
						</div>
						</div>
					<?php }?>
					
					
					
					<div class="blog-content-wrap">	
						<div class="blog-info">	
<!-- 						<span class="blog-cat">  
							<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['category_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['category_title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['category_title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
						</span> -->
						<h4 class="title">
							<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )),30,'...' ));?>
</a>
						</h4>
						<div class="blog-shortinfo">
							 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags($_smarty_tpl->tpl_vars['blog']->value['description']),70,'...' ));?>
 
						</div>	

						</div>	
					</div>


				</div>
			</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
		
	</div>

	<?php if ($_smarty_tpl->tpl_vars['no_blog']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
		<div class="customNavigation">
		<a class="btn prev blog_prev">&nbsp;</a>
		<a class="btn next blog_next">&nbsp;</a>
		</div>
		<?php }?>
			</div>
</div>
</div>
</div>
<!-- /Block Last Post -->
<?php }
}
