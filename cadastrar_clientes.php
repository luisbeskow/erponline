<?php
$tipo=$_REQUEST["tipo"];
$cpf=$_REQUEST["cpf"];
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


include("classes/conexao.class.php");

$validarcpf=mysqli_query($conexao,"select * from clientes where cpf='$cpf'");
		$contar=mysqli_num_rows($validarcpf);
		if($contar==0)
		{	

$SQL="insert into clientes (tipo,cpf,email,nome,ddd_tel,tel,ddd_cel,cel,logra,cid,uf,cep) values ('$tipo','$cpf','$email','$nome','$ddd_tel','$tel','$ddd_cel','$cel','$logra','$cid','$uf','$cep')";

		
if(empty($tipo) || empty($cpf) ||empty($email) || empty($nome) || empty($ddd_tel)||empty($tel)||empty($ddd_cel)||empty($cel)||empty($logra)||empty($cid)||empty($uf)||empty($cep)) 
{
	echo
	("<script>alert('Por favor, preencha todos os campos!');
	javascript:window.history.go(-1);
	</script>");
}

		
else 
{
	if(filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		
		$resultado = mysqli_query($conexao,$SQL) or die(mysqli_error($conexao));
		echo
		("<script> 
		alert('Cadastro realizado com sucesso!');
		window.location.href = 'http://localhost:8080/erponline/consulta_clientes.php';
		</script>");
		
	}

	else
	{
		echo
		("<script> 
		alert('Email invalido!');
		javascript:window.history.go(-1);
		</script>");
	}
}
}

else
{
	echo
		("<script> 
		alert('Esse cliente ja está cadastrado!');
		javascript:window.history.go(-1);
		</script>");
}
	
	

?>


