<?php
/*
Template name: Брекеты
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
      <div class="services-detailed__white-wrap">
        <div class="services-detailed__text">
          <h2>Устройство и принцип работы брекет-систем</h2>
          <div class="services-detailed__text-desc">
            <?php the_field('breket-desc'); ?>
          </div>
        </div>
        <div class="services-detailed__text-img img"><img src="<?php echo IMAGES_PATH ?>/breket.jpg"
                                                          alt="Устройство и принцип работы брекет-систем"></div>
      </div>
    </div>
    <div class="services-detailed__steps block">
      <div class="container">
        <h2>Этапы ортодонтического лечения<br>с&nbsp;помощью брекет-систем</h2>
        <ol class="services-detailed__steps-list">
          <?php while (have_rows('breket-steps')) : the_row() ?>
            <li class="implant__item">
              <h4 class="services-detailed__steps-list-title"><?php the_sub_field('title'); ?></h4>
              <div class="services-detailed__steps-list-text">
                <?php the_sub_field('desc'); ?>
              </div>
            </li>
          <?php endwhile; ?>
        </ol>
      </div>
    </div>
    <div class="container">
      <div class="protez__info protez__info_jaw">
        <div class="protez__info-text">
          <h2>Боль в челюстном суставе?</h2>
          <div class="protez__info-desc">В клинике “Флагманстом” вы получите бесплатную консультацию уникального
            специалиста - гнатолога. Это нобходимо для комплексного решения проблемы.
          </div>
        </div>
        <div class="protez__info-link button button-white open-callback" data-title="Боль в челюстном суставе">записаться <span class="tabletG-and-more"> на прием</span></div>
      </div>
    </div>

    <?php if (get_field('type')): ?>
      <div class="block">
        <div class="container container_big">
          <h2>Для вас мы собрали <span class="blue">самые оптимальные варианты систем<br>имплантации</span> из разных
            ценовых категорий </h2>
          <div class="implant__slider-pagination swiper-custom">
            <?php while (have_rows('type')) : the_row() ?>
              <span class="swiper-pagination-bullet button button-white <?php if (get_row_index() == 1) echo 'active' ?>"><?php the_sub_field('name'); ?></span>
            <?php endwhile; ?>
          </div>
          <div class="implant__slider">
            <div class="implant__slider-arrows">
              <svg class="swiper-arrow swiper-prev pointer">
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-implant.svg#arrow"></use>
              </svg>
              <svg class="swiper-arrow swiper-next pointer">
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-implant.svg#arrow"></use>
              </svg>
            </div>
            <div class="swiper-wrapper">
              <?php while (have_rows('type')) : the_row() ?>
                <div class="swiper-slide implant__slider-item">
                  <h3><?php the_sub_field('title'); ?></h3>
                  <div class="implant__slider-wrap">
                    <div class="implant__slider-info">
                      <p class="implant__slider-desc"><?php the_sub_field('desc'); ?></p>
                      <?php if (get_sub_field('advantages')): ?>
                        <h4>Преимущества:</h4>
                        <div class="implant__slider-adv-wrap">
                          <?php while (have_rows('advantages')) :
                            the_row() ?>
                            <div class="implant__slider-adv"><?php the_sub_field('text'); ?></div>
                          <?php endwhile; ?>
                        </div>
                      <?php endif; ?>
                    </div>
                    <div class="implant__slider-img img"><img class="swiper-lazy"
                                                              data-src="<?php the_sub_field('img'); ?>"
                                                              alt="<?php the_sub_field('title'); ?>"></div>
                  </div>
                  <?php if (get_sub_field('features')): ?>
                    <h4>Особенности:</h4>
                    <div class="implant__slider-box">
                      <?php while (have_rows('features')) : the_row() ?>
                        <div class="implant__slider-box-item">
                          <img src="<?php the_sub_field('logo'); ?>" alt="<?php the_sub_field('text'); ?>">
                          <span><?php the_sub_field('text'); ?></span>
                        </div>
                      <?php endwhile; ?>
                    </div>
                  <?php endif; ?>
                </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <div class="block">
      <div class="container container_big">
        <div class="help">
          <div class="help__text">
            <h2>Необходима помощь специалиста при решении?</h2>
            <div class="help__desc">Наши врачи проконсультируют Вас по вопросам протезирования и подберут с Вами
              подходящий вариант
            </div>
          </div>
          <div class="help__button button button-blue open-callback" data-title="Страница: Брекеты. Необходима помощь специалиста.">записаться
            на прием
          </div>
        </div>
      </div>
    </div>

    <?php get_template_part('template-parts/prices'); ?>
    <?php get_template_part('template-parts/cite'); ?>

    <div class="services-detailed__doctors">
      <div class="container">
        <h2>Исправление прикуса проводится <span class="blue">при комплексном подходе</span>&nbsp;ортодонтов и гнатолога Казани</h2>
        <?php global $post;
        $myposts = get_posts([
            'posts_per_page' => -1,
            'post_type' => 'doctors',
            'tax_query' => [
                [
                    'taxonomy' => 'specialisation',
                    'field' => 'slug',
                    'terms' => 'breket',
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
    <?php get_template_part('template-parts/callback'); ?>
    <?php get_template_part('template-parts/equipment'); ?>
    <?php get_template_part('template-parts/faq'); ?>
  </main>
<?php get_template_part('template-parts/footer'); ?>