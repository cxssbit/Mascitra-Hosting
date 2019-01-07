       <div class="content">
            <div class="animated fadeIn">
              <form action="<?=base_url('contact/manager')?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Sosial Media</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">#</th>
                                            <th>Nama</th>
                                            <th>Url</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        <tr>
                                            <?php foreach($social as $data){?>
                                            <td class="serial">1.</td>
                                            <td><?=$data->icon?> <?=$data->name?></td> 
                                            <td><?=$data->url?></td>
                                            <td> 
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                  <button class='btn btn-primary btn-sm px-4'data-toggle="modal" data-target="#hapus">Ubah</button>
                                                  <button class='btn btn-danger btn-sm' data-toggle="modal" data-target="#hapus">Hapus</button>
                                                </div>
                                            </td>
                                        <?php }?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Tambah Sosial Media</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="<?=base_url('social')?>" method="post">
                                    <div class="form-group">
                                        <label for="input-2" class=" form-control-label">Media</label>
                                        <select class="form-control" id="input-4" name="icon">
                                          <option value="fab fa-facebook">Facebook</option>
                                          <option value="fab fa-twitter">Twitter</option>
                                          <option value="fab fa-google-plus">Googel+</option>
                                          <option value="fab fa-instagram">Instagram</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-1" class=" form-control-label">Nama</label>
                                        <input type="text" id="input-1" placeholder="eg. Facebook" class="form-control" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3" class=" form-control-label">Url</label>
                                        <input type="text" id="input-3" placeholder="eg. http://facebook.com" class="form-control" name="url">
                                    </div>
                                    <button class="btn btn-primary btn-block" type="submit">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div><!-- .animated -->
        </div><!-- .content -->

