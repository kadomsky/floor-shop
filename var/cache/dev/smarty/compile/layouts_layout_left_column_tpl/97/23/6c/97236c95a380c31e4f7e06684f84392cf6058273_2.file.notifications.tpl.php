<?php
/* Smarty version 3.1.33, created on 2019-11-26 13:05:47
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/_partials/notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddcf8fb7dbdb9_88390226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97236c95a380c31e4f7e06684f84392cf6058273' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/_partials/notifications.tpl',
      1 => 1550645573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddcf8fb7dbdb9_88390226 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if (isset($_smarty_tpl->tpl_vars['notifications']->value)) {?>
<aside id="notifications">
  <div class="container">
    <div class="row">
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8352892815ddcf8fb7d3c46_84017858', 'notifications_error');
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12486136035ddcf8fb7d62d5_23376593', 'notifications_warning');
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10912269805ddcf8fb7d8435_55597081', 'notifications_success');
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4765454465ddcf8fb7da606_28945947', 'notifications_info');
?>

    <?php }?>
  </div>
  </div>
</aside>
<?php }
}
/* {block 'notifications_error'} */
class Block_8352892815ddcf8fb7d3c46_84017858 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_error' => 
  array (
    0 => 'Block_8352892815ddcf8fb7d3c46_84017858',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <article class="alert alert-danger" role="alert" data-alert="danger">
        <ul>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['error'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </article>
      <?php
}
}
/* {/block 'notifications_error'} */
/* {block 'notifications_warning'} */
class Block_12486136035ddcf8fb7d62d5_23376593 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_warning' => 
  array (
    0 => 'Block_12486136035ddcf8fb7d62d5_23376593',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <article class="alert alert-warning" role="alert" data-alert="warning">
        <ul>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['warning'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </article>
      <?php
}
}
/* {/block 'notifications_warning'} */
/* {block 'notifications_success'} */
class Block_10912269805ddcf8fb7d8435_55597081 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_success' => 
  array (
    0 => 'Block_10912269805ddcf8fb7d8435_55597081',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <article class="alert alert-success" role="alert" data-alert="success">
        <ul>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['success'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </article>
      <?php
}
}
/* {/block 'notifications_success'} */
/* {block 'notifications_info'} */
class Block_4765454465ddcf8fb7da606_28945947 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_info' => 
  array (
    0 => 'Block_4765454465ddcf8fb7da606_28945947',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <article class="alert alert-info" role="alert" data-alert="info">
        <ul>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['info'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </article>
      <?php
}
}
/* {/block 'notifications_info'} */
}
