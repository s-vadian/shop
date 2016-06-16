<?php
/* Smarty version 3.1.29, created on 2016-06-13 18:02:07
  from "C:\OpenServer\domains\myshop\views\default\category.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575ecaef0d8a34_59761755',
  'file_dependency' => 
  array (
    '73d08ebfabd1c8e462500882ff32875836b417e9' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myshop\\views\\default\\category.tpl',
      1 => 1465830123,
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
function content_575ecaef0d8a34_59761755 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div class="container">
		<div class="row">

			<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


			<div class="col-lg-10" id="centerColumn">
				<h4><strong><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</strong></h4>
				<!-- <?php
$_from = $_smarty_tpl->tpl_vars['rsChildCats']->value;
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
					<a href="?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">		
						<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

					</a>
				<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?> -->
				<div class="row">
					<?php
$_from = $_smarty_tpl->tpl_vars['rsProducts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_1_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_1_saved_local_item = $_smarty_tpl->tpl_vars['item'];
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
		        					<p><a href="#" class="btn btn-primary" role="button">В корзину</a> <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/" class="btn btn-default" role="button">Подробнее</a></p>
	     						</div>
							</div>
						</div>
					<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_local_item;
}
if ($__foreach_item_1_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_item;
}
?>					
				</div>				
			</div>
		</div> <!--//row -->
	</div> <!--//container -->
	
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
