<?php
/* Smarty version 3.1.29, created on 2016-06-16 14:56:30
  from "C:\OpenServer\domains\myshop\views\normal\cart.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576293ee1aaf55_72179978',
  'file_dependency' => 
  array (
    '9f0dfacb8924a3d848ae77561b0f768c60129af3' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myshop\\views\\normal\\cart.tpl',
      1 => 1466077252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_576293ee1aaf55_72179978 ($_smarty_tpl) {
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
				<th>Цена</th>
				<th>Количество</th>
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
				<td><input type="text" value="1" onchange=""></td>
				<td><p><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 руб.</p></td>				
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
			</tbody>
			</table>
			<?php }?>
			</span>
			
		</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
