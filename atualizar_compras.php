<?php
$id = $_REQUEST['compraid'];
if ($id <>'') 
{
$nome_produto=$_REQUEST["nome_produto"];
$nome_fornecedor=$_REQUEST["nome_fornecedor"];
$quant=$_REQUEST["quant"];
$valor=$_REQUEST["valor"];
$dat=$_REQUEST["dat"];
$descricao=$_REQUEST["descricao"];


include ("classes/conexao.class.php");

$SQL="update compras set nome_produto='$nome_produto', nome_fornecedor='$nome_fornecedor', quant='$quant', valor='$valor', data='$data', descricao='$descricao' where compras.id =".$id;

	if(isset($SQL))
	{
		$resultado=mysqli_query($conexao,$SQL) or die(mysqli_error($conexao));
		echo ("<script>
		{	
		alert('Compra alterada com Sucesso');
		location.href='consulta_compras.php';
		}
		</script>");
	}
	
	else
	{
		echo ("<script>
		{	
		alert('Houve um erro na alteração!');
		javascript:window.history.go(-1);
		}
		</script>");
	}
		

 }



?>


