<?php
	echo '<title>Exclusão de Entidades</title>';
	include "classes/conexao.class.php";

	$id = $_REQUEST['clienteid'];

	if ($id <>'') {
	

		$SQL= "delete from clientes where id = " . $_REQUEST['clienteid']  ;
		
		
if(isset($SQL))
	{		
	$resultado = mysqli_query($conexao,$SQL)  or die(mysqli_error());
		echo ("<script>
		{
		  	alert('Cliente excluido com sucesso!')
  			window.parent.location='http://localhost:8080/erponline/consulta_clientes.php';
  		}		
			</script>");

	} 
	
else 

	{
		echo "Houve um erro na exclusao do cliente";
		echo "<br><br><a href='javascript:window.history.go(-1)'>Voltar</a><br><br>";
	}
}
?>

