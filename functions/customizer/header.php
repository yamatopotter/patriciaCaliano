<?php
// Header Section
$wp_customize->add_section('header_section', array(
    'title'      => __('Cabeçalho'),
    'priority'   => 0,
    'panel'    => 'start_panel'
));

// Logo navbar
$wp_customize->add_setting(
    'logo_navbar',
    array(
        'default' => '',
        'transport' => 'refresh',
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'logo_navbar',
    array(
        'label'      => __('Logo do Menu', 'logo_navbar'),
        'settings'   => 'logo_navbar',
        'section'    => 'header_section',
        'type'       => 'image'
    )
));

// Background intro
$wp_customize->add_setting(
    'background_intro',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'background_intro',
    array(
        'label'      => __('Background da intro', 'background_intro'),
        'settings'   => 'background_intro',
        'section'    => 'header_section',
        'type'       => 'image'
    )
));

// Imagem que fica dentro da sessão Intro
$wp_customize->add_setting(
    'img_intro',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'img_intro',
    array(
        'label'      => __('Imagem pequena acima do titulo principal', 'img_intro'),
        'settings'   => 'img_intro',
        'section'    => 'header_section',
        'type'       => 'image'
    )
));

// Linha um do titulo da intro
$wp_customize->add_setting(
    'title_intro_l1',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'title_intro_l1',
    array(
        'label'      => __('Primeira linha de título', 'title_intro_l1'),
        'settings'   => 'title_intro_l1',
        'section'    => 'header_section',
        'type'       => 'text'
    )
));

// Linha dois do titulo da intro
$wp_customize->add_setting(
    'title_intro_l2',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'title_intro_l2',
    array(
        'label'      => __('Segunda linha de título em negrito', 'title_intro_l2'),
        'settings'   => 'title_intro_l2',
        'section'    => 'header_section',
        'type'       => 'text'
    )
));

// Texto da intro
$wp_customize->add_setting('text_intro', array(
    'default'   => '',
    'transport' => 'refresh',
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'textarea_control', array(
    'label'    => __('Texto da introdução', 'text_intro'),
    'section'  => 'header_section',
    'settings' => 'text_intro',
    'type'     => 'textarea',
)));
