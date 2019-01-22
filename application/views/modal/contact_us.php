<!-- Modal Contact Us -->
<div class="modal fade right" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false" aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-full-height modal-right modal-notify modal-primary" role="document">
		<!--Content-->
		<div class="modal-content">
			<?= form_open('login/contactme', array('method' => 'post')) ?>
			<!--Header-->
			<div class="modal-header">
				<p class="heading lead">Hubungi Kami</p>

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" class="white-text">×</span>
				</button>
			</div>

			<!--Body-->
			<div class="modal-body">
				<div class="text-center">
					<i class="fa fa-phone fa-4x mb-3 animated rotateIn"></i>
					<p>Silahkan lengkapi form berikut untuk mengirim masukan berupa kritik dan saran kepada kami. Kami akan membalas pesan anda melalui email anda. Jadi, pastikan email yang anda masukan aktif.
					</p>
				</div>
				<!-- <ul class="list-group z-depth-0">
					<li class="list-group-item justify-content-between">
						Cras justo odio
						<span class="badge badge-primary badge-pill">14</span>
					</li>
					<li class="list-group-item justify-content-between">
						Dapibus ac facilisis in
						<span class="badge badge-primary badge-pill">2</span>
					</li>
					<li class="list-group-item justify-content-between">
						Morbi leo risus
						<span class="badge badge-primary badge-pill">1</span>
					</li>
					<li class="list-group-item justify-content-between">
						Cras justo odio
						<span class="badge badge-primary badge-pill">14</span>
					</li>
					<li class="list-group-item justify-content-between">
						Dapibus ac facilisis in
						<span class="badge badge-primary badge-pill">2</span>
					</li>
					<li class="list-group-item justify-content-between">
						Morbi leo risus
						<span class="badge badge-primary badge-pill">1</span>
					</li>
				</ul> -->

					<input type="text" id="txtnama" class="form-control mb-4" placeholder="Nama Anda" name="txtnama">

					<input type="email" id="txtemail" class="form-control mb-4" placeholder="E-Mail Anda" name="txtemail">

					<textarea class="form-control mb-4" name="txtmessage" placeholder="Pesan Anda Kepada Kami..." rows="3"></textarea>

			</div>

			<!--Footer-->
			<div class="modal-footer justify-content-center">
				<button type="submit" class="btn btn-primary">Kirim</button>
				<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
			</div>

			<?= form_close() ?>

		</div>
		<!--/.Content-->
	</div>
</div>
<!-- End Modal Contact Us -->
