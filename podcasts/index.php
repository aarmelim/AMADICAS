<?php require_once("..\conexao\conexao.php")?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="_img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="AMADICAS - Adriano Mantovani Armelim">
	<!-- Meta Description -->
	<meta name="description" content="Dicas de podcasts que ouvi ao longo dos últimos anos, podcasts, sugestão de podcasts">
	<!-- Meta Keyword -->
	<meta name="keywords" content="Dicas de Livros, Livros, Sugestões de livros, Podcasts, Sugestão de podecasts, Dicas de podcasts, Filmes, Sugestão de filmes, Dicas de filmes">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Dicas de Livros</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="../_css/linearicons.css">
	<link rel="stylesheet" href="../_css/owl.carousel.css">
	<link rel="stylesheet" href="../_css/font-awesome.min.css">
	<link rel="stylesheet" href="../_css/nice-select.css">
	<link rel="stylesheet" href="../_css/magnific-popup.css">
	<link rel="stylesheet" href="../_css/bootstrap.css">
	<link rel="stylesheet" href="../_css/main.css">
	<link rel="stylesheet" href="../_css/estilos.css">
</head>

<body>
	<div class="main-wrapper-first relative">
		<?php require_once("../header.php"); ?>
		<div class="banner-area">
			<div class="container">
				<div class="row justify-content-center generic-height align-items-center">
					<div class="col-lg-8">
						<div class="banner-content text-center">
							<h1 class="text-white text-uppercase mb-10">Dicas de Podcasts</h1>
							<p class="text-white">Podcasts que tenho escutado ao longo dos últimos anos. Espero que gostem.</p>
							<p class="text-white">Clique nos links para ver os detalhes.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="main-wrapper">
		<div class="working-process-area">
			<div class="container">
				<div id = "listagem_livros">
    				<ul class="list-unstyled">
    					<li class="media">
	    					<img class="align-self-center border border-dark rounded img-fluid mr-3" src="../_img/em-construcao.jpg" alt="Imagem de dica de filme">
		    				<div class="media-body">
			    				<h5 class="mt-0 mb-1">Em construção</h5>
				    		</div>
					    </li>
    				</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- End Feature Area -->

    <!-- Start Story Area -->
	<?php require_once("../section_instagram.php"); ?>
	<!-- End Story Area -->

	<!-- Start Subscription Area -->
	<?php require_once("../email_subscription.php"); ?>
	<!-- End Subscription Area -->

	<!-- Start Contact Form -->
	<?php require_once("../contact_form.php"); ?>
	<!-- End Contact Form -->

	<!-- Start Footer Widget Area -->
	<?php require_once("../footer.php"); ?>
	<!-- End Footer Widget Area -->

	<script src="../_js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="../_js/vendor/bootstrap.min.js"></script>
	<script src="../_js/jquery.ajaxchimp.min.js"></script>
	<script src="../_js/owl.carousel.min.js"></script>
	<script src="../_js/jquery.nice-select.min.js"></script>
	<script src="../_js/jquery.magnific-popup.min.js"></script>
	<script src="../_js/main.js"></script>
	<script	src="../_js/vendor/jquery.js"></script>
	<script src="../_js/outros/inserir_email.js"></script>
</body>

</html>