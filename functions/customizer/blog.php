<?php

$wp_customize->add_section('blog_section', array(
    'title'      => __('Informações do blog'),
    'priority'   => 30,
    'panel'    => 'blog_panel'
));

// Linha um do titulo da intro
$wp_customize->add_setting(
    'blog_title',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'blog_title',
    array(
        'label'      => __('Título do blog', 'blog_title'),
        'settings'   => 'blog_title',
        'section'    => 'blog_section',
        'type'       => 'text'
    )
));

// Linha um do titulo da intro
$wp_customize->add_setting(
    'blog_subtitle',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'blog_subtitle',
    array(
        'label'      => __('Subtitulo do blog', 'blog_subtitle'),
        'settings'   => 'blog_subtitle',
        'section'    => 'blog_section',
        'type'       => 'text'
    )
));
