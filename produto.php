<?php
	$cabecalho_title = "Produto da Mirror Fashion"; 
	$cabecalho_css = '<link rel="stylesheet" href="css/estilo.css">
					  <link rel="stylesheet" href="css/reset.css" >
					  <link rel="stylesheet" href="css/produto.css" >
					  <link rel="stylesheet" href="css/produtos-media.css" >'; 
	include("cabecalho.php");
?>
	<div class="produto-back">

		<div class="container">

			<div class="produto">
				<h1>Fuzzy Cardigan</h1>
				<p>Por apenas R$129,00</p>
				<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&width=172&layout=button_count&action=like&size=small&show_faces=false&share=true&height=46&appId" width="172" height="46" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
				<a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=Teste%20Um%20Dois%20Tres">Tweet</a>
				<form action="checkout.php" method="POST">
					<input type="hidden" name="nome" value="Fuzzy Cardigan">
					<input type="hidden" name="preco" value="129.00">
					<input type="hidden" name="numero" value="2">
					<fieldset class="cores">
						<legend>Escolha a cor:</legend>
						<input type="radio" name="cor" value="verde" id="verde"checked>
						<label for="verde">
							<img src="img/produtos/foto2-verde.png" alt="verde">
						</label>
						<input type="radio" name="cor" value="rosa" id="rosa" checked>
						<label for="rosa">
							<img src="img/produtos/foto2-rosa.png" alt="rosa">
						</label>
						<input type="radio" name="cor" value="azul" id="azul" checked>
						<label for="azul">
							<img src="img/produtos/foto2-azul.png" alt="azul">
						</label>
					</fieldset>
					<fieldset class="tamanhos">
						<legend>Escolha o tamanho</legend>
						<input type="range" min="36" max="48" value="42" step="2" name="tamanho" id="tamanho">
						<output for="tamanho" name="valortamanho">42</output>
					</fieldset>
					<input type="submit" class="comprar" value="Comprar">
				</form>
			</div>

			<div class="detalhes">
				<h2>Detalhes do produto</h2>
				<p>Esse é o melhor casaco de Cardigã que você já viu. Excelente material italiano com estampa desenhada pelos artesãos da comunidade de Krotor nas ilhas gregas. Compre já e receba hoje mesmo pela nossa entrega a jato.</p>
				<table>
					<thead>
						<tr>
							<th>Característica</th>
							<th>Detalhe</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Modelo</td>
							<td>Cardigã 7845</td>
						</tr>
						<tr>
							<td>Cores</td>
							<td>Azul, Rosa e Verde</td>
						</tr>
						<tr>
							<td>Lavagem</td>
							<td>Lavar a mão</td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>
		
	</div>
	<?php include("rodape.php");?>
	<script src="js/jquery.js"></script>
	<script src="js/produto.js"></script>
	<script>window.twttr = (function(d, s, id) {
  				var js, fjs = d.getElementsByTagName(s)[0],
   				 t = window.twttr || {};
  				if (d.getElementById(id)) return t;
 				js = d.createElement(s);
  				js.id = id;
  				js.src = "https://platform.twitter.com/widgets.js";
  				fjs.parentNode.insertBefore(js, fjs);
				t._e = [];
				t.ready = function(f) {
   					t._e.push(f);
  				};
  				 return t;
			}(document, "script", "twitter-wjs"));
	</script>
	</body>
</html>
