<?php



class cadastro
{
	public function cadastrar($usuario,$email,$senha,$nome,$sobrenome,$nasc,$sexo,$ddd_tel,$tel,$ddd_cel,$cel,$logra,$cid,$uf,$cep)
	{

	
		
		//insersao ao banco de dados
		
		include("classes/conexao.class.php");	
		
$validarusuario=mysqli_query($conusuario,"select * from usuario where usuario='$usuario'");
		$contaru=mysqli_num_rows($validarusuario);
		if($contaru==0)
		{	
			$validaremail=mysqli_query($conusuario,"select * from usuario where email='$email'");
			$contare=mysqli_num_rows($validaremail);
			if($contare==0)
			{
			
			$insert=mysqli_query($conusuario,"INSERT INTO usuario(usuario,email,senha,nome,sobrenome,nasc,sexo,ddd_tel,tel,ddd_cel,cel,logra,cid,uf,cep,nivel,status)VALUES('$usuario','$email','$senha','$nome','$sobrenome','$nasc','$sexo','$ddd_tel','$tel','$ddd_cel','$cel','$logra','$cid','$uf','$cep',1,0)") or die (mysqli_error($conusuario));
			
			// cria o banco de dados do usuario
			$criadb=mysqli_multi_query($conecta,
  		"CREATE DATABASE ".$usuario.";						
  		USE ".$usuario.";						
  		CREATE TABLE clientes (
  		id int(11) NOT NULL AUTO_INCREMENT,
  		tipo varchar(4) NOT NULL,
  		cpf varchar(18) NOT NULL,
  		email varchar(100) NOT NULL,
  		nome varchar(100) NOT NULL,
  		ddd_tel int(2) NOT NULL,
  		tel varchar(9) NOT NULL,
  		ddd_cel int(2) NOT NULL,
  		cel varchar(10) NOT NULL,
  		logra varchar(100) NOT NULL,
  		cid varchar(100) NOT NULL,
  		uf varchar(2) NOT NULL,
  		cep varchar(9) NOT NULL,
  		PRIMARY KEY (id)
		);


		CREATE TABLE compras (
  		id int(11)  NOT NULL AUTO_INCREMENT,
  		nome_produto varchar(100) NOT NULL,
  		nome_fornecedor varchar(100) NOT NULL,
  		quant int(11) NOT NULL,
  		valor varchar(8) NOT NULL,
  		total varchar(10) NOT NULL,
  		dat date NOT NULL,
  		descricao text,
  		PRIMARY KEY  (id)
		);


		CREATE TABLE produtos (
  		id int(11) NOT NULL AUTO_INCREMENT ,
  		produto varchar(50) NOT NULL,
  		tecido varchar(50) NOT NULL,
  		modelo varchar(50) NOT NULL,
  		cor varchar(50) NOT NULL,
  		marca varchar(100) NOT NULL,
  		tamanho varchar(2) NOT NULL,
  		descricao text,
  		PRIMARY KEY (id))") or die (mysqli_error($conecta));
		mysqli_close($conecta);
			}
			
			else
			{
			$flash="<script> 
				alert('Desculpe já há um cadastro ativo com este email!');
				javascript:window.history.go(-1);
				</script>";
			}
		}
		
		else
		{
			$flash="<script> 
				alert('Desculpe já há um cadastro ativo com este usuario!');
				javascript:window.history.go(-1);
				</script>";
		}
					
		if(isset($insert))
		
	{
		
		
		$flash="<script> 
				alert('Cadastro realizado com sucesso! Em breve estará ativo.');
				window.location.href = 'http://localhost:8080/erponline/acesso_usuarios.php';
				</script>";
	}
	
	
	else
	{
		if(empty($flash))
		{
		$flash="<script> 
				alert('Houve um problema com o cadastro! Favor tentar novamente mais tarde');
				window.location.href = 'http://localhost:8080/erponline/index.php';
				</script>";
		}
	}
		
		
		
		//retorno para o usuario
		echo $flash;
	}
}
	
		




?>