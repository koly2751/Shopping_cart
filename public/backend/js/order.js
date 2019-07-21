var count = 0;
$("#selected_product").change(function(){
	var stock_id = $("#selected_product :selected").val();
	count++;
	$.ajax({
			url: 'http://localhost/laravel_projects/cart/resources/views/admin/sale/process.php',
			type: 'POST',
			data: {stock_id:stock_id,count:count},
			success: function(data) {
				$('#invoice_item').append(data);
				$('#count').val(count);
			}
		});
});



$(document).on('click', '.btn_remove', function() {
		var id = $(this).attr('id');
		$('#tr-'+id+'').remove();
		total_price_calculate();

		
	});

$(document).on('keyup','.sale_price',function(){

	var sale_price=$(this).val();
	var tr=$(this).closest('tr');
	var sale_quantity=tr.find('.sale_quantity').val();
	var sale_amount= sale_price*sale_quantity;
	tr.find('.sale_amount').val(sale_amount);

	total_price_calculate();
});


$(document).on('keyup','.sale_quantity',function(){

	var sale_quantity=$(this).val();
	var tr=$(this).closest('tr');
	var sale_price=tr.find('.sale_price').val();
	var sale_amount= sale_price*sale_quantity;
	tr.find('.sale_amount').val(sale_amount);
	total_price_calculate();

});

function total_price_calculate(){
	var total_price = 0;

	$('.sale_amount').each(function(){

		total_price +=parseFloat(this.value);

	});

	$('#total_price').val(total_price);
	$('#total_amount').val(total_price);

	discount_calculate();
	vat_calculate();
}


function discount_calculate(){

	var total_price = $('#total_price').val();

	var discount= $('#discount').val();

	var total_discount = total_price-discount;

	$('#total_amount').val(total_discount);
}

function due_calculate(){
	var total_amount =$('#total_amount').val();
	var paid_amount=$('#paid_amount').val();
	var total_due= total_amount-paid_amount;
	$('#due').val(total_due);

}

$(document).on('keyup','#discount',function(){

	total_price_calculate();
});

$(document).on('keyup','#paid_amount',function(){

	due_calculate();
});


function vat_calculate(){
	var total_amount =$('#total_amount').val();
	var vat=$('#vat').val();
	var total_vat= (vat/100)*total_amount;
	$('#vat_amount').val(total_vat);
	var vat_amount = parseFloat(total_amount)+parseFloat(total_vat);
	$('#total_amount').val(vat_amount);

}

$(document).on('keyup','#vat',function(){

	total_price_calculate();
});