<div class="cart-table-area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="checkout_details_area mt-50 clearfix">

                    <div class="cart-title">
                        <h2>LOGIN</h2>
                        <?php
                        if ($this->session->userdata('pesan')) {
                            echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">';
                            echo $this->session->userdata('pesan');
                            echo ' <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> </div>';
                        }
                        ?>
                        <?php
                        if ($this->session->userdata('error')) {
                            echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">';
                            echo $this->session->userdata('error');
                            echo ' <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> </div>';
                        }
                        ?>
                    </div>

                    <form action="<?= base_url('pelanggan/c_login') ?>" method="post">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" id="first_name" value="" placeholder="Masukkan Username Anda">
                                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" id="last_name" value="" placeholder="Masukkan Password Anda">
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <p>Apakah Anda Belum Memiliki Akun? <a href="<?= base_url('pelanggan/c_login/register') ?>">Register!!!</a></p>
                            <button type="submit" class="btn amado-btn w-100">LOGIN</button>
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