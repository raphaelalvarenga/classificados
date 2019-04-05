<?php
session_start();

global $cadastro;

if (isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = md5($_POST['senha']);

    try {
        require "conexao.php";

        $sql = "SELECT * FROM usuarios WHERE email = '" . $email . "';";
        $sql = $pdo->query($sql);

        if ($sql->rowCount() == 0) {
            $sql =  "INSERT INTO usuarios" .
                    "(id, nome, email, senha)" .
                    "VALUES" .
                    "(DEFAULT, '" . $nome . "', '" . $email . "', '" . $senha . "');";

            $sql = $pdo->query($sql);
            $cadastro = "sim";
        } else {
            $cadastro = "não";
        }
    } catch (PDOException $erro) {
        echo "Falha na conexão: " . $erro->getMessage();
    }
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
            <div class="row bg-dark text-white">
                <div class="col">
                    <h3><a class = "text-white" href = "index.php" style = "text-decoration: none">Classificados</a></h3>
                </div>
            </div>
            <div class="row" style = "padding-top: 16px">
                <div class="col text-center">
                    <h2>Cadastre-se e participe de nossa comunidade!</h2>
                </div>
            </div>

            <?php
                
                if ($cadastro == "sim") {
                    echo "<div class = 'row justify-content-center'>" .
                         "<div class = 'alert alert-success'>Cadastro realizado com sucesso! Seja bem-vindo! <strong><a class = 'text-success' href = 'login.php'>Clique aqui</a></strong></div>" .
                         "</div>";
                } else if ($cadastro == "não") {
                    echo "<div class = 'row justify-content-center'>" .
                         "<div class = 'alert alert-warning'>Este e-mail já está cadastrado em nossa plataforma! <strong><a class = 'text-warning' href = 'login.php'>Clique aqui</a></strong> para realizar login.</div>" .
                         "</div>";
                }

            ?>
            <div class="row justify-content-center">
                <div class="col-4">
                    <form method="POST">
                        <div class="form-group">
                            <label for="iptEmailLogin">Nome Completo</label>
                            <input id="iptEmailLogin" class="form-control" placeholder="João da Silva" name="nome">
                        </div>

                        <div class="form-group">
                            <label for="iptEmailLogin">E-mail</label>
                            <input type="email" id="iptEmailLogin" class="form-control" placeholder="teste@gmail.com" name="email">
                        </div>

                        <div class="form-group">
                            <label for="iptSenhaLogin">Senha</label>
                            <input type="password" id="iptSenhaLogin" class="form-control" placeholder="Senha" name="senha">
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Cadastrar" class="btn btn-primary">
                            <a href="index.php" class="btn btn-white border-dark text-dark">Retornar</a>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>