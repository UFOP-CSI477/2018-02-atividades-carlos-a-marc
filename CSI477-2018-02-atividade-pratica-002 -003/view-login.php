<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>

		<link href="css/bootstrap-4.1.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link rel="stylesheet" type="text/css" href="css/login.css">
        <script src="css/bootstrap-4.1.3/js/bootstrap.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>

	</head>
	<body>

		<div class="container">
			<form class="form-signin" action="login.php" method="post">
				<h1 class="text-muted mb-4">PetStyle</h1>	    
			    <input type="email" class="form-control" placeholder="Email" name="email" required autofocus>
			    <input type="password" class="form-control" placeholder="Senha" name="senha" required>
			    <button class="btn btn-lg btn-outline-primary" type="submit">Entrar</button>
		    </form>
		</div>

	</body>
</html>