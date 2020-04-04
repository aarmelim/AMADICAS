<?php
	if ( isset($_POST['nome'])){
		print_r($_POST);
	}
?>

<section class="contact-form-area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2 class="text-white">Entre em contato</h2>
					<p class="text-white">Caso queira me contar quem é você, que dicas gostaria de receber ou como posso te ajudar ou disponibilizar os filmes e livros que tenho, basta deixar seu contato que entrarei em contato.</p>
				</div>
			</div>
		</div>
		<form id="myForm" action="mail.php" method="post" class="contact-form">
			<div class="row justify-content-center">
				<div class="col-lg-5">
					<input type="text" name="nome" placeholder="Seu nome" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu nome'" class="common-input mt-20" required>
				</div>
				<div class="col-lg-5">
					<input type="email" name="email" placeholder="Seu email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu email'" class="common-input mt-20" required>
				</div>
				<div class="col-lg-10">
					<textarea class="common-textarea mt-20" name="mensagem" placeholder="O que quer me contar" onfocus="this.placeholder = ''" onblur="this.placeholder = 'O que quer me contar'" required></textarea>
				</div>
				<div class="col-lg-10 d-flex justify-content-end">
					<button class="primary-btn submit-btn d-inline-flex align-items-center mt-20" name="enviar"><span class="mr-10">Enviar mensagem</span><span class="lnr lnr-arrow-right"></span></button> <br>
					<div class="alert-msg"></div>
				</div>
			</div>
		</form>
	</div>
</section>