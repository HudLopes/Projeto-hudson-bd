
<?php

include '../../connection.php';

session_start();

if(!isset($_SESSION['username'])){
	session_destroy();
	echo"<script> alert('Para acessar essa página é necessário estar logado');window.location.href='../../index.php';</script>";
} else {
	$user=$_SESSION['username'];
}

if($_POST['nomecompleto'] != null){
	$nomecompleto = $_POST['nomecompleto'];
    $sql = "UPDATE usuario SET nomecompleto = '$nomecompleto' WHERE user='$user' ";
    $row= $conn->query($sql);
}

if($_POST['data'] != null){
	$data = $_POST['data'];
    $sql = "UPDATE usuario SET data = '$data' WHERE user='$user' ";
    $row= $conn->query($sql);
}

if($_POST['email'] != null){
	$email = $_POST['email'];
    $sql = "UPDATE usuario SET email = '$email' WHERE user='$user' ";
    $row= $conn->query($sql);
}

if($_POST['rg'] != null){
	$rg = $_POST['rg'];
    $sql = "UPDATE usuario SET rg = '$rg' WHERE user='$user' ";
    $row= $conn->query($sql);
}

if($_POST['cpf'] != null){
	$cpf = $_POST['cpf'];
    $sql = "UPDATE usuario SET cpf = '$cpf' WHERE user='$user' ";
    $row= $conn->query($sql);
}

if($_POST['nomepai'] != null){
	$nomepai = $_POST['nomepai'];
    $sql = "UPDATE usuario SET nomepai = '$nomepai' WHERE user='$user' ";
    $row= $conn->query($sql);
}

if($_POST['nomemae'] != null){
	$nomemae = $_POST['nomemae'];
    $sql = "UPDATE usuario SET nomemae = '$nomemae' WHERE user='$user' ";
    $row= $conn->query($sql);
}

echo"<script> alert('Dados alterados com sucesso');window.location.href='../../user.php';</script>";

?>