<?php
/**
 * Template Name: About Page
 */

get_header();
?>

    <section id="who-we-are" class="section">
            
        <div class="section-inner">
            
            <div class="container section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2 class="main-title">Who We Are?</h2>
                            <h3 class="sub-title">Some Things You Should Know About Us</h3>
                            <span class="section-line"></span>
                        </div>
                        <!-- //.section-title -->
                    </div>
                </div>
                <!-- //.row -->

                <div class="row">
                    <div class="col-md-6">
                        <div id="carousel-who-we-are" class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="assets/img/who-we-are/who-we-are-image-1.jpg" alt="" class="img-responsive img-rounded"/>
                            </div>
                            <div class="item">
                                <img src="assets/img/who-we-are/who-we-are-image-2.jpg" alt="" class="img-responsive img-rounded"/>
                            </div>
                            <div class="item">
                                <img src="assets/img/who-we-are/who-we-are-image-3.jpg" alt="" class="img-responsive img-rounded"/>
                            </div>
                        </div>
                        <!-- //.owl-carousel -->
                    </div>

                    <div class="col-md-6">
                        <div class="who-we-are-text">
                            <h4>A Little About Our Past</h4>
                            <p><?php the_content(); ?></p>
                            <div class="page-scroll">
                                <a href="#" class="btn btn-lg btn-custom">Read More</a>
                            </div>
                        </div>
                        <!-- //.who-we-are-text -->
                    </div>
                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.section-inner -->
    </section>
    <!-- //END WHO WE ARE SECTION -->


    <!-- BEGIN COUNTERS SECTION -->
    <section id="counters" class="section section-bgtype-image">
    
        <div class="section-inner">
            
            <div class="bg-overlay"></div>
            
            <div class="container section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2 class="main-title">Little Known Facts!</h2>
                            <h3 class="sub-title">Some Of The Cool Facts About Us That Will Blow Your Mind</h3>
                            <span class="section-line"></span>
                        </div>
                        <!-- //.section-title -->
                    </div>
                </div>
                <!-- //.row -->

                <div class="row">
                    <div class="col-sm-6 col-md-3 text-center">
                        <div class="counter-item not-right-column top-column">
                            <i class="fa fa-thumbs-o-up fa-5x"></i>
                            <div class="inner-content">
                                <span class="number" data-from="2200" data-to="2780" data-refresh-interval="10">
                                    2200
                                </span>
                            </div>
                            <p>VISA</p>
                        </div>
                        <!-- //.counter-item -->
                    </div>

                    <div class="col-sm-6 col-md-3 text-center">
                        <div class="counter-item not-right-column top-column">
                            <i class="fa fa-smile-o fa-5x"></i>
                            <div class="inner-content">
                                <span class="number" data-from="330" data-to="487" data-refresh-interval="10">
                                    330
                                </span>
                            </div>
                            <p>Clients</p>
                        </div>
                        <!-- //.counter-item -->
                    </div>

                    <div class="col-sm-6 col-md-3 text-center">
                        <div class="counter-item not-right-column">
                            <i class="fa fa-coffee fa-5x"></i>
                            <div class="inner-content">
                                <span class="number" data-from="13300" data-to="13730" data-refresh-interval="10">
                                    13300
                                </span>
                            </div>
                            <p>Students</p>
                        </div>
                        <!-- //.counter-item -->
                    </div>

                    <div class="col-sm-6 col-md-3 text-center">
                        <div class="counter-item">
                            <i class="fa fa-gift fa-5x"></i>
                            <div class="inner-content">
                                <span class="number" data-from="10" data-to="154" data-refresh-interval="10">
                                    23
                                </span>
                            </div>
                            <p>Awards</p>
                        </div>
                        <!-- //.counter-item -->
                    </div>
                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.section-inner -->
    </section>
    <!-- //END COUNTERS SECTION -->



<?php
//get_sidebar();
get_footer(); 
?>