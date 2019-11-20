<?php 
	
	if(isset($_GET['p'])){
        $p = 'view/'.$_GET['p'].'.php';
    }else{
        $p = 'view/relatorio.php';
    }

?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	
</head>

<body>
	<div id="content">
		<nav id="menu">
			<ul>
				<li><a href="?p=relatorio">INICIO</a></li>
				<li><a href="?p=cadchamado">CADASTRO DE CHAMADO</a></li>
				<li><a href="?p=cadpessoa">CADASTRO DE PESSOA</a></li>
			</ul>
		</nav>
		<div id="conteudo">
			<!-- Inclusão de paginas -->
			<?php include $p; ?>
		</div>
		<footer>
			<p>Desenvolvido por: Marcus Vidal</p>
		</footer>
	</div>

	<!-- SCRIPTS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="scriptsPessoa.js" type="text/javascript"></script>
	<script src="scriptsChamado.js" type="text/javascript"></script>
</body>

</html>