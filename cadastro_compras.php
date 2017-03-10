<?php
include("includes/header.php");
if(isset($logado))
{
	include("templates/cadastro_compras.php");
}

else
{
	include("templates/acesso_usuarios.php");	
}
?>