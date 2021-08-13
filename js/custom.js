(function($){

    $(document).ready(function(){
        $('.default_sidebar> ul').addClass('list-group list-group-flush');
        $('.default_sidebar> ul > li').addClass('list-group-item');
        $('.default_sidebar> ul > li > a').addClass('text-decoration-none text-dark');


        $('.footer_widget> ul').addClass('list-unstyled');
        $('.footer_widget> ul > li > a ').addClass('text-decoration-none text-white');


        /*
        $('.banner_text> h6').addClass('fs-5 big');
        $('.banner_text> h5').addClass('fs-5 big');
        $('.banner_text> h4').addClass('fs-5 big');
        $('.banner_text> h3').addClass('fs-5 big');
        */
        $('.banner_text> h2').addClass('fs-1 shadow-sm ');
        $('.banner_text> h1').addClass('fs-1 shadow-sm ');

        $('.wpcf7-form-control-wrap> input').addClass('form-control bora fullwidth-control');
        $('.wpcf7-form-control-wrap> textarea').addClass('form-control bora fullwidth-control-textarea');


    });

})(jQuery);