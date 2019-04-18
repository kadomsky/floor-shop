<?php
/* Smarty version 3.1.33, created on 2019-04-17 11:52:11
  from 'module:pssharebuttonsviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb6e93b476171_27051782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce908e3af500ef88d0be39d6badc82307b6995cd' => 
    array (
      0 => 'module:pssharebuttonsviewstempla',
      1 => 1545641777,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb6e93b476171_27051782 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- begin /home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/modules/ps_sharebuttons/views/templates/hook/ps_sharebuttons.tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12483183945cb6e93b471744_94772731', 'social_sharing');
?>

<!-- end /home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/modules/ps_sharebuttons/views/templates/hook/ps_sharebuttons.tpl --><?php }
/* {block 'social_sharing'} */
class Block_12483183945cb6e93b471744_94772731 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'social_sharing' => 
  array (
    0 => 'Block_12483183945cb6e93b471744_94772731',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['social_share_links']->value) {?>
    <div class="social-sharing">
      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Share','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['social_share_links']->value, 'social_share_link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['social_share_link']->value) {
?>
          <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_share_link']->value['class'], ENT_QUOTES, 'UTF-8');?>
-no icon-gray"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_share_link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="text-hide-no" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_share_link']->value['label'], ENT_QUOTES, 'UTF-8');?>
" target="_blank">
	  <?php if (isset($_smarty_tpl->tpl_vars['social_share_link']->value['font'])) {?><i class="fa <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_share_link']->value['font'], ENT_QUOTES, 'UTF-8');?>
 fa-ps-ak" aria-hidden="true"></i><?php } else {
}?></a></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  <?php }
}
}
/* {/block 'social_sharing'} */
}
