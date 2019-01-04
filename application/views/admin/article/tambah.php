       <div class="content">
            <div class="animated fadeIn">
              <form action="<?=base_url('article/tambah')?>" method="post" enctype="multipart/form-data">
                <div class="row">
                  
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Buat Artikel Baru</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                  <label for="input-1">Judul</label>
                                  <input type="text" class="form-control" id="input-1" placeholder="Judul Article" name="judul">
                                </div>
                                <div class="form-group">
                                  <label for="input-7">Kategori</label>
                                  <input type="text" class="form-control" id="input-7" placeholder="Kategori" name="kategori" list="kategori">
                                  <datalist id="kategori">
                                    <?php foreach($kategori as $data){?>
                                    <option value="<?=$data->kategori?>">
                                    <?php }?>
                                  </datalist>
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
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="<?=base_url()?>assets/img/blog-img/img-1.jpg" alt="Article Image">
                            <div class="card-body">
                                <label for="input-5">Article Image</label>
                                <div class="input-group mb-3">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Pilih Image</label>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                </form>
            </div><!-- .animated -->
        </div><!-- .content -->

