<?php
$id = $_REQUEST['produtoid'];
if ($id <>'') 
{
$produto=$_REQUEST["produto"];
$tecido=$_REQUEST["tecido"];
$modelo=$_REQUEST["modelo"];
$cor=$_REQUEST["cor"];
$marca=$_REQUEST["marca"];
$tamanho=$_REQUEST["tamanho"];
$descricao=$_REQUEST["descricao"];


include ("classes/conexao.class.php");

$SQL="update produtos set produto='$produto', tecido='$tecido', modelo='$modelo', cor='$cor', marca='$marca', tamanho='$tamanho', descricao='$descricao' where produtos.id =".$id;

	if(isset($SQL))
	{
		$resultado=mysqli_query($conexao,$SQL) or die(mysqli_error($conexao));
		echo ("<script>
		{	
		alert('Produto alterado com Sucesso');
		location.href='consulta_produtos.php';
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


