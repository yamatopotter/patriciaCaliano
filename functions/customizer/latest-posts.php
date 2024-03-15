<?php
// Latest posts section
$wp_customize->add_section('latest_posts_section', array(
    'title'      => __('Ultimos posts'),
    'priority'   => 0,
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
        'label'      => __('Primeira linha de título', 'title_latest_posts'),
        'settings'   => 'title_latest_posts',
        'section'    => 'about_specific_service_section',
        'type'       => 'text'
    )
));
