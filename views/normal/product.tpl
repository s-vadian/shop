{include file='header.tpl'}

{include file='categories.tpl'}

<h4><strong>{$pageTitle}</strong></h4>
<p>{$rsProduct['price']} руб.</p>
<br>
<a id="addToCart_{$rsProduct['id']}" href="#" class="btn btn-primary {if $itemCart}hidden{/if}" onclick="addToCart({$rsProduct['id']}); return false;" alt="Добавить в корзину">Добавить в корзину</a>
<a id="removeCart_{$rsProduct['id']}" href="#" class="btn btn-default {if !$itemCart}hidden{/if}" onclick="removeFromCart({$rsProduct['id']}); return false;" role="button" alt="Удалить из корзины">Удалить из корзины</a>
<br><br>
<img height="300" src="/images/products/{$rsProduct['image']}" alt="">
<div class="description">
	{$rsProduct['description']}
</div>

{include file='footer.tpl'}