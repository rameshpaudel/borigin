<?php
/**
 * Template Name: Contact Page
 */

get_header();
?>
<section id="contact-us" class="section section-bgtype-image">
        
        <div class="section-inner">
            
            <div class="bg-overlay"></div>
            
            <div class="container section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3 class="main-title">Contact Us</h3>
                            <h4 class="sub-title">We’d love to hear from you. Please, fill out the form below with some info about you and feel free to ask us any queries if you have. We will get back to you as soon as we can.</h4>
                            <span class="section-line"></span>
                        </div>
                        <!-- //.section-title -->
                    </div>
                </div>
                <!-- //.row -->
                
                <div class="row">
                    <form role="form" class="contact-us-form">
                        <div class="col-md-5 col-md-offset-1">
                            <div class="form-group">
                                <label for="name">Name*</label>
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" id="name" class="form-control">
                                </div>
                                <!-- //.input-group -->
                            </div>
                            <!-- //.form-group -->
                            
                            <div class="form-group">
                                <label for="email">Email*</label>
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                    <input type="email" id="email" class="form-control">
                                </div>
                                <!-- //.input-group -->
                            </div>
                            <!-- //.form-group -->
                            
                            <div class="form-group form-group-bottom">
                                <label for="subject">Phone*</label>
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                                    <input type="text" id="subject" class="form-control">
                                </div>
                                <!-- //.input-group -->
                            </div>
                            <!-- //.form-group -->
                        </div>
                        
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="message">Message*</label>
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                    <textarea id="message" class="form-control"></textarea>
                                </div>
                                <!-- //.input-group -->
                            </div>
                            <!-- //.form-group -->
                            
                            <div class="form-group form-group-bottom">
                                <button type="submit" class="btn btn-lg btn-custom">Send Message</button>
                            </div>
                            <!-- //.form-group -->
                        </div>
                    </form>
                </div>
                <!-- //.row -->
                
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="social-icon-text text-center">
                            <h2>OR</h2>
                            <h4>Find Us On Social Media!</h4>
                            <ul class="social-icon-list list-unstyled list-inline text-center">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li class="hidden-xs"><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- //.social-icon-text -->
                    </div>
                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.section-inner -->
        
</section>
<?php get_footer(); ?>