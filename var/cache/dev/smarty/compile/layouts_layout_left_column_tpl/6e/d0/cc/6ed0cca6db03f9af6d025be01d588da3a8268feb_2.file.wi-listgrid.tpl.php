<?php
/* Smarty version 3.1.33, created on 2019-04-18 12:12:46
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/catalog/_partials/miniatures/wi-listgrid.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb83f8ea1d988_73985040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ed0cca6db03f9af6d025be01d588da3a8268feb' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/catalog/_partials/miniatures/wi-listgrid.tpl',
      1 => 1550645573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/variant-links.tpl' => 1,
  ),
),false)) {
function content_5cb83f8ea1d988_73985040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
 
<div class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
  <div class="thumbnail-container">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18681220915cb83f8ea02796_51630735', 'product_thumbnail');
?>

	 <div class="hoverimage">
      <div class="functional-buttons clearfix">
        <div class="product-actions">

      <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" class="add-to-cart-or-refresh">
      <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
      <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product_page_product_id">
      <input type="hidden" name="qty" value="1">
      <button class="btn btn-primary add-to-cart" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add To Cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" data-button-action="add-to-cart" type="submit" <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {?>disabled<?php }?>><i class="fa fa-shopping-basket" aria-hidden="true"></i>
        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
      </button>
      </form>

    </div>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14459155025cb83f8ea0ab17_14468979', 'quick_view');
?>

		</div>
    </div>

 </div>

    <div class="product-description">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16547281195cb83f8ea0c027_04919580', 'product_name');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9190834185cb83f8ea0d520_19139884', 'product_reviews');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4993015035cb83f8ea0ead3_81615619', 'product_price_and_shipping');
?>

      
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9783431425cb83f8ea16500_90000336', 'product_description_short');
?>

    <div class="product-actions">

      <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" class="add-to-cart-or-refresh">
      <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
      <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product_page_product_id">
      <input type="hidden" name="qty" value="1">
      <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {?>disabled<?php }?>>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </button>
      </form>
    </div>
     
		<div class="highlighted-informations<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?> hidden-sm-down">
	
		  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4252779305cb83f8ea1b0e7_76791185', 'product_variants');
?>

		</div>
	</div>
</div>
<?php }
/* {block 'product_flags'} */
class Block_16902318735cb83f8ea04fe4_94556357 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <ul class="product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
          <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
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
/* {block 'product_thumbnail'} */
class Block_18681220915cb83f8ea02796_51630735 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_18681220915cb83f8ea02796_51630735',
  ),
  'product_flags' => 
  array (
    0 => 'Block_16902318735cb83f8ea04fe4_94556357',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
        <img
          src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
          alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
          data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
        >
       
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16902318735cb83f8ea04fe4_94556357', 'product_flags', $this->tplIndex);
?>
  
      </a>
    <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'quick_view'} */
class Block_14459155025cb83f8ea0ab17_14468979 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'quick_view' => 
  array (
    0 => 'Block_14459155025cb83f8ea0ab17_14468979',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <a href="#" class="quick-view" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" data-link-action="quickview">
       <i class="fa fa-eye" aria-hidden="true"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </a>
      <?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_name'} */
class Block_16547281195cb83f8ea0c027_04919580 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_16547281195cb83f8ea0c027_04919580',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <h1 class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h1>
        <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_reviews'} */
class Block_9190834185cb83f8ea0d520_19139884 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_reviews' => 
  array (
    0 => 'Block_9190834185cb83f8ea0d520_19139884',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_price_and_shipping'} */
class Block_4993015035cb83f8ea0ead3_81615619 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_4993015035cb83f8ea0ead3_81615619',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
          <div class="product-price-and-shipping">
            <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
            <span itemprop="price" class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
              <span class="discount-percentage discount-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
              <span class="discount-amount discount-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

              <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
              <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php }?>


            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

          </div>
        <?php }?>
      <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_description_short'} */
class Block_9783431425cb83f8ea16500_90000336 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_9783431425cb83f8ea16500_90000336',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <div class="product-detail" itemprop="description"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description_short'],200,'...' ));?>
</div>
		<?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_variants'} */
class Block_4252779305cb83f8ea1b0e7_76791185 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_variants' => 
  array (
    0 => 'Block_4252779305cb83f8ea1b0e7_76791185',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
			  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
			<?php }?>
		  <?php
}
}
/* {/block 'product_variants'} */
}
