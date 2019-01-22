<div id="particles" class="view full-page-intro">
	<!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
		<!-- Card -->
		<div class="col-md-6 card">
		<!-- Card content -->
			<div class="card-body">

				<div class="row">
					<div class="col-md-12">
						<h4 class="card-title m-0">SETEL ULANG KATA SANDI</h4>
						<p class="card-text">Silahkan maskan kata sandi baru kamu</p>
					</div>
				</div>
				<hr>

				<div class="row">

					<div class="col-md-12">
						<?= form_open('login/prosesreset') ?>
						<?= form_hidden('txttoken', $token) ?>
						<input type="password" id="txtpassword" class="form-control mb-4" placeholder="Ketikan kata sandi baru" name="txtpassword">

						<input type="password" id="txtconfirm" class="form-control mb-4" placeholder="Ketik ulang kata sandi" name="txtconfirm">

						<button class="btn blue-gradient btn-block my-4" type="submit">Ganti Kata Sandi</button>

						<?= form_close() ?>
					</div>

				</div>

			</div>	
		</div>
	</div>
</div>

<script type="text/javascript">

	function unduhan() {

		setTimeout(() => {

			window.location = '<?= base_url("unduh/" . $detail->file_token) ?>';

		}, 5000);

	}

</script>
