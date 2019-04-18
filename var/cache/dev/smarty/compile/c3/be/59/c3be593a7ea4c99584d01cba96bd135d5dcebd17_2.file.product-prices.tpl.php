<?php
/* Smarty version 3.1.33, created on 2019-04-18 12:41:26
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/catalog/_partials/product-prices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb846460edac0_54610542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3be593a7ea4c99584d01cba96bd135d5dcebd17' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/catalog/_partials/product-prices.tpl',
      1 => 1550645573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb846460edac0_54610542 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
  <div class="product-prices">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3979514215cb846460b8f79_34405669', 'product_price');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9937299965cb846460d07c0_57589154', 'product_without_taxes');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12900014545cb846460d3e01_06647064', 'product_pack_price');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6407216395cb846460d6bf2_48291164', 'product_ecotax');
?>


    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight",'hook_origin'=>'product_sheet'),$_smarty_tpl ) );?>


    <div class="tax-shipping-delivery-label">
      <?php if ($_smarty_tpl->tpl_vars['configuration']->value['display_taxes_label']) {?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['labels']['tax_long'], ENT_QUOTES, 'UTF-8');?>

      <?php }?>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl ) );?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"after_price"),$_smarty_tpl ) );?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['additional_delivery_times'] == 1) {?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['delivery_information']) {?>
          <span class="delivery-information"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['delivery_information'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php }?>
      <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['additional_delivery_times'] == 2) {?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0) {?>
          <span class="delivery-information"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['delivery_in_stock'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['quantity'] == 0 && $_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
          <span class="delivery-information"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['delivery_out_stock'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php }?>
      <?php }?>
    </div>
  </div>
<?php }
}
/* {block 'product_discount'} */
class Block_2578775325cb846460be7e2_84017080 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
              <div class="product-discount">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

                  <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
              </div>
              <?php }?>
            <?php
}
}
/* {/block 'product_discount'} */
/* {block 'product_unit_price'} */
class Block_13101432415cb846460cc9f9_38049494 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['displayUnitPrice']->value) {?>
            <p class="product-unit-price sub"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(%unit_price%)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%unit_price%'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_full'])),$_smarty_tpl ) );?>
</p>
          <?php }?>
        <?php
}
}
/* {/block 'product_unit_price'} */
/* {block 'product_price'} */
class Block_3979514215cb846460b8f79_34405669 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price' => 
  array (
    0 => 'Block_3979514215cb846460b8f79_34405669',
  ),
  'product_discount' => 
  array (
    0 => 'Block_2578775325cb846460be7e2_84017080',
  ),
  'product_unit_price' => 
  array (
    0 => 'Block_13101432415cb846460cc9f9_38049494',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div
        class="product-price h5 <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>has-discount<?php }?>"
        itemprop="offers"
        itemscope
        itemtype="https://schema.org/Offer"
      >
        <link itemprop="availability" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['seo_availability'], ENT_QUOTES, 'UTF-8');?>
"/>
        <meta itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

        <div class="current-price">
          <span itemprop="price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2578775325cb846460be7e2_84017080', 'product_discount', $this->tplIndex);
?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
              <span class="discount discount-percentage"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save %percentage%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%percentage%'=>$_smarty_tpl->tpl_vars['product']->value['discount_percentage_absolute'])),$_smarty_tpl ) );?>
</span>
            <?php } else { ?>
              <span class="discount discount-amount">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save %amount%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['discount_to_display'])),$_smarty_tpl ) );?>

            </span>
            <?php }?>
          <?php }?>
        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13101432415cb846460cc9f9_38049494', 'product_unit_price', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'product_price'} */
/* {block 'product_without_taxes'} */
class Block_9937299965cb846460d07c0_57589154 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_without_taxes' => 
  array (
    0 => 'Block_9937299965cb846460d07c0_57589154',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 2) {?>
        <p class="product-without-taxes"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%price% tax excl.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc'])),$_smarty_tpl ) );?>
</p>
      <?php }?>
    <?php
}
}
/* {/block 'product_without_taxes'} */
/* {block 'product_pack_price'} */
class Block_12900014545cb846460d3e01_06647064 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_pack_price' => 
  array (
    0 => 'Block_12900014545cb846460d3e01_06647064',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['displayPackPrice']->value) {?>
        <p class="product-pack-price"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instead of %price%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['noPackPrice']->value)),$_smarty_tpl ) );?>
</span></p>
      <?php }?>
    <?php
}
}
/* {/block 'product_pack_price'} */
/* {block 'product_ecotax'} */
class Block_6407216395cb846460d6bf2_48291164 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_ecotax' => 
  array (
    0 => 'Block_6407216395cb846460d6bf2_48291164',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['ecotax']['amount'] > 0) {?>
        <p class="price-ecotax"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Including %amount% for ecotax','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['ecotax']['value'])),$_smarty_tpl ) );?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(not impacted by the discount)','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

          <?php }?>
        </p>
      <?php }?>
    <?php
}
}
/* {/block 'product_ecotax'} */
}
