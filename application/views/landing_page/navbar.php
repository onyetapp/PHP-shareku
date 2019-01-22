<!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="<?= base_url() ?>">
				<img src="<?= base_url('assets/img/white_logo.png') ?>" style="max-width: 35px;">
        <strong> &nbsp;Shareku</strong>
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
          <li class="nav-item <?= ($active == 'home') ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url() ?>"><i class="fa fa-home"></i> <?= ($this->session->userdata('login_status') && $this->session->userdata('username')) ? 'Dashboard' : 'Beranda' ?>
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item <?= ($active == 'files') ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('files') ?>"><i class="fa fa-paper-plane"></i> Semua File</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#caraUnduhModal"><i class="fa fa-cloud-download"></i> Cara Unduh</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#caraUnggahModal"><i class="fa fa-cloud-upload"></i> Cara Unggah</a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
					<?php if ($this->session->userdata('login_status') && $this->session->userdata('username')): ?>

          <li class="nav-item">
            <a href="<?= base_url('members') ?>" class="nav-link border border-light rounded">
              <i class="fa fa-address-book-o"></i> Halo, <?= ucfirst($this->session->userdata('username')) ?>
            </a>
					</li>

					<?php else: ?>

					<li class="nav-item">
            <a href="#" class="nav-link border border-light rounded" data-toggle="modal" data-target="#contactModal">
              <i class="fa fa-address-book-o"></i> Hubungi Kami
            </a>
					</li>

					<?php endif; ?>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->
