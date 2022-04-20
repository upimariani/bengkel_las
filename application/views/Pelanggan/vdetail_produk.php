<!-- Product Details Area Start -->
<div class="single-product-area section-padding-100 clearfix">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mt-50">
                        <li class="breadcrumb-item"><a href="<?= base_url('pelanggan/c_halaman_utama') ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Produk Pagar</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="single_product_thumb">
                    <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url(<?= base_url('asset/foto-produk/' . $detail->gambar) ?>);">
                            </li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a class="gallery_img" href="<?= base_url('asset/foto-produk/' . $detail->gambar) ?>">
                                    <img class="d-block w-100" src="<?= base_url('asset/foto-produk/' . $detail->gambar) ?>" alt="First slide">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="single_product_desc">
                    <!-- Product Meta Data -->
                    <div class="product-meta-data">
                        <div class="line"></div>
                        <p class="product-price">Rp. <?= number_format($detail->harga_produk) ?></p>
                        <a href="product-details.html">
                            <h6><?= $detail->nama_produk ?></h6>
                        </a>
                        <!-- Ratings & Review -->
                        <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="review">
                                <a href="#">Write A Review</a>
                            </div>
                        </div>
                        <!-- Avaiable -->
                        <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p>
                    </div>

                    <div class="short_overview my-5">
                        <p><?= $detail->deskripsi ?></p>
                    </div>

                    <!-- Add to Cart Form -->
                    <form class="cart clearfix" action="<?= base_url('Pelanggan/c_halaman_utama/add') ?>" method="POST">
                        <input type="hidden" name="id" value="<?= $detail->id_produk ?>">
                        <input type="hidden" name="name" value="<?= $detail->nama_produk ?>">
                        <input type="hidden" name="price" value="<?= $detail->harga_produk - ($detail->diskon / 100 * $detail->harga_produk) ?>">
                        <input type="hidden" name="picture" value="<?= $detail->gambar ?>">
                        <input type="hidden" name="stok" value="<?= $detail->stok ?>">
                        <div class="cart-btn d-flex mb-50">
                            <p>Panjang/m2</p>
                            <div class="quantity">
                                <input type="number" name="qty" class="qty-text" id="qty" step="1" min="1" max="<?= $detail->stok ?>">
                            </div>
                        </div>
                        <button type="submit" name="addtocart" class="btn amado-btn">Add to cart</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Details Area End -->
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