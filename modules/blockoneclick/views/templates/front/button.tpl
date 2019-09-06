<!--заказ в один клик-->
{if isset($id_product)}
	{if in_array($utype, array(1))}
	<script type="text/javascript">
		var AKOKUtype = "{$utype}";
		// hideQTYProduct();
	</script>
	<div class="raschetPloshd">
		<div{if $ainfo} hidden{/if}><label>Ширина:</label>
			<input type="number" step="1" autocomplete="off" min="1" max="1000000" placeholder="00" id="shirinaNumber" name="shirina" size="3" value="{$aind['0']|intval}" data-ainfo="{$ainfo}"><span class="decemalDiv">&#8218;</span>
			<input type="number" step="1" autocomplete="off" min="0" max="9" placeholder="0" id="shirinaNumberDec" name="shirinaDec" size="2" value="{$aind['1']|intval}">
		м.</div>
		<div><label>Длина:</label>
			<input type="number" step="1" autocomplete="off" min="1" max="1000000" placeholder="00" id="dlinaNumber" name="dlina" size="3" value="1"><span class="decemalDiv">&#8218;</span>
			<input type="number" step="1" autocomplete="off" min="0" max="9" placeholder="0" id="dlinaNumberDec" name="dlinaDec" size="2" value="0">
		м.</div>
		<div><label>Площадь:</label> <label><span class="ploshd">{$ain}</span>м.кв.</label></div>
		<div id="test"></div>
		<div class="unit_price" data-id_product="{$id_product|intval}" hidden>{$product['price_amount']|intval}
		{*foreach from=$product key=k item=v}{$k}
		{/foreach*}</div>
	</div>
	{/if}
	<button data-AKOKUtype="{$utype|intval}" class="oneClickButton btn btn-primary" data-id-product="{$id_product|intval}"><span>Забрать в один клик</span></button>
{/if}
<!--// заказ в один клик-->
