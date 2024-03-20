<?php
get_header();

((is_home() || is_front_page()) && isFrontPageWithoutPagination()) ? get_template_part('components/front-page/front', 'page') : get_template_part('components/front-page/front', 'blog');

get_footer();
