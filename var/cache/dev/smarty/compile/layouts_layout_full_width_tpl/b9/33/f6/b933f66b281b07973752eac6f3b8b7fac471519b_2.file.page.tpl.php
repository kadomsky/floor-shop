<?php
/* Smarty version 3.1.33, created on 2019-11-26 13:05:46
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddcf8fa33a107_61389056',
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
function content_5ddcf8fa33a107_61389056 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21435971885ddcf8fa334994_43679485', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_12424476905ddcf8fa3355c0_64467235 extends Smarty_Internal_Block
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
class Block_8247875755ddcf8fa334f27_32517023 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12424476905ddcf8fa3355c0_64467235', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_20730430125ddcf8fa337d95_68443819 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_17370923195ddcf8fa3384e4_94276029 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_13613055995ddcf8fa337868_52634471 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20730430125ddcf8fa337d95_68443819', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17370923195ddcf8fa3384e4_94276029', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_11303465165ddcf8fa3393f4_50110928 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_15773443885ddcf8fa338f40_29468855 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11303465165ddcf8fa3393f4_50110928', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_21435971885ddcf8fa334994_43679485 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_21435971885ddcf8fa334994_43679485',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_8247875755ddcf8fa334f27_32517023',
  ),
  'page_title' => 
  array (
    0 => 'Block_12424476905ddcf8fa3355c0_64467235',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_13613055995ddcf8fa337868_52634471',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_20730430125ddcf8fa337d95_68443819',
  ),
  'page_content' => 
  array (
    0 => 'Block_17370923195ddcf8fa3384e4_94276029',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_15773443885ddcf8fa338f40_29468855',
  ),
  'page_footer' => 
  array (
    0 => 'Block_11303465165ddcf8fa3393f4_50110928',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8247875755ddcf8fa334f27_32517023', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13613055995ddcf8fa337868_52634471', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15773443885ddcf8fa338f40_29468855', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
