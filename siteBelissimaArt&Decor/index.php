<?php include('config.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Site Belíssima Art&Decor</title>
	<link rel="stylesheet" href="estilo/font-awesome.min.css">
	<link rel="stylesheet" href="estilo/style.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Nanum+Gothic" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="arranjos-florais, artigos-presentes">
	<meta name="description" content="Loja de arranjos florais e artigos de presente">
	<meta charset="utf-8"/>
</head>
<body>
	
	<?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
		switch ($url) {
			case 'depoimentos':
				echo '<target target="depoimentos" />';
				break;

			case 'produtos':
				echo '<target target="produtos" />';
				break;
		}
	?>
	
	<header>
		<div class="center">
			<div class="logo left"><a href="#">Belíssima</a></div><!-- Logo -->
			<nav class="desktop right"> 
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>produtos">Produtos</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			<nav class="mobile right">
				<div class="botao-menu-mobile">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>produtos">Produtos</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</div><!-- Center -->
	</header>

	<?php
		if (file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
		}else{
			if ($url != 'sobre' && $url != 'produtos') {
				$pagina404 = true;
				include('pages/404.php');
			}else{
				include('pages/home.php');
			}
		}
	?>

	<footer <?php if (isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>
		<div class="center">
			<p>Desenvolvido por: Allinne Mara O. Crispim</p>
		</div><!-- Center -->
	</footer><!-- Rodapé -->

	<script src="<?php echo INCLUDE_PATH; ?>js/jquey.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
	
</body>
</html>