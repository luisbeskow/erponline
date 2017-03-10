<?php
include("includes/header.php");
if(isset($logado))
{
	include("templates/cadastro_clientes.php");
}

else
{
	include("templates/acesso_usuarios.php");	
}
?>