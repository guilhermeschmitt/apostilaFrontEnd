<?php 
	$cabecalho_title = "Página Principal";
	$cabecalho_css = '<link href="http://fonts.googleapis.com/css?family=Mogra|Revalia" rel="stylesheet">
					  <link rel="stylesheet" href="css/estilo.css" >
					  <link rel="stylesheet" href="css/reset.css" >';  
	include("cabecalho.php");
?>
		<div class="container destaque">
			<section class="busca">
				<h2>Busca</h2>

				<form>
					<input type="search">
					<input type="image" src="img/busca.png">
				</form>
			</section>

			<section class="menu-departamentos">
				<h2>Departamentos</h2>
				<nav>
					<ul>
						<li><a href="#">Blusas e Camisas</a>
						<ul>
							<li><a href="#">Manga curta</a></li>
							<li><a href="#">Manga comprida</a></li>
							<li><a href="#">Camisa social</a></li>
							<li><a href="#">Camisa casual</a></li>
						</ul>
						</li>

						<li><a href="#">Calças</a></li>
						<li><a href="#">Saias</a></li>
						<li><a href="#">Vestidos</a></li>
						<li><a href="#">Sapatos</a></li>
						<li><a href="#">Bolsas e Carteiras</a></li>
						<li><a href="#">Acessórios</a></li>
					</ul>
				<nav>
			</section>
			<img src="img/destaque-home.jpg" alt="Promoção: Big City Night">
			<a href="#" class="pause"></a>
		</div>
		<div class="container">
			<section class="painel novidades">
				<h2>Novidades</h2>
				<ol>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura1.png">
								<figcaption>Fuzz Cardigan por R$129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura2.png">
								<figcaption>Fuzz Cardigan por R$129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura3.png">
								<figcaption>Fuzz Cardigan por R$129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura4.png">
								<figcaption>Fuzz Cardigan por R$129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura5.png">
								<figcaption>Fuzz Cardigan por R$129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura6.png">
								<figcaption>Fuzz Cardigan por R$129,90</figcaption>
							</figure>
						</a>
					</li>
				</ol>
				<button type="button">Mostrar Mais</button>
			</section>
			<section class="painel mais-vendidos">
				<h2>Mais vendidos</h2>
				<ol>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura1.png">
								<figcaption>Fuzz Cardigan por R$129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura2.png">
								<figcaption>Fuzz Cardigan por R$129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura3.png">
								<figcaption>Fuzz Cardigan por R$129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura4.png">
								<figcaption>Fuzz Cardigan por R$129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura5.png">
								<figcaption>Fuzz Cardigan por R$129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura6.png">
								<figcaption>Fuzz Cardigan por R$129,90</figcaption>
							</figure>
						</a>
					</li>
				</ol>
				<button type="button">Mostrar Mais</button>
			</section>
		</div>
		<?php include("rodape.php");?>
		<script src="js/jquery.js"></script>
		<script src="js/home.js"></script>
		<script src="js/trocaBanner.js"></script>
		<script src="js/pausePlay.js"></script>
	</body>
</html>
