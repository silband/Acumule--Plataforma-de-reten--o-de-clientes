<?php 
include("app/topo.php"); 
include("checa_login.php"); 
?>
<body>
<?php 
include("app/cabecalho.php"); 
include("app/menulateral.php"); 
?>

<?php 

$acao = isset($_POST['acao']) ? $acao = trim($_POST['acao']) : $acao='';
$acaogatilho = isset($_POST['acaogatilho']) ? $acaogatilho = trim($_POST['acaogatilho']) : $acaogatilho='2';
$acaomensagem = isset($_POST['acaomensagem']) ? $acaomensagem = trim($_POST['acaomensagem']) : $acaomensagem='';
$acaopesquisa = isset($_POST['acaopesquisa']) ? $acaopesquisa = trim($_POST['acaopesquisa']) : $acaopesquisa='active';
$acaopremio = isset($_POST['acaopremio']) ? $acaopremio = trim($_POST['acaopremio']) : $acaopremio='';
$nome = isset($_POST['nome']) ? $nome = trim($_POST['nome']) : $nome ='';
$dataevento = isset($_POST['dataevento']) ? $dataevento = trim($_POST['dataevento']) : $dataevento ='';
$diasinatividade = isset($_POST['diasinatividade']) ? $diasinatividade = trim($_POST['diasinatividade']) : $diasinatividade ='';
$diasexpirarpontos = isset($_POST['diasexpirarpontos']) ? $diasexpirarpontos = trim($_POST['diasexpirarpontos']) : $diasexpirarpontos ='';
$diasexpirarcashback = isset($_POST['diasexpirarcashback']) ? $diasexpirarcashback = trim($_POST['diasexpirarcashback']) : $diasexpirarcashback ='';
$diasexpirarvoucher = isset($_POST['diasexpirarvoucher']) ? $diasexpirarvoucher = trim($_POST['diasexpirarvoucher']) : $diasexpirarvoucher ='';
$diasexpirarpesquisa = isset($_POST['diasexpirarpesquisa']) ? $diasexpirarpesquisa = trim($_POST['diasexpirarpesquisa']) : $diasexpirarpesquisa ='';
$tiporespostaindicado = isset($_POST['tiporespostaindicado']) ? $tiporespostaindicado = trim($_POST['tiporespostaindicado']) : $tiporespostaindicado ='';
$pontostrocacategoria = isset($_POST['pontostrocacategoria']) ? $pontostrocacategoria = trim($_POST['pontostrocacategoria']) : $pontostrocacategoria ='';
$produto = isset($_POST['produto']) ? $produto = trim($_POST['produto']) : $produto ='';
$quantidade = isset($_POST['quantidade']) ? $quantidade = trim($_POST['quantidade']) : $quantidade ='';
$valormínimo = isset($_POST['valormínimo']) ? $valormínimo = trim($_POST['valormínimo']) : $valormínimo ='';
$valormáximo = isset($_POST['valormáximo']) ? $valormáximo = trim($_POST['valormáximo']) : $valormáximo ='';
$diasantesretorno = isset($_POST['diasantesretorno']) ? $diasantesretorno = trim($_POST['diasantesretorno']) : $diasantesretorno ='';

$idadeinicial = isset($_POST['idadeinicial']) ? $idadeinicial = trim($_POST['idadeinicial']) : $idadeinicial = Null;
$idadefinal = isset($_POST['idadefinal']) ? $idadefinal = trim($_POST['idadefinal']) : $idadefinal = Null;
$mesaniversario = isset($_POST['mesaniversario']) ? $mesaniversario = trim($_POST['mesaniversario']) : $mesaniversario = Null;
$sexo = isset($_POST['sexo']) ? $sexo = trim($_POST['sexo']) : $sexo = Null;
$categoria = isset($_POST['categoria']) ? $categoria = trim($_POST['categoria']) : $categoria = Null;
$frequencia = isset($_POST['frequencia']) ? $frequencia = trim($_POST['frequencia']) : $frequencia = Null;
$numerodias = isset($_POST['numerodias']) ? $numerodias = trim($_POST['numerodias']) : $numerodias = Null;
$ativo = isset($_POST['ativo']) ? $ativo = trim($_POST['ativo']) : $ativo = '0';
$ativocheck = isset($_POST['ativocheck']) ? $ativocheck = trim($_POST['ativocheck']) : $ativocheck ='checked';

