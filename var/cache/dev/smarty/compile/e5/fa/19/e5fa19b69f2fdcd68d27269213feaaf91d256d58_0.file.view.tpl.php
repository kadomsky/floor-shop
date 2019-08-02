<?php
/* Smarty version 3.1.33, created on 2019-08-01 11:30:57
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/modules/ps_facetedsearch/views/templates/admin/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42a341869fd7_27517479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5fa19b69f2fdcd68d27269213feaaf91d256d58' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/themes/festive/modules/ps_facetedsearch/views/templates/admin/view.tpl',
      1 => 1562920116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./_partials/messages.tpl' => 1,
    'file:./_partials/header.tpl' => 1,
    'file:./_partials/categories-tree.tpl' => 1,
    'file:./_partials/shops.tpl' => 1,
    'file:./_partials/footer.tpl' => 1,
  ),
),false)) {
function content_5d42a341869fd7_27517479 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./_partials/messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="panel">
  <h3><i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New filters template','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</h3>

  <form action="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
" method="post" class="form-horizontal" onsubmit="return checkForm();">
    <input type="hidden" name="id_layered_filter" id="id_layered_filter" value="<?php echo $_smarty_tpl->tpl_vars['id_layered_filter']->value;?>
" />

    <?php $_smarty_tpl->_subTemplateRender('file:./_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:./_partials/categories-tree.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:./_partials/shops.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="form-group">
      <label class="control-label col-lg-3">
        <span class="badge" id="selected_filters">0</span>
        <span class="label-tooltip" data-toggle="tooltip" title="" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can drag and drop filters to adjust position','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filters:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</span>
      </label>
      <div class="col-lg-9">
        <section class="filter_panel">
          <header class="clearfix">
            <span class="badge pull-right">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total filters: %s','sprintf'=>array($_smarty_tpl->tpl_vars['total_filters']->value),'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

            </span>
          </header>
          <section class="filter_list">
            <ul id="" class="list-unstyled sortable">

              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['default_filters']->value, 'filter', false, 'filterId');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filterId']->value => $_smarty_tpl->tpl_vars['filter']->value) {
?>
                <li class="filter_list_item row" draggable="true">
                  <div class="col-lg-2">
                    <label class="switch-light prestashop-switch fixed-width-lg">
                      <input name="<?php echo $_smarty_tpl->tpl_vars['filterId']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['filterId']->value;?>
" type="checkbox" />
                      <span>
                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span>
                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span>
                      </span>
                      <a class="slide-button btn"></a>
                    </label>
                  </div>

                  <div class="col-lg-4">
                      <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['filter']->value['label'],'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</h4>
                  </div>

                  <div class="col-lg-3">
                    <label class="control-label col-lg-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter style:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
                    <?php if (!empty($_smarty_tpl->tpl_vars['filter']->value['slider'])) {?>
                      <p class="form-control-static"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of ranges','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</p>
                    <?php } else { ?>
                      <div class="col-lg-6">
                        <select name="<?php echo $_smarty_tpl->tpl_vars['filterId']->value;?>
_filter_type">
                          <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkbox','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                          <option value="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Radio button','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                          <option value="2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Drop-down list','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                        </select>
                      </div>
                    <?php }?>
                  </div>
                  <div class="col-lg-3">
                    <label class="control-label col-lg-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter result limit:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
                    <div class="col-lg-6">
                      <select name="<?php echo $_smarty_tpl->tpl_vars['filterId']->value;?>
_filter_show_limit">
                        <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No limit','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                      </select>
                    </div>
                  </div>
                </li>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

              <?php if (count($_smarty_tpl->tpl_vars['attribute_groups']->value) > 0) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attribute_groups']->value, 'attribute_group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute_group']->value) {
?>
                  <li class="filter_list_item row" draggable="true">
                    <div class="col-lg-2">
                      <label class="switch-light prestashop-switch fixed-width-lg">
                        <input name="layered_selection_ag_<?php echo (int)$_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group'];?>
" id="layered_selection_ag_<?php echo (int)$_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group'];?>
" type="checkbox" />
                        <span>
                          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span>
                          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span>
                        </span>
                        <a class="slide-button btn"></a>
                      </label>
                    </div>
                    <div class="col-lg-4">
                      <span class="module_name">
                        <?php if ($_smarty_tpl->tpl_vars['attribute_group']->value['n'] > 1) {?>
                          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attribute group: %name% (%count% attributes)','sprintf'=>array('%name%'=>$_smarty_tpl->tpl_vars['attribute_group']->value['name'],'%count%'=>$_smarty_tpl->tpl_vars['attribute_group']->value['n']),'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

                        <?php } else { ?>
                          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attribute group: %name% (%count% attribute)','sprintf'=>array('%name%'=>$_smarty_tpl->tpl_vars['attribute_group']->value['name'],'%count%'=>$_smarty_tpl->tpl_vars['attribute_group']->value['n']),'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['attribute_group']->value['is_color_group']) {?>
                          <img src="../img/admin/color_swatch.png" alt="" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This group will allow user to select a color','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
" />
                        <?php }?>
                      </span>
                    </div>
                    <div class="col-lg-3 pull-right">
                      <label class="control-label col-lg-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter result limit:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
                      <div class="col-lg-6">
                        <select name="layered_selection_ag_<?php echo (int)$_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group'];?>
_filter_show_limit">
                          <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No limit','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="10">10</option>
                          <option value="20">20</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-3 pull-right">
                      <label class="control-label col-lg-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter style:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
                      <div class="col-lg-6">
                        <select name="layered_selection_ag_<?php echo (int)$_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group'];?>
_filter_type">
                          <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkbox','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                          <option value="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Radio button','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                          <option value="2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Drop-down list','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                        </select>
                      </div>
                    </div>
                  </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php }?>

              <?php if (count($_smarty_tpl->tpl_vars['features']->value) > 0) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'feature');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
?>
                  <li class="filter_list_item row" draggable="true">
                    <div class="col-lg-2">
                      <label class="switch-light prestashop-switch fixed-width-lg">
                        <input name="layered_selection_feat_<?php echo (int)$_smarty_tpl->tpl_vars['feature']->value['id_feature'];?>
" id="layered_selection_feat_<?php echo (int)$_smarty_tpl->tpl_vars['feature']->value['id_feature'];?>
" type="checkbox" />
                        <span>
                          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span>
                          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span>
                        </span>
                        <a class="slide-button btn"></a>
                      </label>
                    </div>
                    <div class="col-lg-4">
                      <span class="module_name">
                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['n'] > 1) {?>
                          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Feature: %name% (%count% values)','sprintf'=>array('%name%'=>$_smarty_tpl->tpl_vars['feature']->value['name'],'%count%'=>$_smarty_tpl->tpl_vars['feature']->value['n']),'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

                        <?php } else { ?>
                          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Feature: %name% (%count% value)','sprintf'=>array('%name%'=>$_smarty_tpl->tpl_vars['feature']->value['name'],'%count%'=>$_smarty_tpl->tpl_vars['feature']->value['n']),'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

                        <?php }?>
                      </span>
                    </div>
                    <div class="col-lg-3 pull-right">
                      <label class="control-label col-lg-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter result limit:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
                      <div class="col-lg-6">
                        <select name="layered_selection_feat_<?php echo (int)$_smarty_tpl->tpl_vars['feature']->value['id_feature'];?>
_filter_show_limit">
                          <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No limit','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="10">10</option>
                          <option value="20">20</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-3 pull-right">
                      <label class="control-label col-lg-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter style:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
                      <div class="col-lg-6">
                        <select name="layered_selection_feat_<?php echo (int)$_smarty_tpl->tpl_vars['feature']->value['id_feature'];?>
_filter_type">
                          <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkbox','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                          <option value="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Radio button','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                          <option value="2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Drop-down list','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
                        </select>
                      </div>
                    </div>
                  </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php }?>
            </ul>
          </section>
        </section>
      </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:./_partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </form>
</div>
<?php }
}
