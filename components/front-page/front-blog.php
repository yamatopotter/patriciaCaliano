    <section id="title-archive">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1><?= get_theme_mod('blog_name') == '' ? 'Meu blog' : get_theme_mod('blog_name') ?></h1>
                    <?php if (get_theme_mod('blog_subtitle') != '') : ?>
                        <p>
                            <?= get_theme_mod('blog_subtitle'); ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <section id="post-list" class="col-12 d-flex flex-column gap-4">

                <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                        get_template_part('components/blog/post', 'item');
                    endwhile;
                endif;
                ?>

                <footer class="d-flex justify-content-between post-nav">
                    <?= isFrontPageWithoutPagination() ?>
                    <?= get_previous_posts_link("← Posts anteriores") ?>
                    <?= get_next_posts_link("Posts recentes →") ?>
                </footer>
            </section>

            <aside id="sidebar" class="col-12 col-md-3 d-flex flex-column gap-4"></aside>
        </div>
    </div>