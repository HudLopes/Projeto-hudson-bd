<?php

include 'connection.php';
session_start();

if(!isset($_SESSION['username'])){
session_destroy();
echo"<script> alert('Para acessar essa página é necessário estar logado');window.location.href='index.php';</script>";
} else {
$user=$_SESSION['username'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar dados</title>
  <script src="util/script/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/editardados-style.css">
</head>
<body>

  <form method="POST" action="util/autenticar/editar-authentification.php" id="form_id">

    <div class="deslog">
      <a href="util/autenticar/logout.php"><img width="50px" height="50px" src="assets/logout.png"></a>
    </div>

    <div class="txt">
      Bem vindo a sua página de edição <b><?php echo $_SESSION['username']; ?></b>.<br> Preencha no formulário abaixo somente os campos que deseja editar.
    </div>
    
    <div class="container">

      <div class="doubleinputnome">     
       <input type="text" placeholder="Digite seu nome completo..." name="nomecompleto" id="nomecompleto" onkeypress="return lettersOnly(event);" >
     </div>

     <div class="inputdata">
       <input type="date" placeholder="Data de nascimento..." name="data" id="data" onkeypress="return SomenteNumero(event)" >
     </div>
     <input type="text" placeholder="Digite seu email..." name="email" onblur="return validaForm();" id="email" >

     <div class="doubleinput">
      <input type="text" placeholder="Digite seu RG (somente numeros)..." name="rg" id="rg" onkeypress="return SomenteNumero(event)" >

      <input type="text" placeholder="Digite seu CPF (somente numeros)..." name="cpf" id="cpf" onblur="return verificarCPF(this.value);" onkeypress="return SomenteNumero(event)" >
    </div> 

    <input type="text" placeholder="Nome do pai..." name="nomepai" id="nomepai" onkeypress="return lettersOnly(event);" >

    <input type="text" placeholder="Nome da mãe..." name="nomemae" id="nomemae" onkeypress="return lettersOnly(event);" >

    <div class="buttonalign">
      <br>
      <button class ="button2" onClick="confSubmit(this.form);" value="Submit Form">Editar</button> 
      <br>
      <h6><br>
       Voltar para página de dados.<a href="user.php"> Voltar.</a></h6>
     </div>
   </div>
 </form>
</body>
</html>
