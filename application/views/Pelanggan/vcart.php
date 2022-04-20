<div class="cart-table-area section-padding-100">
    <div class="container-fluid">
        <?php
        $tot = '0';
        foreach ($this->cart->contents() as $key => $value) {
            $tot = $tot + $value['price'];
        }
        if ($tot == '0') {
        ?>
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="cart-title mt-50">
                        <h2>Shopping Cart</h2>
                        <p>SILAHKAN MELAKUKAN TRANSAKSI</p>
                    </div>
                </div>
            </div>
        <?php
        } else {
        ?>

            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="cart-title mt-50">
                        <h2>Shopping Cart</h2>
                    </div>

                    <div class="cart-table clearfix">
                        <?php echo form_open('pelanggan/c_cart/update'); ?>
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $no = 1;
                                foreach ($this->cart->contents() as $value) :
                                ?>
                                    <tr>
                                        <td class="cart_product_img">
                                            <a href="#"><img src="<?= base_url('asset/foto-produk/' . $value['picture']) ?>" alt="Product"></a>
                                        </td>
                                        <td class="cart_product_desc">
                                            <h5><?= $value['name'] ?></h5>
                                        </td>
                                        <td class="price">
                                            <span>Rp. <?= number_format($value['price'], 0) ?></span>
                                        </td>
                                        <td class="qty">
                                            <div class="qty-btn d-flex">
                                                <p>Qty</p>
                                                <div class="quantity">
                                                    <input class="qty-text" type="number" name="<?= $i . '[qty]' ?>" min="1" max="<?= $value['stok'] ?>" value="<?= $value['qty'] ?>">
                                                </div>

                                            </div>
                                            <br>
                                            Rp. <?= number_format($value['qty'] * $value['price']) ?>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <button href="<?= base_url('pelanggan/c_cart/update/' . $value['rowid']) ?>" class="btn btn-warning btn-sm">UPDATE</button>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a href="<?= base_url('pelanggan/c_cart/delete/' . $value['rowid']) ?>" class="btn btn-danger btn-sm">HAPUS</a>


                                                </div>
                                            </div>


                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <?php echo form_close(); ?>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="cart-summary">
                        <h5>Cart Total</h5>
                        <ul class="summary-table">
                            <li><span>delivery:</span> <span>Free</span></li>
                            <li><span>total:</span> <span> Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></span></li>
                        </ul>
                        <div class="cart-btn mt-100">
                            <a href="<?= base_url('pelanggan/c_checkout') ?>" class="btn amado-btn w-100">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
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