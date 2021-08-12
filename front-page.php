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
                            <!--
                            <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" width="50%" class="img-fluid" alt="Alseide">
                            -->
                            <!--
                            <div class="banner_text">
                                <h1 class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit cum veniam porro facere voluptas exercitationem atque, recusandae odio blanditiis nisi eos eaque quisquam doloremque.</h1>
                            </div>
                            -->

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


<section class="features pt-5 pb-5">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-3  col-md-6">
                <div style="  border-top: 4px solid #03991a;" class="card shadow">
                    <img src="<?php echo get_template_directory_uri() ?>/images/huertos.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3  col-md-6">
                <div style="  border-top: 4px solid #03991a;" class="card shadow">
                    <img src="<?php echo get_template_directory_uri() ?>/images/riego.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3  col-md-6">
                <div style="  border-top: 4px solid #03991a;" class="card shadow">
                    <img src="<?php echo get_template_directory_uri() ?>/images/perm.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3  col-md-6">
                <div style="  border-top: 4px solid #03991a;" class="card shadow">
                    <img src="<?php echo get_template_directory_uri() ?>/images/florafauna.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

           


            



        </div>
    </div>
</section>



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