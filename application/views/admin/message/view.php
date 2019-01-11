        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-8 mx-auto">
                        <div class="card mb-3">
                            <div class="weather-category twt-category">
                                <ul>
                                    <li class="active">
                                        From
                                        <h5><?=$message->name?></h5>
                                    </li>
                                    <li>
                                        E-Mail
                                        <h5><?=$message->email?></h5>
                                    </li>
                                    <li>
                                        Tanggal
                                        <h5><?=$message->timestamp?></h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card my-0">
                            <div class="card-body text-center">
                                <div class="my-4">
                                    <p><strong><?=$message->subject?></strong></p>
                                    <p><?=$message->message?></p> 
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-body">
                                <a class='btn btn-sm btn-danger px-3' href="<?=base_url('message')?>">Kembali</a>
                                <div class="float-right">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                      <button class='btn btn-sm btn-danger px-3' data-toggle="modal" data-target="#hapus">Hapus</button>
                                      <a class='btn btn-sm btn-primary px-3' href="<?=base_url('index.php/user/ubah/')?>">Balas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div>

  <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
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
                    Pesan ini akan dihapus secara Permanent..
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a href="<?=base_url('/message/hapus/'.$message->id)?>" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>