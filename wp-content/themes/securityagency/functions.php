<?php
    function se_theme_wrapping(){
        load_theme_textdomain('se');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails' );

    }

    add_action('after_setup_theme', 'se_theme_wrapping');

    function se_assets(){
        wp_enqueue_style('se_bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css', null, time());
        wp_enqueue_style('se_font', get_template_directory_uri().'/assets/css/font-awesome.min.css', null, time());
        wp_enqueue_style('se_style', get_template_directory_uri().'/assets/css/style.css', null, time());
        wp_enqueue_style('se_responsive', get_template_directory_uri().'/assets/css/responsive.css', null, time());

        wp_enqueue_script('jquery_js', get_template_directory_uri().'/assets/js/jquery-3.4.1.min.js', array('jquery'), '1.0',time(),true);
        wp_enqueue_script('se_bootstrap_js', get_template_directory_uri().'/assets/js/bootstrap.js', array('jquery'), '1.0',time(),true);
        wp_enqueue_script('se_custom_js', get_template_directory_uri().'/assets/js/custom.js', array('jquery'), '1.0',time(),true);
    }

    add_action('wp_enqueue_scripts', 'se_assets');


?>