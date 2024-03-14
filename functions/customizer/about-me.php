<?php

// Header Section
$wp_customize->add_section('about_me_section', array(
    'title'      => __('Quem sou'),
    'priority'   => 1,
    'panel'    => 'start_panel'
));

// Linha um do titulo da intro
$wp_customize->add_setting(
    'title_about_us_1',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'title_about_us_1',
    array(
        'label'      => __('Primeira parte do título sem negrito', 'title_about_us_1'),
        'settings'   => 'title_about_us_1',
        'section'    => 'about_me_section',
        'type'       => 'text'
    )
));

// Linha dois do titulo da intro
$wp_customize->add_setting(
    'title_about_us_2',
    array(
        'default' => '',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'title_about_us_2',
    array(
        'label'      => __('Segunda parte do título com negrito', 'title_about_us_2'),
        'settings'   => 'title_about_us_2',
        'section'    => 'about_me_section',
        'type'       => 'text'
    )
));

// Foto do quem sou
$wp_customize->add_setting(
    'img_about_me',
    array(
        'default' => '',
        'transport' => 'refresh',
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'img_about_me',
    array(
        'label'      => __('Imagem principal', 'img_about_me'),
        'settings'   => 'img_about_me',
        'section'    => 'about_me_section',
        'type'       => 'image'
    )
));

// Texto de quem sou
$wp_customize->add_setting(
    'text_about_me',
    array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post'
    )
);
$wp_customize->add_control(new Skyrocket_TinyMCE_Custom_control(
    $wp_customize,
    'text_about_me',
    array(
        'label' => __('Sobre'),
        'description' => __('Campo para o texto sobre mim'),
        'section' => 'about_me_section',
        'input_attrs' => array(
            'toolbar1' => 'bold italic bullist numlist alignleft aligncenter alignright link',
            'toolbar2' => 'formatselect outdent indent | blockquote charmap',
            'mediaButtons' => true,
        )
    )
));

