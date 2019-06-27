<?php

function ajout_scripts() {

// enregistrement d'un nouveau script
wp_enqueue_script('main_script', get_template_directory_uri() . '/main.js', array(), '1.0.0', true);

// appel du script dans la page
// wp_enqueue_script('main_script');



}

add_action( 'wp_enqueue_scripts', 'ajout_scripts' );
