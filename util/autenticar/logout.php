<?php

session_start();

if(!isset($_SESSION['username'])){

	session_destroy();
	echo"<script> alert('Para acessar essa página é necessário estar logado');window.location.href='../../index.php';</script>";

} else {

	session_destroy();
	echo"<script> alert('Voce foi deslogado com sucesso');window.location.href='../../index.php';</script>";
	
}

?>