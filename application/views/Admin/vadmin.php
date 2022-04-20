<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Informasi Akun Admin</h3>
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
            <div class="col-md-7 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Admin</h2>
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
                                                <th class="text-center">Nama Admin</th>
                                                <th class="text-center">Username</th>
                                                <th class="text-center">Password</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($admin as $key => $value) {
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $value->nama_admin  ?></td>
                                                    <td><?= $value->username  ?></td>
                                                    <td><?= $value->password  ?></td>
                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="<?= base_url('Admin/c_admin/hapus/' . $value->id_admin) ?>">Hapus</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="<?= base_url('Admin/c_admin/data_edit/' . $value->id_admin) ?>">Edit </a>
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
            <div class="col-md-5 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Tambah Data Admin</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" action="<?= base_url('Admin/c_admin') ?>" method="POST" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Admin <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-12 ">
                                    <input type="text" id="first-name" name="nama" class="form-control ">
                                    <?= form_error('nama', '<p class="text-danger pl-3">', '</p>'); ?>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Username <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input type="text" id="last-name" name="username" class="form-control">
                                    <?= form_error('username', '<p class="text-danger pl-3">', '</p>'); ?>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Password <span class="required">*</span></label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input id="middle-name" class="form-control" name="password" type="text">
                                    <?= form_error('password', '<p class="text-danger pl-3">', '</p>'); ?>
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