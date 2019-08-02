<?php
/* Smarty version 3.1.33, created on 2019-08-01 16:37:50
  from 'module:blockoneclickviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42eb2e2896b4_40868064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c4174edc48d234847a23c0c2b14a9706fc1457a' => 
    array (
      0 => 'module:blockoneclickviewstemplat',
      1 => 1560587986,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42eb2e2896b4_40868064 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/a0280957/domains/shop.floor-shop.ru/public_html/modules/blockoneclick/views/templates/front/button.tpl --><!--заказ в один клик-->
<?php if (isset($_smarty_tpl->tpl_vars['id_product']->value)) {?>
	<?php if (in_array($_smarty_tpl->tpl_vars['utype']->value,array(1))) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		var AKOKUtype = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['utype']->value, ENT_QUOTES, 'UTF-8');?>
";
		// hideQTYProduct();
	<?php echo '</script'; ?>
>
	<div class="raschetPloshd">
		<div<?php if ($_smarty_tpl->tpl_vars['ainfo']->value) {?> hidden<?php }?>><label>Ширина:</label>
			<input type="number" step="1" autocomplete="off" min="1" max="1000000" placeholder="00" id="shirinaNumber" name="shirina" size="5" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['aind']->value['0']), ENT_QUOTES, 'UTF-8');?>
" data-ainfo="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ainfo']->value, ENT_QUOTES, 'UTF-8');?>
">,
			<input type="number" step="1" autocomplete="off" min="0" max="9" placeholder="0" id="shirinaNumberDec" name="shirinaDec" size="2" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['aind']->value['1']), ENT_QUOTES, 'UTF-8');?>
">
		м.</div>
		<div><label>Длина:</label>
			<input type="number" step="1" autocomplete="off" min="1" max="1000000" placeholder="00" id="dlinaNumber" name="dlina" size="5" value="1">,
			<input type="number" step="1" autocomplete="off" min="0" max="9" placeholder="0" id="dlinaNumberDec" name="dlinaDec" size="2" value="0">
		м.</div>
		<div><label>Площадь:</label> <label><span class="ploshd"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ain']->value, ENT_QUOTES, 'UTF-8');?>
</span>м.кв.</label></div>
		<div id="test"></div>
		<div class="unit_price" data-id_product="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_product']->value), ENT_QUOTES, 'UTF-8');?>
" hidden><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['price_amount']), ENT_QUOTES, 'UTF-8');?>

		</div>
	</div>
	<?php }?>
	<button data-AKOKUtype="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['utype']->value), ENT_QUOTES, 'UTF-8');?>
" class="oneClickButton btn btn-primary" data-id-product="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_product']->value), ENT_QUOTES, 'UTF-8');?>
"><span>Забрать в один клик</span></button>
<?php }?>
<!--// заказ в один клик-->
<!-- end /home/a0280957/domains/shop.floor-shop.ru/public_html/modules/blockoneclick/views/templates/front/button.tpl --><?php }
}
