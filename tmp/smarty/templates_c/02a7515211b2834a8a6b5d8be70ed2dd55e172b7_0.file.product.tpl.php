<?php
/* Smarty version 3.1.29, created on 2016-06-15 11:08:46
  from "C:\OpenServer\domains\myshop\views\normal\product.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57610d0e4786b4_70619671',
  'file_dependency' => 
  array (
    '02a7515211b2834a8a6b5d8be70ed2dd55e172b7' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myshop\\views\\normal\\product.tpl',
      1 => 1465978125,
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
function content_57610d0e4786b4_70619671 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h4><strong><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</strong></h4>
<p><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
 руб.</p>
<br>
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

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
