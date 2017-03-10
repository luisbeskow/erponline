
<?php

						

ob_start();
session_start();
//globais

$home="http://localhost:8080/erponline";
$title="ERP Online";
$startaction="";
$msg="";

if(isset($_GET["acao"]))
{
	$acao=$_GET["acao"];
	$startaction=1;
}


//incclude classes
include("classes/DB.class.php");
include("classes/cadastro.class.php");
include("classes/login.class.php");
include("classes/conexao.class.php");



//Conexao BD

$conectar=new DB;
$conectar=$conectar->conectar();




//Metodo de cadastro
if($startaction==1)
{

	if($acao=="cadastrar")
	{
		$usuario=$_POST["usuario"];
		$email=$_POST["email"];
		$senha=$_POST["senha"];
		$rep_senha=$_POST["rep_senha"];
		$nome=$_POST["nome"];
		$sobrenome=$_POST["sobrenome"];
		$nasc=$_POST["nasc"];
		$sexo=$_POST["sexo"];
		$ddd_tel=$_POST["ddd_tel"];
		$tel=$_POST["tel"];
		$ddd_cel=$_POST["ddd_cel"];
		$cel=$_POST["cel"];
		$logra=$_POST["logra"];
		$cid=$_POST["cid"];
		$uf=$_POST["uf"];
		$cep=$_POST["cep"];
		
		
		
		
	
		
		if(empty($usuario) || empty($email) || empty($senha) || empty($rep_senha) || empty($nome) || empty($sobrenome) || empty($nasc) || empty($sexo) || empty($ddd_tel) || empty($tel) || empty($ddd_cel) ||empty($cel) || empty($logra) || empty($cid) || empty($uf) || empty($cep) ) //todos os campos vazios
		{
			$msg="<script> alert('Preencha todos os campos!')
			javascript:window.history.go(-1);
			</script>";
		}
		

		else//Todos os campos preenchidos
		{
		
			if(filter_var($email,FILTER_VALIDATE_EMAIL))	//email valido
			{
					if((strlen($senha) < 6) || (strlen($senha) > 14))//senha invalida
					{
						$msg="<script> alert('Sua senha deve ter no minimo 6 e no maximo 14 caracteres!')
						javascript:window.history.go(-1);
						</script>";
					}
					
					//senha valida
					else
					{
						if ($senha == $rep_senha) // senhas iguais
						{
						$conectar=new cadastro;//executa classe cadastro
						$conectar=$conectar->cadastrar($usuario,$email,$senha,$nome,$sobrenome,$nasc,$sexo,$ddd_tel,$tel,$ddd_cel,$cel,$logra,$cid,$uf,$cep);

					
						}
						
			
						else // senhas diferentes
						{
							$msg="<script> alert('As senhas não coincidem!')
							javascript:window.history.go(-1);
							</script>";
						}
					}
			}
		
			
			else //email invalido
			{
				$msg="<script> alert('Digite um email valido!')
				javascript:window.history.go(-1);
				</script>";
			}
		}
			
	}
}

//método de login
if($startaction == 1)
{
	if($acao == "logar")
	{
		$usuario=$_POST["usuario"];
		$senha=$_POST["senha"];

		if(empty($usuario) || empty($senha)) // usuario e senha vazios
		{
			$msg=
			"<script> 
				alert('Preencha todos os campos.');
				javascript:window.history.go(-1);
				</script>";
		} 
		else 
		{

				//executa a busca no DB
				$login=new login;
				$login=$login -> logar($usuario, $senha);
				
				

		}
    }		
}


	

if($startaction == 1)
{
	if($acao == "logout") // metodo logoffs
	{
		setcookie("logado","");
		unset($_SESSION["usuario"],$_SESSION["senha"],$_SESSION["nivel"]); // tira o set da session
	}
}



//metodo de checar usuario
if(isset($_SESSION["usuario"]) && isset($_SESSION["senha"]))
{
$logado=1;
$nivel=$_SESSION["nivel"];	
}

?>	