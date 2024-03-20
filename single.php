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
                            <img src="http://placehold.co/800x600" id="post-thumbnail" />
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
                            <div class="col-12 col-md-6 d-flex justify-content-start mb-2 mb-md-0">
                                <?php previous_post_link() ?>
                            </div>
                            <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end">
                                <?php next_post_link() ?>
                            </div>
                        </div>
                    </div>
                </footer>
            </article>
        </main>
<?php endwhile;
endif; ?>

<?php get_footer(); ?>