$indiceselecao = isset($_POST['indiceselecao']) ? $indiceselecao = trim($_POST['indiceselecao']) : $indiceselecao ='';
$selecao = isset($_POST['selecao']) ? $selecao = trim($_POST['selecao']) : $selecao ='';

$disp_dataevento = "style='display: none' ";
$disp_diasinatividade = "style='display: none' ";
$disp_diasexpirarpontos = "style='display: none' ";
$disp_diasexpirarcashback = "style='display: none' ";
$disp_diasexpirarvoucher = "style='display: none' ";
$disp_diasexpirarpesquisa = "style='display: none' ";
$disp_tiporespostaindicado = "style='display: none' ";
$disp_pontostrocacategoria = "style='display: none' ";
$disp_produto = "style='display: none' ";
$disp_quantidade = "style='display: none' ";
$disp_valormínimo = "style='display: none' ";
$disp_valormáximo = "style='display: none' ";
$disp_diasantesretorno = "style='display: none' ";

$disabled = "";
$disabled2 = "style='display: none' ";
if ($acao == "")
	{
	$nome= "";
	$gatilho = "";
	$dataevento = '';
	$diasinatividade = '';
	$diasexpirarpontos = '';
	$diasexpirarcashback = '';
	$diasexpirarvoucher = '';
	$diasexpirarpesquisa = '';
	$tiporespostaindicado = '';
	$pontostrocacategoria = '';
	$produto = '';
	$quantidade = '';
	$valormínimo = '';
	$valormáximo = '';
	$diasantesretorno = '';
	$idadeinicial ='';
	$idadefinal ='';
	$mesaniversario ='';
	$sexo ='';
	$categoria ='';
	$frequencia ='';
	$numerodias ='';
	$ativo = 0;
	$ativocheck = '';
	$disabled = "disabled='disabled' ";
	$disabled2 = "";
	}

