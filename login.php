<?php 
include("app/topo.php"); 
?>
<body>
<?php
$pagina = "login";
include("app/cabecalho.php"); 
?>
	<!-- início #page-container -->
	<div id="page-container" class="fade">
		<!-- início login -->
		<div class="login login-v1">
			<!-- início login-container -->
			<div class="login-container">
				<!-- início login-header -->
				<div class="login-header">
					<div class="brand">
						<span class="logo"><img src="<?php echo URL; ?>/assets/img/brand/brand-acumule+2.png" /></span> 
						<small>
                            Login no Sistema<?php if (isset($_GET['msg'])): ?> <span style="color: red;"><strong>ERRO!</strong> Usuário ou senha inválidos.</span><?php endif; ?>
                        </small>
					</div>
					<div class="icon">
						<i class="fa fa-lock"></i>
					</div>
				</div>
				<!-- fim login-header -->
				<!-- início login-body -->
				<div class="login-body" style="<?php echo $style_login_body; ?>">
					<!-- início login-content -->
					<div class="login-content">
						<form action="<?php echo URL; ?>/valida-login/" method="POST" class="margin-bottom-0">
							<div class="form-group m-b-20">
								<input type="email" class="form-control form-control-lg inverse-mode" id="username" name="username" placeholder="Email Address" required />
							</div>
							<div class="form-group m-b-20">
								<input type="password" class="form-control form-control-lg inverse-mode" id="password" name="password" placeholder="Password" required />
							</div>
							<div class="checkbox checkbox-css m-b-20">
								<input type="checkbox" id="remember_checkbox" /> 
								<label for="remember_checkbox">
								Remember Me
								</label>
							</div>
							<div class="login-buttons">
								<button type="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
							</div>
						</form>
					</div>
					<!-- fim login-content -->
				</div>
				<!-- fim login-body -->
			</div>
			<!-- fim login-container -->
		</div>
		<!-- fim login -->
		
		<!-- início scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- fim scroll to top btn -->
	</div>
	<!-- fim page container -->
<?php 
include("app/rodape.php");
?>
