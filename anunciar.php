<?php
session_start();

if (!isset($_SESSION['id']) or empty($_SESSION['id'])) {
    header("Location: login.php");
}

if (isset($_POST['produto']) && !empty($_POST['produto']) && isset($_POST['preco']) && !empty($_POST['preco'])) {
    $produto = addslashes($_POST['produto']);
    $descricao = addslashes($_POST['descricao']);
    $preco = addslashes($_POST['preco']);
    $estado = addslashes($_POST['estado']);
    $fotos = $_POST['fotos'];

    mkdir("images/anuncios/1");
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
                <ul class="list-group list-group-horizontal ml-auto">
                    <a class="text-white" href="#"><li class="list-group-item bg-dark">Minha conta</li></a>
                    <a class="text-white" href="logout.php"><li class="list-group-item bg-dark">Sair</li></a>
                </ul>
            </nav>
            <div class="row justify-content-center" style="margin-top: 16px">
                <div class="col-4">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="iptAnunciarProduto">Produto:</label>
                            <input id="iptAnunciarProduto" class="form-control" type="text" name="produto" placeholder="Ex.: Samsung Galaxy S7" required>
                        </div>

                        <div class="form-group">
                            <label for="iptAnunciarDescricao">Descrição:</label>
                            <textarea id="iptAnunciarDescricao" name="descricao" class="form-control" placeholder="Ex.: Celular utilizado há apenas dois meses."></textarea>
                        </div>

                        <div class="form-group">
                            <label for="iptAnunciarPreco">Preço:</label>
                            <input id="iptAnunciarPreco" class="form-control" type="text" name="preco" placeholder="R$ 1.000,00" required>
                        </div>

                        <div class="form-group">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="estado" id="iptAnunciarNovo" autocomplete="off" checked> Novo
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="estado" id="iptAnunciarUsado" autocomplete="off"> Usado
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="iptAnunciarFotos">Fotos:</label>
                            <input type="file" name="fotos" id="iptAnunciarFotos">
                        </div>

                        <input type="submit" value="Concluir" class="btn btn-success">
                        <a href="dashboard.php" class="btn btn-white border-danger text-danger">Voltar</a>
                    </form>
                </div>
            </div>
            
        
        </div>
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>