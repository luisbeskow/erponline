<?php
	ini_set('display_errors', true);
	error_reporting(E_ALL);

	if( $_SERVER['REQUEST_METHOD']=='POST' )
	{
		if( !getPost('id') )
		{
			//significa um INSERT
			$sql = "INSERT INTO `tabela` (`id`, `nome`, `email`, `telefone`)
				VALUES
				(NULL, '".getPost('nome')."', '".getPost('email')."', '".getPost('telefone')."')";

		}
		else
		{
			//significa um UPDATE
			$sql = "UPDATE `tabela` SET `nome` = '".getPost('nome')."',
				`email` = '".getPost('email')."',
				`telefone` = '".getPost('telefone')."'
				WHERE `id` = ".getPost('id');
		}
		echo $sql;//executar a query

	}
	function getPost( $key ){
		return isset( $_POST[ $key ] ) ? filter( $_POST[ $key ] ) : null;
	}
	function filter( $var ){
		return $var;//faça o tratamento
	}
?>