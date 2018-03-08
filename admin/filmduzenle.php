<?php
	include 'header.php';
	$film=$db->prepare("SELECT * FROM film_icerik where film_id=:film_id");
	$film->execute(array(
	  'film_id' => $_GET['film_id']
	  ));
	$film_getir=$film->fetch(PDO::FETCH_ASSOC);
	if (empty($_GET['film_id'])) {
		header("Location:anasayfa.php");
	}
 ?>
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<?php
                      if (@$_GET['durum']=="basarili") {?>
												<div class="alert alert-success alert-dismissible" role="alert">
													<i class="fa fa-check-circle"></i> Film Başarılı bir şekilde düzenlendi.
											</div>
										<?php } elseif (@$_GET['durum']=="basarisiz") {?>
											<div class="alert alert-danger alert-dismissible" role="alert">
												<i class="fa fa-times-circle"></i> Film düzenlenirken hata oluştu.
											</div>
                      <?php }
                      ?>
					<h3 class="page-title">Film Düzenle</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- INPUTS -->
							<div class="panel">
								<div class="panel-heading">
								</div>
								<div class="panel-body">
									<form enctype="multipart/form-data" method="POST" action="islem/islem.php" >
										<label for="">Film İsmi</label>
										<input type="text" class="form-control"  name="film_isim" value="<?php echo $film_getir['film_isim'] ?>">
										<label for="">Film Açıklama</label>
										<textarea class="form-control" rows="4" name="film_aciklama"><?php echo $film_getir['film_aciklama'] ?></textarea>
										<label for="">Film Yıl</label>
										<input type="text" class="form-control"  name="film_yil" value="<?php echo $film_getir['film_yil'] ?>">
										<label for="">Film IMDB</label>
										<input type="text" class="form-control"  name="film_imdb" value="<?php echo $film_getir['film_imdb'] ?>">
										<label for="">Film Oyuncular</label>
										<input type="text" class="form-control"  name="film_oyuncu" value="<?php echo $film_getir['film_oyuncu'] ?>">
										<label for="">Film Yönetmen</label>
										<input type="text" class="form-control"  name="film_yonetmen" value="<?php echo $film_getir['film_yonetmen'] ?>">
										<label for="">Film Yazar</label>
										<input type="text" class="form-control"  name="film_yazar" value="<?php echo $film_getir['film_yazar'] ?>">
										<label for="">Yüklü Resim</label><br>
										<img src="../<?php echo $film_getir['film_resim'] ?>" height="200" alt=""><br>
										<label for="">Film Resim</label>
										<input type="file" class="form-control"  name="film_resim">
										<label for="">Film Keywords</label>
										<input type="text" class="form-control"  name="film_keywords" value="<?php echo $film_getir['film_keywords'] ?>">
										<label for="">Film Slidera Eklensin mi?</label><br>
										<select class="form-control" name="film_slider">
											<option value="1" <?php echo $film_getir['film_slider'] == '1' ? 'selected=""' : ''; ?>>Eklensin</option>
                      <option value="0" <?php if ($film_getir['film_slider']==0) { echo 'selected=""'; } ?>>Eklenmesin</option>
										</select>
										<label for="">Film Description</label>
										<input type="text" class="form-control"  name="film_description" value="<?php echo $film_getir['film_description'] ?>">
										<label for="">Film Fragman</label>
										<input type="text" class="form-control"  name="film_fragman" value="<?php echo $film_getir['film_fragman'] ?>">
										<label for="">Film Link (İframe kodları ile birlikte yazın)</label>
										<input type="text" class="form-control"  name="film_link" value="<?php echo $film_getir['film_link'] ?>">
										<label for="">Film Link1 (İframe kodları ile birlikte yazın)</label>
										<input type="text" class="form-control"  name="film_link1" value="<?php echo $film_getir['film_link1'] ?>">
										<label for="">Film Link2 (İframe kodları ile birlikte yazın)</label>
										<input type="text" class="form-control"  name="film_link2" value="<?php echo $film_getir['film_link2'] ?>">
										<label for="">Film Link3 (İframe kodları ile birlikte yazın)</label>
										<input type="text" class="form-control"  name="film_link3" value="<?php echo $film_getir['film_link3'] ?>">
										<label for="">Film Link4 (İframe kodları ile birlikte yazın)</label>
										<input type="text" class="form-control"  name="film_link4" value="<?php echo $film_getir['film_link4'] ?>">
										<label for="">Film Link5 (İframe kodları ile birlikte yazın)</label>
										<input type="text" class="form-control"  name="film_link5" value="<?php echo $film_getir['film_link5'] ?>">
										<label for="">Film Link6 (İframe kodları ile birlikte yazın)</label>
										<input type="text" class="form-control"  name="film_link6" value="<?php echo $film_getir['film_link6'] ?>">
										<label for="">Film Link7 (İframe kodları ile birlikte yazın)</label>
										<input type="text" class="form-control"  name="film_link7" value="<?php echo $film_getir['film_link7'] ?>">
										<label for="">Film Link8 (İframe kodları ile birlikte yazın)</label>
										<input type="text" class="form-control"  name="film_link8" value="<?php echo $film_getir['film_link8'] ?>">
										<label for="">Film Link9 (İframe kodları ile birlikte yazın)</label>
										<input type="text" class="form-control"  name="film_link9" value="<?php echo $film_getir['film_link9'] ?>">
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
										<input type="hidden" class="form-control"  name="film_id" value="<?php echo $film_getir['film_id'] ?>">
										<button name="filmduzenle" type="submit" class="btn btn-primary">Filmi Duzenle</button>
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
