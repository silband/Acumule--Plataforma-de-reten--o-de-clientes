<?php 
include("app/topo.php"); 
include("checa_login.php"); 
?>
<body>
<?php 
include("app/cabecalho.php"); 
include("app/menulateral.php"); 

$acao = isset($_POST['acao']) ? $acao = trim($_POST['acao']) : $acao='';
$gatilho = isset($_POST['gatilho']) ? $gatilho = trim($_POST['gatilho']) : $gatilho='';
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
				<li class="breadcrumb-item active"><a>Gatilho</a></li>
			</ol>
			<!-- Fim Caminho -->
			<!-- Inicio Título da Página -->
			<h1 class="page-header">Ativação de Gatilho</h1>
			<!-- Fim Título da Página -->

			<!-- Início Bloco -->
			<div class="row">
				<!-- Início largura-12 -->
				<div class="col-xl-12">
					<!-- Início Painel -->
					<div class="panel panel-inverse" data-sortable-id="regular">
						<!-- Início Cabeçalho do Painel -->
						<div class="panel-heading">
							<h4 class="panel-title">Gatilho</h4>
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
									<form enctype="multipart/form-data" name="Formulario" action="form_gatilho.php" method="post">
										<input name="acao" type="hidden" value="<?php echo $acao; ?>" />
										<input name="selecao" type="hidden" value="10001" />
										<input name="indiceselecao" type="hidden" value="<?php echo $indiceselecao; ?>" />
										<!-- Inicio Gatilho -->
										<div class="form-group row m-b-15">
											<label class="col-form-label-lg col-md-3">Gatilho</label>
											<div class="col-md-9">
												<div class="row row-space-10">
													<div class="col-xs-11 mb-2 mb-sm-0">
														<select <?php echo $disabled ; ?> onchange="Visualiza(this)" class="form-control" name="gatilho" id="gatilho">
															<option value="0" selected></option>
															<?php 
															$sql =  mysqli_query($conexao,"SELECT ID_GATILHO, NOM_GATILHO FROM gatilho WHERE ATIVO = '1'");
															while($linha =  mysqli_fetch_array($sql))
															{
																if($linha['ID_GATILHO'] == $gatilho)
																	{
																	echo "<option value='".$linha['ID_GATILHO']."'selected>".$linha['NOM_GATILHO']."</option>";
																	}
																else
																	{
																	echo "<option value='".$linha['ID_GATILHO']."'>".$linha['NOM_GATILHO']."</option>";
																	} 
															} ?>
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
										<!-- Inicio Nome -->
										<div class="form-group row m-b-15">
											<label class="col-form-label-lg col-md-3">Nome</label>
											<div class="col-md-9">
												<div class="row row-space-10">
													<div class="col-xs-11 mb-2 mb-sm-0">
														<input <?php echo $disabled ; ?> type="text" class="form-control" name="nome"  id="nome" value="<?php echo $nome ; ?>" maxlength="40" placeholder="até 40 caracteres" />
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
										<!-- Inicio Data do evento -->
										<div <?php echo $disp_dataevento ; ?> id="div_dataevento" name="div_dataevento">
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">Data do evento</label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11 mb-2 mb-sm-0">
															<input type="date" class="form-control" name="dataevento" id="dataevento" value="<?php echo $dataevento ; ?>" maxlength="10" placeholder="até 10 caracteres" />
														</div>
														<div class="col-xs-1 mb-2 mb-sm-0">
															<a href="#modal-referencia" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																<i class="fa fa-info"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Fim Data do evento -->
										<!-- Inicio Dias de inatividade -->
										<div <?php echo $disp_diasinatividade ; ?> id="div_diasinatividade" name="div_diasinatividade">
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">Dias de inatividade</label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11 mb-2 mb-sm-0">
															<input type="text" class="form-control" name="diasinatividade" id="diasinatividade" value="<?php echo $diasinatividade ; ?>" maxlength="4" placeholder="até 4 caracteres" />
														</div>
														<div class="col-xs-1 mb-2 mb-sm-0">
															<a href="#modal-resumo" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																<i class="fa fa-info"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Fim Dias de inatividade -->
										<!-- Inicio Dias para expirar os pontos-->
										<div <?php echo $disp_diasexpirarpontos ; ?> id="div_diasexpirarpontos" name="div_diasexpirarpontos">
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">Dias para expirar os pontos</label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11 mb-2 mb-sm-0">
															<input type="text" class="form-control" name="diasexpirarpontos" id="diasexpirarpontos" value="<?php echo $diasexpirarpontos ; ?>" maxlength="4" placeholder="até 4 caracteres" />
														</div>
														<div class="col-xs-1 mb-2 mb-sm-0">
															<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																<i class="fa fa-info"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Fim Dias para expirar os pontos-->
										<!-- Inicio Dias para expirar o cashback-->
										<div <?php echo $disp_diasexpirarcashback ; ?> id="div_diasexpirarcashback" name="div_diasexpirarcashback">
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">Dias para expirar cashback</label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11 mb-2 mb-sm-0">
															<input type="text" class="form-control" name="diasexpirarcashback" id="diasexpirarcashback" value="<?php echo $diasexpirarcashback ; ?>" maxlength="4" placeholder="até 4 caracteres" />
														</div>
														<div class="col-xs-1 mb-2 mb-sm-0">
															<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																<i class="fa fa-info"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Fim Dias para expirar o cashback -->
										<!-- Inicio Dias para expirar o voucher -->
										<div <?php echo $disp_diasexpirarvoucher ; ?> id="div_diasexpirarvoucher" name="div_diasexpirarvoucher">
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">Dias para expirar o voucher</label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11 mb-2 mb-sm-0">
															<input type="text" class="form-control" name="diasexpirarvoucher" id="diasexpirarvoucher" value="<?php echo $diasexpirarvoucher ; ?>" maxlength="4" placeholder="até 4 caracteres" />
														</div>
														<div class="col-xs-1 mb-2 mb-sm-0">
															<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																<i class="fa fa-info"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Fim Dias para expirar o voucher-->
										<!-- Inicio Dias para expirar a pesquisa -->
										<div <?php echo $disp_diasexpirarpesquisa ; ?> id="div_diasexpirarpesquisa" name="div_diasexpirarpesquisa">
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">Dias para expirar a pesquisa</label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11 mb-2 mb-sm-0">
															<input type="text" class="form-control" name="diasexpirarpesquisa" id="diasexpirarpesquisa" value="<?php echo $diasexpirarpesquisa ; ?>" maxlength="4" placeholder="até 4 caracteres" />
														</div>
														<div class="col-xs-1 mb-2 mb-sm-0">
															<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																<i class="fa fa-info"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Fim Dias para expirar a pesquisa-->
										<!-- Inicio Tipo de resposta do indicado -->
										<div <?php echo $disp_tiporespostaindicado ; ?> id="div_tiporespostaindicado" name="div_tiporespostaindicado">
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">Tipo de resposta do indicado</label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11 mb-2 mb-sm-0">
															<select class="form-control" name="tiporespostaindicado" id="tiporespostaindicado">
																<option value="0"></option>
																<option value="1" <?php echo $tiporespostaindicado == '1' ? 'selected' : ''; ?>>Cadastramento</option>
																<option value="2" <?php echo $tiporespostaindicado == '1' ? 'selected' : ''; ?>>Compra</option>
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
										</div>
										<!-- Fim Tipo de resposta do indicado -->
										<!-- Inicio Pontos para troca de categoria -->
										<div <?php echo $disp_pontostrocacategoria ; ?> id="div_pontostrocacategoria" name="div_pontostrocacategoria">
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">Pontos para troca de categoria</label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11 mb-2 mb-sm-0">
															<input type="text" class="form-control" name="pontostrocacategoria" id="pontostrocacategoria" value="<?php echo $pontostrocacategoria ; ?>" maxlength="4" placeholder="até 4 caracteres" />
														</div>
														<div class="col-xs-1 mb-2 mb-sm-0">
															<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																<i class="fa fa-info"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Fim Pontos para troca de categoria -->
										<!-- Inicio Produto -->
										<div <?php echo $disp_produto ; ?> id="div_produto" name="div_produto">
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">Produto</label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11 mb-2 mb-sm-0">
															<select class="form-control" name="produto" id="produto">
																<option value="" selected></option>
																<?php 
																$sql =  mysqli_query($conexao,"SELECT ID_PRODUTO, NOM_PRODUTO FROM produto WHERE EMPRESA_ID_EMPRESA = '".$empresa."' AND ATIVO = '1'");
																while($linha =  mysqli_fetch_array($sql))
																{
																	if($linha['ID_PRODUTO'] == $produto)
																		{
																		echo "<option value='".$linha['ID_PRODUTO']."'selected>".$linha['NOM_PRODUTO']."</option>";
																		}
																	else
																		{
																		echo "<option value='".$linha['ID_PRODUTO']."'>".$linha['NOM_PRODUTO']."</option>";
																		} 
																} ?>
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
										</div>
										<!-- Fim Produto -->
										<!-- Inicio Quantidade -->
										<div <?php echo $disp_quantidade ; ?> id="div_quantidade" name="div_quantidade">
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">Quantidade</label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11 mb-2 mb-sm-0">
															<input type="text" class="form-control" name="quantidade" id="quantidade" value="<?php echo $quantidade ; ?>" maxlength="4" placeholder="até 4 caracteres" />
														</div>
														<div class="col-xs-1 mb-2 mb-sm-0">
															<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																<i class="fa fa-info"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Fim Quantidade -->
										<!-- Inicio Valor mínimo -->
										<div <?php echo $disp_valormínimo ; ?> id="div_valormínimo" name="div_valormínimo">
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">Valor mínimo </label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11 mb-2 mb-sm-0">
															<input type="text" class="form-control" name="valormínimo" id="valormínimo" value="<?php echo $valormínimo ; ?>" maxlength="13" placeholder="até 13 caracteres" />
														</div>
														<div class="col-xs-1 mb-2 mb-sm-0">
															<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																<i class="fa fa-info"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Fim Valor mínimo -->
										<!-- Inicio Valor máximo -->
										<div <?php echo $disp_valormáximo ; ?> id="div_valormáximo" name="div_valormáximo">
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">Valor máximo</label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11 mb-2 mb-sm-0">
															<input type="text" class="form-control" name="valormáximo" id="valormáximo" value="<?php echo $valormáximo ; ?>" maxlength="13" placeholder="até 13 caracteres" />
														</div>
														<div class="col-xs-1 mb-2 mb-sm-0">
															<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																<i class="fa fa-info"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Fim Valor máximo -->
										<!-- Inicio Dias antes do retorno -->
										<div <?php echo $disp_diasantesretorno ; ?> id="div_diasantesretorno" name="div_diasantesretorno">
											<div class="form-group row m-b-15">
												<label class="col-form-label-lg col-md-3">Dias antes do retorno</label>
												<div class="col-md-9">
													<div class="row row-space-10">
														<div class="col-xs-11 mb-2 mb-sm-0">
															<input type="text" class="form-control" name="diasantesretorno" id="diasantesretorno" value="<?php echo $diasantesretorno ; ?>" maxlength="4" placeholder="até 4 caracteres" />
														</div>
														<div class="col-xs-1 mb-2 mb-sm-0">
															<a href="#modal-nome" data-toggle="modal" class="btn btn-teal btn-icon btn-circle btn-sm">
																<i class="fa fa-info"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Fim Dias antes do retorno -->
										<!-- Inicio Filtros -->
										<div class="form-group row m-b-15">
											<label class="col-form-label-lg col-md-3 lead">Filtros</label>
											<div class="col-md-9">
											</div>
										</div>
										<!-- Fim Filtros-->
										<!-- Inicio Intervalo de idade -->
										<div class="form-group row m-b-15">
											<label class="col-form-label-lg col-md-3">Intervalo de idade</label>
											<div class="col-md-9">
												<div class="row row-space-10">
													<div class="col-xs-11 input-group">
														<input <?php echo $disabled ; ?> type="text" class="form-control" name="idadeinicial" id="idadeinicial" value="<?php echo $idadeinicial ; ?>" maxlength="3" placeholder="Idade inicial" />
														<span class="input-group-addon">até</span>
														<input type="text" <?php echo $disabled ; ?> class="form-control" name="idadefinal" id="idadefinal" value="<?php echo $idadefinal ; ?>" maxlength="3" placeholder="Idade final" />
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
										<!-- Inicio Mês de aniversário -->
										<div class="form-group row m-b-15">
											<label class="col-form-label-lg col-md-3">Mês de aniversário</label>
											<div class="col-md-9">
												<div class="row row-space-10">
													<div class="col-xs-11 mb-2 mb-sm-0">
														<select <?php echo $disabled ; ?> class="form-control" name="mesaniversario" id="mesaniversario">
															<option value=""></option>
															<option value="1" <?php echo $mesaniversario == '1' ? 'selected' : ''; ?>>Janeiro</option>
															<option value="2" <?php echo $mesaniversario == '2' ? 'selected' : ''; ?>>Fevereiro</option>
															<option value="3" <?php echo $mesaniversario == '3' ? 'selected' : ''; ?>>Março</option>
															<option value="4" <?php echo $mesaniversario == '4' ? 'selected' : ''; ?>>Abril</option>
															<option value="5" <?php echo $mesaniversario == '5' ? 'selected' : ''; ?>>Maio</option>
															<option value="6" <?php echo $mesaniversario == '6' ? 'selected' : ''; ?>>Junho</option>
															<option value="7" <?php echo $mesaniversario == '7' ? 'selected' : ''; ?>>Julho</option>
															<option value="8" <?php echo $mesaniversario == '8' ? 'selected' : ''; ?>>Agosto</option>
															<option value="9" <?php echo $mesaniversario == '9' ? 'selected' : ''; ?>>Setembro</option>
															<option value="10" <?php echo $mesaniversario == '10' ? 'selected' : ''; ?>>Outubro</option>
															<option value="11" <?php echo $mesaniversario == '11' ? 'selected' : ''; ?>>Novembro</option>
															<option value="12" <?php echo $mesaniversario == '12' ? 'selected' : ''; ?>>Dezembro</option>
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
										<!-- Fim Mês de aniversário -->
										<!-- Inicio Sexo -->
										<div class="form-group row m-b-15">
											<label class="col-form-label-lg col-md-3">Sexo</label>
											<div class="col-md-9">
												<div class="row row-space-10">
													<div class="col-xs-11 mb-2 mb-sm-0">
														<select <?php echo $disabled ; ?> class="form-control" name="sexo" id="sexo">
															<option value=""></option>
															<option value="1" <?php echo $sexo == 'M' ? 'selected' : ''; ?> >Masculino</option>
															<option value="2" <?php echo $sexo == 'F' ? 'selected' : ''; ?> >Feminino</option>
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
														<select <?php echo $disabled ; ?> class="form-control" name="categoria" id="categoria" value="">
															<option value="" selected></option>
															<?php 
															$sql =  mysqli_query($conexao,"SELECT ID_CATEGORIA_PARTICIPANTE, NOM_CATEGORIA_PARTICIANTE FROM categoria_participante WHERE EMPRESA_ID_EMPRESA = '".$empresa."' AND ATIVO = '1'");
															echo "SELECT ID_CATEGORIA_PARTICIPANTE, NOM_CATEGORIA_PARTICIANTE FROM categoria_participante WHERE EMPRESA_ID_EMPRESA = '".$empresa."' AND ATIVO = '1'";
															while($linha =  mysqli_fetch_array($sql))
															{
																if($linha['ID_CATEGORIA_PARTICIPANTE'] == $categoria)
																	{
																	echo "<option value='".$linha['ID_CATEGORIA_PARTICIPANTE']."'selected>".$linha['NOM_CATEGORIA_PARTICIANTE']."</option>";
																	}
																else
																	{
																	echo "<option value='".$linha['ID_CATEGORIA_PARTICIPANTE']."'>".$linha['NOM_CATEGORIA_PARTICIANTE']."</option>";
																	} 
															} ?>
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
										<!-- Inicio Frequência -->
										<div class="form-group row m-b-15">
											<label class="col-form-label-lg col-md-3">Frequência </label>
											<div class="col-md-9">
												<div class="row row-space-10">
													<div class="col-xs-4">
														<div class="radio radio-css radio-inline">
															<input <?php echo $disabled ; ?> type="radio" value="1" <?php echo $frequencia == '1' ? 'checked' : ''; ?> id="frequenciaativo" name="frequencia">
															<label for="frequenciaativo">Ativo </label>
														</div>
														<div class="radio radio-css radio-inline">
															<input <?php echo $disabled ; ?> type="radio" value="0" <?php echo $frequencia == '0' ? 'checked' : ''; ?> id="frequenciainativo" name="frequencia">
															<label for="frequenciainativo"> Inativo</label>
														</div>
													</div>
													<div class="col-xs-7">
														<div class="row">
														<label class="col-form-label-lg col-md-4">Número de dias</label>
														<div class="col-md-8">
															<input <?php echo $disabled ; ?> type="text" class="form-control" name="numerodias" id="numerodias" value="<?php echo $numerodias ; ?>" maxlength="4" placeholder="até 4 caracteres" />
														</div>
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
										<!-- Fim Frequencia-->
										<!-- Inicio Ativo -->
										<div class="form-group row m-b-15">
											<label class="col-form-label-lg col-md-3">Ativo</label>
											<div class="col-md-9">
												<div class="row row-space-10">
													<div class="col-xs-11 mb-2 mb-sm-0">
														<div class="form-control border-0 custom-switch">
															<input <?php echo $disabled ; ?> type="checkbox" onclick="InverteSelecao()"  name="ativo" id="ativo" <?php echo $ativocheck; ?> value="<?php echo $ativo; ?>" class="custom-control-input" />
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
									<div <?php echo $disabled2 ; ?> >
										<table id="data-table-select" class="table table-striped table-bordered table-td-valign-middle">
											<thead>
												<tr>
													<th class="text-nowrap" >Nome</th>
													<th class="text-nowrap" >Ativo</th>
												</tr>
											</thead>
											<tbody>
												<?php $i=0; 
													$sql =  mysqli_query($conexao,"SELECT ID_GATILHO_CLIENTE, NOME_GATILHO_CLIENTE, ATIVO FROM GATILHO_CLIENTE");
													while($linha =  mysqli_fetch_array($sql)) 
														{ 
														$i=$i+1; ?>
												<tr class="b" id="<?php echo ($i+10000); ?>" onMouseOver="style.cursor='hand'" onclick="SelecionaItem(<?php echo "'".($i+10000)."', '".$linha['ID_GATILHO_CLIENTE']."'"; ?>)">
													<td><?php echo $linha['NOME_GATILHO_CLIENTE'] ?></td>
													<td><?php echo $linha['ATIVO'] == 1 ? "Sim": "Não" ; ?></td>
												</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
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