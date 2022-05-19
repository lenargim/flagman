<?php
/*
Template name: Съмный
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
          <h2>Виды съемного протезировании</h2>
          <div class="services-detailed__text-desc">
            <p>Протезирование зубов весьма дорогое удовольствие, если речь идет о несъемных протезах или имплантах.
              Однако, съемные протезы доступны для всех категорий граждан, и в особенности для пожилых людей, которые
              желают получить качественные образцы за умеренную плату.</p>
          </div>
        </div>
        <div class="services-detailed__aside">
          <div class="burning__box">
            <h4>В каких случаях преимущественно съемное протезирование?</h4>
            <div class="burning__box-item">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
              </svg>
              <p>В случае хронических заболеваний мягких тканей (пародонтит и пародонтоз)</p>
            </div>
            <div class="burning__box-item">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
              </svg>
              <p>Более бюджетный вариант восстановления улыбки и жевательной функции</p>
            </div>
            <div class="burning__box-item">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
              </svg>
              <p>Подходят как временный вариант ношения на период заживления имплантов</p>
            </div>
            <div class="burning__box-item">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
              </svg>
              <p>Подходят для людей с любыми индивидуальными особенностями строения челюсти</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="services-detailed__steps block">
      <div class="container">
        <h2>Имплантация зубов включает в себя<br>несколько этапов</h2>
        <ol class="services-detailed__steps-list">
          <li>
            <h4 class="services-detailed__steps-list-title">Консультация ортопеда</h4>
            <p class="services-detailed__steps-list-text">На консультации с ортопедом Вы сможете обсудить все
              волнующие вопросы по съемному протезированию и подобрать подходящий вариант под вашу ситуацию. </p>
          </li>
          <li>
            <h4 class="services-detailed__steps-list-title">Снятие отисков</h4>
            <p class="services-detailed__steps-list-text"> Процедура оттиска необходима зубному технику для того,
              чтобы иметь полную картину о строении челюсти, размере и расположении зубов, а также десневого края. Для
              этого ортопед делает слепок целюсти при помощи специальной “ложки” и слепочной массы.</p>
          </li>
          <li>
            <h4 class="services-detailed__steps-list-title">Определение прикуса</h4>
            <p class="services-detailed__steps-list-text">На данном этапе проводятся первичные корректировки протеза.
              Именно на этом этапе вы можете определиться с выбором вашей улыбки - хотите оставить прежнюю или же
              внести изменения. Также подбираются цвет и материал зубов.</p>
          </li>
          <li>
            <h4 class="services-detailed__steps-list-title">Установка съемного протеза</h4>
            <p class="services-detailed__steps-list-text">На данном этапе вы сможете провести “примерку” вашего
              съемного протеза и увидеть свою новую улыбку. В случае выявления неточностей на этом этапе также
              возможны корректировки. Также вы получите подробную консультацию о уходе за вашим протезом.</p>
          </li>
        </ol>
      </div>
    </div>

    <?php if (get_field('type')): ?>
      <div class="block">
        <div class="container container_big">
          <h2>Существует несколько видов съемного протезирования</h2>
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
    <div class="container">
      <div class="protez__info">
        <div class="protez__info-text">
          <h2>Отсутсвуют все зубы?</h2>
          <div class="protez__info-desc">лучшим и более выгодным решением при отсутствии всех зубов является
            имплантация <span class="bold">“Всё на 4”</span></div>
        </div>
        <a href="<?php echo get_post_permalink('449') ?>" class="protez__info-link button button-white">
          <span>подробнее</span>
          <svg>
            <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-common.svg#arrow-right-top"></use>
          </svg>
        </a>
      </div>
    </div>
    <?php get_template_part('template-parts/prices'); ?>
    <?php get_template_part('template-parts/cite'); ?>

    <div class="services-detailed__doctors">
      <div class="container">
        <h2>Залог успешной и долговечной имплантации — <span class="blue">грамотные имплантологи</span>. В клинике
          «Флагманстом» вы в надежных руках</h2>
        <?php global $post;
        $myposts = get_posts([
            'posts_per_page' => -1,
            'post_type' => 'doctors',
            'tax_query' => [
                [
                    'taxonomy' => 'specialisation',
                    'field' => 'slug',
                    'terms' => 'implant',
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
    <div class="block">
      <section class="reviews">
        <div class="container">
          <h2>Отзывы пациентов о работе специалистов клиники «Флагманстом»</h2>
          <div class="reviews__desc"><?php the_field('reviews-desc', 76); ?></div>
          <?php get_template_part('template-parts/rating'); ?>
          <div class="reviews__wrap">
            <?php global $post;
            $myposts = get_posts([
                'posts_per_page' => 4,
                'post_type' => 'reviews',
            ]);
            foreach ($myposts as $post) {
              setup_postdata($post);
              ?>
              <div class="reviews__item">
                <p class="reviews__item-content"><?php the_content(); ?></p>
                <div class="reviews__item-row">
                  <a href="<?php the_field('review-link'); ?>" target="_blank"
                     class="reviews__item-platform reviews__item-text"><?php the_field('platform'); ?></a>
                  <div class="reviews__item-name reviews__item-text"><?php the_title(); ?></div>
                  <div class="reviews__item-date reviews__item-text"><?php echo get_the_date('d.m.Y'); ?></div>
                  <div class="reviews__item-rating">
                    <i></i><i></i><i></i><i></i><i></i>
                  </div>
                </div>
              </div>
              <?php
            }
            wp_reset_postdata();
            ?>
          </div>
          <a href="<?php echo get_post_type_archive_link('reviews') ?>" class="reviews__more button button-white">Посмотреть
            все отзывы</a>
        </div>
      </section>
    </div>
    <?php get_template_part('template-parts/equipment'); ?>
    <div class="block">
      <div class="container container_big">
        <div class="callback-second">
          <div class="callback-second__text">
            <h2>Запишитесь на бесплатную консультацию по имплантации и получите улыбку мечты</h2>
            <h4>Что Вас ждёт при первом посещении стоматолога-имплантолога?</h4>
            <div class="callback-second__list">
              <div class="callback-second__item">
                <svg>
                  <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-common.svg#check"></use>
                </svg>
                <p>Стоматолог проведет подробный осмотр полости рта и оценит Вашу ситуацию. В случае необходимости,
                  расскажет о дополнительных процедурах, которые необходимы.</p>
              </div>
              <div class="callback-second__item">
                <svg>
                  <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-common.svg#check"></use>
                </svg>
                <p>Врач даст подробную консультацию про все возможные варианты имплантатов, расскажет вам о всех
                  плюсах и минусах и подробно распишет несколько планов лечения с учетом ваших потребностей.</p>
              </div>
              <div class="callback-second__item">
                <svg>
                  <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-common.svg#check"></use>
                </svg>
                <p>Имплантолог составит для Вас несколько планов лечения и подробно опишет каждый из них, чтобы у вас
                  была возможность принять взвешенное решение.</p>
              </div>
            </div>
          </div>
          <div action="" class="callback__form-wrap">
            <div class="callback__subtitle">Получить консультацию</div>
            <?php echo do_shortcode('[contact-form-7 id="164" title="Callback block"]') ?>
            <span class="callback__policy form__policy">Нажимая кнопку, вы даёте согласие на обработку персональных данных в соответствии с <a
                      href="/policy" target="_blank">Политикой конфиденциальности</a></span>
          </div>
        </div>
      </div>
    </div>
    <?php get_template_part('template-parts/faq'); ?>
  </main>
<?php get_template_part('template-parts/footer'); ?>