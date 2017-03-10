<!DOCTYPE html>
<html>
	<head>
		<title>Contato SGV </title>
		<link rel="stylesheet" type="text/css" href="estilo_site.css">
		<style type="text/css">
		

		
		</style>
		
		<?php 
			include('templates/topo_site.php');
		?>
		
		
	</head>
	
	<body>
	
	<div id="conteudo_contato">
	
	<h1> Fale Conosco </h1>
	
	<div id="formulario_contato">
	<form action="enviar_contato.php" method="post">
		<label for="nome"> Nome: </label> <br/>
		<input type="text" id="nome" name="nome" size="44"> <br/>
		<label for="e-mail"> E-mail: </label> <br/>
		<input type="email" id="email" name="email" size="44"> <br/>
		<label for="tel"> Telefone: </label> <br/>
		<input type="text" id="ddd_tel" name="ddd_tel" size="1" maxlength="2" > <input type="text" id="tel" name="tel" size="39"> <br/>
		<label for="mensagem"> Mensagem: </label> <br/>
		<textarea rows="8" cols="50" id="mensagem" name="mensagem"> </textarea> <br/>
		
		<input type="submit" value="Enviar" class="btn">
		
		
		
	</form> 
	</div>
	</div>
	
		<?php 
			include('templates/baixo.php');
		?>
	


	
	</body>
	
</html>