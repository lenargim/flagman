<?php get_template_part('template-parts/header/header'); ?>
  <main>
    <section class="page-banner">
      <div class="container">
        <div class="page-banner__wrap">
          <div class="page-banner__text">
            <h1>Спецпредложения<br>месяца</h1>
            <div class="page-banner__desc">В нашей клинике мы регулярно предоставляем особые<br>предложения из разных
              областей стоматологии
            </div>
            <div class="page-banner__buttonrow">
              <div class="button button-blue open-callback" data-title="Страница Акций">Записаться на прием</div>
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
    <?php if (have_posts()): ?>
      <div class="sale-block">
        <div class="container">
          <?php while (have_posts()) : the_post() ?>
            <div class="sale-block__item">
              <div class="sale-block__text">
                <div class="sale-block__title"><?php the_content() ?></div>
                <div class="sale-block__benefit"><?php the_field('benefit'); ?></div>
                <div class="sale-block__img img"><img src="<?php echo get_the_post_thumbnail_url() ?>"
                                                      alt="<?php the_title() ?>"></div>
                <div class="sale-block__excerpt"><?php the_excerpt(); ?></div>
                <div class="button button-white open-callback" data-title="Акция: <?php the_title() ?>">Записаться на
                  прием
                </div>
              </div>
            </div>
          <?php endwhile; ?>
          *Скидки не суммируется между собой и с другими акциями нашей клиники
        </div>
      </div>
    <?php endif; ?>
  </main>
<?php get_template_part('template-parts/footer'); ?>