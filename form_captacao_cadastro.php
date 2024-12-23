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
				<li class="breadcrumb-item active"><a>Captação de cadastro</a></li>
			</ol>
			<!-- Fim Caminho -->
			<!-- Inicio Título da Página -->
			<h1 class="page-header">Captação de cadastro</h1>
			<!-- Fim Título da Página -->

			<!-- Inicio do Painel -->
			<div class="panel panel-inverse">
				<!-- Inicio do Cabeçalho do Painel-->
				<div class="panel-heading">
					<h4 class="panel-title">Captação de cadastro</h4>
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
							<!-- Inicio CNPJ -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">CNPJ</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<div class="form-control border-0 custom-switch">
												<input type="checkbox" class="custom-control-input" id="ativo" />
												<label class="custom-control-label" for="ativo">Aceita empresas como participante dos programs</label>
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
							<!-- Fim CNPJ-->
							<!-- Inicio Identificação de participante -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Identificação de participante</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<div class="custom-control custom-radio">
											  <input type="radio" id="identificacaotelefone" name="identificacao" class="custom-control-input">
											  <label class="custom-control-label" for="identificacaotelefone">Telefone</label>
											</div>
											<div class="custom-control custom-radio">
											  <input type="radio" id="identificacaoemail" name="identificacao" class="custom-control-input">
											  <label class="custom-control-label" for="identificacaoemail">E-mail</label>
											</div>
											<div class="custom-control custom-radio">
											  <input type="radio" id="identificacaocpfcnpj" name="identificacao" class="custom-control-input">
											  <label class="custom-control-label" for="identificacaocpfcnpj">CPF/CNPJ</label>
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
							<!-- Fim Identificação de participante -->
							<!-- Inicio Campos extras -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Campos extras</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<div class="form-control border-0 custom-switch">
												<input type="checkbox" class="custom-control-input" id="campoextra" />
												<label class="custom-control-label" for="campoextra">Incluir campos extras na captação de cadastro</label>
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
							<!-- Fim Campos extras-->
							<div class=" col-xl-11">
								<!-- begin #accordion -->
								<div id="accordion" class="accordion">
									<!-- begin card -->
									<div class="card">
										<div class="border-0 card-header bg-white align-items-center collapsed" data-toggle="collapse" data-target="#collapseOne">
											<i class="mr-2 f-s-8"></i> Campo extra #1
										</div>
										<div id="collapseOne" class="collapse" data-parent="#accordion">
											<div class="card-body">
												<!-- Inicio Nome do campo -->
												<div class="form-group row m-b-15">
													<label class="col-form-label-lg col-md-3">Nome do campo</label>
													<div class="col-md-9">
														<div class="row row-space-10">
															<div class="col-xs-11 mb-2 mb-sm-0">
																<input type="text" class="form-control" id="referencia" maxlength="20" placeholder="até 20 caracteres" />
															</div>
															<div class="col-xs-1 mb-2 mb-sm-0">
																<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																	<i class="fa fa-info"></i>
																</a>
															</div>
														</div>
													</div>
												</div>
												<!-- Fim Nome do campo -->
												<!-- Inicio Tipo de seleção -->
												<div class="form-group row m-b-15">
													<label class="col-form-label-lg col-md-3">Tipo de seleção</label>
													<div class="col-md-9">
														<div class="row row-space-10">
															<div class="col-xs-11 mb-2 mb-sm-0">
																<select class="form-control">
																	<option>Simples</option>
																	<option>Multipla</option>
																</select>
															</div>
															<div class="col-xs-1 mb-2 mb-sm-0">
																<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																	<i class="fa fa-info"></i>
																</a>
															</div>
														</div>
													</div>
												</div>
												<!-- Fim Tipo de seleção -->
											</div>
										</div>
									</div>
									<!-- end card -->
									<!-- begin card -->
									<div class="card">
										<div class="border-0 card-header bg-white align-items-center collapsed" data-toggle="collapse" data-target="#collapseTwo">
											<i class="mr-2 f-s-8"></i> Campo extra #2
										</div>
										<div id="collapseTwo" class="collapse" data-parent="#accordion">
											<div class="card-body">
												<!-- Inicio Nome do campo -->
												<div class="form-group row m-b-15">
													<label class="col-form-label-lg col-md-3">Nome do campo</label>
													<div class="col-md-9">
														<div class="row row-space-10">
															<div class="col-xs-11 mb-2 mb-sm-0">
																<input type="text" class="form-control" id="referencia" maxlength="20" placeholder="até 20 caracteres" />
															</div>
															<div class="col-xs-1 mb-2 mb-sm-0">
																<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																	<i class="fa fa-info"></i>
																</a>
															</div>
														</div>
													</div>
												</div>
												<!-- Fim Nome do campo -->
												<!-- Inicio Tipo de seleção -->
												<div class="form-group row m-b-15">
													<label class="col-form-label-lg col-md-3">Tipo de seleção</label>
													<div class="col-md-9">
														<div class="row row-space-10">
															<div class="col-xs-11 mb-2 mb-sm-0">
																<select class="form-control">
																	<option>Simples</option>
																	<option>Multipla</option>
																</select>
															</div>
															<div class="col-xs-1 mb-2 mb-sm-0">
																<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																	<i class="fa fa-info"></i>
																</a>
															</div>
														</div>
													</div>
												</div>
												<!-- Fim Tipo de seleção -->
											</div>
										</div>
									</div>
									<!-- end card -->
									<!-- begin card -->
									<div class="card">
										<div class="border-0 card-header bg-white align-items-center collapsed" data-toggle="collapse" data-target="#collapseThree">
											<i class="mr-2 f-s-8"></i> Campo extra #3
										</div>
										<div id="collapseThree" class="collapse" data-parent="#accordion">
											<div class="card-body">
												<!-- Inicio Nome do campo -->
												<div class="form-group row m-b-15">
													<label class="col-form-label-lg col-md-3">Nome do campo</label>
													<div class="col-md-9">
														<div class="row row-space-10">
															<div class="col-xs-11 mb-2 mb-sm-0">
																<input type="text" class="form-control" id="referencia" maxlength="20" placeholder="até 20 caracteres" />
															</div>
															<div class="col-xs-1 mb-2 mb-sm-0">
																<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																	<i class="fa fa-info"></i>
																</a>
															</div>
														</div>
													</div>
												</div>
												<!-- Fim Nome do campo -->
												<!-- Inicio Tipo de seleção -->
												<div class="form-group row m-b-15">
													<label class="col-form-label-lg col-md-3">Tipo de seleção</label>
													<div class="col-md-9">
														<div class="row row-space-10">
															<div class="col-xs-11 mb-2 mb-sm-0">
																<select class="form-control">
																	<option>Simples</option>
																	<option>Multipla</option>
																</select>
															</div>
															<div class="col-xs-1 mb-2 mb-sm-0">
																<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																	<i class="fa fa-info"></i>
																</a>
															</div>
														</div>
													</div>
												</div>
												<!-- Fim Tipo de seleção -->
											</div>
										</div>
									</div>
									<!-- end card -->
									<!-- begin card -->
									<div class="card">
										<div class="border-0 card-header bg-white align-items-center collapsed" data-toggle="collapse" data-target="#collapseFour">
											<i class="mr-2 f-s-8"></i> Campo extra #4
										</div>
										<div id="collapseFour" class="collapse" data-parent="#accordion">
											<div class="card-body">
												<!-- Inicio Nome do campo -->
												<div class="form-group row m-b-15">
													<label class="col-form-label-lg col-md-3">Nome do campo</label>
													<div class="col-md-9">
														<div class="row row-space-10">
															<div class="col-xs-11 mb-2 mb-sm-0">
																<input type="text" class="form-control" id="referencia" maxlength="20" placeholder="até 20 caracteres" />
															</div>
															<div class="col-xs-1 mb-2 mb-sm-0">
																<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																	<i class="fa fa-info"></i>
																</a>
															</div>
														</div>
													</div>
												</div>
												<!-- Fim Nome do campo -->
												<!-- Inicio Tipo de seleção -->
												<div class="form-group row m-b-15">
													<label class="col-form-label-lg col-md-3">Tipo de seleção</label>
													<div class="col-md-9">
														<div class="row row-space-10">
															<div class="col-xs-11 mb-2 mb-sm-0">
																<select class="form-control">
																	<option>Simples</option>
																	<option>Multipla</option>
																</select>
															</div>
															<div class="col-xs-1 mb-2 mb-sm-0">
																<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																	<i class="fa fa-info"></i>
																</a>
															</div>
														</div>
													</div>
												</div>
												<!-- Fim Tipo de seleção -->
											</div>
										</div>
									</div>
									<!-- end card -->
									<!-- begin card -->
									<div class="card">
										<div class="border-0 card-header bg-white align-items-center collapsed" data-toggle="collapse" data-target="#collapseFive">
											<i class="mr-2 f-s-8"></i> Campo extra #5
										</div>
										<div id="collapseFive" class="collapse" data-parent="#accordion">
											<div class="card-body">
												<!-- Inicio Nome do campo -->
												<div class="form-group row m-b-15">
													<label class="col-form-label-lg col-md-3">Nome do campo</label>
													<div class="col-md-9">
														<div class="row row-space-10">
															<div class="col-xs-11 mb-2 mb-sm-0">
																<input type="text" class="form-control" id="referencia" maxlength="20" placeholder="até 20 caracteres" />
															</div>
															<div class="col-xs-1 mb-2 mb-sm-0">
																<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																	<i class="fa fa-info"></i>
																</a>
															</div>
														</div>
													</div>
												</div>
												<!-- Fim Nome do campo -->
												<!-- Inicio Tipo de seleção -->
												<div class="form-group row m-b-15">
													<label class="col-form-label-lg col-md-3">Tipo de seleção</label>
													<div class="col-md-9">
														<div class="row row-space-10">
															<div class="col-xs-11 mb-2 mb-sm-0">
																<select class="form-control">
																	<option>Simples</option>
																	<option>Multipla</option>
																</select>
															</div>
															<div class="col-xs-1 mb-2 mb-sm-0">
																<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																	<i class="fa fa-info"></i>
																</a>
															</div>
														</div>
													</div>
												</div>
												<!-- Fim Tipo de seleção -->
											</div>
										</div>
									</div>
									<!-- end card -->
								</div>
								<!-- end #accordion -->
							</div>
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
					<!-- Fim do Painel -->
				</div>
				<!-- Fim Corpo do Formulário-->
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