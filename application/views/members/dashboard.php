	<!--Main layout-->
	<main>
        <div class="container-fluid">

            <!--Section: Button icon-->
            <section>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-xl-3 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card">

                            <!--Card Data-->
                            <div class="row mt-3">
                                <div class="col-md-5 col-5 text-left pl-4">
                                    <a type="button" class="btn-floating btn-lg primary-color ml-4"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                </div>

                                <div class="col-md-7 col-7 text-right pr-5">
                                    <h5 class="ml-4 mt-4 mb-2 font-weight-bold"><?= number_format($visitor, 0, '.', ',') ?></h5>
                                    <p class="font-small grey-text">Page View</p>
                                </div>
                            </div>
                            <!--/.Card Data-->

                            <!--Card content-->
                            <div class="row my-3">
                                <div class="col-md-7 col-7 text-left pl-4">
                                    <p class="font-small dark-grey-text font-up ml-4 font-weight-bold">Total Counter</p>
                                </div>

                                <div class="col-md-5 col-5 text-right pr-5">
                                    <p class="font-small grey-text">My Files</p>
                                </div>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-xl-3 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card">

                            <!--Card Data-->
                            <div class="row mt-3">
                                <div class="col-md-5 col-5 text-left pl-4">
                                    <a type="button" class="btn-floating btn-lg warning-color ml-4"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                                </div>

                                <div class="col-md-7 col-7 text-right pr-5">
                                    <h5 class="ml-4 mt-4 mb-2 font-weight-bold"><?= number_format($files, 0, '.', ',') ?></h5>
                                    <p class="font-small grey-text">All Files</p>
                                </div>
                            </div>
                            <!--/.Card Data-->

                            <!--Card content-->
                            <div class="row my-3">
                                <div class="col-md-7 col-7 text-left pl-4">
                                    <p class="font-small dark-grey-text font-up ml-4 font-weight-bold">Total Files</p>
                                </div>

                                <div class="col-md-5 col-5 text-right pr-5">
                                    <p class="font-small grey-text">Uploaded</p>
                                </div>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-xl-3 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card">

                            <!--Card Data-->
                            <div class="row mt-3">
                                <div class="col-md-5 col-5 text-left pl-4">
                                    <a type="button" class="btn-floating btn-lg light-blue lighten-1 ml-4"><i class="fa fa-download" aria-hidden="true"></i></a>
                                </div>

                                <div class="col-md-7 col-7 text-right pr-5">
                                    <h5 class="ml-4 mt-4 mb-2 font-weight-bold"><?= number_format($downloads, 0, '.', ',') ?></h5>
                                    <p class="font-small grey-text">All Download</p>
                                </div>
                            </div>
                            <!--/.Card Data-->

                            <!--Card content-->
                            <div class="row my-3">
                                <div class="col-md-7 col-7 text-left pl-4">
                                    <p class="font-small dark-grey-text font-up ml-4 font-weight-bold">Total Downloads</p>
                                </div>

                                <div class="col-md-5 col-5 text-right pr-5">
                                    <p class="font-small grey-text">My File</p>
                                </div>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-xl-3 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card">

                            <!--Card Data-->
                            <div class="row mt-3">
                                <div class="col-md-5 col-5 text-left pl-4">
                                    <a type="button" class="btn-floating btn-lg red accent-2 ml-4"><i class="fa fa-money" aria-hidden="true"></i></a>
                                </div>

                                <div class="col-md-7 col-7 text-right pr-5">
                                    <h5 class="ml-4 mt-4 mb-2 font-weight-bold"><?= number_format($donasi, 0, '.', ',') ?></h5>
                                    <p class="font-small grey-text">Rupiah / IDR</p>
                                </div>
                            </div>
                            <!--/.Card Data-->

                            <!--Card content-->
                            <div class="row my-3">
                                <div class="col-md-7 col-7 text-left pl-4">
                                    <p class="font-small dark-grey-text font-up ml-4 font-weight-bold">Total Donation</p>
                                </div>

                                <div class="col-md-5 col-5 text-right pr-5">
                                    <p class="font-small grey-text">From Me</p>
                                </div>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--/Section: Button icon-->

            <div style="height: 5px"></div>

            <!-- Section: data tables -->
            <section class="section">

                <div class="row">

                    <div class="col-lg-12 col-md-12">
                        <div class="card mb-4">
							<div class="card-header primary-color white-text">
								<h3>Last Upload</h3>
							</div>
                            <div class="card-body">
                                <table class="table large-header">
                                    <thead>
                                        <tr>
                                            <th class="font-weight-bold dark-grey-text"><strong>Token</strong></th>
                                            <th class="font-weight-bold dark-grey-text"><strong>Name</strong></th>
                                            <th class="font-weight-bold dark-grey-text"><strong>Upload</strong></th>
                                            <th class="font-weight-bold dark-grey-text"><strong>Type</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>

										<?php foreach ($lastfile as $key => $value): ?>
										<?php
											
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
                                            <td><a href="<?= base_url('unduh/'. $value->file_token) ?>"><?= $value->file_token ?></a></td>
                                            <td><?= ucfirst($value->file_nama_asli) ?></td>
											<td><?= mdate('%d %M %Y - %H:%i %A', $value->file_tgl_upload) ?></td>
											<td><?= $g .' '. ucfirst($f) ?></td>
										</tr>
										
										<?php endforeach; ?>

                                    </tbody>
                                </table>

                                <a href="<?= base_url('members/myfiles') ?>" class="btn btn-flat grey lighten-3 btn-rounded waves-effect font-weight-bold dark-grey-text float-right">View all my files</a>

                            </div>

                        </div>

                    </div>
                </div>

            </section>
            <!-- /.Section: data tables -->

        </div>
    </main>
    <!--Main layout-->
