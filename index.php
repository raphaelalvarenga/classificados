<?php
require "conexao.php";

// Total de usuários
$sql = "SELECT COUNT(*) as total FROM usuarios";
$sql = $pdo->query($sql);
$sql = $sql->fetch();
$totalUsuarios = $sql['total'];

// Total de anúncios
$sql = "SELECT COUNT(*) as total FROM anuncios;";
$sql = $pdo->query($sql);
$sql = $sql->fetch();
$totalAnuncios = $sql['total'];


require "cabecalho.php";
?>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-sm bg-dark">
                <a class="navbar-brand text-white" href="#">Classificados</a>
                <ul class="list-group list-group-horizontal ml-auto">
                    <a class="text-white btn" href="login.php"><li class="list-group-item bg-dark">Login</li></a>
                    <a class="text-white btn" href="cadastro.php"><li class="list-group-item bg-dark">Cadastre-se</li></a>
                </ul>
            </nav>

            <div class="jumbotron">
                <h1>Mais de <?php echo $totalUsuarios ?> anunciantes estão aqui!</h1>
                <p>Mais de <?php echo $totalAnuncios ?> anúncios realizados!</p>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <h4 class="text-center">Filtros</h4>
                    <table class="table">
                        <?php
                            $sql = "SELECT * FROM categorias ORDER BY descricao";
                            $sql = $pdo->query($sql);
                            if ($sql->rowCount() > 0) {
                                foreach ($sql->fetchAll() as $categoria) {
                                    echo "<tr>";
                                    echo "<td><a class='btn btn-primary' href='index.php'>" . $categoria['descricao'] . "</a></td>";
                                    echo "</tr>";
                                }
                            }
                        ?>
                    </table>
                </div>
                <div class="col-sm-10">
                    <h4 class="text-center">Anúncios Recentes</h4>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Anuncio</th>
                                <th>Categoria</th>
                                <th>Preço</th>
                                <th>Estado</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                // Últimos 30 anuncios
                                $sql = "SELECT * FROM anuncios ORDER BY id DESC LIMIT 30";

                                $sql = "SELECT a.produto, c.descricao, c.icone, a.preco, a.estado " .
                                       "FROM anuncios as a LEFT JOIN categorias as c " .
                                       "ON a.id_categoria = c.id " .
                                       "ORDER BY a.id DESC " .
                                       "LIMIT 30;";
                                $sql = $pdo->query($sql);
                                if ($sql->rowCount() > 0) {
                                    foreach($sql->fetchAll() as $anuncio) {
                                        echo "<tr>";
                                        echo "<td><a href='#' class='text-dark'>" . $anuncio['produto'] . "</a></td>";
                                        echo "<td>" . $anuncio['icone'] . " " . $anuncio['descricao'] . "</td>";
                                        echo "<td>R$ " . $anuncio['preco'] . "</td>";
                                        echo "<td>" . $anuncio['estado'] . "</td>";
                                        echo "</tr>";
                                    }
                                }
                            ?>
                        </tbody>
                </div>
            </div>
        </div>
<?php require "rodape.php" ?>