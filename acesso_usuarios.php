<?php
include("includes/header.php");
if(isset($logado))
{
	include("templates/sistema.php");
}

else
{
	include("templates/acesso_usuarios.php");	
}
?>