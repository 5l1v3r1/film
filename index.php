<?php define("guvenlik",true); include 'header.php'; ?>
    <div class="container mt-5 mb-5">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel mb-5">
            <?php
            $slidersor=$db->prepare("SELECT * FROM film_icerik WHERE film_slider=:film_slider ORDER BY film_id DESC ");
            $slidersor->execute(array(
              'film_slider' => 1
            ));
            while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) {
             ?>
            <div class="slider"><a href="<?php echo seo($slidercek['film_isim']).'-'.$slidercek['film_id']?>"> <img src="<?php echo $slidercek['film_resim'] ?>" width="250" height="340" alt="slider"></a><div class="slidergit"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div></div>
            <?php } ?>
          </div>
        </div>
    </div>
    <div class="container top-bar">
      <div class="row">
        <div class="col-lg-8 col-sm-12">
          <div class="baslik">
            <h1>Son Eklenen Filmler</h1>
          </div>

          <div class="sırala mt-4">
            <?php
            $Sayfa   = @intval($_GET['sayfa']); if(!$Sayfa) $Sayfa = 1;
            $Limit	= 12;
            $Goster   = $Sayfa * $Limit - $Limit;
            $yazisor=$db->prepare("SELECT * FROM film_icerik ORDER BY film_id DESC LIMIT $Goster,$Limit");
            $yazisor->execute(array());
            $satir_sayisi = $db->query("SELECT * FROM film_icerik WHERE 1")->rowCount();
            while($yazicek=$yazisor->fetch(PDO::FETCH_ASSOC)) {
            $yazi=$yazicek['film_isim'];
             ?>
          <div class="film film1">
            <img src="<?php echo $yazicek['film_resim'] ?>" alt="film" width="170" height="261">
            <div class="film_git">
	            				<a href="<?php echo seo($yazicek['film_isim']).'-'.$yazicek['film_id']?>">Filmi İzle</a>
	           </div>
            <div class="film_aciklama">
								<h6><a href="<?php echo seo($yazicek['film_isim']).'-'.$yazicek['film_id']?>"><?php echo $yazicek['film_isim'] ?></a></h6>
								<p class="yildiz"><i class="fa fa-star" aria-hidden="true"></i> <span><?php echo $yazicek['film_imdb'] ?></span><span>/10</span></p>
							</div>
          </div>
            <?php } ?>
        </div>
        <nav aria-label="Page navigation example ">
          <?php
          $a = ceil($satir_sayisi/12);
          echo '<ul class="pagination justify-content-center mb-5">';
          ?>
           <?php if($Sayfa > 1){?>
            <li class="page-item">
              <a class="page-link" href="index.php?sayfa=<?=$Sayfa - 1?>" tabindex="-1">Önceki</a>
            </li>
            <?php } ?>
            <?php
            for($b = 1 ; $b <= $a ; $b++){
            echo '<li class="page-item"><a class="page-link" href="index.php?sayfa='. $b . ' ">'. $b . '</a></li>';
            }
            ?>
            <li class="page-item">
              <a class="page-link" href="index.php?sayfa=<?=$Sayfa + 1?>">Sonraki</a>
            </li>
            <?php
            if (empty($yazi)) {
            header("location: ".$_SERVER['HTTP_REFERER']."");
            }
            ?>
          </ul>
        </nav>
      </div>
      <div class="col-lg-3 col-sm-12 ml-auto">
        <div class="baslik">
          <h1>Film Robotu</h1>
        </div>
        <div class="row">
          <div class="card card-outline-secondary aramabotu mt-3">
                      <div class="card-block">
                          <form class="form" action="filmrobotu.php" method="post">
                              <div class="form-group">
                                  <label for="inputPasswordOld">Film İsmi</label>
                                  <input type="text" class="form-control" name="baslik" required="" placeholder="Film İsmini Giriniz..">
                              </div>
                              <div class="form-group">
                                  <label for="inputPasswordNew">Kategori</label>
                                  <select class="form-control" name="kategori" size="0">
                                    <?php
                                    $yazisor=$db->prepare("SELECT * FROM kategori ORDER BY kategori_id DESC");
                                    $yazisor->execute(array());
                                    while($kategoricek=$yazisor->fetch(PDO::FETCH_ASSOC)) {
                                     ?>
                                           <option value="<?php echo seo($kategoricek['kategori_isim']) ?>"><?php echo $kategoricek['kategori_isim'] ?></option>
                                    <?php } ?>
                                       </select>
                              </div>
                              <div class="form-group">
                                  <label for="inputPasswordNewVerify">Imdb Puan Aralığı</label>
                                  <select class="form-control" name="puan" size="0">
                                    <?php
                                    for ($i=9; $i >=1 ; $i--) { ?>
                                      <option value="<?php echo $i ?>"><?php echo $i ?> ve üzeri</option>
                                     <?php } ?>
                                       </select>
                              </div>
                              <div class="form-group mb-4">
                                  <label for="inputPasswordNew">Film Yılı</label>
                                  <select class="form-control" name="yil" size="0">
                                    <?php
                                    for ($i=2018; $i >=1990 ; $i--) { ?>
                                      <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                     <?php } ?>
                                       </select>
                              </div>
                              <div class="form-group">
                                  <button type="submit" class="btn btn-success btn-lg submit">Aramaya Başla</button>
                              </div>
                          </form>
                      </div>
              </div>
              <div class="card card-outline-secondary aramabotu" style="margin-top:-20px;">
                <div class="baslik">
                            <h1 class="mb-0">Kategoriler</h1>
                        </div>
                          <div class="card-block">
                              <ul class="kategori">
                                <?php
                                $yazisor=$db->prepare("SELECT * FROM kategori ORDER BY kategori_id DESC");
                                $yazisor->execute(array());
                                while($kategoricek=$yazisor->fetch(PDO::FETCH_ASSOC)) {
                                 ?>
                                <li><a href="kategori-<?php echo $kategoricek['kategori_isim'] ?>" style="border:0px;"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $kategoricek['kategori_isim'] ?></a></li>
                                <?php } ?>
                              </ul>
                          </div>
                  </div>
      </div>
      </div>
    </div>
    <footer><p>Sitemiz 5651 sayılı yasada tanımlanan yer sağlayıcı olarak hizmet vermektedir. İlgili yasaya göre, site yönetiminin hukuka aykırı içerikleri kontrol etme yükümlülüğü yoktur. Bu sebeple, sitemiz uyar ve kaldır prensibini benimsemiştir. Telif hakkına konu olan eserlerin yasal olmayan bir biçimde paylaşıldığını ve yasal haklarının çiğnendiğini düşünen hak sahipleri veya meslek birlikleri, hukuksal bölümünden bize ulaşabilirler. Buraya ulaşan talep ve şikayetler hukuksal olarak incelenecek, şikayet yerinde görüldüğü takdirde, ihlal olduğu düşünülen içerikler sitemizden kaldırılacaktır. ( If there's a content which disturbs you and whose rights belong to you, please contact with us. We will remove it within 3 days.) </p>
      <p align="center" style="color:#abb7c4;">Copyright © 2018 snrtr.com </p>
    </footer>
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/style.js"></script>
    <script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
        })
    </script>
  </body>
</html>
