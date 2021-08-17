<?php 
get_header(); 

/**
 * Template Name: Front Page
*/

?>

<section style="background: url('<?php echo the_field('intro_image') ?>'); width:100%;height:500px;background-repeat: no-repeat;background-position: center;background-size:center;background-attachment:fixed;" class="bgimage">
    <div class="overlaybg">
        <div class="container-fluid overlaycontent">
            <div class="row">
                
                <div class="col-md-10 offset-md-1">

                    <div class="row">

                       
                        <div class="col-lg-8 offset-lg-2 text-center">
                            <?php the_field('intro_text'); ?>
                            <?php 
                                if(get_field('display_button_op') == 'si'):
                            ?>
                            <p><a href="<?php the_field('button_url'); ?>" class="btn-alseide btn-alseide-4 btn"><?php the_field('intro_button_text'); ?></a></p>
                            <?php endif; ?>
                        </div>
                        

                    </div>
                    

                </div>
                
            </div>
        </div>
    </div>
</section>




<?php 
$features = get_field('display_servicios_op');
if($features == 'yes'):
?>
<section class="features pt-5 pb-5">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-3  col-md-6">
                <div style="  border-top: 4px solid #03991a;" class="card shadow-sm h-100">
                    <img src="<?php the_field('1_servicio_imagen'); ?>" class="card-img-top" alt="<?php the_field('1_servicio_titulo'); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_field('1_servicio_titulo'); ?></h5>
                        <p class="card-text"><?php the_field('1_servicio_texto'); ?></p>
                    </div>
                </div>
            </div>

            
            <div class="col-lg-3  col-md-6">
                <div style="  border-top: 4px solid #03991a;" class="card shadow-sm h-100">
                    <img src="<?php the_field('2_servicio_imagen'); ?>" class="card-img-top" alt="<?php the_field('2_servicio_titulo'); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_field('2_servicio_titulo'); ?></h5>
                        <p class="card-text"><?php the_field('2_servicio_texto'); ?></p>
                    </div>
                </div>
            </div>

            
            <div class="col-lg-3  col-md-6">
                <div style="  border-top: 4px solid #03991a;" class="card shadow-sm h-100">
                    <img src="<?php the_field('3_servicio_imagen'); ?>" class="card-img-top" alt="<?php the_field('3_servicio_titulo'); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_field('3_servicio_titulo'); ?></h5>
                        <p class="card-text"><?php the_field('3_servicio_texto'); ?></p>
                    </div>
                </div>
            </div>

            
            <div class="col-lg-3  col-md-6">
                <div style="  border-top: 4px solid #03991a;" class="card shadow-sm h-100">
                    <img src="<?php the_field('4_servicio_imagen'); ?>" class="card-img-top" alt="<?php the_field('4_servicio_titulo'); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_field('4_servicio_titulo'); ?></h5>
                        <p class="card-text"><?php the_field('4_servicio_texto'); ?></p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<?php endif; ?>


<?php 
if(get_field('display_callbox_1_op') == 'yes'):
?>
<section class="why-us p-0 pt-5 pb-5">
		<div class="container">
			<div class="row no-gutters shadow">
				<!--why us left-->
				<div class="col-lg-6 d-none d-lg-block bg-light" style="background:url(<?php the_field('call_box_image'); ?>) no-repeat; background-size:cover;">
				</div>
				<!--why us right-->
				<div class="col-lg-6 col-md-12 card-gradient px-4 py-5 p-lg-5 all-text-white">
					<div class="h-100">
						<div class="title text-left p-0">
                            <br><br>
							<span class="pre-title"><?php the_field('call_box_small_text') ?></span>
							<h2><?php the_field('call_box_title') ?></h2>
							<p><?php the_field('call_box_text') ?></p>
						</div>
						<div class="row pt-5">
							
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
<?php endif; ?>


<section class="content-section pb-5" id="portfolio">
    <div class="container px-4 px-lg-5">
        <div class="content-section-heading text-center">
            <h2 class="mb-5">Proyectos</h2>
        </div>
        <div class="row gx-0">

        <?php 

            global $wp_query;
            $args = array(
                'post_type' => 'portfolio',
                'order_by'=>'date',
                'order'=>'DESC',
                'posts_per_page'=>6
                //'cat' => 'featured',

            );
            $temp_query = $wp_query;
            $wp_query = NULL;
            $wp_query = new WP_Query( $args );
            if ( have_posts() ) : while ( have_posts() ) : the_post(); 
        ?>

            <div class="col-lg-4">
                <a class="portfolio-item" href="<?php the_permalink(); ?>">
                    <div class="caption">
                        <div class="caption-content">
                            <div class="h2"><?php echo get_the_title(); ?></div>
                            <small><?php echo get_the_excerpt() ?></small>
                        </div>
                    </div>


                    <?php if(has_post_thumbnail()):?>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid " alt="<?php echo get_the_title(); ?>">
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-fluid " alt="<?php echo get_the_title(); ?>">
                    <?php endif; ?>
                </a>
            </div>
        
        <?php endwhile; else : ?>
            <p><?php esc_html_e( 'No hay trabajos recientes.' ); ?></p>
        <?php endif; ?>
        </div>
    </div>
</section>


<?php
get_footer(); 
?>