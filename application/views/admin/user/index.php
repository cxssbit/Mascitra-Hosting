        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Table</a></li>
                                    <li class="active">Data table</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Daftar User</strong>
                                <a href="<?=base_url('user/tambah')?>" class="btn btn-primary btn-outline-primary btn-sm float-right">
                                    <i class="fa fa-plus"></i>&nbsp; Tambah User
                                </a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>E-Mail</th>
                                            <th>Level</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($user as $data){ ?>
                                      <tr>
                                        <td><?=$data->id?></td>
                                        <td><?=$data->name?></td>
                                        <td><?=$data->email?></td>
                                        <td>
                                            <?php if ($data->level==1) {?>
                                                Admin
                                            <?php }else{?>
                                                Member
                                            <?php }?>
                                        </td>
                                        <td>
                                          <a class='btn btn-warning btn-sm' href="<?=base_url('index.php/user/ubah/'.$data->id)?>">EDIT</a>
                                          <a class='btn btn-danger btn-sm' href="<?=base_url('index.php/user/hapus/'.$data->id)?>">DELETE</a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div>