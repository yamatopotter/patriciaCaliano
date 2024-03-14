<?php global $body_class; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Folha Vitória">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">


    <meta http-equiv="cleartype" content="on">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <?php wp_head(); ?>
</head>

<body class="<?php echo $body_class ?>">
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="./assets/img/01.png" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                wp_nav_menu(array(
                'theme_location' => 'main_menu',
                'depth' => 2,
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse justify-content-end',
                'container_id' => 'navbarSupportedContent',
                'menu_class' => 'navbar-nav mb-2 mb-lg-0',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker(),
                ));
                ?>
                <!-- <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <?php
                    // $args = array('menu_class' => 'navbar-nav mb-2 mb-lg-0', 'menu' => 'main_menu', 'container' => false);
                    ?>

                     <ul class="navbar-nav mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul> -->
            </div>
            </div>
        </nav>
    </header>