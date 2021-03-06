<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=580723779032817&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

    <!-- Page Title Area Start -->
    <div id="pageTitle" class="bg--overlay" data-bg-img="<?=site_url()?>assets/img/blog-img/<?=$article->image?>">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title">
                        <h2>Blog Details</h2>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <ul class="breadcrumb">
                        <li><span>You are here:</span></li>
                        <li><a href="#">Home</a></li>
                        <li class="active">Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title Area End -->
    
    <!-- Blog Area Start -->
    <div id="blog" class="page">
        <div class="container">
            <div class="row">
                <!-- Blog Content Area Start -->
                <div class="col-md-8 blog-page-content">
                    <div class="blog-item full-post">
                        <div class="blog-item-img">
                            <img src="<?=site_url()?>assets/img/blog-img/<?=$article->image?>" alt="" class="img-responsive">
                        </div>
                        <div class="blog-item-content">
                            <h2><?=$article->judul?></h2>
                            <div class="metadata">
                                <i class="fa fa-calendar"></i> <a href="#"><?=$article->tanggal?></a>
                                <span class="separator">|</span>
                                <i class="fa fa-user"></i> <a href="#">Themelooks</a>
                            </div>
                            <?=$article->isi?>
                        </div>

                        <p><span class="post-category-text">CATEGORY:</span><a href="<?=base_url('blog/kategori/'.$article->kategori)?>" class="category-link"><?=$article->kategori?></a></p>

                        <div class="tags">
                            <ul>
                                <li><strong>Tags:</strong></li>
                                <li><a href="#" class="btn btn-custom">Awesome</a></li>
                                <li><a href="#" class="btn btn-custom">Blog</a></li>
                                <li><a href="#" class="btn btn-custom">ThemeLooks</a></li>
                                <li><a href="#" class="btn btn-custom">Creative</a></li>
                                <li><a href="#" class="btn btn-custom">ComeLooks</a></li>
                            </ul>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="post-author-metadata">
                                    <img src="<?=site_url()?>assets/img/blog-img/author.jpg" alt="">
                                    <a href="#" class="post-author-name">Admin</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="post-social-links">
                                    <ul>
                                        <?php $this->load->view('layout/social')?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mx-auto">
                            <div class="fb-comments" data-href="<?=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"?>" data-width="100%" data-numposts="5"></div>
                        </div>
                    </div>
                </div>
                <!-- Blog Content Area End -->
                <!-- Blog Sidebar Area Start -->
                <div class="col-md-4 blog-page-sidebar">
                    <!-- Blog Search Widget Start -->
                    <div class="widget search">
                        <div data-form-validation="true">
                            <form action="404.php" method="post">
                                <div class="input-group">
                                    <input type="text" placeholder="Search" class="form-control" required>
                                    <span class="input-group-addon"><button type="submit"><i class="fa fa-search"></i></button></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Blog Search Widget End -->
                    
                    <!-- Blog Recent Posts Widget Start -->
                    <div class="widget recent-items">
                        <h2 class="widget-title">recent posts</h2>
                        <div class="footer-thumb m-t-15">
                            <?php foreach ($recent as $data) {?>
                            <div class="row-holder">
                                <div class="right-col">
                                    <a class="footer-thumb-link" href="<?=site_url('blog/page/'.$data->url)?>"><?=character_limiter($data->judul,40)?></a>
                                    <p class="footer-thumb-text"><?=character_limiter(strip_tags($data->isi),100)?></p>
                                    <span class="footer-thumb-date">Published ON: <?=$data->tanggal?></span>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                    <!-- Blog Recent Posts Widget End -->
                    
                    <!-- Blog Categories Widget Start -->
                    <div class="widget categories">
                        <h3 class="widget-title">categories</h3>
                        <ul>
                            <li><a href="<?=base_url('blog')?>">Semua</a></li>
                            <?php foreach($kategori as $data){?>
                            <li><a href="<?=base_url('blog/kategori/'.$data->kategori)?>"><?=$data->kategori?></a></li>
                            <?php }?>
                        </ul>
                    </div>
                    <!-- Blog Categories Widget End -->
                    
                    <!-- Blog Archives Widget Start -->
                    <div class="widget archives">
                        <h3 class="widget-title">archives</h3>
                        <ul>
                            <li><a href="#">September 2015</a></li>
                            <li><a href="#">October 2015</a></li>
                            <li><a href="#">November 2015</a></li>
                            <li><a href="#">December 2015</a></li>
                            <li><a href="#">January 2016</a></li>
                        </ul>
                    </div>
                    <!-- Blog Archives Widget End -->
                    
                    <!-- Blog Tags Widget Start -->
                    <div class="widget tags">
                        <h3 class="widget-title">tags</h3>
                        <ul>
                            <li><a href="#">business</a></li>
                            <li><a href="#">agency</a></li>
                            <li><a href="#">creative</a></li>
                            <li><a href="#">portfolio</a></li>
                            <li><a href="#">coporate</a></li>
                            <li><a href="#">website</a></li>
                            <li><a href="#">business website</a></li>
                            <li><a href="#">coporate website</a></li>
                        </ul>
                    </div>
                    <!-- Blog Tags Widget End -->
                </div>
                <!-- Blog Sidebar Area End -->
            </div>
        </div>
    </div>
    <!-- Blog Area End -->