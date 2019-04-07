<?php
session_start();
require "conexao.php";

date_default_timezone_set("America/Sao_Paulo");

if (!isset($_SESSION['id']) or empty($_SESSION['id'])) {
    header("Location: login.php");
}

if (isset($_POST['produto']) && !empty($_POST['produto']) && isset($_POST['preco']) && !empty($_POST['preco'])) {
    $produto = addslashes($_POST['produto']);
    $descricao = addslashes($_POST['descricao']);
    $preco = addslashes($_POST['preco']);
    $estado = addslashes($_POST['estado']);
    $data = date("Y-m-d H:i:s");
    $id_usuario = $_SESSION['id'];

    
    // Verificando qual foi o último registro
    $sql = "SELECT id FROM anuncios ORDER BY id DESC LIMIT 1;";
    $sql = $pdo->query($sql);

    if ($sql->rowCount() > 0) {
        $sql = $sql->fetch();
        $proximoId = $sql['id'] + 1;



        // Formatação da foto
        if (isset($_FILES['fotos'])) {
            $fotos = $_FILES['fotos'];
            
            // Dimensões da imagem upada
            list($largura_original, $altura_original) = getimagesize($fotos['tmp_name']);

            // Proporção
            $ratio = $largura_original / $altura_original;

            // Armazenando a imagem original
            $imagem_original = imagecreatefrompng($fotos['tmp_name']);

            // Tamanho máximo da foto redimensionada
            $largura_final = 200;
            $altura_final = 200;

            // Configurando largura e altura final de acordo com o ratio
            if ($largura_final / $altura_final > $ratio) {
                $largura_final = $altura_final * $ratio;
            } else {
                $altura_final = $largura_final / $ratio;
            }
            
            // Criando nova imagem
            $imagem_final = imagecreatetruecolor($largura_final, $altura_final);

            // Inserindo os atributos na nova foto
            imagecopyresampled($imagem_final, $imagem_original, 0, 0, 0, 0, $largura_final, $largura_original, $altura_final, $altura_original);

            // Criando pasta da imagem no servidor
            mkdir("images/anuncios/" . $proximoId);

            // Salvando no servidor
            imagepng($imagem_final, "images/anuncios/" . $proximoId . "/anuncio.png");
        }

        $sql = "INSERT INTO anuncios " .
            "(id, produto, descricao, preco, estado, data, id_usuario) " .
            "VALUES (DEFAULT, '$produto', '$descricao', '$preco', '$estado', '$data', '$id_usuario');";

        $sql = $pdo->query($sql);
    }
}
require "cabecalho.php";
?>


        <div class="container-fluid">
            <nav class="navbar navbar-expand-sm bg-dark">
                <a class="navbar-brand text-white" href="dashboard.php">Classificados</a>
                <ul class="list-group list-group-horizontal ml-auto">
                    <a class="text-white" href="#"><li class="list-group-item bg-dark"><i class="fas fa-user"></i></li></a>
                    <a class="text-white" href="logout.php"><li class="list-group-item bg-dark">Sair</li></a>
                </ul>
            </nav>
            <?php
                if (isset($_POST['produto']) && !empty($_POST['produto']) && isset($_POST['preco']) && !empty($_POST['preco'])) {
                    ?>
                    <div class="row justify-content-center" style="margin-top: 16px">
                    <div class="col-4">
                        <div class="alert-success" style="padding: 8px">
                            <h4 class="text-center"><strong>Anúncio realizado com sucesso!</strong></h4>
                            <p>Aproveite esta página para realizar outro anúncio ou <a class="text-success" href="dashboard.php"><strong>clique aqui</strong></a> para voltar à tela de anúncios.</p>
                        </div>
                    </div>
                    </div>

                    <?php
                }
                
            ?>
            
            <div class="row justify-content-center" style="margin-top: 16px">
                <div class="col-4">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="iptAnunciarProduto">Produto:</label><span style="color: red"> *</span>
                            <input id="iptAnunciarProduto" class="form-control" type="text" name="produto" placeholder="Ex.: Samsung Galaxy S7" required>
                        </div>

                        <div class="form-group">
                            <label for="iptAnunciarDescricao">Descrição:</label>
                            <textarea id="iptAnunciarDescricao" name="descricao" class="form-control" placeholder="Ex.: Celular utilizado há apenas dois meses."></textarea>
                        </div>

                        <div class="form-group">
                            <label for="iptAnunciarPreco">Preço (R$):</label><span style="color: red"> *</span>
                            <input id="iptAnunciarPreco" class="form-control" type="text" name="preco" placeholder="Ex.: 1.000,00" required>
                        </div>

                        <div class="form-group">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="estado" id="iptAnunciarNovo" autocomplete="off" value="Novo" checked> Novo
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="estado" id="iptAnunciarUsado" value="Usado" autocomplete="off"> Usado
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
<?php require "rodape.php" ?>