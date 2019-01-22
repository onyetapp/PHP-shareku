
    <!--Main Navigation-->
    <header>

        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4 fixed">
            <ul class="custom-scrollbar">
				<!-- Logo -->
				<li class="logo-sn waves-effect">
					<div class="text-center">
						<a href="#" class="pl-0"><img src="<?= base_url('assets/img/logo_text.png') ?>" class=""></a>
					</div>
				</li>
				<!--/. Logo -->
				<!-- Side navigation links -->
				<li>
					<ul class="collapsible collapsible-accordion">
						<li>
							<a class="collapsible-header waves-effect" href="<?= base_url('members') ?>"><i class="fa fa-tachometer"></i> Dashboards</a>
						</li>
						<li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-file-o"></i> Files<i class="fa fa-angle-down rotate-icon"></i></a>
							<div class="collapsible-body">
								<ul>
									<li><a href="#" class="waves-effect" data-toggle="modal" data-target="#modalUploadFIle">Upload File</a>
									</li>
									<li><a href="<?= base_url('members/myfiles') ?>" class="waves-effect">My Files</a>
									</li>
									<li><a href="<?= base_url('files') ?>" class="waves-effect">List of File</a>
									</li>
								</ul>
							</div>
						</li>
						<li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-user"></i> Profile<i class="fa fa-angle-down rotate-icon"></i></a>
							<div class="collapsible-body">
								<ul>
									<li><a href="<?= base_url('members/myaccount') ?>" class="waves-effect">My Account</a>
									</li>
									<li><a href="<?= base_url('logout') ?>" class="waves-effect">Logout</a>
									</li>
								</ul>
							</div>
						</li>
						<li><a href="#" class="collapsible-header waves-effect" data-toggle="modal" data-target="#contactModal"><i class="fa fa-th-large"></i> Donasi & Bantuan</a></li>

					</ul>
				</li>
				<!--/. Side navigation links -->
			</ul>
			
            <div class="sidenav-bg mask-strong"></div>
        </div>
        <!--/. Sidebar navigation -->

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
                <p><strong>SHARE</strong>KU</p>
            </div>

            <!--Navbar links-->
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                <li class="nav-item">
                    <a class="nav-link waves-effect" data-toggle="modal" data-target="#contactModal"><i class="fa fa-comments-o"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span></a>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?= base_url('members/myaccount') ?>">My Account</a>
                        <a class="dropdown-item" href="<?= base_url('logout') ?>">Log Out</a>
                    </div>
                </li>

            </ul>
            <!--/Navbar links-->
        </nav>
        <!-- /.Navbar -->

        <!-- Fixed button -->
        <div class="fixed-action-btn clearfix d-none d-xl-block" style="bottom: 20px; right: 24px;">
            <a class="btn-floating btn-lg red">
                <i class="fa fa-pencil"></i>
            </a>

            <ul class="list-unstyled">
                <li><a href="#" class="btn-floating blue" data-toggle="modal" data-target="#modalUploadFIle"><i class="fa fa-upload"></i></a></li>
                <li><a class="btn-floating green" data-toggle="modal" data-target="#contactModal"><i class="fa fa-envelope"></i></a></li>
                <li><a href="<?= base_url('members/myaccount') ?>" class="btn-floating warning-color"><i class="fa fa-user"></i></a></li>
            </ul>
        </div>
        <!-- Fixed button -->

    </header>
    <!--Main Navigation-->
