<?php 
/**
 * Template Name: About Page
*/
get_header(); 
?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(  ) ?>

<header style="background: url('<?php echo the_field('about_header_image') ?>'); width:100%;height:50vh;background-repeat: no-repeat;background-position: center;background-size:center;background-attachment:fixed;" class="">
    <div class="overlaybg-half">
        <div class="container-fluid overlaycontent-half">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="row">
                        <div style="margin-top: 40vh;" class="col-lg-8 offset-lg-2 text-center">
                            <h1 class="fs-1 fs-1x"><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<section class="section-who-we-are pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">    
                <h1><?php the_title(); ?></h1>
                <p><?php echo get_the_content(); ?></p>
                <?php //echo the_field('who_we_are'); ?>
            </div>
            <div class="col-lg-6">
                <div class="who-we-are-image">
                    <?php if(has_post_thumbnail()): ?>
                        <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url( ) ?>" alt="<?php echo get_the_title(); ?>">
                    <?php else: ?>
                        <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(  ) ?>/images/logo.png" alt="<?php echo get_the_title(); ?>">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endwhile; else: ?>
    <p><?php echo esc_html_e('Sorry, No posts match your search.'); ?></p>
<?php endif; ?>



<section class="content-section pb-5 pt-5" id="portfolio">
    <div class="container">
        <div class="content-section-heading">
            <h2 class="mb-5">Nuestro Equipo</h2>
        </div>
        <div class="row">

        <?php 

            global $wp_query;
            $args = array(
                'post_type' => 'team',
                'order'=>'DESC',
                'posts_per_page'=>8
            );
            $temp_query = $wp_query;
            $wp_query = NULL;
            $wp_query = new WP_Query( $args );
            if ( have_posts() ) : while ( have_posts() ) : the_post(); 
        ?>

            <div class="col-lg-4 col-md-6">
            
                <div style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>); height:50vh; background-size:cover; background-position:center;" class="col-lg-12 team-item mb-5"></div>

                <h4 class="mb-3 text-center"><?php echo get_the_title(); ?></h4>
                <p><?php the_content(); ?></p>
                
            </div>
        
        <?php endwhile; else : ?>
            <p><?php esc_html_e( 'No hay trabajos recientes.' ); ?></p>
        <?php endif; ?>
        </div>
    </div>
</section>





<?php get_footer(); ?>