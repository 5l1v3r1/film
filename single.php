<?php define("guvenlik",true); include 'header.php';
$filmsor=$db->prepare("SELECT * FROM film_icerik where film_id=:film_id");
$filmsor->execute(array(
	'film_id' => $_GET['film_id']
	));
  $hit=$db->prepare("UPDATE film_icerik set film_izlenme=film_izlenme+1 where film_id=:film_id ");
  $hit->execute(array(
    'film_id' => $_GET['film_id']
  ));
$filmcek=$filmsor->fetch(PDO::FETCH_ASSOC);
$tariha = date("Y-m-d");
if (empty($filmcek['film_isim'])) {
header("location: index.php ");
}
?>
    <div class="container">
      <div class="row">
          <div class="col-lg-4 col-sm-12">
            <div class="resim mt-5">
              <img src="<?php echo $filmcek['film_resim'] ?>" class="img-fluid" alt="">
              <p class="mt-2"><?php echo $filmcek['film_aciklama'] ?></p>
            </div>
          </div>
          <div class="col-lg-7 col-sm-12 mt-5">
            <div class="film_izle">
              <h1><?php echo $filmcek['film_isim'] ?> <small><?php echo $filmcek['film_yil'] ?></small></h1><span class="izlenme"><?php echo $filmcek['film_izlenme'] ?> İzlenme</span><br><p class="yildiz"><i class="fa fa-star" style="color:#f5b50a !important;"aria-hidden="true"></i> <small><?php echo $filmcek['film_imdb'] ?>/10</small></p>
            </div>
          <div class="izle mt-2">
              <div class="row">
                <div class="col-lg-7 col-sm-12">
                    <ul class="part">
                      <li><a href="#" data-bas="bas1">Fragman</a></li>
                      <?php if (!empty($filmcek['film_link'])) {
                          echo '  <li><a href="#" data-bas="bas2">Kaynak 1</a></li>';
                      } ?>
                      <?php if (!empty($filmcek['film_link1'])) {
                          echo '  <li><a href="#" data-bas="bas3">Kaynak 2</a></li>';
                      } ?>
                      <?php if (!empty($filmcek['film_link2'])) {
                          echo '  <li><a href="#" data-bas="bas4">Kaynak 3</a></li>';
                      } ?>
                      <?php if (!empty($filmcek['film_link3'])) {
                          echo '  <li><a href="#" data-bas="bas5">Kaynak 4</a></li>';
                      } ?>
                      <?php if (!empty($filmcek['film_link4'])) {
                          echo '  <li><a href="#" data-bas="bas6">Kaynak 5</a></li>';
                      } ?>
                      <?php if (!empty($filmcek['film_link5'])) {
                          echo '  <li><a href="#" data-bas="bas7">Kaynak 6</a></li>';
                      } ?>
                      <?php if (!empty($filmcek['film_link6'])) {
                          echo '  <li><a href="#" data-bas="bas8">Kaynak 7</a></li>';
                      } ?>
                      <?php if (!empty($filmcek['film_link7'])) {
                          echo '  <li><a href="#" data-bas="bas9">Kaynak 8</a></li>';
                      } ?>
                      <?php if (!empty($filmcek['film_link8'])) {
                          echo '  <li><a href="#" data-bas="bas10">Kaynak 9</a></li>';
                      } ?>
                      <?php if (!empty($filmcek['film_link9'])) {
                          echo '  <li><a href="#" data-bas="bas11">Kaynak 10</a></li>';
                      } ?>
                    </ul>
                    <div class="izle2 mb-4 db" id="bas1">
                      <?php echo $filmcek['film_fragman'] ?>
                    </div>
                    <?php if (!empty($filmcek['film_link'])) {
                        echo ' <div class="izle2 mb-4" id="bas2">';
                        echo $filmcek['film_link'];
                        echo  '</div>';
                    } ?>
                    <?php if (!empty($filmcek['film_link1'])) {
                        echo ' <div class="izle2 mb-4" id="bas3">';
                        echo $filmcek['film_link1'];
                        echo  '</div>';
                    } ?>
                    <?php if (!empty($filmcek['film_link2'])) {
                        echo ' <div class="izle2 mb-4" id="bas4">';
                        echo $filmcek['film_link2'];
                        echo  '</div>';
                    } ?>
                    <?php if (!empty($filmcek['film_link3'])) {
                        echo ' <div class="izle2 mb-4" id="bas5">';
                        echo $filmcek['film_link3'];
                        echo  '</div>';
                    } ?>
                    <?php if (!empty($filmcek['film_link4'])) {
                        echo ' <div class="izle2 mb-4" id="bas6">';
                        echo $filmcek['film_link4'];
                        echo  '</div>';
                    } ?>
                    <?php if (!empty($filmcek['film_link5'])) {
                        echo ' <div class="izle2 mb-4" id="bas7">';
                        echo $filmcek['film_link5'];
                        echo  '</div>';
                    } ?>
                    <?php if (!empty($filmcek['film_link6'])) {
                        echo ' <div class="izle2 mb-4" id="bas8">';
                        echo $filmcek['film_link6'];
                        echo  '</div>';
                    } ?>
                    <?php if (!empty($filmcek['film_link7'])) {
                        echo ' <div class="izle2 mb-4" id="bas9">';
                        echo $filmcek['film_link7'];
                        echo  '</div>';
                    } ?>
                    <?php if (!empty($filmcek['film_link8'])) {
                        echo ' <div class="izle2 mb-4" id="bas10">';
                        echo $filmcek['film_link8'];
                        echo  '</div>';
                    } ?>
                    <?php if (!empty($filmcek['film_link9'])) {
                        echo ' <div class="izle2 mb-4" id="bas11">';
                        echo $filmcek['film_link9'];
                        echo  '</div>';
                    } ?>
                    <br>
                    <div class="yorum mt-5">
                      <div class="yorum_yaz">
                        <div class="card card-outline-secondary aramabotu yorumgonder mt-3">
                                    <div class="card-block">
                                        <form class="form" action="admin/islem/islem.php" method="POST">
                                            <div class="form-group">
                                                <label for="inputPasswordOld">Adınız ve Soyadınız:</label>
                                                <input type="text" class="form-control" name="yorum_isim" required="" placeholder="Adınız ve Soyadınızı Giriniz..">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPasswordOld">E-Posta Adresiniz:</label>
                                                <input type="text" class="form-control" name="yorum_eposta" required="" placeholder="E-Posta Adresinizi Giriniz..">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPasswordOld">Yorumunuzu Yazınız:</label>
                                                <textarea name="yorum_icerik" class="form-control" rows="6" placeholder="Yorumunuzu Yazınız.."></textarea>
                                            </div>
                                            <input type="hidden" class="form-control" required="" name="film_id" value="<?php echo $filmcek['film_id'] ?>">
                                            <input type="hidden" name="yorum_tarih" value="<?php echo $tariha ?>">
                                            <div class="form-group">
                                                <button type="submit" name="yorumgonder" class="btn btn-success btn-lg submit">Yorumu Gönder</button>
                                            </div>
                                        </form>
                                    </div>
                            </div>
                      </div>
                      <?php
                      $yorumsor=$db->prepare("SELECT * FROM yorum where film_id=:film_id ORDER BY yorum_tarih=:yorum_tarih DESC");
												$yorumsor->execute(array(
												'film_id' => $_GET['film_id'],
												'yorum_tarih' => 'yorum_tarih'
										     ));
						          while($yorumcek=$yorumsor->fetch(PDO::FETCH_ASSOC)) {
                       ?>
                      <div class="yorumm">
                        <div class="ust mt-3">
                          <img src="images/yorum.png" alt="" width="40" height="40">
                            <h3><?php echo $yorumcek['yorum_isim'] ?> <small><?php echo $yorumcek['yorum_tarih'] ?></small></h3>
                        </div>
                        <div class="alt">
                          <p><?php echo $yorumcek['yorum_icerik'] ?></p>
                        </div>
                      </div>
                       <?php } ?>
                      </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="film_bilgi">
                      <h6>Yönetmen:</h6>
                      <p><?php echo $filmcek['film_yonetmen'] ?></p>
                    </div>
                    <div class="film_bilgi">
                      <h6>Yazar:</h6>
                      <p><?php echo $filmcek['film_yazar'] ?></p>
                    </div>
                    <div class="film_bilgi">
                      <h6>Oyuncular:</h6>
                      <p><?php echo $filmcek['film_oyuncu'] ?></p>
                    </div>
                    <div class="film_bilgi">
                      <h6>Kategori:</h6>
                      <p><?php echo $filmcek['film_kategori'] ?></p>
                    </div>
                    <div class="film_bilgi">
                      <h6>Yıl:</h6>
                      <p><?php echo $filmcek['film_yil'] ?></p>
                    </div>
                </div>
              </div>
          </div>
          </div>
      </div>

    </div>
        <footer class="container" style="margin-top:20%;"><p>Sitemiz 5651 sayılı yasada tanımlanan yer sağlayıcı olarak hizmet vermektedir. İlgili yasaya göre, site yönetiminin hukuka aykırı içerikleri kontrol etme yükümlülüğü yoktur. Bu sebeple, sitemiz uyar ve kaldır prensibini benimsemiştir. Telif hakkına konu olan eserlerin yasal olmayan bir biçimde paylaşıldığını ve yasal haklarının çiğnendiğini düşünen hak sahipleri veya meslek birlikleri, hukuksal bölümünden bize ulaşabilirler. Buraya ulaşan talep ve şikayetler hukuksal olarak incelenecek, şikayet yerinde görüldüğü takdirde, ihlal olduğu düşünülen içerikler sitemizden kaldırılacaktır. ( If there's a content which disturbs you and whose rights belong to you, please contact with us. We will remove it within 3 days.) </p>
          <p align="center" style="color:#abb7c4;">Copyright © 2018 snrtr.com </p>
        </footer>
				<script src="js/jquery-3.2.1.slim.min.js"></script>
		    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/style.js"></script>
  </body>
</html>
