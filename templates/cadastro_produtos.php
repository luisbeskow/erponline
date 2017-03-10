<!DOCTYPE html>
<html>
<head>
<?php
include("topo.php");
echo "<title>Produtos</title>";
?>

		<script src="jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="jquery.maskedinput.js" type="text/javascript"></script>
        <script src="mascaras.js" type="text/javascript"></script>
		 <script src="scrollto.js" type="text/javascript"></script>
</head>
		
		<div id="conteudo">
		
			<div id="imagem">
				<img src="img\produto.png" width="100%">
			</div>
			
			<div id="formulario">
		
				<form action="cadastrar_produtos.php" method="post" >


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
							<label for="produto"> Produto: </label>
						</td>
						
						<td>
							<select name="produto" id="produto" required> 
                            	<option value="Calca">Calca</option> 
                                <option value="Calcao">Calcao</option>
                                <option value="Calcinha">Calcinha</option>	
                                <option value="Camisa">Camisa</option>
								<option value="Camiseta">Camiseta</option>  
                                <option value="Cueca">Cueca</option> 
                                <option value="Meia">Meia</option>  
                                <option value="Vestido">Vestido</option>
							</select>
						</td>
					
						<td> 
							<label for="tecido">Tecido: </label>
						</td>
						
						<td>
							<input type="text" id="tecido" name="tecido" required>
						</td>
						
					</tr>
						
					<tr>
                    <td> 
							<label for="modelo">Modelo: </label>
						</td>
						
						<td>
							<input type="text" id="modelo" name="modelo" required>
						</td>
                 <td> 
							<label for="cor"> Cor: </label>
						</td>
						
						<td>
			
							<select name="cor" id="cor" required> 
                            	<option value="Branco">Branco</option>
                                <option value="Preto">Preto</option>
								<option value="Amarelo">Amarelo</option> 
								<option value="Azul">Azul</option> 
    							<option value="Vermelho">Vermelho</option> 
    							<option value="Laranja">Laranja</option> 
    							<option value="Violeta">Violeta</option>  
                                <option value="Verde">Verde</option>
							</select>
						</td>

					</tr>
                    <tr>
                    <td> 
							<label for="marca">Marca: </label>
						</td>
						
						<td>
							<input type="text" id="marca" name="marca" required>
						</td>
							
                         <td>
                         <label for="tamanho"> Tamanho: </label>   
						</td>
						
						<td>
			
							<select name="tamanho" id="tamanho" required> 
								<option value="PP">PP</option> 
								<option value="P">P</option> 
    							<option value="M">M</option> 
    							<option value="G">G</option> 
    							<option value="GG">GG</option>  
							</select>
						</td>
              

					<tr>
						<td colspan="4"> 
							<label for="descricao"> Descri&ccedil;&atilde;o: </label> <br/>
						
							<textarea id="descricao" name="descricao" cols="80" rows="5"></textarea>
							
							
						</td>
                        				
					</tr>

				</tbody>
				
				<tfoot>
					<tr>
 
							<td align="center" colspan="4"> 
							<input type="submit" value="Cadastrar" class="btn" id="cadastrar" >			 						
							<a href="consulta_produtos.php"><input type="button" value="Consultar" class="btn" id="consultar">
						</td>
					</tr>
				</tfoot>
			</form>
			
	
			</div>
			
		</div>
		
		
		
	</body>
		
</html>