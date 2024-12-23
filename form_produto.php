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
				<li class="breadcrumb-item"><a>Gestão de Cadastros</a></li>
				<li class="breadcrumb-item active"><a>Produto</a></li>
			</ol>
			<!-- Fim Caminho -->
			<!-- Inicio Título da Página -->
			<h1 class="page-header">Cadastro de Produto</h1>
			<!-- Fim Título da Página -->

			<!-- Início Bloco -->
			<div class="row">
				<!-- Início largura-12 -->
				<div class="col-xl-12">
					<!-- Início Painel -->
					<div class="panel panel-inverse" data-sortable-id="regular">
						<!-- Início Cabeçalho do Painel -->
						<div class="panel-heading">
							<h4 class="panel-title">Produto</h4>
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
									<!-- Inicio Nome -->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Nome</label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<input type="text" class="form-control" id="nome" maxlength="40" placeholder="até 40 caracteres" />
												</div>
												<div class="col-xs-1 mb-2 mb-sm-0">
													<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Nome -->
									<!-- Inicio Referência -->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Referência</label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<input type="text" class="form-control" id="referencia" maxlength="40" placeholder="até 40 caracteres" />
												</div>
												<div class="col-xs-1 mb-2 mb-sm-0">
													<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Referência -->
									<!-- Inicio Descrição -->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Descrição</label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<input type="text" class="form-control" id="descricao" maxlength="100" placeholder="até 100 caracteres" />
												</div>
												<div class="col-xs-1 mb-2 mb-sm-0">
													<a href="#modal-descricao" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Descrição -->
									<!-- Inicio Resumo -->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Resumo</label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<textarea class="form-control" rows="3" id="resumo" maxlength="1000" placeholder="até 1000 caracteres" ></textarea>
												</div>
												<div class="col-xs-1 mb-2 mb-sm-0">
													<a href="#modal-resumo" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Resumo -->
									<!-- Inicio Subgrupo  -->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Subgrupo</label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<select class="form-control">
														<option>Celulares</option>
														<option>Computadores</option>
														<option>TVs</option>
													</select>
												</div>
												<div class="col-xs-1 mb-2 mb-sm-0">
													<a href="#modal-subgrupo" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Subgrupo  -->
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
								<div class="col-md-3">
									<a href="#" class="widget-card widget-card-rounded square m-b-5">
										<div class="widget-card-cover" style="background-image: url(assets/img/login-bg/login-bg-10-thumb.jpg)">
										</div>
									</a>
									<div class="f-s-12 f-w-700 text-black p-t-2">Imagem Principal</div>
								</div>
								<!-- end col-3 -->
								<!-- begin col-3 -->
								<div class="col-md-5">
									<!-- begin row -->
									<div class="row row-space-2 m-b-10">
										<!-- begin col-3 -->
										<div class="col-3">
											<a href="#" class="widget-card widget-card-rounded square m-b-2">
												<div class="widget-card-cover" style="background-image: url(assets/img/gallery/gallery-1-thumb.jpg)"></div>
											</a>
											<a href="#" class="widget-card widget-card-rounded square m-b-2">
												<div class="widget-card-cover" style="background-image: url(assets/img/gallery/gallery-2-thumb.jpg)"></div>
											</a>
										</div>
										<!-- end col-3 -->
										<!-- begin col-3 -->
										<div class="col-3">
											<a href="#" class="widget-card widget-card-rounded square m-b-2">
												<div class="widget-card-cover" style="background-image: url(assets/img/gallery/gallery-5-thumb.jpg)"></div>
											</a>
											<a href="#" class="widget-card widget-card-rounded square m-b-2">
												<div class="widget-card-cover" style="background-image: url(assets/img/gallery/gallery-6-thumb.jpg)"></div>
											</a>
										</div>
										<!-- end col-3 -->
										<!-- begin col-3 -->
										<div class="col-3">
											<a href="#" class="widget-card widget-card-rounded square m-b-2">
												<div class="widget-card-cover" style="background-image: url(assets/img/gallery/gallery-9-thumb.jpg)"></div>
											</a>
											<a href="#" class="widget-card widget-card-rounded square m-b-2">
												<div class="widget-card-cover" style="background-image: url(assets/img/gallery/gallery-10-thumb.jpg)"></div>
											</a>
										</div>
										<!-- end col-3 -->
										<!-- begin col-3 -->
										<div class="col-3">
											<a href="#" class="widget-card widget-card-rounded square m-b-2">
												<div class="widget-card-cover" style="background-image: url(assets/img/gallery/gallery-13-thumb.jpg)"></div>
											</a>
											<a href="#" class="widget-card widget-card-rounded square m-b-2">
												<div class="widget-card-cover" style="background-image: url(assets/img/gallery/gallery-14-thumb.jpg)"></div>
											</a>
										</div>
										<!-- end col-3 -->
									</div>
									<!-- end row -->
									<div class="f-s-12 f-w-700 text-black">Album</div>
									<div class="f-s-10 f-w-600 text-black-lighter m-b-15">8</div>
								</div>
								<!-- end col-3 -->
								</div>
								<!-- Fim Imagens -->
									<!-- Inicio Ativo -->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Ativo</label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<div class="form-control border-0 custom-switch">
														<input type="checkbox" class="custom-control-input" id="ativo" />
														<label class="custom-control-label" for="ativo">Este produto esta ativo</label>
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
												<th class="text-nowrap" >Nome</th>
												<th class="text-nowrap" >Referência</th>
												<th class="text-nowrap" >Ativo</th>
											</tr>
										</thead>
										<tbody>
											<tr class="odd gradeX">
												<td width="1%" class="with-img"><img src="assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
												<td>Item 1</td>
												<td>100</td>
												<td>Sim</td>
											</tr>
											<tr class="even gradeC">
												<td width="1%" class="with-img"><img src="assets/img/user/user-2.jpg" class="img-rounded height-30" /></td>
												<td>Item 2</td>
												<td>200</td>
												<td>Sim</td>
											</tr>
											<tr class="odd gradeA">
												<td width="1%" class="with-img"><img src="assets/img/user/user-3.jpg" class="img-rounded height-30" /></td>
												<td>Item 3</td>
												<td>250</td>
												<td>Sim</td>
											</tr>
											<tr class="even gradeA">
												<td width="1%" class="with-img"><img src="assets/img/user/user-4.jpg" class="img-rounded height-30" /></td>
												<td>Item 4</td>
												<td>400</td>
												<td>Sim</td>
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