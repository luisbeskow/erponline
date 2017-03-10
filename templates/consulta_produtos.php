<!DOCTYPE html>
<html>

<head>
<?php
include('topo.php');
echo "<title>Consulta de Produtos</title>";
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
			location.href='consulta_produtos.php'
			</script>");
		}
		
		
		else
		{
			$SQL= "SELECT * FROM produtos WHERE $cate LIKE '$pesquisa%'";
			$resultado = mysqli_query($conexao,$SQL);
			$contar=mysqli_num_rows($resultado);
			
			if($contar == 0)
			{
				echo
				("<script>alert('Não foi encontrado nenhum produto na pesquisa!');
				location.href='consulta_produtos.php'
				</script>");
			}
			
		}
	}
	
	
	
	else
	{
		$SQL= "Select * from produtos";
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

<form method='post' action='consulta_produtos.php?acao=pesquisar' class='pesquisa_campo'>  <!-- a class pesquisa_campo é apenas para linkar o css --> 
<table border='0'>
<tr>
<td><input type='submit' value='Pesquisar' id='btn_pesquisa'></td>
<td><select name='cate' id='cate' id='selecionar_pesquisa'> 
								<option value='produto'>Produto</option>
								<option value='tecido'>Tecido</option>
								<option value='modelo'>Modelo</option>
								<option value='cor'>Cor</option>
								<option value='marca'>Marca</option>
								<option value='tamanho'>Tamanho</option>
								<option value='descricao'>Descricao</option>
								</td>
								
<td><input type='text' size='50' id='pesquisa' name ='pesquisa' class='pesquisa'></td>
</tr>
</table>
</form>

<br/>
<table border='1' width = '100%' id='formulario_alterar'>
				<tr>
		  <th>Sel.</th>
	      <th>Codigo</th>
		  <th>Produto</th>
	      <th>Tecido</th>
		  <th>Modelo</th>
	      <th>Cor</th>
	      <th>Marca</th>
	      <th>Tamanho</th>
		  <th>Descricao</th>
		  <th colspan='2'>Operacoes</th>
	      </tr>";


while ($retorno = mysqli_fetch_assoc($resultado)) 
	{ 
		echo "</td><td>";
		echo "<a href='cadastro_compras.php?produtoid=$retorno[id]' class='link'>Sel.</a>";	
		echo "</td><td>";
		echo $retorno["id"];
		echo "</td><td>";
		echo $retorno["produto"];
		echo "</td><td>";
		echo $retorno["tecido"];
		echo "</td><td>";
		echo $retorno["modelo"];
		echo "</td><td>";
		echo $retorno["cor"];
		echo "</td><td>";
		echo $retorno["marca"];
		echo "</td><td>";
		echo $retorno["tamanho"];
		echo "</td><td>";
		echo $retorno["descricao"];
		echo "</td><td>";
		echo "<a href='altera_produtos.php?produtoid=$retorno[id]' class='link'>Alterar</a>";
		echo "</td><td>";
		echo "<a onClick=\"javascript: return confirm ('Deseja excluir este produto?')\" href='excluir_produtos.php?produtoid=$retorno[id]' class='link'>Excluir</a>";	
		echo "</td></tr>";	

	}


	mysqli_free_result($resultado);
	echo "</table><br>
	</div>";
	
	
?>
<div align='center' id='button'>
<a href="cadastro_produtos.php"><input type="button" value="Cadastro" class="btn" id="btn">
<a href="sistema.php"><input type="button" value="Inicio" class="btn" id="btn">
</a>
	
	</table>


</body>
</html>