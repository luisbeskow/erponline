<!DOCTYPE html>
<html>

<head>
<?php
include('topo.php');
echo "<title>Consulta de Compras</title>";
ini_set('display_errors', 0 );
error_reporting(0);
?>


	<link rel="stylesheet" type="text/css" href="sistema.css"/>
	<script src="jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="jquery.maskedinput.js" type="text/javascript"></script>
        <script src="mascaras.js" type="text/javascript"></script>
        <script src="scrollto.js" type="text/javascript"></script>

</head>
<body>
<?php

	include "classes/conexao.class.php";
	$acao = $_REQUEST['acao'];

	if ($acao == 'pesquisar')
	{
		$cate=$_REQUEST["cate"];
		$pesquisa=$_REQUEST["pesquisa"];
		if(empty($pesquisa))
		{
			echo
			("<script>alert('Favor preencha os campo de pesquisa!');
			location.href='consulta_compras.php'
			</script>");
		}
		
		
		else
		{
			$SQL= "SELECT * FROM compras WHERE $cate LIKE '$pesquisa%'";
			$resultado = mysqli_query($conexao,$SQL);
			$contar=mysqli_num_rows($resultado);
			
			if($contar == 0)
			{
				echo
				("<script>alert('Não foi encontrado nenhum produto na pesquisa!');
				location.href='consulta_compras.php'
				</script>");
			}
			
		}
	}
	
	
	
	else
	{
		$SQL= "Select * from compras";
		$resultado = mysqli_query($conexao,$SQL) or die(mysqli_error($conexao));
		$contar=mysqli_num_rows($resultado);
		if($contar == 0)
		{
			echo
			("<script>alert('Não há nenhum produto cadastrado!');
			</script>");
		}
	}

echo "
<div id='conteudo'>
  <div id='imagem'>
<img src='img/entidades.png' width='100%'>
			</div>
			
			<div>

<form method='post' action='consulta_compras.php?acao=pesquisar' class='pesquisa_campo'>  <!-- a class pesquisa_campo é apenas para linkar o css --> 
<table border='0'>
<tr>
<td><input type='submit' value='Pesquisar' id='btn_pesquisa'></td>
<td><select name='cate' id='cate' id='selecionar_pesquisa'> 
								<option value='nome_produto'>Produto</option>
								<option value='nome_fornecedor'>Fornecedor</option>
								<option value='quant'>Quantidade</option>
								<option value='valor'>Valor Unitario</option>
								<option value='total'>Valor total</option>
								<option value='dat'>Data</option>
								<option value='descricao'>Descricao</option>
								</td>
								
<td><input type='text' size='50' id='pesquisa' name ='pesquisa' class='pesquisa'></td>
</tr>
</table>
</form>

<br/>
<table border='1' width = '100%' id='formulario_alterar'>
				<tr>
	      <th>Codigo</th>
		  <th>Produto</th>
	      <th>Fornecedor</th>
		  <th>Quantidade</th>
	      <th>Valor unitario</th>
	      <th>Valor Total</th>
	      <th>Data</th>
		  <th>Descricao</th>
		  <th colspan='2'>Operacoes</th>
	      </tr>";


while ($retorno = mysqli_fetch_assoc($resultado)) 
	{ 

		echo "</td><td>";
		echo $retorno["id"];
		echo "</td><td>";
		echo $retorno["nome_produto"];
		echo "</td><td>";
		echo $retorno["nome_fornecedor"];
		echo "</td><td>";
		echo $retorno["quant"];
		echo "</td><td>";
		echo $retorno["valor"];
		echo "</td><td>";
		echo $retorno["total"];
		echo "</td><td>";
		echo $retorno["dat"];
		echo "</td><td>";
		echo $retorno["descricao"];
		echo "</td><td>";
		echo "<a href='altera_compras.php?compraid=$retorno[id]' class='link'>Alterar</a>";
		echo "</td><td>";
		echo "<a onClick=\"javascript: return confirm ('Deseja excluir esta compra?')\" href='excluir_compras.php?compraid=$retorno[id]' class='link'>Excluir</a>";	
		echo "</td></tr>";	

	}


	mysqli_free_result($resultado);
	echo "</table><br>
	</div>";
	
	
?>
<div align='center' id='button'>
<a href="cadastro_compras.php"><input type="button" value="Cadastro" class="btn" id="btn">
<a href="sistema.php"><input type="button" value="Inicio" class="btn" id="btn">
</a>
	
	</table>


</body>
</html>