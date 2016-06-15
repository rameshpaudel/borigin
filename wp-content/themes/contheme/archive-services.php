<?php 
/*
* Template Name: Services
*
*/
get_header();
?>
    <!-- BEGIN OUR SERVICES SECTION -->
    <section id="services" class="section">


        <div class="section-inner">

            <div class="container section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3 class="main-title">Our Services</h3>
                            <h4 class="sub-title">We Are Experts In What We Do</h4>
                            <span class="section-line"></span>
                        </div>
                        <!-- //.section-title -->
                    </div>
                </div>
                <!-- //.row -->

                <div class="row">
              <?php
                //Fetching the testimonials
                $args = array('post_type' => 'services', 'posts_per_page' => 10);
                $services = new WP_Query($args);
                if ($services->have_posts()): while ($services->have_posts()): $services->the_post();
              ?>
                    <a href="<?php the_permalink(); ?>"class="col-sm-4 col-md-4 col-lg-4 margin-fix">
                        <div class="funny-box float-shadow not-right-column text-center">
                            <span class="funny-box-icon">
                                <i class="fa <?php echo types_render_field('service-icon') ?>"></i>
                            </span>
                            <div class="funny-box-text">
                                <h4><?php the_title();?></h4>
                                <div class="cramp-3"><?php the_excerpt();?></div>
                            </div>
                            <!-- //.funny-box-text -->
                        </div>
                        <!-- //.funny-box -->
                    </a>
                  <?php
                endwhile;
                endif; ?>
                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.section-inner -->
    </section>
    <!-- //END OUR SERVICES SECTION -->
<?php 
get_footer();