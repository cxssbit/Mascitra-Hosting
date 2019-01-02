       <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Tambah User baru</strong>
                            </div>
                            <div class="card-body">
                              <form action="<?=base_url('user/tambah')?>" method="post">
                                <div class="form-group">
                                  <label for="input-1">name</label>
                                  <input type="text" class="form-control" id="input-1" placeholder="nama" name="name">
                                </div>
                                  <div class="form-group">
                                  <label for="input-2">email</label>
                                  <input type="text" class="form-control" id="input-2" placeholder="lorem@ipsum.com" name="email">
                                </div>
                                <div class="form-group">
                                  <label for="input-3">password</label>
                                 <input type="text" class="form-control" id="input-3" placeholder="" name="password">
                                </div>
                                <a href="<?=base_url('user')?>" class="btn btn-danger">
                                    <i class="fa fa-sign-out"></i>&nbsp; cancel
                                </a>
                                <button type="submit" class="btn btn-primary float-right" name="submit" value="submit">
                                    <i class="fa fa-save"></i>&nbsp; Simpan
                                </button>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

