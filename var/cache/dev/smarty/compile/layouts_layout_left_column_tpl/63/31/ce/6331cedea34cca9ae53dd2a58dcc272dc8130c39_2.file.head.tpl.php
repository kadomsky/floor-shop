<?php
/* Smarty version 3.1.33, created on 2019-04-18 12:12:46
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/_partials/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb83f8e8b3e42_81370182',
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
function content_5cb83f8e8b3e42_81370182 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4572441105cb83f8e8a49e2_47121008', 'head_charset');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14112037335cb83f8e8a55a1_52321813', 'head_ie_compatibility');
?>

<meta name="robots" content="noindex, nofollow" />
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11225164745cb83f8e8a6457_16234818', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19761572075cb83f8e8ad477_98274120', 'head_viewport');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14569767255cb83f8e8add45_85148971', 'head_icons');
?>

<!-- Webinth Customized -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,600,700" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet"> 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19720865745cb83f8e8aff70_98929115', 'stylesheets');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5339680765cb83f8e8b1285_89813977', 'javascript_head');
?>

<?php echo '<script'; ?>
 type="text/javascript">
document.write('<div id="wi-pageload"></div>');
<?php echo '</script'; ?>
>
<noscript><!--div id="wi-pageload"></div--></noscript>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8474977375cb83f8e8b28b6_35041219', 'hook_header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18404898815cb83f8e8b3610_88713768', 'hook_extra');
?>

<?php }
/* {block 'head_charset'} */
class Block_4572441105cb83f8e8a49e2_47121008 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_charset' => 
  array (
    0 => 'Block_4572441105cb83f8e8a49e2_47121008',
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
class Block_14112037335cb83f8e8a55a1_52321813 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_ie_compatibility' => 
  array (
    0 => 'Block_14112037335cb83f8e8a55a1_52321813',
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
class Block_12815379255cb83f8e8a6b32_71555128 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_title'} */
/* {block 'head_seo_description'} */
class Block_8040196335cb83f8e8a7c09_93508232 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_18920969935cb83f8e8a8b63_28897936 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_hreflang'} */
class Block_10615222935cb83f8e8aad95_11293405 extends Smarty_Internal_Block
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
class Block_11225164745cb83f8e8a6457_16234818 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_11225164745cb83f8e8a6457_16234818',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_12815379255cb83f8e8a6b32_71555128',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_8040196335cb83f8e8a7c09_93508232',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_18920969935cb83f8e8a8b63_28897936',
  ),
  'head_hreflang' => 
  array (
    0 => 'Block_10615222935cb83f8e8aad95_11293405',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12815379255cb83f8e8a6b32_71555128', 'head_seo_title', $this->tplIndex);
?>
</title>
  <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8040196335cb83f8e8a7c09_93508232', 'head_seo_description', $this->tplIndex);
?>
">
  <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18920969935cb83f8e8a8b63_28897936', 'head_seo_keywords', $this->tplIndex);
?>
">
    <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10615222935cb83f8e8aad95_11293405', 'head_hreflang', $this->tplIndex);
?>

<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head_viewport'} */
class Block_19761572075cb83f8e8ad477_98274120 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_viewport' => 
  array (
    0 => 'Block_19761572075cb83f8e8ad477_98274120',
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
class Block_14569767255cb83f8e8add45_85148971 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_14569767255cb83f8e8add45_85148971',
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
class Block_19720865745cb83f8e8aff70_98929115 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_19720865745cb83f8e8aff70_98929115',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
}
}
/* {/block 'stylesheets'} */
/* {block 'javascript_head'} */
class Block_5339680765cb83f8e8b1285_89813977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_head' => 
  array (
    0 => 'Block_5339680765cb83f8e8b1285_89813977',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, false);
}
}
/* {/block 'javascript_head'} */
/* {block 'hook_header'} */
class Block_8474977375cb83f8e8b28b6_35041219 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_header' => 
  array (
    0 => 'Block_8474977375cb83f8e8b28b6_35041219',
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
class Block_18404898815cb83f8e8b3610_88713768 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_extra' => 
  array (
    0 => 'Block_18404898815cb83f8e8b3610_88713768',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'hook_extra'} */
}
