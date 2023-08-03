<?php

	$host = "0.0.0.0"; // endereço do servidor
	$user = "root"; // usuário do MySQL
	$password = "mariadb"; // senha do MySQL
	$database = "Empresa"; // nome do banco de dados

	// Cria a conexão
	$connection = new mysqli($host, $user, $password, $database);
	
	// Checa se a conexão foi realizada com sucesso
	if ($connection->connect_error) {
	    die("Falha de conexão: " . $connection->connect_error);
	}

?>