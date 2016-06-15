 <!-- BEGIN FOOTER -->
    <footer class="footer" >
        <section id="footer" class="container" >
            <div class="col-sm-12 col-md-4 footer-column  not-right-column animated fadeInLeft">    
                
                        <div class="footer-text">
                            <h2>Contact</h2>
                            <ul class="icon-list list-unstyled">
                                <li>
                                    <i class="fa  fa-phone"></i> 
                                    <?php echo get_option('phone_1' ); ?>
                                </li>
                                <?php if(! strlen(get_option('phone_2' )) < 2): ?>
                                    <li>
                                        <i class="fa   fa-phone"></i>
                                        <?php echo get_option('phone_2' ); ?>
                                    </li>
                                <?php endif; ?>
                                <li>
                                    <i class="fa fa-envelope-o"></i>
                                    <?php echo get_option('contact_email' ); ?>
                                </li>
                                <li>
                                    <i class="fa  fa-map-marker"></i> 
                                    <?php echo get_option('office_location') ?>
                                </li>
                                <li>
                                    <i class="fa  fa-clock-o"></i> 
                                    <?php echo get_option('office_timing') ?>
                                </li>
                               
                            </ul>
                            <ul class="list-unstyled list-inline">
                                <li >
                                    <a href="<?php echo get_option('facebook_link') ?>" >
                                        <i class="fa fa-2x fa-facebook" style="color:#ededed"></i>
                                    </a>
                                </li>
                               
                            </ul>
                           
                        </div>
                        <!-- //.footer-text -->
                    
                    <!-- //.footer-column -->
                    
                    
                </div>
                <!-- //.row -->
            <?php if ( is_active_sidebar( 'footer-center-widget' ) ) : ?>
            
                <?php dynamic_sidebar( 'footer-center-widget' ); ?>
            
            <?php endif; ?>
            <?php if ( is_active_sidebar( 'footer-right-widget' ) ) : ?>
            
                <?php dynamic_sidebar( 'footer-right-widget' ); ?>
            
            <?php endif; ?>

        </section>
        <!-- //END FOOTER SECTION -->
        
        <!-- BEGIN COPYRIGHT -->
        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-12">
                        <p>&copy; <?php echo date('Y'); ?>  <a href="#"> Blue Origin</a> All Rights Reserved.</p>
                    </div>
                    <div class="col-md-3 col-sm-12 pull-right">
                        <span> Powered by: <a href="#">e-Pal Technologies</a></span>
                    </div>
                </div>
                <!-- //.row -->
            </div>
            <!-- //.container -->
        </div>
        <!-- //END COPYRIGHT -->
        
    </footer>
    <!-- //END FOOTER -->
    
   <?php wp_footer();  ?>
</body>
</html>