<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Ongkos Pengiriman</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row" style="display: block;">
            <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Kecamatan <small><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Tambah Kecamatan</button></small></h2>
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

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Kabupaten</th>
                                    <th>Nama Kecamatan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($kecamatan as $key => $value) {
                                ?>
                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td><?php if ($value->kode_kec == '1') {
                                                echo 'Kuningan';
                                            } else {
                                                echo 'Cirebon';
                                            } ?></td>
                                        <td><?= $value->nama_kecamatan ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu">
                                                    <button type="button" class="dropdown-item" data-toggle="modal" data-target=".edit<?= $value->id_kecamatan ?>">Edit</button>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="<?= base_url('admin/c_ongkir/hapus_kecamatan/' . $value->id_kecamatan) ?>">Hapus</a>
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


            <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Desa <small> <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Tambah Desa</button></small></h2>
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <form action="<?= base_url('admin/c_ongkir/insert_kecamatan') ?>" method="POST">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Tambah Kecamatan</h4>
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Kecamatan <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <select name="id_kab" id="heard" class="form-control" required>
                                                        <option value="">---Pilih Kabupaten/Kota---</option>
                                                        <option value="1">Kuningan</option>
                                                        <option value="2">Cirebon</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Kecamatan <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" name="nama_kec" id="first-name" required="required" class="form-control ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <form action="<?= base_url('admin/c_ongkir/insert_desa') ?>" method="POST">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel2">Tambah Desa</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <label for="heard">Nama Kecamatan</label>
                                            <select name="id_kec" id="heard" class="form-control" required>
                                                <option value="">---Pilih Kecamatan---</option>
                                                <?php foreach ($kecamatan as $key => $value) {
                                                ?>
                                                    <option value="<?= $value->id_kecamatan ?>"><?= $value->nama_kecamatan ?></option>
                                                <?php
                                                } ?>
                                            </select>
                                            <label class="col-form-label label-align" for="first-name">Nama Desa <span class="required">*</span>
                                            </label>
                                            <input type="text" name="nama_desa" id="first-name" required="required" class="form-control ">
                                            <label class="col-form-label label-align" for="first-name">Ongkir <span class="required">*</span>
                                            </label>
                                            <input type="number" name="ongkir" id="first-name" required="required" class="form-control ">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Kecamatan</th>
                                    <th>Nama Desa</th>
                                    <th>Ongkir</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($desa as $key => $value) {
                                ?>
                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td><?= $value->nama_kecamatan ?></td>
                                        <td><?= $value->nama_desa ?></td>
                                        <td><?= $value->ongkir ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu">
                                                    <button type="button" class="dropdown-item" data-toggle="modal" data-target=".edit_desa<?= $value->id_desa ?>">Edit</button>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="<?= base_url('admin/c_ongkir/hapus_desa/' . $value->id_desa) ?>">Hapus</a>
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
<?php
foreach ($kecamatan as $key => $value) {
?>
    <form action="<?= base_url('admin/c_ongkir/edit_kecamatan/' . $value->id_kecamatan) ?>" method="POST">
        <div class="modal fade edit<?= $value->id_kecamatan ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Edit <?= $value->nama_kecamatan ?></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Kecamatan <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <select name="id_kab" id="heard" class="form-control" required>
                                    <option value="">---Pilih Kabupaten/Kota---</option>
                                    <option value="1" <?php if ($value->kode_kec == '1') {
                                                            echo 'selected';
                                                        } ?>>Kuningan</option>
                                    <option value="2" <?php if ($value->kode_kec == '2') {
                                                            echo 'selected';
                                                        } ?>>Cirebon</option>
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Kecamatan <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" value="<?= $value->nama_kecamatan ?>" name="nama_kec" id="first-name" required="required" class="form-control ">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>

                </div>
            </div>
        </div>
    </form>

<?php
}
?>
</div>
<?php
foreach ($desa as $key => $value) {
?>
    <form action="<?= base_url('admin/c_ongkir/edit_desa/' . $value->id_desa) ?>" method="POST">
        <div class="modal fade edit_desa<?= $value->id_desa ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Edit <?= $value->nama_kecamatan ?></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label for="heard">Nama Kecamatan</label>
                        <select name="id_kec" id="heard" class="form-control" required>
                            <option value="">---Pilih Kecamatan---</option>
                            <?php foreach ($kecamatan as $key => $items) {
                            ?>
                                <option value="<?= $items->id_kecamatan ?>" <?php if ($value->kode == $items->id_kecamatan) {
                                                                                echo 'selected';
                                                                            } ?>><?= $items->nama_kecamatan ?></option>
                            <?php
                            } ?>
                        </select>
                        <label class="col-form-label label-align" for="first-name">Nama Desa <span class="required">*</span>
                        </label>
                        <input type="text" value="<?= $value->nama_desa ?>" name="nama_desa" id="first-name" required="required" class="form-control ">
                        <label class="col-form-label label-align" for="first-name">Ongkir <span class="required">*</span>
                        </label>
                        <input type="number" name="ongkir" value="<?= $value->ongkir ?>" id="first-name" required="required" class="form-control ">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>

                </div>
            </div>
        </div>
    </form>

<?php
}
?>