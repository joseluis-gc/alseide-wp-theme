<?php 
/**
 * Template Name: With Sidebar
 */

get_header(); 
?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(  ) ?>

<header class="custom_page_header">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-6 col-md-6">
                <div class="page-title-heading small">
                    <h1><?php echo get_the_title(); ?></h1>
                </div>
                <p><?php echo get_the_excerpt(); ?></p>
                <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>

            </div>



            <div class="col-lg-6 col-md-6">
                
                <?php 
                if(has_post_thumbnail()):
                ?>

                    <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url( ) ?>" alt="<?php echo get_the_title(); ?>">

                <?php else: ?>

                    <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(  ) ?>/images/logo.png" alt="<?php echo get_the_title(); ?>">

                <?php endif; ?>

            </div>



        </div>
    </div>
</header>




<section class="page_contents">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-9 col-md-9">
                <article class="main_content">
                    <?php the_content() ?>
                </article>
                <p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
                <?php //comments_template() ?>
            </div>


            <div class="col-lg-3 col-md-3">
                <?php if ( is_active_sidebar( 'default_sidebar' ) ) : ?>
                        <?php dynamic_sidebar( 'default_sidebar' ); ?>
                <?php endif; ?>
            </div>


        </div>
    </div>
</section>







<?php endwhile; else: ?>

    <p><?php echo esc_html_e('Sorry, No posts match your search.'); ?></p>

<?php endif; ?>

<?php get_footer(); ?>