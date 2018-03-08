<?php
$site = file_get_contents("http://www.baglanfilmizle1.com/diverge-2016.html/");
//imdb puanı
preg_match_all('@<span class="imdb-rating">(.*?)</span>@si' , $site , $cikti);
//aciklama
preg_match_all('@<div class="excerpt more line-hide">(.*?)</div>@si' , $site , $cikti2);
//$oyuncular
preg_match_all('@<div class="actor">(.*?)</div>@si' , $site , $cikti3);
//Yönetmen
preg_match_all('@<div class="director">(.*?)</div>@si' , $site , $cikti4);
//sayfanın başlığı
preg_match_all('@<div class="title">(.*?)</div>@si' , $site , $cikti5);
// film link 1
preg_match_all('@<p>(.*?)</p>@si' , $site , $cikti6);
// film link 2
$site2 = file_get_contents("http://www.baglanfilmizle1.com/diverge-2016.html/2");
preg_match_all('@<p>(.*?)</p>@si' , $site2 , $cikti7);
// film link 3
$site3 = file_get_contents("http://www.baglanfilmizle1.com/diverge-2016.html/3");
preg_match_all('@<p>(.*?)</p>@si' , $site3 , $cikti8);
// film link 4
$site4 = file_get_contents("http://www.baglanfilmizle1.com/diverge-2016.html/4");
preg_match_all('@<p>(.*?)</p>@si' , $site4 , $cikti9);
// film link 5
$site5 = file_get_contents("http://www.baglanfilmizle1.com/diverge-2016.html/5");
preg_match_all('@<p>(.*?)</p>@si' , $site5 , $cikti10);
// film link 6
$site6 = file_get_contents("http://www.baglanfilmizle1.com/diverge-2016.html/6");
preg_match_all('@<p>(.*?)</p>@si' , $site6 , $cikti11);
// film link 7
$site7 = file_get_contents("http://www.baglanfilmizle1.com/diverge-2016.html/7");
preg_match_all('@<p>(.*?)</p>@si' , $site7 , $cikti12);
// film link 8
$site8 = file_get_contents("http://www.baglanfilmizle1.com/diverge-2016.html/8");
preg_match_all('@<p>(.*?)</p>@si' , $site8 , $cikti13);
?>
<?php
    /*
    //kategori
    preg_match_all('@<div class="categories">(.*?)</div>@si' , $site , $cikti1);
    echo strip_tags($cikti1[1][0]);
    // kaynak 1
    $parcala = explode(" ",$cikti[1][1]);
    $parcala2 = explode("src=",$parcala[3]);
    $parcala3 = explode("&quot;",htmlspecialchars($parcala2[1]));
    echo $parcala3[1];
    // kaynak 2
    $parcala = explode(" ",$cikti[1][1]);
    $parcala2 = explode("src=",$parcala[1]);
    $parcala3 = explode("&quot;",htmlspecialchars($parcala2[1]));
    echo $parcala3[1];
    //kaynak 3
    $parcala = explode(" ",$cikti[1][1]);
    $parcala2 = explode("SRC=",$parcala[1]);
    $parcala3 = explode("&quot;",htmlspecialchars($parcala2[1]));
    echo $parcala3[1];
    //kaynak 4
    $parcala = explode(" ",$cikti[1][1]);
    $parcala2 = explode("src=",$parcala[1]);
    $parcala3 = explode("&quot;",htmlspecialchars($parcala2[1]));
    echo $parcala3[1];
    // kaynak 5
    $parcala = explode(" ",$cikti[1][1]);
    $parcala2 = explode("src=",$parcala[3]);
    $parcala3 = explode("&quot;",htmlspecialchars($parcala2[1]));
    echo $parcala3[1];
    // kaynak 6
    $parcala = explode(" ",$cikti[1][1]);
    $parcala2 = explode("src=",$parcala[3]);
    $parcala3 = explode("&quot;",htmlspecialchars($parcala2[1]));
    echo $parcala3[1];
    // kaynak 7
    $parcala = explode(" ",$cikti[1][1]);
    $parcala2 = explode("src=",$parcala[1]);
    $parcala3 = explode("'",htmlspecialchars($parcala2[1]));
    echo $parcala3[1];
    // kaynak 8
    $parcala = explode(" ",$cikti[1][1]);
    $parcala2 = explode("src=",$parcala[3]);
    $parcala3 = explode("&quot;",htmlspecialchars($parcala2[1]));
    echo $parcala3[1];
*/
 ?>
