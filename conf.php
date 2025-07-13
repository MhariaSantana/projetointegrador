<?php  
if (isset($_POST["cadastrar"])) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];}

    
?>
<?php
include "includes/conexao.php";

$sql = "Insert into cadastro_promocao(nome, email) values('$nome' , '$email') ";

 $resultado = mysqli_query($conexao, $sql);


?>

