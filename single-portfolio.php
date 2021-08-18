<?php 
/**
 * Template Name: With Sidebar
 */

get_header(); 
?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(  ) ?>



<section style="background: url('<?php echo get_the_post_thumbnail_url() ?>'); width:100%;height:50vh;background-repeat: no-repeat;background-position: center;background-size:center;background-attachment:fixed;">
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
</section>




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
                
                <?php if(has_post_thumbnail()):?>
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
            
            <div class="col-lg-12 col-md-12">
                <article class="main_content">
                    <?php the_content() ?>
                </article>
                <p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
                <?php //comments_template() ?>
            </div>
        </div>
    </div>
</section>







<?php endwhile; else: ?>

    <p><?php echo esc_html_e('Sorry, No posts match your search.'); ?></p>

<?php endif; ?>

<?php get_footer(); ?>