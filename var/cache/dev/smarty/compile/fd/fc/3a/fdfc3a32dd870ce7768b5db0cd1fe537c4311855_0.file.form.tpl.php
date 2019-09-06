<?php
/* Smarty version 3.1.33, created on 2019-09-06 13:27:16
  from '/home/a0280957/domains/shop.floor-shop.ru/public_html/modules/wi_categorylist/views/templates/admin/_configure/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7234848f1f48_59499982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdfc3a32dd870ce7768b5db0cd1fe537c4311855' => 
    array (
      0 => '/home/a0280957/domains/shop.floor-shop.ru/public_html/modules/wi_categorylist/views/templates/admin/_configure/helpers/form/form.tpl',
      1 => 1550645572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d7234848f1f48_59499982 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_380536895d7234848ebd53_02260461', "field");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "field"} */
class Block_380536895d7234848ebd53_02260461 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_380536895d7234848ebd53_02260461',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'category_list') {?>
        <div class="row">
            <div class="col-lg-6">
                <select id="category_id" class=" fixed-width-xl" name ="category_id">
                    <?php echo $_smarty_tpl->tpl_vars['options_image']->value;?>

                </select>
            </div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'imagethumb') {?>
        <div class="row">
            <div class="col-lg-6">
                <?php if (isset($_smarty_tpl->tpl_vars['fields']->value[0]['form']['imagethumb'])) {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['image_baseurl']->value;
echo $_smarty_tpl->tpl_vars['fields']->value[0]['form']['imagethumb'];?>
" class="img-thumbnail" />
                <?php }?>
                <input id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" type="file" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="hide" />
                <div class="dummyfile input-group">
                    <span class="input-group-addon"><i class="icon-file"></i></span>
                    <input id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-name" type="text" class="disabled" name="filename" readonly />
                    <span class="input-group-btn">
                        <button id="selectbutton" type="button" name="submitAddAttachments1" class="btn btn-default">
                            <i class="icon-folder-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose thumb image','mod'=>'ctcategorylist'),$_smarty_tpl ) );?>

                        </button>
                    </span>
                </div>
            </div>
        </div>
    <?php }?>
	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "field"} */
}
