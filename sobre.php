<?php
	$cabecalho_title = "Sobre: Mirror Fashion";
	$cabecalho_css = '<link rel="stylesheet" href="css/sobre.css" >
					  <link rel="stylesheet" href="css/estilo.css" >';  
	include("cabecalho.php");
?>
	<article class="corpo-topo">
		<h1>A Mirror Fashion</h1>
		<div class="container-frame">
			<iframe src="https://www.youtube.com/embed/Lwc1P3kgelM" allowfullscreen></iframe>
		</div>
		<p>A <b>Mirror Fashion</b> é a <b>maior empresa comércio eletrônico no segmento de moda em todo o mundo</b>. 
		Fundada há <?php print date ("Y") - 1932; ?> anos, possui filiais em 124 países, sendo líder de mercado com mais de <i><b>90% de participação em 118 deles.</b></i></p>

		<p>Nosso centro de distribuição fica em <a href="https://maps.google.com.br/?q=Jacarezinho">Jacarezinho, no Paraná</a>. De lá, saem 48 aviões que 
		distribuem nossos produtos às casas do mundo todo. Nosso centro de distribuição:</p>

		<figure id="centro-distribuicao">
			<img src="img/centro-distribuicao.png">
			<figcaption>Centro de distribuição da Mirror Fashion</figcaption>	
		</figure>

		<div class="container-frame">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d204618.41064226403!2d34.38881989110414!3d36.74266640597767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1527f4a4c0be6e9f%3A0x4dbef2b1f81e7d77!2sMersin%2C+Mesudiye+Mahallesi%2C+Akdeniz%2FMersin%2C+Turquia!5e0!3m2!1spt-BR!2sbr!4v1497288976826" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>

		<p>Compre suas roupas e acessórios na Mirror Fashion. Acesse <a href="index.html">nossa loja</a> ou entre em contato 
		se tiver dúvidas. Conheça também nossa <a href="#historia">história</a> e nossos <a href="#diferenciais">diferenciais</a>.</p>

		<h2 id="historia">História</h2>

			<figure id="familia-pelho">
				<img src="img/familia-pelho.jpg">
				<figcaption>Família Pelho</figcaption>
			</figure>

			<p>	A fundação em 1932 ocorreu no momento da descoberta econônica do interior do Paraná. A 
			família <i>Pelho</i>, tradicional da região, investiu todas as suas economias nessa nova iniciativa, 
			revolucionária para a época. O fundador <i>Eduardo Simões Pelho</i>, dotado de particular visão 
			administrativa, guiou os negócios da empresa durante mais de 50 anos, muitos deles ao lado 
			de seu filho <i>E. S. Pelho Filho</i>, atual CEO. O nome da empresa é inspirado no nome da família.</p>

			<p>	O crescimento da empresa foi praticamente instantâneo. Nos primeiros 5 anos, já atendia 18 países. 
			Bateu a marca de 100 países em apenas 15 anos de existência. Até hoje, já atendeu 740 milhões 
			de usuários diferentes, em bilhões de diferentes pedidos.</p>

			<p>	O crescimento em número de funcionários é também assombroso. Hoje, é a maior empregadora do 
			Brasil, mas mesmo após apenas 5 anos de sua existência, já possuía 30 mil funcionários. Fora do 
			Brasil, há 240 mil funcionários, além dos 890 mil brasileiros nas instalações de Jacarezinho e 
			nos escritórios em todo país.</p>

			<p>	Dada a importância econômica da empresa para o Brasil, a família <i>Pelho</i> já recebeu diversos prêmios, 
			homenagens e condecorações. Todos os presidentes do Brasil já visitaram as instalações da Mirror 
			Fashion, além de presidentes da União Européia, Ásia e o secretário-geral da ONU.</p>

			<h2 id="diferenciais">Diferenciais</h2>
				<ul>
				    <li>Menor preço do varejo, garantido</li>
				    <li>Se você achar uma loja mais barata, leva o produto de graça</li>
				    <li>Pague em reais, dólares, euros ou bitcoins</li>
				    <li>Todas as compras com frete grátis para o mundo todo</li>
				    <li>Maior comércio eletrônico de moda do mundo</li>
				    <li>Atendimento via telefone, email, chat, twitter, facebook, carta, fax e telegrama</li>
				    <li>Presente em 124 países</li>
				    <li>Mais de um milhão de funcionários em todo o mundo</li>
				</ul>
	</article>
	<?php include("rodape.php");?>
	</body>
</html>
