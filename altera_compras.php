<?php
include("includes/header.php");
if(isset($logado))
{
	include("templates/altera_compras.php");
}

else
{
	include("templates/acesso_usuarios.php");	
}
?>