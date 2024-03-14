<?php
require_once('functions/assets.php');
require_once('functions/navwalker-bootstrap.php');

// Registrando um menu
register_nav_menus(
    array(
        'main_menu' => __('Menu Principal', 'meu-text-domain')
    )
);