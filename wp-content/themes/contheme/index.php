<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * subpackage Twenty_Sixteen
 * since Twenty Sixteen 1.0
 */

get_header();
?>
<div class="slider">
        <div class="owl-carousel" data-items="1" data-auto-play="3000" data-pagination="false" data-single-item="true">
              <?php

            wp_reset_query();
            $args = array('post_type' => 'slider', 'posts_per_page' => 3);
            $images = array();
            $x = 0;
            $slider = new WP_Query($args);
            if ($slider->have_posts()): while ($slider->have_posts()): $slider->the_post();
                    ?>
            <div class="wow animated bounceIn slider-content">
                <h1><?php the_title( ); ?></h1>
                <h3><?php the_content( ); ?></h3>
                <?php if (has_post_thumbnail()) : ?>
                    <?php $images[$x] = wp_get_attachment_image_src( get_post_thumbnail_id( $slider->ID ),'full'); ?>

                <?php endif; ?>
            </div>
        <?php
        $x++;
        endwhile; endif; ?>
        </div>
    </div>

        <?php
        $allImages = '';
         foreach ($images as $key => $value) {

            $allImages .= "'".$value[0]."'".',';

        }
    ?>

    <script>

    var slidingImages = [
    <?php echo $allImages; ?>
    ];
    </script>
    <section class="section callout">
        <div class="section-inner">
            <div class="container section-content">
                <div class="row">
                    <div class="col-md-10 col-sm-12">
                        <h2>Get your career advice from the experts</h2>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <a href="<?php echo site_url('/contact' ); ?>" class="btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BEGIN OUR SERVICES SECTION -->
    <section id="services" class="section">


        <div class="section-inner">

            <div class="container section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="home section-title text-center">
                            <h3 class="main-title">Our Services</h3>
                            <h4 class="sub-title">We Are Experts In What We Do</h4>
                            <span class="section-line"></span>
                        </div>
                        <!-- //.home section-title -->
                    </div>
                </div>
                <!-- //.row -->

                <div class="row">
              <?php
                $args = array('post_type' => 'services', 'posts_per_page' => 3);
                $services = new WP_Query($args);
                if ($services->have_posts()): while ($services->have_posts()): $services->the_post();
		      ?>
    		        <a href="<?php the_permalink(); ?>" class="col-sm-12 col-md-4 col-lg-4">
    		            <div class="funny-box float-shadow not-right-column text-center">
    		                <span class="funny-box-icon">
    		                    <i class="fa <?php echo types_render_field('service-icon') ?>"></i>
    		                </span>
    		                <div class="funny-box-text">
    		                    <h4><?php the_title();?></h4>
    		                    <span class="cramp-3"><?php the_excerpt();?></span>
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
 <!-- BEGIN CONTENT BOXES SECTION -->
    <section id="why-us" class="section">

        <div class="section-inner">

            <div class="container section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="home section-title text-center">
                            <h2 class="main-title">Why Choose Us?</h2>
                            <h3 class="sub-title">Why we are the best</h3>
                            <span class="section-line"></span>
                        </div>
                        <!-- //.home section-title -->
                    </div>
                </div>
                <!-- //.row -->

                <div class="row">
                <?php
                //Fetching the testimonials
                $args = array('post_type' => 'why-choose-us', 'posts_per_page' => 3);
                $reasons = new WP_Query($args);
                if ($reasons->have_posts()): while ($reasons->have_posts()): $reasons->the_post();
                        ?>
                    <div class="col-sm-12 col-md-4">
                        <div class="content-box  top-column clearfix">
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


<section  class="section">

        <div class="section-inner">

            <div class="container section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="home section-title text-center">
                            <h3 class="main-title">Testimonials</h3>
                            <h3 class="sub-title">Our  Success Stories</h3>
                            <span class="section-line"></span>
                        </div>
                        <!-- //.home section-title -->
                    </div>
                </div>
                <!-- //.row -->

                <div class="row">
                <?php
                //Fetching the testimonials
                wp_reset_query();
                $args = array('post_type' => 'testimonial', 'posts_per_page' => 3);
                $testimonial = new WP_Query($args);
                if ($testimonial->have_posts()): while ($testimonial->have_posts()): $testimonial->the_post();
                    $imgsrc =  wp_get_attachment_thumb_url( get_post_thumbnail_id($testimonial->ID) );
                		?>
                    <div class="col-sm-12 col-md-4">
                        <div class="testimonial text-center not-right-column">
                            <div class="testimonial-box">
                                <p><?php the_content();?></p>
                            </div>
                            <div class="circle-overlay">
                                <img src="<?php echo $imgsrc; ?>" alt="<?php the_title(); ?>">
                            </div>
                            <h4><?php the_title();?></h4>
                            <h5><?php echo types_render_field('testimonial-position') ?></h5>
                        </div>
                        <!-- //.testimonial-item -->
                    </div>
                    <?php
                	endwhile;
                endif;
                ?>
                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.section-inner -->
</section>

<!-- BEGIN QUOTE SECTION  -->
<section id="quote" class="section section-bgtype-image">

    <div class="section-inner">

        <div class="bg-overlay"></div>

        <div class="container section-content">
            <div class="row">
                <div class="col-md-12">
                  <img src="" alt="" />
                    <div class="quote-text text-center">
                        <span class="quote-icon"><i class="fa fa-quote-right fa-4x"></i></span>
                        <h2 class="animated fadeInUp delayp3">"Start by doing what's necessary; then do what's possible; and suddenly you are doing the impossible."</h2>
                        <h2 class="lead quote-by">(Francis of Assisi)</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 <!-- //END QUOTE SECTION -->
<?php //if(shortcode_exists( '[custom-facebook-feed]' )): ?>
    <section class="section visible-sm">


        <div class="section-inner">

            <div class="container section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="home section-title text-center">
                            <h3 class="main-title">Connect with us</h3>
                            <h4 class="sub-title">We are on social media</h4>
                            <span class="section-line"></span>
                        </div>
                        <!-- //.home section-title -->
                    </div>
                </div>
                <!-- //.row -->

                <div class="row">

                        <?php echo do_shortcode('[facebook-page href="https://facebook.com/Blue-Origin-Education-Research-Training-Center-Pvt-Ltd-1646208815666824" width="300" height="500" tabs="timeline, events, messages" show_cta="true" small_header="false" align="center" hide_cover="false" show_facepile="false"]'); ?>

                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.section-inner -->
    </section>
<?php //endif; ?>
<?php
//get_sidebar();
get_footer();
?>
