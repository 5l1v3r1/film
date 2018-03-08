<?php
	include 'header.php';
	$film=$db->prepare("SELECT * FROM kategori where kategori_id=:kategori_id");
	$film->execute(array(
		'kategori_id' => $_GET['kategori_id']
		));
	$film_getir=$film->fetch(PDO::FETCH_ASSOC);
	if (empty($_GET['kategori_id'])) {
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
													<i class="fa fa-check-circle"></i> Film Başarılı bir şekilde eklendi.
											</div>
										<?php } elseif (@$_GET['durum']=="basarisiz") {?>
											<div class="alert alert-danger alert-dismissible" role="alert">
												<i class="fa fa-times-circle"></i> Film eklenemedi.
											</div>
                      <?php }
                      ?>
					<h3 class="page-title">Kategori Düzenle</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- INPUTS -->
							<div class="panel">
								<div class="panel-heading">
								</div>
								<div class="panel-body">
									<form method="POST" action="islem/islem.php" >
										<label for="">Kategori İsmi</label>
										<input type="text" class="form-control"  name="kategori_isim" value="<?php echo $film_getir['kategori_isim'] ?>"><br>
										<input type="hidden" class="form-control"  name="kategori_id" value="<?php echo $film_getir['kategori_id'] ?>"><br>
										<button name="kategoriduzenle" type="submit" class="btn btn-primary">Düzenle</button>
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
