<!DOCTYPE html>
<html>
	<head>
		<title> Login </title>
			
		<script type="text/javascript" src="form.js">
	
		</script>
		
		<link rel="stylesheet" type="text/css" href="form.css">
		<div class="message">
		<?php
		if(isset($flash)){
		echo $flash;
		echo $msg;
	}
		?>
		</div>
			
	</head>
		
	<body>
		
		
		
		<div id="form_aces">
		<form cellspacing="10" action="?acao=logar" method="post">
		

				<table id="acesso_form" name="acesso_form">
					<thead>
					<tr>
			
						<td> 
							<label for="login">Usuario: </label>
						</td>
						<td>
							<input type="text" name="usuario" id="usuario" placeholder="Usuario"> 
						</td>
					</tr>	
					<tr>
			
						<td> 
							<label for="senha"> Senha: </label>
						</td>
						<td>
							<input type="password" name="senha" id="senha" placeholder="senha"> 
						</td>
						</tr>
						
					<tr> <td> </td> </tr>	

					</thead>
					<tbody>
					
					<tr>
					
						<td> 
							<input type="submit" value="Acessar" name="btn_acessar" id="btn_acessar" class="btn"> 
						</td>		
						<td>
							<a href="cadastro_usuarios.php">
                            <input type="button" value="Cadastrar" name="btn_cad" id="btn_cad" class="btn" onclick="return cadastro.php"> 
						</td>
						
						
						
					</tr>
					</tbody>
					<tfoot>
					
					<tr>
					
						<td> </td> <td> </td>

						<td>
						
						Esqueci a senha
						
						</td>
						
						
					</tr>
					
					</tfoot>

					
					
								
			
				</table>
				
				</div>
			
			
		
		
		
		
		
	</body>
		
</html>