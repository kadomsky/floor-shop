<?php
/* Smarty version 3.1.33, created on 2019-04-17 11:52:11
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb6e93b2627c2_73495662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '162e162447c10101a7c3511c11dddfde8b0f8454' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/layouts/layout-both-columns.tpl',
      1 => 1551513760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5cb6e93b2627c2_73495662 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_999024325cb6e93b2402f4_39983118', 'head');
?>

  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11265656265cb6e93b245067_85584722', 'hook_after_body_opening_tag');
?>


    <main>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14466946895cb6e93b246b96_21882933', 'product_activation');
?>


      <header id="header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6907733655cb6e93b2486f9_67700179', 'header');
?>

      </header>
   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15596226495cb6e93b24a074_58219344', 'breadcrumb');
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3129871355cb6e93b24bb53_20146156', 'notifications');
?>

      
    <section id="wrapper">
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

    <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
    <div class="home_container">
    <?php } else { ?>
    <div class="container">
    <div class="row">
    <?php }?>
      <div id="columns_inner">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20570351735cb6e93b24f713_86714990', "left_column");
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17746843695cb6e93b253235_14143873', "content_wrapper");
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9341259785cb6e93b2569d2_26834406', "right_column");
?>

      </div>
      <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
      </div>
      <?php } else { ?>
      </div>
      </div>
      <?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

      </section>

      <footer id="footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2482052115cb6e93b25c506_64123415', "footer");
?>

      </footer>

    </main>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3114282665cb6e93b25e4c4_67523695', 'javascript_bottom');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5693371185cb6e93b260aa9_55336713', 'hook_before_body_closing_tag');
?>

  </body>

</html>
<?php }
/* {block 'head'} */
class Block_999024325cb6e93b2402f4_39983118 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_999024325cb6e93b2402f4_39983118',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_11265656265cb6e93b245067_85584722 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_11265656265cb6e93b245067_85584722',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_14466946895cb6e93b246b96_21882933 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_14466946895cb6e93b246b96_21882933',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_6907733655cb6e93b2486f9_67700179 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_6907733655cb6e93b2486f9_67700179',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'header'} */
/* {block 'breadcrumb'} */
class Block_15596226495cb6e93b24a074_58219344 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_15596226495cb6e93b24a074_58219344',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'breadcrumb'} */
/* {block 'notifications'} */
class Block_3129871355cb6e93b24bb53_20146156 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_3129871355cb6e93b24bb53_20146156',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'notifications'} */
/* {block "left_column"} */
class Block_20570351735cb6e93b24f713_86714990 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_20570351735cb6e93b24f713_86714990',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

              <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

              <?php }?>
            </div>
          <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_9930376375cb6e93b2548f0_39081472 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <p>Hello world! This is HTML5 Boilerplate.</p>
              <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_17746843695cb6e93b253235_14143873 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_17746843695cb6e93b253235_14143873',
  ),
  'content' => 
  array (
    0 => 'Block_9930376375cb6e93b2548f0_39081472',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="content-wrapper" class="left-column right-column col-sm-4 col-md-6">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9930376375cb6e93b2548f0_39081472', "content", $this->tplIndex);
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

            </div>
          <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_9341259785cb6e93b2569d2_26834406 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_9341259785cb6e93b2569d2_26834406',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="right-column" class="col-xs-12 col-sm-4 col-md-3">
              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

              <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

              <?php }?>
            </div>
          <?php
}
}
/* {/block "right_column"} */
/* {block "footer"} */
class Block_2482052115cb6e93b25c506_64123415 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_2482052115cb6e93b25c506_64123415',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_3114282665cb6e93b25e4c4_67523695 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_3114282665cb6e93b25e4c4_67523695',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_5693371185cb6e93b260aa9_55336713 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_5693371185cb6e93b260aa9_55336713',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
