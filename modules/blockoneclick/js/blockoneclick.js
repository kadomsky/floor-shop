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
			$("#OneClickcurrent-price-clone").html(attr);
			$("#OneClickproduct_variants_attributes").html(attrText);
			setTimeout(function(){
				try {
//					$("#OneClickphone").inputmask("+7(999)999-99-99");
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
});
