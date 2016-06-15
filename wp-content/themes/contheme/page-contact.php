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
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>

                </div>
               
                <!-- //.row -->
                
                <!-- //.row -->
            </div>
              
            <!-- //.section-content -->
        </div>
        <!-- //.section-inner -->
        
</section>

<section class="section section-bgtype-image">
    <div class="section-inner map">
        <div id="wpgmza_map">
            <?php do_shortcode('[wpgmza id="1"]'); ?>
        </div>
        <div class="facebook">
            <?php echo do_shortcode('[facebook-page href="https://facebook.com/Blue-Origin-Education-Research-Training-Center-Pvt-Ltd-1646208815666824" width="300" height="400" tabs="timeline, events, messages" show_cta="true" small_header="true" align="center" hide_cover="false" show_facepile="false"]'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>