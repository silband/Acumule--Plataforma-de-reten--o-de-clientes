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

$nome = isset($_POST['nome']) ? $nome = trim($_POST['nome']) : $nome ='';
$referencia = isset($_POST['referencia']) ? $referencia = trim($_POST['referencia']) : $referencia ='';
$descricao = isset($_POST['descricao']) ? $descricao = trim($_POST['descricao']) : $descricao ='';
$grupo = isset($_POST['grupo']) ? $grupo = trim($_POST['grupo']) : $grupo ='';
$indiceselecao = isset($_POST['indiceselecao']) ? $indiceselecao = trim($_POST['indiceselecao']) : $indiceselecao ='';
$selecao = isset($_POST['selecao']) ? $selecao = trim($_POST['selecao']) : $selecao ='';
$ativo = isset($_POST['ativo']) ? $ativo = trim($_POST['ativo']) : $ativo ='';
$ativocheck = isset($_POST['ativocheck']) ? $ativocheck = trim($_POST['ativocheck']) : $ativocheck ='';

$disabled = "";
$disabled2 = "style='display: none' ";
if ($acao == "")
	{
	$disabled = "disabled='disabled' ";
	$disabled2 = "";
	}

if($acao == "Salvar")
	{
	if($indiceselecao == "")
		{
		$sql =  mysqli_query($conexao,"INSERT INTO GRUPO_PRODUTO (EMPRESA_ID_EMPRESA, NOM_GRUPO_PRODUTO, DESC_GRUPO_PRODUTO, ID_GRUPO_PRODUTO_ORIGINAL, ATIVO) 
		VALUES('$empresa','$nome','$descricao','$referencia',$ativo)");
		
		$acao = '';
		}
	else
		{
		$sql =  mysqli_query($conexao,"UPDATE `GRUPO_PRODUTO`  SET `DESC_GRUPO_PRODUTO` = '".$descricao."', `ATIVO` = '".$ativo."',
				`NOM_GRUPO_PRODUTO` = '".$nome."', `ID_GRUPO_PRODUTO_ORIGINAL` = '".$referencia."'
				WHERE `EMPRESA_ID_EMPRESA`= '".$empresa."' AND `CODIGO` = '".$indiceselecao."'");
		if ($ativo == 0)
			{
			$sql =  mysqli_query($conexao,"UPDATE `SUBGRUPO_PRODUTO`  SET `ATIVO` = '".$ativo."'
					WHERE `EMPRESA_ID_EMPRESA`= '".$empresa."' AND `GRUPO_PRODUTO_ID_GRUPO_PRODUTO` = '".$indiceselecao."'");
			$sql =  mysqli_query($conexao,"UPDATE `PRODUTO`  SET `ATIVO` = '".$ativo."'
					WHERE `EMPRESA_ID_EMPRESA`= '".$empresa."' AND 
					`SUBGRUPO_PRODUTO_ID_SUB_GRUPOPRODUTO	` IN (SELECT `ID_SUB_GRUPOPRODUTO` FROM `SUBGRUPO_PRODUTO` WHERE `GRUPO_PRODUTO_ID_GRUPO_PRODUTO` = '".$indiceselecao."')");
			}
		}
	$acao = '';
	$nome = '';
	$descricao = '';
	$referencia = '';
	$grupo = '';
	$disabled = "disabled='disabled' ";
	$disabled2 = "";
	}
elseif($acao == "Alterar")
	{
	$sql =  mysqli_query($conexao,"SELECT * FROM `GRUPO_PRODUTO` WHERE ID_GRUPO_PRODUTO = '".$indiceselecao ."' AND EMPRESA_ID_EMPRESA = '".$empresa."'");
	$linha =  mysqli_fetch_array($sql);
	$nome = $linha['NOM_GRUPO_PRODUTO'];
	$descricao = $linha['DESC_GRUPO_PRODUTO'];
	$referencia = $linha['ID_GRUPO_PRODUTO_ORIGINAL'];
	$ativo = $linha['ATIVO'];
	$ativocheck = $linha['ATIVO'] == 1 ? "checked": "" ;
	}
?>

<script language="JavaScript">

function Incluir()
	{
	document.forms['Grupo'].acao.value='Incluir';
	document.forms['Grupo'].nome.value='';
	document.forms['Grupo'].referencia.value='';
	document.forms['Grupo'].descricao.value='';
	document.forms['Grupo'].indiceselecao.value='';
	document.forms['Grupo'].submit();
	}

function Alterar()
	{
	if(document.forms['Grupo'].indiceselecao.value == '')
		{
    	alert('Favor Selecione um Grupo!');
		return;
		}
	document.forms['Grupo'].acao.value='Alterar';
	document.forms['Grupo'].submit();
	}

function Salvar()
    {
    if(document.forms['Grupo'].nome.value == "")
    	{
    	alert('Favor preencher o Nome do Grupo!');
		return;
    	}
    else
    	{
    	document.forms['Grupo'].acao.value = 'Salvar';
    	document.forms['Grupo'].submit();
        }
	}

function Voltar()
	{
	document.forms['Grupo'].acao.value='';
	document.forms['Grupo'].nome.value='';
	document.forms['Grupo'].referencia.value='';
	document.forms['Grupo'].descricao.value='';
	document.forms['Grupo'].submit();
	}
	
function SelecionaItem(td, indice)
	{
	if(document.forms['Grupo'].selecao.value  % 2 == 0) {
		document.forms['Grupo'].cor.value = "ffffff"; }
	else {
	    document.forms['Grupo'].cor.value = "CCCCFF"; }
	document.getElementById(document.forms['Grupo'].selecao.value).style.backgroundColor=document.forms['Grupo'].cor.value;
	document.getElementById(td).style.backgroundColor="666699";
	document.forms['Grupo'].selecao.value = td 
	document.forms['Grupo'].indiceselecao.value = indice 
	}

function InverteSelecao()
	{
	document.forms['Grupo'].ativo.value = (document.forms['Grupo'].ativo.value - 1) * -1
	}
	
</script>

		<!-- Inicio Conteúdo-->
		<div id="content" class="content">
			<!-- Inicio Caminho -->
			<ol class="breadcrumb float-xl-right">
				<li class="breadcrumb-item"><a>Configurações</a></li>
				<li class="breadcrumb-item"><a>Gestão de Cadastros</a></li>
				<li class="breadcrumb-item active"><a>Grupo</a></li>
			</ol>
			<!-- Fim Caminho -->
			<!-- Inicio Título da Página -->
			<h1 class="page-header">Cadastro de Grupo</h1>
			<!-- Fim Título da Página -->

			<!-- Início Bloco -->
			<div class="row">
				<!-- Início largura-12 -->
				<div class="col-xl-12">
					<!-- Início Painel -->
					<div class="panel panel-inverse" data-sortable-id="regular">
						<!-- Início Cabeçalho do Painel -->
						<div class="panel-heading">
							<h4 class="panel-title">Grupo</h4>
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
								<form enctype="multipart/form-data" name="Grupo" action="form_grupo.php" method="post">
									<input name="acao" type="hidden" value="<?php echo $acao; ?>" />
									<input name="selecao" type="hidden" value="10001" />
									<input name="cor" type="hidden" value="ffffff" />
									<input name="indiceselecao" type="hidden" value="<?php echo $indiceselecao; ?>" />
								<!-- Inicio Nome -->
								<div class="form-group row m-b-15">
									<label class="col-form-label-lg col-md-3">Nome</label>
									<div class="col-md-9">
										<div class="row row-space-10">
											<div class="col-xs-11 mb-2 mb-sm-0">
												<input type="text" <?php echo $disabled ; ?> class="form-control" name="nome" id="nome" value="<?php echo $nome ; ?>" maxlength="40" placeholder="até 40 caracteres" />
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
												<input type="text" <?php echo $disabled ; ?> class="form-control" name="referencia" id="referencia" value="<?php echo $referencia ; ?>" maxlength="40" placeholder="até 40 caracteres" />
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
												<input type="text" <?php echo $disabled ; ?> class="form-control"  name="descricao" id="descricao" value="<?php echo $descricao ; ?>" maxlength="100" placeholder="até 100 caracteres" />
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
								<!-- Inicio Ativo -->
								<div class="form-group row m-b-15">
									<label class="col-form-label-lg col-md-3">Ativo</label>
									<div class="col-md-9">
										<div class="row row-space-10">
											<div class="col-xs-11 mb-2 mb-sm-0">
												<div class="form-control border-0 custom-switch">
													<input type="checkbox" class="custom-control-input" id="ativo" name="ativo" onchange="InverteSelecao()" <?php echo $disabled ; ?> <?php echo $ativocheck; ?> value="<?php echo $ativo; ?>"/>
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
									<div <?php echo $disabled2 ; ?> >
										<table class="table table-striped table-bordered table-td-valign-middle">
											<thead>
												<tr>
													<th class="text-nowrap" data-orderable="false">Nome</th>
													<th class="text-nowrap" >Referência</th>
													<th class="text-nowrap" >Ativo</th>
												</tr>
											</thead>
											<tbody>
												<?php $i=0; 
													$sql =  mysqli_query($conexao,"SELECT * FROM `GRUPO_PRODUTO` WHERE EMPRESA_ID_EMPRESA= '".$empresa."' order by DESC_GRUPO_PRODUTO");
													while($linha =  mysqli_fetch_array($sql)) 
														{ 
														$i=$i+1; ?>
												<tr class="gradeA" id="<?php echo ($i+10000); ?>" onMouseOver="style.cursor='hand'" onclick="SelecionaItem(<?php echo "'".($i+10000)."', '".$linha['ID_GRUPO_PRODUTO']."'"; ?>)">
													<td><?php echo $linha['NOM_GRUPO_PRODUTO'] ?></td>
													<td><?php echo $linha['ID_GRUPO_PRODUTO_ORIGINAL'] ?></td>
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