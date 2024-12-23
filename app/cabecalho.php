	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show">
		<span class="spinner"></span>
	</div>
	<!-- end #page-loader -->
<?php
/*
$str_class = "";
switch($pagina){
	case "index":

		*/

		$str_class = "page-container fade page-sidebar-fixed page-header-fixed gradient-enabled";

		/*
		
	break;
}

if ($pagina != "login"):
*/
?>
	<!-- begin #page-container -->
	<div id="page-container" class="<?php echo $str_class; ?>">

		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class=" navbar-header">
				<a href="index.php" class="navbar-brand"><img alt="" src="<?php echo URL; ?>/assets/img/brand/brand-acumule+2.png"></a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- end navbar-header -->
			<!-- begin header-nav -->
			<ul class="navbar-nav navbar-right">
				<li class="btn">
					<div>
						<a href="javascript:;" class="btn btn-default btn-icon btn-circle btn-lg">
						  <i class="fa fa-expand"></i>
						</a>
					</div>
				</li>
				<li class="navbar-form">
					<form action="" method="POST" name="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Digite a pesquisa" />
							<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</li>
				
				<li class="dropdown">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle f-s-14">
						<i class="fa fa-bell"></i>
						<span class="label">0</span>
					</a>
					<div class="dropdown-menu media-list dropdown-menu-right">
						<div class="dropdown-header">NOTIFICAÇÔES (0)</div>
						<div class="text-center width-300 p-b-10 p-t-10">
							Nenhuma notificação encontrada
						</div>
					</div>
				</li>
				<li class="dropdown navbar-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<div class="image">
							<img src="<?php echo URL; ?>/assets/img/user/user-15.jpg" alt="" />
						</div>
						<span class="d-none d-md-inline">Silvio Bandeira</span> <b class="caret"></b>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="javascript:;" class="dropdown-item">Edit 
						Profile</a>
						<a href="javascript:;" class="dropdown-item"><span class="badge badge-danger pull-right">
						0</span> Inbox</a>
						<a href="javascript:;" class="dropdown-item">Calendar</a>
						<a href="javascript:;" class="dropdown-item">Setting</a>
						<div class="dropdown-divider"></div>
						<a href="<?php echo URL."/logout.php" ?>" class="dropdown-item">Sair</a>
					</div>
				</li>
			</ul>
			<!-- end header-nav -->
		</div>
		<!-- end #header -->
<?php 
/*
endif;//if ($pagina != "login"){
*/