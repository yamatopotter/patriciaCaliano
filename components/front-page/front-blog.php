    <section id="title-archive">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Blog da Patrícia</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Excepturi et aperiam obcaecati iste ex nemo, tempore eveniet
                        provident voluptas placeat!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <section id="post-list" class="col-12 col-md-9 d-flex flex-column gap-4">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article class="post-card">
                            <img src="https://placehold.co/300x300" />
                            <div class="post-card-body">
                                <h2 class="post-title"><?= the_title() ?></h2>
                                <time class="post-date"><?= the_date() ?> às <?= the_time() ?></time>
                                <p class="post-excerpt">
                                    <?= the_excerpt() ?>
                                </p>
                                <a href="<?= the_permalink() ?>" class="btn btn-primary">Continue lendo →</a>
                            </div>
                        </article>

                        <span class="post-separator"></span>
                <?php endwhile;
                endif; ?>

                <footer class="d-flex justify-content-between post-nav">
                    <?= isFrontPageWithoutPagination() ?>
                    <?= get_previous_posts_link("← Posts recentes") ?>
                    <?= get_next_posts_link("Posts anteriores → ") ?>
                </footer>
            </section>

            <aside id="sidebar" class="col-12 col-md-3 d-flex flex-column gap-4"></aside>
        </div>
    </div>