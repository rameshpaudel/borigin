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
                            <?php echo types_render_field('first-image'); ?>
                            </div>
                            <div class="item">
                            <?php echo types_render_field('second-image'); ?>
                                
                            </div>
                            <div class="item">
                               <?php echo types_render_field('second-image'); ?>
                            </div>
                        </div>
                        <!-- //.owl-carousel -->
                    </div>

                    <div class="col-md-6">
                        <div class="who-we-are-text">
                            <p><?php echo $post->post_content; ?></p>
                            
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


   <!-- BEGIN CONTENT BOXES SECTION -->
    <section id="why-us" class="section">
        
        <div class="section-inner">
            
            <div class="container section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2 class="main-title">Why Choose Us?</h2>
                            <h3 class="sub-title">Six Reasons Why We are the best</h3>
                            <span class="section-line"></span>
                        </div>
                        <!-- //.section-title -->
                    </div>
                </div>    
                <!-- //.row -->

                <div class="row">
                <?php
                //Fetching the testimonials
                $args = array('post_type' => 'why-choose-us', 'posts_per_page' => 6);
                $reasons = new WP_Query($args);
                if ($reasons->have_posts()): while ($reasons->have_posts()): $reasons->the_post();
                        ?>
                    <div class="col-sm-4 col-md-4">
                        <div class="content-box style-one top-column clearfix">
                            <span class="content-box-icon">
                                <i class="fa <?php echo types_render_field('service-icon') ?>"></i> 
                            </span>
                            <div class="content-box-text">
                                <h4><?php the_title(); ?></h4>
                                <p><?php the_content(); ?></p>
                            </div>
                            <!-- //.content-box-text -->
                        </div>
                        <!-- //.content-box -->
                    </div>
                <?php 
                endwhile; 
                endif;?>
                 
                </div>
                <!-- //.row -->

             
                <!-- //.row -->              
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.section-inner -->
    </section>
    <!-- //END CONTENT BOXES SECTION -->



<?php
//get_sidebar();
get_footer(); 
?>