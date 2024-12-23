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
				<li class="breadcrumb-item"><a>Operação do Sistema</a></li>
				<li class="breadcrumb-item active"><a>Meu Plano</a></li>
			</ol>
			<!-- Fim Caminho -->
			<!-- Inicio Título da Página -->
			<h1 class="page-header">Meu Plano</h1>
			<!-- Fim Título da Página -->

			<!-- Início Bloco -->
			<div class="row">
				<!-- Início largura-12 -->
				<div class="col-xl-12">
					<!-- Início Painel -->
					<div class="panel panel-inverse" data-sortable-id="regular">
						<!-- Início Cabeçalho do Painel -->
						<div class="panel-heading">
							<h4 class="panel-title">Meu Plano</h4>
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							</div>
						</div>
						<!-- Fim Cabeçalho do Painel -->
						<!-- Início Corpo do Painel-->
						<div class="panel-body">
							<!-- Início Bloco -->
							<div class="row">
<?php include("app/ajudaformulario.php"); ?>
							<!-- Início de Formulário - largura 10 -->
							<div class="col-xl-10">
								<!-- Inicio Plano atual -->
								<div class="form-group row m-b-15">
									<label class="col-form-label-lg col-md-3">Plano atual</label>
									<div class="col-md-9">
										<div class="row row-space-10">
											<div class="col-xs-11 mb-2 mb-sm-0">
												<select class="form-control">
													<option>Amostra Grátis</option>
													<option>Atende</option>
													<option selected="selected">Resolve</option>
													<option>Surpreende</option>
												</select>
											</div>
											<div class="col-xs-1 mb-2 mb-sm-0">
												<a href="#modal-planoatual" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
													<i class="fa fa-info"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim Plano atual -->
								<!-- Inicio Situação do plano -->
								<div class="form-group row m-b-15">
									<label class="col-form-label-lg col-md-3">Situação do plano</label>
									<div class="col-md-9">
										<div class="row row-space-10">
											<div class="col-xs-11 mb-2 mb-sm-0">
												<input type="text" class="form-control" id="situaçãoplano" placeholder="Solicitação de mudança realizada. Aguardando pagamento" readonly />
											</div>
											<div class="col-xs-1 mb-2 mb-sm-0">
												<a href="#modal-situaçãoplano" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
													<i class="fa fa-info"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim Situação do plano -->
								<!-- Inicio E-mail para cobrança-->
								<div class="form-group row m-b-15">
									<label class="col-form-label-lg col-md-3">E-mail para cobrança</label>
									<div class="col-md-9">
										<div class="row row-space-10">
											<div class="col-xs-11 mb-2 mb-sm-0">
												<input type="email" class="form-control" id="emailcobranca" maxlength="60" placeholder="até 60 caracteres" />
											</div>
											<div class="col-xs-1 mb-2 mb-sm-0">
												<a href="#modal-emailcobranca" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
													<i class="fa fa-info"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim E-mail para cobrança -->
								<!-- Inicio Meio de pagamento-->
								<div class="form-group row m-b-15">
									<label class="col-form-label-lg col-md-3">Meio de pagamento</label>
									<div class="col-md-9">
										<div class="row row-space-10">
											<div class="col-xs-11 mb-2 mb-sm-0">
												<select class="form-control">
													<option>Cartão de Crédito</option>
													<option>Ficha de Compensação</option>
												</select>
											</div>
											<div class="col-xs-1 mb-2 mb-sm-0">
												<a href="#modal-meiopagamento" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
													<i class="fa fa-info"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim Meio de pagamento -->
								<!-- Inicio Periodicidade -->
								<div class="form-group row m-b-15">
									<label class="col-form-label-lg col-md-3">Periodicidade</label>
									<div class="col-md-9">
										<div class="row row-space-10">
											<div class="col-xs-11 mb-2 mb-sm-0">
												<select class="form-control">
													<option>Mensal</option>
													<option>Anual</option>
												</select>
											</div>
											<div class="col-xs-1 mb-2 mb-sm-0">
												<a href="#modal-periodicidade" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
													<i class="fa fa-info"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim Periodicidade -->
								<!-- Inicio Dia de vencimento-->
								<div class="form-group row m-b-15">
									<label class="col-form-label-lg col-md-3">Dia de vencimento</label>
									<div class="col-md-9">
										<div class="row row-space-10">
											<div class="col-xs-11 mb-2 mb-sm-0">
												<input type="text" class="form-control" id="vencimento" maxlength="2" placeholder="até 2 caracteres" />
											</div>
											<div class="col-xs-1 mb-2 mb-sm-0">
												<a href="#modal-vencimento" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
													<i class="fa fa-info"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim Dia de vencimento -->
								<!-- Inicio Vencimento do plano -->
								<div class="form-group row m-b-15">
									<label class="col-form-label-lg col-md-3">Vencimento do plano</label>
									<div class="col-md-9">
										<div class="row row-space-10">
											<div class="col-xs-11 mb-2 mb-sm-0">
												<input type="text" class="form-control" id="vencimentopagamento" maxlength="18" placeholder="15/08/2021" readonly />
											</div>
											<div class="col-xs-1 mb-2 mb-sm-0">
												<a href="#modal-vencimentoplano" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
													<i class="fa fa-info"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim Vencimento do plano -->
							</div>
							<!-- Fim de Formulário-->
							<!-- Início Coluna - largura 2 -->
							<div class="col-2">
							</div>
							<!-- Fim Coluna - largura 2 -->
							<!-- Início Coluna - largura 8 -->
							<div class=" col-8">
								<!-- Início Corpo do Painel -->
								<div class="panel-body text-center">
									<!-- Inicio Botão -->
									<div class="col-md-12 text-center">
										<a href="javascript:;" class="btn btn-default m-r-5"><i class="fa fa-upload"></i>  Salvar</a>
									</div>
									<!-- Fim Botão -->
								</div>
								<!-- Fim Corpo do Painel -->
							</div>
							<!-- Fim Coluna - largura 8 -->
						</div>
						<!-- Fim Bloco -->
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