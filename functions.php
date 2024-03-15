<?php
require_once('functions/assets.php');
require_once('custom-controls-functions.php');
require_once('customizer-repeater/functions.php');
require_once('customizer-repeater/inc/customizer.php');
require_once('functions/navwalker-bootstrap.php');

// Registrando um menu
register_nav_menus(
    array(
        'main_menu' => __('Menu Principal', 'meu-text-domain')
    )
);

// Opções de personalização do tema
function theme_customizer_settings($wp_customize)
{
    // Painel Página Inicial
    $wp_customize->add_panel('start_panel', array(
        'priority'   => 22,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => 'Página inicial',
        'description'    => ''
    ));

    include_once('functions/customizer/header.php');
    include_once('functions/customizer/about-me.php');
    include_once('functions/customizer/psychoterapies.php');
    include_once('functions/customizer/cto.php');
    include_once('functions/customizer/about-specific-service.php');
    include_once('functions/customizer/latest-posts.php');
}

add_action('customize_register', 'theme_customizer_settings');
