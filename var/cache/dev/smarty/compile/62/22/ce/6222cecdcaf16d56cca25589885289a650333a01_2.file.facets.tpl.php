<?php
/* Smarty version 3.1.33, created on 2019-04-18 12:12:46
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/catalog/_partials/facets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb83f8e83a297_05392509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6222cecdcaf16d56cca25589885289a650333a01' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/templates/catalog/_partials/facets.tpl',
      1 => 1550645573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb83f8e83a297_05392509 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
  <div id="search_filters">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1954737865cb83f8e7f4bc8_94069658', 'facets_title');
?>


<div class="block_content">	
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facets']->value, 'facet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['facet']->value) {
?>
      <?php if ($_smarty_tpl->tpl_vars['facet']->value['displayed']) {?>
        <section class="facet clearfix">
<!--           <h1 class="h6 facet-title hidden-sm-down"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
</h1> -->
          <?php $_smarty_tpl->_assignInScope('_expand_id', mt_rand(10,100000));?>
          <?php $_smarty_tpl->_assignInScope('_collapse', true);?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {
$_smarty_tpl->_assignInScope('_collapse', false);
}?>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <div class="title" data-target="#facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse"<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> aria-expanded="true"<?php }?>>
            <h1 class="h6 facet-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
</h1>
            <span class="float-xs-right">
              <span class="navbar-toggler collapse-icons">
                <i class="material-icons add">&#xE145;</i>
                  <i class="material-icons remove">&#xE15B;</i>
              </span>
            </span>
          </div>

          <?php if ($_smarty_tpl->tpl_vars['facet']->value['widgetType'] !== 'dropdown') {?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6700919355cb83f8e815476_64798318', 'facet_item_other');
?>


          <?php } else { ?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13448734265cb83f8e82b5c5_26609620', 'facet_item_dropdown');
?>


          <?php }?>
        </section>
      <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17062209555cb83f8e838948_82905191', 'facets_clearall_button');
?>

	</div>
  </div>
<?php }
/* {block 'facets_title'} */
class Block_1954737865cb83f8e7f4bc8_94069658 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facets_title' => 
  array (
    0 => 'Block_1954737865cb83f8e7f4bc8_94069658',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h4 class="block_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter By','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</h4>
<?php
}
}
/* {/block 'facets_title'} */
/* {block 'facet_item_other'} */
class Block_6700919355cb83f8e815476_64798318 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_other' => 
  array (
    0 => 'Block_6700919355cb83f8e815476_64798318',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <ul id="facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse in">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter', false, 'filter_key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter_key']->value => $_smarty_tpl->tpl_vars['filter']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['filter']->value['displayed']) {?>
                  <li>
                      <label class="facet-label<?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> active <?php }?>" for="facet_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
">
                      <?php if ($_smarty_tpl->tpl_vars['facet']->value['multipleSelectionAllowed']) {?>
                        <span class="custom-checkbox">
                          <input
                              id="facet_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                            data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                            type="checkbox"
                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> checked <?php }?>
                          >
                          <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color'])) {?>
                            <span class="color" style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['properties']['color'], ENT_QUOTES, 'UTF-8');?>
"></span>
                            <?php } elseif (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['texture'])) {?>
                              <span class="color texture" style="background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['properties']['texture'], ENT_QUOTES, 'UTF-8');?>
)"></span>
                            <?php } else { ?>
                            <span <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js" <?php }?>><i class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
                          <?php }?>
                        </span>
                      <?php } else { ?>
                          <span class="custom-radio">
                          <input
                              id="facet_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                            data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                            type="radio"
                            name="filter <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
"
                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> checked <?php }?>
                          >
                            <span <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js" <?php }?>></span>
                        </span>
                      <?php }?>

                      <a
                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                        class="_gray-darker search-link js-search-link"
                        rel="nofollow"
                      >
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                        <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude']) {?>
                          <span class="magnitude">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)</span>
                        <?php }?>
                      </a>
                    </label>
                  </li>
                <?php }?>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            <?php
}
}
/* {/block 'facet_item_other'} */
/* {block 'facet_item_dropdown'} */
class Block_13448734265cb83f8e82b5c5_26609620 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_dropdown' => 
  array (
    0 => 'Block_13448734265cb83f8e82b5c5_26609620',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <ul id="facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> in<?php }?>">
                <li>
                  <div class="col-sm-12 col-xs-12 col-md-12 facet-dropdown dropdown">
                    <a class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <?php $_smarty_tpl->_assignInScope('active_found', false);?>
                      <span>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
                      <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude']) {?>
                              (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)
                            <?php }?>
                            <?php $_smarty_tpl->_assignInScope('active_found', true);?>
                          <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php if (!$_smarty_tpl->tpl_vars['active_found']->value) {?>
                          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(no filter)','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

                      <?php }?>
                      </span>
                      <i class="material-icons float-xs-right">&#xE5C5;</i>
                    </a>
                    <div class="dropdown-menu">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
                        <?php if (!$_smarty_tpl->tpl_vars['filter']->value['active']) {?>
                          <a
                            rel="nofollow"
                            href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                            class="select-list"
                    >
                      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                      <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude']) {?>
                        (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)
                      <?php }?>
                          </a>
                  <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                  </div>
                </li>
              </ul>
<?php
}
}
/* {/block 'facet_item_dropdown'} */
/* {block 'facets_clearall_button'} */
class Block_17062209555cb83f8e838948_82905191 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facets_clearall_button' => 
  array (
    0 => 'Block_17062209555cb83f8e838948_82905191',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="_desktop_search_filters_clear_all" class="hidden-md-down clear-all-wrapper">
      <button data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['clear_all_link']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-tertiary js-search-filters-clear-all">
        <!-- <i class="material-icons">&#xE14C;</i> -->
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear all','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </button>
    </div>
<?php
}
}
/* {/block 'facets_clearall_button'} */
}
