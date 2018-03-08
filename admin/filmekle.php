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
					<h3 class="page-title">Film Ekle</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- INPUTS -->
							<div class="panel">
								<div class="panel-heading">
								</div>
								<div class="panel-body">
									<form enctype="multipart/form-data" method="POST" action="islem/islem.php" >
										<label for="">Film İsmi</label>
										<input type="text" class="form-control"  name="film_isim">
										<label for="">Film Açıklama</label>
										<textarea class="form-control"rows="4" name="film_aciklama"></textarea>
										<label for="">Film Yıl</label>
										<input type="text" class="form-control"  name="film_yil">
										<label for="">Film IMDB</label>
										<input type="text" class="form-control"  name="film_imdb">
										<label for="">Film Oyuncular</label>
										<input type="text" class="form-control"  name="film_oyuncu">
										<label for="">Film Yönetmen</label>
										<input type="text" class="form-control"  name="film_yonetmen">
										<label for="">Film Yazar</label>
										<input type="text" class="form-control"  name="film_yazar">
										<label for="">Film Resim</label>
										<input type="file" class="form-control"  name="film_resim">
										<label for="">Film Keywords</label>
										<input type="text" class="form-control"  name="film_keywords">
										<label for="">Film Description</label>
										<input type="text" class="form-control"  name="film_description">
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
										<input type="text" class="form-control"  name="film_link1">
										<label for="">Film Link2 (İframe kodları ile birlikte yazın)</label>
										<input type="text" class="form-control"  name="film_link2">
										<label for="">Film Link3 (İframe kodları ile birlikte yazın)</label>
										<input type="text" class="form-control"  name="film_link3">
										<label for="">Film Link4 (İframe kodları ile birlikte yazın)</label>
										<input type="text" class="form-control"  name="film_link4">
										<label for="">Film Link5 (İframe kodları ile birlikte yazın)</label>
										<input type="text" class="form-control"  name="film_link5">
										<label for="">Film Link6 (İframe kodları ile birlikte yazın)</label>
										<input type="text" class="form-control"  name="film_link6">
										<label for="">Film Link7 (İframe kodları ile birlikte yazın)</label>
										<input type="text" class="form-control"  name="film_link7">
										<label for="">Film Link8 (İframe kodları ile birlikte yazın)</label>
										<input type="text" class="form-control"  name="film_link8">
										<label for="">Film Link9 (İframe kodları ile birlikte yazın)</label>
										<input type="text" class="form-control"  name="film_link9">
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
