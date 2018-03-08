<?php
	include 'header.php';
	$Sayfa   = @intval($_GET['sayfa']); if(!$Sayfa) $Sayfa = 1;
	$Limit	= 10;
	$Goster   = $Sayfa * $Limit - $Limit;
	$yazisor=$db->prepare("SELECT * FROM kategori order by kategori_id DESC LIMIT $Goster,$Limit");
	$yazisor->execute();
	$satir_sayisi = $db->query("SELECT * FROM kategori WHERE 1")->rowCount();
 ?>
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<?php
                      if (@$_GET['sil']=="basarili") {?>
												<div class="alert alert-success alert-dismissible" role="alert">
													<i class="fa fa-check-circle"></i> Film Başarılı bir şekilde silindi.
											</div>
										<?php } elseif (@$_GET['sil']=="basarisiz") {?>
											<div class="alert alert-danger alert-dismissible" role="alert">
												<i class="fa fa-times-circle"></i> Film silinemedi.
											</div>
                      <?php }
                      ?>
					<h3 class="page-title">Kategoriler</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- INPUTS -->
							<div class="panel">
								<div class="panel-heading">
								</div>
								<div class="panel-body">
									<div class="col-md-12">
							<!-- TABLE STRIPED -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Striped Row</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>#</th>
												<th>Kategori İsim</th>
												<th></th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<?php
			                $say=0;
			                while($yazicek=$yazisor->fetch(PDO::FETCH_ASSOC)) { $say++?>
											<tr>
												<td><?php echo $say ?></td>
												<td><?php echo $yazicek['kategori_isim'] ?></td>
												<td><a href="kategoriduzenle.php?kategori_id=<?php echo $yazicek['kategori_id'] ?>"><span class="label label-primary">Düzenle</span></a></td>
												<td><a href="islem/islem.php?kategori_id=<?php echo $yazicek['kategori_id']; ?>&kategorisil=ok"><span class="label label-danger">Sil</span></a></td>
											</tr>
											 <?php } ?>
										</tbody>
									</table>
									<?php
							      $a = ceil($satir_sayisi/10);
							        echo '<ul class="pagination justify-content-center">';
							        ?>
							        <?php if($Sayfa > 1){?>
							      <li class="page-item"><a class="page-link" href="filmler.php?sayfa=<?=$Sayfa - 1?>" tabindex="-1">Önceki</a></li>
							      <?php } ?>
							      <?php
							        for($b = 1 ; $b <= $a ; $b++){
							          echo '<li class="page-item"><a class="page-link" href="filmler.php?sayfa='. $b . ' ">'. $b . '</a></li>';
							        }
							        ?>
							        <li class="page-item"><a class="page-link" href="filmler.php?sayfa=<?=$Sayfa + 1?>">Sonraki</a></li>
							        <?php
							        echo '</ul>';
							       ?>
								</div>
							</div>
							<!-- END TABLE STRIPED -->
						</div>
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
