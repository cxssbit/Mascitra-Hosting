
        <div class="content mb-5">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Team</strong>
                                <a href="<?=base_url('team/tambah')?>" class="btn btn-primary btn-outline-primary btn-sm float-right">
                                    <i class="fa fa-plus"></i>&nbsp; Tambah Anggota
                                </a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Skill</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=0;foreach($team as $data){$no++;?>
                                      <tr>
                                        <td class="text-center"><?=$no?></td>
                                        <td><?=$data->name?></td>
                                        <td><?=$data->position?></td>
                                        <td>
                                            <?php $array=explode(',',$data->skill); for($i=0;$i<count($array);$i++){?>
                                                <span class="badge badge-primary"><?=$array[$i]?></span>
                                            <?php }?>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                              <a class='btn btn-primary btn-sm' href="<?=base_url('index.php/team/ubah/'.$data->id)?>">Ubah</a>
                                              <button class='btn btn-primary btn-sm' data-toggle="modal" data-target="#lihat-<?=$data->id?>">Lihat</button>
                                              <button class='btn btn-danger btn-sm' data-toggle="modal" data-target="#hapus-<?=$data->id?>">Hapus</button>
                                            </div>
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

<?php foreach($team as $data){?>
  <div class="modal fade" id="hapus-<?=$data->id?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="smallmodalLabel">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p>
                    Data ini akan dihapus secara Permanent..
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a href="<?=base_url('index.php/team/hapus/'.$data->id)?>" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<?php foreach($team as $data){?>
  <div class="modal fade" id="lihat-<?=$data->id?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <i class="fa fa-user"></i><strong class="card-title pl-2">Profile Card</strong>
                <button type="button" class="close float-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                 </button>
            </div>
            <div class="modal-body">
                <div class="mx-auto d-block">
                    <img class="rounded-circle mx-auto d-block w-50" src="<?=base_url('assets/img/team-img/')?><?php if(empty($data->image)){echo '01.jpg';}else{echo $data->image;}?>" alt="Card image cap">
                    <h5 class="text-sm-center mt-5 mb-1"><strong><?=$data->name?></strong></h5>
                    <div class="location text-sm-center"><i class="fas fa-briefcase"></i> <?=$data->position?></div>
                    <hr>
                    <div class="text-center">
                        <?php $array=explode(',',$data->skill); for($i=0;$i<count($array);$i++){?>
                            <span class="badge badge-primary"><?=$array[$i]?></span>
                        <?php }?>
                    </div>
                </div>
                <hr>
                <div class="card-text text-sm-center">
                    <a href="<?=$data->facebook?>"><i class="fab fa-facebook pr-1"></i></a>
                    <a href="<?=$data->twitter?>"><i class="fab fa-twitter pr-1"></i></a>
                    <a href="<?=$data->gplus?>"><i class="fab fa-google-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>