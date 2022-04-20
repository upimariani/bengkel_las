<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="<?= base_url('asset/amado-master/') ?>img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.html"><img src="<?= base_url('asset/amado-master/') ?>img/core-img/1.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="index.html"><img style="width: 300px;" src="<?= base_url('asset/amado-master/') ?>img/core-img/1.png" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li <?php if ($this->uri->segment(1) == 'pelanggan' && $this->uri->segment(2) == 'c_halaman_utama') {
                            echo 'class="active"';
                        } ?>><a href="<?= base_url('pelanggan/c_halaman_utama') ?>">Home</a></li>
                    <li <?php if ($this->uri->segment(1) == 'pelanggan' && $this->uri->segment(2) == 'c_shopgrid') {
                            echo 'class="active"';
                        } ?>><a href="<?= base_url('pelanggan/c_shopgrid') ?>">Shop</a></li>
                    <li>
                    <li <?php if ($this->uri->segment(1) == 'pelanggan' && $this->uri->segment(2) == 'c_cart') {
                            echo 'class="active"';
                        } ?>><a href="<?= base_url('pelanggan/c_cart') ?>">Cart</a></li>
                    <li <?php if ($this->uri->segment(1) == 'pelanggan' && $this->uri->segment(2) == 'c_checkout') {
                            echo 'class="active"';
                        } ?>><a href="<?= base_url('pelanggan/c_checkout') ?>">Checkout</a></li>
                    <li <?php if ($this->uri->segment(1) == 'pelanggan' && $this->uri->segment(2) == 'c_pesanan_saya') {
                            echo 'class="active"';
                        } ?>><a href="<?= base_url('pelanggan/c_pesanan_saya') ?>">Pesanan Saya</a></li>
                </ul>
            </nav>
            <!-- Button Group -->
            <div class="amado-btn-group mt-30 mb-100">
                <?php
                if ($this->session->userdata('id_pelanggan') == '') {
                ?>
                    <a href="<?= base_url('pelanggan/c_login') ?>" class="btn amado-btn mb-15">LOGIN</a>
                <?php
                } else {
                ?>
                    <a href="<?= base_url('pelanggan/c_login/logout') ?>" class="btn amado-btn mb-15">LogOut</a>
                <?php
                }
                ?>

                <a href="#" class="btn amado-btn active">New this week</a>
            </div>
            <!-- Cart Menu -->
            <?php
            $keranjang = $this->cart->contents();
            $jml_item = 0;
            foreach ($keranjang as $value) {
                $jml_item = $jml_item + $value['qty'];
            }
            ?>
            <div class="cart-fav-search mb-100">
                <?php if ($this->session->userdata('id_pelanggan') != '') {
                ?>
                    <a href="<?= base_url('pelanggan/c_cart') ?>" class="cart-nav"><img src="<?= base_url('asset/amado-master/') ?>img/core-img/cart.png" alt=""> Cart <span>(<?= $jml_item ?>)</span></a>
                <?php
                } ?>

                <a href="<?= base_url('pelanggan/c_chatting') ?>" class="fav-nav"><img src="<?= base_url('asset/amado-master/') ?>img/core-img/favorites.png" alt=""> Chatting</a>
                <a href="#" class="search-nav"><img src="<?= base_url('asset/amado-master/') ?>img/core-img/search.png" alt=""> Search</a>
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->