<div class="modal fade" id="resetPasswordModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-notify modal-info" role="document">
		<!--Content-->
		<div class="modal-content">
			<!--Header-->
			<div class="modal-header">
				<p class="heading lead">Reset Password</p>

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" class="white-text">×</span>
				</button>
			</div>

			<!--Body-->
			<div class="modal-body">
				
				<?= form_open('login/requestReset', array('method' => 'post')) ?>

					<input type="email" name="txtemailreset" class="form-control" placeholder="Masukan E-Mail Anda...">
					<button type="submit" name="btnsubmit" class="btn btn-primary float-right">Reset</button>

				<?= form_close() ?>

			</div>

		</div>
		<!--/.Content-->
	</div>
</div>
