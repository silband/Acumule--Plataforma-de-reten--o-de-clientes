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
				<li class="breadcrumb-item"><a>Hotsite</a></li>
			</ol>
			<!-- Fim Caminho -->
			<!-- Inicio Título da Página -->
			<h1 class="page-header">Hotsite</h1>
			<!-- Fim Título da Página -->

			<!-- Inicio do Painel -->
			<div class="panel panel-inverse">
				<!-- Inicio do Cabeçalho do Painel-->
				<div class="panel-heading">
					<h4 class="panel-title">Cabeçalho</h4>
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
							<!-- Inicio Logo -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Logo</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<!-- begin panel -->
											<div class="panel panel-inverse" data-sortable-id="form-dropzone-1">
												<div id="dropzone">
													<form action="/upload" class="dropzone needsclick" id="demo-upload">
														<div class="dz-message needsclick">
															Arraste <b>aqui</b> ou <b>clique</b> para carregar.<br />
														</div>
													</form>
												</div>
											</div>
											<!-- end panel -->
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-imagem" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Logo -->
							<!-- Inicio Logo -->
							<div class="form-group row m-b-15">
								<!-- begin col-3 -->
								<label class="col-form-label-lg col-md-3"></label>
								<div class="col-md-4">
									<div class="container mb-sm-50 border">
										<img src="assets/img/brand/brand-acumule+.png" alt="" class="container" />
									</div>
								</div>
								<!-- end col-3 -->
							</div>
							<!-- Fim Logo -->
							<!-- Inicio Icone da página-->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Icone da página</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<!-- begin panel -->
											<div class="panel panel-inverse" data-sortable-id="form-dropzone-1">
												<div id="dropzone">
													<form action="/upload" class="dropzone needsclick" id="demo-upload">
														<div class="dz-message needsclick">
															Arraste <b>aqui</b> ou <b>clique</b> para carregar.<br />
														</div>
													</form>
												</div>
											</div>
											<!-- end panel -->
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-imagem" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Icone da página-->
							<!-- Inicio Icone da página-->
							<div class="form-group row m-b-15">
								<!-- begin col-3 -->
								<label class="col-form-label-lg col-md-3"></label>
								<div class="col-md-2">
									<div class="widget-card widget-card-rounded border">
										<img src="assets/img/icon/a+.png" alt="" class="container" />
									</div>
								</div>
								<!-- end col-3 -->
							</div>
							<!-- Fim Icone da página-->
							<!-- Inicio Cor do fundo -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Cor de fundo</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
										<div class="input-group colorpicker-component" data-color="rgb(0, 0, 0)" data-color-format="rgb"  id="colorpicker-append">
											<input type="text" value="rgb(0, 0, 0)" class="form-control" id="cordefundo_cab" />
											<span class="input-group-append">
												<label class="input-group-text" for="cordefundo_cab"><i class="fa fa-square fa-lg"></i></label>
											</span>
										</div>
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Cor do fundo -->
							<!-- Inicio Cor do texto -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Cor do texto</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
										<div class="input-group colorpicker-component" data-color="rgb(0, 0, 0)" data-color-format="rgb"  id="colorpicker-append">
											<input type="text" value="rgb(0, 0, 0)" class="form-control" id="cordetexto_cab" />
											<span class="input-group-append">
												<label class="input-group-text" for="cordetexto_cab"><i class="fa fa-square fa-lg"></i></label>
											</span>
										</div>
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Cor do texto -->
							<!-- Inicio Cor do texto selecionado -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Cor do texto selecionado</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
										<div class="input-group colorpicker-component" data-color="rgb(0, 0, 0)" data-color-format="rgb"  id="colorpicker-append">
											<input type="text" value="rgb(0, 0, 0)" class="form-control" id="cordetextoselec_cab" />
											<span class="input-group-append">
												<label class="input-group-text" for="cordetextoselec_cab"><i class="fa fa-square fa-lg"></i></label>
											</span>
										</div>
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Cor do texto selecionado -->
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

			<!-- Inicio do Painel -->
			<div class="panel panel-inverse">
				<!-- Inicio do Cabeçalho do Painel-->
				<div class="panel-heading">
					<h4 class="panel-title">Corpo</h4>
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
							<!-- Inicio Cor do fundo -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Cor de fundo</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
										<div class="input-group colorpicker-component" data-color="rgb(0, 0, 0)" data-color-format="rgb"  id="colorpicker-append">
											<input type="text" value="rgb(0, 0, 0)" class="form-control" id="colorpicker-append-input" />
											<span class="input-group-append">
												<label class="input-group-text" for="colorpicker-append-input"><i class="fa fa-square fa-lg"></i></label>
											</span>
										</div>
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Cor do fundo -->
							<!-- Inicio Cor do fundo do formulário -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Cor de fundo do formulário</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
										<div class="input-group colorpicker-component" data-color="rgb(0, 0, 0)" data-color-format="rgb"  id="colorpicker-append">
											<input type="text" value="rgb(0, 0, 0)" class="form-control" id="colorpicker-append-input" />
											<span class="input-group-append">
												<label class="input-group-text" for="colorpicker-append-input"><i class="fa fa-square fa-lg"></i></label>
											</span>
										</div>
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Cor do fundo do formulário-->
							<!-- Inicio Cor da borda -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Cor da borda</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
										<div class="input-group colorpicker-component" data-color="rgb(0, 0, 0)" data-color-format="rgb"  id="colorpicker-append">
											<input type="text" value="rgb(0, 0, 0)" class="form-control" id="colorpicker-append-input" />
											<span class="input-group-append">
												<label class="input-group-text" for="colorpicker-append-input"><i class="fa fa-square fa-lg"></i></label>
											</span>
										</div>
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Cor da borda -->
							<!-- Inicio Cor do texto -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Cor do texto</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
										<div class="input-group colorpicker-component" data-color="rgb(0, 0, 0)" data-color-format="rgb"  id="colorpicker-append">
											<input type="text" value="rgb(0, 0, 0)" class="form-control" id="colorpicker-append-input" />
											<span class="input-group-append">
												<label class="input-group-text" for="colorpicker-append-input"><i class="fa fa-square fa-lg"></i></label>
											</span>
										</div>
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Cor do texto -->
							<!-- Inicio Cor do botão -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Cor do botão</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
										<div class="input-group colorpicker-component" data-color="rgb(0, 0, 0)" data-color-format="rgb"  id="colorpicker-append">
											<input type="text" value="rgb(0, 0, 0)" class="form-control" id="colorpicker-append-input" />
											<span class="input-group-append">
												<label class="input-group-text" for="colorpicker-append-input"><i class="fa fa-square fa-lg"></i></label>
											</span>
										</div>
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Cor do botão -->
							<!-- Inicio Cor alternada do botão -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Cor alternada do botão</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
										<div class="input-group colorpicker-component" data-color="rgb(0, 0, 0)" data-color-format="rgb"  id="colorpicker-append">
											<input type="text" value="rgb(0, 0, 0)" class="form-control" id="colorpicker-append-input" />
											<span class="input-group-append">
												<label class="input-group-text" for="colorpicker-append-input"><i class="fa fa-square fa-lg"></i></label>
											</span>
										</div>
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Cor alternada do botão -->
							<!-- Inicio Cor de texto do botão -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Cor de texto do botão</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
										<div class="input-group colorpicker-component" data-color="rgb(0, 0, 0)" data-color-format="rgb"  id="colorpicker-append">
											<input type="text" value="rgb(0, 0, 0)" class="form-control" id="colorpicker-append-input" />
											<span class="input-group-append">
												<label class="input-group-text" for="colorpicker-append-input"><i class="fa fa-square fa-lg"></i></label>
											</span>
										</div>
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Cor de texto do botão -->
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

			<!-- Inicio do Painel -->
			<div class="panel panel-inverse">
				<!-- Inicio do Cabeçalho do Painel-->
				<div class="panel-heading">
					<h4 class="panel-title">Rodapé</h4>
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
							<!-- Inicio Logo -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Logo</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<!-- begin panel -->
											<div class="panel panel-inverse" data-sortable-id="form-dropzone-1">
												<div id="dropzone">
													<form action="/upload" class="dropzone needsclick" id="demo-upload">
														<div class="dz-message needsclick">
															Arraste <b>aqui</b> ou <b>clique</b> para carregar.<br />
														</div>
													</form>
												</div>
											</div>
											<!-- end panel -->
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-imagem" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Logo -->
							<!-- Inicio Logo -->
							<div class="form-group row m-b-15">
								<!-- begin col-3 -->
								<label class="col-form-label-lg col-md-3"></label>
								<div class="col-md-8">
									<div class="container mb-sm-50 border">
										<img src="assets/img/brand/brand-acumule+.png" alt="" class="container" />
									</div>
								</div>
								<!-- end col-3 -->
							</div>
							<!-- Fim Logo -->
							<!-- Inicio Cor do fundo -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Cor de fundo</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
										<div class="input-group colorpicker-component" data-color="rgb(0, 0, 0)" data-color-format="rgb"  id="colorpicker-append">
											<input type="text" value="rgb(0, 0, 0)" class="form-control" id="colorpicker-append-input" />
											<span class="input-group-append">
												<label class="input-group-text" for="colorpicker-append-input"><i class="fa fa-square fa-lg"></i></label>
											</span>
										</div>
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Cor do fundo -->
							<!-- Inicio Cor do texto -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Cor do texto</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
										<div class="input-group colorpicker-component" data-color="rgb(0, 0, 0)" data-color-format="rgb"  id="colorpicker-append">
											<input type="text" value="rgb(0, 0, 0)" class="form-control" id="colorpicker-append-input" />
											<span class="input-group-append">
												<label class="input-group-text" for="colorpicker-append-input"><i class="fa fa-square fa-lg"></i></label>
											</span>
										</div>
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Cor do texto -->
							<!-- Inicio Facebook -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Facebook</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-1 mb-2 mb-sm-0">
											<div class="form-control border-0 custom-switch">
												<input type="checkbox" class="custom-control-input" id="ativo" />
												<label class="custom-control-label" for="ativo"></label>
											</div>
										</div>
										<div class="col-xs-10 mb-2 mb-sm-0">
											<input type="text" class="form-control" id="nome" maxlength="60" placeholder="até 60 caracteres" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Facebook -->
							<!-- Inicio Instagram -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Instagram</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-1 mb-2 mb-sm-0">
											<div class="form-control border-0 custom-switch">
												<input type="checkbox" class="custom-control-input" id="ativo" />
												<label class="custom-control-label" for="ativo"></label>
											</div>
										</div>
										<div class="col-xs-10 mb-2 mb-sm-0">
											<input type="text" class="form-control" id="nome" maxlength="60" placeholder="até 60 caracteres" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Instagram-->
							<!-- Inicio Youtube -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Youtube</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-1 mb-2 mb-sm-0">
											<div class="form-control border-0 custom-switch">
												<input type="checkbox" class="custom-control-input" id="ativo" />
												<label class="custom-control-label" for="ativo"></label>
											</div>
										</div>
										<div class="col-xs-10 mb-2 mb-sm-0">
											<input type="text" class="form-control" id="nome" maxlength="60" placeholder="até 60 caracteres" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Youtube-->
							<!-- Inicio Twitter  -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Twitter</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-1 mb-2 mb-sm-0">
											<div class="form-control border-0 custom-switch">
												<input type="checkbox" class="custom-control-input" id="ativo" />
												<label class="custom-control-label" for="ativo"></label>
											</div>
										</div>
										<div class="col-xs-10 mb-2 mb-sm-0">
											<input type="text" class="form-control" id="nome" maxlength="60" placeholder="até 60 caracteres" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Twitter -->
							<!-- Inicio Linked In -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Linked In</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-1 mb-2 mb-sm-0">
											<div class="form-control border-0 custom-switch">
												<input type="checkbox" class="custom-control-input" id="ativo" />
												<label class="custom-control-label" for="ativo"></label>
											</div>
										</div>
										<div class="col-xs-10 mb-2 mb-sm-0">
											<input type="text" class="form-control" id="nome" maxlength="60" placeholder="até 60 caracteres" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Linked In -->
							<!-- Inicio Pinterest -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Pinterest</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-1 mb-2 mb-sm-0">
											<div class="form-control border-0 custom-switch">
												<input type="checkbox" class="custom-control-input" id="ativo" />
												<label class="custom-control-label" for="ativo"></label>
											</div>
										</div>
										<div class="col-xs-10 mb-2 mb-sm-0">
											<input type="text" class="form-control" id="nome" maxlength="60" placeholder="até 60 caracteres" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Pinterest -->
							<!-- Inicio Telefone -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Telefone</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<input type="text" class="form-control" id="nome" maxlength="15" placeholder="até 15 caracteres" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Telefone-->
							<!-- Inicio Whatsapp -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Whatsapp</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<input type="text" class="form-control" id="nome" maxlength="15" placeholder="até 15 caracteres" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Whatsapp-->
							<!-- Inicio Endereço WEB -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Endereço WEB</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<input type="text" class="form-control" id="nome" maxlength="60" placeholder="até 60 caracteres" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Endereço WEB-->
							<!-- Inicio E-mail -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">E-mail</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<input type="text" class="form-control" id="nome" maxlength="60" placeholder="até 60 caracteres" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim E-mail-->
							<!-- Inicio Endereço -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Endereço</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<input type="text" class="form-control" id="nome" maxlength="60" placeholder="até 60 caracteres" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Endereço-->
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

			<!-- Inicio do Painel -->
			<div class="panel panel-inverse">
				<!-- Inicio do Cabeçalho do Painel-->
				<div class="panel-heading">
					<h4 class="panel-title">Quem somos</h4>
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
							<!-- Inicio Imagem de fundoo -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Imagem de fundo</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<!-- begin panel -->
											<div class="panel panel-inverse" data-sortable-id="form-dropzone-1">
												<div id="dropzone">
													<form action="/upload" class="dropzone needsclick" id="demo-upload">
														<div class="dz-message needsclick">
															Arraste <b>aqui</b> ou <b>clique</b> para carregar.<br />
														</div>
													</form>
												</div>
											</div>
											<!-- end panel -->
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-imagem" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Imagem de fundoo -->
							<!-- Inicio Imagem de fundoo -->
							<div class="form-group row m-b-15">
								<!-- begin col-3 -->
								<label class="col-form-label-lg col-md-3"></label>
								<div class="col-md-8">
									<div class="container mb-sm-50 border">
										<img src="assets\img\gallery\gallery-1.jpg" alt="" class="container" />
									</div>
								</div>
								<!-- end col-3 -->
							</div>
							<!-- Fim Imagem de fundoo -->
							<!-- Inicio Cor do texto -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Cor do texto</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
										<div class="input-group colorpicker-component" data-color="rgb(0, 0, 0)" data-color-format="rgb"  id="colorpicker-append">
											<input type="text" value="rgb(0, 0, 0)" class="form-control" id="colorpicker-append-input" />
											<span class="input-group-append">
												<label class="input-group-text" for="colorpicker-append-input"><i class="fa fa-square fa-lg"></i></label>
											</span>
										</div>
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Cor do texto -->
							<!-- Inicio Alinhamento -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Alinhamento</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<select class="form-control">
												<option>Direita</option>
												<option>Esquerda</option>
												<option>Centro</option>
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
							<!-- Fim Alinhamento-->
							<!-- Inicio Título -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Título</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<input type="text" class="form-control" id="nome" maxlength="30" placeholder="até 30 caracteres" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Título-->
							<!-- Inicio Texto -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Texto</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<input type="text" class="form-control" id="nome" maxlength="200" placeholder="até 200 caracteres" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Texto-->
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
								<table class="table table-striped table-bordered table-td-valign-middle">
								<thead>
									<tr>
										<th class="text-nowrap" data-orderable="false"></th>
										<th class="text-nowrap" >Título</th>
										<th class="text-nowrap" >Texto</th>
									</tr>
								</thead>
								<tbody>
									<tr class="odd gradeX">
										<td width="1%" class="with-img"><img src="assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
										<td>Item 1</td>
										<td>100</td>
									</tr>
									<tr class="even gradeC">
										<td width="1%" class="with-img"><img src="assets/img/user/user-2.jpg" class="img-rounded height-30" /></td>
										<td>Item 2</td>
										<td>200</td>
									</tr>
									<tr class="odd gradeA">
										<td width="1%" class="with-img"><img src="assets/img/user/user-3.jpg" class="img-rounded height-30" /></td>
										<td>Item 3</td>
										<td>250</td>
									</tr>
									<tr class="even gradeA">
										<td width="1%" class="with-img"><img src="assets/img/user/user-4.jpg" class="img-rounded height-30" /></td>
										<td>Item 4</td>
										<td>400</td>
									</tr>
								</tbody>
								</table>
								<br>
								<!-- Inicio Botão -->
								<div class="col-md-12 text-center">
									<a href="javascript:;" class="btn btn-default m-r-5"><i class="fa fa-plus"></i>  Incluir</a>
									<a href="javascript:;" class="btn btn-default m-r-5"><i class="fa fa-edit"></i>  Editar</a>
									<a href="javascript:;" class="btn btn-default m-r-5"><i class="fa fa-upload"></i>  Salvar</a>
									<a href="javascript:;" class="btn btn-default m-r-5"><i class="fa fa-reply"></i>  Voltar</a>
								</div>
								<!-- Fim Botão -->
							</div>
							<!-- Fim Corpo do Painel -->
						</div>
						<!-- Fim Coluna - largura 8 -->
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
					<h4 class="panel-title">Missão, Visão & Valores</h4>
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
							<!-- Inicio Cor do fundo -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Cor de fundo</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
										<div class="input-group colorpicker-component" data-color="rgb(0, 0, 0)" data-color-format="rgb"  id="colorpicker-append">
											<input type="text" value="rgb(0, 0, 0)" class="form-control" id="colorpicker-append-input" />
											<span class="input-group-append">
												<label class="input-group-text" for="colorpicker-append-input"><i class="fa fa-square fa-lg"></i></label>
											</span>
										</div>
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Cor do fundo -->
							<!-- Inicio Cor do texto -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Cor do texto</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
										<div class="input-group colorpicker-component" data-color="rgb(0, 0, 0)" data-color-format="rgb"  id="colorpicker-append">
											<input type="text" value="rgb(0, 0, 0)" class="form-control" id="colorpicker-append-input" />
											<span class="input-group-append">
												<label class="input-group-text" for="colorpicker-append-input"><i class="fa fa-square fa-lg"></i></label>
											</span>
										</div>
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Cor do texto -->
							<!-- Inicio Cor do icone -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Cor do icone</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
										<div class="input-group colorpicker-component" data-color="rgb(0, 0, 0)" data-color-format="rgb"  id="colorpicker-append">
											<input type="text" value="rgb(0, 0, 0)" class="form-control" id="colorpicker-append-input" />
											<span class="input-group-append">
												<label class="input-group-text" for="colorpicker-append-input"><i class="fa fa-square fa-lg"></i></label>
											</span>
										</div>
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Cor do icone -->
							<!-- Inicio Missão -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Missão</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<input type="text" class="form-control" id="nome" maxlength="200" placeholder="até 200 caracteres" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Missão-->
							<!-- Inicio Visão -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Visão</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<input type="text" class="form-control" id="nome" maxlength="200" placeholder="até 200 caracteres" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Visão-->
							<!-- Inicio Valores -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Valores</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<input type="text" class="form-control" id="nome" maxlength="200" placeholder="até 200 caracteres" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Valores-->
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