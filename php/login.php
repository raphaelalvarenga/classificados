<?php
session_start();
echo $_POST['email'];
if (isset($_POST['email']) && !empty($_POST['email'])) {
    echo "teste";
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    try {
        $conexao = "mysql:host=localhost;dbname=classificados;charset=utf8mb4;port=3307";
        $user = "root";
        $senha = "root";

        $pdo = new PDO($conexao, $user, $senha);
        header("Location: ../dashboard.php");
    } catch (PDOException $erro) {
        echo "Falha na conexão: " . $erro->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <title>Classificados</title>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h2>Acesse sua conta</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <form method="POST">
                        <div class="form-group">
                            <label for="iptEmailLogin">E-mail</label>
                            <input id="iptEmailLogin" class="form-control" placeholder="teste@gmail.com" name="email">
                        </div>

                        <div class="form-group">
                            <label for="iptSenhaLogin">Senha</label>
                            <input id="iptSenhaLogin" class="form-control" placeholder="Senha" name="senha">
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Acessar" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="../js/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="../js/script.js"></script>
    </body>
</html>