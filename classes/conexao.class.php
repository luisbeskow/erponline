<?php
		@session_start();

		$host="localhost";
		$user="root";
		$pass="luis2306";
		@$dbname=$_SESSION['usuario'];
		$dbnameus="erponline";

		$conecta = mysqli_connect($host,$user,$pass);
		$conexao = mysqli_connect($host,$user,$pass,$dbname);
		$conusuario = mysqli_connect($host,$user,$pass,$dbnameus);
		
		
	?>