<?php
/* Smarty version 3.1.33, created on 2019-08-01 16:37:30
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/_partials/notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42eb1a975b76_04421248',
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
function content_5d42eb1a975b76_04421248 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if (isset($_smarty_tpl->tpl_vars['notifications']->value)) {?>
<aside id="notifications">
  <div class="container">
    <div class="row">
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8401339185d42eb1a96b8b4_62375938', 'notifications_error');
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14128396285d42eb1a96ebf8_70873209', 'notifications_warning');
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6753985035d42eb1a971152_58393764', 'notifications_success');
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10328527875d42eb1a973cb3_76823461', 'notifications_info');
?>

    <?php }?>
  </div>
  </div>
</aside>
<?php }
}
/* {block 'notifications_error'} */
class Block_8401339185d42eb1a96b8b4_62375938 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_error' => 
  array (
    0 => 'Block_8401339185d42eb1a96b8b4_62375938',
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
class Block_14128396285d42eb1a96ebf8_70873209 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_warning' => 
  array (
    0 => 'Block_14128396285d42eb1a96ebf8_70873209',
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
class Block_6753985035d42eb1a971152_58393764 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_success' => 
  array (
    0 => 'Block_6753985035d42eb1a971152_58393764',
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
class Block_10328527875d42eb1a973cb3_76823461 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_info' => 
  array (
    0 => 'Block_10328527875d42eb1a973cb3_76823461',
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
