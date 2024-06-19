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
                        </div>
                        <div class="col-12" id="post-content">
                            <?= the_content(); ?>
                        </div>
                    </div>
                </div>
            </article>
        </main>
<?php endwhile;
endif; ?>

<?php get_footer(); ?>