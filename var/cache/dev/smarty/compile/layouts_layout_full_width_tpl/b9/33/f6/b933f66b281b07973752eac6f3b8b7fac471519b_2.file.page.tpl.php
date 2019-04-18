<?php
/* Smarty version 3.1.33, created on 2019-04-17 20:27:55
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb7621b0fd992_97299169',
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
function content_5cb7621b0fd992_97299169 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14929057815cb7621b0f8bd2_03779252', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_6999721325cb7621b0f97a9_92358553 extends Smarty_Internal_Block
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
class Block_8793862265cb7621b0f90f7_77361474 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6999721325cb7621b0f97a9_92358553', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_12094064485cb7621b0fb795_01561596 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_4037843365cb7621b0fbf25_27486417 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_14776913595cb7621b0fb2f1_54862311 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12094064485cb7621b0fb795_01561596', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4037843365cb7621b0fbf25_27486417', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_7726814615cb7621b0fce58_93626386 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_20016727445cb7621b0fc9e1_26502270 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7726814615cb7621b0fce58_93626386', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_14929057815cb7621b0f8bd2_03779252 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14929057815cb7621b0f8bd2_03779252',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_8793862265cb7621b0f90f7_77361474',
  ),
  'page_title' => 
  array (
    0 => 'Block_6999721325cb7621b0f97a9_92358553',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_14776913595cb7621b0fb2f1_54862311',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_12094064485cb7621b0fb795_01561596',
  ),
  'page_content' => 
  array (
    0 => 'Block_4037843365cb7621b0fbf25_27486417',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_20016727445cb7621b0fc9e1_26502270',
  ),
  'page_footer' => 
  array (
    0 => 'Block_7726814615cb7621b0fce58_93626386',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8793862265cb7621b0f90f7_77361474', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14776913595cb7621b0fb2f1_54862311', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20016727445cb7621b0fc9e1_26502270', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
