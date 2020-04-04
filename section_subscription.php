<?php require_once("funcoes.php"); ?>

<?php
if (isset($_POST['enviar'])) {
	if (enviarEmail($_POST)) {
		$email = "Email registrado com sucesso.";
	} else {
		$email = "Erro no envio.";
	}
}
?>

<section class="subscription-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="section-title">
					<h3>Deixe seu email</h3>
					<span>Vou te avisar quando incluir novas dicas no site. Pode ser?</span>
				</div>
			</div>
			<div class="col-lg-6">
				<div id="mc_embed_signup">
					<form action="section_subscription.php" method="post" class="subscription relative">
						<input type="email" name="email" placeholder="Seu email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu email'" required>
						<button name="enviar" value="Enviar mensagem" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Enviar</span><span class="lnr lnr-arrow-right"></span></button>
						<div class="info"></div>
						<?php
                        if( isset($email) ) {
                            echo "<p>" . $email . "</p>";
                        }
                   		 ?>  
					</form>
				</div>
			</div>
		</div>
	</div>
</section>