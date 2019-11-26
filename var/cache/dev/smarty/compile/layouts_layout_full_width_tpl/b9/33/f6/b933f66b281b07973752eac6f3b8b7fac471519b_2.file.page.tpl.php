<?php
/* Smarty version 3.1.33, created on 2019-11-26 15:40:45
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddd1d4d05bc49_78363015',
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
function content_5ddd1d4d05bc49_78363015 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11544117975ddd1d4d0545f2_95176778', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_940173005ddd1d4d0553e8_80371472 extends Smarty_Internal_Block
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
class Block_9774191985ddd1d4d054d57_23512478 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_940173005ddd1d4d0553e8_80371472', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_20220694185ddd1d4d059641_22361201 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_461265585ddd1d4d059e46_59875838 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_9037031325ddd1d4d059139_33463543 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20220694185ddd1d4d059641_22361201', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_461265585ddd1d4d059e46_59875838', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_17920466155ddd1d4d05ace2_71534473 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_4182769875ddd1d4d05a861_23011658 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17920466155ddd1d4d05ace2_71534473', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_11544117975ddd1d4d0545f2_95176778 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11544117975ddd1d4d0545f2_95176778',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_9774191985ddd1d4d054d57_23512478',
  ),
  'page_title' => 
  array (
    0 => 'Block_940173005ddd1d4d0553e8_80371472',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_9037031325ddd1d4d059139_33463543',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_20220694185ddd1d4d059641_22361201',
  ),
  'page_content' => 
  array (
    0 => 'Block_461265585ddd1d4d059e46_59875838',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_4182769875ddd1d4d05a861_23011658',
  ),
  'page_footer' => 
  array (
    0 => 'Block_17920466155ddd1d4d05ace2_71534473',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9774191985ddd1d4d054d57_23512478', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9037031325ddd1d4d059139_33463543', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4182769875ddd1d4d05a861_23011658', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
