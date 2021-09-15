<link href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script'
rel='stylesheet'>


 <?php 
$cabecalho_title = "Página inicial da Mirror Fashion";
include("cabecalho.php"); 
?>

<script>

	var mensagem = "Olá mundo";
		console.log(mensagem);
	var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
	var bannerAtual = 0;
	function trocaBanner() {
		bannerAtual = (bannerAtual + 1) % 2;
		document.querySelector('.destaque img').src = banners[bannerAtual];
	}
	
	var timer = setInterval(trocaBanner, 4000);
	var controle = document.querySelector('.pause');
		controle.onclick = function() {
			if (controle.className == 'pause') {
				clearInterval(timer);
				controle.className = 'play';
			} else {
				timer = setInterval(trocaBanner, 4000);
				controle.className = 'pause';
			}
			return false;
		};
</script>
		<div class="container destaque">
			<section class="busca">
				<h2>Busca</h2>
				<form>
					<input	type="search">
					<input	type="image" src="img/busca.png">
				</form>
			</section>
			<section class="menu-departamentos">
			<h2>Departamentos</h2>
			<nav>
				<ul>
					<li>
						<ahref="#">Blusas e Camisas</a>
						<ul>
							<li><a	href="#">Manga	curta</a></li>
							<li><a	href="#">Manga	comprida</a></li>
							<li><a	href="#">Camisa	social</a></li>
							<li><a	href="#">Camisa	casual</a></li>
						</ul>
					</li>
					<li><a	href="#">Calças</a></li>
					<li><a	href="#">Saias</a></li>
					<li><a	href="#">Vestidos</a></li>
					<li><a	href="#">Sapatos</a></li>
					<li><a	href="#">Bolsas	e Carteiras</a></li>
					<li><a	href="#">Acessórios</a></li>
				</ul>
			</nav>
			</section>
			<img src="img/destaque-home.png" alt="Promoção:	Big City Night">
		</div>
		<div class="container paineis" class="painel-compacto" >
		<script	src="js/jquery.js"></script>
		<script	src="js/home.js"></script>
		<section	class="painel	novidades">
			<h2>Novidades</h2>
			<ol>
				<?php
					$conexao	=	mysqli_connect("localhost",	"id16090535_root",	"PI^~)&zN^ll{62Gb",	"id16090535_wd43");
					$dados	=	mysqli_query($conexao,	"SELECT	*	FROM	produtos	ORDER BY data DESC LIMIT	0,	6");
					while	($produto	=	mysqli_fetch_array($dados)):
			?>
			<li>
					<a	href="produto.php?id=<?=	$produto['id']	?>">
							<figure>
									<img	src="img/produtos/miniatura<?=	$produto['id']	?>.png"
														alt="<?=	$produto['nome']	?>">
									<figcaption><?=	$produto['nome']	?>	por	<?=	$produto['preco']	?></figcaption>
							</figure>
					</a>
			</li>
			<?php	endwhile;	?>
			</ol>
			<button	type="button">Mostra	mais</button>
		</section>
		<section class="painel	mais-vendidos">
			<h2>Mais Vendidos</h2>
			<ol>
				<?php
					$conexao	=	mysqli_connect("localhost",	"id16090535_root",	"PI^~)&zN^ll{62Gb",	"id16090535_wd43");
					$dados	=	mysqli_query($conexao,	"SELECT	*	FROM	produtos	LIMIT	0, 6");
					while	($produto	=	mysqli_fetch_array($dados)):
			?>
			<li>
					<a	href="produto.php?id=<?=	$produto['id']	?>">
							<figure>
									<img	src="img/produtos/miniatura<?=	$produto['id']	?>.png"
														alt="<?=	$produto['nome']	?>">
									<figcaption><?=	$produto['nome']	?>	por	<?=	$produto['preco']	?></figcaption>
							</figure>
					</a>
			</li>
			<?php	endwhile;	?>
			</ol>
			<button	type="button">Mostra	mais</button>
		</section>
		</div>
		<?php include("rodape.php"); ?>

	</body>

</html>