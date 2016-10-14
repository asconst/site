<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<div class="div_login">
			<form class="form_login" method="get" action="signin.php">
						<p>E-mail:</p>
						<input name="email" type="email">
						<p>Password:</p>
						<input name="password" type="password"><br><br>
						<input type="submit" name="login">
						<input type="reset" name="clear">
						<button name="Regiter" title="Зарегистрироваться">
							<a href="register.php">Регистрация</a>
						</button>							
						<br><br>
						
			</form>
			<a href="index.php">
			<button name="Home" title="Домой" class="home">
				Домой						
			</button>
			</a>		
		</div>
		<link rel="stylesheet" type="text/css" href="../css/login.css">
	</body>
</html>
