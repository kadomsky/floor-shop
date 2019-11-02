<?php
/* Smarty version 3.1.33, created on 2019-11-02 08:54:53
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbd1a2dd70c39_12186367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b933f66b281b07973752eac6f3b8b7fac471519b' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/page.tpl',
      1 => 1551513567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbd1a2dd70c39_12186367 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19124609605dbd1a2dd6bff0_54210850', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_4185119905dbd1a2dd6cb85_13474818 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_13683977185dbd1a2dd6c530_13727947 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4185119905dbd1a2dd6cb85_13474818', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_6029916515dbd1a2dd6e9a3_10393671 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_18269999975dbd1a2dd6f075_13230816 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16650634375dbd1a2dd6e4a0_39130708 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6029916515dbd1a2dd6e9a3_10393671', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18269999975dbd1a2dd6f075_13230816', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1918382655dbd1a2dd70013_69251272 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_4616337035dbd1a2dd6fb68_57986846 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1918382655dbd1a2dd70013_69251272', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_19124609605dbd1a2dd6bff0_54210850 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19124609605dbd1a2dd6bff0_54210850',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_13683977185dbd1a2dd6c530_13727947',
  ),
  'page_title' => 
  array (
    0 => 'Block_4185119905dbd1a2dd6cb85_13474818',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_16650634375dbd1a2dd6e4a0_39130708',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_6029916515dbd1a2dd6e9a3_10393671',
  ),
  'page_content' => 
  array (
    0 => 'Block_18269999975dbd1a2dd6f075_13230816',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_4616337035dbd1a2dd6fb68_57986846',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1918382655dbd1a2dd70013_69251272',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13683977185dbd1a2dd6c530_13727947', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16650634375dbd1a2dd6e4a0_39130708', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4616337035dbd1a2dd6fb68_57986846', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
