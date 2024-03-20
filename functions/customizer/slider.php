<?php
// Psychotherapies Section
$wp_customize->add_section('slider_section', array(
    'title'      => __('Slider'),
    'priority'   => 6,
    'panel'    => 'start_panel'
));

// Título do bloco
$wp_customize->add_setting(
    'title_slider',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'title_slider',
    array(
        'label'      => __('Título do bloco', 'title_slider'),
        'settings'   => 'title_slider',
        'section'    => 'slider_section',
        'type'       => 'text'
    )
));

// Imagem do separador
$wp_customize->add_setting(
    'icon_separator_slider',
    array(
        'default' => '',
        'transport' => 'refresh',
        )
);

$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'icon_separator_slider',
    array(
        'label'      => __('Imagem do separador', 'icon_separator_slider'),
        'settings'   => 'icon_separator_slider',
        'section'    => 'slider_section',
        'type'       => 'image'
        )
));

//Conteúdo do slider
$wp_customize->add_setting('customizer_repeater_slider', array(
    'sanitize_callback' => 'customizer_repeater_sanitize'
));
$wp_customize->add_control(new Customizer_Repeater($wp_customize, 'customizer_repeater_slider', array(
    'label'   => esc_html__('Objetos do slider', 'customizer-repeater'),
    'section' => 'slider_section',
    'priority' => 30,
    'customizer_repeater_image_control' => false,
    'customizer_repeater_icon_control' => false,
    'customizer_repeater_title_control' => true,
    'customizer_repeater_subtitle_control' => true,
    'customizer_repeater_text_control' => true,
    'customizer_repeater_link_control' => false,
    'customizer_repeater_shortcode_control' => false,
    'customizer_repeater_repeater_control' => false
)));