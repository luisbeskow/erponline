<?php
$id = $_REQUEST['clienteid'];
if ($id <>'') 
{
$tipo=$_REQUEST["tipo"];
$cpf=$_REQUEST["cpfa"];
$email=$_REQUEST["email"];
$nome=$_REQUEST["nome"];
$ddd_tel=$_REQUEST["ddd_tel"];
$tel=$_REQUEST["tel"];
$ddd_cel=$_REQUEST["ddd_cel"];
$cel=$_REQUEST["cel"];
$logra=$_REQUEST["logra"];
$cid=$_REQUEST["cid"];
$uf=$_REQUEST["uf"];
$cep=$_REQUEST["cep"];


include ("classes/conexao.class.php");

$validarcpf=mysqli_query($conexao,"select * from clientes where cpf='$cpf'");
		$contar=mysqli_num_rows($validarcpf);
		if($contar<=1)
		{	
$SQL="update clientes set tipo = '$tipo',cpf = '$cpf',email='$email',nome='$nome',ddd_tel='$ddd_tel',tel='$tel',ddd_cel='$ddd_cel',cel='$cel',logra='$logra',cid='$cid',uf='$uf',cep='$cep' where clientes.id =".$id;

	if(isset($SQL))
	{
		$resultado=mysqli_query($conexao,$SQL);
		echo ("<script>
		{	
		alert('Entidade alterada com Sucesso');
		location.href='consulta_clientes.php';
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


else
{
	echo ("<script>
		{	
		alert('Ja existe outro CPF/CNPJ nao cadastro!');
		javascript:window.history.go(-1);
		}
		</script>");
}
}

?>


