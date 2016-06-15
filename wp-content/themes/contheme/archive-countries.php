<?php 
/*
* Template Name: Countries
*
*/
get_header();
?>
<section id="study-abroad" class="section">
        
        <div class="section-inner">
            
            <div class="container section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2 class="main-title">Study Abroad</h2>
                            <h3 class="sub-title">List of countries we have experience on</h3>
                            <span class="section-line"></span>
                        </div>
                        <!-- //.section-title -->
                    </div>
                </div>
	  <div class="row">
                <?php	
					$args = array( 'post_type' => 'country', 'posts_per_page' => 10 );
					$loop = new WP_Query( $args );

					while ( $loop->have_posts() ) : $loop->the_post(); 
	  				$imgsrc =  wp_get_attachment_thumb_url( get_post_thumbnail_id($post->ID) );
  				?>
                    <a href="<?php the_permalink(); ?>" class="col-sm-6 col-md-4 portfolio-item grow" style="background: url(<?php echo $imgsrc; ?>) no-repeat center; background-size: cover; ">
	                    <!-- <a href="<?php the_permalink(); ?>"> -->
	                        <div class="inner-content">
	                            <div class="portfolio-content">
	                                <div class="portfolio-detail">
	                                    <div class="portfolio-text wow pulse" data-wow-offset="0">
	                                        <h4><?php the_title(); ?></h4>
	                                        <?php the_excerpt(); ?>
	                                    </div>
	                                    <!-- //.portfolio-text -->
	                                </div>
	                                <!-- //.portfolio-detail -->
	                            </div>
	                            <!-- //.portfolio-content -->
	                            	                            
	                        </div>
	                        <!-- //.inner-content -->
	                        <!-- </a> -->
                    </a>
                    <!-- //.portfolio-item -->

                  
                  
               
            <?php endwhile; ?>
                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.section-inner -->
    </section>
<?php 
get_footer();