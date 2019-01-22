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
				<h4>Daftar Seluruh File <a href="<?= base_url('files') ?>" class="float-right"><i class="fa fa-refresh"></i></a></h4>
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
							<th class="th-sm">Di Unduh
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

					<?php

						foreach ($allfile as $key => $value):

							$u = $this->model->getDataUser($value->file_user_uname);
							$x = ($key + 1);
							$y = strtolower($value->file_jenis);
							$f = '';
							switch ($y) {
								case 'gambar':
									$f = 'Gambar';
									$g = '<i class="fa fa-image"></i> ';
									break;
								
								case 'doc':
									$f = 'Dokumen';
									$g = '<i class="fa fa-file-text"></i> ';
									break;
								
								case 'musik':
									$f = 'Musik';
									$g = '<i class="fa fa-music"></i> ';
									break;
								
								case 'video':
									$f = 'Video';
									$g = '<i class="fa fa-film"></i> ';
									break;
								
								case 'lainnya':
									$f = 'File';
									$g = '<i class="fa fa-file-o"></i> ';
									break;
							}
					?>
						<tr>
							<td><?= $x ?></td>
							<td><?= ucfirst($value->file_nama_asli) ?></td>
							<td><?=  mdate('%d %M %Y - %h:%i') ?></td>
							<td><a href="#" style="text-decoration: underline;"><?= ($u) ? ucfirst($u->user_nama) : 'Tidak Terdaftar' ; ?></a></td>
							<td><?= $this->model->countDownloadByID($value->file_id) ?> Kali</td>
							<td><?= $g . $f ?></td>
							<td>
								<a style="color: white;" href="<?= base_url('unduh/' . $value->file_token) ?>" class="btn peach-gradient btn-sm btn-block"><i class="fa fa-arrow-circle-o-down"></i> Unduh</a>
								
							</td>
						</tr>

					<?php endforeach; ?>
					
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


