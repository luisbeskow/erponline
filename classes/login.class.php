<?php
	class login
{
	public function logar($usuario,$senha)
	{
		$flash="";
		include("classes/conexao.class.php");
		
		
					
		$buscar=mysqli_query($conusuario,"SELECT * FROM usuario WHERE usuario='$usuario' AND senha='$senha' LIMIT 1");
		if(mysqli_num_rows($buscar)==1) 
		{
			$dados=mysqli_fetch_array($buscar);
			if($dados["status"] == 1)
			{
			$_SESSION["usuario"]=$dados["usuario"];
			$_SESSION["senha"]=$dados["senha"];
			$_SESSION["nivel"]=$dados["nivel"];
			setcookie("logado",1);
			$log=1;
			}
			
			else
			{
			$flash="<script> 
				alert('Aguarde nossa aprovacao');
				</script>";
			}
	
		}

	
		if(isset($log))
		{

			$flash="<script> 
				alert('Login realizado com sucesso!!!');
				window.location.href = 'http://localhost:8080/erponline/sistema.php';
				</script>";

		}

		else
		{
			if(empty($flash))
			{
				$flash="<script> 
				alert('Digite seu email e senha corretamente');
				</script>";
			}
		}

		echo $flash;

	}
}

?>