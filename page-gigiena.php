<?php
/*
Template name: Гигиена
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
      <div class="services-detailed__text">
        <h2>Подробнее о комплексной профессиональной гигиене зубов</h2>
        <div class="services-detailed__text-desc">
          <p>Профессиональная гигиена зубов — это эффективный профилактический метод очистки поверхности всех зубов от
            налета и твердых отложений. Под воздействием различных факторов на зубах образуются твердые и мягкие
            отложения. Обычно они скапливаются в труднодоступных при чистке местах, таких как межзубное пространство
            или рядом с десной. Избавиться от мягких и твердых отложений помогает гигиена полости рта.</p>
          <p>Цена данной процедуры зависит от используемых технологий и материалов, а также количества этапов
            очищения. Однако, любой стоматолог порекомендует вам не экономить на процедуре и проводить ее с
            регулярностью раз в полгода. Такая регулярность помогает предотвратить развитие серьезных заболеваний и не
            заниматься в дальнешем долгим и дорогостоящим лечением. Профессиональная гигиена зубов - лучший способ
            профилактики кариеса, пародонтита и воспаления десен, причиной которых становятся развивающиеся
            бактерии. </p>
        </div>
      </div>
    </div>
    <div class="block">
      <div class="container">
        <h2>Что входит в комплексную профессиональную чистку? </h2>
        <div class="stages">
          <div class="stages__box">
            <h4>Удаление зубного камня ультразвуковым аппаратом</h4>
            <p>Зубной камень является причиной заболеваний дёсен и развития кариеса, поскольку создается благоприятная
              среда для развития бактерий. Если зубной камень уже имеется, то чистка зубов в стоматологии -
              единственный выход.</p>
          </div>
          <div class="stages__box">
            <h4>Очищение зубов от налёта и бактерий</h4>
            <p>Данный этап проводится с помощью системы Air Flow. Это безопасный и безболезненный способ
              профессиональной чистки, не повреждающий эмаль. При регулярной чистке зубов проводится профилактика
              кариеса и увеличивается срок службы имеющихся пломб. </p>
          </div>
          <div class="stages__box">
            <h4>Полировка зубов и фторирование</h4>
            <p>В результате полировки и чистки зубов от налёта зубы становятся светлее на 1-3 тона. Завершается этап
              фторированием зубов - нанесением вот этого всего, благодаря чему в 115 раз снижается риск возникновения
              кариеса</p>
          </div>
        </div>
      </div>
    </div>
    <div class="block">
      <div class="container container_big">
        <div class="airflow">
          <div class="airflow__text">
            <h2>Почему мы используем <span class="nowrap">систему Air Flow?</span></h2>
            <p>Технология Air Flow была разработана в Швейцарии. Она предусматривает использование мелкодисперсного
              порошка соды в смеси с водой и воздухом. Чистящая смесь из особого аппарата под напором подается на
              зубы. Она устраняет с них поверхностные загрязнения и мягкие отложения, не поддающиеся обычной зубной
              щетке, а также проникает в самые труднодоступные места зубного ряда, например в межзубные промежутки</p>
          </div>
          <div class="airflow__img img">
            <img src="<?php echo IMAGES_PATH ?>/airflow.jpg" alt="Air Flow">
          </div>
          <div class="airflow__wrap">
            <div class="airflow__item">
              <div class="airflow__item-title">
                <svg>
                  <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-airflow.svg#airflow1"></use>
                </svg>
                <h4>Абсолютно безопасная процедура</h4>
              </div>
              <div class="airflow__item-text">В составе нет агрессивных химических веществ. Он не разрушает эмаль
                зубов, поэтому удалять с них налет таким образом можно достаточно часто.
              </div>
            </div>
            <div class="airflow__item">
              <div class="airflow__item-title">
                <svg>
                  <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-airflow.svg#airflow2"></use>
                </svg>
                <h4>Абсолютно безопасная процедура</h4>
              </div>
              <div class="airflow__item-text">В составе нет агрессивных химических веществ. Он не разрушает эмаль
                зубов, поэтому удалять с них налет таким образом можно достаточно часто.
              </div>
            </div>
            <div class="airflow__item">
              <div class="airflow__item-title">
                <svg>
                  <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-airflow.svg#airflow3"></use>
                </svg>
                <h4>Абсолютно безопасная процедура</h4>
              </div>
              <div class="airflow__item-text">В составе нет агрессивных химических веществ. Он не разрушает эмаль
                зубов, поэтому удалять с них налет таким образом можно достаточно часто.
              </div>
            </div>
          </div>
          <div class="airflow__after">
            <div class="airflow__after-text">
              <div class="airflow__after-title"><span>Комплексная профессиональной гигиена полости рта</span><span
                        class="price"><?php the_field('airflow-price'); ?> ₽</span></div>
              <div class="airflow__after-box">
                <div class="airflow__after-feature">Ультразвуковая чистка</div>
                <div class="airflow__after-feature">Air Flow и полировка</div>
                <div class="airflow__after-feature">Фторирование твердых тканей</div>
              </div>
            </div>
            <div class="airflow__after-button button button-blue open-callback" data-title="Профгигиена airflow">
              записаться на прием
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php if (get_field('questions')):
      while (have_rows('questions')) : the_row() ?>
        <div class="block gigiena">
          <div class="container">
            <h2><?php the_sub_field('question'); ?></h2>
            <div><?php the_sub_field('answer'); ?></div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
      <?php get_template_part('template-parts/callback'); ?>
    <?php get_template_part('template-parts/equipment'); ?>
    <div class="services-detailed__doctors">
      <div class="container">
        <h2>Профессиональную гигиену в клинике “Флагманстом” проводят квалифицированные стоматолологи-гигиенисты</h2>
        <?php global $post;
        $myposts = get_posts([
            'posts_per_page' => -1,
            'post_type' => 'doctors',
            'tax_query' => [
                [
                    'taxonomy' => 'specialisation',
                    'field' => 'slug',
                    'terms' => 'gigiena',
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
    <?php get_template_part('template-parts/callback-2'); ?>
    <?php get_template_part('template-parts/faq'); ?>
  </main>
<?php get_template_part('template-parts/footer'); ?>