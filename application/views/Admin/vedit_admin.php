<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Perbaharui Data Admin</small></h3>
            </div>

        </div>

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Masukkan Data Admin</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form action="<?= base_url('admin/c_admin/edit_admin/' . $data->id_admin) ?>" method="POST">
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Admin <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-12 ">
                                    <input type="text" id="first-name" value="<?= $data->nama_admin ?>" name="nama" class="form-control ">
                                    <?= form_error('nama', '<p class="text-danger pl-3">', '</p>'); ?>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Username <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input type="text" id="last-name" value="<?= $data->username ?>" name="username" class="form-control">
                                    <?= form_error('username', '<p class="text-danger pl-3">', '</p>'); ?>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Password <span class="required">*</span></label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input id="middle-name" class="form-control" value="<?= $data->password ?>" name="password" type="text">
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