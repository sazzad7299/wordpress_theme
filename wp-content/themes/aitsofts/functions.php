<?php
/*
*My Theme Function
*/

//Theme Title
add_theme_support('title-tag');

//Theme CSS and jQuery Fill added
function ait_css_js_enqueue(){
    //CSS File
    wp_enqueue_style('ait-style',get_stylesheet_uri());
    wp_register_style('ait-core',get_template_directory_uri().'/assets/css/core.css', array(),'1.0.0','all');
    wp_enqueue_style('ait-core');

    //jQuery Files
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js',array(),'5.0.0',true,);
    wp_enqueue_script('ait-slick-slider', get_template_directory_uri().'/assets/js/slick.min.js',array(),'1.0.0',true,);
    wp_enqueue_script('ait-nice-select', get_template_directory_uri().'/assets/js/jquery.nice-select.min.js',array(),'1.0.0',true,);
    wp_enqueue_script('ait-owl-carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js',array(),'1.0.0',true,);
    wp_enqueue_script('ait-magnafic-popup', get_template_directory_uri().'/assets/js/magnafic-popup.js',array(),'1.0.0',true,);
    wp_enqueue_script('ait-animation-on-scroll', get_template_directory_uri().'/assets/js/sal.js',array(),'1.0.0',true,);
    wp_enqueue_script('ait-core', get_template_directory_uri().'/assets/js/main.js',array(),'1.0.0',true,);
}
add_action('wp_enqueue_scripts','ait_css_js_enqueue');

//Theme Function

function ait_customizar_register($wp_customize){
    $wp_customize->add_section('ait_header_area',array(
        'title'=>__('Header Area','aitsofts'),
        'description'=> 'If you interested to Update your header area, you can do it here.'
    ));
    $wp_customize->add_setting('ait_logo',array(
        'default' => get_bloginfo('template_directory').'/assets/img/logo-alpha.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'ait_logo',array(
        'label'=>'Upload Site Logo',
        'description'=> 'If you interested to change you site logo then do it',
        'setting'=>'ait_logo',
        'section'=>'ait_header_area',
    )));
}
add_action('customize_register', 'ait_customizar_register');