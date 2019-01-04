       <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Tambah User Baru</strong>
                            </div>
                            <div class="card-body">
                              <form action="<?=base_url('user/ubah/')?><?=$user->id?>" method="post">
                                <div class="form-group">
                                  <label for="input-1">Nama</label>
                                  <input type="text" class="form-control" id="input-1" placeholder="Masukkan Nama" value="<?=$user->name?>" name="name">
                                </div>
                                <div class="form-group">
                                  <label for="input-4">Status</label>
                                  <select class="form-control" id="input-4" name="level">
                                    <option value="0" <?php if($user->level==0){echo"selected";}?>>Member</option>
                                    <option value="1" <?php if($user->level==1){echo"selected";}?>>Admin</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="input-2">E-Mail</label>
                                  <input type="text" class="form-control" id="input-2" placeholder="Masukkan E-mail" value="<?=$user->email?>" name="email">
                                </div>
                                <div class="form-group">
                                  <label for="input-3">Password</label>
                                  <input type="password" class="form-control" id="input-3" placeholder="Masukkan Password" value="<?=$this->encryption->decrypt($user->password)?>" name="password">
                                </div>
                                <div class="form-group">
                                  <label for="input-4">Confirm Password</label>
                                  <input type="password" class="form-control" id="input-4" placeholder="Confirm Password" name="confirm" value="<?=$this->encryption->decrypt($user->password)?>">
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