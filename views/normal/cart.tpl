{include file='header.tpl'}
		<div class="mainContentFull">
			<h4><strong>{$pageTitle}</strong></h4>
			<br>
			<span id="placeForCart">		
			{if ! $rsProducts}
			<p>В корзине пусто</p>
			{else}
			<table class="table table-bordered table-hover">
			<thead>
			<tr>
				<th></th>
				<th>Товар</th>
				<th>Количество</th>
				<th>Цена за шт.</th>
				<th>Общая цена</th>
				<th></th>
			</tr>
			</thead>
			<tbody>
			{foreach $rsProducts as $item}
			<tr id="tr_item_{$item['id']}">
				<td><img class="activator imgProdInCart" src="/images/products/{$item['image']}"></td>
				<td class="td_left"><a href="/product/{$item['id']}/"><strong>{$item['name']}</strong></a></td>
				<td><input id="itemCount_{$item['id']}" class="countEdits" type="text" value="1" onchange="updatePrice({$item['id']})" oninput="checkFormat(this.value, this.id, 1)"></td>		
				<td><p>{$item['price']} руб.</p></td>
				<td><span id="price_{$item['id']}" value="{$item['price']}">{$item['price']} руб.</span></td>
				<td><a onclick="removeFromCart({$item['id']}, 'tr_item_'); return false;" href="#">Удалить из корзины</td>
			</tr>
			{/foreach}
			<tr>
				<td class="text-right" colspan="4"><span>Итоговая цена:</span></td>
				<td colspan="1"><span id="tatalPrice">999 руб.</span></td>
				<td colspan="1"><a href="#" class=".btn">Оформить заказ</a></td>
			</tr>
			</tbody>
			</table>
			{/if}
			</span>
			
		</div>
{include file='footer.tpl'}