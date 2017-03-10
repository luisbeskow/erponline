<!DOCTYPE html>
<html>
	<head>
<?php
include('topo.php');
echo '<title>Alterar entidades</title>';
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
		
				<form action="atualizar_clientes.php" method="post" >
                <?php

				
				$id = $_REQUEST['clienteid'];
				if ($id <>'') 
				{
				include ("classes/conexao.class.php");	
					
				
				$query = mysqli_query($conexao,"SELECT * FROM clientes WHERE id = $id");
                 $row = mysqli_fetch_array($query);					


			echo "<table id='cad_form' cellpadding='10'>	
				
             <thead>
                	

						<tr>
                        <td colspan='2' id='text_descri'> Preencha o formulario de cadastro: </td>
						</tr>
					<!-- pulando linha --><tr> </tr>
					<!-- pulando linha --><tr> </tr>
					<!-- pulando linha --><tr> </tr>
				</thead>
				<tbody>
				
				<tr>
					
						<td> 
							<label for='cpf'>Codigo: </label>
						</td>
						
						<td> 
							<input type='number' name='clienteid' id='clienteid' value='".$row['id']."' readonly>
						</td>
						
					</tr>	
					
					<tr>
					
						<td> 
							<select name='tipo' id='tipo'>
							<option value='".$row['tipo']."'>$row[1]</option>
                           		<option value='CPF'>CPF</option> 
								<option value='CNPJ'>CNPJ</option> 
			                </select>
						</td>
						
						<td> 
							<input type='text' maxlength='18' minlength='14' name='cpfa' id='cpfa' value='".$row['cpf']."'>
						</td>
						<td> 
							<label for='email'> E-mail: </label>
						</td>
						
						<td> 
							<input type='e-mail' name='email' id='email' value='".$row['email']."'>
						</td>
						
					</tr>				
					
					
					<tr>
						<td> 
							<label for='nome'> Nome: </label>
						</td>
						
						<td colspan='6'>
							<input type='text' id='nome' name='nome' size='50' value='".$row['nome']."'>
						</td>
								
					</tr>
	
					
					<tr>
						<td> 
							<label for='telefone'> Telefone: </label>
						</td>
						
						<td>
							<input type='text' id='ddd_tel' name='ddd_tel' size='1' maxlength='2' class='ddd_tel' value='".$row['ddd_tel']."'>
							<input type='text' size='15' id='tel' name='tel' maxlength='9' value='".$row['tel']."'>
						</td>
                        
                        <td> 
							<label for='celular'> Celular: </label>
						</td>
						
						<td>
							<input type='text' id='ddd_cel' name='ddd_cel' size='1' maxlength='2' value='".$row['ddd_cel']."'>
						
							<input type='text' id='cel' size='15' name='cel' maxlength='10' class='cel'value='".$row['cel']."'>
						</td>
					</tr>
					
					
					<tr>			
						<td> 
							<label for='logradouro'> Logradouro: </label>
						</td>
						
						<td colspan='6'>
							<input type='text' id='logra' name='logra' size='50' value='".$row['logra']."'>
						</td>
					</tr>
					
					<tr>
					
						<td>
							<label for='cid'> Cidade: </label>
						</td>
																	
						<td>

							<input type='text' id='cid' name='cid' value='".$row['cid']."'>
						</td>
						
						<td>
							<label for='uf'></label>
						
							<select name='uf'>
								<option value='".$row['uf']."'>$row[uf]</option>  
								<option value='AC'>AC</option> 
								<option value='al'>AL</option> 
    							<option value='am'>AM</option> 
    							<option value='ap'>AP</option> 
    							<option value='ba'>BA</option> 
    							<option value='ce'>CE</option> 
    							<option value='df'>DF</option> 
    							<option value='es'>ES</option> 
								<option value='go'>GO</option> 
								<option value='ma'>MA</option> 
								<option value='mt'>MT</option> 
    							<option value='ms'>MS</option> 
    							<option value='mg'>MG</option> 
    							<option value='pa'>PA</option> 
    							<option value='pb'>PB</option> 
    							<option value='pr'>PR</option> 
    							<option value='pe'>PE</option> 
    							<option value='pi'>PI</option> 
    							<option value='rj'>RJ</option> 
    							<option value='rn'>RN</option> 
    							<option value='ro'>RO</option> 
    							<option value='rs'>RS</option> 
    							<option value='rr'>RR</option> 
    							<option value='sc'>SC</option> 
    							<option value='se'>SE</option> 
    							<option value='sp'>SP</option> 
    							<option value='to'>TO</option> 
							</select>
						</td>
                        
                        <td>
							<label for='cep'> CEP: </label>
				
							<input type='text' id='cep' size='15' maxlenght='9' name='cep' value='".$row['cep']."'>
						</td>
																	
					</tr>
					
					
				</tbody>
				
				<tfoot>
					<tr>
						<td colspan='4' align='center'> 
							<a onClick=\"javascript: return confirm ('Deseja salvar as alteracoes deste cliente?')\" href='atualizar_clientes.php?clienteid=$id'><input type='submit' value='Salvar' class='btn' id='salvar' >
							<a href='consulta_clientes.php'><input type='button' value='Consultar' class='btn' id='consultar'>
		
						</td>
				
					</tr>
				</tfoot>";}
				?>
			</form>
			
	
			</div>
			
		</div>
		
		
		
	</body>
		
</html>