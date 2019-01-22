	<!-- Full Page Intro -->
  <div id="particles" class="view full-page-intro">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-6 mb-4 white-text text-center text-md-left">

            <h1 class="display-4 font-weight-bold">Mudahnya Berbagi Dengan Shareku</h1>

            <hr class="hr-light">

            <p>
              <strong>Tempat Sharing Paling Simpel Telah Hadir</strong>
            </p>

            <p class="mb-4 d-none d-md-block">
              <strong>Website Penyedia File yang diperuntukan Khusus untuk Pengguna yang tidak mau repot dengan iklan diHalaman Website. Cukup 1 klik Langsung Download</strong>
            </p>

            <a style="color: white;" href="#" class="btn peach-gradient btn-lg" data-toggle="modal" data-target="#caraUnduhModal">How To Download
              <i class="fa fa-download ml-2"></i>
            </a>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4">
					
            <!--Card-->
            <div class="card">
							
              <!--Card content-->
              <div class="card-body">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-sign-in"></i> Masuk</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-user-plus"></i> Daftar</a>
									</li>
								</ul>
								<div class="tab-content" id="myTabContent">

									<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
										
										<?= form_open(base_url('login/proses'), array('class' => 'border border-light p-4')) ?>

											<input type="txt" id="defaultLoginFormUname" class="form-control mb-4" placeholder="Email atau Username" name="txtemail">

											<input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Kata sandi" name="txtpassword">

											<button class="btn blue-gradient btn-block my-4" type="submit">Masuk</button>

											<div style="text-align: center;">
													<a href="#" data-toggle="modal" data-target="#resetPasswordModal">Lupa kata sandi ?</a>
											</div>

										<?= form_close() ?>

									</div>

									<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

										<?= form_open('login/prosesdaftar', array('class' => 'border border-light p-4')) ?>

											<input type="text" min="2" name="txtnama" id="defaultRegisterFormName" class="form-control mb-4" placeholder="Nama Lengkap">

											<input type="text" min="5" name="txtuname" id="defaultRegisterFormUname" class="form-control mb-4" placeholder="Username">

											<input type="email" name="txtemail" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

											<input type="password" min="5" name="txtpassword" id="defaultLoginFormPassword2" class="form-control mb-4" placeholder="Kata sandi">

											<button class="btn blue-gradient btn-block my-3" type="submit">Daftar</button>

											<div class="text-center">

												<hr>

												<p>Dengan Klik
														<em>Daftar</em> Kamu setuju dengan
														<a href="" target="_blank">Syarat</a> dan
														<a href="" target="_blank">Ketentuan Berlaku</a> dari kami.
												</p>

											</div>

										<?= form_close() ?>

									</div>

								</div>
							</div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->
