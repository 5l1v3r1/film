<?php
	include 'header.php';
	$film=$db->prepare("SELECT * FROM ayarlar WHERE ayar_id=:ayar_id");
	$film->execute(array(
		'ayar_id' => 1
	));
	$film_getir=$film->fetch(PDO::FETCH_ASSOC);
 ?>
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<?php
                      if (@$_GET['durum']=="basarili") {?>
												<div class="alert alert-success alert-dismissible" role="alert">
													<i class="fa fa-check-circle"></i> Ayarlar Başarılı bir şekilde güncellendi.
											</div>
										<?php } elseif (@$_GET['durum']=="basarisiz") {?>
											<div class="alert alert-danger alert-dismissible" role="alert">
												<i class="fa fa-times-circle"></i> Ayarlar güncellenemedi.
											</div>
                      <?php }
                      ?>
					<h3 class="page-title">Site Ayarları</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- INPUTS -->
							<div class="panel">
								<div class="panel-heading">
								</div>
								<div class="panel-body">
									<form enctype="multipart/form-data" method="POST" action="islem/islem.php" >
										<label for="">Site Başlık</label>
										<input type="text" class="form-control"  name="site_baslik" value="<?php echo $film_getir['site_baslik'] ?>">
										<label for="">Site Adresi</label>
										<input type="text" class="form-control"  name="site_url" value="<?php echo $film_getir['site_url'] ?>">
										<label for="">Site Açıklama</label>
										<input type="text" class="form-control"  name="site_aciklama" value="<?php echo $film_getir['site_aciklama'] ?>">
										<label for="">Site E-posta</label>
										<input type="text" class="form-control"  name="site_eposta" value="<?php echo $film_getir['site_eposta'] ?>">
										<label for="">Site Yazar</label>
										<input type="text" class="form-control"  name="site_yazar" value="<?php echo $film_getir['site_yazar'] ?>">
										<label for="">Yüklü Resim</label><br>
										<img src="../<?php echo $film_getir['site_logo'] ?>" height="100" alt=""><br>
										<label for="">Logo</label>
										<input type="file" class="form-control"  name="site_logo">
										<label for="">Site Keywords</label>
										<input type="text" class="form-control"  name="site_keywords" value="<?php echo $film_getir['site_keywords'] ?>">
										<label for="">Site Analytics</label>
										<input type="text" class="form-control"  name="site_analytics" value="<?php echo $film_getir['site_analytics'] ?>">
										<label for="">Site description</label>
										<input type="text" class="form-control"  name="site_description" value="<?php echo $film_getir['site_description'] ?>"><br>
										<input type="hidden" class="form-control"  name="film_id" value="<?php echo $film_getir['ayar_id'] ?>">
										<button name="ayarlariguncelle" type="submit" class="btn btn-primary">Ayarları Güncelle</button>
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
