<?php
/* Smarty version 3.1.33, created on 2019-04-17 11:52:11
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb6e93b222e65_81650723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80affda2435355e2dc8a269aa92eec409dbf1d43' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/catalog/product.tpl',
      1 => 1550645573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/product-details.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
function content_5cb6e93b222e65_81650723 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4534911775cb6e93b1ce927_46648240', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19063664575cb6e93b1d0060_62112999', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7762768345cb6e93b1d78c2_23671261', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo'} */
class Block_4534911775cb6e93b1ce927_46648240 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_4534911775cb6e93b1ce927_46648240',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head'} */
class Block_19063664575cb6e93b1d0060_62112999 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_19063664575cb6e93b1d0060_62112999',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta property="og:type" content="product">
  <meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if (isset($_smarty_tpl->tpl_vars['product']->value['weight']) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
  <meta property="product:weight:value" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:weight:units" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }
}
}
/* {/block 'head'} */
/* {block 'product_flags'} */
class Block_3853565545cb6e93b1d8f42_56936281 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <ul class="product-flags">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
                    <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
              <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_cover_thumbnails'} */
class Block_1169071925cb6e93b1ddef3_21163646 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
              <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_1239570645cb6e93b1d8990_16159124 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3853565545cb6e93b1d8f42_56936281', 'product_flags', $this->tplIndex);
?>


              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1169071925cb6e93b1ddef3_21163646', 'product_cover_thumbnails', $this->tplIndex);
?>

              <div class="scroll-box-arrows">
                <i class="material-icons left">&#xE314;</i>
                <i class="material-icons right">&#xE315;</i>
              </div>

            <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_8842060685cb6e93b1d84b8_40320228 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <section class="page-content" id="content">
            <div class="product-leftside">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1239570645cb6e93b1d8990_16159124', 'page_content', $this->tplIndex);
?>

			</div>
          </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
class Block_19033250975cb6e93b1e14e6_22375545 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_1628413965cb6e93b1e1035_08696166 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <h1 class="productpage_title" itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19033250975cb6e93b1e14e6_22375545', 'page_title', $this->tplIndex);
?>
</h1>
            <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_2167740425cb6e93b1e0b12_58220947 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1628413965cb6e93b1e1035_08696166', 'page_header', $this->tplIndex);
?>

          <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_description_short'} */
class Block_14674735015cb6e93b1e3055_75195680 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
            <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_prices'} */
class Block_17794126105cb6e93b1e48b1_96917662 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_customization'} */
class Block_7843086085cb6e93b1e63d0_90042363 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
              <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_7501617475cb6e93b1eb2c6_97622571 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_2040283605cb6e93b1ee295_94358151 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
?>
                          <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_14384252275cb6e93b1ec180_61388619 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
                      <section class="product-pack">
                        <h3 class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
?>
                          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2040283605cb6e93b1ee295_94358151', 'product_miniature', $this->tplIndex);
?>

                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </section>
                    <?php }?>
                  <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_15985014665cb6e93b1efad6_36261834 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_add_to_cart'} */
class Block_18000287465cb6e93b1f0797_99939746 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_additional_info'} */
class Block_17098478315cb6e93b1f1a06_00930106 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_refresh'} */
class Block_5236006745cb6e93b1f2e96_06144336 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_12691590075cb6e93b1e9395_46927999 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                  <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                  <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                  <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">

                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7501617475cb6e93b1eb2c6_97622571', 'product_variants', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14384252275cb6e93b1ec180_61388619', 'product_pack', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15985014665cb6e93b1efad6_36261834', 'product_discounts', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18000287465cb6e93b1f0797_99939746', 'product_add_to_cart', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17098478315cb6e93b1f1a06_00930106', 'product_additional_info', $this->tplIndex);
?>


                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5236006745cb6e93b1f2e96_06144336', 'product_refresh', $this->tplIndex);
?>

                </form>
              <?php
}
}
/* {/block 'product_buy'} */
/* {block 'hook_display_reassurance'} */
class Block_64930715cb6e93b1f4339_95396628 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_description'} */
class Block_556594415cb6e93b1fcfd0_45758888 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                   <div class="product-description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div>
                 <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_details'} */
class Block_15380575835cb6e93b1fdfd3_71417376 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
               <?php
}
}
/* {/block 'product_details'} */
/* {block 'product_attachments'} */
class Block_14525376595cb6e93b1fecd3_92248363 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                 <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
                    <div class="tab-pane fade in" id="attachments" role="tabpanel">
                     <section class="product-attachments">
                       <h3 class="h5 text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</h3>
                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attachments'], 'attachment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
