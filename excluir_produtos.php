<?php
	echo '<title>Exclusão de Produtos</title>';
	include "classes/conexao.class.php";

	$id = $_REQUEST['produtoid'];

	if ($id <>'') {
	

		$SQL= "delete from produtos where id = " . $_REQUEST['produtoid']  ;
		
		
if(isset($SQL))
	{		
	$resultado = mysqli_query($conexao,$SQL)  or die(mysqli_error($conexao));
		echo ("<script>
		{
		  	alert('Produto excluido com sucesso!')
  			window.parent.location='http://localhost:8080/erponline/consulta_produtos.php';
  		}		
			</script>");

	} 
	
else 

	{
		echo "Houve um erro na exclusao do produto";
		echo "<br><br><a href='javascript:window.history.go(-1)'>Voltar</a><br><br>";
	}
}
?>

