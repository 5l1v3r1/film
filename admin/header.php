<?php
include 'islem/islem.php';
$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail");
$kullanicisor->execute(array(
  'mail' => $_SESSION['kullanici_mail']
  ));
$say=$kullanicisor->rowCount();
if ($say==0) {
  Header("Location:index.php?durum=izinsiz");
  exit;
}
 ?>
<!doctype html>
<html lang="en">
<head>
	<title>Yönetici</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
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
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span>Admin</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="cikis.php"><i class="lnr lnr-exit"></i> <span>Çıkış Yap</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar">
      <div class="sidebar-scroll">
        <nav>
          <ul class="nav">
            <li><a href="index.php" class="active"><i class="lnr lnr-home"></i> <span>Anasayfa</span></a></li>
            <li>
              <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Filmler</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
              <div id="subPages" class="collapse ">
                <ul class="nav">
                  <li><a href="filmler.php" class="">Filmleri Görüntüle</a></li>
                  <li><a href="filmekle.php" class="">Film Ekle</a></li>
                </ul>
              </div>
            </li>
            <li>
              <a href="#subPages1" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Kategori</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
              <div id="subPages1" class="collapse ">
                <ul class="nav">
                  <li><a href="kategoriler.php" class="">Kategorileri Görüntüle</a></li>
                  <li><a href="kategoriekle.php" class="">Kategori Ekle</a></li>
                </ul>
              </div>
            </li>
            <li><a href="yorumlar.php" class=""><i class="fa fa-comment-o" aria-hidden="true"></i><span>Yorumlar</span></a></li>
            <li><a href="ayarlar.php" class=""><i class="fa fa-cog" aria-hidden="true"></i> <span>Site Ayarları</span></a></li>
          </ul>
        </nav>
      </div>
    </div>
		<!-- END NAVBAR -->
