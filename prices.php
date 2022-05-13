<?php
//Template name: Цены
?>
<?php get_template_part('template-parts/header/header'); ?>
  <main class="price-page">
    <section class="page-banner">
      <div class="container">
        <div class="page-banner__wrap">
          <div class="page-banner__text">
            <h1><?php the_title() ?></h1>
            <div class="page-banner__desc"><?php the_content(); ?></div>
            <div class="page-banner__buttonrow">
              <div class="button button-blue open-callback" data-title="Страница Стоимости услуг">Записаться на прием
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
      <div class="price-page__wrap">
        <div class="price-page__text">
          <?php while (have_rows('price-box')) : the_row() ?>
            <div class="price-page__box">
              <div class="price-page__box-title"><?php the_sub_field('title'); ?></div>
              <div class="price-page__box-list">
                <?php while (have_rows('service')) : the_row() ?>
                  <div class="price-page__box-item">
                    <span><?php the_sub_field('name'); ?></span>
                    <?php if (!get_sub_field('is-free')): ?>
                      <span><?php the_sub_field('price'); ?> ₽</span>
                    <?php else: ?>
                      <span class="blue">бесплатно</span>
                    <?php endif; ?>
                  </div>
                <?php endwhile; ?>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
        <div class="services-block__side scrolling">
          <div class="callback__form-wrap">
            <div class="callback__subtitle">Получить консультацию</div>
            <?php echo do_shortcode('[contact-form-7 id="164" title="Callback block"]') ?>
            <span class="callback__policy form__policy">Нажимая кнопку, вы даёте согласие на обработку персональных данных в соответствии с <a
                      href="/policy" target="_blank">Политикой конфиденциальности</a></span>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php get_template_part('template-parts/footer'); ?>