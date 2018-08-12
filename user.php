<?php

require_once 'connection.php';
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
	<title>Usuario</title>
	<link rel="stylesheet" type="text/css" href="css/user-style.css">
</head>
<body>

  <?php

  $sql = "SELECT * FROM usuario WHERE user='$user';";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

  while($row){

    ?>

    <div class="usercontainer">
      <div class="headusertxt">
        <div class="deslog">
          <a href="util/autenticar/logout.php"><img width="50px" height="50px" src="assets/logout.png"></a>
        </div>
        <div class="txt">
          Bem vindo <b><?php echo $_SESSION['username']; ?></b>.
        </div>

      </div>

      <div id=tabela3> 
       <div id=cabtab3> 
         Nome completo
       </div> 
       <div id=corpotab3> 
        <?php  echo $row['nomecompleto']; ?>
      </div> 
    </div> 

    <div id=tabela3> 
     <div id=cabtab3> 
       Email
     </div> 
     <div id=corpotab3> 
      <?php  echo $row['email']; ?> 
    </div> 
  </div> 


  <div class="doubletable">
   <div id=tabeladoubleleft> 
     <div id=cabtab3> 
       CPF
     </div> 
     <div id=corpotab3> 
       <?php  echo $row['cpf']; ?> 
     </div> 
   </div>


   <div id=tabeladoubleright> 
     <div id=cabtab3> 
       RG
     </div> 
     <div id=corpotab3> 
       <?php  echo $row['rg']; ?> 
     </div> 
   </div>
 </div>

 <div class="doubletable">
   <div id=tabeladoubleleft> 
     <div id=cabtab3> 
       Usuario de login
     </div> 
     <div id=corpotab3> 
      <?php  echo $row['user']; ?> 
    </div> 
  </div>


  <div id=tabeladoubleright> 
   <div id=cabtab3> 
     Data de nascimento
   </div> 
   <div id=corpotab3> 
    <?php $data = $row['data'];
     $dataP = explode('-', $data);
     $dataParaExibir = $dataP[2].'-'.$dataP[1].'-'.$dataP[0];
     echo $dataParaExibir;
     ?> 
   </div> 
 </div>
</div>


<div id=tabela3> 
 <div id=cabtab3> 
   Nome do pai
 </div> 
 <div id=corpotab3> 
   <?php  echo $row['nomepai']; ?> 
 </div> 
</div> 

<div id=tabela3> 
 <div id=cabtab3> 
   Nome da mãe
 </div> 
 <div id=corpotab3> 
   <?php  echo $row['nomemae']; ?> 
 </div> 
</div> 
<div class="btn">
  <a href="editardados.php"><button> Editar dados</button></a>
</div>
</div>

<?php   $row = $result->fetch_assoc();
} ?>


</body>
</html>