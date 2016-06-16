/**
*
* Добавление продукта в корзину
*
* @param integer itemId id добавяемого продукта
* @return вслучае успеха обновятся данные корзины на странице
* 
*/
function addToCart(id) {
	$.ajax({
		type: 'POST',
		async: true,
		url: '/cart/addtocart/'+ id +'/',
		dataType: 'json',
		success: function(data){
			if (data.success) {
				$('#cartCntItems').html(data.cntItems + ' товар(а/ов)');				
			}
			$('#addToCart_'+id).hide();
			$('#removeCart_'+id).show();
		}
	});
}

function removeFromCart(id){
	$.ajax({
		type: 'POST',
		async: true,
		url: '/cart/removefromcart/'+ id +'/',
		dataType: 'json',
		success: function(data){
			if (data.success) {
				$('#cartCntItems').html(data.cntItems + ' товар(а/ов)');
			}
			$('#removeCart_'+id).hide();
			$('#addToCart_'+id).show();
		}
	});
}

function removeFromCart(id, newList = null){
	$.ajax({
		type: 'POST',
		async: true,
		url: '/cart/removefromcart/'+ id +'/',
		dataType: 'json',
		success: function(data){
			if (data.success) {
				$('#cartCntItems').html(data.cntItems + ' товар(а/ов)');
			}			
			if (newList !== null) {
				
				if (data.cntItems == 0) {
					$('.table').remove();
					$('#placeForCart').html('<p>Товара в корзине больше нет :(</p>');
				} else {
					newList = newList + "";
					newId = "#" + newList + id;
					$(newId).remove();
				}
			} else {
				$('#removeCart_'+id).hide();
				$('#addToCart_'+id).show();
			}
		}
	});

}