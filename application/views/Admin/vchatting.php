<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Chatting <small>Sessions</small></h2>
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
                                <ul class="list-unstyled msg_list">
                                    <?php
                                    foreach ($list_chat as $key => $value) {
                                        $id = $value->id_pelanggan;
                                        if ($value->pelanggan_send != '0') {
                                    ?>
                                            <li>
                                                <a>
                                                    <span class="text-right">
                                                        <span class="badge badge-danger"><?= $value->nama_pelanggan ?></span>
                                                        <span class="time"><?= $value->time ?></span>
                                                    </span>
                                                    <span class="message text-right">
                                                        <?= $value->pelanggan_send ?></span>
                                                </a>
                                            </li>
                                        <?php
                                        } else if ($value->admin_send != '0') {
                                        ?>
                                            <li>
                                                <a>
                                                    <span>
                                                        <span class="badge badge-success">Admin</span>
                                                        <span class="time"><?= $value->time ?></span>
                                                    </span>
                                                    <span class="message">
                                                        <?= $value->admin_send ?></span>
                                                </a>
                                            </li>
                                    <?php
                                        }
                                    }
                                    ?>
                                </ul>
                                <form action="<?= base_url('admin/c_chatting/chat/' . $id) ?>" method="POST" class="form-label-left input_mask">
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tulis Pesan <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="hidden" name="id" value="<?= $id ?>">
                                            <input type="text" name="msg" id="first-name" required="required" class="form-control ">
                                        </div>
                                        <button type="submit" class="btn btn-success">Kirim</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- /page content -->

        </div>

    </div>
</div>
</div>
</div>
<!-- /page content -->