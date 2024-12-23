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
				<li class="breadcrumb-item"><a>CRM</a></li>
				<li class="breadcrumb-item"><a>Feedback</a></li>
				<li class="breadcrumb-item active"><a>Pesquisa NPS</a></li>
			</ol>
			<!-- Fim Caminho -->
			<!-- Inicio Título da Página -->
			<h1 class="page-header">Pesquisa NPS</h1>
			<!-- Fim Título da Página -->

			<!-- Inicio do Painel -->
			<div class="panel panel-inverse">
				<!-- Inicio do Cabeçalho do Painel-->
				<div class="panel-heading">
					<h4 class="panel-title">Pesquisa NPS</h4>
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
							<!-- Inicio Item de pesquisa -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Itens da pesquisa</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<div class="form-control border-0 custom-switch">
												<input type="checkbox" class="custom-control-input" id="qualifica" />
												<label class="custom-control-label" for="qualifica">Como você qualifica o nosso atendimento?</label>
											</div>


											<div class="d-flex align-items-center">
												<div class="custom-switch mr-2">
													<input type="checkbox" class="custom-control-input" id="avalia" />
													<label class="custom-control-label" for="avalia">Como você avalia o nosso</label>
												</div>
												<div class="radio radio-css mr-2">
													<input type="radio" name="prod_serv" id="produto" value="option1" checked />
													<label for="produto">produto</label>
												</div>
												<div class="radio radio-css mr-2">
													<input type="radio" name="prod_serv" id="serviço" value="option2" />
													<label for="serviço">serviço</label>
												</div>
											</div>
											<div class="form-control border-0 custom-switch">
												<input type="checkbox" class="custom-control-input" id="experiencia" />
												<label class="custom-control-label" for="experiencia">Como foi a sua experiência em geral?</label>
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
							<!-- Fim Item de pesquisa -->
							<!-- Inicio Métrica de resposta -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Métrica de resposta</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<div class="custom-control custom-radio">
											  <input type="radio" id="administrador" name="perfil" class="custom-control-input">
											  <label class="custom-control-label" for="administrador">Numérica ( de 1 à 5)</label>
											</div>
											<div class="custom-control custom-radio">
											  <input type="radio" id="operalancamentos" name="perfil" class="custom-control-input">
											  <label class="custom-control-label" for="operalancamentos">Escala de conceito (Péssimo/Ruim/Regular/Bom/Ótimo)</label>
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
							<!-- Fim Métrica de resposta-->
							<!-- Inicio Dias até a expirar -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Dias até expirar</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<input type="text" class="form-control" id="diasexpirar" name="diasexpirar" maxlength="4" placeholder="até 4 caracteres" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Dias até a expirar -->
							<!-- Inicio Ativo -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Ativo</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<div class="form-control border-0 custom-switch">
												<input type="checkbox" class="custom-control-input" id="ativo" />
												<label class="custom-control-label" for="ativo">Esta pesquisa está ativa</label>
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
							<!-- Fim Ativo -->
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