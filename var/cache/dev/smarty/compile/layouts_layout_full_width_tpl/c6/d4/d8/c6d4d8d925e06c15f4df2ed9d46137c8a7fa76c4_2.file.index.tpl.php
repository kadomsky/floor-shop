<?php
/* Smarty version 3.1.33, created on 2019-08-24 14:06:36
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d611a3cab63e5_37337356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6d4d8d925e06c15f4df2ed9d46137c8a7fa76c4' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/index.tpl',
      1 => 1566017196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d611a3cab63e5_37337356 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17175074845d611a3caaeae1_19750898', 'page_content_container');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_13730763335d611a3caaf1d2_35702860 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_937703945d611a3cab4db5_42318801 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

 <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_4865987495d611a3cab48a9_04334358 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_937703945d611a3cab4db5_42318801', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_17175074845d611a3caaeae1_19750898 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_17175074845d611a3caaeae1_19750898',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_13730763335d611a3caaf1d2_35702860',
  ),
  'page_content' => 
  array (
    0 => 'Block_4865987495d611a3cab48a9_04334358',
  ),
  'hook_home' => 
  array (
    0 => 'Block_937703945d611a3cab4db5_42318801',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13730763335d611a3caaf1d2_35702860', 'page_content_top', $this->tplIndex);
?>

       		 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopColumn'),$_smarty_tpl ) );?>

		<!-- Webinth Customize -->
			
			<section class="wi-hometabcontent">
				<div class="container">
				<div class="row">
				<div class="hometabcontent">
				<h1 class="h1 products-section-title text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'our products','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h1>
				<div class="tabs">
<!-- 				<span class="tabs_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our Products','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span> -->
					<ul id="home-page-tabs" class="nav nav-tabs clearfix">
						<li class="nav-item">
							<a data-toggle="tab" href="#featureProduct" class="nav-link active" data-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Featured products','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Featured','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="tab" href="#newProduct" class="nav-link" data-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New products','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New products','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="tab" href="#bestseller" class="nav-link" data-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Best Sellers','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Best Sellers','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
							</a>
						</li>
					</ul>
					<div class="tab-content">
						<div id="featureProduct" class="wi_productinner tab-pane active">	
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayWiFeature'),$_smarty_tpl ) );?>

						</div>
						<div id="newProduct" class="wi_productinner tab-pane">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayWiNew'),$_smarty_tpl ) );?>

						</div>
						<div id="bestseller" class="wi_productinner tab-pane">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayWiBestseller'),$_smarty_tpl ) );?>

						</div>
						</div>
						</div>
					</div>
					</div>
				</div>
			</section>


		<!-- Webinth Customize -->
		
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4865987495d611a3cab48a9_04334358', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
