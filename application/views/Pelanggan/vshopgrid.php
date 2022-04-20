<div class="shop_sidebar_area">

    <!-- ##### Single Widget ##### -->
    <div class="widget catagory mb-50">
        <!-- Widget Title -->
        <h6 class="widget-title mb-30">Catagories</h6>

        <!--  Catagories  -->
        <div class="catagories-menu">
            <ul>
                <li><a href="<?= base_url('pelanggan/c_shopgrid') ?>">All</a></li>
                <?php
                foreach ($kategori as $key => $value) {
                ?>
                    <li <?php if ($this->uri->segment(1) == 'pelanggan' && $this->uri->segment(2) == 'c_shopgrid' && $this->uri->segment(3) == 'shop_kategori' && $this->uri->segment(4) == $value->id_kategori) {
                            echo 'class="active"';
                        } ?>><a href="<?= base_url('pelanggan/c_shopgrid/shop_kategori/' . $value->id_kategori) ?>"><?= $value->nama_kategori ?></a></li>
                <?php
                }
                ?>

            </ul>
        </div>
    </div>
</div>

<div class="amado_product_area section-padding-100">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                    <!-- Total Products -->
                    <div class="total-products">
                        <p>Showing 1-8 0f 25</p>
                        <div class="view d-flex">
                            <a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!-- Sorting -->
                    <div class="product-sorting d-flex">
                        <div class="sort-by-date d-flex align-items-center mr-15">
                            <p>Sort by</p>
                            <form action="#" method="get">
                                <select name="select" id="sortBydate">
                                    <option value="value">Date</option>
                                    <option value="value">Newest</option>
                                    <option value="value">Popular</option>
                                </select>
                            </form>
                        </div>
                        <div class="view-product d-flex align-items-center">
                            <p>View</p>
                            <form action="#" method="get">
                                <select name="select" id="viewProduct">
                                    <option value="value">12</option>
                                    <option value="value">24</option>
                                    <option value="value">48</option>
                                    <option value="value">96</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            foreach ($produk as $key => $value) {
            ?>

                <!-- Single Product Area -->
                <div class="col-12 col-sm-6 col-md-12 col-xl-4">
                    <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img style="width: 250px; height: 250px;" src="<?= base_url('asset/foto-produk/' . $value->gambar) ?>" alt="">
                            <!-- Hover Thumb -->
                            <img style="width: 250px; height: 250px;" class="hover-img" src="<?= base_url('asset/foto-produk/' . $value->gambar) ?>" alt="">
                        </div>

                        <!-- Product Description -->
                        <div class="product-description d-flex align-items-center justify-content-between">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <div class="line"></div>
                                <h5 class="product-price">Rp. <?= number_format($value->harga_produk - ($value->diskon / 100 * $value->harga_produk), 0) ?><br>
                                    <?php if ($value->diskon != '0') {
                                    ?>
                                        <del>Rp. <?= number_format($value->harga_produk, 0) ?></del>
                                    <?php
                                    } ?>
                                </h5>
                                <a>
                                    <h6><?= $value->nama_produk ?></h6>
                                    <p>Qty : <?= $value->stok ?></p>
                                    <p><?= $value->deskripsi ?></p>
                                </a>
                            </div>
                            <!-- Ratings & Cart -->
                            <div class="ratings-cart text-right">
                                <form action="<?= base_url('Pelanggan/c_halaman_utama/add') ?>" method="POST">
                                    <input type="hidden" name="id" value="<?= $value->id_produk ?>">
                                    <input type="hidden" name="name" value="<?= $value->nama_produk ?>">
                                    <input type="hidden" name="price" value="<?= $value->harga_produk - ($value->diskon / 100 * $value->harga_produk) ?>">
                                    <input type="hidden" name="qty" value="1">
                                    <input type="hidden" name="picture" value="<?= $value->gambar ?>">
                                    <input type="hidden" name="stok" value="<?= $value->stok ?>">
                                    <div class="cart">
                                        <button class="btn" type="submit" data-toggle="tooltip" data-placement="left" title="Add to Cart" <?php if ($value->stok < 1) {
                                                                                                                                                echo 'disabled';
                                                                                                                                            } ?>><img src="<?= base_url('asset/amado-master/') ?>img/core-img/cart.png" alt=""></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>

        <div class="row">
            <div class="col-12">
                <!-- Pagination -->
                <nav aria-label="navigation">
                    <ul class="pagination justify-content-end mt-50">
                        <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                        <li class="page-item"><a class="page-link" href="#">02.</a></li>
                        <li class="page-item"><a class="page-link" href="#">03.</a></li>
                        <li class="page-item"><a class="page-link" href="#">04.</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
</div>
<!-- ##### Main Content Wrapper End ##### -->

<!-- ##### Newsletter Area Start ##### -->
<section class="newsletter-area section-padding-100-0">
    <div class="container">
        <div class="row align-items-center">
            <!-- Newsletter Text -->
            <div class="col-12 col-lg-6 col-xl-7">
                <div class="newsletter-text mb-100">
                    <h2>Subscribe for a <span>25% Discount</span></h2>
                    <p>Nulla ac convallis lorem, eget euismod nisl. Donec in libero sit amet mi vulputate consectetur. Donec auctor interdum purus, ac finibus massa bibendum nec.</p>
                </div>
            </div>
            <!-- Newsletter Form -->
            <div class="col-12 col-lg-6 col-xl-5">
                <div class="newsletter-form mb-100">
                    <form action="#" method="post">
                        <input type="email" name="email" class="nl-email" placeholder="Your E-mail">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Newsletter Area End ##### -->