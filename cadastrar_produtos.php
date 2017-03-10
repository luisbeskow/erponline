<?php
$produto=$_REQUEST["produto"];
$tecido=$_REQUEST["tecido"];
$modelo=$_REQUEST["modelo"];
$cor=$_REQUEST["cor"];
$marca=$_REQUEST["marca"];
$tamanho=$_REQUEST["tamanho"];
$descricao=$_REQUEST["descricao"];

include("classes/conexao.class.php");


$SQL="INSERT INTO produtos 
(produto,tecido,modelo,cor,marca,tamanho,descricao) VALUES ('$produto','$tecido','$modelo','$cor','$marca','$tamanho','$descricao')";
		
if(empty($produto) || empty($tecido) || empty($modelo) || empty($cor) || empty($marca) || empty($tamanho))
{
	echo
	("<script>alert('Por favor, preencha todos os campos!');
	javascript:window.history.go(-1);
	</script>");
}

		
else 
{
		$resultado = mysqli_query($conexao,$SQL) or die(mysqli_error($conexao));
		echo
		("<script> 
		alert('Produto cadastrado com sucesso!');
		window.location.href = 'http://localhost:8080/erponline/consulta_produtos.php';
		</script>");
		
	}
	
	

?>


