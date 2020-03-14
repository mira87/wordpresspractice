<?php

    function getItWorking(){

        register_sidebar(array(
            'name'=>'Footer',
            'id'=>'footer1'
        ));

        wp_enqueue_style('style',get_stylesheet_uri());
       
        // add_theme_support()
        wp_enqueue_style('fonts',"https://fonts.googleapis.com/css?family=Playball|Raleway&display=swap" );

        register_sidebar(array(
            'name'=>'My Sidebar',
            'id'=>'sidebar1'
        ));

        add_theme_support('post-thumbnails');


        register_nav_menus(array(
            'primary'=>__('Pop Up Nav')
        ));
    }

    add_action('styles',getItWorking());
?>