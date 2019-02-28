<?php
/* Smarty version 3.1.33, created on 2019-02-28 12:41:54
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c77ace2cc0da5_35784144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0331d9121533210134fb0ec77726df5d037f54aa' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/_partials/header.tpl',
      1 => 1550645573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c77ace2cc0da5_35784144 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9194507415c77ace2cbdc69_30678400', 'header_nav');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_751764185c77ace2cbe688_60127799', 'header_top');
}
/* {block 'header_nav'} */
class Block_9194507415c77ace2cbdc69_30678400 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_9194507415c77ace2cbdc69_30678400',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<nav class="header-nav">
	<div class="container">
	    <div class="row">
	    </div>
	</div>
</nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_751764185c77ace2cbe688_60127799 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_751764185c77ace2cbe688_60127799',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="header-top">
		<div class="container">
		<div class="row">
		<div class="header-logo">
				<div class="main-logo">
					<div class="wi_header_logo">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
					<img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
					</a>
					</div>
				</div>
			</div>
			<div class="header-left">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

				<!--<div id="_mobile_contact_link"></div>-->
				<div class="clearfix"></div>
			</div>
			<div class="header-center">
				<div class="header-menu">
				<div class="container">
				<div class="row">
				<div id="mobile_top_menu_wrapper" class="row hidden-lg-up">
					<div class="menu-icon">
					
					<div class="menu-title"> <i class="fa fa-bars" aria-hidden="true"></i><span>Category</span></div>
					</div>
					<div class="js-top-menu mobile" id="_mobile_top_menu"></div>
					<div class="menu-icon">
						<i class="fa fa-times" aria-hidden="true"></i>
						<!-- <div class="menu-title">close</div>	 -->		  
					</div>
				</div>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

				</div>
				</div>
				</div>
			</div>
			<div class="header-right">
				<div  id="_mobile_cart"></div>
				<div  id="_mobile_user_info"></div>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>
	
			</div>
		</div>
		</div>
	</div>	

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
