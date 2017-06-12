<form class="col-sm-8 col-lg-9">
					<div class="row">
						<fieldset class="col-md-6">
							<legend>Dados Pessoais</legend>
							<div class="form-group">
								<label for="nome">Nome Completo</label>
								<input type="text" class="form-control" id="nome" name="nome" autofocus required></input>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="email@examplo.com"></input>
							</div>
							<div class="form-group">
								<label for="cpf">CPF</label>
								<input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" data-mask="999.999.999-99" required></input>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" value="sim" name="spam" checked="">
									Quero receber spam da Mirror Fashion
								</label>		
							</div>
						</fieldset>