<!doctype	html>
	<html>
		<head>
			<meta	charset="UTF-8">
			<title>Checkout	Mirror	Fashion</title>
			<meta	name="viewport" content="width=device-width">
			<link	rel="stylesheet" href="css/bootstrap.css">
		</head>
	<body>
		<div	class="jumbotron">
			<div	class="container">
				<h1> Ótima	escolha!</h1>
				<p>
					Obrigado	por	comprar	na	Mirror	Fashion!
					Preencha	seus	dados	para	efetivar	a	compra.
				</p>
			</div>
		</div>
		<div class="container">
			<div	class="row">
				<div	class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2>Sua	compra</h2>
						</div>
						<div class="panel-body">
							<img src="img/produtos/foto<?=	$_POST['id']	?>-<?=	$_POST['cor']	?>.png" class="img-thumbnail	img-responsive">
							<dl>
								<dt>Produto</dt>
									<dd><?=	$_POST["nome"]	?></dd>
								<dt>Preço</dt>
									<dd	id="preco">R$ <?= $_POST["preco"] ?></dd>
								<dt>Cor</dt>
									<dd><?=	$_POST["cor"] ?></dd>
								<dt>Tamanho</dt>
									<dd><?=	$_POST["tamanho"]	?></dd>
							</dl>
							<div	class="form-group">
								<label	for="qt">Quantidade</label>
								<input	id="qt" class="form-control" type="number" min="0" max="99" value="1">
							</div>
							<div class="form-group">
								<label	for="total">Total</label>
								
								<output	for="qt	preco" id="total" class="form-control">
									<?=	$_POST["preco"]	?>
								</output>
								<script	src="js/total.js"></script>
							</div>
						</div>
					</div>
				</div>
				<form class="col-sm-8">
					<fieldset	class="col-md-6">
							<legend>Dados	pessoais</legend>
							<div class="form-group">
								<label	for="nome">Nome	completo</label>
								<input	type="text" class="form-control" id="nome" name="nome" autofocus>
							</div>
							<div class="form-group">
								<label	for="email">Email</label>
								<input	type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
							</div>
							<div	class="form-group">
								<label	for="cpf">CPF</label>
								<input	type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" data-mask="999.999.999-99">
							</div>
							<div	class="checkbox">
								<label>
									<input	type="checkbox" value="sim" name="spam" checked>
										Quero	receber	spam	da	Mirror	Fashion
								</label>
							</div>
						</fieldset>
						<fieldset	class="col-md-6">
							<legend>Cartão	de	crédito</legend>
							<div	class="form-group">
								<label	for="numero-cartao">Número	-	CVV</label>
								<input	type="text" class="form-control" id="numero-cartao" name="numero-cartao" 	data-mask="9999	9999	9999	9999	-	999">
							</div>
							<div class="form-group">
								<label	for="bandeira-cartao">Bandeira</label>
								<select	name="bandeira-cartao" id="bandeira-cartao" class="form-control">
									<option	value="master">MasterCard</option>
									<option	value="visa">VISA</option>
									<option	value="amex">American	Express</option>
								</select>
							</div>
							<div	class="form-group">
								<label	for="validade-cartao">Validade</label>
								<input	type="month" class="form-control" id="validade-cartao" name="validade-cartao">
							</div>
						</fieldset>
						<button	type="submit" class="btn	btn-primary" class="btn-lg" class="pull-right">
							<span	class="glyphicon	glyphicon-thumbs-up"></span>
							Confirmar	Pedido
						</button>
					</form>
				</div>
			</div>
		</div>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script	src="js/inputmask-plugin.js"></script>
	</body>
</html>
