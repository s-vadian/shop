<?php
/* Smarty version 3.1.29, created on 2016-07-02 22:19:25
  from "C:\OpenServer\domains\myshop\views\normal\footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577813bdc3cdf8_00191645',
  'file_dependency' => 
  array (
    '090e8ace1f87133c6b0fefe8a548a6cfa22cae85' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myshop\\views\\normal\\footer.tpl',
      1 => 1467487163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577813bdc3cdf8_00191645 ($_smarty_tpl) {
?>
		<div style="clear: both;"></div>
		<nav></nav>
		<footer class="footer">			
			<p class="text">© 2016 Интернет магазин. Все права не защищены. </p>
		</footer>

		<div id="modal_form">
			<span id="modal_close" onclick="hideModalForm()">x</span>
			<div id="registerBox">
				<label for="email">E-mail</label><br>
				<input type="text" id="email" name="email"><br><br>
				<label for="password">Введите пароль</label><br>
				<input type="password" id="password" name="password"><br><br>
				<label for="r_password">Повторите пароль</label><br>
				<input type="r_password" id="r_password" name="r_password"><br><br>
				<input type="button" value="Регистрация">
			</div>
		</div>
		<div id="overlay" onclick="hideModalForm()"></div>

	</div>

</body>
</html><?php }
}
