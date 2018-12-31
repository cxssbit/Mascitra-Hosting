    <!-- Page Title Area Start -->
    <div id="pageTitle" class="bg--overlay" data-bg-img="<?=base_url()?>assets/img/page-header-img/bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title">
                        <h2>Kontak</h2>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <ul class="breadcrumb">
                        <li><span>You are here:</span></li>
                        <li><a href="#">Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title Area End -->
    
    <!-- Contact Area Start -->
    <div id="contact" class="page">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <!-- Contact Address Area Start -->
                    <div class="contact-address">
                        <h2>Alamat Kontak</h2>
                        
                        <!-- Contact Address Start -->
                        <address>
                            <p><i class="fa fa-home"></i> Jl. Nusantara GF-7A, Kaliwates, Jember, Jawa Timur, Indonesia.</p>
                            <p><i class="fa fa-envelope"></i> info@mascitra.com</p>
                            <p><i class="fa fa-phone"></i> +62 331-4350050</p>
                            <p><i class="fa fa-fax"></i> +62 331-4350327</p>
                        </address>
                        <!-- Contact Address Area End -->
                        
                        <!-- Contact Social Links Start -->
                        <div class="contact-social-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-feed"></i></a></li>
                            </ul>
                        </div>
                        <!-- Contact Social Links End -->
                    </div>
                    <!-- Contact Address Area End -->
                </div>
                <div class="col-sm-6 contact-form">
                    <form action="<?=base_url()?>assets/index.php/Contact_c/simpan" method="post" >
                        <div class="contact-form-status"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-info btn-lg">SEND</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Area End -->
    
    <!-- Contact Actions Start -->
    <div id="contactActions">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="ca-holder">
                        <div class="ca-icon"><i class="fa fa-envelope"></i></div>
                        <h4 class="ca-text">Email Support</h4>
                        <p class="sum">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae reprehenderit impedit aut facilis!</p>
                        <a href="#" class="btn">Send Email</a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="ca-holder">
                        <div class="ca-icon"><i class="fa fa-comments"></i></div>
                        <h4 class="ca-text">Live Chat</h4>
                        <p class="sum">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae reprehenderit impedit aut facilis!</p>
                        <a href="#" class="btn">Start Chat</a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="ca-holder">
                        <div class="ca-icon"><i class="fa fa-headphones"></i></div>
                        <h4 class="ca-text">Call Center</h4>
                        <p class="sum">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae reprehenderit impedit aut facilis!</p>
                        <a href="#" class="btn">Call Center</a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="ca-holder">
                        <div class="ca-icon"><i class="fa fa-clipboard"></i></div>
                        <h4 class="ca-text">Support Ticket</h4>
                        <p class="sum">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae reprehenderit impedit aut facilis!</p>
                        <a href="#" class="btn">Submit A Ticket</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Actions End -->
    
    <!-- MAP Area Start -->
    <div id="map" data-map-latitude="23.790546" data-map-longitude="90.375583" data-map-zoom="16" data-map-marker="[[23.790546, 90.375583]]"></div>
    <!-- MAP Area End -->