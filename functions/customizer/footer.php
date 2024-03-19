<?php

$wp_customize->add_section('footer_section', array(
    'title'      => __('Rodapé'),
    'priority'   => 30,
    'panel'    => 'start_panel'
));

// Linha um do titulo da intro
$wp_customize->add_setting(
    'facebook_url',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'facebook_url',
    array(
        'label'      => __('Link da página ou perfil do facebook', 'facebook_url'),
        'settings'   => 'facebook_url',
        'section'    => 'footer_section',
        'type'       => 'text'
    )
));

// Linha um do titulo da intro
$wp_customize->add_setting(
    'x_url',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'x_url',
    array(
        'label'      => __('Link do perfil no X', 'x_url'),
        'settings'   => 'x_url',
        'section'    => 'footer_section',
        'type'       => 'text'
    )
));

// Linha um do titulo da intro
$wp_customize->add_setting(
    'instagram_url',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'instagram_url',
    array(
        'label'      => __('Link do perfil do Instagram', 'instagram_url'),
        'settings'   => 'instagram_url',
        'section'    => 'footer_section',
        'type'       => 'text'
    )
));
