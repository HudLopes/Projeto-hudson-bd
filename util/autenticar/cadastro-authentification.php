
<?php
 
 include '../../connection.php';

  $nomecompleto = $_POST['nomecompleto'];

  $data = $_POST['date'];

  $email = $_POST['email'];

  $rg = $_POST['rg'];

  $cpf = $_POST['cpf'];

  $nomepai = $_POST['nomepai'];

  $nomemae = $_POST['nomemae'];

  $user = $_POST['user'];

  $senha = $_POST['senha'];

  $verifica = "SELECT * FROM usuario where cpf = '$cpf' or rg = '$rg' or user = '$user' or email = '$email' LIMIT 1";
  $verificarow = $conn->query($verifica);
  $verificarow->fetch_assoc();

  if($verificarow->num_rows>0){
    echo "<script> alert('Este usuario ja existe'); 
    window.location = '../../cadastro.php';  </script>";
  } else {
  $sql = "INSERT INTO usuario (nomecompleto, data, email, rg, cpf, nomepai, nomemae, user, senha) VALUES ('".$nomecompleto."','".$data."','".$email."','".$rg."','".$cpf."','".$nomepai."','".$nomemae."','".$user."','".$senha."')";
  $conn->query($sql);
    echo "<script> alert('cadastro realizado com sucesso'); 
    window.location = '../../index.php';  </script>";
  }
?>