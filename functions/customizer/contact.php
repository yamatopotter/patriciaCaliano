<?php

// Header Section
$wp_customize->add_section('contact_section', array(
    'title'      => __('Contato'),
    'priority'   => 1,
    'panel'    => 'start_panel'
));

// Foto do contato
$wp_customize->add_setting(
    'img_contact_1',
    array(
        'default' => '',
        'transport' => 'refresh',
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'img_contact_1',
    array(
        'label'      => __('Imagem da forma contato 1', 'img_contact_1'),
        'settings'   => 'img_contact_1',
        'section'    => 'contact_section',
        'type'       => 'image'
    )
));

// Linha um do titulo da intro
$wp_customize->add_setting(
    'contact_1',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'contact_1',
    array(
        'label'      => __('Forma de contato 1', 'contact_1'),
        'settings'   => 'contact_1',
        'section'    => 'contact_section',
        'type'       => 'text'
    )
));

// Foto do contato
$wp_customize->add_setting(
    'img_contact_2',
    array(
        'default' => '',
        'transport' => 'refresh',
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'img_contact_2',
    array(
        'label'      => __('Imagem da forma de contato 2', 'img_contact_2'),
        'settings'   => 'img_contact_2',
        'section'    => 'contact_section',
        'type'       => 'image'
    )
));

// Linha dois do titulo da intro
$wp_customize->add_setting(
    'contact_2',
    array(
        'default' => '',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'contact_2',
    array(
        'label'      => __('Forma de contato 2', 'contact_2'),
        'settings'   => 'contact_2',
        'section'    => 'contact_section',
        'type'       => 'text'
    )
));

// Foto do contato
$wp_customize->add_setting(
    'img_contact',
    array(
        'default' => '',
        'transport' => 'refresh',
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'img_contact',
    array(
        'label'      => __('Imagem principal da sessão de contato', 'img_contact'),
        'settings'   => 'img_contact',
        'section'    => 'contact_section',
        'type'       => 'image'
    )
));

// Texto do contato
$wp_customize->add_setting(
    'text_contact',
    array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post'
    )
);
$wp_customize->add_control(new Skyrocket_TinyMCE_Custom_control(
    $wp_customize,
    'text_contact',
    array(
        'label' => __('Texto do bloco'),
        'description' => __('Texto que irá aparecer na área de contato'),
        'section' => 'contact_section',
        'input_attrs' => array(
            'toolbar1' => 'bold italic bullist numlist alignleft aligncenter alignright link',
            'toolbar2' => 'formatselect outdent indent | blockquote charmap',
            'mediaButtons' => true,
        )
    )
));
