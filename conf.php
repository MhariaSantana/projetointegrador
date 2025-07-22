<?php include "includes/cab.php"?>
<link rel="stylesheet" href="promocao.css">

<?php  
if (isset($_POST["cadastrar"])) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];}

    
?>


<div class="container aviso ">
  <h1 class="titulo-geral">PARABÉNS</h1>


<?php
include "includes/conexao.php";

$sql = "Insert into cadastro_promocao(nome, email) values('$nome' , '$email') ";

 $resultado = mysqli_query($conexao, $sql);

 echo "Seu cadastro foi realizado com sucesso! 💖Assim que novas promoções e descontos forem liberados,
  você será avisada em primeira mão. Fique de olho e aproveite as novidades exclusivas!";
?>
</div>
