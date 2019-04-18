<?php
/* Smarty version 3.1.33, created on 2019-04-17 11:52:11
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/_partials/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb6e93b286d37_18612948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6331cedea34cca9ae53dd2a58dcc272dc8130c39' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/_partials/head.tpl',
      1 => 1551512726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/stylesheets.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5cb6e93b286d37_18612948 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11019620985cb6e93b26b998_94271347', 'head_charset');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19336263695cb6e93b26cf24_02429667', 'head_ie_compatibility');
?>

<meta name="robots" content="noindex, nofollow" />
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4987749545cb6e93b26ded0_91037103', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15142856565cb6e93b27a995_30936784', 'head_viewport');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14806466395cb6e93b27ba89_99872176', 'head_icons');
?>

<!-- Webinth Customized -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,600,700" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet"> 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14379642705cb6e93b27f965_37093018', 'stylesheets');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4350484085cb6e93b281b75_20069874', 'javascript_head');
?>

<?php echo '<script'; ?>
 type="text/javascript">
document.write('<div id="wi-pageload"></div>');
<?php echo '</script'; ?>
>
<noscript><!--div id="wi-pageload"></div--></noscript>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2040364865cb6e93b2844e6_30715503', 'hook_header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3510588915cb6e93b285fb2_37735168', 'hook_extra');
?>

<?php }
/* {block 'head_charset'} */
class Block_11019620985cb6e93b26b998_94271347 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_charset' => 
  array (
    0 => 'Block_11019620985cb6e93b26b998_94271347',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<meta charset="utf-8">
<?php
}
}
/* {/block 'head_charset'} */
/* {block 'head_ie_compatibility'} */
class Block_19336263695cb6e93b26cf24_02429667 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_ie_compatibility' => 
  array (
    0 => 'Block_19336263695cb6e93b26cf24_02429667',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<meta http-equiv="x-ua-compatible" content="ie=edge">
<?php
}
}
/* {/block 'head_ie_compatibility'} */
/* {block 'head_seo_title'} */
class Block_3719782855cb6e93b26eab3_25438932 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_title'} */
/* {block 'head_seo_description'} */
class Block_2276202815cb6e93b270dc8_22353459 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_11453084385cb6e93b272801_47380827 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_hreflang'} */
class Block_7500570905cb6e93b276338_81006855 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['urls']->value['alternative_langs'], 'pageUrl', false, 'code');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['pageUrl']->value) {
?>
            <link rel="alternate" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageUrl']->value, ENT_QUOTES, 'UTF-8');?>
" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
">
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php
}
}
/* {/block 'head_hreflang'} */
/* {block 'head_seo'} */
class Block_4987749545cb6e93b26ded0_91037103 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_4987749545cb6e93b26ded0_91037103',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_3719782855cb6e93b26eab3_25438932',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_2276202815cb6e93b270dc8_22353459',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_11453084385cb6e93b272801_47380827',
  ),
  'head_hreflang' => 
  array (
    0 => 'Block_7500570905cb6e93b276338_81006855',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3719782855cb6e93b26eab3_25438932', 'head_seo_title', $this->tplIndex);
?>
</title>
  <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2276202815cb6e93b270dc8_22353459', 'head_seo_description', $this->tplIndex);
?>
">
  <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11453084385cb6e93b272801_47380827', 'head_seo_keywords', $this->tplIndex);
?>
">
    <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7500570905cb6e93b276338_81006855', 'head_hreflang', $this->tplIndex);
?>

<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head_viewport'} */
class Block_15142856565cb6e93b27a995_30936784 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_viewport' => 
  array (
    0 => 'Block_15142856565cb6e93b27a995_30936784',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
}
}
/* {/block 'head_viewport'} */
/* {block 'head_icons'} */
class Block_14806466395cb6e93b27ba89_99872176 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_14806466395cb6e93b27ba89_99872176',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_icons'} */
/* {block 'stylesheets'} */
class Block_14379642705cb6e93b27f965_37093018 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_14379642705cb6e93b27f965_37093018',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
}
}
/* {/block 'stylesheets'} */
/* {block 'javascript_head'} */
class Block_4350484085cb6e93b281b75_20069874 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_head' => 
  array (
    0 => 'Block_4350484085cb6e93b281b75_20069874',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, false);
}
}
/* {/block 'javascript_head'} */
/* {block 'hook_header'} */
class Block_2040364865cb6e93b2844e6_30715503 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_header' => 
  array (
    0 => 'Block_2040364865cb6e93b2844e6_30715503',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

<?php
}
}
/* {/block 'hook_header'} */
/* {block 'hook_extra'} */
class Block_3510588915cb6e93b285fb2_37735168 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_extra' => 
  array (
    0 => 'Block_3510588915cb6e93b285fb2_37735168',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'hook_extra'} */
}
