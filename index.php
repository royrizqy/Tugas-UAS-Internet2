<?php
@session_start();
include "koneksi.php";

if (@$_SESSION['accounting'] || @$_SESSION['admin']) {
	header("location:home.php");
} elseif (@$_SESSION['manager']) {
	header("location:manager/jurnalUmum.php");
} else {
?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login Page</title>
		<link rel="shortcut icon" href="favicon.ico" />
		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.1.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="assets/css/select2.css" />
		<!-- text fonts -->
		<link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />
		<!-- ace styles -->
		<link rel="stylesheet" href="./css/ace.min.css" />
		<link rel="stylesheet" href="./css/ace-rtl.min.css" />

	</head>

	<body class="login-layout blur-login" OnLoad="document.login.username.focus();">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-eye green"></i>
									<span class="white">Manajemen</span><span class="red"> Keuangan</span>
								</h1>
							</div>
							<div class="space-6"></div>
							<div id="loading" style="text-align: center"></div>
							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h5 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Masukkan Akun Anda
											</h5>

											<div class="space-6"></div>

											<form name="form" id="loginF" method="post" action="login.php" class="form-horizontal">
												<fieldset>
													<div class="form-group">
														<label class="block clearfix">
															<span class="block input-icon input-icon-right">
																<input type="text" name="username" id="username" value="" class="form-control" placeholder="Username" required="required" />
																<i class="ace-icon fa fa-user"></i>
															</span>
														</label>
													</div>

													<div class="form-group">
														<label class="block clearfix">
															<span class="block input-icon input-icon-right">
																<input type="password" name="passlogin" value="" id="passlogin" class="form-control" placeholder="Password" required="required" />
																<i class="ace-icon fa fa-lock"></i>
															</span>
														</label>
													</div>

													<div class="space"></div>

													<div class="clearfix">

														<div class="form-group">
															<button class="width-35 pull-right btn btn-sm btn-primary" name="login">
																<i class="ace-icon fa fa-key"></i>
																<span class="bigger-110">Login</span>
															</button>
															<div>
															</div>
												</fieldset>
											</form>

										</div><!-- /.widget-hal -->
									</div>
								</div><!-- /.widget-body -->
							</div><!-- /.login-box -->
							</div>
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->
		<!-- basic scripts -->
		<!--[if !IE]> -->
		<script src="assets/js/jquery.2.1.1.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.validate.min.js"></script>
		<script type="text/javascript">
			if ('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$(document).on('click', '.toolbar a[data-target]', function(e) {
					e.preventDefault();
					var target = $(this).data('target');
					$('.widget-box.visible').removeClass('visible'); //hide others
					$(target).addClass('visible'); //show target
				});
			});
		</script>
	</body>

	</html>
<?php
}
?>