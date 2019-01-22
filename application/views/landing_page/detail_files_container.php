<div id="particles" class="view full-page-intro">
	<!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
		<!-- Card -->
		<div class="col-md-6 card">
		<!-- Card content -->
			<div class="card-body">

				<div class="row">
					<div class="col-md-7">
						<h4 class="card-title m-0"><?= ucfirst(substr($detail->file_nama_asli, 0, 25)) ?></h4>
						<p class="card-text">File&nbsp;Type : <?= strtoupper($detail->file_type) ?> &nbsp; File&nbsp;Size: <?= ($detail->file_size / 1000) ?>Mb</p>
					</div>
					<div class="col-md-5">
						<?= form_open('unduh') ?>
						<?= form_hidden('tokenfile', $detail->file_token) ?>
						<button type="submit" id="btnunduh" name="btnunduh" class="btn btn-outline-primary btn-block btn-rounded waves-effect" onclick="unduhan()">
							<i class="fa fa-download"></i> Unduh Sekarang
						</button>
						<?= form_close() ?>
					</div>
				</div>
				<hr>
			<!-- Link -->
				<a href="#!" target="_blank">
				<p style="font-size: 0.7rem; margin: 0px; margin-top: -0.7rem; color: gray;">Ads</p>
				<img src="<?= base_url('assets/img/iklan/g10492.png') ?>" style="max-width: 100%;">
				</a>

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
