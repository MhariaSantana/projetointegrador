<?php include "includes/cab.php"; ?>
<link rel="stylesheet" href="servicos.css">


<div class="banner ">
  <video class="video-banner camada2" autoplay muted loop>
    <source src="videos/banner.mp4" type="video/mp4">
  </video>
  <div class="camada2"></div>
  <div class="titulo-servicos">
    <h1>SEU OLHAR FALA POR VOCÊ <br></h1>
    <p class="sub-serviços">
      que ele conte a historia de quem acredita em si mesma
    </p>

  </div>
</div>

<h1 class="titulo-geral">SOBRANCELHAS</h1>
<div class="container">
  <div class="row ">


    <?php include "includes/conexao.php"; ?>

    <?php

    $sql = "select * from sobrancelha";
    $resultado = mysqli_query($conexao, $sql);
    $avaliacao = mysqli_query($conexao, $sql);

    while ($linha = mysqli_fetch_assoc($resultado)) {
      ?>


      <div class="card formato-card " style="width: 11rem;">
        <img src="<?= $linha['foto'] ?>" class="card-img-top foto-card" alt="...">
        <div class="card-body ">
          <h5 class="modelo-al"><?= $linha['modelo']; ?></h5>
          <p> R$ <?= $linha['valor']; ?></p>
        </div>
      </div>
      <?php
    }

    mysqli_close($conexao);
    ?>
  </div>

</div>

<!---Formulario que só armazena dados para captação de clientes/ uso em api --->
<div class="fundo">
  <div class="container form-estilo">
    <h1 class="titulo-geral">NEWS</h1>
    <p class="sub-form">cadastre-se e recebe ofertas com preços exclusivos </p>

    <form action="conf.php" method="post">
      <div class="row g-3">

        <div class="col">
          <label for="nome" class="form-label font">Nome</label>
          <input type="text" name="nome" placeholder="Digite seu nome" id="nome" required class="form-control">
        </div>

        <div class="col">
          <label for="email" class="form-label font">E-mail</label>
          <input type="text" name="email" placeholder="Digite seu email" id="email" required class="form-control">
        </div>

        <button type="submit" name="cadastrar" id="cadastrar" class="btn btn-color">CADASTRAR</button>
      </div>

    </form>

  </div>
</div>

<h1 class="titulo-geral">ALONGAMENTOS</h1>
<div class="container">
  <div class="row ">
    <?php include "includes/conexao.php"; ?>
    <?php

    $sql = "select * from cilios";
    $resultado = mysqli_query($conexao, $sql);
    $avaliacao = mysqli_query($conexao, $sql);

    while ($linha = mysqli_fetch_assoc($resultado)) {
      ?>
    <div class="card formato-card " style="width: 11rem;">
      <img src="<?= $linha['foto'] ?>" class="card-img-top foto-card" alt="...">
      <div class="card-body ">
        <h5 class="modelo-al">
          <?= $linha['modelo']; ?>
        </h5>
        <p> R$
          <?= $linha['valor']; ?>
        </p>
      </div>
    </div>
    <?php
    }

    mysqli_close($conexao);
    ?>
  </div>

</div>

<div class="fundo">
  <div class="container form-estilo">
    <h1 class="titulo-geral">AGENDE SEU HORARIO</h1>
    <?php
    include "includes/conexao.php";
    $sql = "SELECT * FROM horarios_disponiveis WHERE disponivel = TRUE";
    $resultado = mysqli_query($conexao, $sql);
    //verifica se tem pelo o menos um horario disponivel 
    if ($resultado && mysqli_num_rows($resultado) > 0) {// combinar as condições e retornar se as duas forem verdadeiras
      echo "<form method='POST' action='agendar.php'>";
      echo "<div class='row g-3'>";

      echo "<div class='col'> ";
      // Campos que o cliente deve preencher
      echo " <label for='nome' class='form-label font'>Nome</label>";
      echo "

      <input type='text' name='nome' placeholder='Digite seu nome' id='nome' required class=' form-control'>";
      echo "</div>";

      echo "<div class='col'>";
      echo " <label for='email' class='form-label font'>E-mail</label>";
      echo " <input type='text' name='email' placeholder='Digite seu email' id='email' required class='form-control'>";
      echo "</div>";

      echo "<div>";
      // Campo de seleção de horários disponíveis
      echo "Consulte os horarios disponiveis<br>";

      echo "<select name='horario' required class='select'>";

      echo "</div>";

      while ($row = mysqli_fetch_assoc($resultado)) {
        $data = date("d/m/Y", strtotime($row['data']));// para formatar a data/hr 
        $hora = date("H:i", strtotime($row['hora']));
        $value = "{$row['data']}|{$row['hora']}";
        echo "<option value='$value'>$data às $hora</option>";
      }

      echo "</select><br><br>";

      echo "</div>";
      echo " <button type='submit' name='agendar' id='agendar' class='btn btn-color'>AGENDAR</button>";
      echo "</form>";
    } else {
      echo "Agenda encerrada, aguarde";
    }

    mysqli_close($conexao);
    ?>

  </div>

</div>

<div class="agendamento">
  <img src="imagens/Ellipse 3.png" class="foto3">
  <p class="agendamento-sub">AGENDAR PELO WHATSAPP</p>
  <a href="https://api.whatsapp.com/send/?phone=19989263487&text&type=phone_number&app_absent=0"
    class="btn btn-color ">INICIAR CONVERSA</a>
</div>

<!-- formulario cm select que só demarca para qual tabela do banco(em conjunto com a página clienteSalvar) de dados as informações serão encaminhadas / aula Guto-->

<div class="fundo">
  <div class="container ">


    <form name="cadastro" method="post" action="salvaFeedback.php"
     class="form-estilo">

      <h1 class="titulo-geral">DEIXE SEU FEEDBACK</h1>
      <h2 class="sub-form">sua opinião e muito importante <h2>

          <div class='row g-3'>
            <div class="col">
              <label for='nome' class='form-label font'>Nome</label>
              <input type="text" name="nome" required maxlength="200" class="form-control"  placeholder='Digite seu nome'><br>
            </div>

            <div class="col">
              <label  class='form-label font'>Feedback</label>
               <input type="text" name="retorno" required class="form-control"  placeholder='Deixe seu feedback'> <br>
            </div>
          </div>
          <div>
             <h1>Procedimento realizado </h1>
            <select name="tipo">
              <option value="feedback"> Cilios</option>
              <option value="feedback_sobrancelha">Sobrancelha</option>
            </select>
          </div>

          <div>
            <button type="submit" class='btn btn-color'>ENVIAR</button>
          </div>
          
    </form>


  </div>

</div>

<a href="#inicio" class="seta"><img src="imagens/seta2.png"></a>

<?php include "includes/rodape.php"?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>