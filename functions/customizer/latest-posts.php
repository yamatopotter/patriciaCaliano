<?php
// Latest posts section
$wp_customize->add_section('latest_posts_section', array(
    'title'      => __('Ultimos posts'),
    'priority'   => 5,
    'panel'    => 'start_panel'
));

// Linha um do titulo da intro
$wp_customize->add_setting(
    'title_latest_posts',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'title_latest_posts',
    array(
        'label'      => __('Título da sessão', 'title_latest_posts'),
        'settings'   => 'title_latest_posts',
        'section'    => 'latest_posts_section',
        'type'       => 'text'
    )
));

// Imagem do separador
$wp_customize->add_setting(
    'icon_separator_latest_posts',
    array(
        'default' => '',
        'transport' => 'refresh',
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'icon_separator_latest_posts',
    array(
        'label'      => __('Imagem do separador', 'icon_separator_latest_posts'),
        'settings'   => 'icon_separator_latest_posts',
        'section'    => 'latest_posts_section',
        'type'       => 'image'
    )
));
