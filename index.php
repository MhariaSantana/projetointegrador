<?php include "includes/cab.php"; ?>

<div class="info">
    <div>
        <img src="" alt="foto da profissional" class="foto1">
        <p class="texto-foto1">ESPECIALISTA EM ALONGAMENTO DE <br>CILIOS E DESIGNER SOBRANCELHA</p>
    </div>
    <div class="titulo">
        <h1>LASH & EYEBROW <br>DESIGNER</h1>
        <h2 class="sub">transforme seu olhar, realce sua beleza </h2>
    </div>

</div>

<div class="conf">
    <div class="autoplay">
        <img src="imagens/Rectangle 11.png">
        <img src="imagens/Rectangle 10.png">
        <img src="imagens/Rectangle 9.png">
        <img src="imagens/Rectangle 7.png">

    </div>
</div>

<?php include "includes/conexao.php" ?>
<div class="fundo">
    <?php
    $sql = "select * from feedback";
    $resultado = mysqli_query($conexao, $sql);
    ?>
    <div class="">
        <h1 class="titulo-geral">FEDBACK'S</h1>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner ">
                <?php
                $ativo = true;
                while ($linha = mysqli_fetch_assoc($resultado)) {
                    echo '<div class="carousel-item' . ($ativo ? ' active' : '') . '">';
                    echo '<div class="texto-feed">';
                    echo '<p>" ' . $linha['retorno'] . ' "</p>';
                    echo '<h1 class="nome-feed">- ' . $linha['nome'] . '</h1>';
                    echo '</div></div>';
                    $ativo = false;
                }
                ?>
            </div>
            <button class="carousel-control-prev " type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next " type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<?php
mysqli_close($conexao);
?>

<div class="conf">
    <div class="autoplay">
        <img src="imagens/Rectangle 26.png">
        <img src="imagens/Rectangle 25.png">
        <img src="imagens/Rectangle 24.png">
        <img src="imagens/Rectangle 23.png">
        <img src="imagens/Rectangle 29.png">
    </div>
</div>

<?php include "includes/conexao.php" ?>
<div class="fundo">
    <?php
    $sql = "select * from feedback_sobrancelha";
    $resultado = mysqli_query($conexao, $sql);
    ?>
    <img src="imagens/aspas.png" class="foto-aspas">
    <div id="carouselExample2" class="carousel slide">
        <div class="carousel-inner ">
            <?php
            $ativo = true;
            while ($linha = mysqli_fetch_assoc($resultado)) {
                echo '<div class="carousel-item' . ($ativo ? ' active' : '') . '">';
                echo '<div class="texto-feed">';
                echo '<p>" ' . $linha['retorno'] . ' "</p>';
                echo '<h1 class="nome-feed"> - ' . $linha['nome'] . '</h1>';
                echo '</div></div>';
                $ativo = false;
            }
            ?>
        </div>
        <button class="carousel-control-prev " type="button" data-bs-target="#carouselExample2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">
            <span class="carousel-control-next-icon " aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<?php
mysqli_close($conexao);
?>



<?php include "includes/rodape.php"?>
<script src="funcoes.js/jquery.js"></script>
<script src="lib/slick-1.8.1/slick-1.8.1/slick/slick.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"></script>
<script src="funcoes.js/app.js"></script>


</body>

</html>