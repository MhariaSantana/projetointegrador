<?php 
$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "Insert into teste(nome, email) values('$nome' , '$email') ";

include 'includes/conexao.php';

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);



header('Location:ClienteListar.php')
//direcionamento está direcinando para  uma página nova de listagem, tirei foto para criar o alert no java

?>