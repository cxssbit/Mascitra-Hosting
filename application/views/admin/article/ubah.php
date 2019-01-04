       <div class="content">
            <div class="animated fadeIn">
              <form action="<?=base_url('article/ubah/')?><?=$article->id?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Tambah Article Baru</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                  <label for="input-1">Judul</label>
                                  <input type="text" class="form-control" id="input-1" placeholder="Judul Artikel" value="<?=$article->judul?>" name="judul">
                                </div>
                                <div class="form-group">
                                  <label for="input-2">Tanggal</label>
                                  <input type="text" class="form-control" id="input-2" placeholder="dd/mm/yy hh:ii:ss" value="<?=$article->tanggal?>" name="tanggal">
                                </div>
                                <div class="form-group">
                                  <label for="input-7">Kategori</label>
                                  <input type="text" class="form-control" id="input-7" placeholder="Kategori" name="kategori" list="kategori" value="<?=$article->kategori?>">
                                  <datalist id="kategori">
                                    <?php foreach($kategori as $kat){?>
                                    <option value="<?=$kat->kategori?>">
                                    <?php }?>
                                  </datalist>
                                </div>
                                <div class="form-group">
                                  <label for="input-3">Isi</label>
                                  <textarea class="form-control" id="editor1" rows="10" cols="80" name="isi"><?=$article->isi?></textarea>
                                </div>
                                <a href="<?=base_url('article')?>" class="btn btn-danger">
                                    <i class="fa fa-sign-out"></i>&nbsp; cancel
                                </a>
                                <button type="submit" class="btn btn-primary float-right" name="submit" value="submit">
                                    <i class="fa fa-save"></i>&nbsp; Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" height="200" id="preview" src="<?=base_url()?>assets/img/blog-img/<?=$article->image?>" alt="Article Image">
                            <div class="card-body">
                                <label for="input-5">Article Image</label>
                                <div class="input-group mb-3">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <input type="hidden" name="n_image" value="<?=$article->image?>">
                                    <label class="custom-file-label" for="image"><p id="awaw">Pilih Image</p></label>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div><!-- .animated -->
        </div><!-- .content -->