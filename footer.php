<footer id="default-footer">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-md-4 col-lg-6 d-flex gap-3 social-media">
                <?= get_theme_mod('facebook_url') == '' ? '' : "<a href='" . get_theme_mod('facebook_url') . "'> <img src='" . get_template_directory_uri() . "/assets/img/15.png' alt='Facebook'/> </a>" ?>
                <?= get_theme_mod('x_url') == '' ? '' : "<a href='" . get_theme_mod('x_url') . "'> <img src='" . get_template_directory_uri() . "/assets/img/16.png' alt='X'/> </a>" ?>
                <?= get_theme_mod('instagram_url') == '' ? '' : "<a href='" . get_theme_mod('instagram_url') . "'> <img src='" . get_template_directory_uri() . "/assets/img/17.png' alt='Instagram'/> </a>" ?>
            </div>

            <div class="col-12 col-md-8 col-lg-6">
                <p>
                    © Copyright <?= date("Y") ?> Patricia Caliano - Todos os direitos reservados
                </p>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>

</body>

</html>