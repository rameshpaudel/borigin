<?php 
/*
* 
*/
get_header();
wp_reset_query();
$imgsrc =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
    <section class="country container">
        <h1 class="wow animated fadeInDown"><?php the_title() ?></h1>
        <ul class="breadcrumb visible-md visible-lg wow animated fadeInLeftBig">
            <li><a href="index.html">Home</a></li>
            <li>Abroad Studies</li>
            <li class="active"><?php the_title();//$post->post_title(); ?></li>
        </ul>
        <!-- <p class="intro">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores autem, minus placeat. Ea, molestias autem consequatur unde provident minus veritatis facere reprehenderit, saepe omnis tempora.
        </p>d -->
        <article class="col-md-8 wow animated fadeInLeft">
            <img src="<?php echo $imgsrc; ?>" alt="" class="img-responsive">
			            
            <div>
            	<?php the_content(); ?>
            </div>
        </article>
        <aside class="col-md-4">
             <div class="notice wow animated fadeInRight">
                <h4>Recent News</h4>
                <ul class="other-services">
                <?php 
                    $args = array( 'post_type' => 'recent-news', 'posts_per_page' => 6, 'order_by' => 'DESC' );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); 
                    $imgsrc =  wp_get_attachment_thumb_url( get_post_thumbnail_id($post->ID) );

                    ?>
                    <li class="row">
                        <a href="<?php the_permalink(); ?>" class="recent-news-heightfix">
                        <img src="<?php echo $imgsrc; ?>" alt="" class="col-md-3 hidden-sm hidden-xs img-responsive"><p class="col-md-7 col-sm-12"><?php the_title(); ?></p>
                        </a>
                    
                    </li>
                <?php endwhile ?>
                </ul>
            </div>
            <div class="flags wow animated fadeInRight">
                <h4>Other Countries</h4>
                <?php 
                	wp_reset_query();
					$args = array( 'post_type' => 'country', 'posts_per_page' => 6 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); 
					$imgsrc =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					?>
                <a href="<?php the_permalink(); ?>"><img src="<?php echo $imgsrc; ?>" alt=""></a>
               <?php endwhile; ?>
            </div>
        </aside>
    </section>
    <?php
get_footer();