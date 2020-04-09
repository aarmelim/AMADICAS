<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="AMADICAS - Adriano Mantovani Armelim">
		<!-- Meta Description -->
		<meta name="description" content="AMADICAS - Dicas de livros, filmes, documentários, podcasts e outros">
		<!-- Meta Keyword -->
		<meta name="keywords" content="Dicas de Livros, Livros, Sugestões de livros, Podcasts, Sugestão de podecasts, Dicas de podcasts, Filmes, Sugestão de filmes, Dicas de filmes,">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>AMADICAS</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="_css/linearicons.css">
		<link rel="stylesheet" href="_css/owl.carousel.css">
		<link rel="stylesheet" href="_css/font-awesome.min.css">
		<link rel="stylesheet" href="_css/nice-select.css">
		<link rel="stylesheet" href="_css/magnific-popup.css">
		<link rel="stylesheet" href="_css/bootstrap.css">
		<link rel="stylesheet" href="_css/main.css">
		<link rel="stylesheet" href="_css/estilos.css">
	</head>
	<body>
		<?php require_once("topo_index.php"); ?>

		<div class="main-wrapper" id=dicas>
			<!-- Start Remarkable Wroks Area -->
			<section class="remarkable-area">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-6">
							<div class="section-title text-center">
								<h2>Vamos as dicas</h2>
								<p>Tenho várias já prontas e vou acrescentando outras ao longo do tempo.</p>
							</div>
						</div>
					</div>
					<div class="single-remark">
						<div class="row no-gutters">
							<div class="col-lg-5 col-md-6">
								<div class="remark-thumb" style="background: url(_img/filmes2.jpg);"></div>
							</div>
							<div class="col-lg-7 col-md-6">
								<div class="remark-desc">
									<h4>Filmes, Séries e documentários</h4>
									<p>Filmes e Documentários para download, e algumas poucas séries que vi e recomendo.</p>
									<a href="filmes" class="primary-btn"><span>Veja aqui as dicas de filmes</span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="single-remark">
						<div class="row no-gutters">
							<div class="col-lg-5 col-md-6">
								<div class="remark-thumb" style="background: url(_img/livros.jpg);"></div>
							</div>
							<div class="col-lg-7 col-md-6">
								<div class="remark-desc">
									<h4>Livros</h4>
									<p>Veja uma página com diversas dicas de livros que li, gostei e sugiro. Uso o aplicativo de leitura <a href=https://www.skoob.com.br class="font-weight-bold" id="link-comum">Skoob</a> que me conecta a algumas sugestões e pessoas com esse mesmo gosto pela leitura.</p>
									<a href="livros" class="primary-btn"><span>Veja aqui as dicas de livros</span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="single-remark">
						<div class="row no-gutters">
							<div class="col-lg-5 col-md-6">
								<div class="remark-thumb" style="background: url(_img/trilhas4.jpg);"></div>
							</div>
							<div class="col-lg-7 col-md-6">
								<div class="remark-desc">
									<h4>Trilhas e montanhas</h4>
									<p>As trilhas e expedições que participei, os aprendizados e as dicas.</p>
									<a href="trilhas-e-montanhas" class="primary-btn"><span>Veja aqui as dicas de trilhas</span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="single-remark">
						<div class="row no-gutters">
							<div class="col-lg-5 col-md-6">
								<div class="remark-thumb" style="background: url(_img/podcast1.jpg);"></div>
							</div>
							<div class="col-lg-7 col-md-6">
								<div class="remark-desc">
									<h4>PodCasts</h4>
									<p>O que escuto quando estou na academia, passeando com o Chico (meu cachorro), lavando louça, etc...</p>
									<a href="podcasts" class="primary-btn"><span>Veja aqui as dicas de podcasts</span></a>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>
			<!-- End Remarkable Wroks Area -->

			<!-- Start Story Area -->
			<?php require_once("section_instagram.php"); ?>
			<!-- End Story Area -->
		
			<!-- Start Subscription Area -->
			<?php require_once("email_subscription.php"); ?>			
			<!-- End Subscription Area -->
			
			<!-- Start Contact Form -->
			<?php require_once("contact_form.php"); ?>
			<!-- End Contact Form -->

			<!-- Start Footer Widget Area -->
			<?php require_once("footer.php"); ?>
			<!-- End Footer Widget Area -->

		</div>

		<script src="_js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="_js/vendor/bootstrap.min.js"></script>
		<script src="_js/jquery.ajaxchimp.min.js"></script>
		<script src="_js/owl.carousel.min.js"></script>
		<script src="_js/jquery.nice-select.min.js"></script>
		<script src="_js/jquery.magnific-popup.min.js"></script>
		<script src="_js/main.js"></script>
		<script	src="_js/vendor/jquery.js"></script>
		<script src="_js/outros/inserir_email.js"></script>
	</body>
</html>
