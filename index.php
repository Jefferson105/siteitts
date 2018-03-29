<?php 
    /*if(is_front-_page()) {
        get_header('home'); 
    }else {
        get_header('about');    
    }*/

    get_header();
    wp_list_pages("home");
    get_footer();    
?>