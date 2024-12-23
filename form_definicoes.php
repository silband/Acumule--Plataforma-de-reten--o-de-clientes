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
				<li class="breadcrumb-item active"><a>Definições</a></li>
			</ol>
			<!-- Fim Caminho -->
			<!-- Inicio Título da Página -->
			<h1 class="page-header">Definição dos Programas</h1>
			<!-- Fim Título da Página -->

			<!-- Inicio do Painel -->
			<div class="panel panel-inverse">
				<!-- Inicio do Cabeçalho do Painel-->
				<div class="panel-heading">
					<h4 class="panel-title">Definição dos Programas</h4>
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
							<!-- Inicio Endereço Hotsite -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Endereço Hotsite</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<input type="text" class="form-control" id="compraminima" maxlength="30" placeholder="até 30 caracteres sem espaços" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Endereço Hotsite-->
							<!-- Inicio Login com Facebook-->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Login com Facebook</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<div class="form-control border-0 custom-switch">
												<input type="checkbox" class="custom-control-input" id="facebook" />
												<label class="custom-control-label" for="facebook">Os participantes dos programas poderão se logar no Hotsite usando o Facebook</label>
											</div>
										</div>
										<div class="col-xs-1">
											<a href="#modal-ativo" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Login com Facebook-->
							<!-- Inicio Compartilhamento por filiais-->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Compartilhamento por filiais</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<div class="form-control border-0 custom-switch">
												<input type="checkbox" class="custom-control-input" id="compartilha" />
												<label class="custom-control-label" for="compartilha">Todas as filiais compartilham os pontos e premios dos programas</label>
											</div>
										</div>
										<div class="col-xs-1">
											<a href="#modal-ativo" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Compartilhamento por filiais-->
							<!-- Inicio E-mail do responsável -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">	E-mail do responsável</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<input type="text" class="form-control" id="compraminima" maxlength="60" placeholder="até 60 caracteres sem espaços" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim E-mail do responsável-->
							<!-- Inicio Número de Dias para Participante Inativo -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Número de Dias para Participante Inativo</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<input type="text" class="form-control" id="compraminima" maxlength="4" placeholder="até 4 caracteres sem espaços" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Número de Dias para Participante Inativo-->
						</div>
						<!-- Fim de Formulário-->
						<!-- Início Coluna - largura 2 -->
						<div class="col-xl-2">
						</div>
						<!-- Fim Coluna - largura 2 -->
						<!-- Início de Formulário - largura 10 -->
						<div class="col-xl-9 bg-grey">
							<br>
							<!-- begin nav-tabs -->
							<ul class="nav nav-tabs bg-grey">
								<li class="nav-item bg-grey">
									<a href="#default-tab-1" data-toggle="tab" class="nav-link active">
										<span class="d-sm-none">Pontos</span>
										<span class="d-sm-block d-none">Programa de pontos</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="#default-tab-2" data-toggle="tab" class="nav-link">
										<span class="d-sm-none">Cashback</span>
										<span class="d-sm-block d-none">Programa de cashback</span>
									</a>
								</li>
							</ul>
							<!-- end nav-tabs -->
							<!-- begin tab-content -->
							<div class="tab-content">
								<!-- begin tab-pane -->
								<div class="tab-pane fade active show" id="default-tab-1">
									<!-- Inicio Programa de Pontos Ativo-->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Programa de Pontos Ativo</label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<div class="form-control border-0 custom-switch">
														<input type="checkbox" class="custom-control-input" id="pontos" />
														<label class="custom-control-label" for="pontos">Todas as compras dos participantes gerarão pontos.</label>
													</div>
												</div>
												<div class="col-xs-1">
													<a href="#modal-ativo" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Programa de Pontos Ativo-->
									<!-- Inicio Nome -->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Nome </label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<input type="text" class="form-control" id="compraminima" maxlength="40" placeholder="até 40 caracteres" />
												</div>
												<div class="col-xs-1 mb-2 mb-sm-0">
													<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Nome -->
									<!-- Inicio Moeda no singular-->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Moeda no singular</label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<input type="text" class="form-control" id="compraminima" maxlength="20" placeholder="até 20 caracteres" />
												</div>
												<div class="col-xs-1 mb-2 mb-sm-0">
													<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Moeda no singular-->
									<!-- Inicio Moeda no plural-->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Moeda no plural</label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<input type="text" class="form-control" id="compraminima" maxlength="20" placeholder="até 20 caracteres" />
												</div>
												<div class="col-xs-1 mb-2 mb-sm-0">
													<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Moeda no plural-->
									<!-- Inicio Pontos iniciais-->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Pontos iniciais</label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<input type="text" class="form-control" id="compraminima" maxlength="4" placeholder="até 4 caracteres" />
												</div>
												<div class="col-xs-1 mb-2 mb-sm-0">
													<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Pontos iniciais -->
								</div>
								<!-- end tab-pane -->
								<!-- begin tab-pane -->
								<div class="tab-pane fade" id="default-tab-2">
									<!-- Inicio Programa de Cashback Ativo-->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Programa de Cashback Ativo</label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<div class="form-control border-0 custom-switch">
														<input type="checkbox" class="custom-control-input" id="cashback" />
														<label class="custom-control-label" for="cashback">Parte do valor pago pelos participantes será devolvido em forma de vale-compra.</label>
													</div>
												</div>
												<div class="col-xs-1">
													<a href="#modal-ativo" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Programa de Cashback Ativo-->
									<!-- Inicio Nome -->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Nome </label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<input type="text" class="form-control" id="compraminima" maxlength="40" placeholder="até 40 caracteres" />
												</div>
												<div class="col-xs-1 mb-2 mb-sm-0">
													<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Nome -->
									<!-- Inicio Moeda no singular-->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Moeda no singular</label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<input type="text" class="form-control" id="compraminima" maxlength="20" placeholder="até 20 caracteres" />
												</div>
												<div class="col-xs-1 mb-2 mb-sm-0">
													<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Moeda no singular-->
									<!-- Inicio Moeda no plural-->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Moeda no plural</label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<input type="text" class="form-control" id="compraminima" maxlength="20" placeholder="até 20 caracteres" />
												</div>
												<div class="col-xs-1 mb-2 mb-sm-0">
													<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Moeda no plural-->
									<!-- Inicio Pontos iniciais-->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Valor inicial</label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<input type="text" class="form-control" id="compraminima" maxlength="4" placeholder="até 4 caracteres" />
												</div>
												<div class="col-xs-1 mb-2 mb-sm-0">
													<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Pontos iniciais -->
								</div>
								<!-- end tab-pane -->
							</div>
							<!-- end pane -->
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
								<br>
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