<section id="intro">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9 d-flex flex-column gap-2">
                <?php if (get_theme_mod('img_intro') != '') : ?>
                    <img src="<?= get_theme_mod('img_intro'); ?>" id="brain-img" />
                <?php endif; ?>

                <h1 class="d-flex flex-column">
                    <span><?= get_theme_mod('title_intro_l1'); ?></span>
                    <span class="bold"><?= get_theme_mod('title_intro_l2'); ?></span>
                </h1>
                <p class="h4">
                    <?= get_theme_mod('text_intro'); ?>
                </p>

                <?php if (get_theme_mod('link_btn') != '') : ?>
                    <a href="<?= get_theme_mod('link_btn') ?>" class="btn btn-primary">Saiba mais</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section id="about-me">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <?php if (get_theme_mod('img_about_me') != '') : ?>
                    <img src="<?= get_theme_mod('img_about_me') ?>" />
                <?php endif; ?>
            </div>

            <div class="col-12 col-md-6">
                <h1><?= get_theme_mod('title_about_us_1') == '' ? "Quem" : get_theme_mod('title_about_us_1') ?> <span class="bold"><?= get_theme_mod('title_about_us_2') == '' ? "eu sou?" : get_theme_mod('title_about_us_2') ?></span></h1>

                <?= get_theme_mod('text_about_me') ?>
            </div>
        </div>
    </div>
</section>

<section id="psychotherapies">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h1 class="last-word-bold"><?= get_theme_mod('title_psychotherapies') == '' ? 'As minhas Psicoterapias' : get_theme_mod('title_psychotherapies') ?></h1>
                <span class="separator"><img src="<?= get_theme_mod('icon_separator_psychotherapies') == '' ?
                                                        get_template_directory_uri() . '/assets/img/pink-brain.png' :
                                                        get_theme_mod('icon_separator_psychotherapies') ?>" /></span>
            </div>
        </div>

        <div class="row justify-content-center">
            <?php
            $repeater = get_theme_mod('customizer_repeater_psychotherapies', json_encode(array(/*The content from your default parameter or delete this argument if you don't want a default*/)));
            /*This returns a json so we have to decode it*/
            $repeater_decoded = json_decode($repeater);
            foreach ($repeater_decoded as $repeater_item) : ?>

                <div class="col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center service-item">
                    <img src="<?= $repeater_item->image_url; ?>" />

                    <p>
                        <?= $repeater_item->text; ?>
                    </p>

                    <a href="<?= $repeater_item->link ?>" class="btn btn-primary">Saiba mais</a>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</section>

<section id="cto-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <h1 class="d-flex flex-column text-center text-md-end">
                    <span><?= get_theme_mod('title_cto_l1') == '' ? 'Faça o agendamento' : get_theme_mod('title_cto_l1'); ?></span>
                    <span class="bold"><?= get_theme_mod('title_cto_l2') == '' ? 'Faça o agendamento' : get_theme_mod('title_cto_l2'); ?></span>
                </h1>
            </div>

            <div class="col-12 col-md-6">
                <a href="<?= get_theme_mod('link_btn_cto') == '' ? '#' : get_theme_mod('link_btn_cto'); ?>" class="btn btn-primary"><?= get_theme_mod('text_btn_cto') == '' ? 'Agende agora' : get_theme_mod('text_btn_cto'); ?></a>
            </div>
        </div>
    </div>
</section>

<section id="about-specific-service">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-7 col-lg-8">
                <h1 class="d-flex flex-column mb-4">
                    <span><?= get_theme_mod('title_specific_service_l1') ?></span>
                    <?php if (get_theme_mod('title_specific_service_l2') !== '') : ?>
                        <span><?= get_theme_mod('title_specific_service_l2'); ?></span>
                    <?php endif; ?>
                </h1>

                <?= get_theme_mod('text_about_specific_service') ?>

                <?php if (get_theme_mod('link_btn_specific_service') != '') : ?>
                    <a href="<?php get_theme_mod('link_btn_specific_service') ?>" class="btn btn-primary"><?= get_theme_mod('text_btn_specific_service') ?></a>
                <?php endif; ?>
            </div>

            <div class="col-12 col-md-5 col-lg-4">
                <img src="<?= get_theme_mod('img_specific_service') ?>" />
            </div>
        </div>
    </div>
</section>

<section id="latest-posts">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h1><?= get_theme_mod('title_latest_posts') == '' ? 'Novidades no Blog' : get_theme_mod('title_latest_posts') ?></h1>
                <span class="separator"><img src="<?= get_theme_mod('icon_separator_latest_posts') == '' ?
                                                        get_template_directory_uri() . '/assets/img/dark-pink-comment.png' :
                                                        get_theme_mod('icon_separator_latest_posts') ?>" /></span>
            </div>
        </div>

        <div class="row">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="col-12 col-lg-4">
                        <div class="card">
                            <h1>
                                <a href="<?= the_permalink() ?>"><?= the_title(); ?></a>
                            </h1>

                            <time class='post-date'><?= the_date() ?></time>

                            <hr class="mb-3">

                            <?= the_excerpt(); ?>
                        </div>
                    </article>
            <?php endwhile;
            endif ?>

            <div class="col-12 d-flex justify-content-center mt-0 mt-lg-5 post-nav align-items-center">
                <?= get_next_posts_link("Veja mais publicações") ?>
            </div>
        </div>
    </div>
</section>

<section id="slider">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h1><?= get_theme_mod('title_slider') == '' ? 'Quem confia no meu trabalho' : get_theme_mod('title_slider') ?></h1>
                <span class="separator"><img src="<?= get_theme_mod('icon_separator_slider') == '' ?
                                                        get_template_directory_uri() . '/assets/img/pink-chat.png' :
                                                        get_theme_mod('icon_separator_slider') ?>" /></span>
            </div>

            <div class="col-12">
                <swiper-container class="swiper" pagination="true" pagination-clickable="true" navigation="true" space-between="30" loop="true">
                    <?php
                    $repeater = get_theme_mod('customizer_repeater_slider', json_encode(array(/*The content from your default parameter or delete this argument if you don't want a default*/)));
                    /*This returns a json so we have to decode it*/
                    $repeater_decoded = json_decode($repeater);
                    foreach ($repeater_decoded as $repeater_item) : ?>

                        <swiper-slide>
                            <div class="px-5 p-lg-5 mx-2 mx-lg-5 text-center">
                                <h2><?= $repeater_item->title; ?> - <?= $repeater_item->subtitle; ?></h2>
                                <p>
                                    <?= $repeater_item->text; ?>
                                </p>
                            </div>
                        </swiper-slide>
                    <?php
                    endforeach;
                    ?>
                </swiper-container>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-8 col-lg-6 d-flex flex-column gap-4 mb-5 mb-lg-0">
                <span class="text">
                    <?= get_theme_mod('text_contact') ?>
                </span>

                <div class="d-flex align-items-center gap-3 contact-info">
                    <img src="<?= get_theme_mod('img_contact_1') ?>" /><span><?= get_theme_mod('contact_1') ?></span>
                </div>

                <div class="d-flex align-items-center gap-3 contact-info">
                    <img src="<?= get_theme_mod('img_contact_2') ?>" /><span><?= get_theme_mod('contact_2') ?></span>
                </div>
            </div>

            <div class="col-12 col-md-4 col-lg-6">
                <img src="<?= get_theme_mod('img_contact') ?>" alt="" id="contact-picture" />
            </div>
        </div>
    </div>
</section>