<?php
	include 'header.php';
 ?>
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<?php
                      if (@$_GET['durum']=="basarili") {?>
												<div class="alert alert-success alert-dismissible" role="alert">
													<i class="fa fa-check-circle"></i> Film Başarılı bir şekilde eklendi.
											</div>
										<?php } elseif (@$_GET['durum']=="basarisiz") {?>
											<div class="alert alert-danger alert-dismissible" role="alert">
												<i class="fa fa-times-circle"></i> Film eklenemedi.
											</div>
                      <?php }
                      ?>
					<h3 class="page-title">Film Botu</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- INPUTS -->
							<div class="panel">
								<div class="panel-heading">
								</div>
								<div class="panel-body">
									<form enctype="multipart/form-data" method="POST" action="islem/islem.php" >
										<label for="">Film İsmi</label>
										<input type="text" class="form-control"  name="film_isim" value="<?php echo strip_tags($cikti5[1][0]); ?>">
										<label for="">Film Açıklama</label>
										<textarea class="form-control"rows="4" name="film_aciklama"><?php echo strip_tags($cikti2[1][0]); ?></textarea>
										<label for="">Film Yıl</label>
										<input type="text" class="form-control"  name="film_yil">
										<label for="">Film IMDB</label>
										<input type="text" class="form-control"  name="film_imdb" value="<?php echo substr(strip_tags($cikti[1][0]),0,3); ?>">
										<label for="">Film Oyuncular</label>
										<input type="text" class="form-control"  name="film_oyuncu" value="<?php echo substr(strip_tags($cikti3[1][0]),10,300); ?>">
										<label for="">Film Yönetmen</label>
										<input type="text" class="form-control"  name="film_yonetmen" value="<?php echo substr(strip_tags($cikti4[1][0]),10,300); ?>">
										<label for="">Film Resim</label>
										<input type="file" class="form-control"  name="film_resim">
										<label for="">Film Keywords</label>
										<input type="text" class="form-control"  name="film_keywords" value="">
										<label for="">Film Description</label>
										<input type="text" class="form-control"  name="film_description" value="<?php echo strip_tags($cikti2[1][0]); ?>">
										<label for="">Film Slidera Eklensin mi?</label><br>
										<select class="form-control" name="film_slider">
											<option value="0">Eklenmesin</option>
											<option value="1">Eklensin</option>
										</select>
										<label for="">Film Fragman</label>
										<input type="text" class="form-control"  name="film_fragman">
										<label for="">Film Link (İframe kodları ile birlikte yazın)</label>
										<input type="text" class="form-control"  name="film_link">
										<label for="">Film Link1 (İframe kodları ile birlikte yazın)</label>
										<input type="text" class="form-control"  name="film_link1" value="<?php echo $cikti6[1][1]; ?>">
										<label for="">Film Link2 (İframe kodları ile birlikte yazın)</label>
										<input type="text" class="form-control"  name="film_link2" value="<?php echo $cikti7[1][1]; ?>">
										<label for="">Film Link3 (İframe kodları ile birlikte yazın)</label>
										<input type="text" class="form-control"  name="film_link3" value="<?php echo $cikti8[1][1]; ?>">
										<label for="">Film Link4 (İframe kodları ile birlikte yazın)</label>
										<input type="text" class="form-control"  name="film_link4" value="<?php echo $cikti9[1][1]; ?>">
										<label for="">Film Link5 (İframe kodları ile birlikte yazın)</label>
										<input type="text" class="form-control"  name="film_link5" value="<?php echo $cikti10[1][1]; ?>">
										<label for="">Film Link6 (İframe kodları ile birlikte yazın)</label>
										<input type="text" class="form-control"  name="film_link6" value="<?php echo $cikti11[1][1]; ?>">
										<label for="">Film Link7 (İframe kodları ile birlikte yazın)</label>
										<input type="text" class="form-control"  name="film_link7" value="<?php echo $cikti12[1][1]; ?>">
										<label for="">Film Link8 (İframe kodları ile birlikte yazın)</label>
										<input type="text" class="form-control"  name="film_link8" value="<?php echo $cikti13[1][1]; ?>">
										<label for="">Film Kategori</label>
											<?php
                          $kategorisor=$db->prepare("SELECT * from kategori");
                          $kategorisor->execute(array());
                            ?>
                            <select class="form-control" name="film_kategori">
                             <?php
                             while($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) {
                             $kategori_id=$kategoricek['kategori_isim'];
                               ?>
                               <option  value="<?php echo $kategoricek['kategori_isim']; ?>"><?php echo $kategoricek['kategori_isim']; ?></option>
                               <?php } ?>
										</select><br>
										<button name="filmekle" type="submit" class="btn btn-primary">Film Ekle</button>
									</form>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>
