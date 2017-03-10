<!DOCTYPE html>
<html>
<head>
<?php
include('topo.php');


echo '<title>Entidades</title>';


?>

		<script src="jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="jquery.maskedinput.js" type="text/javascript"></script>
        <script src="mascaras.js" type="text/javascript"></script>
		 <script src="scrollto.js" type="text/javascript"></script>
</head>
		
		<div id="conteudo">
		
			<div id="imagem">
				<img src="img\entidades.png" width="100%">
			</div>
			
			<div id="formulario">
		
				<form action="cadastrar_clientes.php" method="post" >


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
							<select name="tipo" id="tipo">
                           		<option value="CPF">CPF</option> 
								<option value="CNPJ">CNPJ</option> 
			                </select>
						</td>
						
						
						<td> 
							<input type="text" maxlength="18" minlength="14" name="cpf" id="cpf">
						</td>
						<td> 
							<label for="email"> Email: </label>
						</td>
						
						<td>
							<input type="email" id="email" name="email">
						</td>
				
						
					</tr>				
					
					
					<tr>
						<td> 
							<label for="usuario"> Nome: </label>
						</td>
						
						<td colspan="4">
							<input type="text" id="nome" name="nome" size="50">
						</td>
					
				
					</tr>
		
	
					<tr>
						<td> 
							<label for="telefone"> Telefone: </label>
						</td>
						
						<td>
							<input type="text" id="ddd_tel" name="ddd_tel" size="1" maxlength="2" class="ddd_	tel">
							<input type="text" size="15" id="tel" name="tel" maxlength="8">
						</td>
                        
                        <td> 
							<label for="celular"> Celular: </label>
						</td>
						
						<td>
							<input type="text" id="ddd_cel" name="ddd_cel" size="1" maxlength="2">
						
							<input type="text" id="cel" size="15" name="cel" maxlength="9" class="cel">
						</td>
					</tr>
					
					
					<tr>			
						<td> 
							<label for="logradouro"> Logradouro: </label>
						</td>
						
						<td colspan="6">
							<input type="text" id="logra" name="logra" size="50">
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
							<label for="uf"></label>
						
							<select name="uf"> 
								<option value="AC">AC</option> 
								<option value="AL">AL</option> 
    							<option value="AM">AM</option> 
    							<option value="AP">AP</option> 
    							<option value="BA">BA</option> 
    							<option value="CE">CE</option> 
    							<option value="DF">DF</option> 
    							<option value="ES">ES</option> 
								<option value="GO">GO</option> 
								<option value="MA">MA</option> 
								<option value="MT">MT</option> 
    							<option value="MS">MS</option> 
    							<option value="MG">MG</option> 
    							<option value="PA">PA</option> 
    							<option value="PB">PB</option> 
    							<option value="PR">PR</option> 
    							<option value="PE">PE</option> 
    							<option value="PI">PI</option> 
    							<option value="RJ">RJ</option> 
    							<option value="RR">RN</option> 
    							<option value="RO">RO</option> 
    							<option value="RS">RS</option> 
    							<option value="R">RR</option> 
    							<option value="SC">SC</option> 
    							<option value="SE">SE</option> 
    							<option value="SP">SP</option> 
    							<option value="TO">TO</option> 
							</select>
						</td>
                        
                        <td>
							<label for="cep"> CEP: </label>
				
							<input type="text" id="cep" size="15" maxlength="9" name="cep">
						</td>
																	
					</tr>
					
					
				</tbody>
				
				<tfoot>
					<tr>
						<td align='center' colspan="4"> 
							<input type="submit" value="Cadastrar" class="btn" id="cadastrar" >			 						
							<a href="consulta_clientes.php"><input type="button" value="Consultar" class="btn" id="voltar">
						</td>
				
					</tr>
				</tfoot>
			</form>
			
	
			</div>
			
		</div>
		
		
		
	</body>
		
</html>