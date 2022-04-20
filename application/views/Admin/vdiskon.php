<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Informasi Diskon Barang</h3>
                <?php
                if ($this->session->userdata('pesan')) {
                    echo ' <div class="alert alert-success alert-dismissible " role="alert">
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                   </button>';
                    echo $this->session->userdata('pesan');
                    echo '</div>';
                }
                ?>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-7 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Diskon</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">

                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Nama Produk</th>
                                                <th class="text-center">Harga</th>
                                                <th class="text-center">Diskon</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($diskon as $key => $value) {
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $value->nama_produk  ?></td>
                                                    <td class="text-center">Rp. <?= number_format($value->harga_produk - ($value->diskon / 100 * $value->harga_produk), 0) ?>
                                                        <br>
                                                        <span class="badge badge-success">Rp. <?= number_format($value->harga_produk, 0) ?></span>
                                                    </td>
                                                    <td class="text-center"><?= $value->diskon  ?>%</td>
                                                    <td class="text-center">
                                                        <a class="btn btn-app" href="<?= base_url('admin/c_barang/hapus_diskon/' . $value->id_produk) ?>">
                                                            <i class="fa fa-trash"></i> Hapus
                                                        </a>
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
            </div>
            <div class="col-md-5 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Tambah Data Diskon Produk</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" action="<?= base_url('admin/c_barang/diskon') ?>" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Produk <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-12 ">
                                    <select class="form-control" name="id_produk">
                                        <option>---Pilih Produk---</option>
                                        <?php
                                        foreach ($barang as $key => $value) {
                                        ?>
                                            <option value="<?= $value->id_produk ?>"><?= $value->nama_produk ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <?= form_error('id_produk', '<p class="text-danger pl-3">', '</p>'); ?>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Besar Diskon <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input type="text" id="last-name" name="diskon" class="form-control" placeholder="Masukkan Diskon Produk">
                                    <?= form_error('diskon', '<p class="text-danger pl-3">', '</p>'); ?>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>