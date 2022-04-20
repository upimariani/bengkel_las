<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Amado - Furniture Ecommerce Template | Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="<?= base_url('asset/amado-master/') ?>img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="<?= base_url('asset/amado-master/') ?>css/core-style.css">
    <link rel="stylesheet" href="<?= base_url('asset/amado-master/') ?>style.css">

</head>

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
        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumbs -->

        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h2>Checkout</h2>
                            </div>

                            <form action="<?= base_url('pelanggan/c_checkout') ?>" method="post">
                                <?php
                                $id_transaksi = date('Ymd') . strtoupper(random_string('alnum', 8));
                                ?>
                                <?php
                                $i = 1;
                                foreach ($this->cart->contents() as $items) {
                                    echo form_hidden('qty' . $i++, $items['qty']);
                                }
                                ?>
                                <input type="hidden" name="id_pelanggan" value="<?= $this->session->userdata('id_pelanggan1') ?>">
                                <input type="hidden" name="id_transaksi" value="<?= $id_transaksi ?>">
                                <input name="total_bayar" value="<?= $this->cart->total() ?>" hidden>
                                <input type="hidden" name="ongkir" class="ongkir">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label>Atas Nama</label>
                                        <input type="text" name="atas_nama" class="form-control" id="first_name" value="<?= $this->session->userdata('nama_pelanggan') ?>" placeholder="First Name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>No Telepon</label>
                                        <input type="text" class="form-control" id="last_name" value="<?= $this->session->userdata('no_hp') ?>" placeholder="Last Name" required>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label>Kabupaten/Kota</label>
                                        <select name="kabupaten" id="kab" class="w-100" required>
                                            <option value="">---Pilih Kabupaten/Kota---</option>
                                            <option value="1">Kuningan</option>
                                            <option value="2">Cirebon</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label>Kecamatan</label>
                                        <select name="kecamatan" name="kec" id="kecamatan" class="w-100" required>
                                            <option value="">---Pilih Kecamatan---</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label>Desa/Kelurahan<span>*</span></label>
                                        <select name="desa" name="desa" id="desa" class="w-100" required>
                                            <option value="">---Pilih Desa/Kelurahan---</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label>Alamat Lengkap</label>
                                        <input type="text" name="alamat" class="form-control mb-3" id="street_address" placeholder="Address">
                                    </div>
                                </div>

                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="cart-summary">
                            <h5>Cart Total</h5>
                            <ul class="summary-table">
                                <li><span>subtotal:</span> <span> Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></span></li>
                                <li><span>delivery:</span> <span class="ongkir"></span></li>
                            </ul>

                            <div class="cart-btn mt-100">
                                <button type="submit" class="btn amado-btn w-100">Checkout</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- Start Shop Services Area  -->
    <section class="shop-services section home">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>Free shiping</h4>
                        <p>Orders over $100</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4>Free Return</h4>
                        <p>Within 30 days returns</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4>Sucure Payment</h4>
                        <p>100% secure payment</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>Best Peice</h4>
                        <p>Guaranteed price</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Services -->

    <!-- End Shop Newsletter -->
    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Footer Top -->
        <div class="footer-top section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer about">
                            <div class="logo">
                                <a href="index.html"><img src="images/logo2.png" alt="#"></a>
                            </div>
                            <p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
                            <p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456 789</a></span></p>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer links">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer links">
                            <h4>Customer Service</h4>
                            <ul>
                                <li><a href="#">Payment Methods</a></li>
                                <li><a href="#">Money-back</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer social">
                            <h4>Get In Tuch</h4>
                            <!-- Single Widget -->
                            <div class="contact">
                                <ul>
                                    <li>NO. 342 - London Oxford Street.</li>
                                    <li>012 United Kingdom.</li>
                                    <li>info@eshop.com</li>
                                    <li>+032 3456 7890</li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                            <ul>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter"></i></a></li>
                                <li><a href="#"><i class="ti-flickr"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Top -->
        <div class="copyright">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="left">
                                <p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a> - All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="right">
                                <img src="images/payments.png" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /End Footer Area -->
    <script script src="<?= base_url('asset/') ?>jquery.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#kab').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo site_url('pelanggan/c_checkout/get_kec'); ?>",
                    method: "POST",
                    data: {
                        id: id
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data) {

                        var html = '';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<option value=' + data[i].id_kecamatan + '>' + data[i].nama_kecamatan + '</option>';
                        }
                        $('#kecamatan').html(html);
                    }
                });
                return false;
            });
            $('#kecamatan').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo site_url('pelanggan/c_checkout/get_desa'); ?>",
                    method: "POST",
                    data: {
                        id: id
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data) {
                        $total = <?= $this->cart->total(); ?>

                        var html = '';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<option data-ongkir=' + data[i].ongkir + ' value=' + data[i].id_desa + '>' + data[i].nama_desa + '</option>';
                        }
                        $('#desa').html(html);
                    }
                });
                return false;
            });

        });
    </script>
    <script>
        $("#desa").on('change', function() {
            $(".ongkir").html($(this).find(':selected').attr('data-ongkir'));
            $(".ongkir").val($(this).find(':selected').attr('data-ongkir'));

        })
    </script>
    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 3000)
    </script>
</body>

</html>