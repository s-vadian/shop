<?php
/* Smarty version 3.1.29, created on 2016-06-14 17:09:16
  from "C:\OpenServer\domains\myshop\views\default\product.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5760100c733666_65637809',
  'file_dependency' => 
  array (
    'a532fef2d9992651a2745301dbc94695d02e2c5a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myshop\\views\\default\\product.tpl',
      1 => 1465913354,
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
function content_5760100c733666_65637809 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div class="container">
		<div class="row">

			<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


			<div class="col-lg-10" id="centerColumn">
				<h4><strong><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</strong></h4>
				<p><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
 руб.</p>
				<a id="addToCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" href="#" class="btn btn-primary <?php if ($_smarty_tpl->tpl_vars['itemCart']->value) {?>hidden<?php }?>" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Добавить в корзину">Добавить в корзину</a>
				<a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" href="#" class="btn btn-default <?php if (!$_smarty_tpl->tpl_vars['itemCart']->value) {?>hidden<?php }?>" onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" role="button" alt="Удалить из корзины">Удалить из корзины</a>
				<br><br>
				<img height="300" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
" alt="">				
				<div class="description">
					<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>

				</div>

				

							
			</div>
		</div> <!--//row -->
	</div> <!--//container -->
	
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
