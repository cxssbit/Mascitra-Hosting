        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-8 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Pesan</strong>
                            </div>
                            <div class="card-body">
                                <div class="mb-5">
                                    <p><small>From &nbsp&nbsp&nbsp&nbsp: </small><?=$message->name?></p>
                                    <p><small>Email &nbsp&nbsp&nbsp&nbsp: </small><?=$message->email?></p>
                                    <p><small>Tanggal : </small><?=$message->timestamp?></p>
                                    <hr>
                                    <p><strong><?=$message->subject?></strong></p>
                                    <p><?=$message->message?></p> 
                                </div>
                                <hr> 
                                <div class="float-right">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                      <a class='btn btn-danger px-3' href="<?=base_url('message')?>">Kembali</a>
                                      <a class='btn btn-primary px-3' href="<?=base_url('index.php/user/ubah/')?>">Balas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div>