<?php
include("includes/header.php");
if(isset($logado))
{
	include("templates/cadastro_produtos.php");
}

else
{
	include("templates/acesso_usuarios.php");	
}
?>