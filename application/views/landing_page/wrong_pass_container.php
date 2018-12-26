<div class="view full-page-intro">
	<!-- Mask & flexbox options-->
	<div class="mask d-flex justify-content-center align-items-center" style="top: 0px;">
		<div style="text-align: center;">
			<h5>Nama Pengguna Atau Password Salah!</h5>
			<p>Anda akan kembali ke halam <a href="<?= base_url() ?>">beranda</a> dalam <span id="tick"></span> detik</p>	
		</div>
	</div>
</div>

<script type="text/javascript">

	var tick = $('#tick');
	var tikme = 4;
	
	tick.text(tikme);

	$(document).ready(function(){

		setInterval(() => {

			tikme = tikme - 1;
			tick.text(tikme);

			if (tikme <= 0) {

				window.location = '<?= base_url() ?>';

			}

		}, 1000);

	});

</script>
