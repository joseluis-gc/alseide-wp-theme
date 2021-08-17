<?php 
/**
 * Template Name: About Page
 */

get_header(); 
?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(  ) ?>

<header class="custom_page_header pt-5 pb-5">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-6 col-md-6">
                <div class="page-title-heading small">
                    <h1><?php echo get_the_title(); ?></h1>
                </div>
                <p><?php echo get_the_content(); ?></p>
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


            <section class="section-who-we-are">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="who-we-are-image">
                                <img class="img-fluid" src="<?php echo the_field('who_we_are_image'); ?>" alt="Alseide About image"> 
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <?php echo the_field('who_we_are'); ?>
                        </div>
                    </div>
                </div>
            </section>



        </div>
    </div>
</header>


<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                
            </div>
        </div>
    </div>
</section>










<?php endwhile; else: ?>

    <p><?php echo esc_html_e('Sorry, No posts match your search.'); ?></p>

<?php endif; ?>

<?php get_footer(); ?>