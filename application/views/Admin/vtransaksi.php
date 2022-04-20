<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>TRANSAKSI</h3>
                <?php
                if ($this->session->userdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissible " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>';
                    echo $this->session->userdata('pesan');
                    echo '</div>';
                }
                ?>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="col-xs-12">
                        <!-- required for floating -->
                        <!-- Nav tabs -->
                        <div class="nav nav-tabs flex-column  bar_tabs" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Pesanan Masuk</a>
                            <a class="nav-link" id="v-pills-pembayaran-tab" data-toggle="pill" href="#v-pills-pembayaran" role="tab" aria-controls="v-pills-pembayaran" aria-selected="true">Konfirmasi Pembayaran</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Pesanan Diproses</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Pesanan Dikirim</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Selesai</a>
                        </div>

                    </div>

                    <div class="col-xs-12">
                        <!-- Tab panes -->
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="col-lg-12 ">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Informasi Pesanan Masuk</h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="x_content">
                                            <div class="table-responsive">
                                                <table class="table table-striped jambo_table bulk_action">
                                                    <thead>
                                                        <tr class="headings">
                                                            <th>
                                                                <input type="checkbox" id="check-all" class="flat">
                                                            </th>
                                                            <th class="column-title">Id Pemesanan </th>
                                                            <th class="column-title">Atas Nama </th>
                                                            <th class="column-title">Total Pembayaran </th>
                                                            <th class="column-title">Status </th>
                                                            <th class="column-title no-link last"><span class="nobr">Action</span>
                                                            </th>
                                                            <th class="bulk-actions" colspan="7">
                                                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                                            </th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php
                                                        foreach ($pesanan_masuk as $key => $value) {
                                                        ?>
                                                            <tr class="even pointer">
                                                                <td class="a-center ">
                                                                    <input type="checkbox" class="flat" name="table_records">
                                                                </td>
                                                                <td class=" text-center "><strong><?= $value->id_transaksi ?></strong></td>
                                                                <td class=" text-center "><?= $value->atas_nama ?></td>
                                                                <td class=" text-center ">Rp. <?= number_format($value->total_bayar, 0)  ?></td>
                                                                <td class=" text-center "><span class="badge badge-danger">Belum Bayar</span></td>
                                                                <td class=" last"><a class="badge badge-info" href="<?= base_url('admin/c_transaksi/detail_pemesanan/' . $value->id_transaksi) ?>"><i class="fa fa-info"></i> Detail</a>
                                                                </td>
                                                            </tr>
                                                        <?php
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-pembayaran" role="tabpanel" aria-labelledby="v-pills-pembayaran-tab">
                                <div class="col-md-12 col-sm-12  ">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Informasi Pembayaran</h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="x_content">
                                            <div class="table-responsive">
                                                <table class="table table-striped jambo_table bulk_action">
                                                    <thead>
                                                        <tr class="headings">
                                                            <th>
                                                                <input type="checkbox" id="check-all" class="flat">
                                                            </th>
                                                            <th class="column-title">Id Pemesanan </th>
                                                            <th class="column-title">Atas Nama </th>
                                                            <th class="column-title">Total Pembayaran </th>
                                                            <th class="column-title">Status </th>
                                                            <th class="column-title no-link last"><span class="nobr">Action</span>
                                                            </th>
                                                            <th class="bulk-actions" colspan="7">
                                                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                                            </th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php
                                                        foreach ($konfirmasi as $key => $value) {
                                                        ?>

                                                            <tr class="even pointer">
                                                                <td class="a-center ">
                                                                    <input type="checkbox" class="flat" name="table_records">
                                                                </td>
                                                                <td class=" "><?= $value->id_transaksi ?></td>
                                                                <td class=" "><?= $value->atas_nama ?></td>
                                                                <td class=" ">Rp. <?= number_format($value->total_bayar, 0)  ?></td>
                                                                <td class=" "><span class="badge badge-dark">Sudah Bayar</span></td>
                                                                <td class=" last"><a href="<?= base_url('admin/c_transaksi/detail_pemesanan/' . $value->id_transaksi) ?>" class="badge badge-info"><i class="fa fa-info"></i> Detail</a> | <a class="badge badge-success" href="<?= base_url('admin/c_transaksi/konfirmasi_pesanan/' . $value->id_transaksi) ?>"><i class="fa fa-check"></i> Konfirmasi</a>
                                                                </td>
                                                            </tr>
                                                        <?php
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div class="col-md-12 col-sm-12  ">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Informasi Pesanan Diproses</h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="x_content">
                                            <div class="table-responsive">
                                                <table class="table table-striped jambo_table bulk_action">
                                                    <thead>
                                                        <tr class="headings">
                                                            <th>
                                                                <input type="checkbox" id="check-all" class="flat">
                                                            </th>
                                                            <th class="column-title">Id Pemesanan </th>
                                                            <th class="column-title">Atas Nama </th>
                                                            <th class="column-title">Total Pembayaran </th>
                                                            <th class="column-title">Status </th>
                                                            <th class="column-title no-link last"><span class="nobr">Action</span>
                                                            </th>
                                                            <th class="bulk-actions" colspan="7">
                                                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        foreach ($diproses as $key => $value) {
                                                        ?>
                                                            <tr class="even pointer">
                                                                <td class="a-center ">
                                                                    <input type="checkbox" class="flat" name="table_records">
                                                                </td>
                                                                <td class=" "><?= $value->id_transaksi ?></td>
                                                                <td class=" "><?= $value->atas_nama ?></td>
                                                                <td class=" ">Rp. <?= number_format($value->total_bayar, 0)  ?></td>
                                                                <td class=" "><span class="badge bg-orange">Diproses</span></td>
                                                                <td class=" last"><a href="<?= base_url('admin/c_transaksi/kirim/' . $value->id_transaksi) ?>"><span class="badge bg-green"><i class="fa fa-truck"></i> Kirim</span></a> | <a href="<?= base_url('admin/c_transaksi/detail_pemesanan/' . $value->id_transaksi) ?>" class="badge badge-info"><i class="fa fa-info"></i> Detail</a>
                                                                </td>
                                                            </tr>
                                                        <?php
                                                        }
                                                        ?>

                                                    </tbody>
                                                </table>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <div class="col-md-12 col-sm-12  ">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Informasi Pesanan Dikirim</h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="x_content">
                                            <div class="table-responsive">
                                                <table class="table table-striped jambo_table bulk_action">
                                                    <thead>
                                                        <tr class="headings">
                                                            <th>
                                                                <input type="checkbox" id="check-all" class="flat">
                                                            </th>
                                                            <th class="column-title">Id Pemesanan </th>
                                                            <th class="column-title">Atas Nama </th>
                                                            <th class="column-title">Total Pembayaran </th>
                                                            <th class="column-title">Status </th>
                                                            <th class="column-title no-link last"><span class="nobr">Action</span>
                                                            </th>
                                                            <th class="bulk-actions" colspan="7">
                                                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                                            </th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php
                                                        foreach ($dikirim as $key => $value) {
                                                        ?>
                                                            <tr class="even pointer">
                                                                <td class="a-center ">
                                                                    <input type="checkbox" class="flat" name="table_records">
                                                                </td>
                                                                <td class=" "><?= $value->id_transaksi ?></td>
                                                                <td class=" "><?= $value->atas_nama ?></td>
                                                                <td class=" ">Rp. <?= number_format($value->total_bayar, 0)  ?></td>
                                                                <td class=" "><span class="badge badge-success">Dikirim</span></td>
                                                                <td class=" last"><a href="<?= base_url('admin/c_transaksi/selesai/' . $value->id_transaksi) ?>"><span class="badge bg-purple"><i class="fa fa-home"></i> Selesai</span></a> | <a href="<?= base_url('admin/c_transaksi/detail_pemesanan/' . $value->id_transaksi) ?>" class="badge badge-info"><i class="fa fa-info"></i> Detail</a>
                                                                </td>
                                                            </tr>
                                                        <?php
                                                        }
                                                        ?>

                                                    </tbody>
                                                </table>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <div class="col-md-12 col-sm-12 ">
                                    <div class="x_panel">

                                        <div class="x_content">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="card-box table-responsive">

                                                        <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Id Transaksi</th>
                                                                    <th>Atas Nama</th>
                                                                    <th>Status</th>
                                                                    <th>Total Transaksi</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>


                                                            <tbody>
                                                                <?php
                                                                $no = 1;
                                                                foreach ($selesai as $key => $value) {
                                                                ?>
                                                                    <tr>
                                                                        <td><?= $no++ ?></td>
                                                                        <td><?= $value->id_transaksi ?></td>
                                                                        <td><?= $value->atas_nama ?></td>
                                                                        <td><span class="badge badge-success">Selesai</span></td>
                                                                        <td>Rp. <?= number_format($value->total_bayar, 0) ?></td>
                                                                        <td><a href="<?= base_url('admin/c_transaksi/detail_pemesanan/' . $value->id_transaksi) ?>" class="badge badge-info"><i class="fa fa-info"></i> Detail</a></td>
                                                                    </tr>
                                                                <?php
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="clearfix"></div>

                </div>
            </div>
        </div>

    </div>
</div>