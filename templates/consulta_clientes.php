<!DOCTYPE html>
<html>

<head>
<?php
include('topo.php');
echo "<title>Consulta de entidades</title>";
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
			location.href='consulta_clientes.php'
			</script>");
		}
		
		
		else
		{
			$SQL= "SELECT * FROM clientes WHERE $cate LIKE '$pesquisa%'";
			$resultado = mysqli_query($conexao,$SQL);
			$contar=mysqli_num_rows($resultado);
			
			if($contar == 0)
			{
				echo
				("<script>alert('Não foi encontrado nenhuma entidade na pesquisa!');
				location.href='consulta_clientes.php'
				</script>");
			}
			
		}
	}
	
	
	
	else
	{
		$SQL= "Select * from clientes";
		$resultado = mysqli_query($conexao,$SQL) or die(mysqli_error($conexao));
		$contar=mysqli_num_rows($resultado);
		if($contar == 0)
		{
			echo
			("<script>alert('Não há nenhuma entidade cadastrado!');
			</script>");
		}
	}

echo "
<div id='conteudo'>
  <div id='imagem'>
<img src='img/entidades.png' width='100%'>
			</div>
			
			<div>

<form method='post' action='consulta_clientes.php?acao=pesquisar' class='pesquisa_campo'>  <!-- a class pesquisa_campo é apenas para linkar o css --> 
<table border='0'>
<tr>
<td><input type='submit' value='Pesquisar' id='btn_pesquisa'></td>
<td><select name='cate' id='cate' id='selecionar_pesquisa'> 
								<option value='nome'>Nome</option>
								<option value='CPF'>CPF</option>
								<option value='CPF'>CNPJ</option>
								<option value='email'>E-mail</option>
								<option value='tel'>Telefone</option>
								<option value='cel'>Celular</option>
								<option value='logra'>Logradouro</option>
								<option value='cid'>Cidade</option>
								<option value='uf'>UF</option>
								<option value='cep'>Cep</option>
								</td>
								
<td><input type='text' size='50' id='pesquisa' name ='pesquisa' class='pesquisa'></td>
</tr>
</table>
</form>

<br/>
<table border='1' width = '100%' id='formulario_alterar'>
				<tr>
				
	      <th>Codigo</th>
		  <th>Tipo</th>
	      <th>CPF</th>
		  <th>Email</th>
	      <th>Nome</th>
		  <th>DDD</th>
		  <th>Telefone</th>
		  <th>DDD</th>
		  <th>Celular</th>
		  <th>Logradouro</th>
		  <th>Cidade</th>
		  <th>UF</th>
		  <th>CEP</th>
		  <th colspan='2'>Operacoes</th>
	      </tr>";


while ($retorno = mysqli_fetch_assoc($resultado))
	{ 
		
		echo "</td><td>";
		echo $retorno["id"];
		echo "</td><td>";
		echo $retorno["tipo"];
		echo "</td><td>";
		echo $retorno["cpf"];
		echo "</td><td>";
		echo $retorno["email"];
		echo "</td><td>";
		echo $retorno["nome"];
		echo "</td><td>";
		echo $retorno["ddd_tel"];
		echo "</td><td>";
		echo $retorno["tel"];
		echo "</td><td>";
		echo $retorno["ddd_cel"];
		echo "</td><td>";
		echo $retorno["cel"];
		echo "</td><td>";
		echo $retorno["logra"];
		echo "</td><td>";
		echo $retorno["cid"];
		echo "</td><td>";
		echo $retorno["uf"];
		echo "</td><td>";
		echo $retorno["cep"];
		echo "</td><td>";
		echo "<a href='altera_clientes.php?clienteid=$retorno[id]' class='link'>Alterar</a>";
		echo "</td><td>";
		echo "<a onClick=\"javascript: return confirm ('Deseja excluir esta entidade?')\" href='excluir_clientes.php?clienteid=$retorno[id]' class='link'>Excluir</a>";	
		echo "</td></tr>";	

	}


	mysqli_free_result($resultado);
	echo "</table><br>
	</div>";
	
	
?>
<div align='center' id='button'>
<a href="cadastro_clientes.php"><input type="button" value="Cadastro" class="btn" id="btn">
<a href="sistema.php"><input type="button" value="Inicio" class="btn" id="btn">
</a>
	
	</table>


</body>
</html>