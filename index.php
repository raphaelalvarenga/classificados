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

                    <label for="slctIndexConservacao">Conservação</label>
                    <select class="custom-select" id="slctIndexConservacao">
                        <option selected></option>
                        <option value="Novo">Novo</option>
                        <option value="Usado">Usado</option>
                    </select>
                    
                    <br><br>

                    <label for="slctIndexCategoria">Categoria:</label>
                    <select class="custom-select" id="slctIndexCategoria">
                    <option></option>
                        <?php
                            $sql = "SELECT id, descricao FROM categorias ORDER BY descricao";
                            $sql = $pdo->query($sql);
                            
                            if ($sql->rowCount() > 0) {
                                foreach($sql->fetchAll() as $categoria) {
                                    echo "<option value='" . $categoria['id'] . "'>" . $categoria['descricao'] . "</option>";
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="col-sm-10">
                    <h4 class="text-center">Anúncios Recentes</h4>
                    <?php
                        $anuncios = array();

                        class Anuncio {
                            public $id;
                            public $produto;
                            public $descricao;
                            public $icone;
                            public $preco;
                            public $estado;
                        }


                        $sql = "SELECT a.id, a.produto, c.descricao, c.icone, a.preco, a.estado " .
                                       "FROM anuncios as a LEFT JOIN categorias as c " .
                                       "ON a.id_categoria = c.id " .
                                       "ORDER BY a.id";
                        
                        $sql = $pdo->query($sql);
                        if ($sql->rowCount() > 0) {
                            foreach ($sql->fetchAll() as $anuncio) {
                                $anuncio_tmp = new Anuncio();

                                $anuncio_tmp->id = $anuncio['id'];
                                $anuncio_tmp->produto = $anuncio['produto'];
                                $anuncio_tmp->descricao = $anuncio['descricao'];
                                $anuncio_tmp->icone = $anuncio['icone'];
                                $anuncio_tmp->preco = $anuncio['preco'];
                                $anuncio_tmp->estado = $anuncio['estado'];

                                array_push($anuncios, $anuncio_tmp);
                            }
                        }
                        

                        /*
                        ** O preenchimento desta tabela funciona desta forma:
                        ** A razão de linha para linha é crescente e de 2 em 2
                        ** A razão da coluna é decrescente onde a do meio é a metade da esquerda
                        ** e a última é igual a zero.
                        */
                        $z = 0;
                        for ($x = 1; $x <= 10; $x++) {
                            $i = $z;

                            echo "<div class='row text-center' style='padding: 32px 0'>";
                            
                            for ($y = 1; $y <= 3; $y++) {
                                echo "<div class='col-sm-4'>";
                                    echo "<a href='#' class='text-dark'>";
                                    echo "<div class='row'>";
                                        echo "<div class='col'>";
                                            echo $anuncios[($x * $y + $i) - 1]->icone;
                                        echo "</div>";
                                    echo "</div>";

                                    echo "<div class ='row'>";
                                        echo "<div class='col'>";
                                            //echo "<img src='images/anuncios/" . ($x * $y + $i) . "/anuncio.png'>";
                                        echo "</div>";
                                    echo "</div>";

                                    echo "<div class='row'>";
                                        echo "<div class='col'>";
                                            echo "<strong>Produto: </strong>" . $anuncios[($x * $y + $i) - 1]->produto;
                                        echo "</div>";
                                    echo "</div>";

                                    echo "<div class='row'>";
                                        echo "<div class='col'>";
                                            echo "<strong>Valor: </strong>R$ " . $anuncios[($x * $y + $i) - 1]->preco;
                                        echo "</div>";
                                    echo "</div>";

                                    echo "<div class='row'>";
                                        echo "<div class='col'>";
                                            echo "<strong>Estado: </strong>" . $anuncios[($x * $y + $i) - 1]->estado;
                                        echo "</div>";
                                    echo "</div>";
                                    echo "</a>";
                                echo "</div>";

                                if ($y == 1) {
                                    $i /= 2;
                                } else {
                                    $i = 0;
                                }
                                
                            }
                            echo "</div>";
                            $z += 2;
                        }
                    ?>
                </div>
            </div>
        </div>
<?php require "rodape.php" ?>