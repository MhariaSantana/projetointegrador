<?php
include "includes/conexao.php";

// Verifica se os dados foram recebidos
if (
    isset($_POST['data']) && 
    isset($_POST['hora']) && 
    isset($_POST['nome']) && 
    isset($_POST['email'])
) {
    $data = $_POST['data']; // armazena as variaveis
    $hora = $_POST['hora'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // Verifica se o horário está disponível no banco 
    $verifica = $conexao->query("SELECT * FROM horarios_disponiveis WHERE data='$data' AND hora='$hora' AND disponivel=TRUE");

    if ($verifica && $verifica->num_rows > 0) { //verifica os horarios livres 
        // Insere agendamento com nome e e-mail
        $conexao->query("INSERT INTO agendamentos (nome, email, data, hora) VALUES ('$nome', '$email', '$data', '$hora')");// para atualizar as tabelas do banco com o insert em agendamentos
        //  atualização na tabela de horarios disponiveis, o set altera só o valor da coluna para que esse horario não apareça mais no site após ser escolhido,
        $conexao->query("UPDATE horarios_disponiveis SET disponivel=FALSE WHERE data='$data' AND hora='$hora'");

        echo "Agendamento feito com sucesso ";

        
    } else {
        echo "Horário já foi escolhido";
    }
} else {
    echo "Atenção ! Todos os campos do formulário devem ser preenchidos.";
}
?>

