<?php 
/**
 * Template Name: About Page
*/

get_header(); 
?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(  ) ?>

<header class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h1><?php echo get_the_title(); ?></h1>
            </div>
        </div>
    </div>
</header>



<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 px-4 py-5 p-lg-3 all-text-white">
                <div class="h-100">
                    <div class="title text-center p-0">
                        <br><br>
                        <h2><?php echo the_field('front_page_title'); ?></h2>
                        <p><?php echo the_field('front_page_text'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-who-we-are pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="who-we-are-image">
                    <?php if(has_post_thumbnail()): ?>
                        <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url( ) ?>" alt="<?php echo get_the_title(); ?>">
                    <?php else: ?>
                        <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(  ) ?>/images/logo.png" alt="<?php echo get_the_title(); ?>">
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-6">    
                <p><?php echo get_the_content(); ?></p>
                <?php //echo the_field('who_we_are'); ?>
            </div>
        </div>
    </div>
</section>


<?php endwhile; else: ?>
    <p><?php echo esc_html_e('Sorry, No posts match your search.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>