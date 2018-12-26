<!--Main Navigation-->
<header>

	<!-- Navbar -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
		<div class="container-fluid">

			<!-- Brand -->
			<a class="navbar-brand waves-effect" href="<?= base_url() ?>">
					<strong class="blue-text">Shareku</strong>
			</a>

			<!-- Collapse -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Links -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">

				<!-- Left -->
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
					<a class="nav-link waves-effect" href="<?= base_url() ?>"><i class="fa fa-home"></i> Beranda
						<span class="sr-only">(current)</span>
					</a>
					</li>
					<li class="nav-item">
					<a class="nav-link waves-effect" href="<?= base_url('login/files') ?>"><i class="fa fa-paper-plane"></i> Semua File</a>
					</li>
					<li class="nav-item">
					<a class="nav-link waves-effect" href="#" data-toggle="modal" data-target="#caraUnduhModal"><i class="fa fa-cloud-download"></i> Cara Unduh</a>
					</li>
					<li class="nav-item">
					<a class="nav-link waves-effect" href="#" data-toggle="modal" data-target="#caraUnggahModal"><i class="fa fa-cloud-upload"></i> Cara Unggah</a>
					</li>
				</ul>

				<!-- Right -->
				<ul class="navbar-nav nav-flex-icons">
					<li class="nav-item">
					<a href="https://www.facebook.com/" class="nav-link" target="_blank">
						<i class="fa fa-facebook"></i>
					</a>
					</li>
					<li class="nav-item">
					<a href="https://twitter.com/" class="nav-link" target="_blank">
						<i class="fa fa-twitter"></i>
					</a>
					</li>
					<li class="nav-item">
					<a href="#" class="nav-link border border-light rounded" data-toggle="modal" data-target="#contactModal">
						<i class="fa fa-address-book-o"></i> Hubungi Kami
					</a>
					</li>
				</ul>

			</div>

		</div>
	</nav>
	<!-- Navbar -->

	<!-- Sidebar -->
	<div class="sidebar-fixed position-fixed">

		<a class="logo-wrapper waves-effect">
			<img src="<?= base_url('assets/img/logo_hd.png') ?>" class="img-fluid" alt="">
		</a>

		<div class="list-group list-group-flush">
			<a href="<?= base_url('admin') ?>" class="list-group-item active waves-effect">
				<i class="fa fa-pie-chart mr-3"></i>Dashboard
			</a>
			<a href="profile.html" class="list-group-item list-group-item-action waves-effect">
				<i class="fa fa-user mr-3"></i>Profile</a>
			<a href="#" class="list-group-item list-group-item-action waves-effect">
				<i class="fa fa-th-list mr-3"></i>Files</a>
			<a href="#" class="list-group-item list-group-item-action waves-effect">
				<i class="fa fa-cloud-upload mr-3"></i>Upload</a>
			<a href="#" class="list-group-item list-group-item-action waves-effect">
				<i class="fa fa-question-circle mr-3"></i>Help</a>
		</div>

	</div>
	<!-- Sidebar -->

</header>
<!--Main Navigation-->