if($acao == "Salvar")
	{
	if($indiceselecao == "")
		{
		$query = "INSERT INTO 
					gatilho_cliente (
						GATILHO_iD_GATILHO 
						, EMPRESA_ID_EMPRESA 
						, NOME_GATILHO_CLIENTE ";
						if ($mesaniversario != "") {
							$query = $query . ", FILTRO_MES_ANIVERSARIO ";
						}
						if ($sexo != "") {
							$query = $query . ", FILTRO_SEXO ";
						}
						if ($categoria != "") {
	 						$query = $query . ", FILTRO_CATEGORIA ";
						}
						if ($idadeinicial != "") {
							$query = $query . ", FILTRO_IDADE_DE ";
						}
						if ($idadefinal != "") {
							$query = $query . ", FILTRO_IDADE_ATE ";
						}
						if ($frequencia != "") {
							$query = $query . ", FILTRO_FREQUENCIA ";
						}
						if ($numerodias != "") {
							$query = $query . ", FILTRO_NUMERO_DIAS ";
						}
						$query = $query . ", ATIVO) 
				VALUES (
						'".$gatilho."' 
						,'".$empresa."' 
						,'".$nome."' ";
						if ($mesaniversario != "") {
							$query = $query . ",'".$mesaniversario."' ";
						}
						if ($sexo != "") {
							$query = $query . ",'".$sexo."' ";
						}
						if ($categoria != "") {
							$query = $query . ",'".$categoria."' ";
						}
						if ($idadeinicial != "") {
							$query = $query . ",".$idadeinicial;
						}
						if ($idadefinal != "") {
							$query = $query . ",'".$idadefinal."' ";
						}
						if ($frequencia != "") {
							$query = $query . ",'".$frequencia."' ";
						}
						if ($numerodias != "") {
							$query = $query . ",'".$numerodias."' ";
						}
						$query = $query . ",'1')";
		$sql =  mysqli_query($conexao,$query);
		$acao = "";
		}
	else
		{
		$query = "UPDATE 
						gatilho_cliente 
					SET 
						GATILHO_iD_GATILHO = '".$gatilho."'  
						, NOME_GATILHO_CLIENTE = '".$nome."'";  

						if ($mesaniversario != "") {
							$query = $query . ", FILTRO_MES_ANIVERSARIO = '".$mesaniversario."'"; }
						else {
							$query = $query . ", FILTRO_MES_ANIVERSARIO = NULL"; }
						if ($sexo != "") {
							$query = $query . ", FILTRO_SEXO = '".$sexo."'"; }
						else {
								$query = $query . ", FILTRO_SEXO = NULL"; }
						if ($categoria != "") {
							$query = $query . ", FILTRO_CATEGORIA = '".$categoria."'"; }
						else {
								$query = $query . ", FILTRO_CATEGORIA = NULL"; }
						if ($idadeinicial != "") {
							$query = $query . ", FILTRO_IDADE_DE = '".$idadeinicial."'"; }
						else {
								$query = $query . ", FILTRO_IDADE_DE = NULL"; }
						if ($idadefinal != "") {
							$query = $query . ", FILTRO_IDADE_ATE = '".$idadefinal."'"; }
						else {
								$query = $query . ", FILTRO_IDADE_ATE = NULL"; }
						if ($frequencia != "") {
							$query = $query . ", FILTRO_FREQUENCIA = '".$frequencia."'"; }
						else {
								$query = $query . ", FILTRO_FREQUENCIA = NULL"; }
						if ($numerodias != "") {
							$query = $query . ", FILTRO_NUMERO_DIAS = '".$numerodias."'"; }
						else {
								$query = $query . ", FILTRO_NUMERO_DIAS = NULL"; }
						$query = $query . ", ATIVO = '".$ativo."' 
						WHERE 
							EMPRESA_ID_EMPRESA = '".$empresa."' AND 
							ID_GATILHO_CLIENTE = '".$indiceselecao."'";
		echo $query;
		$sql =  mysqli_query($conexao,$query);
		}
	$acao = '';
	$nome= "";
	$gatilho = "";
	$dataevento = '';
	$diasinatividade = '';
	$diasexpirarpontos = '';
	$diasexpirarcashback = '';
	$diasexpirarvoucher = '';
	$diasexpirarpesquisa = '';
	$tiporespostaindicado = '';
	$pontostrocacategoria = '';
	$produto = '';
	$quantidade = '';
	$valormínimo = '';
	$valormáximo = '';
	$diasantesretorno = '';
	$idadeinicial ='';
	$idadefinal ='';
	$mesaniversario ='';
	$sexo ='';
	$categoria ='';
	$frequencia ='';
	$numerodias ='';
	$ativo = '';
	$ativocheck = '';
	$disabled = "disabled='disabled' ";
	$disabled2 = "";
	}

	elseif($acao == "Alterar")
	{
	$sql =  mysqli_query($conexao,	"SELECT 
										A.*, C.ID_GATILHO,	A.NOME_GATILHO_CLIENTE, C.NOM_GATILHO,
										B.ID_GATILHO_ITEM_CLIENTE, D.ID_ITEM, D.NOM_ITEM, B.VALOR
									FROM gatilho_cliente AS A
									LEFT JOIN gatilho_item_cliente AS B 
										ON A.ID_GATILHO_CLIENTE = B.GATILHO_CLIENTE_ID_GATILHO_CLIENTE
									LEFT JOIN gatilho AS C 
										ON A.GATILHO_iD_GATILHO = C.ID_GATILHO
									LEFT JOIN item AS D 
										ON B.GATILHO_ITEM_ITEM_ID_ITEM = D.ID_ITEM
									WHERE 
										A.ID_GATILHO_CLIENTE = '".$indiceselecao ."' 
										AND A.EMPRESA_ID_EMPRESA = '".$empresa."'");
	while($linha =  mysqli_fetch_array($sql)) {
		
		$gatilho = $linha['GATILHO_iD_GATILHO'];
		$nome = $linha['NOME_GATILHO_CLIENTE'];
		$idadeinicial = $linha['FILTRO_IDADE_DE'];
		$idadefinal = $linha['FILTRO_IDADE_ATE'];
		$mesaniversario  = $linha['FILTRO_MES_ANIVERSARIO'];
		$sexo  = $linha['FILTRO_SEXO'];
		$categoria  = $linha['FILTRO_CATEGORIA'];
		$frequencia  = $linha['FILTRO_FREQUENCIA'];
		$numerodias = $linha['FILTRO_NUMERO_DIAS'];
		$ativo = $linha['ATIVO'];
		$ativocheck = $linha['ATIVO'] == 1 ? "checked": "" ;

		$dataevento = $linha['ID_ITEM'] == 2 ? $linha['VALOR'] : $dataevento;
		$diasinatividade = $linha['ID_ITEM'] == 3 ? $linha['VALOR'] : $diasinatividade;
		$diasexpirarpontos = $linha['ID_ITEM'] == 4 ? $linha['VALOR'] : $diasexpirarpontos;
		$diasexpirarcashback = $linha['ID_ITEM'] == 5 ? $linha['VALOR'] : $diasexpirarcashback;
		$diasexpirarvoucher = $linha['ID_ITEM'] == 6 ? $linha['VALOR'] : $diasexpirarvoucher;
		$diasexpirarpesquisa = $linha['ID_ITEM'] == 7 ? $linha['VALOR'] : $diasexpirarpesquisa;
		$tiporespostaindicado = $linha['ID_ITEM'] == 8 ? $linha['VALOR'] : $tiporespostaindicado;
		$pontostrocacategoria = $linha['ID_ITEM'] == 9 ? $linha['VALOR'] : $pontostrocacategoria;
		$produto = $linha['ID_ITEM'] == 10 ? $linha['VALOR'] : $produto;
		$quantidade = $linha['ID_ITEM'] == 11 ? $linha['VALOR'] : $quantidade;
		$valormínimo = $linha['ID_ITEM'] == 12 ? $linha['VALOR'] : $valormínimo;
		$valormáximo = $linha['ID_ITEM'] == 13 ? $linha['VALOR'] : $valormáximo;
		$diasantesretorno = $linha['ID_ITEM'] == 14 ? $linha['VALOR'] : $diasantesretorno;
		
		$disp_dataevento = $linha['ID_ITEM'] == 2 ? "style='display: block' " : $disp_dataevento;
		$disp_diasinatividade = $linha['ID_ITEM'] == 3 ? "style='display: block' " : $disp_diasinatividade;
		$disp_diasexpirarpontos = $linha['ID_ITEM'] == 4 ? "style='display: block' " : $disp_diasexpirarpontos;
		$disp_diasexpirarcashback = $linha['ID_ITEM'] == 5 ? "style='display: block' " : $disp_diasexpirarcashback;
		$disp_diasexpirarvoucher = $linha['ID_ITEM'] == 6 ? "style='display: block' " : $disp_diasexpirarvoucher;
		$disp_diasexpirarpesquisa = $linha['ID_ITEM'] == 7 ? "style='display: block' " : $disp_diasexpirarpesquisa;
		$disp_tiporespostaindicado = $linha['ID_ITEM'] == 8 ? "style='display: block' " : $disp_tiporespostaindicado;
		$disp_pontostrocacategoria = $linha['ID_ITEM'] == 9 ? "style='display: block' " : $disp_pontostrocacategoria;
		$disp_produto = $linha['ID_ITEM'] == 10 ? "style='display: block' " : $disp_produto;
		$disp_quantidade = $linha['ID_ITEM'] == 11 ? "style='display: block' " : $disp_quantidade;
		$disp_valormínimo = $linha['ID_ITEM'] == 12 ? "style='display: block' " : $disp_valormínimo;
		$disp_valormáximo = $linha['ID_ITEM'] == 13 ? "style='display: block' " : $disp_valormáximo;
		$disp_diasantesretorno = $linha['ID_ITEM'] == 14 ? "style='display: block' " : $disp_diasantesretorno;
	
		}
	}
?>

<script language="JavaScript">

function Incluir()
	{
	document.forms['Formulario'].acao.value='Incluir';
	document.forms['Formulario'].ativo.value=1;
	document.forms['Formulario'].indiceselecao.value='';
	document.forms['Formulario'].submit();
	}

function Alterar()
	{
	if(document.forms['Formulario'].indiceselecao.value == '')
		{
    	alert('Favor Selecione um Grupo!');
		return;
		}
	document.forms['Formulario'].acao.value='Alterar';
	document.forms['Formulario'].submit();
	}

function Salvar()
    {
    if(document.forms['Formulario'].nome.value == "")
    	{
    	alert('Favor preencher o Nome do Gatilho!');
		return;
    	}
    else
    	{
    	document.forms['Formulario'].acao.value = 'Salvar';
    	document.forms['Formulario'].submit();
        }
	}

function Voltar()
	{
	document.forms['Formulario'].acao.value='';
	document.forms['Formulario'].submit();
	}
	
function SelecionaItem(td, indice)
	{
	document.forms['Formulario'].selecao.value = td 
	document.forms['Formulario'].indiceselecao.value = indice 
	}

function InverteSelecao()
	{
	document.forms['Formulario'].ativo.value = (document.forms['Formulario'].ativo.value - 1) * -1
	}
	
function TipoAcao(acao)
	{
	document.forms['Formulario'].acaogatilho.value = acao;
	}
	
function Visualiza(obj) 
	{
	var chave = obj.value;
    document.getElementById('div_dataevento').style.display="none";
    document.getElementById('div_diasinatividade').style.display="none";
    document.getElementById('div_diasexpirarpontos').style.display="none";
    document.getElementById('div_diasexpirarcashback').style.display="none";
    document.getElementById('div_diasexpirarvoucher').style.display="none";
    document.getElementById('div_diasexpirarpesquisa').style.display="none";
    document.getElementById('div_tiporespostaindicado').style.display="none";
    document.getElementById('div_pontostrocacategoria').style.display="none";
    document.getElementById('div_produto').style.display="none";
    document.getElementById('div_quantidade').style.display="none";
    document.getElementById('div_valormínimo').style.display="none";
    document.getElementById('div_valormáximo').style.display="none";
    document.getElementById('div_diasantesretorno').style.display="none";
	switch (chave) {
		case "10":
		    document.getElementById('div_dataevento').style.display="block";
			break;
		case "11":
		    document.getElementById('div_diasinatividade').style.display="block";
			break;
		case "12":
		    document.getElementById('div_diasexpirarpontos').style.display="block";
			break;
		case "13":
		    document.getElementById('div_diasexpirarcashback').style.display="block";
			break;
		case "14":
		    document.getElementById('div_diasexpirarvoucher').style.display="block";
			break;
		case "15":
		    document.getElementById('div_diasexpirarpesquisa').style.display="block";
			break;
		case "16":
		    document.getElementById('div_tiporespostaindicado').style.display="block";
			break;
		case "17":
		    document.getElementById('div_pontostrocacategoria').style.display="block";
			break;
		case "18":
		    document.getElementById('div_produto').style.display="block";
		    document.getElementById('div_quantidade').style.display="block";
			break;
		case "19":
		    document.getElementById('div_valormínimo').style.display="block";
		    document.getElementById('div_valormáximo').style.display="block";
			break;
		case "20":
		    document.getElementById('div_diasantesretorno').style.display="block";
			break;
		}

	}

</script>
		<!-- Inicio Conteúdo-->
		<div id="content" class="content">
			<!-- Inicio Caminho -->
			<ol class="breadcrumb float-xl-right">
				<li class="breadcrumb-item"><a>CRM</a></li>
				<li class="breadcrumb-item"><a>Relacionamento</a></li>
				<li class="breadcrumb-item active"><a>Ação</a></li>
			</ol>
			<!-- Fim Caminho -->
			<!-- Inicio Título da Página -->
			<h1 class="page-header">Define ação</h1>
			<!-- Fim Título da Página -->

			<!-- Início Bloco -->
			<div class="row">
				<!-- Início largura-12 -->
				<div class="col-xl-12">
					<!-- Início Painel -->
					<div class="panel panel-inverse" data-sortable-id="regular">
						<!-- Início Cabeçalho do Painel -->
						<div class="panel-heading">
							<h4 class="panel-title">Ação</h4>
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
								<form enctype="multipart/form-data" name="Formulario" action="form_acao.php" method="post">
									<input name="acao" type="hidden" value="<?php echo $acao; ?>" />
									<input name="selecao" type="hidden" value="10001" />
									<input name="indiceselecao" type="hidden" value="<?php echo $indiceselecao; ?>" />
									<input name="acaogatilho" type="hidden" value="<?php echo $acaogatilho; ?>" />
									<!-- Inicio Gatilho ativo -->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Gatilho ativo</label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<select <?php echo $disabled ; ?> onchange="Visualiza(this)" class="form-control" name="gatilho" id="gatilho">
														<option value="0" selected></option>
														<?php 
														$sql =  mysqli_query($conexao,"SELECT ID_GATILHO_CLIENTE, NOME_GATILHO_CLIENTE FROM gatilho_cliente WHERE EMPRESA_ID_EMPRESA = '".$empresa."' AND ATIVO = '1'");
														while($linha =  mysqli_fetch_array($sql))
														{
															if($linha['ID_GATILHO_CLIENTE'] == $gatilho)
																{
																echo "<option value='".$linha['ID_GATILHO_CLIENTE']."'selected>".$linha['NOME_GATILHO_CLIENTE']."</option>";
																}
															else
																{
																echo "<option value='".$linha['ID_GATILHO_CLIENTE']."'>".$linha['NOME_GATILHO_CLIENTE']."</option>";
																} 
														} ?>
													</select>
												</div>
												<div class="col-xs-1 mb-2 mb-sm-0">
													<a href="#modal-gatilhoativo" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Gatilho ativo  -->
									<!-- Inicio Seleciona Ação -->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Selecione a ação do gatilho</label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
												</div>
												<div class="col-xs-1 mb-2 mb-sm-0">
													<a href="#modal-gatilhoativo" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Seleciona Ação -->

									<!-- Inicio de botões seleção de ação -->
									<ul class="nav nav-pills mb-2">
										<li class="nav-item">
											<a href="#Mensagem" onclick="TipoAcao(1);" data-toggle="tab" class="nav-link <?php echo $acaomensagem; ?>">
												<span class="d-sm-none">Mensagem</span>
												<span class="d-sm-block d-none">Mensagem</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#Pesquisa" onclick="TipoAcao(2);" data-toggle="tab" class="nav-link <?php echo $acaopesquisa; ?>">
												<span class="d-sm-none">Pesquisa</span>
												<span class="d-sm-block d-none">Pesquisa</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#Premio"  onclick="TipoAcao(3);" data-toggle="tab" class="nav-link <?php echo $acaopremio; ?>">
												<span class="d-sm-none">Premio</span>
												<span class="d-sm-block d-none">Prêmio</span>
											</a>
										</li>
									</ul>
									<!-- Fim de botões seleção de ação -->
									<!-- Inicio Janela interna -->
									<div class="tab-content p-15 rounded bg-white mb-4 border">
										<!-- Inicio Painel Mensagem -->
										<div class="tab-pane fade active show" id="Mensagem">
											<h3 class="m-t-10">Mensagem</h3>
											<!-- Inicio Canal -->
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">Canal</label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11">
															<div class="radio radio-css radio-inline">
																<input type="radio" id="canalwhatsapp" name="canal">
																<label for="canalwhatsapp">Whatsapp </label>
															</div>
															<div class="radio radio-css radio-inline">
																<input type="radio" id="canalsms" name="canal">
																<label for="canalsms">SMS</label>
															</div>
															<div class="radio radio-css radio-inline">
																<input type="radio" id="canalemail" name="canal">
																<label for="canalemail">E-mail </label>
															</div>
															<div class="radio radio-css radio-inline">
																<input type="radio" id="canalnotificacao" name="canal">
																<label for="canalnotificacao">Notificação</label>
															</div>
														</div>
														<div class="col-xs-1">
															<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																<i class="fa fa-info"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
											<!-- Fim Canal-->
											<!-- Inicio Texto -->
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">Texto</label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11 mb-2 mb-sm-0">
															<textarea class="form-control" rows="3" id="texto" maxlength="200" placeholder="até 200 caracteres" ></textarea>
														</div>
														<div class="col-xs-1 mb-2 mb-sm-0">
															<a href="#modal-resumo" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																<i class="fa fa-info"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
											<!-- Fim Texto-->
										</div>
										<!-- Fim Painel Mensagem -->
										<!-- Inicio Painel Pesquisa-->
										<div class="tab-pane fade" id="Pesquisa">
											<h3 class="m-t-10">Pesquisa</h3>
											<!-- Inicio Pesquisa-->
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">Pesquisa</label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11 mb-2 mb-sm-0">
															<select class="form-control">
																<option value="1">Pesquisa NPS</option>
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
											<!-- Fim Pesquisa-->
											<!-- Inicio Link -->
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">Link</label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11 mb-2 mb-sm-0 input-group">
															<input id="clipboard-default" type="text" class="form-control" value="https://acumulemais.com/pesquisas/nfdfuoaf7d67760438ncu4nrcw847cn" readonly />
															<span class="input-group-append">
																<button class="btn btn-inverse" type="button" data-clipboard-target="#clipboard-default"><i class="fa fa-clipboard"></i></button>
															</span>
														</div>
														<div class="col-xs-1 mb-2 mb-sm-0">
															<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																<i class="fa fa-info"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
											<!-- Fim Link-->
											<!-- Inicio Dias para reenvio -->
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">Dias para reenvio</label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11 mb-2 mb-sm-0">
															<input type="text" class="form-control" id="referencia" maxlength="4" placeholder="até 4 caracteres" />
														</div>
														<div class="col-xs-1 mb-2 mb-sm-0">
															<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																<i class="fa fa-info"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
											<!-- Fim Dias para reenvio -->
											<h3 class="m-t-10">Mensagem</h3>
											<!-- Inicio Canal -->
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">Canal</label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11">
															<div class="radio radio-css radio-inline">
																<input type="radio" id="canalwhatsapp1" name="canal1">
																<label for="canalwhatsapp1">Whatsapp </label>
															</div>
															<div class="radio radio-css radio-inline">
																<input type="radio" id="canalsms1" name="canal1">
																<label for="canalsms1">SMS</label>
															</div>
															<div class="radio radio-css radio-inline">
																<input type="radio" id="canalemail1" name="canal1">
																<label for="canalemail1">E-mail </label>
															</div>
															<div class="radio radio-css radio-inline">
																<input type="radio" id="canalnotificacao1" name="canal1">
																<label for="canalnotificacao1">Notificação</label>
															</div>
														</div>
														<div class="col-xs-1">
															<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																<i class="fa fa-info"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
											<!-- Fim Canal-->
											<!-- Inicio Texto -->
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">Texto</label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11 mb-2 mb-sm-0">
															<textarea class="form-control" rows="3" id="texto" maxlength="200" placeholder="até 200 caracteres" ></textarea>
														</div>
														<div class="col-xs-1 mb-2 mb-sm-0">
															<a href="#modal-resumo" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																<i class="fa fa-info"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
											<!-- Fim Texto-->
										</div>
										<!-- Fim Painel Pesquisa-->
										<!-- Inicio Painel Prêmio -->
										<div class="tab-pane fade" id="Premio">
											<h3 class="m-t-10">Prêmio</h3>
											<!-- Inicio Tipo de prêmio -->
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">Tipo de prêmio</label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11">
															<div class="radio radio-css radio-inline">
																<input type="radio" id="premioponto" name="premio">
																<label for="premioponto">Ponto </label>
															</div>
															<div class="radio radio-css radio-inline">
																<input type="radio" id="premiocupom" name="premio">
																<label for="premiocupom">Cupom de desconto</label>
															</div>
															<div class="radio radio-css radio-inline">
																<input type="radio" id="premiobrinde" name="premio">
																<label for="premiobrinde">Brinde</label>
															</div>
														</div>
														<div class="col-xs-1">
															<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																<i class="fa fa-info"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
											<!-- Fim Tipo de prêmio-->
											<!-- Inicio Quantidade -->
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">Quantidade</label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11 mb-2 mb-sm-0">
															<input type="text" class="form-control" id="referencia" maxlength="4" placeholder="até 4 caracteres" />
														</div>
														<div class="col-xs-1 mb-2 mb-sm-0">
															<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																<i class="fa fa-info"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
											<!-- Fim Quantidade-->
											<!-- Inicio Validade -->
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">Validade em dias</label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11 mb-2 mb-sm-0">
															<input type="text" class="form-control" id="referencia" maxlength="4" placeholder="até 4 caracteres" />
														</div>
														<div class="col-xs-1 mb-2 mb-sm-0">
															<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																<i class="fa fa-info"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
											<!-- Fim Validade-->
											<!-- Inicio % Desconto -->
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">% Desconto</label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11 mb-2 mb-sm-0">
															<input type="text" class="form-control" id="referencia" maxlength="2" placeholder="até 2 caracteres" />
														</div>
														<div class="col-xs-1 mb-2 mb-sm-0">
															<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																<i class="fa fa-info"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
											<!-- Fim % Desconto-->
											<!-- Inicio Compra Mínima-->
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">Compra Mínima</label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11 mb-2 mb-sm-0">
															<input type="text" class="form-control" id="referencia" maxlength="13" placeholder="até 13 caracteres" />
														</div>
														<div class="col-xs-1 mb-2 mb-sm-0">
															<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																<i class="fa fa-info"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
											<!-- Fim Compra Mínima-->
											<!-- Inicio Brinde -->
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">Brinde</label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11 mb-2 mb-sm-0">
															<select class="form-control">
																<option value="1">Patinho de plastico </option>
																<option value="2">Piscina de bolinha</option>
																<option value="3">Pote de sorvete</option>
																<option value="4">Caneta Bic</option>
																<option value="5">Garrafa térmica</option>
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
											<!-- Fim Brinde -->
											<h3 class="m-t-10">Mensagem</h3>
											<!-- Inicio Canal -->
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">Canal</label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11">
															<div class="radio radio-css radio-inline">
																<input type="radio" id="canalwhatsapp2" name="canal2">
																<label for="canalwhatsapp2">Whatsapp </label>
															</div>
															<div class="radio radio-css radio-inline">
																<input type="radio" id="canalsms2" name="canal2">
																<label for="canalsms2">SMS</label>
															</div>
															<div class="radio radio-css radio-inline">
																<input type="radio" id="canalemail2" name="canal2">
																<label for="canalemail2">E-mail </label>
															</div>
															<div class="radio radio-css radio-inline">
																<input type="radio" id="canalnotificacao2" name="canal2">
																<label for="canalnotificacao2">Notificação</label>
															</div>
														</div>
														<div class="col-xs-1">
															<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																<i class="fa fa-info"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
											<!-- Fim Canal-->
											<!-- Inicio Texto -->
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">Texto</label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11 mb-2 mb-sm-0">
															<textarea class="form-control" rows="3" id="texto" maxlength="200" placeholder="até 200 caracteres" ></textarea>
														</div>
														<div class="col-xs-1 mb-2 mb-sm-0">
															<a href="#modal-resumo" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																<i class="fa fa-info"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
											<!-- Fim Texto-->
										</div>
										<!-- Fim Painel Prêmio-->
									</div>
									<!-- Fim Janela interna -->
									<!-- Inicio Dias até a ação -->
									<div class="form-group row m-b-15">
										<label class="col-form-label-lg col-md-3">Dias até a ação</label>
										<div class="col-md-9">
											<div class="row row-space-10">
												<div class="col-xs-11 mb-2 mb-sm-0">
													<input type="text" class="form-control" id="referencia" maxlength="4" placeholder="até 4 caracteres" />
												</div>
												<div class="col-xs-1 mb-2 mb-sm-0">
													<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
														<i class="fa fa-info"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Dias até a ação -->
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
								</form>
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
												<th class="text-nowrap" >Gatilho</th>
												<th class="text-nowrap" >Ação</th>
												<th class="text-nowrap" >Ativo</th>
											</tr>
										</thead>
										<tbody>
											<tr class="odd gradeX">
												<td>Natal</td>
												<td>Mensagem</td>
												<td>Sim</td>
											</tr>
											<tr class="even gradeC">
												<td>Distanciamnto</td>
												<td>Mensagem</td>
												<td>Sim</td>
											</tr>
											<tr class="odd gradeA">
												<td>Compra</td>
												<td>Pesquisa</td>
												<td>Sim</td>
											</tr>
											<tr class="even gradeA">
												<td>Amigo comprou</td>
												<td>Prêmio</td>
												<td>Sim</td>
											</tr>
										</tbody>
									</table>
									<br>
									<!-- Inicio Botão -->
									<div class="col-md-12 text-center">
									<?php if ($acao=='Incluir' || $acao=='Alterar')
										{ ?>
										<a href="javascript:;" onClick="Salvar()" class="btn btn-default m-r-5"><i class="fa fa-upload"></i>  Salvar</a>
										<a href="javascript:;" onClick="Voltar()" class="btn btn-default m-r-5"><i class="fa fa-reply"></i>  Voltar</a>
										<?php }
										else
										{ ?>
										<a href="javascript:;" onClick="Incluir()" class="btn btn-default m-r-5"><i class="fa fa-plus"></i>  Incluir</a>
										<a href="javascript:;" onClick="Alterar()" class="btn btn-default m-r-5"><i class="fa fa-edit"></i>  Editar</a>
										<?php } ?>
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