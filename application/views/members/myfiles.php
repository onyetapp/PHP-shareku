	<!--Main layout-->
	<main>
        <div class="container-fluid">

            <div style="height: 5px"></div>

            <!-- Section: data tables -->
            <section class="section">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?= base_url('members') ?>">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="#">Files</a></li>
								<li class="breadcrumb-item active">My Files</li>
							</ol>
						</nav>
					</div>
				</div>
                <div class="row">

                    <div class="col-lg-12 col-md-12">
                        <div class="card mb-4">
							<div class="card-header primary-color white-text">
								<h3>My Files</h3>						
							</div>
                            <div class="card-body">

                                <table class="table large-header" id="myfiletable">
                                    <thead>
                                        <tr>
                                            <th class="font-weight-bold dark-grey-text"><strong>No.</strong></th>
                                            <th class="font-weight-bold dark-grey-text"><strong>Token</strong></th>
                                            <th class="font-weight-bold dark-grey-text"><strong>Name</strong></th>
                                            <th class="font-weight-bold dark-grey-text"><strong>Upload</strong></th>
                                            <th class="font-weight-bold dark-grey-text"><strong>Type</strong></th>
                                            <th class="font-weight-bold dark-grey-text"><strong>Viewer</strong></th>
                                            <th class="font-weight-bold dark-grey-text"><strong>Downloaded</strong></th>
                                            <th class="font-weight-bold dark-grey-text"><strong>Actions</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php foreach ($files as $key => $value): ?>
									<?php
										
										$x = $key + 1;
										$y = strtolower($value->file_jenis);
										$f = '';
										switch ($y) {
											case 'gambar':
												$f = 'Picture';
												$g = '<i class="fa fa-image"></i> ';
												break;
											
											case 'doc':
												$f = 'Document';
												$g = '<i class="fa fa-file-text"></i> ';
												break;
											
											case 'musik':
												$f = 'Music';
												$g = '<i class="fa fa-music"></i> ';
												break;
											
											case 'video':
												$f = 'Video';
												$g = '<i class="fa fa-film"></i> ';
												break;
											
											case 'lainnya':
												$f = 'Other';
												$g = '<i class="fa fa-file-o"></i> ';
												break;
										}
										
									?>
										<tr>
											<td><?= $x ?></td>
											<td><a href="<?= base_url('unduh/'. $value->file_token) ?>" style="text-decoration: underline;"><?= $value->file_token ?></a></td>
											<td><?= ucfirst($value->file_nama_asli) ?></td>
											<td><?= mdate('%d %M %Y - %H:%i %A', $value->file_tgl_upload) ?></td>
											<td><?= $g .' '. ucfirst($f) ?></td>
											<td><?= number_format($value->file_view, 0, '.', ',') ?></td>
											<td><?= $this->model->countDownloadByID($value->file_id) ?></td>
											<td class="text-right">
												<a href="#" class="btn purple-gradient btn-sm" style="margin: 0px;" onclick="deletedfile(<?= $value->file_id ?>)"><i class="fa fa-trash"></i> Delete</a>
											</td>
										</tr>
									
									<?php endforeach; ?>
                                    </tbody>
                                </table>

                            </div>

                        </div>

                    </div>
                </div>

            </section>
            <!-- /.Section: data tables -->

        </div>
    </main>
	<!--Main layout-->
	
	<script>
		function deletedfile($id) {
			var txt;
			var r = confirm("Deleted this file ?");
			if (r == true) {
				window.location = '<?= base_url('members/deletefile/') ?>' + $id;
			} else {
				return false;
			}
		}
	</script>
