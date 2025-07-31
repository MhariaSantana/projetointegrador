<?php
include "includes/conexao.php";

// Verifica se os dados foram enviados
if (
    isset($_POST['data']) && 
    isset($_POST['hora']) && 
    isset($_POST['nome']) && 
    isset($_POST['email'])
) {
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // Verifica se o horário está disponível
    $verifica = $conexao->query("SELECT * FROM horarios_disponiveis WHERE data='$data' AND hora='$hora' AND disponivel=TRUE");

    if ($verifica && $verifica->num_rows > 0) {
        // Insere agendamento com nome e e-mail
        $conexao->query("INSERT INTO agendamentos (nome, email, data, hora) VALUES ('$nome', '$email', '$data', '$hora')");
        $conexao->query("UPDATE horarios_disponiveis SET disponivel=FALSE WHERE data='$data' AND hora='$hora'");

        echo "Agendamento feito com sucesso para";
    } else {
        echo "Horário já foi escolhido";
    }
} else {
    echo "Atenção ! Todos os campos do formulário devem ser preenchidos.";
}
?>

