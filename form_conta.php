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
				<li class="breadcrumb-item active"><a>Minha Conta</a></li>
			</ol>
			<!-- Fim Caminho -->
			<!-- Inicio Título da Página -->
			<h1 class="page-header">Minha Conta</h1>
			<!-- Fim Título da Página -->

			<!-- Início Bloco -->
			<div class="row">
				<!-- Início largura-12 -->
				<div class="col-xl-12">
					<!-- Início Painel -->
					<div class="panel panel-inverse" data-sortable-id="regular">
						<!-- Início Cabeçalho do Painel -->
						<div class="panel-heading">
							<h4 class="panel-title">Minha Conta</h4>
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
									<!-- Inicio Responsável -->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Responsável</label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<input type="text" class="form-control" id="responsavel" maxlength="40" placeholder="até 40 caracteres" />
												</div>
												<div class="col-xs-1 mb-2 mb-sm-0">
													<a href="#modal-responsavel" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Responsável -->
									<!-- Inicio E-mail -->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">E-mail</label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<input type="email" class="form-control" id="email" maxlength="60" placeholder="até 60 caracteres" />
												</div>
												<div class="col-xs-1 mb-2 mb-sm-0">
													<a href="#modal-email" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim E-mail -->
									<!-- Inicio Nome da Empresa -->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Nome da Empresa</label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<input type="text" class="form-control" id="nomeempresa" maxlength="100" placeholder="até 100 caracteres" />
												</div>
												<div class="col-xs-1 mb-2 mb-sm-0">
													<a href="#modal-nomeempresa" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Nome da Empresa -->
									<!-- Inicio Telefone fixo -->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Telefone fixo</label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<input type="text" class="form-control" id="telefonefixo" maxlength="14" placeholder="até 14 caracteres" />
												</div>
												<div class="col-xs-1 mb-2 mb-sm-0">
													<a href="#modal-telefonefixo" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Telefone fixo -->
									<!-- Inicio Celular -->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Celular</label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<input type="text" class="form-control" id="celular" maxlength="14" placeholder="até 14 caracteres" />
												</div>
												<div class="col-xs-1 mb-2 mb-sm-0">
													<a href="#modal-celular" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Celular -->
									<!-- Inicio Tipo de Documento -->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Tipo de Documento</label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<select class="form-control">
														<option>CPF</option>
														<option>CNPJ</option>
													</select>
												</div>
												<div class="col-xs-1 mb-2 mb-sm-0">
													<a href="#modal-tipodocumento" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Tipo de Documento -->
									<!-- Inicio Número do documento -->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Número do documento</label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<input type="text" class="form-control" id="numerodocumento" maxlength="18" placeholder="até 18 caracteres" />
												</div>
												<div class="col-xs-1 mb-2 mb-sm-0">
													<a href="#modal-numerodocumento" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Número do documento -->
									<!-- Inicio Endereço Completo -->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Endereço Completo</label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<input type="text" class="form-control" id="endereçocompleto" maxlength="100" placeholder="até 100 caracteres" />
												</div>
												<div class="col-xs-1 mb-2 mb-sm-0">
													<a href="#modal-endereçocompleto" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Endereço Completo-->
									<!-- Inicio Área de atuação-->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Área de atuação</label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<select class="form-control">
														<option>Alimentos</option>
														<option>Comércio</option>
														<option>Serviços</option>
													</select>
												</div>
												<div class="col-xs-1 mb-2 mb-sm-0">
													<a href="#modal-numerodocumento" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Área de atuação -->
									<!-- Inicio Onde nos encontrou? -->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Onde nos encontrou?</label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<select class="form-control">
														<option>Pesquisa no Google</option>
														<option>Indicação de amigo</option>
														<option>Contato direto</option>
														<option>Outros meios</option>
													</select>
												</div>
												<div class="col-xs-1 mb-2 mb-sm-0">
													<a href="#modal-numerodocumento" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Onde nos encontrou? -->
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