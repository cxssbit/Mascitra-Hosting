    <!-- Page Title Area Start -->
    <div id="pageTitle" class="bg--overlay" data-bg-img="<?=base_url()?>assets/img/page-header-img/bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title">
                        <h2>About Us</h2>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <ul class="breadcrumb">
                        <li><span>You are here:</span></li>
                        <li><a href="<?=base_url()?>">Home</a></li>
                        <li class="active">About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title Area End -->

    <!-- About Description Start -->
    <div class="about-description">
        <div class="container">
            <div class="row row-vc">
                <div class="col-md-6">
                    <div class="about-desc-img">
                        <img src="<?=base_url()?>assets/img/about-img/about.jpg" alt="" class="img-responsive center-block">
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="about-desc-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quisquam omnis quia incidunt aliquid quam itaque libero, in, culpa tempora nesciunt neque eos similique, dolorem amet ipsa eius praesentium nihil. Blanditiis tenetur error enim incidunt et, molestias qui consequuntur ullam magnam quae aliquam, laudantium labore vel quam minima commodi? Perspiciatis veritatis, consectetur mollitia. Pariatur, possimus veritatis in eaque nobis, vitae!</p>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quisquam omnis quia incidunt aliquid quam itaque libero, in, culpa tempora nesciunt neque eos similique, dolorem amet ipsa eius praesentium nihil. Blanditiis tenetur error enim incidunt et, molestias qui consequuntur ullam magnam quae aliquam, laudantium labore vel quam minima commodi? Perspiciatis veritatis, consectetur mollitia. Pariatur, possimus veritatis in eaque nobis, vitae!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Description End -->
    
    <!-- Counter Area Start -->
    <div class="counter bg--overlay" data-bg-img="<?=base_url()?>assets/img/counter-img/bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-xs-6">
                    <!-- Counter Item Start -->
                    <div class="counter-holder">
                        <div class="counter-icon"><i class="fa fa-at"></i></div>
                        <p class="counter-text">Domains Registered</p>
                        <div class="counter-number" data-counter-up="true">2,500</div>
                    </div>
                    <!-- Counter Item End -->
                </div>
                
                <div class="col-sm-3 col-xs-6">
                    <!-- Counter Item Start -->
                    <div class="counter-holder">
                        <div class="counter-icon"><i class="fa fa-smile-o"></i></div>
                        <p class="counter-text">Happy Clients</p>
                        <div class="counter-number" data-counter-up="true">400</div>
                    </div>
                    <!-- Counter Item End -->
                </div>
                
                <div class="col-sm-3 col-xs-6">
                    <!-- Counter Item Start -->
                    <div class="counter-holder">
                        <div class="counter-icon"><i class="fa fa-code"></i></div>
                        <p class="counter-text">Line of Code</p>
                        <div class="counter-number" data-counter-up="true">9,478,815</div>
                    </div>
                    <!-- Counter Item End -->
                </div>
                
                <div class="col-sm-3 col-xs-6">
                    <!-- Counter Item Start -->
                    <div class="counter-holder">
                        <div class="counter-icon"><i class="fa fa-coffee"></i></div>
                        <p class="counter-text">Cup of Tea</p>
                        <div class="counter-number" data-counter-up="true">78,815</div>
                    </div>
                    <!-- Counter Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Area End -->
    
    <!-- Team Area Start -->
    <div id="team">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title">
                <h2>Our Team</h2>
            </div>
            <!-- Section Title End -->
            
            <div class="row">
                <?php foreach($team as $data){?>
                <div class="col-md-3 col-sm-6">
                    <!-- Team Member Item Start -->
                    <div class="team-item">
                        <div class="team-img">
                            <!-- Team Member Image Start -->
                            <img src="<?=base_url('assets/img/team-img/')?><?php if(empty($data->image)){echo '01.jpg';}else{echo $data->image;}?>" alt="" class="img-responsive">
                            <!-- Team Member Image End -->
                            
                            <!-- Team Member Social Links Start -->
                            <div class="team-social-links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Member Social Links End -->
                        </div>
                        
                        <!-- Team Member Info Start -->
                        <div class="team-info">
                            <h2><?=$data->name?></h2>
                            <p><?=$data->position?></p>
                            <div class="text-center">
                        <?php $array=explode(',',$data->skill); for($i=0;$i<count($array);$i++){?>
                            <span class="badge badge-primary"><?=$array[$i]?></span>
                        <?php }?>
                    </div>
                            <small><?=$data->bio?></small>
                        </div>
                        <!-- Team Member Info End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <!-- Team Area End -->
    
    <!-- History Area Start -->
    <div id="history" class="bg--lightgray">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title">
                <h2>Our History</h2>
            </div>
            <!-- Section Title End -->
            
            <ul class="timeline">
                <li>
                    <div class="timeline-badge">
                        <i class="fa fa-circle"></i>
                    </div>
                    
                    <div class="timeline-panel">
                        <div class="timeline-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo accusantium dignissimos delectus veniam dolore eaque soluta, quam nostrum. Iste obcaecati, repellat impedit soluta. Quis rem ratione minima, dignissimos pariatur, atque!</p>
                        </div>
                        
                        <div class="timeline-footer">
                            <p class="text-right">2016</p>
                        </div>
                    </div>
                </li>

                <li class="timeline-inverted">
                    <div class="timeline-badge">
                        <i class="fa fa-circle"></i>
                    </div>
                    
                    <div class="timeline-panel">
                        <div class="timeline-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A nesciunt aspernatur repellendus accusantium sint nemo maxime alias quo qui voluptatum ratione fugit quisquam vel, nihil id minus impedit sequi! Eaque. Animi inventore, laboriosam ratione impedit nostrum doloribus esse itaque quos, dolores, ipsum sequi nisi sunt. Odit, iste at veritatis, quasi facere maxime sapiente quos dicta consectetur cupiditate iure dolor libero.</p>
                        </div>
                        
                        <div class="timeline-footer">
                            <p class="text-right">2015</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="timeline-badge">
                        <i class="fa fa-circle"></i>
                    </div>
                    
                    <div class="timeline-panel">
                        <div class="timeline-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae voluptatem mollitia nemo excepturi deserunt! Ipsum nisi, amet nostrum incidunt ipsam veritatis sapiente animi vitae veniam maxime modi, rerum. Illo, tenetur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam similique nam est sit voluptas, ipsum odio, molestiae maxime eveniet, omnis esse illum aliquam, perspiciatis numquam aspernatur in quasi cupiditate.</p>
                        </div>
                        
                        <div class="timeline-footer">
                            <p class="text-right">2014</p>
                        </div>
                    </div>
                </li>

                <li class="timeline-inverted">
                    <div class="timeline-badge">
                        <i class="fa fa-circle"></i>
                    </div>
                    
                    <div class="timeline-panel">
                        <div class="timeline-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, rerum ex illo, quasi sint cum blanditiis animi, quam nesciunt, maxime alias architecto tempora doloremque. Provident ad quae, reiciendis facere quibusdam.</p>
                        </div>
                        
                        <div class="timeline-footer">
                            <p class="text-right">2013</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="timeline-badge">
                        <i class="fa fa-circle"></i>
                    </div>
                    
                    <div class="timeline-panel">
                        <div class="timeline-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque veniam sequi excepturi architecto asperiores rem animi est odit aliquam sunt molestiae voluptas cum nisi culpa, cupiditate consequatur blanditiis iusto unde!Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        
                        <div class="timeline-footer">
                            <p class="text-right">2012</p>
                        </div>
                    </div>
                </li>

                <li  class="timeline-inverted">
                    <div class="timeline-badge">
                        <i class="fa fa-circle"></i>
                    </div>
                    
                    <div class="timeline-panel">
                        <div class="timeline-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit cumque, ipsa qui rerum libero enim et sunt quas voluptate nostrum ratione molestiae ea, optio quibusdam a laborum amet voluptatum animi.</p>
                        </div>
                        
                        <div class="timeline-footer primary">
                            <p class="text-right">2011</p>
                        </div>
                    </div>
                </li>
                <li class="clearfix no-float"></li>
            </ul>
        </div>
    </div>
    <!-- History Area End -->
    
    <!-- Testimonial Area Start -->
    <div id="testimonial">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title">
                <h2>Loved By <span data-counter-up="true">41169</span> Peoples</h2>
            </div>
            <!-- Section Title End -->
            
            <!-- Testimonial Slider Start -->
            <div class="testimonial-slider">
                <!-- Testimonial Item Start -->
                <div class="testimonial-item">
                    <div class="recommender-comment">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum similique ad, magnam, odit repellat reprehenderit. Consequatur consectetur aspernatur ad assumenda a. Aspernatur fugit numquam quod rerum sint facere ex ullam. A, blanditiis quod, tempore magni veniam perferendis aliquid vitae saepe.</p>
                    </div>
                    
                    <div class="recommender-img">
                        <img src="<?=base_url()?>assets/img/testimonial-img/01.jpg" alt="" class="img-responsive"/>
                    </div>
                    
                    <div class="recommender-info">
                        <span class="recommender-name">John Doe,</span>
                        <span class="recommender-role">Company</span>
                    </div>
                </div>
                <!-- Testimonial Item End -->
                
                <!-- Testimonial Item Start -->
                <div class="testimonial-item">
                    <div class="recommender-comment">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum similique ad, magnam, odit repellat reprehenderit. Consequatur consectetur aspernatur ad assumenda a. Aspernatur fugit numquam quod rerum sint facere ex ullam. A, blanditiis quod, tempore magni veniam perferendis aliquid vitae saepe.</p>
                    </div>
                    
                    <div class="recommender-img">
                        <img src="<?=base_url()?>assets/img/testimonial-img/02.jpg" alt="" class="img-responsive"/>
                    </div>
                    
                    <div class="recommender-info">
                        <span class="recommender-name">Mohammad Al Omayer,</span>
                        <span class="recommender-role">Company</span>
                    </div>
                </div>
                <!-- Testimonial Item End -->
                
                <!-- Testimonial Item Start -->
                <div class="testimonial-item">
                    <div class="recommender-comment">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum similique ad, magnam, odit repellat reprehenderit. Consequatur consectetur aspernatur ad assumenda a. Aspernatur fugit numquam quod rerum sint facere ex ullam. A, blanditiis quod, tempore magni veniam perferendis aliquid vitae saepe.</p>
                    </div>
                    
                    <div class="recommender-img">
                        <img src="<?=base_url()?>assets/img/testimonial-img/03.jpg" alt="" class="img-responsive"/>
                    </div>
                    
                    <div class="recommender-info">
                        <span class="recommender-name">Jane Doe,</span>
                        <span class="recommender-role">Company</span>
                    </div>
                </div>
                <!-- Testimonial Item End -->
            </div>
            <!-- Testimonial Slider End -->
        </div>
    </div>
    <!-- Testimonial Area End -->