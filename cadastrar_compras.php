<?php
$nome_produto=$_REQUEST["nome_produto"];
$nome_fornecedor=$_REQUEST["nome_fornecedor"];
$quant=$_REQUEST["quant"];
$valor=$_REQUEST["valor"];
$dat=$_REQUEST["dat"];
$descricao=$_REQUEST["descricao"];

$total=$quant*$valor;

include("classes/conexao.class.php");


$SQL="INSERT INTO compras 
(nome_produto,nome_fornecedor,quant,valor,total,dat,descricao) VALUES ('$nome_produto','$nome_fornecedor','$quant','$valor','$total','$dat','$descricao')";
		
if(empty($nome_produto) || $nome_fornecedor=="Selecione" || empty($quant) || empty($valor) || $data=="dd/mm/aaa")
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
		alert('Compra cadastrada com sucesso!');
		window.location.href = 'http://localhost:8080/erponline/consulta_compras.php';
		</script>");
		
	}
	
	

?>


