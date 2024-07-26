<?php
function mi_tema_personalizado_scripts() {
    // Enlazar archivos CSS
    wp_enqueue_style('estilo-principal', get_stylesheet_uri());
    wp_enqueue_style('estilo', get_template_directory_uri() . '/style.css', array(), '1.0.0');
    wp_enqueue_style('section-estilo', get_template_directory_uri() . '/section.css', array(), '1.0.0');
    wp_enqueue_style('section2-estilo', get_template_directory_uri() . '/section2.css', array(), '1.0.0');
    
    // Enlazar archivo JavaScript
    wp_enqueue_script('mi-script', get_template_directory_uri() . '/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'mi_tema_personalizado_scripts');
?>
