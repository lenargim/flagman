<?php get_template_part('template-parts/header/header'); ?>
  <main>
    <section class="page-banner">
      <div class="container">
        <div class="page-banner__wrap">
          <div class="page-banner__text">
            <h1>Комплексные<br>стоматологические услуги</h1>
            <div class="page-banner__desc">В нашей клинике мы предлагаем комплексные услуги из всех областей<br>
              стоматологии. В дополнение к высококачественному стоматологическому<br>
              оборудованию и высококачественным материалам, все услуги<br>
              предоставляются в комфортной, роскошной обстановке.
            </div>
            <div class="page-banner__buttonrow">
              <div class="button button-blue open-callback" data-title="Страница Услуг">Записаться на прием</div>
              <a class="button button-purple" href="/prices">Узнать цены</a>
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
      <div class="services-block">
        <div class="container">
          <div class="services-block__wrap">
            <div class="services-block__list">
              <?php while (have_posts()) : the_post() ?>
                <div class="services-block__item">
                  <h3 class="services-block__title"><?php the_title() ?></h3>
                  <div class="services-block__img img"><img src="<?php echo get_the_post_thumbnail_url() ?>"
                                                            alt="<?php the_title() ?>"></div>
                  <div class="services-block__excerpt"><?php the_excerpt(); ?></div>
                  <?php if (get_field('advantages')): ?>
                    <ul class="services-block__ul">
                      <?php while (have_rows('advantages')) : the_row() ?>
                      <li class="services-block__li">
                        <?php echo get_sub_field('advantages-text')?>
                      </li>
                      <?php endwhile; ?>
                    </ul>
                  <?php endif; ?>
                  <a href="<?php the_permalink(); ?>" class="button button-white">
                    <span>Подробнее</span>
                    <svg>
                      <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-common.svg#arrow-right-top"></use>
                    </svg>
                  </a>
                </div>
              <?php endwhile; ?>
            </div>
            <div class="services-block__side">
              <div class="callback__form-wrap">
                <div class="callback__subtitle">Получить консультацию</div>
                <?php echo do_shortcode('[contact-form-7 id="164" title="Callback block"]') ?>
                <span class="callback__policy form__policy">Нажимая кнопку, вы даёте согласие на обработку персональных данных в соответствии с <a
                          href="/policy" target="_blank">Политикой конфиденциальности</a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </main>
<?php get_template_part('template-parts/footer/footer'); ?>