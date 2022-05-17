<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Informasi Barang</small></h3>
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
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Masukkan Data Barang</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <?php
                        echo form_open_multipart("Admin/c_barang")
                        ?>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Barang <span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" value="<?= set_value('nama') ?>" name="nama" id="first-name" class="form-control ">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kategori Barang <span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <select class="form-control" name="kategori">
                                    <option value=" ">---Pilih Data Kategori---</option>
                                    <?php
                                    foreach ($kategori as $key => $value) {
                                    ?>
                                        <option value="<?= $value->id_kategori ?>"><?= $value->nama_kategori ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tipe Barang <span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <select class="form-control" name="tipe">
                                    <option value=" ">---Pilih Tipe Kategori---</option>
                                    <option value="1">Satuan</option>
                                    <option value="2">Pagar</option>
                                </select>
                                <?= form_error('tipe', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Harga Barang <span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" value="<?= set_value('harga') ?>" name="harga" id="first-name" class="form-control ">
                                <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Deskripsi <span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="deskripsi" value="<?= set_value('deskripsi') ?>" id="first-name" class="form-control ">
                                <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Stok <span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="stok" id="first-name" value="<?= set_value('stok') ?>" class="form-control ">
                                <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Gambar <span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="file" name="gambar" id="first-name" class="form-control ">
                                <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Barang</h2>
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
                                                <th class="text-center">Gambar</th>
                                                <th class="text-center">Nama Produk</th>
                                                <th class="text-center">Harga</th>
                                                <th class="text-center">Deskripsi</th>
                                                <th class="text-center">Stok</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($barang as $key => $value) {
                                            ?>
                                                <tr>
                                                    <td class="text-center"><?= $no++ ?></td>
                                                    <td class="text-center"><img style="width: 200px;" src="<?= base_url('asset/foto-produk/' . $value->gambar) ?>"></td>
                                                    <td><?= $value->nama_produk ?><br>
                                                        Kategori : <span class="badge badge-success"> <?= $value->nama_kategori ?></span></td>
                                                    <td>Rp. <?= number_format($value->harga_produk, 0)  ?></td>
                                                    <td><?= $value->deskripsi ?></td>
                                                    <td><?= $value->stok ?></td>
                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="<?= base_url('Admin/c_barang/hapus/' . $value->id_produk) ?>">Hapus</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="<?= base_url('Admin/c_barang/edit_barang/' . $value->id_produk) ?>">Edit </a>
                                                            </div>
                                                        </div>
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
        </div>
    </div>
</div>