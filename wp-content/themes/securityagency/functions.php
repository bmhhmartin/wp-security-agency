<?php
    function se_theme_wrapping(){
        load_theme_textdomain('se');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails' );

    }

    add_action('after_setup_theme', 'se_theme_wrapping');

    function se_assets(){
        wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/assets/css/bootstrap.min.css', null, time());

        wp_enqueue_script('jquery_js', get_template_directory_uri().'/assets/js/jquery.min.js', array('jquery'), '1.0',time(),true);
    }

    add_action('wp_enqueue_scripts', 'se_assets');


?>