<?php
/* Smarty version 3.1.29, created on 2016-06-16 00:13:23
  from "C:\OpenServer\domains\myshop\views\normal\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5761c4f31539f0_75495555',
  'file_dependency' => 
  array (
    '20fb57d4480f8cb87f60959b9e8976a8dfae767f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myshop\\views\\normal\\index.tpl',
      1 => 1466025140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:categories.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5761c4f31539f0_75495555 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="mainContent">
			<h4><strong><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</strong></h4>
			<br>
			<?php
$_from = $_smarty_tpl->tpl_vars['rsProducts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_products_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products'] : false;
$__foreach_products_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_products'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
$__foreach_products_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
			<div class="card" style="overflow: hidden;">
					<div class="card-image">
						<img class="activator imgProd" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
">
					</div>

					<br>

					<div class="card-content">
						<h4><strong><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</strong></h4>
						<p><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 руб.</p>
						<br>
						<p><a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">Подробнее</a></p>
					</div>

					<br>

					<div class="card-action">
						<a id="addToCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" href="#" class="btn <?php if ($_smarty_tpl->tpl_vars['item']->value['productInCart'] == 1) {?>hidden<?php }?>" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;"  alt="Добавить в корзину">В корзину</a>
						
						<a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" href="#" class="btn <?php if (!$_smarty_tpl->tpl_vars['item']->value['productInCart'] == 1) {?>hidden<?php }?>" onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" alt="Удалить из корзины">Убрать из корзины</a>							
					</div>
			</div>
			<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null) % 3 == 0) {?>
				<div style="clear: both;"></div>
			<?php }?>
			<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_products_0_saved_local_item;
}
if ($__foreach_products_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_products'] = $__foreach_products_0_saved;
}
if ($__foreach_products_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_products_0_saved_item;
}
?>
		</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
