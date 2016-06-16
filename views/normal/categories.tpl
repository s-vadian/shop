		<div class="categories">
			<h4><strong>Категории</strong></h4>
			<br>			
			<a href="/">Все товары</a><br>
			{foreach $rsCaregories as $item}
			<a href="/category/{$item['id']}/">{$item['name']}</a><br>
				{if isset($item['children'])}
					{foreach $item['children'] as $itemChild}
						* <a class="a_children" href="/category/{$itemChild['id']}/">{$itemChild['name']}</a><br>
					{/foreach}
				{/if}
			{/foreach}
		</div>
