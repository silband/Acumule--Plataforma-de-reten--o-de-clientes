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
				<li class="breadcrumb-item"><a>Operação</a></li>
				<li class="breadcrumb-item active"><a>Controle de Acesso</a></li>
			</ol>
			<!-- Fim Caminho -->
			<!-- Inicio Título da Página -->
			<h1 class="page-header">Controle de Acesso</h1>
			<!-- Fim Título da Página -->

			<!-- Início Bloco -->
			<div class="row">
				<!-- Início largura-12 -->
				<div class="col-xl-12">
					<!-- Início Painel -->
					<div class="panel panel-inverse" data-sortable-id="regular">
						<!-- Início Cabeçalho do Painel -->
						<div class="panel-heading">
							<h4 class="panel-title">Controle de Acesso</h4>
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
								<!-- Inicio Nome do usuário -->
								<div class="form-group row m-b-15">
									<label class="col-form-label-lg col-md-3">Nome do usuário</label>
									<div class="col-md-9">
										<div class="row row-space-10">
											<div class="col-xs-11 mb-2 mb-sm-0">
												<input type="text" class="form-control" id="nomeusuario" maxlength="40" placeholder="até 40 caracteres" />
											</div>
											<div class="col-xs-1 mb-2 mb-sm-0">
												<a href="#modal-nomeusuario" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
													<i class="fa fa-info"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim Nome do usuário -->
								<!-- Inicio Imagens -->
								<div class="form-group row m-b-15">
									<label class="col-form-label-lg col-md-3">Foto</label>
									<div class="col-md-9">
										<div class="row row-space-10">
											<div class="col-xs-11 mb-2 mb-sm-0">
												<!-- Inicio Painel dropzone -->
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
											<div class="widget-card-cover" style="background-image: url(assets/img/user/user-15.jpg)">
											</div>
										</a>
									</div>
									<!-- end col-3 -->
								</div>
								<!-- Fim Imagens -->
								<!-- Inicio Login -->
								<div class="form-group row m-b-15">
									<label class="col-form-label-lg col-md-3">Login</label>
									<div class="col-md-9">
										<div class="row row-space-10">
											<div class="col-xs-11 mb-2 mb-sm-0">
												<input type="text" class="form-control" id="login" maxlength="20" placeholder="até 20 caracteres" />
											</div>
											<div class="col-xs-1 mb-2 mb-sm-0">
												<a href="#modal-login" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
													<i class="fa fa-info"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim Login -->
								<!-- Inicio E-mail -->
								<div class="form-group row m-b-15">
									<label class="col-form-label-lg col-md-3">E-mail</label>
									<div class="col-md-9">
										<div class="row row-space-10">
											<div class="col-xs-11 mb-2 mb-sm-0">
												<input type="text" class="form-control" id="email" maxlength="20" placeholder="até 20 caracteres" />
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
								<!-- Inicio Senha -->
								<div class="form-group row m-b-15">
									<label class="col-form-label-lg col-md-3">Senha</label>
									<div class="col-md-9">
										<div class="row row-space-10">
											<div class="col-xs-11 mb-2 mb-sm-0">
												<input type="password" name="pwstrength-default" id="pwstrength-default" class="form-control mb-2" maxlength="20" placeholder="de 8 até 20 caracteres"  />
												<div class="row align-items-center">
													<div class="col-md-6">
														<div id="pwstrength-default-progress" class="pwstrength-progress"></div>
													</div>
												</div>
											</div>
											<div class="col-xs-1 mb-2 mb-sm-0">
												<a href="#modal-email" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
													<i class="fa fa-info"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim Senha -->
								<!-- Inicio Repetir Senha -->
								<div class="form-group row m-b-15">
									<label class="col-form-label-lg col-md-3">Repetir Senha </label>
									<div class="col-md-9">
										<div class="row row-space-10">
											<div class="col-xs-11 mb-2 mb-sm-0">
												<input type="password" class="form-control" id="email" maxlength="20" placeholder="8 até 20 caracteres" />
											</div>
											<div class="col-xs-1 mb-2 mb-sm-0">
												<a href="#modal-email" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
													<i class="fa fa-info"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim Repetir Senha  -->
								<!-- Inicio Perfil -->
								<div class="form-group row m-b-15">
									<label class="col-form-label-lg col-md-3">Perfil</label>
									<div class="col-md-9">
										<div class="row row-space-10">
											<div class="col-xs-11 mb-2 mb-sm-0">
												<div class="custom-control custom-radio">
												  <input type="radio" id="administrador" name="perfil" class="custom-control-input">
												  <label class="custom-control-label" for="administrador">Administrador</label>
												</div>
												<div class="custom-control custom-radio">
												  <input type="radio" id="operalancamentos" name="perfil" class="custom-control-input">
												  <label class="custom-control-label" for="operalancamentos">Operador de lançamentos</label>
												</div>
												<div class="custom-control custom-radio">
												  <input type="radio" id="operadorresgate" name="perfil" class="custom-control-input">
												  <label class="custom-control-label" for="operadorresgate">Operador de Resgates</label>
												</div>
												<div class="custom-control custom-radio">
												  <input type="radio" id="operadorcompleto" name="perfil" class="custom-control-input">
												  <label class="custom-control-label" for="operadorcompleto">Operador Completo</label>
												</div>
												<div class="custom-control custom-radio">
												  <input type="radio" id="visualizador" name="perfil" class="custom-control-input">
												  <label class="custom-control-label" for="visualizador">Visualizador</label>
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
								<!-- Fim Perfil -->
								<!-- Inicio Filial-->
								<div class="form-group row m-b-15">
									<label class="col-form-label-lg col-md-3">Filial</label>
									<div class="col-md-9">
										<div class="row row-space-10">
											<div class="col-xs-11 mb-2 mb-sm-0">
												<select class="form-control">
													<option>Todas</option>
													<option>Matriz</option>
													<option>Filial I</option>
													<option>Filial II</option>
												</select>
											</div>
											<div class="col-xs-1 mb-2 mb-sm-0">
												<a href="#modal-filial" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
													<i class="fa fa-info"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim Filial -->
								<!-- Inicio Ativo -->
								<div class="form-group row m-b-15">
									<label class="col-form-label-lg col-md-3">Perfil Ativo</label>
									<div class="col-md-9">
										<div class="row row-space-10">
											<div class="col-xs-11 mb-2 mb-sm-0">
												<div class="form-control border-0 custom-switch">
													<input type="checkbox" class="custom-control-input" id="ativo" />
													<label class="custom-control-label" for="ativo">Este perfil esta autorizado a utilizar a plataforma</label>
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
												<th class="text-nowrap" >Perfil</th>
												<th class="text-nowrap" >Ativo</th>
											</tr>
										</thead>
										<tbody>
											<tr class="odd gradeX">
												<td width="1%" class="with-img"><img src="assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
												<td>Silvio Bandeira</td>
												<td>Administrador</td>
												<td>Sim</td>
											</tr>
											<tr class="even gradeC">
												<td width="1%" class="with-img"><img src="assets/img/user/user-2.jpg" class="img-rounded height-30" /></td>
												<td>Fernando Lira</td>
												<td>Administrador</td>
												<td>Sim</td>
											</tr>
											<tr class="even gradeA">
												<td width="1%" class="with-img"><img src="assets/img/user/user-4.jpg" class="img-rounded height-30" /></td>
												<td>Max Alvarenga</td>
												<td>Visualizador</td>
												<td>Não</td>
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