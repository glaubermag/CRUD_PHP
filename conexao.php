<?php
	$host = "localhost"; 			
	$user = "root"; 
	$pass = ""; 
	$banco = "banco";
		
	$conexao = @mysqli_connect($host, $user, $pass, $banco )
	or die ("Problemas com a conexão do Banco de Dados");
?>
