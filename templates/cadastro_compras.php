<!DOCTYPE html>
<html>
<head>
<?php
include("topo.php");
echo "<title>Cadastro de compras</title>";
ini_set("display_errors", 0 );
error_reporting(0);
?>

		<script src="jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="jquery.maskedinput.js" type="text/javascript"></script>
        <script src="mascaras.js" type="text/javascript"></script>
		 <script src="scrollto.js" type="text/javascript"></script>
         
</head>
		
		
	<body>
	
		<div id="conteudo">
		
			<div id="imagem">
				<img src="img\compras.png" width="100%">
			</div>
			
			<div id="formulario">
		
				<form action="cadastrar_compras.php" method="post" >
                <?php
				$clienteid = $_REQUEST["clienteid"];
				$produtoid = $_REQUEST["produtoid"];

				include ("classes/conexao.class.php");	
					
				$queryprodutos = mysqli_query($conexao,"SELECT * FROM produtos WHERE id = $produtoid");
				 $rowprodutos = mysqli_fetch_array($queryprodutos);
				
				$queryclientes = mysqli_query($conexao,"SELECT * FROM clientes");
				
				?>


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
							<label for="fornecedor"><strong>Produto:</strong> </label>
						</td>
                        
                        <td> 
							<a href="consulta_produtos.php"><input type="button" value="Selecione"></a>
                              <input type="text" size="4" readonly value="<?php echo $rowprodutos['nome_fornecedor'];?>"> <label for="nome_fornecedor">Nome:</label>
						</td>
						
						<td colspan="4">
 
                        <input readonly type="text" id="nome_produto" name="nome_produto" size="34" value="<?php echo $rowprodutos['produto'].' '.$rowprodutos['tecido'].' '.$rowprodutos['modelo'].' '.$rowprodutos['cor'].' '.$rowprodutos['marca'].' '.$rowprodutos['tamanho']?>">
                        
						</td>
						
					</tr>
                    
                          <tr>

                            <td> 
							<label for="nome_fornecedor">Nome <strong>fornecedor:</strong> </label>
						</td>
						
						<td colspan="3">
						<select name="nome_fornecedor" id="nome_fornecedor">
                        <option value="Selecione">Selecione</option>
						<?php while ($rowclientes = mysqli_fetch_array($queryclientes)){?>
					    <option value="<?php echo $rowclientes['id'].' '.$rowclientes['nome'].' '.$rowclientes['cpf']?>"><?php echo $rowclientes['id'].' - '.$rowclientes['nome'].' - '.$rowclientes['cpf']?></option><?php } ?>
                            </select>
						</td>
						
						
					</tr>

					<tr>
						<td>
                        <label for="quant"> Quantidade: </label> 
					
						</td>
						
						<td>
							
                            <input type="number" min="1" id="quant" name="quant"  required>
						</td>
						
						<td> 
							<label for="valor"> Valor Unitário: </label>
						</td>
						
						<td>
							<input type="number" id="valor" name="valor">

						</td>
						
					</tr>
					
					
					
					<tr>
					
						<td> 
							<label for="dat"> Data da Compra: </label>
						</td>
						
						<td> 
							<input type="date" name="dat" id="dat" required>
						</td>
                        				
					</tr>
					
					<tr>
						<td colspan="4"> 
							<label for="descrição"> Descri&ccedil;&atilde;o: </label> <br/>
						
							<textarea cols="80" rows="5"></textarea>
							
							
						</td>
                        				
					</tr>
	
				</tbody>
				
				<tfoot>
					<tr>
 
							<td align="center" colspan="4"> 
							<input type="submit" value="Cadastrar" class="btn" id="cadastrar" >			 						
							<a href="consulta_compras.php"><input type="button" value="Consultar" class="btn" id="consultar">
						</td>
				
					</tr>
				</tfoot>

			</form>
			
	
			</div>
			
		</div>
		
		
		
	</body>
		
</html>