<?php require_once("conexao\conexao.php") ?>

<?php

$livros = "SELECT livroID, titulo, descricao_resumida, autorID, data_leitura, imagem_pequena, imagem_grande ";
$livros .= "FROM livros";

$resultado = mysqli_query($conecta, $livros);

if (!$resultado) {
    die("Falha na consulta de livros no banco");
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

                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                                <strong class="d-inline-block mb-2 text-primary">Mundo</strong>
                                <h3 class="mb-0">
                                    <a class="text-dark" href="#">Post destacado</a>
                                </h3>
                                <div class="mb-1 text-muted">12 de Nov</div>
                                <p class="card-text mb-auto">Este é um card maior com suporte à texto, em baixo, como uma introdução mais natural ao conteúdo adicional.</p>
                                <a href="#">Continue lendo</a>
                            </div>
                            <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                                <strong class="d-inline-block mb-2 text-success">Design</strong>
                                <h3 class="mb-0">
                                    <a class="text-dark" href="#">Título do post</a>
                                </h3>
                                <div class="mb-1 text-muted">11 de Nov</div>
                                <p class="card-text mb-auto">Este é um card maior com suporte à texto em baixo, como uma introdução mais natural ao conteúdo adicional.</p>
                                <a href="#">Continue lendo</a>
                            </div>
                            <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Start Story Area -->
    <?php require_once("section_instagram.php"); ?>
    <!-- End Story Area -->

    <!-- Start Subscription Area -->

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
</body>

</html>