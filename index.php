<?php get_header(); ?>

<section class="default-holder mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="list-group">

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <a href="<?php the_permalink() ?>" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                            <div class="col-lg-4">

                                <?php 
                                if(has_post_thumbnail()):
                                ?>

                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid rounded" alt="<?php echo get_the_title(); ?>">


                                <?php
                                else:
                                ?>

                                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-fluid rounded" alt="<?php echo get_the_title(); ?>">
                            
                                <?php 
                                endif;
                                ?>

                            </div>
                            <div class="col-lg-8 ">
                                <h3 class="fs-5"><?php echo get_the_title(); ?></h3>
                                <p class="small"><?php echo get_the_excerpt() ?></p>
                            </div>
                        </div>
                    </a>

                    <?php endwhile; else : ?>
                        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>

                </div>
            </div>
            
            
            
            <div class="col-lg-3">


                <?php if ( is_active_sidebar( 'default_sidebar' ) ) : ?>
                        <?php dynamic_sidebar( 'default_sidebar' ); ?>
                <?php endif; ?>

                
            </div>



        </div>
    </div>
</section>

<?php get_footer(); ?>