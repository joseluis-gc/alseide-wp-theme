<?php get_header(); ?>
<header class="cat-header pb-3 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cat-header-text">
                    <h1>Portafolio</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="content-section pb-5" id="portfolio">
    <div class="container">
        <div class="row">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-lg-4">

                <a class="portfolio-item" href="<?php the_permalink() ?>">
                    <div class="caption">
                        <div class="caption-content">
                            <div class="h2"><?php echo get_the_title(); ?></div>
                            <small><?php echo get_the_excerpt() ?></small>
                        </div>
                    </div>

                    <?php if(has_post_thumbnail()): ?>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid " alt="<?php echo get_the_title(); ?>">
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-fluid " alt="<?php echo get_the_title(); ?>">                
                    <?php endif; ?>
                </a>
            </div>
        
        <?php endwhile; else : ?>
            <p><?php esc_html_e( 'No hay publicaciones.' ); ?></p>
        <?php endif; ?>
        
        </div>
    </div>
</section>

<?php get_footer(); ?>