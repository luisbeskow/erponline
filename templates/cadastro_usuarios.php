<!DOCTYPE html>
<html lang="pt-br">
	<head> 
		<title> Cadastro </title>
		<link rel="stylesheet" type="text/css" href="form.css">
        <div class="message"><?php echo $msg; ?></div>
        <script src="jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="jquery.maskedinput.js" type="text/javascript"></script>
        <script src="mascaras.js" type="text/javascript"></script>
        </head>
	<body>

<div>

	<form action="?acao=cadastrar" method="post">


			<table id="cad_form" cellpadding="10">			
				
                <thead>
                	

						<tr>
                        <td colspan="2" id="text_descri"> Preencha o formulario de cadastro: </td>
						</tr>
					<!-- pulando linha --><tr> </tr>
					<!-- pulando linha --><tr> </tr>
					<!-- pulando linha --><tr> </tr>
				</thead>
				<tbody>
					<tr>
						<td> 
							<label for="email"> Usuario: </label>
						</td>
						
						<td> 
							<input type="text" name="usuario" id="usuario">
						</td>
                        
                        <td> 
							<label for="email">E-mail: </label>
						</td>
						
						<td> 
							<input type="e-mail" name="email" id="email">
						</td>
						
					</tr>
					
					<tr>
						<td> 
							<label for="senha">Senha: </label>
						</td>
						
						<td> 
							<input type="password" name="senha" id="senha">
						</td>
					
						<td> 
							<label for="rep_senha">Repita Senha: </label>
						</td>
						
						<td> 
							<input type="password" name="rep_senha" id="rep_senha">
						</td>
						
					</tr>
					
					<tr>
						<td> 
							<label for="nome"> Nome: </label>
						</td>
						
						<td>
							<input type="text" id="nome" name="nome">
						</td>
					
						<td> 
							<label for="sobrenome"> Sobrenome: </label>
						</td>
						
						<td>
							<input type="text" id="sobrenome" name="sobrenome">
						</td>
					</tr>
					
					<tr>
						<td> 
							<label for="data de nascimento">Nascimento: </label>
							
						</td>
						
						<td>
							<input type="date" id="nasc" name="nasc">
						</td>
						
						<td>
							<label for="sexo"> Sexo: </label>
						</td>
						
						<td>
							<select id="sexo" name="sexo">
								<option id="m"> Masculino </option>
								<option id="f"> Feminino </option>
								<option id="n"> N&atilde;o Declarado </option>
							
							</select>
							
						</td>
						
					
					</tr>
					
					<tr>
						<td> 
							<label for="telefone"> Telefone: </label>
						</td>
						
						<td>
							<input type="text" id="ddd_tel" name="ddd_tel" size="1"  maxlength="2">
							<input type="text" size="15" id="tel" name="tel" maxlength="9">
						</td>
                        
                        <td> 
							<label for="celular"> Celular: </label>
						</td>
						
						<td>
							<input type="text" id="ddd_cel" name="ddd_cel" size="1" maxlength="2">
						
							<input type="text" id="cel" size="15" name="cel" maxlength="10">
						</td>
					</tr>
					
					
					<tr>			
						<td> 
							<label for="logradouro"> Logradouro: </label>
						</td>
						
						<td colspan="2">
							<input type="text" id="logra" name="logra" size="45">
						</td>
					</tr>
					
					<tr>
					
						<td>
							<label for="cid"> Cidade: </label>
						</td>
																	
						<td>

							<input type="text" id="cid" name="cid" >
						</td>
						
						<td>
							<label for="uf">UF:</label>
						
							<select name="uf"> 
								<option value="ac" class="option">AC</option> 
								<option value="al" class="option">AL</option> 
    							<option value="am">AM</option> 
    							<option value="ap">AP</option> 
    							<option value="ba">BA</option> 
    							<option value="ce">CE</option> 
    							<option value="df">DF</option> 
    							<option value="es">ES</option> 
								<option value="go">GO</option> 
								<option value="ma">MA</option> 
								<option value="mt">MT</option> 
    							<option value="ms">MS</option> 
    							<option value="mg">MG</option> 
    							<option value="pa">PA</option> 
    							<option value="pb">PB</option> 
    							<option value="pr">PR</option> 
    							<option value="pe">PE</option> 
    							<option value="pi">PI</option> 
    							<option value="rj">RJ</option> 
    							<option value="rn">RN</option> 
    							<option value="ro">RO</option> 
    							<option value="rs">RS</option> 
    							<option value="rr">RR</option> 
    							<option value="sc">SC</option> 
    							<option value="se">SE</option> 
    							<option value="sp">SP</option> 
    							<option value="to">TO</option> 
							</select>
						</td>
                        
                        <td>
							<label for="cep"> CEP: </label>
				
							<input type="text" id="cep" size="14" name="cep" maxlength="9">
						</td>
																	
					</tr>
					
					
				</tbody>
				
				<tfoot>
					<tr>
						<!-- criando espaço --><td> </td>
						
						
						<td > 
							<input type="submit" value="Cadastrar" class="btn">
						
						</td>
                        <td > 
							<a href="acesso_usuarios.php"><input type="button" value="Login" class="btn">
						
						</td>
				
					</tr>
				</tfoot>
			</form>
	
		</div>
	
	</body>
	
</html>