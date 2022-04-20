    <!-- page content -->
    <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row" style="display: inline-block;">

        </div>
        <!-- /top tiles -->

        <div class="row">


        </div>
        <br />

        <div class="row">


            <div class="col-md-4 col-sm-4 ">
                <div class="x_panel tile fixed_height_320">
                    <div class="x_title">
                        <h2>TRANSAKSI</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <h4>Laporan Transaksi Bengkel Las</h4>
                        <?php
                        foreach ($transaksi as $key => $value) {
                        ?>
                            <div class="widget_summary">
                                <div class="w_left w_55">
                                    <span><?= $value->id_transaksi ?></span>
                                </div>
                                <div class="w_center w_55">
                                    <?php
                                    if ($value->status_order == '0') {
                                    ?>
                                        <span class="badge badge-danger">Belum Bayar</span>
                                    <?php
                                    }
                                    if ($value->status_order == '1') {
                                    ?>
                                        <span class="badge badge-warning">Menunggu Konfirmasi</span>
                                    <?php
                                    } else if ($value->status_order == '2') {
                                    ?>
                                        <span class="badge badge-info">Diproses</span>
                                    <?php
                                    } else if ($value->status_order == '3') {
                                    ?>
                                        <span class="badge bg-purple">Dikirim</span>
                                    <?php
                                    } else if ($value->status_order == '4') {
                                    ?>
                                        <span class="badge badge-success">Selesai</span>
                                    <?php
                                    } ?>
                                </div>
                                <div class="w_right w_20">


                                </div>
                                <div class="clearfix"></div>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 ">
                <div class="x_panel tile fixed_height_320 overflow_hidden">
                    <div class="x_title">
                        <h2>KATEGORI BARANG</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="" style="width:100%">
                            <?php
                            $no = 1;
                            foreach ($kategori as $key => $value) {
                            ?>
                                <tr>
                                    <th style="width:37%;">
                                        <p><?= $no++ ?></p>
                                    </th>
                                    <th>
                                        <div class="col-lg-7 col-md-7 col-sm-7 ">
                                            <p class=""><?= $value->nama_kategori ?></p>
                                        </div>
                                    </th>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-sm-4 ">
                <div class="x_panel tile fixed_height_320">
                    <div class="x_title">
                        <h2>CHATTING</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="dashboard-widget-content">
                            <ul class="list-unstyled msg_list">
                                <?php
                                foreach ($chat as $key => $value) {
                                ?>
                                    <li>
                                        <a href="<?= base_url('admin/c_chatting/chat/' . $value->id_pelanggan) ?>">
                                            <span>
                                                <span><?= $value->nama_pelanggan ?></span>
                                                <span class="time"><?= $value->time ?></span><br>
                                            </span>
                                            <span class="message">
                                                <?php
                                                if ($value->pelanggan_send != '0') {
                                                ?>
                                                    <?= $value->pelanggan_send ?>
                                                <?php
                                                } else {
                                                ?>
                                                    <?= $value->admin_send ?>
                                                <?php
                                                } ?>

                                            </span>
                                        </a>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
    <!-- /page content -->