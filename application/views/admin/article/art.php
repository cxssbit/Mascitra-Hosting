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
                                <button type="button" class="btn btn-primary btn-outline-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-plus"></i>&nbsp; Tambah User
                                </button>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(!empty($article)){foreach($article as $data){ ?>
                                      <tr>
                                        <td><?=$data->id?></td>
                                        <td><?=$data->judul?></td>
                                        <td><?=$data->tanggal?></td>
                                        <td>
                                          <a class='btn btn-warning btn-sm' href="<?=base_url('index.php/article/ubah/'.$data->id)?>">EDIT</a>
                                          <a class='btn btn-danger btn-sm' href="<?=base_url('index.php/article/hapus/'.$data->id)?>">DELETE</a>
                                        </td>
                                    </tr>
                                    <?php }}else{?>
                                      <tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div>

<form action="google.com" method="post" class="form-horizontal">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row form-group">
                <div class="col col-md-3"><label for="input-1" class=" form-control-label">Nama</label></div>
                <div class="col-12 col-md-9"><input type="email" id="input-1" name="hf-email" placeholder="Masukkan Nama..." class="form-control"></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="input-2" class=" form-control-label">Email</label></div>
                <div class="col-12 col-md-9"><input type="email" id="input-2" name="hf-email" placeholder="Masukkan Email..." class="form-control"></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="input-3" class=" form-control-label">Password</label></div>
                <div class="col-12 col-md-9"><input type="password" id="input-3" name="hf-password" placeholder="Masukkan Password..." class="form-control"></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label">Select</label></div>
                <div class="col-12 col-md-9">
                    <select name="select" id="select" class="form-control">
                        <option value="0">Member</option>
                        <option value="1">Admin</option>
                    </select>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
          </div>
        </div>
      </div>
    </div>
</form>
