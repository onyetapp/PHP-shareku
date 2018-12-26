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
				
				<form>

					<input type="email" name="txtemailreset" class="form-control" placeholder="Masukan E-Mail Anda...">
					<button type="button" class="btn btn-primary float-right" onclick="$('#alertInfoSend').show();" data-dismiss="modal">Reset</button>

				</form>

			</div>

		</div>
		<!--/.Content-->
	</div>
</div>
