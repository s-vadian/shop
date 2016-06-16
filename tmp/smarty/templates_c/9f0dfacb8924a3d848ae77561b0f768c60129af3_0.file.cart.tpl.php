<?php
/* Smarty version 3.1.29, created on 2016-06-16 16:49:06
  from "C:\OpenServer\domains\myshop\views\normal\cart.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5762ae52828da4_52300571',
  'file_dependency' => 
  array (
    '9f0dfacb8924a3d848ae77561b0f768c60129af3' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myshop\\views\\normal\\cart.tpl',
      1 => 1466084937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5762ae52828da4_52300571 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="mainContentFull">
			<h4><strong><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</strong></h4>
			<br>
			<span id="placeForCart">		
			<?php if (!$_smarty_tpl->tpl_vars['rsProducts']->value) {?>
			<p>В корзине пусто</p>
			<?php } else { ?>
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
			<?php
$_from = $_smarty_tpl->tpl_vars['rsProducts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
			<tr id="tr_item_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
				<td><img class="activator imgProdInCart" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
"></td>
				<td class="td_left"><a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><strong><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</strong></a></td>
				<td><input id="itemCount_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="countEdits" type="text" value="1" onchange="updatePrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
)" oninput="checkFormat(this.value, this.id, 1)"></td>		
				<td><p><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 руб.</p></td>
				<td><span id="price_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 руб.</span></td>
				<td><a onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
, 'tr_item_'); return false;" href="#">Удалить из корзины</td>
			</tr>
			<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
			<tr>
				<td class="text-right" colspan="4"><span>Итоговая цена:</span></td>
				<td colspan="1"><span id="tatalPrice">999 руб.</span></td>
				<td colspan="1"><a href="#" class=".btn">Оформить заказ</a></td>
			</tr>
			</tbody>
			</table>
			<?php }?>
			</span>
			
		</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
