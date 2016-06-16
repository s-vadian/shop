{include file='header.tpl'}
{include file='categories.tpl'}
		<div class="mainContent">
			<h4><strong>{$pageTitle}</strong></h4>
			<br>
				{foreach $rsProducts as $item name=products}
				<div class="card" style="overflow: hidden;">
						<div class="card-image">
							<img class="activator imgProd" src="/images/products/{$item['image']}">
						</div>

						<br>

						<div class="card-content">
							<h4><strong>{$item['name']}</strong></h4>
							<p>{$item['price']} руб.</p>
							<br>
							<p><a href="/product/{$item['id']}/">Подробнее</a></p>
						</div>

						<br>

						<div class="card-action">
							<a id="addToCart_{$item['id']}" href="#" class="btn {if $item['productInCart'] == 1}hidden{/if}" onclick="addToCart({$item['id']}); return false;"  alt="Добавить в корзину">В корзину</a>
							
							<a id="removeCart_{$item['id']}" href="#" class="btn {if !$item['productInCart'] == 1}hidden{/if}" onclick="removeFromCart({$item['id']}); return false;" alt="Удалить из корзины">Убрать из корзины</a>							
						</div>
				</div>
				{if $smarty.foreach.products.iteration mod 3 == 0}
					<div style="clear: both;"></div>
				{/if}
				{/foreach}
		</div>
{include file='footer.tpl'}