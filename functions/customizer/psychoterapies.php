<?php
// Psychotherapies Section
$wp_customize->add_section('psychotherapies_section', array(
    'title'      => __('Psicoterapias'),
    'priority'   => 2,
    'panel'    => 'start_panel'
));

// Título do bloco
$wp_customize->add_setting(
    'title_psychotherapies',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'title_psychotherapies',
    array(
        'label'      => __('Título do bloco', 'title_psychotherapies'),
        'settings'   => 'title_psychotherapies',
        'section'    => 'psychotherapies_section',
        'type'       => 'text'
    )
));

// Imagem do separador
$wp_customize->add_setting(
    'icon_separator_psychotherapies',
    array(
        'default' => '',
        'transport' => 'refresh',
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'icon_separator_psychotherapies',
    array(
        'label'      => __('Imagem do separador', 'icon_separator_psychotherapies'),
        'settings'   => 'icon_separator_psychotherapies',
        'section'    => 'psychotherapies_section',
        'type'       => 'image'
    )
));

//Subtítulo do bloco Mantenedores
$wp_customize->add_setting('customizer_repeater_psychotherapies', array(
    'sanitize_callback' => 'customizer_repeater_sanitize'
));
$wp_customize->add_control(new Customizer_Repeater($wp_customize, 'customizer_repeater_psychotherapies', array(
    'label'   => esc_html__('Psicoterapias', 'customizer-repeater'),
    'section' => 'psychotherapies_section',
    'priority' => 10,
    'customizer_repeater_image_control' => true,
    'customizer_repeater_icon_control' => true,
    'customizer_repeater_title_control' => false,
    'customizer_repeater_subtitle_control' => false,
    'customizer_repeater_text_control' => true,
    'customizer_repeater_link_control' => true,
    'customizer_repeater_shortcode_control' => false,
    'customizer_repeater_repeater_control' => false
)));
