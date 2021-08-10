    
    <footer class="main-footer bg-dark text-white pt-5">
        <div class="container">
            <div class="row">
            
                <?php if ( is_active_sidebar( 'footer_widgets' ) ) : ?>
                        <?php dynamic_sidebar( 'footer_widgets' ); ?>
                <?php endif; ?>


            </div>
        </div>
    </footer>

    <div class="copy text-white pt-3">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p class="small">Copyright &copy;Alseide <?php echo date("Y"); ?></p>
                </div>
            </div>
        </div>
    </div>


    <?php wp_footer() ?>
  </body>
</html>