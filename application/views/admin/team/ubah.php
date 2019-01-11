       <div class="content">
            <div class="animated fadeIn">
              <form action="<?=base_url('team/ubah/'.$team->id)?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Update Anggota</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                  <label for="input-1">Nama</label>
                                  <input type="text" class="form-control" id="input-1" placeholder="Nama" name="name" value="<?=$team->name?>">
                                </div>
                                <div class="form-group">
                                  <label for="input-2">Jabatan</label>
                                  <input type="text" class="form-control" id="input-2" placeholder="Jabatan" name="position" value="<?=$team->position?>">
                                </div>
                                <div class="form-group">
                                  <label for="input-3">Skill</label>
                                  <input type="text" id="multiple" placeholder="Skill" name="skill" value="<?=$team->skill?>">
                                </div>
                                <div class="form-group">
                                  <label for="editor1">Bio</label>
                                  <textarea class="form-control" rows="10" cols="80" name="bio"><?=$team->bio?></textarea>
                                </div>
                                <a href="<?=base_url('team')?>" class="btn btn-danger">
                                    <i class="fa fa-sign-out"></i>&nbsp; Cancel
                                </a>
                                <button type="submit" class="btn btn-primary float-right" name="submit" value="submit">
                                    <i class="fa fa-save"></i>&nbsp; Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" height="200" id="preview" src="<?=base_url()?>assets/img/team-img/<?php if(empty($team->image)){echo '01.jpg';}else{echo $team->image;}?>" alt="Profile Image">
                            <div class="card-body">
                                <label for="input-5">Profile Image</label>
                                <div class="input-group">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image"><p id="awaw">Pilih Image</p></label>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Social Media</strong>
                            </div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label class=" form-control-label">Facebook</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fab fa-facebook"></i></div>
                                        <input class="form-control" name="facebook" value="<?=$team->facebook?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Twitter</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fab fa-twitter"></i></i></div>
                                        <input class="form-control" name="twitter" value="<?=$team->twitter?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Google+</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fab fa-google-plus"></i></div>
                                        <input class="form-control" name="gplus" value="<?=$team->gplus?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </form>
            </div><!-- .animated -->
        </div><!-- .content -->