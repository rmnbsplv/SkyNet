$(".tarif__options").click(function () {
	var $tarif_group = $(this).attr('tarif_group');

	$.ajax({ 
		url:"tarifs.php", 
		method: "POST",
		data: {tarifs_group: $tarif_group}, 
		success:function(data) {
			$('#result_container').fadeIn(0);
			$('#result_title').html('Тариф "'+$tarif_group+'"');
			$('#result').html(data);
		} 
	});
});


$("#back").click(function () {
	$('#result_container').fadeOut(0);
});

$("#back2").click(function () {
	$('#result_container2').fadeOut(0);
	$('#result_container').fadeIn(0);
});



function tarif_screen2($pay_period, $pay_period_month, $title, $price_per_month, $price, $new_payday)
{
	$.ajax({ 
		url:"tarif.php", 
		method: "POST",
		data: {pay_period: $pay_period, pay_period_month: $pay_period_month, title: $title, price_per_month: $price_per_month, price: $price, new_payday: $new_payday}, 
		success:function(data) {
			$('#result_container').fadeOut(0);
			$('#result_container2').fadeIn(0);
			$('#result_title2').html('Выбор тарифа');
			$('#result2').html(data);
		} 
	});
}


