<?php
/* Smarty version 3.1.33, created on 2019-11-02 08:57:52
  from 'module:psblogviewstemplatesfront' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbd1ae00b5fb0_91589815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd81c505aaa87b188273cd80ad9f9e7ba1ef7e3b' => 
    array (
      0 => 'module:psblogviewstemplatesfront',
      1 => 1561637186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:psblog/views/templates/front/default/_social.tpl' => 1,
    'module:psblog/views/templates/front/default/_facebook_comment.tpl' => 1,
    'module:psblog/views/templates/front/default/_diquis_comment.tpl' => 1,
    'module:psblog/views/templates/front/default/_local_comment.tpl' => 1,
  ),
),false)) {
function content_5dbd1ae00b5fb0_91589815 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11281944095dbd1ae004bc34_44710949', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'content'} */
class Block_11281944095dbd1ae004bc34_44710949 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11281944095dbd1ae004bc34_44710949',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/a0280957/domains/shop.floor-shop.ru/public_html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>


	<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
			<div id="blogpage">
				<div class="blog-detail">
					<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry, We are updating data, please come back later!!!!','mod'=>'psblog'),$_smarty_tpl ) );?>
</div>
				</div>
			</div>
		<?php } else { ?>	
		<div id="blogpage">
			<article class="blog-detail">
				<?php if ($_smarty_tpl->tpl_vars['is_active']->value) {?>
				<h1 class="blog-title"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value->meta_title,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h1>
				<div class="blog-meta">
					<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_author','1')) {?>
					<span class="blog-author">						
						<!-- <i  class="fa fa-user-o"></i> --><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By','mod'=>'psblog'),$_smarty_tpl ) );?>
:
						<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value->author_link,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value->author,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value->author,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
					</span>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_category','1')) {?>
					<span class="blog-cat"> 						
						<!-- <i class="fa fa-list"></i> --><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In','mod'=>'psblog'),$_smarty_tpl ) );?>
: 
						<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value->category_link,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value->category_title,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value->category_title,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
					</span>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_created','1')) {?>
					<span class="blog-created">					   
						<!-- <i class="fa fa-calendar"></i>  --><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'On','mod'=>'psblog'),$_smarty_tpl ) );?>
:
						<time class="date" datetime="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value->date_add),"%Y"),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value->date_add),"%A"),'html','UTF-8' )),'mod'=>'psblog'),$_smarty_tpl ) );?>
