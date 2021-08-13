<?php 
/**
 * Template Name: Contact Page
 */

get_header(); 
?>


<section style="background: url('<?php echo the_field('header_image') ?>'); width:100%;height:500px;background-repeat: no-repeat;background-position: center;background-size:center;" >
    <div class="overlaybg">
        <div class="container-fluid overlaycontent">
            <div class="row">
                
                <div class="col-md-10 offset-md-1">

                    <div class="row">

                       
                        <div class="col-lg-8 offset-lg-2 text-center">
                       
                                
                            
                            <p><a href="#" class="btn-alseide btn-alseide-4 btn">Contacto</a></p>
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
            
            <div class="col-lg-12 col-md-12">
                <article class="main_content">
                    <?php the_content() ?>
                </article>
            </div>

        </div>
    </div>
</section>






<?php get_footer(); ?>