?>
                         <div class="attachment">
                           <h4><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h4>
                           <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p>
                       <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
">
                             <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['file_size_formatted'], ENT_QUOTES, 'UTF-8');?>
)
                           </a>
                         </div>
                       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                     </section>
                   </div>
                 <?php }?>
               <?php
}
}
/* {/block 'product_attachments'} */
/* {block 'product_tabs'} */
class Block_3412029305cb6e93b1f5901_95209741 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section class="product-tabcontent">	
		<div class="tabs">
                <ul class="nav nav-tabs" role="tablist">
                <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>
                <li class="nav-item">
                       <a
                         class="nav-link<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>"
data-toggle="tab"
                         href="#description"
                         role="tab"
                         aria-controls="description"
                         <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                </li>
                <?php }?>
                <li class="nav-item">
                    <a
                      class="nav-link<?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>"
                      data-toggle="tab"
                      href="#product-details"
                      role="tab"
                      aria-controls="product-details"
                      <?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Details','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
                <li class="nav-item">
                      <a
                        class="nav-link"
                        data-toggle="tab"
                        href="#attachments"
                        role="tab"
                        aria-controls="attachments"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachments','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                </li>
                <?php }?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
?>
                <li class="nav-item">
                      <a
                        class="nav-link"
                        data-toggle="tab"
                        href="#extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"
                        role="tab"
                        aria-controls="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
                </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>

              <div class="tab-content" id="tab-content">
                 <div class="tab-pane fade in<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>" id="description" role="tabpanel">
                 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_556594415cb6e93b1fcfd0_45758888', 'product_description', $this->tplIndex);
?>

               </div>

               <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15380575835cb6e93b1fdfd3_71417376', 'product_details', $this->tplIndex);
?>


               <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14525376595cb6e93b1fecd3_92248363', 'product_attachments', $this->tplIndex);
?>


               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
?>
                 <div class="tab-pane fade in <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['attr']['class'], ENT_QUOTES, 'UTF-8');?>
" id="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" role="tabpanel" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['attr'], 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
                   <?php echo $_smarty_tpl->tpl_vars['extra']->value['content'];?>

               </div>
               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTmoProductTabContent','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

            </div>
          </div>
<?php
}
}
/* {/block 'product_tabs'} */
/* {block 'product_miniature'} */
class Block_10834456835cb6e93b218680_10856584 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <li class="<?php if ($_smarty_tpl->tpl_vars['productsCount']->value >= $_smarty_tpl->tpl_vars['sliderVal']->value) {?>item<?php } else { ?>product_item col-xs-12 col-sm-6 col-md-4 col-lg-3<?php }?>">
				<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value), 0, true);
?>
				</li>
              <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_467574795cb6e93b210347_69011157 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
        <?php $_smarty_tpl->_assignInScope('sliderVal', 5);?> <!-- Define Number of product for SLIDER -->
		<?php $_smarty_tpl->_assignInScope('productsCount', count($_smarty_tpl->tpl_vars['accessories']->value));?>
		
		<section class="wi-product-accessories clearfix">
      <div class="products-tab-content">
            <h2 class="h1 products-section-title">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

        </h2>
    </div>
         <div class="products"> 
         <div class="product_accessory"> 
		 	<?php if ($_smarty_tpl->tpl_vars['productsCount']->value >= $_smarty_tpl->tpl_vars['sliderVal']->value) {?>
				<ul id="wi-accessories-carousel" class="wi-carousel product_list">
			<?php } else { ?>
				<ul id="wi-accessories-grid" class="accessories_grid product_list grid row gridcount">
			<?php }?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_accessory']->value) {
