<?php
include("includes/header.php");
if(isset($logado))
{
	include("templates/consulta_clientes.php");
}

else
{
	include("templates/acesso.php");	
}
?>