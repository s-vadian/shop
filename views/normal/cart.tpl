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
				<th>Цена</th>
				<th>Количество</th>
				<th></th>
			</tr>
			</thead>
			<tbody>
			{foreach $rsProducts as $item}
			<tr id="tr_item_{$item['id']}">
				<td><img class="activator imgProdInCart" src="/images/products/{$item['image']}"></td>
				<td class="td_left"><a href="/product/{$item['id']}/"><strong>{$item['name']}</strong></a></td>
				<td><input type="text" value="1" onchange=""></td>
				<td><p>{$item['price']} руб.</p></td>				
				<td><a onclick="removeFromCart({$item['id']}, 'tr_item_'); return false;" href="#">Удалить из корзины</td>
			</tr>
			{/foreach}
			</tbody>
			</table>
			{/if}
			</span>
			
		</div>
{include file='footer.tpl'}