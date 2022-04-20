<div class="cart-table-area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="cart-title">
                    <h2>Chatting</h2>
                </div>
                <?php
                foreach ($chat as $key => $value) {
                    if ($value->pelanggan_send != '0') {
                ?>
                        <div class="text-right">
                            <h5 class="pt-3"><?= $value->nama_pelanggan ?> <small><span class="badge badge-warning"><?= $value->time ?></span></small></h5>
                            <p><?= $value->pelanggan_send ?></p>
                        </div>
                    <?php
                    } else if ($value->admin_send != '0') {
                    ?>
                        <div class="text-left">
                            <h5 class="pt-3">Admin</h5>
                            <p><?= $value->admin_send ?></p>
                        </div>
                <?php
                    }
                }
                ?>


            </div>
            <div class="col-12 col-lg-12">
                <div class="checkout_details_area mt-50 clearfix">
                    <form action="<?= base_url('pelanggan/c_chatting') ?>" method="post">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <textarea name="pesan" class="form-control w-100" id="comment" cols="20" rows="10" placeholder="Tuliskan Pesan Anda..."></textarea>
                            </div>
                            <button type="submit" class="btn amado-btn w-100">KIRIM</button>
                        </div>
                    </form>
                </div>
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