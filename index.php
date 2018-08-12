<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/index-style.css">
	<script src="util/script/script.js"></script>
	<title>Login</title>
</head>
<body>

	<form name="loginform" method="POST" action="util/autenticar/login-authentification.php">
		<div class="imgcontainer">
			<img src="assets/logo.png" salt="Avatar" class="avatar">
		</div>

		<div class="container">
			<input type="text" placeholder="Digite seu usuario" name="login" required>
			<input type="password" placeholder="Digite sua senha" name="pass" required>
			<button type="submit">Login</button>
			<button onclick="redireciona();">Cadastre-se</button>

			<br><br>
			<h6 align="right">Esqueceu sua senha? <a href="redefinir.php">Redefinir</a></h6>

			<input type="hidden" name="modo" id="modo" value="inserir">
		</div>
	</form>
</body>
</html>

