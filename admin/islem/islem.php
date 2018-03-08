<?php
ob_start();
session_start();
include 'baglan.php';
include 'fonksiyon.php';

if (isset($_POST['girisyap'])) {
  $kadi=$_POST['email'];
	$password=md5($_POST['password']);
  $kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:password and kullanici_yetki=:yetki");
	$kullanicisor->execute(array(
		'mail' => $kadi,
		'password' => $password,
		'yetki' => 1
		));
    $say=$kullanicisor->rowCount();
  if (empty($_POST['email']) OR empty($_POST['password'])) {
    $data["status"]="info";
    $data["message"]="E-Posta veya şifreniz boş bırakılamaz";
    echo JSON_encode($data);
  } else if ($say==1){
    $data["status"]="success";
    $data["message"]="Giriş işlemi başarılı yönlendiriliyorsunuz.";
    echo JSON_encode($data);
    $_SESSION['kullanici_mail']=$kadi;
  }else {
    $data["status"]="error";
    $data["message"]="Kullanıcı adı veya şifre hatalı";
    echo JSON_encode($data);
  }
}

if (isset($_POST['filmekle'])) {
  if($_SESSION['kullanici_mail']){
	$seolink=seo($_POST['film_isim']);
  $uploads_dir = '../../images';
		@$tmp_name = $_FILES['film_resim']["tmp_name"];
		@$name = $_FILES['film_resim']["name"];
		$benzersizsayi4=uniqid();
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");
	$ayarekle=$db->prepare("INSERT INTO film_icerik SET
		film_isim=:film_isim,
		film_imdb=:film_imdb,
		film_aciklama=:film_aciklama,
		film_yazar=:film_yazar,
		film_kategori=:film_kategori,
		film_keywords=:film_keywords,
		film_description=:film_description,
    film_yil=:film_yil,
		film_resim=:film_resim,
		film_oyuncu=:film_oyuncu,
		film_yonetmen=:film_yonetmen,
		film_seo_link=:film_seo_link,
		film_fragman=:film_fragman,
		film_link=:film_link,
    film_link1=:film_link1,
    film_link2=:film_link2,
    film_link3=:film_link3,
    film_link4=:film_link4,
    film_link5=:film_link5,
    film_link6=:film_link6,
    film_link7=:film_link7,
    film_link8=:film_link8,
    film_link9=:film_link9,
    film_slider=:film_slider
		");
	$insert=$ayarekle->execute(array(
		'film_isim' => $_POST['film_isim'],
		'film_imdb' => $_POST['film_imdb'],
		'film_aciklama' => $_POST['film_aciklama'],
		'film_yazar' => $_POST['film_yazar'],
		'film_kategori' => $_POST['film_kategori'],
		'film_keywords' => $_POST['film_keywords'],
		'film_description' => $_POST['film_description'],
    'film_yil' => $_POST['film_yil'],
		'film_resim' => $refimgyol,
		'film_oyuncu' => $_POST['film_oyuncu'],
    'film_yonetmen' => $_POST['film_yonetmen'],
		'film_seo_link' => $seolink,
		'film_fragman' => $_POST['film_fragman'],
		'film_link' => $_POST['film_link'],
		'film_link1' => $_POST['film_link1'],
    'film_link2' => $_POST['film_link2'],
		'film_link3' => $_POST['film_link3'],
    'film_link4' => $_POST['film_link4'],
		'film_link5' => $_POST['film_link5'],
    'film_link6' => $_POST['film_link6'],
		'film_link7' => $_POST['film_link7'],
    'film_link8' => $_POST['film_link8'],
		'film_link9' => $_POST['film_link9'],
    'film_slider' => $_POST['film_slider']
		));
	if ($insert) {
    header("Location: ../filmekle.php?durum=basarili");
	} else {
    header("Location: ../filmekle.php?durum=basarisiz");
	}
}
}

if (isset($_POST['filmduzenle'])) {
  if($_SESSION['kullanici_mail']){
  $film_id=$_POST['film_id'];
  $seolink=seo($_POST['film_isim']);
  $uploads_dir = '../../images';
		@$tmp_name = $_FILES['film_resim']["tmp_name"];
		@$name = $_FILES['film_resim']["name"];
		$benzersizsayi4=uniqid();
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");
	$filmduzenle=$db->prepare("UPDATE film_icerik SET
		film_isim=:film_isim,
		film_imdb=:film_imdb,
		film_aciklama=:film_aciklama,
		film_yazar=:film_yazar,
		film_kategori=:film_kategori,
		film_keywords=:film_keywords,
		film_description=:film_description,
    film_yil=:film_yil,
		film_resim=:film_resim,
		film_oyuncu=:film_oyuncu,
		film_yonetmen=:film_yonetmen,
		film_seo_link=:film_seo_link,
		film_fragman=:film_fragman,
		film_link=:film_link,
    film_link1=:film_link1,
    film_link2=:film_link2,
    film_link3=:film_link3,
    film_link4=:film_link4,
    film_link5=:film_link5,
    film_link6=:film_link6,
    film_link7=:film_link7,
    film_link8=:film_link8,
    film_link9=:film_link9,
    film_slider=:film_slider
    WHERE film_id=$film_id
		");
	$update=$filmduzenle->execute(array(
    'film_isim' => $_POST['film_isim'],
		'film_imdb' => $_POST['film_imdb'],
		'film_aciklama' => $_POST['film_aciklama'],
		'film_yazar' => $_POST['film_yazar'],
		'film_kategori' => $_POST['film_kategori'],
		'film_keywords' => $_POST['film_keywords'],
		'film_description' => $_POST['film_description'],
    'film_yil' => $_POST['film_yil'],
		'film_resim' => $refimgyol,
		'film_oyuncu' => $_POST['film_oyuncu'],
    'film_yonetmen' => $_POST['film_yonetmen'],
		'film_seo_link' => $seolink,
		'film_fragman' => $_POST['film_fragman'],
		'film_link' => $_POST['film_link'],
		'film_link1' => $_POST['film_link1'],
    'film_link2' => $_POST['film_link2'],
		'film_link3' => $_POST['film_link3'],
    'film_link4' => $_POST['film_link4'],
		'film_link5' => $_POST['film_link5'],
    'film_link6' => $_POST['film_link6'],
		'film_link7' => $_POST['film_link7'],
    'film_link8' => $_POST['film_link8'],
		'film_link9' => $_POST['film_link9'],
    'film_slider' => $_POST['film_slider']
		));
	if ($update) {
    header("Location: ../filmduzenle.php?durum=basarili&film_id=$film_id");
	} else {
    header("Location: ../filmduzenle.php?durum=basarisiz&film_id=$film_id");
	}
}
}

if (isset($_POST['ayarlariguncelle'])) {
  if($_SESSION['kullanici_mail']){
  $film_id=$_POST['ayar_id'];
  $uploads_dir = '../../images';
		@$tmp_name = $_FILES['site_logo']["tmp_name"];
		@$name = $_FILES['site_logo']["name"];
		$benzersizsayi4=uniqid();
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");
	$filmduzenle=$db->prepare("UPDATE ayarlar SET
		site_baslik=:site_baslik,
		site_url=:site_url,
		site_aciklama=:site_aciklama,
		site_yazar=:site_yazar,
		site_keywords=:site_keywords,
		site_description=:site_description,
    site_eposta=:site_eposta,
		site_logo=:site_logo,
		site_analytics=:site_analytics
    WHERE ayar_id=1
		");
	$update=$filmduzenle->execute(array(
    'site_baslik' => $_POST['site_baslik'],
		'site_url' => $_POST['site_url'],
		'site_aciklama' => $_POST['site_aciklama'],
		'site_yazar' => $_POST['site_yazar'],
		'site_keywords' => $_POST['site_keywords'],
		'site_description' => $_POST['site_description'],
		'site_eposta' => $_POST['site_eposta'],
    'site_analytics' => $_POST['site_analytics'],
		'site_logo' => $refimgyol
		));
	if ($update) {
    header("Location: ../ayarlar.php?durum=basarili");
	} else {
    header("Location: ../ayarlar.php?durum=basarisiz");
	}
}
}

if (@$_GET['filmsil']=="ok") {
 if($_SESSION['kullanici_mail']){
	$sil=$db->prepare("DELETE from film_icerik where film_id=:film_id");
	$kontrol=$sil->execute(array(
		'film_id' => $_GET['film_id']
		));
	}else {
		header("location: ".$_SERVER['HTTP_REFERER']."");
	}

	if ($kontrol) {
		header("location:../filmler.php?sil=basarili");
	} else {
		header("location:../filmler.php?sil=basarisiz");
	}
}

if (@$_GET['kategorisil']=="ok") {
 if($_SESSION['kullanici_mail']){
	$sil=$db->prepare("DELETE from kategori where kategori_id=:kategori_id");
	$kontrol=$sil->execute(array(
		'kategori_id' => $_GET['kategori_id']
		));
	}else {
		header("location: ".$_SERVER['HTTP_REFERER']."");
	}

	if ($kontrol) {
		header("location:../kategoriler.php?sil=basarili");
	} else {
		header("location:../kategoriler.php?sil=basarisiz");
	}
}

if (@$_GET['yorumsil']=="ok") {
 if($_SESSION['kullanici_mail']){
	$sil=$db->prepare("DELETE from yorum where yorum_id=:yorum_id");
	$kontrol=$sil->execute(array(
		'yorum_id' => $_GET['yorum_id']
		));
	}else {
		header("location: ".$_SERVER['HTTP_REFERER']."");
	}

	if ($kontrol) {
		header("location:../yorumlar.php?sil=basarili");
	} else {
		header("location:../yorumlar.php?sil=basarisiz");
	}
}

if (isset($_POST['kategoriduzenle'])) {
  if($_SESSION['kullanici_mail']){
    $kategori_id=$_POST['kategori_id'];
    $seolink=seo($_POST['kategori_isim']);
    $filmduzenle=$db->prepare("UPDATE kategori SET
      kategori_isim=:kategori_isim,
      kategori_seo_link=:kategori_seo_link
      WHERE kategori_id=$kategori_id
      ");
    $update=$filmduzenle->execute(array(
      'kategori_isim' => $_POST['kategori_isim'],
      'kategori_seo_link' => $seolink
      ));
    if ($update) {
      header("Location: ../kategoriekle.php?durum=basarili&kategori_id=$kategori_id");
    } else {
      header("Location: ../kategoriekle.php?durum=basarisiz&kategori_id=$kategori_id");
    }
  }
}

if (isset($_POST['kategoriekle'])) {
  if($_SESSION['kullanici_mail']){
    $seolink=seo($_POST['kategori_isim']);
    $filmduzenle=$db->prepare("INSERT INTO kategori SET
      kategori_isim=:kategori_isim,
      kategori_seo_link=:kategori_seo_link
      ");
    $update=$filmduzenle->execute(array(
      'kategori_isim' => $_POST['kategori_isim'],
      'kategori_seo_link' => $seolink
      ));
    if ($update) {
      header("Location: ../kategoriekle.php?durum=basarili");
    } else {
      header("Location: ../kategoriekle.php?durum=basarisiz");
    }
  }
}
if (isset($_POST['yorumgonder'])) {
	$ayarekle=$db->prepare("INSERT INTO yorum SET
		yorum_isim=:yorum_isim,
		yorum_icerik=:yorum_icerik,
		yorum_eposta=:yorum_eposta,
    yorum_tarih=:yorum_tarih,
		film_id=:film_id
		");
	$insert=$ayarekle->execute(array(
		'yorum_isim' => strip_tags($_POST['yorum_isim']),
		'yorum_icerik' => strip_tags($_POST['yorum_icerik']),
		'yorum_eposta' => strip_tags($_POST['yorum_eposta']),
    'yorum_tarih' => strip_tags($_POST['yorum_tarih']),
		'film_id' => strip_tags($_POST['film_id'])
		));
	if ($insert) {
		 header("location: ".$_SERVER['HTTP_REFERER']."");
	} else {
		 header("location: ".$_SERVER['HTTP_REFERER']."");
	}
}

 ?>
