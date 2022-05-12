<?php
/*
Template name: Детская
Template post type: services
*/
?>
<?php get_template_part('template-parts/header/header'); ?>
  <main>
    <section class="page-banner">
      <div class="container">
        <div class="page-banner__wrap">
          <div class="page-banner__text">
            <h1><?php the_title() ?></h1>
            <?php if (get_field('is-sale')): ?>
              <div class="page-banner__sale">
                <?php the_field('sale'); ?>
              </div>
            <?php endif; ?>
            <div class="page-banner__desc"><?php the_content(); ?></div>
            <div class="page-banner__buttonrow">
              <div class="button button-blue open-callback" data-title="Страница <?php the_title() ?>">Записаться на
                прием
              </div>
            </div>
          </div>
        </div>
        <div class="banner__box-wrap tabletG-and-more">
          <div class="banner__box">
            <div class="banner__box-item">
              <svg class="banner__box-svg">
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#banner-1"></use>
              </svg>
              <div class="banner__box-desc">Высококвалифицированные врачи решают ваши проблемы с зубами уже более 5
                лет
              </div>
            </div>
            <div class="banner__box-item">
              <svg class="banner__box-svg">
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#banner-2"></use>
              </svg>
              <div class="banner__box-desc">В работе используется только лучшее оборудование и высококлассные
                материалы
              </div>
            </div>
            <div class="banner__box-item">
              <svg class="banner__box-svg">
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#banner-3"></use>
              </svg>
              <div class="banner__box-desc">Расположение рядом с метро - Вы всегда можете добраться без пробок и потери
                времени
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="services-detailed__wrap">
        <div class="services-detailed__text">
          <h2>Детские стоматологические услуги</h2>
          <div class="services-detailed__text-desc">
            <p><?php the_field('children-desc'); ?></p>
          </div>
          <div class="services-detailed__text-last">
            <img src="<?php echo IMAGES_PATH ?>/sprite-content/vinir.svg">
            <p>Любые манипуляции, проводимые врачом, выполняются только под местной анестезией, чтобы маленькие
              пациенты не испытывали даже незначительный дискомфорт</p>
          </div>
        </div>
        <div class="services-detailed__aside">
          <div class="burning__box">
            <h4><?php the_field('children-advantages-title'); ?></h4>
            <?php while (have_rows('children-advantages-info')) : the_row() ?>
              <div class="burning__box-item">
                <svg>
                  <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
                </svg>
                <p><?php the_sub_field('text'); ?></p>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
    <?php get_template_part('template-parts/cite'); ?>
    <?php $images = get_field('children-equipment'); ?>
    <?php if ($images): ?>
      <div class="equipment block">
        <div class="container">
          <h2>Лечение зубов у детей будет проходить с современным<br>оборудованием и в комфортной обстановке</h2>
          <div class="equipment__wrap">
            <?php foreach ($images as $image_id): ?>
              <div class="equipment__img img">
                <img src="<?php echo $image_id ?>">
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <?php get_template_part('template-parts/prices'); ?>
    <div class="container">
      <div class="protez__info protez__info_children">
        <div class="protez__info-text">
          <h2>Необходимы брекеты?</h2>
          <div class="protez__info-desc">Наши ортопеды, с опытом работы более 35 лет, помогут Вам в исправлении
            прикуса</span></div>
        </div>
        <a href="#" class="protez__info-link button button-white">
          <span>подробнее</span>
          <svg>
            <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-common.svg#arrow-right-top"></use>
          </svg>
        </a>
      </div>
    </div>
    <div class="services-detailed__doctors">
      <div class="container">
        <h2>Прием маленьких пациентов <span class="blue">ведут квалифицированные детские стоматологи</span>, умеющие
          найти подход даже в сложных ситуациях.</h2>
        <?php global $post;
        $myposts = get_posts([
            'posts_per_page' => -1,
            'post_type' => 'doctors',
            'tax_query' => [
                [
                    'taxonomy' => 'specialisation',
                    'field' => 'slug',
                    'terms' => 'children',
                ]
            ]
        ]);
        ?>
        <div class="services__slider">
          <div class="swiper-wrapper">
            <?php foreach ($myposts as $post) {
              setup_postdata($post);
              ?>
              <div class="swiper-slide">
                <div class="services__slider-item">
                  <?php if (get_field('lead-doc')): ?>
                    <div class="lead services__slider-lead">
                      <span>Ведущий врач</span>
                    </div>
                  <?php endif; ?>
                  <div class="services__slider-title"><?php the_title() ?></div>
                  <div class="services__slider-occupation"><?php the_field('spec'); ?></div>
                  <div class="services__slider-exp">Опыт работы: <?php the_field('exp'); ?></div>
                  <div class="services__slider-excerpt"><?php the_excerpt(); ?></div>
                  <a href="<?php the_permalink(); ?>" class="services__slider-link button button-blue">
                    <span>подробнее</span>
                    <svg>
                      <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-common.svg#arrow-right-top"></use>
                    </svg>
                  </a>
                  <?php if (has_post_thumbnail()): ?>
                    <div class="services__slider-img img">
                      <img data-src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title() ?>"
                           class="swiper-lazy">
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            <?php };
            ?>
          </div>
          <div class="pagination"></div>
        </div>
        <?php wp_reset_postdata(); ?>
        <a href="/doctors" class="button button-white services-detailed__doctors-all">показать всех врачей</a>
      </div>
    </div>
    <div class="services-detailed__advantages block">
      <div class="container">
        <h2>Особенности приема у детского стоматолога</h2>
        <div class="services-detailed__advantages-desc">Детская стоматология намного сложнее взрослой, так как
          патологические процессы протекают иначе. Поскольку ребенок не замотивирован лечить зубы, детский стоматолог
          уделяет особое место психологической подготовке к лечению.
        </div>
        <div class="services-detailed__advantages-item">
          <span>Детские болезни зубов протекают намного быстрее, поэтому обязательной рекомендацией являются профилактические процедуры</span>
        </div>
        <div class="services-detailed__advantages-item"><span>Все процедуры проходят только под местной анестезией, чтобы маленькие пациенты не испытывали дискомфорта и страха перед лечением зубов.</span>
        </div>
        <div class="services-detailed__advantages-item"><span>Наши специалисты проводят анестезию незаметно для детей, поэтому испуг и другие негативные эмоции исключаются</span>
        </div>
        <div class="services-detailed__advantages-item"><span>В работе детских стоматологов применяются специализированные материалы, поскольку материалы, используемые для взрослых, детям не подходят.</span>
        </div>
        <div class="services-detailed__advantages-item"><span>Особое внимание в детской стоматологии уделяется профилактическим процедурам:  серебрение, герметизация фиссур и фторирование зубов. Благодаря профилактическим процедурам снижается необходимость лечения и, как следствие, формируется здоровый зубной ряд.</span>
        </div>
      </div>
    </div>
    <?php get_template_part('template-parts/callback'); ?>
    <?php get_template_part('template-parts/faq'); ?>
  </main>
<?php get_template_part('template-parts/footer'); ?>