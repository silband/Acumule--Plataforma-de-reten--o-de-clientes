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
				<li class="breadcrumb-item"><a>Relacionamento</a></li>
				<li class="breadcrumb-item active"><a>Midia Indoor</a></li>
			</ol>
			<!-- Fim Caminho -->
			<!-- Inicio Título da Página -->
			<h1 class="page-header">Midia Indoor</h1>
			<!-- Fim Título da Página -->

			<!-- Inicio do Painel -->
			<div class="panel panel-inverse">
				<!-- Inicio do Cabeçalho do Painel-->
				<div class="panel-heading">
					<h4 class="panel-title">Configuração Básica</h4>
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
							<!-- Inicio Imagens -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Imagens</label>
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
							<!-- Fim Imagens -->
							<!-- Inicio Imagens -->
							<div class="form-group row m-b-15">
								<!-- begin col-3 -->
								<label class="col-form-label-lg col-md-3"></label>
								<div class="col-md-8">
									<div class="container mb-sm-50">
										<img src="assets/img/publicidade/acumule+_azul_branco.png" alt="" class="container" />
									</div>
								</div>
								<!-- end col-3 -->
							</div>
							<!-- Fim Imagens -->
							<!-- Inicio Link da propaganda -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Link da propaganda</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<input type="text" class="form-control" id="linkpropaganda" maxlength="14" placeholder="até 14 caracteres" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Link da propaganda -->
							<!-- Inicio Ativo -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Ativo</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<div class="form-control border-0 custom-switch">
												<input type="checkbox" class="custom-control-input" id="basicoativo" />
												<label class="custom-control-label" for="basicoativo">Este produto esta ativo</label>
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
					<!-- Fim do Painel -->
				</div>
				<!-- Fim Corpo do Formulário-->
			</div>
			<!-- Fim Bloco -->

			<!-- Inicio do Painel -->
			<div class="panel panel-inverse">
				<!-- Inicio do Cabeçalho do Painel-->
				<div class="panel-heading">
					<h4 class="panel-title">Configuração Avançada</h4>
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
							<!-- Inicio Imagens -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Imagens</label>
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
							<!-- Fim Imagens -->
							<!-- Inicio Imagens -->
							<div class="form-group row m-b-15">
								<!-- begin col-3 -->
								<label class="col-form-label-lg col-md-3"></label>
								<div class="col-md-8">
									<div class="container mb-sm-50">
										<img src="assets/img/publicidade/acumule+_branco_azul.png" alt="" class="container" />
									</div>
								</div>
								<!-- end col-3 -->
							</div>
							<!-- Fim Imagens -->
							<!-- Inicio Link da propaganda -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Link da propaganda</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<input type="text" class="form-control" id="linkpropaganda" maxlength="14" placeholder="até 14 caracteres" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Link da propaganda -->
							<!-- Inicio Filtros -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3 lead">Filtros</label>
								<div class="col-md-9">
								</div>
							</div>
							<!-- Fim Filtros-->
							<!-- Inicio Anonimo -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Anônimo</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<div class="form-control border-0 custom-switch">
												<input type="checkbox" class="custom-control-input" id="anonimo" />
												<label class="custom-control-label" for="anonimo">Nesta configuração, a publicidade será apresentada apenas aos usuários anônimos</label>
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
							<!-- Fim Anonimo-->
							<!-- Inicio Intervalo de idade -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Intervalo de idade</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 input-group">
											<input type="text" class="form-control" name="idadeinicial" placeholder="Idade inicial" />
											<span class="input-group-addon">até</span>
											<input type="text" class="form-control" name="idadefinal" placeholder="Idade final" />
										</div>
										<div class="col-xs-1 mb-2 mb-sm-0">
											<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
												<i class="fa fa-info"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim Intervalo de idade -->
							<!-- Inicio Sexo -->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Sexo</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<select class="form-control">
												<option value="1">Masculino</option>
												<option value="2">Feminino</option>
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
							<!-- Fim Sexo -->
							<!-- Inicio Categoria-->
							<div class="form-group row m-b-15">
								<label class="col-form-label-lg col-md-3">Categoria</label>
								<div class="col-md-9">
									<div class="row row-space-10">
										<div class="col-xs-11 mb-2 mb-sm-0">
											<select class="form-control" multiple="multiple">
												<option value="1">VIP</option>
												<option value="2">PRATA</option>
												<option value="2">OURO</option>
												<option value="2">DIAMANTE</option>
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
							<!-- Fim Categoria-->
								<!-- Inicio Ativo -->
								<div class="form-group row m-b-15">
									<label class="col-form-label-lg col-md-3">Ativo</label>
									<div class="col-md-9">
										<div class="row row-space-10">
											<div class="col-xs-11 mb-2 mb-sm-0">
												<div class="form-control border-0 custom-switch">
													<input type="checkbox" class="custom-control-input" id="avancadoativo" />
													<label class="custom-control-label" for="avancadoativo">Este produto esta ativo</label>
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
								<table class="table table-striped table-bordered table-td-valign-middle">
									<thead>
										<tr>
											<th class="text-nowrap" data-orderable="false"></th>
											<th class="text-nowrap" >Link</th>
										</tr>
									</thead>
									<tbody>
										<tr class="gradeA">
											<td>VIP</td>
											<td>6</td>
										</tr>
										<tr class="gradeA">
											<td>SILVER</td>
											<td>6</td>
										</tr>
										<tr class="gradeA">
											<td>GOLD</td>
											<td>12</td>
										</tr>
										<tr class="gradeA">
											<td>DIAMOND</td>
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