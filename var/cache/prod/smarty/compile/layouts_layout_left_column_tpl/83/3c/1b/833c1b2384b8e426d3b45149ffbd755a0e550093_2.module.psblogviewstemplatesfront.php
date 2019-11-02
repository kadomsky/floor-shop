<?php
/* Smarty version 3.1.33, created on 2019-11-02 08:57:52
  from 'module:psblogviewstemplatesfront' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbd1ae027b200_24763054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '833c1b2384b8e426d3b45149ffbd755a0e550093' => 
    array (
      0 => 'module:psblogviewstemplatesfront',
      1 => 1550650992,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbd1ae027b200_24763054 (Smarty_Internal_Template $_smarty_tpl) {
?>
		<div class="social-wrap">
			<div class="social-heading"> <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Like This','mod'=>'psblog'),$_smarty_tpl ) );?>
</b> </div>
			<?php if ($_smarty_tpl->tpl_vars['config']->value->get('social_code','')) {?>
				<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->get('social_code',''),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

			<?php } else { ?>
			<!-- Twitter Button -->
			<div class="itemTwitterButton">
				<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal" >
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Twitter','mod'=>'psblog'),$_smarty_tpl ) );?>

				</a>
				<?php echo '<script'; ?>
 type="text/javascript" src="//platform.twitter.com/widgets.js"><?php echo '</script'; ?>
>
			</div>

			 
			<!-- Facebook Button -->
			<div class="itemFacebookButton">
				<div id="fb-root"></div>
				<?php echo '<script'; ?>
 type="text/javascript">
					(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
				<?php echo '</script'; ?>
>
				<div class="fb-like" data-send="false" data-width="200" data-show-faces="true"></div>
			</div>

			 
			 	<!-- Google +1 Button -->
			<div class="itemGooglePlusOneButton">
				<g:plusone annotation="inline" width="120"></g:plusone>
				<?php echo '<script'; ?>
 type="text/javascript">
				  (function() {
				  	window.___gcfg = { lang: 'en' }; // Define button default language here
				    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				    po.src = 'https://apis.google.com/js/plusone.js';
				    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
				  })();
				<?php echo '</script'; ?>
>
			</div>
			<?php }?>
		</div>	 




<?php }
}
