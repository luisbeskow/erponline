<?php
	echo '<title>Exclusão de Compras</title>';
	include "classes/conexao.class.php";

	$id = $_REQUEST['compraid'];

	if ($id <>'') {
	

		$SQL= "delete from compras where id = " . $_REQUEST['compraid']  ;
		
		
if(isset($SQL))
	{		
	$resultado = mysqli_query($conexao,$SQL)  or die(mysqli_error($conexao));
		echo ("<script>
		{
		  	alert('Compra excluida com sucesso!')
  			window.parent.location='http://localhost:8080/erponline/consulta_compras.php';
  		}		
			</script>");

	} 
	
else 

	{
		echo "Houve um erro na exclusao da compra";
		echo "<br><br><a href='javascript:window.history.go(-1)'>Voltar</a><br><br>";
	}
}
?>

