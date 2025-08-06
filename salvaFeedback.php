<?php 
$nome = $_POST['nome'];
$retorno = $_POST['retorno'];
$tipo = $_POST['tipo'];

if($tipo=='cilios'){
    $sql = "insert into feedback (nome, retorno) values ('$nome', '$retorno')";
}else{
    $sql = "insert into feedback_sobrancelha(nome, retorno) values ('$nome', '$retorno')";
}

include 'includes/conexao.php';

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);




//direcionamento está direcinando para  uma página nova de listagem, tirei foto para criar o alert no java

?>
<script>
    alert("Muito obrigada por dedicar um tempo para compartilhar seu feedback conosco💖Sua opinião é extremamente valiosa e nos ajuda a melhorar.")
    window.location.href = "servicos.php"
</script>