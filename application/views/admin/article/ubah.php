       <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <?php  echo form_open("article/ubah/".$article->id); ?>
                            <div class="form-group">
                              <div class="form-row">
                                <div class="col-md-6">
                                  <div class="form-label-group">
                                     <input value="<?php echo set_value('judul', $article->judul); ?>" type="text" id="username" name ="judul" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
                              </div>
                            </div></div><br>
                            <div class="form-group">
                              <div class="form-row">
                                <div class="col-md-6">
                                  <div class="form-label-group">
                                 <textarea type="text" id="email" name ="isi" class="form-control" placeholder="isi" required="required" autofocus="autofocus"><?php echo set_value('isi', $article->isi); ?></textarea>
                              </div>
                             
                            </div></div></div>
                            <?php $tanggal = date("Y-m-d H:i:s"); ?>
                             <div class="form-group">
                              <div class="form-row">
                                <div class="col-md-6">
                                  <div class="form-label-group">
                                 <input type="text" id="password" name ="tanggal" class="form-control" placeholder="Tanggal" required="required" autofocus="autofocus" value="<?=$tanggal?>">
                               
                              </div>
                            </div></div></div>
                            <div class="form-group">
                              <div class="form-label-group">
                                <div class="form-row">
                                <div class="col-md-6">
                            <select name="kategori" id="kategori" class="form-control">
                              <?php if( ! empty($kategori)){ 
                                 foreach($kategori as $kat){ ?>
                             <option value="<?= $kat->kategori ?>"><?php echo"$kat->kategori"; ?></option>
                            <?php }}?>
                            </select></div></div></div></div>
                            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Edit">
                             <?php echo form_close();?>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

