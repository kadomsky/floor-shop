<?php
/* Smarty version 3.1.33, created on 2019-04-17 11:52:11
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/modules/productcomments/productcomments_reviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb6e93b56dfb4_95402479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a870dd6eb89741ee10eb154e8bad54b396b77208' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/modules/productcomments/productcomments_reviews.tpl',
      1 => 1550650912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb6e93b56dfb4_95402479 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="comments_note">
    <!-- <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['averageTotal']->value > 0 && Configuration::get('PRODUCT_COMMENTS_LIST') == 1, ENT_QUOTES, 'UTF-8');?>
 -->
        <div class="star_content clearfix">
            <?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= 5; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <?php if ($_smarty_tpl->tpl_vars['averageTotal']->value <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>
                    <div class="star"></div>
                <?php } else { ?>
                    <div class="star star_on"></div>
                <?php }?>
            <?php
}
}
?>
        <span class="review_count"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>sprintf('(%s)',$_smarty_tpl->tpl_vars['nbComments']->value),'mod'=>'productcomments'),$_smarty_tpl ) );?>
&nbsp</span>
        </div>
    
</div><?php }
}
