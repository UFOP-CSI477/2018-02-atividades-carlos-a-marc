<?php include "conecta.php" ?>

<?php
	
	$usuario = $_POST['email'];
	$senha = $_POST['senha'];

	session_start();

	$consulta = mysql_query("SELECT * FROM users");
	$porta = 'continuar';

	while ($tupla = $consulta->fetch() and $porta = 'continuar') {
		$id = $tupla['id'];
		$nome = $tupla['nome'];
		$email = $tupla['email'];
		$password = $tupla['password'];
		$type = $tupla['type'];

		if (isset($usuario) and isset($senha)) {
			if ($email == $usuario && $password == $senha) {
				echo "bem vindo " . $nome;

				$minhaSessao = array ('id' => $id, 'nome' => $nome, 'email' => $email, 'password' => $password, 'type' => $type);
			}
		}
	}

	$_SESSION['minhaSessao'] = $minhaSessao;

?>