<article class="post-card">
    <?= the_post_thumbnail('medium'); ?>
    <div class="post-card-body">
        <h2 class="post-title"><?= the_title() ?></h2>
        <time class="post-date"><?= the_date() ?> às <?= the_time() ?></time>
        <div class="post-excerpt">
            <?= the_excerpt() ?>
        </div>
        <a href="<?= the_permalink() ?>" class="btn btn-primary">Continue lendo →</a>
    </div>
</article>

<span class="post-separator"></span>