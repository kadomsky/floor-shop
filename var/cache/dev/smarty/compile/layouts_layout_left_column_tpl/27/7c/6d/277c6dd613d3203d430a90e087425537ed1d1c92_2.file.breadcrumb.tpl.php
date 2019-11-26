<?php
/* Smarty version 3.1.33, created on 2019-11-26 13:05:47
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/_partials/breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddcf8fb7ceda8_68072669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '277c6dd613d3203d430a90e087425537ed1d1c92' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/_partials/breadcrumb.tpl',
      1 => 1574486768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddcf8fb7ceda8_68072669 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb hidden-sm-down">
   <div class="container">
  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8160421025ddcf8fb7c4e86_93191952', 'breadcrumb');
?>

  </ol>
  </div>
</nav>
<?php }
/* {block 'breadcrumb_item'} */
class Block_21403337315ddcf8fb7c8a33_37527121 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
	<?php if ($_smarty_tpl->tpl_vars['path']->value['url'] === '#' || $_smarty_tpl->tpl_vars['counterIter']->value === $_smarty_tpl->tpl_vars['countList']->value) {?>
	<b itemprop="item">
          <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
        </b>
	<?php } else { ?>
	<a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
          <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
        </a>
	<?php }?>
        <meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
">
      </li>
      <?php
}
}
/* {/block 'breadcrumb_item'} */
/* {block 'breadcrumb'} */
class Block_8160421025ddcf8fb7c4e86_93191952 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_8160421025ddcf8fb7c4e86_93191952',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_21403337315ddcf8fb7c8a33_37527121',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('counterIter', 1);?>
    <?php $_smarty_tpl->_assignInScope('countList', count($_smarty_tpl->tpl_vars['breadcrumb']->value['links']));?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21403337315ddcf8fb7c8a33_37527121', 'breadcrumb_item', $this->tplIndex);
?>

    <?php $_smarty_tpl->_assignInScope('counterIter', $_smarty_tpl->tpl_vars['counterIter']->value+1);?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
}
/* {/block 'breadcrumb'} */
}
