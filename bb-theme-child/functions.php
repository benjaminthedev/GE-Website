<?php

// Defines
define( 'FL_CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'FL_CHILD_THEME_URL', get_stylesheet_directory_uri() );

// Classes
require_once 'classes/class-fl-child-theme.php';

// Actions
add_action( 'wp_enqueue_scripts', 'FLChildTheme::enqueue_scripts', 1000 );


// Custom Functions for Custom JS

function custom_scripts() {
			
	// enqueue script
	wp_enqueue_script('custom-js', get_stylesheet_directory_uri() .'/js/customJs.js', array('jquery'), '', true);
	
}
add_action('wp_enqueue_scripts', 'custom_scripts');


// Adding custom font:

//  http://kb.wpbeaverbuilder.com/article/234-load-and-use-web-fonts-not-available-in-your-theme

function customNewFonts( $system_fonts ) {


    
    $system_fonts[ 'NunitoSans-ExtraLight' ] = array(
        'fallback' => 'Verdana, Arial, sans-serif',
        'weights' => array(
            '200'            
        ),
    );  

    $system_fonts[ 'NunitoSans-BlackItalic' ] = array(
        'fallback' => 'Verdana, Arial, sans-serif',
        'weights' => array(
            '900'            
        ),
    );        	

    $system_fonts[ 'NunitoSans-SemiBold' ] = array(
        'fallback' => 'Verdana, Arial, sans-serif',
        'weights' => array(
            '600'            
        ),
    );  

    $system_fonts[ 'NunitoSans-BoldItalic' ] = array(
        'fallback' => 'Verdana, Arial, sans-serif',
        'weights' => array(
            '700'            
        ),
    );

    $system_fonts[ 'NunitoSans-ExtraLightItalic' ] = array(
        'fallback' => 'Verdana, Arial, sans-serif',
        'weights' => array(
            '200'            
        ),
    );

    $system_fonts[ 'NunitoSans-Regular' ] = array(
        'fallback' => 'Verdana, Arial, sans-serif',
        'weights' => array(
            '400'            
        ),
    ); 

    $system_fonts[ 'NunitoSans-Light' ] = array(
        'fallback' => 'Verdana, Arial, sans-serif',
        'weights' => array(
            '300'            
        ),
    );    

    $system_fonts[ 'NunitoSans-Italic' ] = array(
        'fallback' => 'Verdana, Arial, sans-serif',
        'weights' => array(
            '400'            
        ),
    ); 

    $system_fonts[ 'NunitoSans-ExtraBold' ] = array(
        'fallback' => 'Verdana, Arial, sans-serif',
        'weights' => array(
            '800'            
        ),
    );

    $system_fonts[ 'NunitoSans-LightItalic' ] = array(
        'fallback' => 'Verdana, Arial, sans-serif',
        'weights' => array(
            '300'            
        ),
    );     

    $system_fonts[ 'NunitoSans-Black' ] = array(
        'fallback' => 'Verdana, Arial, sans-serif',
        'weights' => array(
            '900'            
        ),
    );  


    $system_fonts[ 'NunitoSans-SemiBoldItalic' ] = array(
        'fallback' => 'Verdana, Arial, sans-serif',
        'weights' => array(
            '600'            
        ),
    );                       


    $system_fonts[ 'NunitoSans-Bold' ] = array(
        'fallback' => 'Verdana, Arial, sans-serif',
        'weights' => array(
            '400'            
        ),
    );

    $system_fonts[ 'NunitoSans-ExtraBoldItalic' ] = array(
        'fallback' => 'Verdana, Arial, sans-serif',
        'weights' => array(
            '800'            
        ),
    );   


    $system_fonts[ 'MillerBanner' ] = array(
        'fallback' => 'Verdana, Arial, sans-serif',
        'weights' => array(
            '400',
            '500',
            '600',            
            '700'
        ),
    );   





    return $system_fonts;
}

//Add to Beaver Builder Theme Customizer
add_filter( 'fl_theme_system_fonts', 'customNewFonts' );


//Add to Page Builder modules
add_filter( 'fl_builder_font_families_system', 'customNewFonts' );

