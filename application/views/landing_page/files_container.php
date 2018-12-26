<div id="particles" class="view full-page-intro">
	
</div>
<div style="position: absolute;
	top: 66px;
	padding: 15px;
    width: 100%;
    bottom: 0px;
	overflow: auto;
	background-color: rgba(0,0,0,.3);">
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h4>Daftar Seluruh File</h4>
			</div>
			<div class="card-body">
				<table id="dtBasicExample-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th class="th-sm">No.
							<i class="fa fa-sort float-right" aria-hidden="true"></i>
							</th>
							<th class="th-sm">Nama File
							<i class="fa fa-sort float-right" aria-hidden="true"></i>
							</th>
							<th class="th-sm">Tgl Upload
							<i class="fa fa-sort float-right" aria-hidden="true"></i>
							</th>
							<th class="th-sm">Pemilik
							<i class="fa fa-sort float-right" aria-hidden="true"></i>
							</th>
							<th class="th-sm">DI Unduh
							<i class="fa fa-sort float-right" aria-hidden="true"></i>
							</th>
							<th class="th-sm">Jenis
							<i class="fa fa-sort float-right" aria-hidden="true"></i>
							</th>
							<th class="th-sm">Aksi
							<i class="fa fa-sort float-right" aria-hidden="true"></i>
							</th>
						</tr>
					</thead>
					<tbody>

					<?php for($x = 1; $x <= 500; $x++): ?>
					<?php
						$y = rand(1, 5);
						$f = '';
						switch ($y) {
							case 1:
								$f = 'Gambar';
								$g = '<i class="fa fa-image"></i> ';
								break;
							
							case 2:
								$f = 'Dokumen';
								$g = '<i class="fa fa-file-text"></i> ';
								break;
							
							case 3:
								$f = 'Musik';
								$g = '<i class="fa fa-music"></i> ';
								break;
							
							case 4:
								$f = 'Video';
								$g = '<i class="fa fa-film"></i> ';
								break;
							
							case 5:
								$f = 'Lainnya';
								$g = '<i class="fa fa-file-o"></i> ';
								break;
						}
					?>
						<tr>
							<td><?= $x ?></td>
							<td><?= 'File ' . $f . ' Ke- ' . $x ?></td>
							<td><?=  date_format(date_create(rand(1, 12) . '/' . rand(1, 30) . '/' . rand(1990, 2018)), 'd M Y' ) ?></td>
							<td><a href="#" style="text-decoration: underline;"><?= 'User' . rand(1, 200) ?></a></td>
							<td><?= rand(0, 1230) ?> Kali</td>
							<td><?= $g . $f ?></td>
							<td>
								<a style="color: white;" href="<?= base_url('unduh/fileme-' . $x) ?>" class="btn peach-gradient btn-sm btn-block"><i class="fa fa-arrow-circle-o-down"></i> Unduh</a>
								
							</td>
						</tr>
					<?php endfor; ?>
					</tbody>
					<tfoot>
						<tr>
							<th>No.</th>
							<th>Nama File</th>
							<th>Tgl Upload</th>
							<th>Pemilik</th>
							<th>Di Unduh</th>
							<th>Jenis</th>
							<th>Aksi</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>


