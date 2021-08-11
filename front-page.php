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

                        <!--
                        <div class="col-lg-6">
                            <h5>Alseide</h5>
                            <p>Paisajismo Consciente</p>
                            <p><a href="#" class="btn btn-dark btn-large">Learn more »</a></p>
                        </div>
                        -->
                        <div class="col-lg-8 offset-lg-2 text-center">
                            <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" width="50%" class="img-fluid" alt="Alseide">
                            
                            <!--
                            <div class="banner_text">
                                <h1 class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit cum veniam porro facere voluptas exercitationem atque, recusandae odio blanditiis nisi eos eaque quisquam doloremque.</h1>
                            </div>
                            -->

                            <?php if ( is_active_sidebar( 'front_page_banner_text' ) ) : ?>
                                    <?php dynamic_sidebar( 'front_page_banner_text' ); ?>
                            <?php endif; ?>


                            
                            <p><a href="#" class="btn-alseide btn btn-outline-success btn-large">Contacto</a></p>
                        </div>
                        

                    </div>
                    

                </div>
                
            </div>
        </div>
    </div>
</section>

<?php
get_footer(); 
?>