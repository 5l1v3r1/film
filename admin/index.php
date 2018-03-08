<?php
ob_start();
session_start();
if (@$_SESSION['kullanici_mail']) {
	Header("Location:anasayfa.php");
}
 ?>
<!doctype html>
<html lang="en" class="fullscreen-bg">
<head>
	<title>Film Yönetim Paneli</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left" style="background:#212529;">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="assets/img/logo-dark.png"></div>
							</div>
							<form id="girisyap" class="form-auth-small">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">E-Posta Adresiniz:</label>
									<input type="email" class="form-control" name="email" placeholder="E-Posta adresinizi giriniz.">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Şifre:</label>
									<input type="password" class="form-control" name="password" placeholder="Şifrenizi giriniz.">
									<input type="hidden" name="girisyap">
								</div>
								<button class="btn btn-primary btn-lg btn-block">Giriş Yap</button>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Free Bootstrap dashboard template</h1>
							<p>by The Develovers</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
	<script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript">
		$("#girisyap").submit(function(){
			$.ajax({
				type:"POST",
				url:"islem/islem.php",
				data:$("#girisyap").serialize(),
				success:function(data){
					var veri=JSON.parse(data);
					swal("",veri.message,veri.status).then(() => {console.log(window.location = "index.php");
})
				}
			});
			return false;
		});
	</script>
</body>

</html>
