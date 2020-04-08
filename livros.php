<?php require_once("conexao\conexao.php")?>

<?php

	$livros = "SELECT livroID, titulo, descricao_resumida, autorID, imagem_pequena, imagem_grande ";
	$livros .="FROM livros";

	$resultado = mysqli_query($conecta, $livros);

	if (!$resultado){
		die ("Falha na consulta de livros no banco");
	}

?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>AMADICAS</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>

<body>
	<div class="main-wrapper-first relative">
		<?php require_once("header.php"); ?>
		<div class="banner-area">
			<div class="container">
				<div class="row justify-content-center generic-height align-items-center">
					<div class="col-lg-8">
						<div class="banner-content text-center">
							<h1 class="text-white text-uppercase mb-10">Dicas de Livros</h1>
							<p class="text-white">Livros que tenho lido ao longo dos últimos anos. Espero que gostem.</p>
							<p class="text-white">Clique nos links para ver os detalhes. Alguns posso até disponibilizar para download.</p>
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
				<?php
					while ($linha = mysqli_fetch_assoc($resultado)) {
				?>

				<ul class="list-unstyled">

					<li class="media">
						<img class="align-self-center border border-dark rounded img-fluid mr-3" src="<?php echo $linha["imagem_grande"] ?>" alt="<?php echo $linha["imagem_grande"] ?>">
						<div class="media-body">
							<h5 class="mt-0 mb-1"><?php echo $linha["titulo"] ?> - <?php echo $linha["autorID"] ?></h5>
							<?php echo $linha["descricao_resumida"] ?>
							<a href="detalhe_livro.php?codigo=<?php echo $linha['livroID'] ?>" class="btn btn-link btn-sm">Ver mais...</a>
						</div>
					</li>

				</ul>

				<?php
                }
				?> 
				</div>
			</div>
		</div>
	</div>

	<!-- End Feature Area -->
	<!-- <div class="main-wrapper">
		<div class="working-process-area">
			<div class="container">
				<div class="list-group">
					<a href="livros_detalhe.php" class="list-group-item list-group-item-action flex-column align-items-start active">
						<div class="d-flex w-100 justify-content-between">
							<h5 class="mb-1">Vidas Secas</h5>
							<small>10 dias atrás</small>
						</div>
						
						<p class="mb-1">Autor: Graciliano Ramos</p>
						<img class="align-self-center mr-3" src="img/livros/VIDAS_SECAS_pequena.jpg" alt="VIDAS_SECAS_pequena.jpg">
						<small>O que impulsiona os personagens é a seca, áspera e cruel, e paradoxalmente a ligação telúrica, afetiva, que expõe naqueles seres em retirada(...)</small>
						
					</a>
					<a href="livros_detalhe.php" class="list-group-item list-group-item-action flex-column align-items-start">
					<div class="d-flex w-100 justify-content-between">
							<h5 class="mb-1">Vidas Secas</h5>
							<small>10 dias atrás</small>
						</div>
						
						<p class="mb-1">Autor: Graciliano Ramos</p>
						<img class="align-self-center mr-3" src="img/livros/VIDAS_SECAS_pequena.jpg" alt="VIDAS_SECAS_pequena.jpg">
						<small>O que impulsiona os personagens é a seca, áspera e cruel, e paradoxalmente a ligação telúrica, afetiva, que expõe naqueles seres em retirada(...)</small>
						
					</a>
					<a href="livros_detalhe.php" class="list-group-item list-group-item-action flex-column align-items-start">
					<div class="d-flex w-100 justify-content-between">
							<h5 class="mb-1">Vidas Secas</h5>
							<small>10 dias atrás</small>
						</div>
						
						<p class="mb-1">Autor: Graciliano Ramos</p>
						<img class="align-self-center mr-3" src="img/livros/VIDAS_SECAS_pequena.jpg" alt="VIDAS_SECAS_pequena.jpg">
						<small>O que impulsiona os personagens é a seca, áspera e cruel, e paradoxalmente a ligação telúrica, afetiva, que expõe naqueles seres em retirada(...)</small>
						
					</a>
				</div>
			</div>
		</div>
	</div> 
	<!-- About Generic Start
			<div class="main-wrapper">
				<section class="about-generic-area">
					<div class="container border-top-generic">
						<h3 class="about-title mb-70">VIDAS SECAS - Graciliano Ramos</h3>
						<div class="row">
							<div class="col-md-12">
								<div class="img-text">
									<img src="img/livros/VIDAS_SECAS_pequena.jpg" alt="" class="img-fluid float-left mr-20 mb-20">
									<p>O que impulsiona os personagens é a seca, áspera e cruel, e paradoxalmente a ligação telúrica, afetiva, que expõe naqueles seres em retirada, à procura de meios de sobrevivência e um futuro. Apesar desse sentimento de transbordante solidariedade e compaixão com que a narrativa acompanha a miúda saga do vaqueiro Fabiano e sua gente, o autor contou: "Procurei auscultar a alma do ser rude e quase primitivo que mora na zona mais recuada do sertão... os meus personagens são quase selvagens... pesquisa que os escritores regionalistas não fazem e nem mesmo podem fazer ...porque comumente não são familiares com o ambiente que descrevem...Fiz o livrinho sem paisagens, sem diálogos. E sem amor. A minha gente, quase muda, vive numa casa velha de fazenda. As pessoas adultas, preocupadas com o estômago, não tem tempo de abraçar-se. Até a cachorra [Baleia] é uma criatura decente, porque na vizinhança não existem galãs caninos". VIDAS SECAS é o livro em que Graciliano, visto como antipoético e anti-sonhador por excelência, consegue atingir, com o rigor do texto que tanto prezava, um estado maior de poesia.</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="img-text">
									<p>
										<ul>
											<il>teste</li>
										</ul>	
									</p>
								</div>
							</div>
						</div>
					</div>
				</section> -->
	<!-- End Generic Start -->
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

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
	<script	src="js/vendor/jquery.js"></script>
	<script src="js/outros/inserir_email.js"></script>
</body>

</html>