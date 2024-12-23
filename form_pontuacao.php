<?php 
include("app/topo.php"); 
include("checa_login.php"); 
?>
<body>
<?php 
include("app/cabecalho.php"); 
include("app/menulateral.php"); 
?>
		
		<!-- Inicio Conteúdo-->
		<div id="content" class="content">
			<!-- Inicio Caminho -->
			<ol class="breadcrumb float-xl-right">
				<li class="breadcrumb-item"><a>Configurações</a></li>
				<li class="breadcrumb-item"><a>Programas</a></li>
				<li class="breadcrumb-item active"><a>Pontuação</a></li>
			</ol>
			<!-- Fim Caminho -->
			<!-- Inicio Título da Página -->
			<h1 class="page-header">Regras de Pontuação de Compra</h1>
			<!-- Fim Título da Página -->

			<!-- Inicio do Painel -->
			<div class="panel panel-inverse">
				<!-- Inicio do Cabeçalho do Painel-->
				<div class="panel-heading">
					<h4 class="panel-title">Pontuação Regular</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					</div>
				</div>
				<!-- Fim Cabeçalho do Painel -->
				<!-- Inicio Corpo do Formulário -->
				<div class="panel-body">
					<div class="row row-space-30">
<?php include("app/ajudaformulario.php"); ?>
						<!-- Início de Formulário - largura 10 -->
						<div class="col-xl-10">
							<!-- Inicio Tipo de pontuação -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Tipo de pontuação</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<div class="custom-control custom-radio">
											  <input type="radio" id="pontuacaoporvalor" name="tipopontuacao" class="custom-control-input">
											  <label class="custom-control-label" for="pontuacaoporvalor">Por valor</label>
											</div>
											<div class="custom-control custom-radio">
											  <input type="radio" id="pontuacaoporvisita" name="tipopontuacao" class="custom-control-input">
											  <label class="custom-control-label" for="pontuacaoporvisita">Por visita</label>
											</div>
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Tipo de pontuação -->
							<!-- Inicio Categoria de participante -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Categoria de participante</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<input type="text" class="form-control" id="nome" readonly />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Categoria de participante -->
							<!-- Inicio Compra mínima -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Compra mínima</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<input type="text" class="form-control" id="compraminima" maxlength="14" placeholder="até 14 caracteres" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Compra mínima-->
							<!-- Inicio Valor do ponto -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Valor do ponto</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<input type="text" class="form-control" id="valordoponto" maxlength="10" placeholder="até 10 caracteres" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-descricao" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Valor do ponto -->
							<!-- Inicio Expiração dos pontos (em meses) -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Expiração dos pontos (em meses)</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<input type="text" class="form-control" id="expirapontos" maxlength="4" placeholder="até 4 caracteres" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-descricao" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Expiração dos pontos (em meses) -->
						</div>
						<!-- Fim de Formulário-->
						<!-- Início Coluna - largura 2 -->
						<div class="col-xl-2">
						</div>
						<!-- Fim Coluna - largura 2 -->
						<!-- Início Coluna - largura 8 -->
						<div class=" col-xl-8">
							<!-- Início Corpo do Painel -->
							<div class="panel-body text-center">
								<table class="table table-striped table-bordered table-td-valign-middle">
									<thead>
										<tr>
											<th class="text-nowrap" data-orderable="false">Categoria</th>
											<th class="text-nowrap" >Compra mínima</th>
											<th class="text-nowrap" >Valor do ponto</th>
											<th class="text-nowrap" >Expira em (meses)</th>
										</tr>
									</thead>
									<tbody>
										<tr class="gradeA">
											<td>VIP</td>
											<td>R$ 10,00</td>
											<td>1</td>
											<td>6</td>
										</tr>
										<tr class="gradeA">
											<td>SILVER</td>
											<td>R$ 5,00</td>
											<td>1</td>
											<td>6</td>
										</tr>
										<tr class="gradeA">
											<td>GOLD</td>
											<td>R$ 0,00</td>
											<td>1</td>
											<td>12</td>
										</tr>
										<tr class="gradeA">
											<td>DIAMOND</td>
											<td>R$ 0,00</td>
											<td>1</td>
											<td>24</td>
										</tr>
									</tbody>
								</table>
								<br>
								<!-- Inicio Botão -->
								<div class="col-md-12 text-center">
									<a href="javascript:;" class="btn btn-default m-r-5"><i class="fa fa-edit"></i>  Editar</a>
									<a href="javascript:;" class="btn btn-default m-r-5"><i class="fa fa-upload"></i>  Salvar</a>
									<a href="javascript:;" class="btn btn-default m-r-5"><i class="fa fa-reply"></i>  Voltar</a>
								</div>
								<!-- Fim Botão -->
							</div>
							<!-- Fim Corpo do Painel -->
						</div>
						<!-- Fim Coluna - largura 8 -->
					</div>
					<!-- Fim do Painel -->
				</div>
				<!-- Fim Corpo do Formulário-->
			</div>
			<!-- Fim Bloco -->

			<!-- Inicio do Painel -->
			<div class="panel panel-inverse">
				<!-- Inicio do Cabeçalho do Painel-->
				<div class="panel-heading">
					<h4 class="panel-title">Pontuação Avulsa</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					</div>
				</div>
				<!-- Fim Cabeçalho do Painel -->
				<!-- Inicio Corpo do Formulário -->
				<div class="panel-body">
					<div class="row row-space-30">
