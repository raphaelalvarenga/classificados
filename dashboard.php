<?php
session_start();

if (!isset($_SESSION['email']) or empty($_SESSION['email'])) {
    header("Location: php/login.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <title>Classificados</title>
    </head>

    <body>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-sm bg-dark">
                <a class="navbar-brand text-white" href="#">Classificados</a>
                <ul class="list-group list-group-horizontal">
                    <a class="text-white" href="#"><li class="list-group-item bg-dark">Meus anúncios</li></a>
                    <a class="text-white" href="#"><li class="list-group-item bg-dark">Sair</li></a>
                </ul>
            </nav>

            <div class="jumbotron">
                <h1>Mais de 999 anunciantes</h1>
                <p>Mais de 999 anúncios</p>
            </div>

            <div class="row">
                <div class="col-sm-4"><h4>Filtros</h4></div>
                <div class="col-sm-8"><h4>Anúncios</h4></div>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>