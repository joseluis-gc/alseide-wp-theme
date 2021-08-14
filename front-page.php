<?php 
get_header(); 

/**
 * Template Name: Front Page
 */

?>
<!--
<header class="main-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner-text">
                    <h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit impedit quaerat alias</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae ratione voluptates reprehenderit eos assumenda. Delectus alias corrupti vel fuga enim assumenda quo.</p>
                </div>
            </div>
        </div>
    </div>
</header>
-->
<section class="bgimage">
    <div class="overlaybg">
        <div class="container-fluid overlaycontent">
            <div class="row">
                
                <div class="col-md-10 offset-md-1">

                    <div class="row">

                       
                        <div class="col-lg-8 offset-lg-2 text-center">
                       
                            <?php if ( is_active_sidebar( 'front_page_banner_text' ) ) : ?>
                                    <?php dynamic_sidebar( 'front_page_banner_text' ); ?>
                            <?php endif; ?>
     
                            <p><a href="#" class="btn-alseide btn-alseide-4 btn">Contacto</a></p>
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
                <div style="  border-top: 4px solid #03991a;" class="card shadow h-100">
                    <img src="<?php the_field('1_servicio_imagen'); ?>" class="card-img-top" alt="<?php the_field('1_servicio_titulo'); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_field('1_servicio_titulo'); ?></h5>
                        <p class="card-text"><?php the_field('1_servicio_texto'); ?></p>
                    </div>
                </div>
            </div>

            
            <div class="col-lg-3  col-md-6">
                <div style="  border-top: 4px solid #03991a;" class="card shadow h-100">
                    <img src="<?php the_field('2_servicio_imagen'); ?>" class="card-img-top" alt="<?php the_field('2_servicio_titulo'); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_field('2_servicio_titulo'); ?></h5>
                        <p class="card-text"><?php the_field('2_servicio_texto'); ?></p>
                    </div>
                </div>
            </div>

            
            <div class="col-lg-3  col-md-6">
                <div style="  border-top: 4px solid #03991a;" class="card shadow h-100">
                    <img src="<?php the_field('3_servicio_imagen'); ?>" class="card-img-top" alt="<?php the_field('3_servicio_titulo'); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_field('3_servicio_titulo'); ?></h5>
                        <p class="card-text"><?php the_field('3_servicio_texto'); ?></p>
                    </div>
                </div>
            </div>

            
            <div class="col-lg-3  col-md-6">
                <div style="  border-top: 4px solid #03991a;" class="card shadow h-100">
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



<section class="why-us p-0 pt-5 pb-5">
		<div class="container">
			<div class="row no-gutters shadow">
				<!--why us left-->
				<div class="col-lg-6 d-none d-lg-block bg-light" style="background:url(<?php echo get_template_directory_uri(  ) ?>/images/backgroundoption1.jpg) no-repeat; background-size:cover;">
				</div>
				<!--why us right-->
				<div class="col-lg-6 col-md-12 card-gradient px-4 py-5 p-lg-5 all-text-white">
					<div class="h-100">
						<div class="title text-left p-0">
                            <br><br>
							<span class="pre-title">Why you should trust us?</span>
							<h2>We Provide the best solutions for your business needs!</h2>
							<p>Amounted old strictly but Marianne admitted. People former is remove remain as. Admiration instrument affronting invitation reasonably up do of prosperous in shy saw declared age debating ecstatic man call in so want pure rank am dear were remarkably to continuing on. </p>
						</div>
						<div class="row pt-5">
							
						</div>
					</div>
				</div>
			</div>
		</div>
</section>

<?php
get_footer(); 
?>