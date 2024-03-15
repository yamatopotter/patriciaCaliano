<?php
// CTO Section
$wp_customize->add_section('cto_section', array(
    'title'      => __('Call to Action'),
    'priority'   => 0,
    'panel'    => 'start_panel'
));

// Linha um do titulo da intro
$wp_customize->add_setting(
    'title_cto_l1',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'title_cto_l1',
    array(
        'label'      => __('Primeira linha de título', 'title_cto_l1'),
        'settings'   => 'title_cto_l1',
        'section'    => 'cto_section',
        'type'       => 'text'
    )
));

// Linha dois do titulo da intro
$wp_customize->add_setting(
    'title_cto_l2',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'title_cto_l2',
    array(
        'label'      => __('Segunda linha de título em negrito', 'title_cto_l2'),
        'settings'   => 'title_cto_l2',
        'section'    => 'cto_section',
        'type'       => 'text'
    )
));

// Texto do botão
$wp_customize->add_setting(
    'text_btn_cto',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'text_btn_cto',
    array(
        'label'      => __('Segunda linha de título em negrito', 'text_btn_cto'),
        'settings'   => 'text_btn_cto',
        'section'    => 'cto_section',
        'type'       => 'text'
    )
));

// Link do botão
$wp_customize->add_setting(
    'link_btn_cto',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'link_btn_cto',
    array(
        'label'      => __('Segunda linha de título em negrito', 'link_btn_cto'),
        'settings'   => 'link_btn_cto',
        'section'    => 'cto_section',
        'type'       => 'text'
    )
));