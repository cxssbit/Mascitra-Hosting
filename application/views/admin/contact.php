       <div class="content">
            <div class="animated fadeIn">
              <form action="<?=base_url('contact/manager')?>" method="post">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Kontak</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                  <textarea class="form-control" id="editor1" rows="10" cols="80" name="contact"><?=$this->ContactModel->get('address')?></textarea>
                                </div>
                                <div class="row">
                                <div class="form-group col-md-6">
                                  <label for="input-1">E-Mail</label>
                                  <input type="text" class="form-control" id="input-1" placeholder="info@mascitra.com" name="email" value="<?=$this->ContactModel->get('email')?>">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="input-2">Phone</label>
                                  <input type="text" class="form-control" id="input-2" placeholder="081230033880" name="phone" value="<?=$this->ContactModel->get('phone')?>">
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Social Media</strong>
                            </div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label class=" form-control-label">Facebook</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fab fa-facebook"></i></div>
                                        <input class="form-control" value="<?=$this->SocialModel->get('facebook')?>" name="facebook">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Twitter</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fab fa-twitter"></i></i></div>
                                        <input class="form-control" value="<?=$this->SocialModel->get('twitter')?>" name="twitter">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Google+</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fab fa-google-plus"></i></div>
                                        <input class="form-control" value="<?=$this->SocialModel->get('gplus')?>" name="gplus">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Instagram</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fab fa-instagram"></i></div>
                                        <input class="form-control" value="<?=$this->SocialModel->get('instagram')?>" name="instagram">
                                    </div>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary btn-block" name="submit" value="submit">
                                    <i class="fa fa-save"></i>&nbsp; Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div><!-- .animated -->
        </div><!-- .content -->

