<?php
session_start();

if (!isset($_SESSION['id']) or empty($_SESSION['id'])) {
    header("Location: login.php");
}

require "cabecalho.php";
?>


    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm bg-dark">
            <a class="navbar-brand text-white" href="#">Classificados</a>
            <ul class="list-group list-group-horizontal ml-auto">
                <a class="text-white" href="#"><li class="list-group-item bg-dark"><i class="fas fa-user"></i></li></a>
                <a class="text-white" href="logout.php"><li class="list-group-item bg-dark">Sair</li></a>
            </ul>
        </nav>

        <div class="row" style="margin-top: 16px">
            <div class="col">
                <a href="anunciar.php" class="btn btn-primary">Anunciar</a>
            </div>
        </div>

        <div class="row">
            <div class="col text-center"><h3>Meus Anúncios</h3></div>
        </div>
    </div>
        

<?php require "rodape.php"; ?>