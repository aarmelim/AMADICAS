<?php require_once("conexao\conexao.php") ?>

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
					<form class="subscription relative" id="email-subscription">
						<input type="email" name="email" placeholder="Seu email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu email'" required>
						<button name="enviar" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Enviar</span><span class="lnr lnr-arrow-right"></span></button>
						<div class="info"></div>
						<div id="mensagem"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="js/vendor/jquery.js"></script>
<script>
	$('#email-subscription').submit(function(e) {
		e.preventDefault();
		var formulario = $(this);
		var retorno = inserirEmail(formulario);
	})

	function inserirEmail(dados) {
		$.ajax({
			type: "POST",
			data: dados.serialize(),
			url: "inserir_email.php",
			async: false,
			success: function(data){
				$sucesso = $.parseJSON(data)["sucesso"];
				$mensagem = $.parseJSON(data)["mensagem"];
				$('#mensagem').show();

				if ($sucesso) {
					$('#mensagem').html($mensagem);
				} else {
					$('#mensagem').html($mensagem);
				}
			}
		});
	}
</script>