<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
		<title>管理员登陆</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript">
			addEventListener("load", function() {
				setTimeout(hideURLbar, 0);
			}, false);

			function hideURLbar() {
				window.scrollTo(0, 1);
			}
		</script>
		<meta name="keywords" content="Flat Dark Web Login Form Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates" />
		<link href="/Public/login/css/style.css" rel='stylesheet' type='text/css' />
		<!--webfonts-->
		<link href='http://fonts.useso.com/css?family=PT+Sans:400,700,400italic,700italic|Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.useso.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
		<script src="http://ajax.useso.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	</head>

	<body>
		<script>
			$(document).ready(function(c) {
				$('.close').on('click', function(c) {
					$('.login-form').fadeOut('slow', function(c) {
						$('.login-form').remove();
					});
				});
			});
		</script>
		<!--SIGN UP-->
		<h1>管理员后台登陆</h1>
		<div class="login-form">
			<div class="close"> </div>
			<div class="head-info">
				<label class="lbl-1"> </label>
				<label class="lbl-2"> </label>
				<label class="lbl-3"> </label>
			</div>
			<div class="clear"> </div>
			<div class="avtar">
				<img src="/Public/login/images/avtar.png" />
			</div>
			<form action="<?php echo U('Login/login');?>" method="post">
				<input type="text" class="text" placeholder="Username" name="username">
				<div class="key">
					<input type="password" placeholder="Password" name="password">
				</div>
				<div class="signin">
					<input type="submit" value="Login">
				</div>
			</form>

		</div>
		<div class="copy-rights">
			<p>Copyright &copy; 2016.Company name All rights reserved.More Templates <a href="http://www.mycodes.net/" target="_blank" title="admin">admin</a></p>
		</div>

	</body>

</html>