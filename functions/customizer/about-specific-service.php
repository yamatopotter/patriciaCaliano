<?php
// Specific service section
$wp_customize->add_section('about_specific_service_section', array(
    'title'      => __('Serviço específico'),
    'priority'   => 0,
    'panel'    => 'start_panel'
));

// Linha um do titulo da intro
$wp_customize->add_setting(
    'title_specific_service_l1',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'title_specific_service_l1',
    array(
        'label'      => __('Primeira linha de título', 'title_specific_service_l1'),
        'settings'   => 'title_specific_service_l1',
        'section'    => 'about_specific_service_section',
        'type'       => 'text'
    )
));

// Linha dois do titulo da intro
$wp_customize->add_setting(
    'title_specific_service_l2',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'title_specific_service_l2',
    array(
        'label'      => __('Segunda linha de título em negrito', 'title_specific_service_l2'),
        'settings'   => 'title_specific_service_l2',
        'section'    => 'about_specific_service_section',
        'type'       => 'text'
    )
));

// Texto do botão
$wp_customize->add_setting(
    'text_btn_specific_service',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'text_btn_specific_service',
    array(
        'label'      => __('Segunda linha de título em negrito', 'text_btn_specific_service'),
        'settings'   => 'text_btn_specific_service',
        'section'    => 'about_specific_service_section',
        'type'       => 'text'
    )
));

// Link do botão
$wp_customize->add_setting(
    'link_btn_specific_service',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'link_btn_specific_service',
    array(
        'label'      => __('Segunda linha de título em negrito', 'link_btn_specific_service'),
        'settings'   => 'link_btn_specific_service',
        'section'    => 'about_specific_service_section',
        'type'       => 'text'
    )
));
