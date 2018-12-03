<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Principal</title>

        <link href="css/bootstrap-4.1.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <script src="css/bootstrap-4.1.3/js/bootstrap.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>

    </head>

    <body>

        <!-- cabeçalho -->
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-1 bg-white border-bottom shadow-sm">
              <a class="py-2 d-none d-md-inline-block ml-sm-3" href="principal.php"><img src="img/petshop.png" width="35" height="35"></a>
              <div class="mr-md-auto ml-md-auto">
                  <form class="form-inline mt-2 mt-md-0" action="principal.php" method="post">
                      <input class="form-control mr-sm-2 pesquisar" type="text" placeholder="Pesquisar" aria-label="Search" name="buscar">
                     <!-- <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Pesquisar</button> -->
                  </form>
              </div>
                  <nav class="my-2 my-md-0 mr-md-3">
                       <a class="p-2 text-muted ml-sm-2" href="principal.php">Principal</a>
                       <a class="p-2 text-muted ml-sm-2" href="#">Cadastrar</a>
                       <a class="p-2 text-muted ml-sm-2" href="#">Entrar</a>
                       <!-- <a class="p-2 text-dark" href="#">Carrinho</a> -->
                       <a class="py-2 d-none d-md-inline-block ml-sm-2" href="view-carrinho.php"><img src="img/cart.png" width="18" height="18"></a>
                  </nav>

              <!--<a class="btn btn-outline-primary" href="#">Cadastro</a> -->
        </div>

        <!-- Banner -->
        <div class="jumbotron banner row">
            <div class="container col-md-4">
              <h1 class="display-3 ">PetStyle</h1>
              <p>Venha conferir nossas novidades e aproveite ao máximo nosssas ofertas.</p>
              <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Saiba mais &raquo;</a></p> -->
            </div>
            <img src="img/banner1.png" class="rounded float-right" >
        </div>


        <!-- Área de produtos -->
        <div class="container">
            <div class='row text-right mt-5'>
                <?php 
                    while($tupla = $produtos->fetch()) {
                        echo "<div class='col-md-3'>";
                           echo "<div class='product-0507'>";
                               echo "<div class='card border-0'>";
                                   echo "<div class='card-img'>";
                                      echo '<img src="' . $tupla["imagem"] . '" class="img-fluid" width="120" height="120" >';    // Imagem
                                   echo "</div>";
                                   echo "<a href='#' class='card-title small mt-2 text-dark'>ا " . $tupla["Nome"] ."</a>";  // Nome
                                   echo "<div class='card-body p-0'>";
                                     echo '<div class="price small">' . $tupla['preco'] . '</div>';   // preço
                                   echo "</div><!--.card-body-->";
                                   echo '<form action="view-carrinho.php" method="post">
                                       <input type="hidden" name="id_txt" value="'. $tupla["id"] .'" />
                                       <input type="hidden" name="imagem" value="'. $tupla["imagem"] .'" />
                                       <input type="hidden" name="nome" value="'. $tupla["Nome"] .'" />
                                       <input type="hidden" name="preco" value="'. $tupla["preco"] .'" />
                                       <input type="submit" name="add class="btn btn-outline-primary" value="Adicionar" />
                                   </form>';
                                  // echo '<a class="btn btn-outline-primary" href="carrinho.php?id=' . $tupla['id'] . '">Adicionar</a>';

                               echo "</div>";
                           echo "</div>";
                       echo "</div><!--.col-->";
                    }
                ?>
            </div><!--.row-->
        </div><!--.container-fluid-->

    </body>
</html>



