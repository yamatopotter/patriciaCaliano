<?php
require_once('functions/assets.php');
require_once('custom-controls/custom-controls-functions.php');
require_once('customizer-repeater/functions.php');
require_once('customizer-repeater/inc/customizer.php');
require_once('functions/navwalker-bootstrap.php');

// Registrando um menu
register_nav_menus(
    array(
        'main_menu' => __('Menu Principal', 'meu-text-domain')
    )
);

// Opções de personalização do tema
function theme_customizer_settings($wp_customize)
{
    // Painel Página Inicial
    $wp_customize->add_panel('start_panel', array(
        'priority'   => 22,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => 'Página inicial',
        'description'    => ''
    ));

    // Painel Página Inicial
    $wp_customize->add_panel('footer_panel', array(
        'priority'   => 22,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => 'Rodapé',
        'description'    => ''
    ));

    // Painel Página Inicial
    $wp_customize->add_panel('blog_panel', array(
        'priority'   => 23,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => 'Blog',
        'description'    => ''
    ));

    include_once('functions/customizer/header.php');
    include_once('functions/customizer/about-me.php');
    include_once('functions/customizer/psychoterapies.php');
    include_once('functions/customizer/cto.php');
    include_once('functions/customizer/about-specific-service.php');
    include_once('functions/customizer/latest-posts.php');
    include_once('functions/customizer/slider.php');
    include_once('functions/customizer/contact.php');
    include_once('functions/customizer/footer.php');
    include_once('functions/customizer/blog.php');
}

add_action('customize_register', 'theme_customizer_settings');

// Custom posts quantity for home
function custom_posts_per_page($query)
{
    if ((is_front_page() || is_home()) && isFrontPageWithoutPagination()) { // Se estiver na página inicial ou em uma página de arquivo
        $posts_per_page = get_option('posts_per_page'); // Obtém o número padrão de posts por página definido nas configurações do WordPress
        if ($posts_per_page) {
            $query->set('posts_per_page', 3); // Define o número de posts por página como o número padrão
        }
    }
}
add_action('pre_get_posts', 'custom_posts_per_page');

function isFrontPageWithoutPagination()
{
    global $wp;

    $current_url =  home_url($wp->request);
    $position = strpos($current_url, '/page');
    $nopaging_url = ($position) ? substr($current_url, 0, $position) : $current_url;

    if ($nopaging_url == $current_url) {
        return true;
    }

    return false;
}
