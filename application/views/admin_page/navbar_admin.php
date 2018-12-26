    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container-fluid">

                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="#"
                    target="_blank">
                    <strong class="blue-text">Shareku</strong>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link waves-effect" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="#"
                                target="_blank">About Shareku</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="#" target="_blank">How To Download</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="#" target="_blank">How To Upload</a>
                        </li>
                    </ul>

                    <!-- Right -->
                     <ul class="navbar-nav nav-flex-icons">
                       <li class="nav-item">
                         <a href="https://www.facebook.com/" class="nav-link" target="_blank">
                     <i class="fa fa-facebook"></i>
                         </a>
                       </li>
                    <li class="nav-item">
                        <a href="https://twitter.com/" class="nav-link" target="_blank">
                     <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link border border-light rounded"
                            target="_blank">
                    <i class="fa fa-address-book-o"></i> Contact Us
                            </a>
                        </li>
                    </ul>

                </div>

            </div>
        </nav>
        <!-- Navbar -->

        <!-- Sidebar -->
        <div class="sidebar-fixed position-fixed">

            <a class="logo-wrapper waves-effect">
                <img src="<?= base_url('assets/img/logo_text.png') ?>" class="img-fluid" alt="">
            </a>

            <div class="list-group list-group-flush">
                <a href="<?= base_url('admin') ?>" class="list-group-item <?= ($active == 'dashboard') ? ' active' : 'list-group-item-action' ?> waves-effect">
                    <i class="fa fa-pie-chart mr-3"></i>Dashboard
                </a>
                <a href="<?= base_url('admin/profile') ?>" class="list-group-item <?= ($active == 'profile') ? ' active' : 'list-group-item-action' ?> waves-effect">
                    <i class="fa fa-user mr-3"></i>Profile</a>
                <a href="<?= base_url('admin/files') ?>" class="list-group-item <?= ($active == 'files') ? ' active' : 'list-group-item-action' ?> waves-effect">
                    <i class="fa fa-th-list mr-3"></i>Files</a>
                <a href="<?= base_url('admin/upload') ?>" class="list-group-item <?= ($active == 'upload') ? ' active' : 'list-group-item-action' ?> waves-effect">
                    <i class="fa fa-cloud-upload mr-3"></i>Upload</a>
                <a href="#" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-question-circle mr-3"></i>Help</a>
            </div>

        </div>
        <!-- Sidebar -->

    </header>
    <!--Main Navigation-->
