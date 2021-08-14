<?php 
/**
 * Template Name: Contact Page
 */

get_header(); 
?>


<section style="background: url('<?php echo the_field('header_image') ?>'); width:100%;height:500px;background-repeat: no-repeat;background-position: center;background-size:center;background-attachment:fixed;" >
    <div class="overlaybg">
        <div class="container-fluid overlaycontent">
            <div class="row">
                
                <div class="col-md-10 offset-md-1">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 text-center">
                            <h2 class="fs-1"><?php echo the_field('header_image_text'); ?></h2>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>


<section class="page_contents">
    <div class="container">
    
        <div class="row">
            <div class="col-lg-12 px-4 py-5 p-lg-5 all-text-white">
                <div class="h-100">
                    <div class="title text-center p-0">
                        <br><br>
                        <span class="pre-title"><?php echo the_field('call_to_action_text_small'); ?></span>
                        <h2><?php echo the_field('call_to_action_tiltle'); ?></h2>
                        <p><?php echo the_field('call_to_action_text'); ?></p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-6 col-md-6 pb-5">
                <article class="main_content">

                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Información de Contacto.</h5>
                            <p class="card-text">
                                <?php 
                                $phone = get_field('phone'); 
                                if($phone):
                                ?>
                                Telefono: <?php the_field('phone'); ?> 
                                <?php 
                                endif;
                                ?>
                            </p>
                            <p class="card-text">
                            <?php 
                                $email = get_field('email'); 
                                if($email):
                                ?>
                                Email: <?php the_field('email'); ?> 
                                <?php 
                                endif;
                                ?>
                            </p>
                            <a href="tel:+526862594318" class="btn btn-primary">Llamanos!</a>
                        </div>
                    </div>

                </article>
            </div>
            <div class="col-lg-6 col-md-6 pb-5">
                <article class="main_content">
                    <?php the_content() ?>
                </article>
            </div>
        </div>


    </div>
</section>






<?php get_footer(); ?>