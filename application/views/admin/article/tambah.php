       <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Buat Artikel Baru</strong>
                            </div>
                            <div class="card-body">
                              <form action="<?=base_url('article/tambah')?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                  <label for="input-1">Judul</label>
                                  <input type="text" class="form-control" id="input-1" placeholder="Judul Article" name="judul">
                                </div>
                                <label for="input-5">Image</label>
                                <div class="input-group mb-3">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="input-5" name="image">
                                    <label class="custom-file-label" for="input-5">Pilih File</label>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="input-2">Tanggal</label>
                                  <input type="text" class="form-control" id="input-2" placeholder="yy/mm/dd hh:ii:ss" name="tanggal" value="<?=date("Y/m/d")?> <?=date("h:i:s")?>">
                                </div>
                                <div class="form-group">
                                  <label for="editor1">Isi</label>
                                  <textarea class="form-control" id="editor1" rows="10" cols="80" name="isi"></textarea>
                                </div>
                                <a href="<?=base_url('article')?>" class="btn btn-danger">
                                    <i class="fa fa-sign-out"></i>&nbsp; Batal
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

