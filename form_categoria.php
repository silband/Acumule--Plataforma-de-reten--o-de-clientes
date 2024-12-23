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
				<li class="breadcrumb-item active"><a>Categoria</a></li>
			</ol>
			<!-- Fim Caminho -->
			<!-- Inicio Título da Página -->
			<h1 class="page-header">Cadastro de Categoria</h1>
			<!-- Fim Título da Página -->

			<!-- Início Bloco -->
			<div class="row">
				<!-- Início largura-12 -->
				<div class="col-xl-12">
					<!-- Início Painel -->
					<div class="panel panel-inverse" data-sortable-id="regular">
						<!-- Início Cabeçalho do Painel -->
						<div class="panel-heading">
							<h4 class="panel-title">Categoria</h4>
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
												<input type="text" class="form-control" id="nomecategoria" maxlength="40" placeholder="até 40 caracteres" />
											</div>
											<div class="col-xs-1 mb-2 mb-sm-0">
												<a href="#modal-nomecategoria" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
													<i class="fa fa-info"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim Nome -->
								<!-- Inicio Valor Acumulado inicial-->
								<div class="form-group row m-b-15">
									<label class="col-form-label-lg col-md-3">Valor Acumulado inicial</label>
									<div class="col-md-9">
										<div class="row row-space-10">
											<div class="col-xs-11 mb-2 mb-sm-0">
												<input type="text" class="form-control" id="valoracumuladoinicial" maxlength="16" placeholder="até 16 caracteres" />
											</div>
											<div class="col-xs-1 mb-2 mb-sm-0">
												<a href="#modal-valoracumuladoinicial" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
													<i class="fa fa-info"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim Valor Acumulado inicial -->
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
												<th class="text-nowrap" data-orderable="false">Nome</th>
												<th class="text-nowrap" >Ativo</th>
											</tr>
										</thead>
										<tbody>
											<tr class="gradeA">
												<td>VIP</td>
												<td>Sim</td>
											</tr>
											<tr class="gradeA">
												<td>SILVER</td>
												<td>Sim</td>
											</tr>
											<tr class="gradeA">
												<td>GOLD</td>
												<td>Sim</td>
											</tr>
											<tr class="gradeA">
												<td>DIAMOND</td>
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