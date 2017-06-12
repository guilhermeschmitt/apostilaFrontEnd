<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/checkout.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<title>Checkout Mirror Fashion</title>
	</head>
	<body>
		<?php 
			include("barraDeNavegacao.php");
		?>
		<div class="jumbotron">
			<div class="container">
					<h1> Ótima escolha </h1>
					<p> Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra.</p>
			</div>
		</div>
		<div class="container">
					<?php
						include("infoPanelCheckout.php"); 
						include("formCadastroCidadao.php");
					 	include("formCadastroCartaoCredito.php");
					 ?>
		</div>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/converteMoeda.js"></script>
		<script src="js/total.js"></script> 
		<script src="js/inputmask-plugin.js"></script>
	</body>
</html>