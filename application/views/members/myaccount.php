	<!--Main layout-->
	<main>
        <div class="container-fluid">

            <!-- Section: Edit Account -->
            <section class="section">
                <!-- First row -->
                <div class="row">
                    <!-- First column -->
                    <div class="col-lg-4 mb-4">

                        <!--Card-->
                        <div class="card card-cascade narrower">

                            <!--Card image-->
                            <div class="view view-cascade gradient-card-header mdb-color lighten-3">
                                <h5 class="mb-0 font-weight-bold">Hi, <?= ucfirst(substr($user->user_nama, 0, 20)) ?></h5>
                            </div>
                            <!--/Card image-->

                            <!-- Card content -->
                            <div class="card-body card-body-cascade text-center">
                                <img src="<?= base_url('assets/members/img/avatar/'. $user->user_avatar) ?>" alt="User Photo" class="z-depth-1 mb-3 mx-auto" style="border-radius: 50%;" />

                                <p class="text-muted"><small>Profile photo will be changed random</small></p>
                                <div class="row flex-center">
                                    <a href="<?= base_url('members/changephoto') ?>" class="btn btn-info btn-rounded btn-sm">Change Photo</a><br>
                                </div>
                            </div>
                            <!-- /.Card content -->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!-- /.First column -->
                    <!-- Second column -->
                    <div class="col-lg-8 mb-4">

                        <!--Card-->
                        <div class="card card-cascade narrower">

                            <!--Card image-->
                            <div class="view view-cascade gradient-card-header mdb-color lighten-3">
                                <h5 class="mb-0 font-weight-bold">Account Information</h5>
                            </div>
                            <!--/Card image-->

                            <!-- Card content -->
                            <div class="card-body card-body-cascade text-center">
                                <!-- Edit Form -->
                                <?= form_open('members/update_account') ?>
                                    <!--First row-->
                                    <div class="row">
                                        <!--First column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" name="txtname" id="form1" class="form-control validate" value="<?= ucfirst($user->user_nama) ?>">
                                                <label for="form1" data-error="wrong" data-success="right">Full Name</label>
                                            </div>
                                        </div>
                                        <!--Second column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" name="txtuname" id="form2" class="form-control validate" value="<?= $user->user_uname ?>" disabled>
                                                <label for="form2" data-error="wrong" data-success="right">Username</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.First row-->
                                    <!--First row-->
                                    <div class="row">
                                        <!--First column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" name="txtorganisasi" id="form81" class="form-control validate" value="<?= strtoupper($user->user_organisasi) ?>">
                                                <label for="form81" data-error="wrong" data-success="right">Organisation</label>
                                            </div>
                                        </div>
                                        <!--Second column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" name="txtwebsite" id="form82" class="form-control validate" value="<?= $user->user_website ?>">
                                                <label for="form82" data-error="wrong" data-success="right">Website</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.First row-->
                                    <!--Second row-->
                                    <div class="row">
                                        <!--First column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="email" name="txtemail" id="form76" class="form-control validate" value="<?= $user->user_email ?>" <?= ($user->user_tgl_verify) ? 'disabled' : '' ?>>
                                                <label for="form76">Email address</label>
                                            </div>
                                        </div>
                                        <!--Second column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="password" name="txtpassword" id="form77" class="form-control validate" placeholder="Fill it, if you need to change password!">
                                                <label for="form77" data-error="wrong" data-success="right">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.Second row-->
                                    <!--Third row-->
                                    <div class="row">
                                        <!--First column-->
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <textarea type="text" name="txtabout" id="form78" class="md-textarea form-control" rows="3"><?= $user->user_about ?></textarea>
                                                <label for="form78">About me</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.Third row-->
                                    <!-- Fourth row -->
                                    <div class="row">
                                        <div class="col-md-12 text-center my-4">
											<button type="submit" name="btnupdateaccount" class="btn btn-info btn-rounded">
												<span>Update Account</span>
											</button>
											<?php if (!$user->user_tgl_verify): ?>
											<a href="<?= base_url('members/sendverifikasiemail') ?>" class="btn btn-warning btn-rounded">Verifikasi Email</a>
											<?php endif; ?>
                                        </div>
                                    </div>
                                    <!-- /.Fourth row -->
                                <?= form_close() ?>
                                <!-- Edit Form -->
                            </div>
                            <!-- /.Card content -->

                        </div>
                        <!--/.Card-->
                    </div>
                    <!-- /.Second column -->
                </div>
                <!-- /.First row -->
            </section>
            <!-- /.Section: Edit Account -->

        </div>
    </main>
	<!--Main layout-->
	
	<script>
		function deletedfile($id) {
			var txt;
			var r = confirm("Deleted this file ?");
			if (r == true) {
				window.location = '<?= base_url('members/deletefile/') ?>' + $id;
			} else {
				return false;
			}
		}
	</script>
