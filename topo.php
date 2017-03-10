<!DOCTYPE html>
<html>
	<head>	       
		<link rel="stylesheet" type="text/css" href="sistema.css">
	</head>
		
	<body>
	<div align="right" id="saudacao"><?php echo 'Você está logado!</br>'. $_SESSION['usuario']; ?></div>
    <div  align="right"><a href="index.php?acao=logout" title="Logout" id="logout" >Logout</a></div>

		
		<div id="topo">
	
		<img src="img/logo.png" alt="sgv online" width="50%">
	
		</div>
		
		<div id="menu">
		<nav>
			<ul>
				<li> <a href="sistema.php">  <img src="img/inicio.png" width="100%" alt="inicio"> </a> </li>
				<li> <a href="consulta_clientes.php">  <img src="img/entidades.png" width="100%" alt="clientes"> </a> </li>
				<li> <a href="consulta_produtos.php">  <img src="img/produto.png" width="100%" alt="produtos"> </a> </li>
				<li> <a href="operacoes.php">  <img src="img/operacoes.png" width="100%" alt="operações">  </a>
				
					<ul>
						<li> <a href="estoques.php">  <img src="img/estoque.png" width="100%"  alt="estoque"> </a> </li>
						<li> <a href="vendas.php">  <img src="img/venda.png" width="100%"  alt="vendas"> </a> </li>
						<li> <a href="cadastro_compras.php"> <img src="img/compras.png" width="100%"  alt="compras"> </a> </li>
					</ul>
				
				</li>
			</ul> 
		</nav>
        </div>
        </body>
		</html>