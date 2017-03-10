<?php
include("includes/header.php");
if(isset($logado))
{
	include("templates/consulta_compras.php");
}

else
{
	include("templates/acesso.php");	
}
?>