?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10834456835cb6e93b218680_10856584', 'product_miniature', $this->tplIndex);
?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
			
			<?php if ($_smarty_tpl->tpl_vars['productsCount']->value >= $_smarty_tpl->tpl_vars['sliderVal']->value) {?>
				<div class="customNavigation">
					<a class="btn prev accessories_prev">&nbsp;</a>
					<a class="btn next accessories_next">&nbsp;</a>
				</div>
			<?php }?>
			</div>
          </div>
        </section>
      <?php }?>
    <?php
}
}
/* {/block 'product_accessories'} */
/* {block 'product_footer'} */
class Block_19670865225cb6e93b21d5b7_88558223 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_9954001655cb6e93b21f2b4_02876975 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
class Block_16160445165cb6e93b221169_71493956 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_9804199625cb6e93b2206f9_83877505 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16160445165cb6e93b221169_71493956', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_7762768345cb6e93b1d78c2_23671261 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7762768345cb6e93b1d78c2_23671261',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_8842060685cb6e93b1d84b8_40320228',
  ),
  'page_content' => 
  array (
    0 => 'Block_1239570645cb6e93b1d8990_16159124',
  ),
  'product_flags' => 
  array (
    0 => 'Block_3853565545cb6e93b1d8f42_56936281',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_1169071925cb6e93b1ddef3_21163646',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_2167740425cb6e93b1e0b12_58220947',
  ),
  'page_header' => 
  array (
    0 => 'Block_1628413965cb6e93b1e1035_08696166',
  ),
  'page_title' => 
  array (
    0 => 'Block_19033250975cb6e93b1e14e6_22375545',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_14674735015cb6e93b1e3055_75195680',
  ),
  'product_prices' => 
  array (
    0 => 'Block_17794126105cb6e93b1e48b1_96917662',
  ),
  'product_customization' => 
  array (
    0 => 'Block_7843086085cb6e93b1e63d0_90042363',
  ),
  'product_buy' => 
  array (
    0 => 'Block_12691590075cb6e93b1e9395_46927999',
  ),
  'product_variants' => 
  array (
    0 => 'Block_7501617475cb6e93b1eb2c6_97622571',
  ),
  'product_pack' => 
  array (
    0 => 'Block_14384252275cb6e93b1ec180_61388619',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_2040283605cb6e93b1ee295_94358151',
    1 => 'Block_10834456835cb6e93b218680_10856584',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_15985014665cb6e93b1efad6_36261834',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_18000287465cb6e93b1f0797_99939746',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_17098478315cb6e93b1f1a06_00930106',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_5236006745cb6e93b1f2e96_06144336',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_64930715cb6e93b1f4339_95396628',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_3412029305cb6e93b1f5901_95209741',
  ),
  'product_description' => 
  array (
    0 => 'Block_556594415cb6e93b1fcfd0_45758888',
  ),
  'product_details' => 
  array (
    0 => 'Block_15380575835cb6e93b1fdfd3_71417376',
  ),
  'product_attachments' => 
  array (
    0 => 'Block_14525376595cb6e93b1fecd3_92248363',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_467574795cb6e93b210347_69011157',
  ),
  'product_footer' => 
  array (
    0 => 'Block_19670865225cb6e93b21d5b7_88558223',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_9954001655cb6e93b21f2b4_02876975',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_9804199625cb6e93b2206f9_83877505',
  ),
  'page_footer' => 
  array (
    0 => 'Block_16160445165cb6e93b221169_71493956',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main" itemscope itemtype="https://schema.org/Product">
    <meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">

    <div class="row">
      <div class="col-md-6 product_left">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8842060685cb6e93b1d84b8_40320228', 'page_content_container', $this->tplIndex);
?>

        </div>
        <div class="col-md-6 product_right">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2167740425cb6e93b1e0b12_58220947', 'page_header_container', $this->tplIndex);
?>



          <div class="product-information">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14674735015cb6e93b1e3055_75195680', 'product_description_short', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17794126105cb6e93b1e48b1_96917662', 'product_prices', $this->tplIndex);
?>


            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7843086085cb6e93b1e63d0_90042363', 'product_customization', $this->tplIndex);
?>

            <?php }?>

            <div class="product-actions">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12691590075cb6e93b1e9395_46927999', 'product_buy', $this->tplIndex);
?>

              
            </div>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64930715cb6e93b1f4339_95396628', 'hook_display_reassurance', $this->tplIndex);
?>

        </div>
      </div>
    </div>
	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3412029305cb6e93b1f5901_95209741', 'product_tabs', $this->tplIndex);
?>

	</section>
	
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_467574795cb6e93b210347_69011157', 'product_accessories', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19670865225cb6e93b21d5b7_88558223', 'product_footer', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9954001655cb6e93b21f2b4_02876975', 'product_images_modal', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9804199625cb6e93b2206f9_83877505', 'page_footer_container', $this->tplIndex);
?>

  </section>

<?php
}
}
/* {/block 'content'} */
}
