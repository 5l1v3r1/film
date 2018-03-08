<?php
	include 'header.php';
 ?>
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.html" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="elements.html" class="active"><i class="lnr lnr-code"></i> <span>Elements</span></a></li>
						<li><a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i> <span>Charts</span></a></li>
						<li><a href="panels.html" class=""><i class="lnr lnr-cog"></i> <span>Panels</span></a></li>
						<li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.html" class="">Profile</a></li>
									<li><a href="page-login.html" class="">Login</a></li>
									<li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
								</ul>
							</div>
						</li>
						<li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
						<li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
						<li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Film Ekle</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- INPUTS -->
							<div class="panel">
								<div class="panel-heading">
								</div>
								<div class="panel-body">
									<form class="" action="index.html" method="post">
										<label for="">Film İsmi</label>
										<input type="text" class="form-control"  name="film_isim">
										<label for="">Film Açıklama</label>
										<textarea class="form-control"rows="4"></textarea>
										<label for="">Film Yıl</label>
										<input type="text" class="form-control"  name="film_yıl">
										<label for="">Film Oyuncular</label>
										<input type="text" class="form-control"  name="film_oyuncu">
										<label for="">Film Yönetmen</label>
										<input type="text" class="form-control"  name="film_yönetmen">
										<label for="">Film Yazar</label>
										<input type="text" class="form-control"  name="film_yazar">
										<label for="">Yüklü Resim</label><br>
										<img src="assets/img/logo-dark.png" alt=""><br>
										<label for="">Film Resim</label>
										<input type="file" class="form-control"  name="film_resim">
										<label for="">Film Keywords</label>
										<input type="text" class="form-control"  name="film_keywords">
										<label for="">Film Description</label>
										<input type="text" class="form-control"  name="film_description">
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
										<select class="form-control" name="film_kategori">
											<option value="cheese">Cheese</option>
											<option value="tomatoes">Tomatoes</option>
											<option value="mozarella">Mozzarella</option>
											<option value="mushrooms">Mushrooms</option>
											<option value="pepperoni">Pepperoni</option>
											<option value="onions">Onions</option>
										</select><br>
										<button type="button" class="btn btn-primary">Primary</button>
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
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>
