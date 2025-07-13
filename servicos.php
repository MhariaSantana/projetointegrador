<?php include "includes/cab.php"; ?>
<link rel="stylesheet" href="servicos.css">

<div class="banner">
  <video class="video-banner" autoplay muted loop>
    <source src="videos/banner.mp4" type="video/mp4">
  </video>
  <div class="overlay">
    <h1>SERVIÇOS ESPAÇO BIOSEGURANÇA</h1>
  </div>
</div>

<h1 class="sub-geral">SOBRANCELHAS</h1>
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
          <h5><?= $linha['modelo']; ?></h5>
          <p> R$ <?= $linha['valor']; ?></p>
          <a href="#" class="btn btn-dark botao">AGENDAR</a>
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
        <button type="submit" name="cadastrar" id="cadastrar" class="btn btn-dark">CADASTRAR</button>
      </div>
    </form>
  </div>
</div>

<h1 class="sub-geral">ALONGAMENTOS</h1>
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
          <h5><?= $linha['modelo']; ?></h5>
          <p> R$ <?= $linha['valor']; ?></p>
          <a href="#" class="btn btn-dark botao">AGENDAR</a>
        </div>
      </div>
      <?php
    }

    mysqli_close($conexao);
    ?>
  </div>
 
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>