<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Carrinho</title>

		<link href="css/bootstrap-4.1.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <script src="css/bootstrap-4.1.3/js/bootstrap.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>

	</head>
	<body>

			<!-- cabeçalho -->
	        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-1 bg-white border-bottom shadow-sm">
	              <a class="py-2 d-none d-md-inline-block ml-sm-3 mr-md-auto" href="principal.php"><img src="img/petshop.png" width="35" height="35"></a>

	                  <nav class="my-2 my-md-0 mr-md-3">
	                       <a class="p-2 text-muted ml-sm-2" href="principal.php">Principal</a>
	                       <a class="p-2 text-muted ml-sm-2" href="#">Cadastrar</a>
	                       <a class="p-2 text-muted ml-sm-2" href="#">Entrar</a>
	                       <!-- <a class="p-2 text-dark" href="#">Carrinho</a> -->
	                       <a class="py-2 d-none d-md-inline-block ml-sm-2" href="#"><img src="img/cart.png" width="18" height="18"></a>
	                  </nav>

	              <!--<a class="btn btn-outline-primary" href="#">Cadastro</a> -->
	        </div>

	        <div class="container-fluid">
	        	<h3 class="text-muted display-4 mt-md-4">Meu carrinho</h3>
				<table class="table mt-md-4">

					<tbody>

						<?php 


							//Testa se existe algum id
							if (isset($_POST['id_txt'])){

								$meuCarrinho [] = array ('id'=> $_POST['id_txt'], 'imagem'=> $_POST['imagem'], 'nome'=> $_POST['nome'], 'preco'=> $_POST['preco']);
							}

							session_start();


							//Testa se exite algum item no carrinho
							if (isset($_SESSION['carrinho'])){

								$meuCarrinho = $_SESSION['carrinho'];

								if (isset($_POST['id_txt'])){

									$meuCarrinho [] = array ('id'=> $_POST['id_txt'], 'imagem'=> $_POST['imagem'], 'nome'=> $_POST['nome'], 'preco'=> $_POST['preco']);
								}
							}

							// exclusão de item. id3 é o id do botã0 de exclusão

							if (isset($_POST['id3'])) {
								$indice = $_POST['id3'];
								$meuCarrinho[$indice] = NULL;
							}

							if (isset($meuCarrinho)) {
								$_SESSION['carrinho'] = $meuCarrinho;
							}

						?>

						<?php 

							if(isset($meuCarrinho)){
								
								$total = 0;

								for ($i=0; $i < count($meuCarrinho); $i++) { 

									if ($meuCarrinho[$i] <> NULL) {
										
										echo "<tr>";
											echo "<td>" . "<img src=" . $meuCarrinho[$i]['imagem'] . " width='72' height='72'>" . "</td>";
											echo "<td>" . $meuCarrinho[$i]['nome'] . "</td>";
											echo "<td>" . $meuCarrinho[$i]['preco'] . "</td>";
											echo "<td><form action='' method='post'>
											<input type='hidden' name='id3' value='". $i . "' />
											<input type='image' src='img/trash.png' width='18' height='18' />
											</form></td>";
										echo "</tr>";

									$total += $meuCarrinho[$i]['preco'];

									}

								}

								echo "<tr><td colspan='2'>Total</td><td>" . $total . "</td></tr>";
							}else {
								echo "<p class='text-center mt-md-4'>Não há itens no carrinho</p>";
							}
						?>



					</tbody>
				</table>
	        </div>

	</body>
</html>