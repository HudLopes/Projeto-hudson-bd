
<!DOCTYPE html>
<html>
<head>
	<title>Redefinir senha</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/index-style.css">
	<script src="util/script/script.js"></script>
</head>
<body>

	<form method="POST" action="util/autenticar/redefinir-authentification.php">
		<div class="imgcontainer">
			<img src="assets/logo.png" salt="Avatar" class="avatar">
		</div>

		<div class="container">
			<input type="text" placeholder="Digite seu CPF" name="cpf" id="cpf" onblur="return verificarCPF(this.value);" onkeypress="return SomenteNumero(event)" required>
			<input type="text" placeholder="Digite sua nome completo" name="nomecompleto" id="nomecompleto" onkeypress="return lettersOnly(event);" required>
			<input type="password" placeholder="Digite sua nova senha" name="newpass" id="newpass" required>

			<div class="buttoncenter">
				<button type="submit">Redefinir</button>
			</div>
			<br><br>
			<h6 align="right">Volte para pagina de login: <a href="index.php">Voltar</a></h6>
		</div>
	</form>
</body>
</html>
