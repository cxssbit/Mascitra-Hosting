    <!-- Page Title Area Start -->
    <div id="pageTitle" class="bg--overlay" data-bg-img="<?=base_url()?>assets/img/page-header-img/bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title">
                        <h2>Blog</h2>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <ul class="breadcrumb">
                        <li><span>You are here:</span></li>
                        <li><a href="#">Home</a></li>
                        <li class="active">Blog</li>
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

                    <?php foreach($article as $data){?>
                    <!-- Blog Item Start -->
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <a href="#">
                                <img src="<?=base_url()?>assets/img/blog-img/img-1.jpg" alt="" class="img-responsive">
                            </a>
                        </div>
                        
                        <div class="blog-item-content">
                            <h2><a href="#"><?=$data->judul?></a></h2>
                            <div class="metadata">
                                <i class="fa fa-calendar"></i> <a href="#"><?=$data->tanggal?></a>
                                <span class="separator">|</span>
                                <i class="fa fa-user"></i> <a href="#">Themelooks</a>
                            </div>
                            <?=$data->isi?>
                            <br>
                            <a href="#" class="btn btn-custom">Read More</a>
                        </div>
                    </div>
                    <!-- Blog Item End -->
                    <?php } ?>

                    <!-- Pagination Start -->
                    <ul class="pagination">
                        <li><a href="#">&laquo;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                    <!-- Pagination End -->
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
                            <div class="row-holder">
                                <div class="right-col">
                                    <a class="footer-thumb-link" href="#">You shouldn't have to</a>
                                    <p class="footer-thumb-text">You shouldn't have to take our word for it. You sdfd read what iYou shouldn't have to take our word for it. You sdfd read what i </p>
                                    <span class="footer-thumb-date">Published ON: <span class="footer-thumb-text-italic">10 dec</span></span>
                                </div>
                            </div>
                            <div class="row-holder">
                                <div class="right-col">
                                    <a class="footer-thumb-link" href="#">You shouldn't have to</a>
                                    <p class="footer-thumb-text">You shouldn't have to take our word for it. You sdfd read what iYou shouldn't have to take our word for it. You sdfd read what i </p>
                                    <span class="footer-thumb-date">Published ON: <span class="footer-thumb-text-italic">10 dec</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Recent Posts Widget End -->
                    
                    <!-- Blog Categories Widget Start -->
                    <div class="widget categories">
                        <h3 class="widget-title">categories</h3>
                        <ul>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">UX Design</a></li>
                            <li><a href="#">UI Design</a></li>
                            <li><a href="#">UI Design</a></li>
                            <li><a href="#">Flat Design</a></li>
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