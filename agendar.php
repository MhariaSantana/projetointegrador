


  



<?php include "includes\cab.php"; 

include "includes\conexao.php";

// Captura os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
list($data, $hora) = explode('|', $_POST['horario']);

// Verifica se o horário ainda está disponível
$sql = "SELECT * FROM horarios_disponiveis WHERE data='$data' AND hora='$hora' AND disponivel=TRUE";
$resultado = mysqli_query($conexao, $sql);

if ($resultado && mysqli_num_rows($resultado) > 0) {
  // Insere o agendamento
  $inserir = "INSERT INTO agendamentos (nome, email, data, hora) VALUES ('$nome', '$email', '$data', '$hora')";
  mysqli_query($conexao, $inserir);

  // Atualiza a disponibilidade
  $atualizar = "UPDATE horarios_disponiveis SET disponivel=FALSE WHERE data='$data' AND hora='$hora'";
  mysqli_query($conexao, $atualizar);

  echo " <h1 class='escolhido'>✅ Agendamento realizado com sucesso!  </h1>";
}
 else {

  echo "<h1 class='escolhido'> ❌ Horário já foi escolhido! </h1> " ;

}

?>
<?php include "includes/rodape.php";  ?>



