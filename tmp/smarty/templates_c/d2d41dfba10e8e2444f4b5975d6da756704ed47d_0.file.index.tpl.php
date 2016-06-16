<?php
/* Smarty version 3.1.29, created on 2016-06-14 16:41:43
  from "C:\OpenServer\domains\myshop\views\default\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576009974b4825_10136008',
  'file_dependency' => 
  array (
    'd2d41dfba10e8e2444f4b5975d6da756704ed47d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myshop\\views\\default\\index.tpl',
      1 => 1465911676,
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
function content_576009974b4825_10136008 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<div class="container">
		<div class="row">
			<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<div class="col-lg-10" id="centerColumn">
				<h4><strong><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</strong></h4>
				<div class="row">
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
						<div class="col-sm-4 col-mb-4 col-lg-4">
    						<div class="thumbnail">
	    						<img class="productImages" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="">
	    						<div class="caption">
									<h3><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h3>
									<p><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 руб.</p>
		        					<p>
			        					<a id="addToCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" href="#" class="btn btn-primary" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" role="button" alt="Добавить в корзину">В корзину</a>
			        					<a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" href="#" class="btn btn-default hdnlink" onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" role="button" alt="Удалить из корзины">Удалить из корзины</a>
			        					<a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/" class="btn btn-default" role="button">Подробнее</a>
		        					</p>
	     						</div>
							</div>
						</div>
					<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
				</div>
			</div>
		</div> <!--//row -->
	</div> <!--//container -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
