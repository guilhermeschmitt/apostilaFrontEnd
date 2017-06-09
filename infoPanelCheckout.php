			<div class="row">
				<div class="col-sm-4 col-lg-3">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h2 class="panel-title">Sua compra</h2>
						</div>
						<div class="panel-body">
							<img src="img/produtos/foto<?= $_POST['numero'] ?>-<?= $_POST['cor']?>.png" class="img-thumbnail img-responsive">
							<dl>
								<dt>Produto</dt>
								<dd><?= $_POST['nome'] ?></dd>

								<dt>Preço</dt>
								<dd id="preco"><?= $_POST['preco'] ?></dd>

								<dt>Cor</dt>
								<dd><?= $_POST['cor'] ?></dd>

								<dt>Tamanho</dt>
								<dd><?= $_POST['tamanho'] ?></dd>
							</dl>
							<div class="form-group">
								<label for="qt">Quantidade</label>
								<input id="qt" class="form-control" type="number" min="0" max="99" value="1">
							</div>
							<div class="form-group">
								<label for="total">Total</label>
								<output for="qt valor" id="total" class="form-control">
									<?= $_POST["preco"] ?>
								</output>
							</div>
						</div>
					</div>
				</div>		