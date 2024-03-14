<?php get_header(); ?>

<main>
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
          <span class="separator"><img src="./assets/img/pink-brain.png" /></span>
        </div>

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
            <span>Faça o agendamento</span>
            <span class="bold"> da sua consulta online! </span>
          </h1>
        </div>

        <div class="col-12 col-md-6">
          <a href="#" class="btn btn-primary">Agendar agora</a>
        </div>
      </div>
    </div>
  </section>

  <section id="about-specific-service">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-7 col-lg-8">
          <h1 class="d-flex flex-column mb-4">
            <span>Terapia do Esquema</span>
            <span>Cognitivo Comportamental</span>
          </h1>

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Suscipit in nam dolorem enim, cumque et tempora possimus minus
            repellat nobis assumenda ut eius laudantium? Voluptate pariatur
            earum in nostrum suscipit accusantium animi corporis, modi
            mollitia alias fuga delectus beatae non laboriosam saepe omnis
            praesentium incidunt dignissimos velit sed labore temporibus!
          </p>

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Suscipit in nam dolorem enim, cumque et tempora possimus minus
            repellat nobis assumenda ut eius laudantium? Voluptate pariatur
            earum in nostrum suscipit accusantium animi corporis, modi
            mollitia alias fuga delectus beatae non laboriosam saepe omnis
            praesentium incidunt dignissimos velit sed labore temporibus!
          </p>

          <a href="#" class="btn btn-primary">Agendar agora</a>
        </div>

        <div class="col-12 col-md-5 col-lg-4">
          <img src="./assets/img/09.png" />
        </div>
      </div>
    </div>
  </section>

  <section id="latest-posts">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center mb-4">
          <h1>Novidades no Blog</h1>
          <span class="separator"><img src="./assets/img/dark-pink-comment.png" /></span>
        </div>
      </div>

      <div class="row">
        <article class="col-12 col-lg-4">
          <div class="card">
            <h1>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Voluptate, tempora!
            </h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga,
              unde. Delectus nihil animi voluptas cupiditate nisi mollitia
              sapiente quas consequatur.
            </p>
            <time>date of post</time>
          </div>
        </article>

        <article class="col-12 col-lg-4">
          <div class="card">
            <h1>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Voluptate, tempora!
            </h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga,
              unde. Delectus nihil animi voluptas cupiditate nisi mollitia
              sapiente quas consequatur.
            </p>
            <time>date of post</time>
          </div>
        </article>

        <article class="col-12 col-lg-4">
          <div class="card">
            <h1>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Voluptate, tempora!
            </h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga,
              unde. Delectus nihil animi voluptas cupiditate nisi mollitia
              sapiente quas consequatur.
            </p>
            <time>date of post</time>
          </div>
        </article>

        <div class="col-12 d-flex justify-content-center mt-0 mt-lg-5">
          <a href="#" class="btn btn-primary m-auto">Veja mais publicações</a>
        </div>
      </div>
    </div>
  </section>

  <section id="slider">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center mb-4">
          <h1>Quem confia no meu trabalho</h1>
          <span class="separator"><img src="./assets/img/pink-chat.png" /></span>
        </div>

        <div class="col-12">
          <swiper-container class="swiper" pagination="true" pagination-clickable="true" navigation="true" space-between="30" loop="true">
            <swiper-slide>
              <div class="px-5 p-lg-5 mx-2 mx-lg-5 text-center">
                <h2>Rodrigo Estevez - Vestibulando</h2>
                <p>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Perspiciatis voluptate animi odit quam ipsa sint delectus
                  voluptatum, neque impedit culpa, consectetur beatae quis
                  facilis doloribus maxime laboriosam voluptas iste veniam.
                  Tempora odit aliquid laudantium perspiciatis fugiat iusto.
                  Officia voluptatem reiciendis voluptate necessitatibus
                  nostrum quo id. Neque enim delectus sequi ipsam temporibus
                  quidem necessitatibus ratione, eius id molestias voluptate
                  praesentium corporis!
                </p>
              </div>
            </swiper-slide>

            <swiper-slide>
              <div class="px-5 pb-5 p-lg-5 mx-2 mx-lg-5 text-center">
                <h2>Rodrigo Estevez - Vestibulando</h2>
                <p>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Perspiciatis voluptate animi odit quam ipsa sint delectus
                  voluptatum, neque impedit culpa, consectetur beatae quis
                  facilis doloribus maxime laboriosam voluptas iste veniam.
                  Tempora odit aliquid laudantium perspiciatis fugiat iusto.
                  Officia voluptatem reiciendis voluptate necessitatibus
                  nostrum quo id. Neque enim delectus sequi ipsam temporibus
                  quidem necessitatibus ratione, eius id molestias voluptate
                  praesentium corporis!
                </p>
              </div>
            </swiper-slide>

            <swiper-slide>
              <div class="px-5 pb-5 p-lg-5 mx-2 mx-lg-5 text-center">
                <h2>Rodrigo Estevez - Vestibulando</h2>
                <p>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Perspiciatis voluptate animi odit quam ipsa sint delectus
                  voluptatum, neque impedit culpa, consectetur beatae quis
                  facilis doloribus maxime laboriosam voluptas iste veniam.
                  Tempora odit aliquid laudantium perspiciatis fugiat iusto.
                  Officia voluptatem reiciendis voluptate necessitatibus
                  nostrum quo id. Neque enim delectus sequi ipsam temporibus
                  quidem necessitatibus ratione, eius id molestias voluptate
                  praesentium corporis!
                </p>
              </div>
            </swiper-slide>
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
            Se quiser falar comigo sobre sessões de Psicoterapia, Coaching,
            Workshops ou Treinamentos,
            <strong>agende uma conversa comigo pelo whatsapp ou enviando um
              email</strong>.
          </span>

          <div class="d-flex align-items-center gap-3 contact-info">
            <img src="./assets/img/12.png" /><span>21 22222222222</span>
          </div>

          <div class="d-flex align-items-center gap-3 contact-info">
            <img src="./assets/img/13.png" /><span>contato@patriciacaliano.com.br</span>
          </div>
        </div>

        <div class="col-12 col-md-4 col-lg-6">
          <img src="./assets/img/patricia-perfil.png" alt="" id="contact-picture" />
        </div>
      </div>
    </div>
  </section>
</main>

<footer id="default-footer">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-12 col-md-4 col-lg-6 d-flex gap-3 social-media">
        <a href="#">
          <img src="./assets/img/15.png" alt="" />
        </a>
        <a href="#">
          <img src="./assets/img/16.png" alt="" />
        </a>
        <a href="#">
          <img src="./assets/img/17.png" alt="" />
        </a>
      </div>

      <div class="col-12 col-md-8 col-lg-6">
        <p>
          © Copyright 2024 Patricia Caliano - Todos os direitos reservados
        </p>
      </div>
    </div>
  </div>
</footer>

<script src=""></script>
</body>

</html>