<?php   
    /* 
    Plugin Name: Game Dev Quotes
    Plugin URI: http://www.nodewerx.com/game-dev-quotes
    Description: Simple shortcodes to style game developer quotes as they are on the developers site 
    Author: Tony
    Version: 1.1.5 
    Author URI: http://www.nodewerx.com
    
    */
// Bring in our styles from "quotestyle.css" so everything gets formatted correctly.
function nwxGameDevQuotesStyles(){
    wp_register_style ( 'game-dev-quotes-css', plugins_url('gamedevquotes/quotestyle.css'));

    wp_enqueue_style ( 'game-dev-quotes-css');
}

add_action( 'wp_enqueue_scripts', 'nwxGameDevQuotesStyles');
//process our "bluepost" shortcode
function nwxBluepost( $atts, $content = null ){
    // Wrap everything in the colors we want. Pull out the "Name" attributed to the post and the content then display it.
    return '<div class="bluepost"><span style="color:white; font-weight: bold;">' . $atts['name'] . '</span><span style="position: absolute; top:0; right:0; "><img src=" ' . plugins_url('gamedevquotes/imgs/blizz.gif') .'"></span> <p> ' . $content . '</p></div>';
}

add_shortcode('bluepost', 'nwxBluepost');

function nwxTorpost( $atts, $content = null ){
    // Wrap everything in the colors we want. Pull out the "Name" attributed to the post and the content then display it.
    return '<div class="torpost"><span style="color:white; font-weight: bold;">' . $atts['name'] . '</span><span style="position: absolute; top:0; right:0;"><img src=" ' . plugins_url('/gamedevquotes/imgs/tordev.png') . '"></span> <p> ' . $content . '</p></div>';
}

add_shortcode('torpost', 'nwxTorpost');

function nwxPs2post( $atts, $content = null ){
    // Wrap everything in the colors we want. Pull out the "Name" attributed to the post and the content then display it.
    return '<div class="ps2post"><span style="color:red; font-weight: bold;">' . $atts['name'] . '</span><span style="position: absolute; top:0; right:0;"><img src=" ' . plugins_url('/gamedevquotes/imgs/ps2dev.png') . '"></span> <p> ' . $content . '</p></div>';
}

add_shortcode('ps2post', 'nwxPs2post');

function nwxValvepost( $atts, $content = null ){
    // Wrap everything in the colors we want. Pull out the "Name" attributed to the post and the content then display it.
    return '<div class="valvepost"><span style="color: #aedd08; font-weight: bold;">' . $atts['name'] . '</span><span style="position: absolute; top:0; right:0;"><img src=" ' . plugins_url('/gamedevquotes/imgs/valvedev.png') .'"></span> <p> ' . $content . '</p></div>';
}

add_shortcode('valvepost', 'nwxValvepost');