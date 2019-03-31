<?php
session_start();

if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = addslashes($_POST['email']);
    $senha = md5($_POST['senha']);
    
    try {
        $conexao = "mysql:host=localhost;dbname=classificados;charset=utf8mb4";
        $user = "root";
        $pass = "root";

        $pdo = new PDO($conexao, $user, $pass);
        
        $sql = "SELECT * FROM usuarios WHERE email = '" . $email . "' and senha = '" . $senha . "';";

        $sql = $pdo->query($sql);
        
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();
            $_SESSION['id'] = $sql['id'];
            header("Location: dashboard.php");
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
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Classificados</title>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row bg-dark text-white">
                <div class="col">
                    <h3><a class = "text-white" href = "index.php" style = "text-decoration: none">Classificados</a></h3>
                </div>
            </div>
            <div class="row">
                <div class="col text-center" style = "padding-top: 16px">
                    <h2>Acesse sua conta</h2>
                </div>
            </div>

            <?php
                if (isset($_POST['email']) or isset($_POST['senha'])) {
                    echo "<div class='row justify-content-center'>" .
                         "<div id='divLoginUserPassInvalidos' style = 'display: block' class='alert alert-danger'>Usuário e/ou senha inválido(s)!</div>" .
                         "</div>";
                }
            
            ?>

            <div class="row justify-content-center">
                <div class="col-4">
                    <form method="POST">
                        <div class="form-group">
                            <label for="iptEmailLogin">E-mail</label>
                            <input id="iptEmailLogin" class="form-control" placeholder="teste@gmail.com" name="email">
                        </div>

                        <div class="form-group">
                            <label for="iptSenhaLogin">Senha</label>
                            <input type="password" id="iptSenhaLogin" class="form-control" placeholder="Senha" name="senha">
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Acessar" class="btn btn-primary">
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