<!DOCTYPE html>
<html>
	<head>
		<title>
			Cs' home
		</title>
	</head>
	<body>
	
<!--	SIDE PANEL  -->
	
		<div class="side">
	<!-- LOGO  -->
		<a href="index.php"><div class="logo">
			C's Home
		</div></a>
	<!-- MENU -->	
		<div class="menu">
			<a class="amenu" href=""><div class="href">Произведения</div></a>
			<a class="amenu" href=""><div class="href">Посты</div></a>
			<a class="amenu" href=""><div class="href">Сообщения</div></a>
			<a class="amenu" href=""><div class="href">Фото</div></a>
			<a class="amenu" href=""><div class="href">Контакты</div></a>
			<a class="amenu" href="login.php"><div class="href">Вход</div></a>
			<a class="amenu" href="register.php"><div class="href">Регистрация</div></a>
		</div>
	<!-- FOOTER -->	
		<footer class="footer">
			<p>
				(C)Cs 2016
			</p>
		</footer>
		</div>
	<!-- CONTENT -->	
		<div class="content">
			<?php
				require('main.php')
			?>				
		</div>
		
<!--  SIDE PANEL END  -->		
		
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/design.css">
	</body>
</html>