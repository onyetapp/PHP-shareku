		<!-- Alert -->
		<div id="alertInfoSend" class="alert alert-info" role="alert" style="display: none; position: fixed; top: 70px; right: 10px;">
			<strong>Berhasil Reset Password!</strong> Cek email-mu.
			<button type="button" class="close" onclick="$('#alertInfoSend').hide();" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<!-- End Alert -->
    <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?= base_url('assets/js/mdb.min.js') ?>"></script>
    <!-- Particle -->
		<script type="text/javascript" src="<?= base_url('assets/lib/particle/particles.min.js')?>"></script>
    <!-- Data Tables -->
		<script type="text/javascript" src="<?= base_url('assets/lib/datatables/datatables.min.js') ?>"></script>
		
    <script type="text/javascript">
    	$(document).ready(function(){
				$('#dtBasicExample-1').DataTable();
				$('.dataTables_length').addClass('bs-select');
				// $('#dtBasicExample-1_wrapper .row:first').hide();
				$('#dtBasicExample-1_filter').css({
					'float' : 'right'
				});
				$('#dtBasicExample-1_paginate').css({
					'float' : 'right'
				});

				particlesJS('particles',
				{
					"particles": {
						"number": {
							"value": 80,
							"density": {
								"enable": true,
								"value_area": 800
							}
						},
						"color": {
							"value": "#ffffff"
						},
						"shape": {
							"type": "circle",
							"stroke": {
								"width": 0,
								"color": "#ffffff"
							},
							"polygon": {
								"nb_sides": 6
							},
							"image": {
								"src": "img/github.svg",
								"width": 100,
								"height": 100
							}
						},
						"opacity": {
							"value": 0.3687847739990702,
							"random": false,
							"anim": {
								"enable": false,
								"speed": 1,
								"opacity_min": 0.1,
								"sync": false
							}
						},
						"size": {
							"value": 16.03412060865523,
							"random": true,
							"anim": {
								"enable": false,
								"speed": 46.288401101176675,
								"size_min": 0.1,
								"sync": false
							}
						},
						"line_linked": {
							"enable": true,
							"distance": 150,
							"color": "#ffffff",
							"opacity": 0.4,
							"width": 1
						},
						"move": {
							"enable": true,
							"speed": 6,
							"direction": "none",
							"random": false,
							"straight": false,
							"out_mode": "out",
							"bounce": false,
							"attract": {
								"enable": false,
								"rotateX": 600,
								"rotateY": 1200
							}
						}
					},
					"interactivity": {
						"detect_on": "canvas",
						"events": {
							"onhover": {
								"enable": true,
								"mode": "repulse"
							},
							"onclick": {
								"enable": true,
								"mode": "push"
							},
							"resize": true
						},
						"modes": {
							"grab": {
								"distance": 400,
								"line_linked": {
									"opacity": 1
								}
							},
							"bubble": {
								"distance": 400,
								"size": 40,
								"duration": 2,
								"opacity": 8,
								"speed": 3
							},
							"repulse": {
								"distance": 200,
								"duration": 0.4
							},
							"push": {
								"particles_nb": 4
							},
							"remove": {
								"particles_nb": 2
							}
						}
					},
					"retina_detect": true
				});
			});
    </script>
</body>
</html>
