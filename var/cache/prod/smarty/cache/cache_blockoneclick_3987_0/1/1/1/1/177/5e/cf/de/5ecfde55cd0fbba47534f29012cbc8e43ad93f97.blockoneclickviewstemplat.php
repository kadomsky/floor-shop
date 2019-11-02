<?php
/* Smarty version 3.1.33, created on 2019-11-02 09:19:47
  from 'module:blockoneclickviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbd200309cd61_09284288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c4174edc48d234847a23c0c2b14a9706fc1457a' => 
    array (
      0 => 'module:blockoneclickviewstemplat',
      1 => 1567058296,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5dbd200309cd61_09284288 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
));
?><!--заказ в один клик-->
		<script type="text/javascript">
		var AKOKUtype = "1";
		// hideQTYProduct();
	</script>
	<div class="raschetPloshd">
		<div><label>Ширина:</label>
			<input type="number" step="1" autocomplete="off" min="1" max="1000000" placeholder="00" id="shirinaNumber" name="shirina" size="3" value="1" data-ainfo=""><span class="decemalDiv">&#8218;</span>
			<input type="number" step="1" autocomplete="off" min="0" max="9" placeholder="0" id="shirinaNumberDec" name="shirinaDec" size="2" value="0">
		м.</div>
		<div><label>Длина:</label>
			<input type="number" step="1" autocomplete="off" min="1" max="1000000" placeholder="00" id="dlinaNumber" name="dlina" size="3" value="1"><span class="decemalDiv">&#8218;</span>
			<input type="number" step="1" autocomplete="off" min="0" max="9" placeholder="0" id="dlinaNumberDec" name="dlinaDec" size="2" value="0">
		м.</div>
		<div><label>Площадь:</label> <label><span class="ploshd">1</span>м.кв.</label></div>
		<div id="test"></div>
		<div class="unit_price" data-id_product="3987" hidden>2200
		</div>
	</div>
		<button data-AKOKUtype="1" class="oneClickButton btn btn-primary" data-id-product="3987"><span>Забрать в один клик</span></button>
<!--// заказ в один клик-->
<?php }
}
