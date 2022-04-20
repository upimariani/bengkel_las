<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Detail <small>Transaksi</small></h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <section class="content invoice">
                            <!-- title row -->
                            <div class="row">
                                <div class="  invoice-header">
                                    <h3>
                                        <i class="fa fa-globe"></i> <?= $pemesanan['transaksi']->id_transaksi ?>
                                    </h3>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    To
                                    <address>
                                        <strong><?= $pemesanan['transaksi']->atas_nama ?></strong>
                                        <br><?= $pemesanan['transaksi']->alamat ?> <?= $pemesanan['transaksi']->nama_desa ?> <?= $pemesanan['transaksi']->nama_kecamatan ?>
                                        <br><span class="badge badge-success"><?= $pemesanan['transaksi']->status_order ?></span>
                                    </address>
                                </div>
                                <!-- /.col -->
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <b>Invoice #<?= $pemesanan['transaksi']->id_transaksi ?></b>
                                    <br>
                                    <br>
                                    <b>Tanggal Order:</b> <?= $pemesanan['transaksi']->tgl_order ?>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- Table row -->
                            <div class="row">
                                <div class="  table">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Qty</th>
                                                <th>Product</th>
                                                <th>Harga #</th>
                                                <th style="width: 59%">Description</th>
                                                <th>Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($pemesanan['detail'] as $key => $value) {
                                            ?>
                                                <tr>
                                                    <td><?= $value->qty ?></td>
                                                    <td><?= $value->nama_produk ?></td>
                                                    <td>Rp. <?= number_format($value->harga_produk - (($value->diskon / 100) * $value->harga_produk))  ?></td>
                                                    <td><?= $value->deskripsi ?></td>
                                                    <td>Rp. <?= number_format(($value->harga_produk - (($value->diskon / 100) * $value->harga_produk)) * $value->qty) ?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <!-- accepted payments column -->
                                <div class="col-md-6">

                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th>Total:</th>
                                                    <td>Rp. <?= number_format($pemesanan['transaksi']->total_bayar)  ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- this row will not appear when printing -->
                            <div class="row no-print">
                                <div class=" ">
                                    <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                                    <a href="<?= base_url('admin/c_transaksi') ?>" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-arrow-left"></i> Kembali</a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->