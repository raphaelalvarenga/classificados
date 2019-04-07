<?php
session_start();

if (!isset($_SESSION['id']) or empty($_SESSION['id'])) {
    header("Location: login.php");
}

require "conexao.php";
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

        <div class="row" style="margin-top: 16px">
            <div class="col">
                <a href="anunciar.php" class="btn btn-primary">Anunciar</a>
            </div>
        </div>

        <div class="row">
            <div class="col text-center"><h3>Meus Anúncios</h3></div>
        </div>

        <table id="tblDashboard" class="table table-striped">
            <?php
                $sql = "SELECT id, produto, descricao, preco, estado " .
                "FROM anuncios " .
                "WHERE id_usuario = '" . $_SESSION['id'] . "';";

                $sql = $pdo->query($sql);

                if ($sql->rowCount() > 0) {
                    ?>
                    <thead>
                        <tr>
                            <th>Anúncio</th>
                            <th>Descrição</th>
                            <th>Preço</th>
                            <th>Estado</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
        
                    <tbody>
                    <?php
                        foreach ($sql->fetchAll() as $anuncio) {
                            echo "<tr>";
                            echo "<td>" . $anuncio['produto'] . "</td>";
                            echo "<td>" . $anuncio['descricao'] . "</td>";
                            echo "<td>R$ " . $anuncio['preco'] . "</td>";
                            echo "<td>";
                                if ($anuncio['estado'] == "novo") {
                                    echo "Novo";
                                } else {
                                    echo "Usado";
                                }
                            echo "</td>";
                            echo "<td><a class='btn btn-secondary' href='anunciar.php?id=" . $anuncio['id'] . "&id_usuario=" . $_SESSION['id'] . "'>Editar</a> <a class='btn btn-danger' href='#'>Excluir</a>";
                            echo "</tr>";
                        }
                } else {
                    echo "<h5 class='text-dark text-center'>Você ainda não fez nenhum anúncio! Comece já clicando em <a href='anunciar.php'>Anunciar</a>!</h5>";
                }
                echo "</tbody>";
            ?>
            
        </table>
    </div>
        

<?php require "rodape.php"; ?>