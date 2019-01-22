<!--Modal: modalPush-->
<div class="modal fade" id="modalUploadFIle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
	<div class="modal-dialog modal-notify modal-info" role="document">
		<!--Content-->
		<?= form_open_multipart('members/uploadmyfile') ?>
		<div class="modal-content text-center">
			<!--Header-->
			<div class="modal-header d-flex justify-content-center">
				<p class="heading">Upload Your File!</p>
			</div>

			<!--Body-->
			<div class="modal-body">
				<p>Maksimul File Upload 2Mb</p>
				<div class="md-form">
					<div class="file-field">
						<div class="btn btn-primary btn-sm float-left">
							<span>Choose file</span>
							<?= form_upload('fileupload2', array('id' => 'fileuploadmodal2', 'value' => 'c:aaad')) ?>
							<input type="file" name="fileupload" id="fileuploadmodal" onchange="getvaluemodalupload()">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" id="txtfileuploadmodal" type="text" placeholder="Upload your file">
						</div>
					</div>
				</div>
			</div>

			<!--Footer-->
			<div class="modal-footer flex-center">
			<button type="submit" name="submitku" class="btn btn-info">Upload</button>
			<a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">Cancel</a>
			</div>
			<?= form_close() ?>
		</div>
	<!--/.Content-->
	</div>
</div>
<!--Modal: modalPush-->

<script>

	function getvaluemodalupload() {

		$('#txtfileuploadmodal').val($('#fileuploadmodal').val());

	}

</script>
