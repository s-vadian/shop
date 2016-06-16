{include file='header.tpl'}

	<div class="container">
		<div class="row">

			{include file='categories.tpl'}

			<div class="col-lg-10" id="centerColumn">
				<h4><strong>{$pageTitle}</strong></h4>
				<!-- {foreach $rsChildCats as $item}
					<a href="?controller=category&id={$item['id']}">		
						{$item['name']}
					</a>
				{/foreach} -->
				<div class="row">
					{foreach $rsProducts as $item}
						<div class="col-sm-4 col-mb-4 col-lg-4">
    						<div class="thumbnail">
	    						<img class="productImages" src="/images/products/{$item['image']}" alt="">
	    						<div class="caption">
									<h3>{$item['name']}</h3>
									<p>{$item['price']} руб.</p>
		        					<p><a href="#" class="btn btn-primary" role="button">В корзину</a> <a href="/product/{$item['id']}/" class="btn btn-default" role="button">Подробнее</a></p>
	     						</div>
							</div>
						</div>
					{/foreach}					
				</div>				
			</div>
		</div> <!--//row -->
	</div> <!--//container -->
	
{include file='footer.tpl'}