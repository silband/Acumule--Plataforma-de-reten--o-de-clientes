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
				<li class="breadcrumb-item"><a>Dashboard</a></li>
				<li class="breadcrumb-item"><a>Indicadores Chave</a></li>
			</ol>
			<!-- Fim Caminho -->
			<!-- Inicio Título da Página -->
			<h1 class="page-header">Indicadores Chave</h1>
			<!-- Fim Título da Página -->

			<!-- Início Bloco -->
			<div class="row">
				<!-- Início largura-12 -->
				<div class="col-xl-12">
					<!-- Início Painel -->
					<div class="panel panel-inverse" data-sortable-id="regular">
						<!-- Início Cabeçalho do Painel -->
						<div class="panel-heading">
							<h4 class="panel-title">Indicadores Chave</h4>
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
				<!-- begin col-6 -->
				<div class="col-xl-6">
					<!-- begin card -->
					<div class="card border-0 mb-3 overflow-hidden bg-dark text-white">
						<!-- begin card-body -->
						<div class="card-body">
							<!-- begin row -->
							<div class="row">
								<!-- begin col-7 -->
								<div class="col-xl-7 col-lg-8">
									<!-- begin title -->
									<div class="mb-3 text-grey">
										<b>TOTAL DE VENDAS</b>
										<span class="ml-2">
											<i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Total sales" data-placement="top" data-content="Net sales (gross sales minus discounts and returns) plus taxes and shipping. Includes orders from all sales channels."></i>
										</span>
									</div>
									<!-- end title -->
									<!-- begin total-sales -->
									<div class="d-flex mb-1">
										<h2 class="mb-0">$<span data-animation="number" data-value="64559.25">0.00</span></h2>
										<div class="ml-auto mt-n1 mb-n1"><div id="total-sales-sparkline"></div></div>
									</div>
									<!-- end total-sales -->
									<!-- begin percentage -->
									<div class="mb-3 text-grey">
										<i class="fa fa-caret-up"></i> <span data-animation="number" data-value="33.21">0.00</span>% compare to last week
									</div>
									<!-- end percentage -->
									<hr class="bg-white-transparent-2" />
									<!-- begin row -->
									<div class="row text-truncate">
										<!-- begin col-6 -->
										<div class="col-6">
											<div class="f-s-12 text-grey">Total de pedidos</div>
											<div class="f-s-18 m-b-5 f-w-600 p-b-1" data-animation="number" data-value="1568">0</div>
											<div class="progress progress-xs rounded-lg bg-dark-darker m-b-5">
												<div class="progress-bar progress-bar-striped rounded-right bg-teal" data-animation="width" data-value="55%" style="width: 0%"></div>
											</div>
										</div>
										<!-- end col-6 -->
										<!-- begin col-6 -->
										<div class="col-6">
											<div class="f-s-12 text-grey">Média de vendas por pedido</div>
											<div class="f-s-18 m-b-5 f-w-600 p-b-1">$<span data-animation="number" data-value="41.20">0.00</span></div>
											<div class="progress progress-xs rounded-lg bg-dark-darker m-b-5">
												<div class="progress-bar progress-bar-striped rounded-right" data-animation="width" data-value="55%" style="width: 0%"></div>
											</div>
										</div>
										<!-- end col-6 -->
									</div>
									<!-- end row -->
								</div>
								<!-- end col-7 -->
								<!-- begin col-5 -->
								<div class="col-xl-5 col-lg-4 align-items-center d-flex justify-content-center">
									<img src="assets/img/svg/img-1.svg" height="150px" class="d-none d-lg-block" />
								</div>
								<!-- end col-5 -->
							</div>
							<!-- end row -->
						</div>
						<!-- end card-body -->
					</div>
					<!-- end card -->
				</div>
				<!-- end col-6 -->
				<!-- begin col-6 -->
				<div class="col-xl-6">
					<!-- begin row -->
					<div class="row">
						<!-- begin col-6 -->
						<div class="col-sm-6">
							<!-- begin card -->
							<div class="card border-0 text-truncate mb-3 bg-dark text-white">
								<!-- begin card-body -->
								<div class="card-body">
									<!-- begin title -->
									<div class="mb-3 text-grey">
										<b class="mb-3">TAXA DE CONVERSÃO</b> 
										<span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Conversion Rate" data-placement="top" data-content="Percentage of sessions that resulted in orders from total number of sessions." data-original-title="" title=""></i></span>
									</div>
									<!-- end title -->
									<!-- begin conversion-rate -->
									<div class="d-flex align-items-center mb-1">
										<h2 class="text-white mb-0"><span data-animation="number" data-value="2.19">0.00</span>%</h2>
										<div class="ml-auto">
											<div id="conversion-rate-sparkline"></div>
										</div>
									</div>
									<!-- end conversion-rate -->
									<!-- begin percentage -->
									<div class="mb-4 text-grey">
										<i class="fa fa-caret-down"></i> <span data-animation="number" data-value="0.50">0.00</span>% comparativo da sema anterior
									</div>
									<!-- end percentage -->
									<!-- begin info-row -->
									<div class="d-flex mb-2">
										<div class="d-flex align-items-center">
											<i class="fa fa-circle text-red f-s-8 mr-2"></i>
											Adiocionado ao carrinho
										</div>
										<div class="d-flex align-items-center ml-auto">
											<div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="262">0</span>%</div>
											<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="3.79">0.00</span>%</div>
										</div>
									</div>
									<!-- end info-row -->
									<!-- begin info-row -->
									<div class="d-flex mb-2">
										<div class="d-flex align-items-center">
											<i class="fa fa-circle text-warning f-s-8 mr-2"></i>
											Levado ao caixa
										</div>
										<div class="d-flex align-items-center ml-auto">
											<div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="11">0</span>%</div>
											<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="3.85">0.00</span>%</div>
										</div>
									</div>
									<!-- end info-row -->
									<!-- begin info-row -->
									<div class="d-flex">
										<div class="d-flex align-items-center">
											<i class="fa fa-circle text-lime f-s-8 mr-2"></i>
											Seção convertida
										</div>
										<div class="d-flex align-items-center ml-auto">
											<div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="57">0</span>%</div>
											<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="2.19">0.00</span>%</div>
										</div>
									</div>
									<!-- end info-row -->
								</div>
								<!-- end card-body -->
							</div>
							<!-- end card -->
						</div>
						<!-- end col-6 -->
						<!-- begin col-6 -->
						<div class="col-sm-6">
							<!-- begin card -->
							<div class="card border-0 text-truncate mb-3 bg-dark text-white">
								<!-- begin card-body -->
								<div class="card-body">
									<!-- begin title -->
									<div class="mb-3 text-grey">
										<b class="mb-3">VENDAS NA SEÇÃO</b> 
										<span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Store Sessions" data-placement="top" data-content="Number of sessions on your online store. A session is a period of continuous activity from a visitor." data-original-title="" title=""></i></span>
									</div>
									<!-- end title -->
									<!-- begin store-session -->
									<div class="d-flex align-items-center mb-1">
										<h2 class="text-white mb-0"><span data-animation="number" data-value="70719">0</span></h2>
										<div class="ml-auto">
											<div id="store-session-sparkline"></div>
										</div>
									</div>
									<!-- end store-session -->
									<!-- begin percentage -->
									<div class="mb-4 text-grey">
										<i class="fa fa-caret-up"></i> <span data-animation="number" data-value="9.5">0.00</span>% comparativo da última semana
									</div>
									<!-- end percentage -->
									<!-- begin info-row -->
									<div class="d-flex mb-2">
										<div class="d-flex align-items-center">
											<i class="fa fa-circle text-teal f-s-8 mr-2"></i>
											Celular
										</div>
										<div class="d-flex align-items-center ml-auto">
											<div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="25.7">0.00</span>%</div>
											<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="53210">0</span></div>
										</div>
									</div>
									<!-- end info-row -->
									<!-- begin info-row -->
									<div class="d-flex mb-2">
										<div class="d-flex align-items-center">
											<i class="fa fa-circle text-blue f-s-8 mr-2"></i>
											Desktop
										</div>
										<div class="d-flex align-items-center ml-auto">
											<div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="16.0">0.00</span>%</div>
											<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="11959">0</span></div>
										</div>
									</div>
									<!-- end info-row -->
									<!-- begin info-row -->
									<div class="d-flex">
										<div class="d-flex align-items-center">
											<i class="fa fa-circle text-aqua f-s-8 mr-2"></i>
											Tablet
										</div>
										<div class="d-flex align-items-center ml-auto">
											<div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="7.9">0.00</span>%</div>
											<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="5545">0</span></div>
										</div>
									</div>
									<!-- end info-row -->
								</div>
								<!-- end card-body -->
							</div>
							<!-- end card -->
						</div>
						<!-- end col-6 -->
					</div>
					<!-- end row -->
				</div>
				<!-- end col-6 -->
			</div>
			<!-- end row -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-8 -->
				<div class="col-xl-8 col-lg-6">
					<!-- begin card -->
					<div class="card border-0 mb-3 bg-dark text-white">
						<div class="card-body">
							<div class="mb-3 text-grey"><b>VISITANTES ANALITICO</b> <span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Top products with units sold" data-placement="top" data-content="Products with the most individual units sold. Includes orders from all sales channels." data-original-title="" title=""></i></span></div>
							<div class="row">
								<div class="col-xl-3 col-4">
									<h3 class="mb-1"><span data-animation="number" data-value="127.1">0</span>K</h3>
									<div>Novos visitantes</div>
									<div class="text-grey f-s-11 text-truncate"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="25.5">0.00</span>% Últimos 7 dias</div>
								</div>
								<div class="col-xl-3 col-4">
									<h3 class="mb-1"><span data-animation="number" data-value="179.9">0</span>K</h3>
									<div>Visitantes que retornaram</div>
									<div class="text-grey f-s-11 text-truncate"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="5.33">0.00</span>% Últimos 7 dias</div>
								</div>
								<div class="col-xl-3 col-4">
									<h3 class="mb-1"><span data-animation="number" data-value="766.8">0</span>K</h3>
									<div>Total de visualizaçõs</div>
									<div class="text-grey f-s-11 text-truncate"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="0.323">0.00</span>% Últimos 7 dias</div>
								</div>
							</div>
						</div>
						<div class="card-body p-0">
							<div style="height: 269px">
								<div id="visitors-line-chart" class="widget-chart-full-width nvd3-inverse-mode" style="height: 254px"></div>
							</div>
						</div>
					</div>
					<!-- end card -->
				</div>
				<!-- end col-8 -->
				<!-- begin col-4 -->
				<div class="col-xl-4 col-lg-6">
					<!-- begin card -->
					<div class="card border-0 mb-3 bg-dark text-white">
						<div class="card-body">
							<div class="mb-2 text-grey">
								<b>SEÇÃO POR LOCALIZAÇÃO</b>
								<span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Total sales" data-placement="top" data-content="Net sales (gross sales minus discounts and returns) plus taxes and shipping. Includes orders from all sales channels."></i></span>
							</div>
							<div id="visitors-map" class="mb-2" style="height: 200px"></div>
							<div>
								<div class="d-flex align-items-center text-white mb-2">
									<div class="widget-img widget-img-xs rounded bg-inverse mr-2 width-40" style="background-image: url(assets/img/flag/us.jpg)"></div>
									<div class="d-flex w-100">
										<div>Estado Unidos</div>
										<div class="ml-auto text-grey"><span data-animation="number" data-value="39.85">0.00</span>%</div>
									</div>
								</div>
								<div class="d-flex align-items-center text-white mb-2">
									<div class="widget-img widget-img-xs rounded bg-inverse mr-2 width-40" style="background-image: url(assets/img/flag/cn.jpg)"></div>
									<div class="d-flex w-100">
										<div>China</div>
										<div class="ml-auto text-grey"><span data-animation="number" data-value="14.23">0.00</span>%</div>
									</div>
								</div>
								<div class="d-flex align-items-center text-white mb-2">
									<div class="widget-img widget-img-xs rounded bg-inverse mr-2 width-40" style="background-image: url(assets/img/flag/de.jpg)"></div>
									<div class="d-flex w-100">
										<div>Alemanha</div>
										<div class="ml-auto text-grey"><span data-animation="number" data-value="12.83">0.00</span>%</div>
									</div>
								</div>
								<div class="d-flex align-items-center text-white mb-2">
									<div class="widget-img widget-img-xs rounded bg-inverse mr-2 width-40" style="background-image: url(assets/img/flag/fr.jpg)"></div>
									<div class="d-flex w-100">
										<div>França</div>
										<div class="ml-auto text-grey"><span data-animation="number" data-value="11.14">0.00</span>%</div>
									</div>
								</div>
								<div class="d-flex align-items-center text-white mb-0">
									<div class="widget-img widget-img-xs rounded bg-inverse mr-2 width-40" style="background-image: url(assets/img/flag/jp.jpg)"></div>
									<div class="d-flex w-100">
										<div>Japão</div>
										<div class="ml-auto text-grey"><span data-animation="number" data-value="10.75">0.00</span>%</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end card -->
				</div>
				<!-- end col-4 -->
			</div>
			<!-- end row -->


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