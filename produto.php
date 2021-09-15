
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dynalight&display=swap" rel="stylesheet">
<?php
	$conexao	=	mysqli_connect("localhost",	"id16090535_root",	"PI^~)&zN^ll{62Gb",	"id16090535_wd43");
	$dados	=	mysqli_query($conexao,	"SELECT	*	FROM	produtos	WHERE	id	=	$_GET[id]");
	$produto	=	mysqli_fetch_array($dados);
?>


<?php 
$cabecalho_css = '<link rel="stylesheet" href="css/produto.css">'; 

?>

<?php 
$cabecalho_title = 	$produto['nome'];
include("cabecalho.php"); 
?>
<link rel="stylesheet" href="css/produto.css">
<div class="produto-back">
	<div class="container">
	  <div class="produto">
		<h1><?=	$produto['nome']	?></h1>
		<p>por	apenas	<?=	$produto['preco']	?></p>
		<form action="checkout.php" method="POST">
			<fieldset class="cores">
		
			<legend>Escolha a cor:</legend>
		
			<input type="radio" name="cor" value="verde" id="verde" checked>
			<label for="verde">
				<img	src="img/produtos/foto<?=	$produto['id']	?>-verde.png" alt="verde">
			</label>
			
			<input type="radio" name="cor" value="rosa" id="rosa">
			<label for="rosa">
				<img	src="img/produtos/foto<?=	$produto['id']	?>-rosa.png" alt="rosa">
			</label>
			
			<input type="radio" name="cor" value="azul" id="azul">
			<label for="azul">
				<img	src="img/produtos/foto<?=	$produto['id']	?>-azul.png" alt="azul">
			</label>
		
			</fieldset>
		
			<fieldset class="tamanhos">
				<legend>Escolha o tamanho:</legend>
				<input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
				<output for="tamanho" name="valortamanho">42</output>
			</fieldset>
			<input type="submit" class="comprar" value="Comprar">
			<input type="hidden" name="nome" value="<?=	$produto['nome']	?>">
			<input type="hidden" name="preco" value="<?=	$produto['preco']	?>">
			<input	type="hidden"	name="id"	value="<?=	$produto['id']	?>">
		</form>
	</div>
		<div class="detalhes">
			<h2>Detalhes do produto</h2>
				<p><?=	$produto['descricao']	?></p>
				
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
							<td>Material</td>
							<td>Algodão e poliester</td>
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
<script>

	var inputTamanho = document.querySelector('[name=tamanho]')
	var outputTamanho = document.querySelector('[name=valortamanho]')
	function mostraTamanho(){
		outputTamanho.value = inputTamanho.value
	}
	inputTamanho.oninput = mostraTamanho
	inputTamanho.onchange = mostraTamanho
</script>
<?php include("rodape.php"); ?>
</body>
</html>