


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
            <div class="row justify-content-center">
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