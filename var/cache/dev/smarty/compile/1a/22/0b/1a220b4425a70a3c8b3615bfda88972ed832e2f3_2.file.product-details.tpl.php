<?php
/* Smarty version 3.1.33, created on 2019-04-18 12:41:26
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/catalog/_partials/product-details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb8464616df17_25064105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a220b4425a70a3c8b3615bfda88972ed832e2f3' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/catalog/_partials/product-details.tpl',
      1 => 1550645573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb8464616df17_25064105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="tab-pane fade<?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> in active<?php }?>" 
id="product-details" 
     data-product="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['embedded_attributes'] )), ENT_QUOTES, 'UTF-8');?>
"
     role="tabpanel"
  >
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16230343265cb846461453d9_74448993', 'product_reference');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8197269455cb8464614eba5_72336020', 'product_quantities');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12047646535cb84646154183_44058295', 'product_availability_date');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18784479685cb84646157798_73384248', 'product_out_of_stock');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18446235155cb84646159141_01755590', 'product_features');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1308420745cb84646163b68_00453495', 'product_specific_references');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1360182295cb846461699a4_96806740', 'product_condition');
?>

</div>
<?php }
/* {block 'product_reference'} */
class Block_16230343265cb846461453d9_74448993 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_reference' => 
  array (
    0 => 'Block_16230343265cb846461453d9_74448993',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id)) {?>
      <div class="product-manufacturer">
        <?php if (isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value)) {?>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
">
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer_image_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="img img-thumbnail manufacturer-logo" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
">
          </a>
        <?php } else { ?>
          <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
          <span>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
</a>
          </span>
        <?php }?>
      </div>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['reference_to_display'])) {?>
      <div class="product-reference">
        <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </label>
        <span itemprop="sku"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php }?>
    <?php
}
}
/* {/block 'product_reference'} */
/* {block 'product_quantities'} */
class Block_8197269455cb8464614eba5_72336020 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_quantities' => 
  array (
    0 => 'Block_8197269455cb8464614eba5_72336020',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['show_quantities']) {?>
        <div class="product-quantities">
          <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In stock','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
        <span data-stock="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
" data-allow-oosp="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['allow_oosp'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_label'], ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
      <?php }?>
    <?php
}
}
/* {/block 'product_quantities'} */
/* {block 'product_availability_date'} */
class Block_12047646535cb84646154183_44058295 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_availability_date' => 
  array (
    0 => 'Block_12047646535cb84646154183_44058295',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['availability_date']) {?>
        <div class="product-availability-date">
          <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability date:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </label>
          <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_date'], ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
      <?php }?>
    <?php
}
}
/* {/block 'product_availability_date'} */
/* {block 'product_out_of_stock'} */
class Block_18784479685cb84646157798_73384248 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_out_of_stock' => 
  array (
    0 => 'Block_18784479685cb84646157798_73384248',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="product-out-of-stock">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'actionProductOutOfStock','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

      </div>
    <?php
}
}
/* {/block 'product_out_of_stock'} */
/* {block 'product_features'} */
class Block_18446235155cb84646159141_01755590 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_features' => 
  array (
    0 => 'Block_18446235155cb84646159141_01755590',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <?php if ($_smarty_tpl->tpl_vars['product']->value['grouped_features']) {?>
      <section class="product-features">
        <h3 class="h6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data sheet','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
        <dl class="data-sheet">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['grouped_features'], 'feature');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
?>
            <dt class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8');?>
</dt>
            <dd class="value"><?php echo nl2br(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['feature']->value['value'],'htmlall' )));?>
</dd>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </dl>
      </section>
    <?php }?>
    <?php
}
}
/* {/block 'product_features'} */
/* {block 'product_specific_references'} */
class Block_1308420745cb84646163b68_00453495 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_specific_references' => 
  array (
    0 => 'Block_1308420745cb84646163b68_00453495',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_references'])) {?>
        <section class="product-features">
          <h3 class="h6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Specific References','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
            <dl class="data-sheet">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['specific_references'], 'reference', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['reference']->value) {
?>
                <dt class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
</dt>
                <dd class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reference']->value, ENT_QUOTES, 'UTF-8');?>
</dd>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </dl>
        </section>
      <?php }?>
    <?php
}
}
/* {/block 'product_specific_references'} */
/* {block 'product_condition'} */
class Block_1360182295cb846461699a4_96806740 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_condition' => 
  array (
    0 => 'Block_1360182295cb846461699a4_96806740',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['condition']) {?>
        <div class="product-condition">
          <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Condition','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </label>
          <link itemprop="itemCondition" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['condition']['schema_url'], ENT_QUOTES, 'UTF-8');?>
"/>
          <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['condition']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
      <?php }?>
    <?php
}
}
/* {/block 'product_condition'} */
}
