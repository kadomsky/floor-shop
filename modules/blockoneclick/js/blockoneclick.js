function ValidPhone() {
    var re = /^\+\d[\d\(\)\ -]{4,14}\d$/;
    var myPhone = $('#OneClickphone').val();
    var valid = re.test(myPhone);
    if (valid) output = '';//'Номер телефона введен правильно!';
    else {
		$('#BOCmessagePhone').html('Номер телефона введен неправильно!');
	}
    return valid;
}

$(document).ready(function(){
	$(document).on('click', ".oneClickButton", function(){
		$.fancybox.showLoading();
		$.post(oneclickAjaxURL, {qty: '1', pID: $(this).data('id-product'), action: 'oneClick'}, function(data){
//			console.log('blockoneclick-'+data);
			var attr = $(document).find('.current-price').clone();
			var attrText = '';
			$(document).find('.product-variants .product-variants-item').each(function(){
				var item = $(this);
				attrText += $(".control-label", item).text();
				attrText += ': <b>'+$("select option:selected", item).text()+'</b><br>';
			});
			$.fancybox.open(data);
			if ($('div').is('.raschetPloshd')) {
				var upr = $(document).find('div.raschetPloshd');
				attrText += 'Ширина: <b>'+okruglenie($('input[name=shirina]', upr).val()+'.'+$('input[name=shirinaDec]', upr).val(), 10)+"</b><br>\n";
				attrText += 'Длина: <b>'+okruglenie($('input[name=dlina]', upr).val()+'.'+$('input[name=dlinaDec]', upr).val(), 10)+"</b><br>\n";
				$('input#OneClickqty').val($('span.ploshd').text());
			} else {
				$('input#OneClickqty').val($('input#quantity_wanted').val());
			}
			$("#OneClickcurrent-price-clone").html(attr);
			$("#OneClickproduct_variants_attributes").html(attrText);
			setTimeout(function(){
				try {
					$("#OneClickphone").inputmask("+7(999)999-99-99");
				} catch(ex) {
					console.log('bed mask');
				}

			}, 10);
//			$('.oneClickSendMessage#email').focus();
			$('div.modal-content').closest('div.modal').remove();
			$('div.modal-backdrop').remove();

		});
		return false;
	});
	$(document).on('submit', '.oneClickSendMessage', function(){
		if (!ValidPhone()) return false;
		var form = document.querySelector('form.oneClickSendMessage');
		var f = new FormData(form);
		f.append('attr', $("#OneClickcurrent-price-clone").text());
		f.append('attrText', $("#OneClickproduct_variants_attributes").text());
		$.ajax({
			type: 'POST',
			url : oneclickAjaxURL,
			headers: { "cache-control": "no-cache" },
			dataType: 'json',
			cache: false,
			contentType: false,
			processData: false,
			data: f,
			success: function(data) {
				$("#OneClickfancyBlock").html('<h6>'+data.message+'</h6>')
				setTimeout(function(){
					$.fancybox.close();
				}, 2000);
				return false;
			}
		}).fail(function(data) {
			console.log(data.responseText);
			return false;
		});
		return false;
	});
	$.fn.replaseCast = function(key){
		var str = $(this).val().toString();
		var newStr = ''; var div = true;
		for (n=0; n<str.length; n++) {
			switch (str[n]) {
				case '.': case ',':
					if (div) {
						newStr += '.';
					}
					div = false;
				break;
				default: newStr += str[n];
				break;
			}
		}
		if (div && (key === 188 || key === 190 || key === 191)) {
			newStr = newStr+'.';
		}
		console.log(str+' -> '+newStr+'; '+key);
		return str;
	}

	$(document).on('input', 'div.raschetPloshd input[type=number]', function(){
		var input = $(this);
		console.log(input.val());
		var upr = input.closest('div.raschetPloshd');
		var sh = okruglenie($('input[name=shirina]', upr).val()+'.'+$('input[name=shirinaDec]', upr).val(), 10);
		var dl = okruglenie($('input[name=dlina]', upr).val()+'.'+$('input[name=dlinaDec]', upr).val(), 10);
		var pl = okruglenie((sh*dl),100);
		var price = okruglenie($('div.unit_price', upr).text()*pl, 100);
		var id_product = $('div.unit_price', upr).data('id_product');
		var pi = upr.closest('div.product-information');
		var pr = $('div.current-price span', pi);
		$('input#quantity_wanted').val(Math.ceil(pl));
		pr.attr("content", price);
		pr.text(price);
//		$('input[name=shirina]', upr).val(sh);
//		$('input[name=dlina]', upr).val(dl);
		$('span.ploshd').text(pl);
		console.log(dl+'; '+sh);
		$.ajax({
			type: 'POST',
			url : oneclickAjaxURL,
			headers: { "cache-control": "no-cache" },
			dataType: 'json',
			cache: false,
			data: {action: 'Customfields',
				id_product: id_product,
				sh: sh, dl: dl, pl: pl, price: price
			},
			success: function(data) {
				console.log(data.respons);
				return false;
			}
		}).fail(function(data) {
			console.log(data.responseText);
			return false;
		});
		return false;
	});
	hideQTYProduct();
});
function okruglenie(n, k) {
	return Math.round(parseFloat(n) * k) / k;
}
function hideQTYProduct() {
	var AKOKUtype = $('button.oneClickButton').attr('data-AKOKUtype');
	if (parseInt(AKOKUtype) === 1) {
		$('div.qty, div.product-add-to-cart .control-label').hide();
	}
}

$(document).ready(() => {
  prestashop.on('updateProduct', (data) => {
    updateProductshirina(data);
  });
});
function updateProductshirina(data) {
	if (data.eventType === "updatedProductCombination") {
		var shFld = $('div.raschetPloshd input[name=shirina]');
		var grName = shFld.attr('data-ainfo');
		var shVal = $('select#group_'+grName+' option:selected').text();
		shFld.val(shVal);
		alert(shVal);
	}
}
