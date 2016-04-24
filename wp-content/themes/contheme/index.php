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
            //Fetching the testimonials
            $args = array('post_type' => 'slider', 'posts_per_page' => 3);
            $images = array();
            $x = 0;
            $slider = new WP_Query($args);
            if ($slider->have_posts()): while ($slider->have_posts()): $slider->the_post();
                    ?>
            <div class="wow animated bounceIn">
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

<?php/*
if (have_posts()):
    while (have_posts()): 
    <div class="row">
        <div class="container">
          <h1><?php the_post();?></h1>
          <p><?php the_content();?></p>
        </div>
    </div>

endwhile;
endif;
*/
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
                $args = array('post_type' => 'services', 'posts_per_page' => 3);
                $services = new WP_Query($args);
                if ($services->have_posts()): while ($services->have_posts()): $services->the_post();
		      ?>
    		        <div class="col-sm-4 col-md-4 col-lg-4">
    		            <div class="funny-box float-shadow not-right-column text-center">
    		                <span class="funny-box-icon">
    		                    <i class="fa <?php echo types_render_field('service-icon') ?>"></i>
    		                </span>
    		                <div class="funny-box-text">
    		                    <h4><?php the_title();?></h4>
    		                    <?php the_content();?>
    		                </div>
    		                <!-- //.funny-box-text -->
    		            </div>
    		            <!-- //.funny-box -->
    		        </div>
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


<section id="testimonials" class="section section-bgtype-image">

        <div class="section-inner">

            <div class="bg-overlay"></div>

            <div class="container section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3 class="main-title">Testimonials</h3>
                            <h3 class="sub-title">Our  Success Stories</h3>
                            <span class="section-line"></span>
                        </div>
                        <!-- //.section-title -->
                    </div>
                </div>
                <!-- //.row -->

                <div class="row">
                <?php
                //Fetching the testimonials
                $args = array('post_type' => 'testimonial', 'posts_per_page' => 3);
                $testimonial = new WP_Query($args);
                if ($testimonial->have_posts()): while ($testimonial->have_posts()): $testimonial->the_post();
                		?>
                    <div class="col-sm-4 col-md-4">
                        <div class="testimonial-item text-center not-right-column">
                            <div class="testimonial-box">
                                <p><?php the_content();?></p>
                            </div>
                            <?php echo types_render_field('testimonial-image') ?>
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
<?php
//get_sidebar();
get_footer();
?>