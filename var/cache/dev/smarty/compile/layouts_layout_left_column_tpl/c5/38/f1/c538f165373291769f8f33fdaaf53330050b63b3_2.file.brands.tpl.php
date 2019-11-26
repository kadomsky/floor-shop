<?php
/* Smarty version 3.1.33, created on 2019-11-26 13:05:47
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/catalog/brands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddcf8fb742843_29669329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c538f165373291769f8f33fdaaf53330050b63b3' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/catalog/brands.tpl',
      1 => 1550645573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/brand.tpl' => 1,
  ),
),false)) {
function content_5ddcf8fb742843_29669329 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14103645585ddcf8fb738695_56833065', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'brand_header'} */
class Block_3008419635ddcf8fb7391a1_94502560 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h1>
    <?php
}
}
/* {/block 'brand_header'} */
/* {block 'brand_miniature'} */
class Block_11523675705ddcf8fb73c340_97757698 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul id="brand_list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
?>
          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/brand.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('brand'=>$_smarty_tpl->tpl_vars['brand']->value), 0, true);
?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'brand_miniature'} */
/* {block 'content'} */
class Block_14103645585ddcf8fb738695_56833065 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14103645585ddcf8fb738695_56833065',
  ),
  'brand_header' => 
  array (
    0 => 'Block_3008419635ddcf8fb7391a1_94502560',
  ),
  'brand_miniature' => 
  array (
    0 => 'Block_11523675705ddcf8fb73c340_97757698',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3008419635ddcf8fb7391a1_94502560', 'brand_header', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11523675705ddcf8fb73c340_97757698', 'brand_miniature', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
