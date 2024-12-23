<?php 
$rod_cordefundo = "#DDF";
$rod_cordetexto = "#000";
$rod_whatsapp = "(21) 99081-5340";
$rod_telefone = "(22) 3343-4601";
$rod_web = "www.acumulemais.com";
$rod_email = "suporte@acumulemais.com";
?>

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/js/app.min.js"></script>
	<script src="assets/js/theme/default.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
	<script src="assets/plugins/datatables.net-select/js/dataTables.select.min.js"></script>
	<script src="assets/plugins/datatables.net-select-bs4/js/select.bootstrap4.min.js"></script>
	<script src="assets/js/demo/table-manage-select.demo.js"></script>
	<script src="assets/plugins/jquery-migrate/dist/jquery-migrate.min.js"></script>
	<script src="assets/plugins/moment/min/moment.min.js"></script>
	<script src="assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
	<script src="assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
	<script src="assets/plugins/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
	<script src="assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
	<script src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
	<script src="assets/plugins/pwstrength-bootstrap/dist/pwstrength-bootstrap.min.js"></script>
	<script src="assets/plugins/@danielfarrell/bootstrap-combobox/js/bootstrap-combobox.js"></script>
	<script src="assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="assets/plugins/tag-it/js/tag-it.min.js"></script>
	<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="assets/plugins/select2/dist/js/select2.min.js"></script>
	<script src="assets/plugins/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
	<script src="assets/plugins/bootstrap-show-password/dist/bootstrap-show-password.js"></script>
	<script src="assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
	<script src="assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js"></script>
	<script src="assets/plugins/clipboard/dist/clipboard.min.js"></script>
	<script src="assets/js/demo/form-plugins.demo.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->


<div style="height: 25px; background-color:<?php echo $rod_cordefundo; ?>;">
<table style="width: 100%; background-color:<?php echo $rod_cordefundo; ?>  ">
	<tr>
		<td align="center" style="height: 25px">
		<?php 
		if($rod_whatsapp != "")
			{
			require_once("mobile_detect.php");
			$detect = new Mobile_Detect;
			if ($detect->isMobile()) { ?>
				<div onclick="window.open('https://api.whatsapp.com/send?1=pt_BR&phone=5521994921340&text=Olá', '_blank')">
			<?php } else { ?>
				<div onclick="window.open('https://web.whatsapp.com/send?phone=+5521994921340&amp;text=Olá', '_blank')">
			<?php } ?>
			<img align="Center" class="auto-style1" src="assets/img/icon/whats.png" height="20" width="20">
			<span style="font-size:11.0pt;line-height:100%;font-family:&quot;Calibri"><a style="color:<?php echo $rod_cordetexto; ?>">
				&nbsp;<?php echo $rod_whatsapp; ?></a>
			</span>
		<?php } ?>
			</div>
		</td>
		<td align="center" style="height: 25px">
		<?php 
		if($rod_telefone != "")
			{?>
			<img align="Center" class="auto-style1" src="assets/img/icon/telefone.png" height="20" width="20">
			<span style="font-size:11.0pt;line-height:100%;font-family:&quot;Calibri"><a style="color:<?php echo $rod_cordetexto; ?>">
		&nbsp;<?php echo $rod_telefone; ?></a></span>
		<?php } ?>
		</td>
		<td align="center" style="height: 25px">
		<?php 
		if($rod_web!= "")
			{?>
			<img align="Center" class="auto-style1" src="assets/img/icon/web.png" height="20" width="20">
			<span style="font-size:11.0pt;line-height:100%;font-family:&quot;Calibri"><a style="color:<?php echo $rod_cordetexto; ?>">
		&nbsp;
			<?php echo $rod_web;?></a></span>
		<?php } ?>
		</td>
		<td align="center" style="height: 25px">
		<?php 
		if($rod_email != "")
			{?>
			<img align="Center" class="auto-style1" src="assets/img/icon/email.png" height="20" width="20">
			<span style="font-size:11.0pt;line-height:100%;font-family:&quot;Calibri"><a style="color:<?php echo $rod_cordetexto; ?>">
		&nbsp;<?php echo $rod_email;?></a></span>
		<?php } ?>
		</td>
	</tr>
</table>
</div>

