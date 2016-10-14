<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<div class="div_login" style="position: absolute;top: 20%;left: 30%;height: 60%;width: 40%;">
			<form class="form_login" method="get" action="reg.php">
						<p>Name:</p>
						<input type="text" title="name">
						<p>E-mail:</p>
						<input title="E-mail" type="email">
						<p>Password:</p>
						<input title="password" type="password">
						<p>Retype Password:</p>
						<input title="password" type="password">
						<br><br>
						<input type="submit" title="Зарегистрироваться">
						<input type="reset" title="Очистить">
						<button name="Regiter" title="Вход">
							<a href="login.php">Войти</a>
						</button>							
						<br><br>
						<button name="Home" title="Домой">
							<a href="index.php">Домой</a>						
						</button>
			</form>		
		</div>
		<link rel="stylesheet" type="text/css" href="../css/login.css">
	</body>
</html>