<?php include("app/ajudaformulario.php"); ?>
						<!-- Início de Formulário - largura 10 -->
						<div class="col-xl-10">
							<!-- Inicio Tipo de pontuação -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Produto</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<select class="form-control">
												<option>Eletrônicos</option>
												<option>Eletrodomésticos</option>
												<option>Jardinagem</option>
											</select>
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Tipo de pontuação -->
							<!-- Inicio Categoria de participante -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Categoria de participante</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<select class="form-control">
												<option>VIP</option>
												<option>SILVER</option>
												<option>GOLD</option>
												<option>DIAMOND</option>
											</select>
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Categoria de participante -->
							<!-- Inicio Compra mínima -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Pontuação</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<input type="text" class="form-control" id="compraminima" maxlength="14" placeholder="até 14 caracteres" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Compra mínima-->
							<!-- Inicio Intervalo de data-->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Período</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 input-group input-daterange">
											<input type="text" class="form-control" name="datainicial" placeholder="Data inicial" />
											<span class="input-group-addon">até</span>
											<input type="text" class="form-control" name="datafinal" placeholder="Data final" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Intervalo de data -->
						</div>
						<!-- Fim de Formulário-->
						<!-- Início Coluna - largura 2 -->
						<div class="col-xl-2">
						</div>
						<!-- Fim Coluna - largura 2 -->
						<!-- Início Coluna - largura 8 -->
						<div class=" col-xl-8">
							<!-- Início Corpo do Painel -->
							<div class="panel-body text-center">
								<table class="table table-striped table-bordered table-td-valign-middle">
									<thead>
										<tr>
											<th class="text-nowrap" data-orderable="false">Categoria</th>
											<th class="text-nowrap" >Compra mínima</th>
											<th class="text-nowrap" >Valor do ponto</th>
											<th class="text-nowrap" >Expira em (meses)</th>
										</tr>
									</thead>
									<tbody>
										<tr class="gradeA">
											<td>VIP</td>
											<td>R$ 10,00</td>
											<td>1</td>
											<td>6</td>
										</tr>
										<tr class="gradeA">
											<td>SILVER</td>
											<td>R$ 5,00</td>
											<td>1</td>
											<td>6</td>
										</tr>
										<tr class="gradeA">
											<td>GOLD</td>
											<td>R$ 0,00</td>
											<td>1</td>
											<td>12</td>
										</tr>
										<tr class="gradeA">
											<td>DIAMOND</td>
											<td>R$ 0,00</td>
											<td>1</td>
											<td>24</td>
										</tr>
									</tbody>
								</table>
								<br>
								<!-- Inicio Botão -->
								<div class="col-md-12 text-center">
									<a href="javascript:;" class="btn btn-default m-r-5"><i class="fa fa-edit"></i>  Editar</a>
									<a href="javascript:;" class="btn btn-default m-r-5"><i class="fa fa-upload"></i>  Salvar</a>
									<a href="javascript:;" class="btn btn-default m-r-5"><i class="fa fa-reply"></i>  Voltar</a>
								</div>
								<!-- Fim Botão -->
							</div>
							<!-- Fim Corpo do Painel -->
						</div>
						<!-- Fim Coluna - largura 8 -->
					</div>
					<!-- Fim do Painel -->
				</div>
				<!-- Fim largura 12 -->
			</div>
			<!-- Fim Bloco -->


<?php include("app/ajudacampo.php"); ?>

			<!-- Início Rolagem para o Topo -->
			<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
			<!-- Fim Rolagem para o Topo-->
		</div>
		<!-- Fim Conteúdo-->
	</div>
	<!-- Fim Página (aberto no cabecalho.php) -->
	
<footer class="site-footer fixarRodape" >
	<?php include("app/rodape.php"); ?>
</footer>

</body>
</html>