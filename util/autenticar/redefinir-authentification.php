
<?php

include '../../connection.php';


	$cpf = $_POST['cpf'];

	$nomecompleto = $_POST['nomecompleto'];

	$newpass = $_POST['newpass'];


	$showsql = "SELECT * FROM usuario WHERE nomecompleto = '$nomecompleto' AND cpf = '$cpf'";
	$row2 = $conn->query($showsql);
	$row2 -> fetch_assoc();
	
	if ($row2->num_rows>0){

		$sql = "UPDATE usuario SET senha = '$newpass' WHERE nomecompleto = '$nomecompleto' AND cpf = '$cpf'";
		$row= $conn->query($sql);

		echo"<script> alert('Senha alterada com sucesso');window.location.href='../../index.php';</script>";
	}else{
		echo "<script> alert('Este usuario não existe, tente novamente'); 
		window.location = '../../redefinir.php';  </script>";
	}


?>