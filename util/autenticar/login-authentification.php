
<?php

include '../../connection.php';

	$login = $_POST['login'];
	$password = $_POST['pass'];

	$sql = "SELECT * FROM usuario WHERE user = '$login' AND senha = '$password'";
	$row= $conn->query($sql);
	$row->fetch_assoc();
	
	if ($row->num_rows>0){
		
		session_start();
		$_SESSION['username']="$login";
		echo"<script> alert('Login realizado com sucesso');window.location.href='../../user.php';</script>";

	}else{

		echo "<script> alert('Este usuario não existe, tente novamente'); 
		window.location = '../../index.php';  </script>";
		
	}

?>