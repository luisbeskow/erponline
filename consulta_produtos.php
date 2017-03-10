<?php
include("includes/header.php");
if(isset($logado))
{
	include("templates/consulta_produtos.php");
}

else
{
	include("templates/acesso.php");	
}
?>