<?php
session_start();

if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = addslashes($_POST['email']);
    $senha = md5($_POST['senha']);
    
    try {
        require "conexao.php";
        
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

require "cabecalho.php";
?>



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

                        <div class="form-group text-right">
                            <small><a href = "#">Esqueci minha senha</a></small>
                        </div> 

                        <div class="form-group">
                            <input type="submit" value="Acessar" class="btn btn-primary">
                            <a href="index.php" class="btn btn-white border-dark text-dark">Retornar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php require "rodape.php" ?>