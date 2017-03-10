<html>
<head>
<?php
include('topo.php');
echo '<title>Alterar Compras</title>';
?>

	<script src='jquery-3.1.1.min.js' type='text/javascript'></script>
    <script src='jquery.maskedinput.js' type='text/javascript'></script>
    <script src='mascaras.js' type='text/javascript'></script>
     <script src='scrollto.js' type='text/javascript'></script>
    </head>
    
     <body>
	<div id='conteudo'>
		
			<div id='imagem'>
				<img src='img\produto.png' width='100%'>
			</div>
			
			<div id='formulario'>
		
				<form action='atualizar_compras.php' method='post' >
                <?php

				
				$id = $_REQUEST['compraid'];
				if ($id <>'') 
				{
				include ('classes/conexao.class.php');	
					
				
				$querycompras = mysqli_query($conexao,"SELECT * FROM compras WHERE id = $id");
                $rowcompras = mysqli_fetch_row($querycompras);
				
				 
				 $queryclientes = mysqli_query($conexao,"SELECT * FROM clientes");?>					


			<table id="cad_form" cellpadding="10">			
				
                <thead>
                	

						<tr>
                        <td colspan="2" id="text_descri">  </td>
						</tr>
					<!-- pulando linha --><tr> </tr>
					<!-- pulando linha --><tr> </tr>
					<!-- pulando linha --><tr> </tr>
				</thead>
				<tbody>
			
            			<tr>

						<td> 
							<label for="codigo">Codigo:</label>
						</td>
                 
						<td colspan="6">
 
                        <input type="text" id="compraid" name="compraid" size="59" value="<?php echo $rowcompras[0] ?>" readonly>
                        
						</td>
						
					</tr>
				
                    <tr>

						<td> 
							<label for="fornecedor">Nome <strong>Produto:</strong> </label>
						</td>
                 
						<td colspan="6">
 
                        <input readonly type="text" id="nome_produto" name="nome_produto" size="59" value="<?php echo $rowcompras[1] ?>">
                        
						</td>
						
					</tr>
                    
                          <tr>

                            <td> 
							<label for="nome_fornecedor">Nome <strong>fornecedor:</strong> </label>
						</td>
						
						<td colspan="3">
						<select name="nome_fornecedor" id="nome_fornecedor">
                        <option value="<?php echo $rowcompras[2] ?>"><?php echo $rowcompras[2] ?></option>
                        
						<?php while ($rowclientes = mysqli_fetch_array($queryclientes)){?>
					    <option value="<?php echo $rowclientes[3].' '.$rowclientes[4].' - '.$rowclientes[2]?>"><?php echo $rowclientes[3].' '.$rowclientes[4].' - '.$rowclientes[2] ?> </option> <?php } ?>
                           </select> 
						</td>
					
					</tr>

					<tr>
						<td>
                        <label for="quant"> Quantidade: </label> 
					
						</td>
						
						<td>
							
                            <input type="number" min="1" id="quant" name="quant" value="<?php echo $rowcompras[3] ?>" required>
						</td>
						
						<td> 
							<label for="valor"> Valor Unitário: </label>
						</td>
						
						<td>
							<input type="number" id="valor" name="valor" min="1" value="<?php echo $rowcompras[4] ?>" required>

						</td>
						
					</tr>
					
					
					
					<tr>
					
						<td> 
							<label for="dat"> Data da Compra: </label>
						</td>
						
						<td> 
							<input type="date" name="dat" id="dat" value="<?php echo $rowcompras[6] ?>" required>
						</td>
                        				
					</tr>
					
					<tr>
						<td colspan="4"> 
							<label for="descrição"> Descri&ccedil;&atilde;o: </label> <br/>
						
							<textarea cols="80" rows="5" name="descricao" id="descricao"> <?php echo $rowcompras[7] ?> </textarea>

						</td>
                        				
					</tr>

				</tbody>
				
				<tfoot>
					<tr>
 							<td colspan='4' align='center'> 
							<a onClick=\"javascript: return confirm ('Deseja salvar as alteracoes desta compra?')\" href='atualizar_compras.php?compraid=$id'><input type='submit' value='Salvar' class='btn' id='salvar' ></a>
							<a href='consulta_compras.php'><input type='button' value='Consultar' class='btn' id='consultar'></a>
						</td>
					</tr>
				
				</tfoot><?php }?>
				</table>
			</form>

			</div>
			
		</div>

	</body>
		
</html>