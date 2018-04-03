<?php

    //add_theme_suport('menus');

    function inttenso_script_enqueue() {
        wp_enqueue_script("customjs", get_template_directory_uri() . "/js/jquery-3.3.1.js", "1.0.0", true);
        wp_enqueue_script("customjs", get_template_directory_uri() . "/js/script.js", "1.0.0", true);
        wp_enqueue_style("cumtomstyle", get_template_directory_uri() . "/style.css", array(), "1.0.0", "all");
    }

    add_action("wp_enqueue_scripts", "inttenso_script_enqueue");

    function inttenso_theme_setup() {
        add_theme_support("menus");

        register_nav_menu("primary", "Primary Header Navigation");
        register_nav_menu("secondary", "Footer Navigation");
    }

    add_action("init", "inttenso_theme_setup");

    function theme_image( $image ) {
        return get_theme_file_uri() . '/img/' . $image;
    }

    function relativeUrl( $url ) {
        return 'inttensofoods.com.br/' . $url;
    }
?>