<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-cubes"></i> <span>Bengkel Las</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="<?= base_url('asset/gentelella-master/production/') ?>images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>Admin</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="<?= base_url('admin/c_dashboard') ?>"><i class="fa fa-home"></i> Home</a></li>
                                <li><a><i class="fa fa-bars"></i> Data Master <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?= base_url('admin/c_barang/kategori') ?>">Kategori Barang</a></li>
                                        <li><a href="<?= base_url('admin/c_barang') ?>">Barang</a></li>
                                        <li><a href="<?= base_url('admin/c_admin') ?>">Admin</a></li>
                                        <li><a href="<?= base_url('admin/c_barang/diskon') ?>">Diskon</a></li>
                                        <li><a href="<?= base_url('admin/c_ongkir') ?>">Ongkos Kirim</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url('admin/c_transaksi') ?>"><i class="fa fa-barcode"></i> Transaksi</a></li>
                                <li><a href="<?= base_url('admin/c_login/logout_admin') ?>"><i class="fa fa-sign-out pull-right"></i> LogOut</a></li>

                            </ul>
                        </div>


                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->

                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                </div>
            </div>
            <!-- /top navigation -->