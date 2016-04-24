<?php
/**
 * Template Name: FaQ Page
 */

get_header();
?>
<section id="page">
	    <div class="page-header wow animated fadeInDown">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12">
	                    <h1 class="wow animated fadeInDown">Frequently Asked Questions (FAQ)</h1>
	                    <p class="wow animated fadeInUp">Anything you need to know about our services and products</p>
	                    <ul class="breadcrumb visible-md visible-lg wow animated fadeInLeftBig">
	                        <li><a href="<?php echo site_url(); ?>">Home</a></li>
	                        <li class="active">FAQ</li>
	                    </ul>
	                </div>
	            </div>
	        </div>
        </div>
        <section id="content" class="mt30 pb30">
            <div class="container">
                <div class="row">
                    <aside class="col-md-4"> 
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/faq.jpg" alt="" class="img-responsive hidden-xs wow animated bounceIn" style="margin-left:25px;">
                        <section class="boxFocus color2 wow animated fadeInLeft">
                            <h2>Answers to the most common questions <br>
                                asked by students.</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ut auctor lorem. Curabitur at lobortis nulla. Sed tincidunt, orci sit amet varius ornare,</p>
                        </section>
                    </aside>
                    <div class="col-md-8 wow animated fadeInRight">
                        <div class="panel-group" id="accordion">
                         <?php 
                                    wp_reset_query();
                                    $x = 0;
                                    $args = array( 'post_type' => 'faq', 'posts_per_page'=> 1 ,'order' => 'DESC');
                                    $loop = new WP_Query( $args );
                                    while ( $loop->have_posts() ) : $loop->the_post();
                                        $imgsrc =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?> 
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $x;  ?>">
                                        <h4 class="panel-title">
                                                <?php the_title(); ?>
                                                <span class="fa fa-chevron-down pull-right hidden-xs"></span> 
                                        </h4>
                                        </a>
                                </div>
                                <div id="collapse<?php echo $x;  ?>" class="panel-collapse collapse in" >
		                           
										<div class="panel-body">
		                                        <p><?php the_content(); ?></p>
		                                    </div>
									
									

                                </div>
                                    <?php $x++;
                                    endwhile; ?>
                                    
                                    
                            </div>
                          <?php 
                            $x++;
                            wp_reset_query();
		                    $args = array( 'post_type' => 'faq', 'offset' => 1,'order' => 'DESC');
		           			$loop = new WP_Query( $args );
		           			while ( $loop->have_posts() ) : $loop->the_post();
		                		$imgsrc =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?> 
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $x;  ?>">
                                        <h4 class="panel-title">
                                            <i class="icon-star-filled"></i><?php the_title(); ?><span class="fa fa-chevron-down pull-right hidden-xs"></span>
                                        </h4>
                                    </a>
                                </div>
                                <div id="collapse<?php echo $x;  ?>"  class="panel-collapse collapse" >
                                    <div class="panel-body">
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>
                            </div>
                        	<?php 
                            $x++;
                            endwhile; ?>
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
</section>
<?php
get_footer(); 
?>