,	<!-- day of week -->
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value->date_add),"%B"),'html','UTF-8' )),'mod'=>'psblog'),$_smarty_tpl ) );?>
		<!-- month-->
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value->date_add),"%e"),'html','UTF-8' )),'mod'=>'psblog'),$_smarty_tpl ) );?>
,	<!-- day of month -->
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value->date_add),"%Y"),'html','UTF-8' )),'mod'=>'psblog'),$_smarty_tpl ) );?>
		<!-- year -->
						</time>
					</span>
					<?php }?>
					
					<?php if (isset($_smarty_tpl->tpl_vars['blog_count_comment']->value) && $_smarty_tpl->tpl_vars['config']->value->get('item_show_counter','1')) {?>
					<span class="blog-ctncomment">										
						<!-- <i class="fa fa-comment-o"></i> --><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comment','mod'=>'psblog'),$_smarty_tpl ) );?>
: 
						<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['blog_count_comment']->value), ENT_QUOTES, 'UTF-8');?>

					</span>
					<?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['blog']->value->hits) && $_smarty_tpl->tpl_vars['config']->value->get('item_show_hit','1')) {?>
					<span class="blog-hit">						
						<!-- <i class="fa fa-heart-o"></i> --><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hit','mod'=>'psblog'),$_smarty_tpl ) );?>
:
						<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['blog']->value->hits), ENT_QUOTES, 'UTF-8');?>

					</span>
					<?php }?>
				</div>

				<?php if ($_smarty_tpl->tpl_vars['blog']->value->preview_url && $_smarty_tpl->tpl_vars['config']->value->get('item_show_image','1')) {?>
					<div class="blog-image">
						<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value->preview_url,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value->meta_title,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img-fluid" />
					</div>
				<?php }?>

				<div class="blog-description">
					<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_description',1)) {?>
						<?php echo $_smarty_tpl->tpl_vars['blog']->value->description;?>
					<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['blog']->value->content;?>
				</div>
				
				

				<?php if (trim($_smarty_tpl->tpl_vars['blog']->value->video_code)) {?>
				<div class="blog-video-code">
					<div class="inner ">
						<?php echo $_smarty_tpl->tpl_vars['blog']->value->video_code;?>
					</div>
				</div>
				<?php }?>

				<div class="social-share">
					 <?php $_smarty_tpl->_subTemplateRender("module:psblog/views/templates/front/default/_social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['tags']->value) {?>
				<div class="blog-tags">
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tags:','mod'=>'psblog'),$_smarty_tpl ) );?>
</span>
				 
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag', false, NULL, 'tag', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?>
						 <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tag']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tag']->value['tag'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tag']->value['tag'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></a>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					 
				</div>
				<?php }?>

				<?php if (!empty($_smarty_tpl->tpl_vars['samecats']->value) || !empty($_smarty_tpl->tpl_vars['tagrelated']->value)) {?>
				<div class="extra-blogs row">
				<?php if (!empty($_smarty_tpl->tpl_vars['samecats']->value)) {?>
					<div class="col-lg-6 col-md-6 col-xs-12">
						<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In Same Category','mod'=>'psblog'),$_smarty_tpl ) );?>
</h4>
						<ul>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['samecats']->value, 'cblog', false, NULL, 'cblog', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cblog']->value) {
?>
							<li><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cblog']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cblog']->value['meta_title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a></li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-12">
						<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Related by Tags','mod'=>'psblog'),$_smarty_tpl ) );?>
</h4>
						<ul>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tagrelated']->value, 'cblog', false, NULL, 'cblog', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cblog']->value) {
?>
							<li><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cblog']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cblog']->value['meta_title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a></li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
				<?php }?>
				</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['productrelated']->value) {?>

				<?php }?>
				<div class="blog-comment-block">
				<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_comments','1')) {?>
				<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_comment_engine','local') == 'facebook') {?>
					<?php $_smarty_tpl->_subTemplateRender("module:psblog/views/templates/front/default/_facebook_comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php } elseif ($_smarty_tpl->tpl_vars['config']->value->get('item_comment_engine','local') == 'diquis') {?>
					<?php $_smarty_tpl->_subTemplateRender("module:psblog/views/templates/front/default/_diquis_comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				
				<?php } else { ?>
					<?php $_smarty_tpl->_subTemplateRender("module:psblog/views/templates/front/default/_local_comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php }?>
				<?php }?>
				</div>	
				<?php } else { ?>
				<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry, This blog is not avariable. May be this was unpublished or deleted.','mod'=>'psblog'),$_smarty_tpl ) );?>
</div>
				<?php }?>

			</article>
		</div>
		<?php }?>

	<!---
		Translation Day of Week - NOT REMOVE
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sunday','mod'=>'psblog'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Monday','mod'=>'psblog'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tuesday','mod'=>'psblog'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wednesday','mod'=>'psblog'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Thursday','mod'=>'psblog'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Friday','mod'=>'psblog'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Saturday','mod'=>'psblog'),$_smarty_tpl ) );?>

	-->
	<!---
		Translation Month - NOT REMOVE
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'January','mod'=>'psblog'),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'February','mod'=>'psblog'),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'March','mod'=>'psblog'),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'April','mod'=>'psblog'),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'May','mod'=>'psblog'),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'June','mod'=>'psblog'),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'July','mod'=>'psblog'),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'August','mod'=>'psblog'),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'September','mod'=>'psblog'),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'October','mod'=>'psblog'),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'November','mod'=>'psblog'),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'December','mod'=>'psblog'),$_smarty_tpl ) );?>

	-->
<?php
}
}
/* {/block 'content'} */
}
