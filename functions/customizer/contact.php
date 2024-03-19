<?php

// Header Section
$wp_customize->add_section('contact_section', array(
    'title'      => __('Contato'),
    'priority'   => 1,
    'panel'    => 'start_panel'
));

// Linha um do titulo da intro
$wp_customize->add_setting(
    'whatsapp_contact',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'whatsapp_contact',
    array(
        'label'      => __('Contato do whatsapp', 'whatsapp_contact'),
        'settings'   => 'whatsapp_contact',
        'section'    => 'contact_section',
        'type'       => 'text'
    )
));

// Linha dois do titulo da intro
$wp_customize->add_setting(
    'email_contact',
    array(
        'default' => '',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'email_contact',
    array(
        'label'      => __('Contato do email', 'email_contact'),
        'settings'   => 'email_contact',
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
        'label'      => __('Imagem principal', 'img_contact'),
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
