<?php
echo !defined("guvenlik") ? die("Yapma Be KANKA") : null;
include 'admin/islem/islem.php';
$ayarsor=$db->prepare("SELECT * FROM ayarlar where ayar_id=:id");
$ayarsor->execute(array(
	'id' => 1
	));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
@$yazisor=$db->prepare("SELECT * FROM film_icerik where film_id=:film_id");
@$yazisor->execute(array(
	'film_id' => $_GET['film_id']
	));

@$yazicek=$yazisor->fetch(PDO::FETCH_ASSOC);
$yazibaslik=$yazicek['film_isim'];
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <title><?php echo $ayarcek['site_baslik'] ?> <?php if (!empty($yazibaslik)) { echo " | "; echo $yazicek['film_isim'];} ?></title>
    <meta name="description" content="<?php if (empty($yazicek['film_description'])) { echo $ayarcek['site_description']; } else{echo $yazicek['film_description'];} ?>">
  	<meta name="keywords" content="<?php if (empty($yazicek['film_keywords'])) { echo $ayarcek['site_keywords']; } else{echo $yazicek['film_keywords'];} ?>">
  	<meta name="author" content="<?php echo $ayarcek['site_yazar'] ?>">
    <?php echo $ayarcek['site_analytics'] ?>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light mt-3">
        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-auto mr-5">
            <li class="nav-item">
              <a class="nav-link" href="#">Anasayfa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">En Çok İzlenenler</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">İletişim</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="top-search mt-3">
        <form class="" action="arama.php" method="post" >
            <input name="arama" type="text" class="pl-3" placeholder="İstediğiniz Filmleri buradan hızlı bir şekilde arayabilirsiniz.">
        </form>
	    </div>
    </div>
