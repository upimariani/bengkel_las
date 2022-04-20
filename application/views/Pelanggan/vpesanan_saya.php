<div class="cart-table-area section-padding-100">
    <div class="container-fluid">
        <div class="row">


            <div class="col-lg-12 mt-4 mt-lg-0">
                <h3 class="into-sub-title">Pesanan Saya</h3>

                <div class="accordion accordion-group" id="our-values-accordion">
                    <div class="card">
                        <div class="card-header p-0 bg-warning" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Status Pemesanan
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#our-values-accordion">
                            <div class="card-body">
                                <?php
                                foreach ($pesanan as $key => $value) {
                                ?>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p>Atas Nama : <?= $value->atas_nama ?></p>
                                            <p>Total Belanja : Rp. <?= number_format($value->total_bayar, 0) ?></p>
                                            <p>Ongkos Kirim : <?= number_format($value->ongkir, 0) ?></p>
                                            <h5>Total Bayar : <?= number_format($value->total_bayar + $value->ongkir) ?></h5>
                                            <p>Alamat : <?= $value->alamat ?> <?= $value->nama_desa ?> <?= $value->nama_kecamatan ?></p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>No. Transaksi : <?= $value->id_transaksi ?></p>
                                            <p>Status :
                                                <?php if ($value->status_pembayaran == '0') {
                                                    echo '<span class="badge badge-danger">Belum Bayar</span>';
                                                } else if ($value->status_pembayaran == '1' && $value->status_order == '0') {
                                                    echo '<span class="badge badge-warning">Menunggu Konfirmasi</span>';
                                                } else if ($value->status_pembayaran == '1' && $value->status_order == '2') {
                                                    echo '<span class="badge badge-info">Sedang Diproses</span>';
                                                } else if ($value->status_pembayaran == '1' && $value->status_order == '3') {
                                                    echo '<span class="badge badge-info">Sedang Dikirim</span>';
                                                } else if ($value->status_pembayaran == '1' && $value->status_order == '4') {
                                                    echo '<span class="badge badge-success">Selesai</span>';
                                                } ?>
                                            </p>
                                            <?php
                                            if ($value->status_pembayaran == '0') {
                                            ?>
                                                <?php
                                                echo form_open_multipart('Pelanggan/c_pesanan_saya/bayar');
                                                ?>
                                                <input type="file" name="bayar" class="form-control">
                                                <input type="hidden" name="id_transaksi" value="<?= $value->id_transaksi ?>">
                                                <br>
                                                <button type="submit" class="btn amado-btn w-100">Bayar</button>
                                                <?php echo form_close() ?>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="card">

                    </div>

                </div>
                <!--/ Accordion end -->

            </div><!-- Col end -->
        </div><!-- Row end -->
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