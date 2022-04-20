<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Perbaharui Data Barang</small></h3>
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
                        echo form_open_multipart("Admin/c_barang/proses_edit/" . $data->id_produk);
                        ?>
                        <input type="hidden" name="id_produk" value="<?= $data->id_produk ?>">
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Barang <span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="nama" id="first-name" value="<?= $data->nama_produk ?>" class="form-control ">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kategori Barang <span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <select class="form-control" name="kategori">
                                    <option value=" ">---Pilih Data Kategori---</option>
                                    <?php
                                    foreach ($kategori as $key => $items) {
                                    ?>
                                        <option value="<?= $items->id_kategori ?>" <?php if ($data->id_kategori == $items->id_kategori) {
                                                                                        echo 'selected';
                                                                                    } ?>><?= $items->nama_kategori ?></option>
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
                                    <option value="1" <?php if ($data->tipe == '1') {
                                                            echo 'selected';
                                                        } ?>>Satuan</option>
                                    <option value="2" <?php if ($data->tipe == '2') {
                                                            echo 'selected';
                                                        } ?>>Pagar</option>
                                </select>
                                <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Harga Barang <span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" name="harga" id="first-name" value="<?= $data->harga_produk ?>" class="form-control ">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Deskripsi <span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="deskripsi" value="<?= $data->deskripsi ?>" id="first-name" class="form-control ">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Stok <span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="stok" id="first-name" value="<?= $data->stok ?>" class="form-control ">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Gambar <span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <img style="width: 150px;" src="<?= base_url('asset/foto-produk/' . $data->gambar) ?>">
                                <input type="file" name="gambar" id="first-name" class="form-control ">
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <a href="<?= base_url('Admin/c_barang') ?>" class="btn btn-primary">Kembali</a>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>