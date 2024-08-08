<?php get_header() ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <main>
            <section id="post-title">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1><?= the_title() ?></h1>
                        </div>
                    </div>
                </div>
            </section>

            <article class="mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex flex-column mb-4">
                            <?php if (!empty(get_the_post_thumbnail_url($post, 'large'))) : ?>
                                <img src="<?= get_the_post_thumbnail_url($post, 'large') ?>" id="post-thumbnail" />
                            <?php endif; ?>
                            <div class="post-metadata">
                                <time class="post-date">Publicado em: <?= the_date() ?> às <?= the_time() ?></time>
                            </div>
                        </div>
                        <div class="col-12" id="post-content">
                            <?= the_content(); ?>
                        </div>
                    </div>
                </div>

                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6 d-flex justify-content-start mb-2 mb-md-0 post-nav">
                                <?php previous_post_link('%link', '← Publicação anterior') ?>
                            </div>
                            <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end post-nav">
                                <?php next_post_link('%link', 'Publicação mais recente →') ?>
                            </div>
                        </div>
                    </div>
                </footer>
            </article>
        </main>
<?php endwhile;
endif; ?>

<?php get_footer(); ?>