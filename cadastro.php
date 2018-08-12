<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/cadastro-style.css">
  <script src="util/script/script.js"></script>
</head>
<body>

  <form method="POST" action="util/autenticar/cadastro-authentification.php" name="cadastro">
    <div class="imgcontainer">
      <img src="assets/logo.png" alt="Avatar" class="avatar">
      <div class="txt">
        Bem vindo a tela de cadastro. Preencha o formulário abaixo.
      </div>
    </div>

    <div class="container">

      <div class="doubleinputnome">     
       <input type="text" placeholder="Digite seu nome completo..." name="nomecompleto" id="nomecompleto" onkeypress="return lettersOnly(event);" required>
     </div>

     <div class="inputdata">
       <input type="date" placeholder="Data de nascimento..." name="date" id="date" onkeypress="return SomenteNumero(event)" required>
     </div>
     <input type="text" placeholder="Digite seu email..." name="email" id="email" onblur="return validaForm();" required>

     <div class="doubleinput">
      <input type="text" placeholder="Digite seu RG (somente numeros)..." name="rg" id="rg" onkeypress="return SomenteNumero(event)" required>

      <input type="text" placeholder="Digite seu CPF (somente numeros)..." onblur="return verificarCPF(this.value);" name="cpf" id="cpf" maxlength="11" onkeypress="return SomenteNumero(event)" required>
    </div> 

    <input type="text" placeholder="Nome do pai..." name="nomepai" onkeypress="return lettersOnly(event);"  id="nomepai"  required>

    <input type="text" placeholder="Nome da mãe..." name="nomemae" onkeypress="return lettersOnly(event);" id="nomemae"  required>

    <input type="text" placeholder="Digite seu usuario..." name="user" id="user" required>

    <input type="password" placeholder="Digite sua senha..." name="senha" id="senha"  required>

    <div class="buttonalign">
      <br>
      <button class ="button2" type="submit" id="btn-cadastro">Cadastre-se</button> 
      <br>
      <h6>Fique tranquilo, nosso site é seguro. <br>
        Já tem um cadastro? <a href="index.php">Entrar</a></h6>
      </div>

      <input type="hidden" name="modo" id="modo" value="inserir">
    </div>

    <div class="container2" style="background-color:#f1f1f1">

    </div>
  </form>
</body>
</html>

