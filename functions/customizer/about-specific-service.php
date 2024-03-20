<?php
// Specific service section
$wp_customize->add_section('about_specific_service_section', array(
    'title'      => __('Serviço específico'),
    'priority'   => 4,
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
        'label'      => __('Texto do botão de ação', 'text_btn_specific_service'),
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
        'label'      => __('Link do botão de açao', 'link_btn_specific_service'),
        'settings'   => 'link_btn_specific_service',
        'section'    => 'about_specific_service_section',
        'type'       => 'text'
    )
));


// Sobre o serviço
$wp_customize->add_setting(
    'text_about_specific_service',
    array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post'
    )
);
$wp_customize->add_control(new Skyrocket_TinyMCE_Custom_control(
    $wp_customize,
    'text_about_specific_service',
    array(
        'label' => __('Sobre o serviço'),
        'description' => __('Campo para o texto do serviço'),
        'section' => 'about_specific_service_section',
        'input_attrs' => array(
            'toolbar1' => 'bold italic bullist numlist alignleft aligncenter alignright link',
            'toolbar2' => 'formatselect outdent indent | blockquote charmap',
            'mediaButtons' => true,
        )
    )
));

// Imagem da sessão
$wp_customize->add_setting(
    'img_specific_service',
    array(
        'default' => '',
        'transport' => 'refresh',
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'img_specific_service',
    array(
        'label'      => __('Imagem da sessão de serviço específico', 'img_specific_service'),
        'settings'   => 'img_specific_service',
        'section'    => 'about_specific_service_section',
        'type'       => 'image'
    )
));
