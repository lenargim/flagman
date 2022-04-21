<?php
// Template name: Главная
?>

<?php get_template_part('template-parts/header/header'); ?>
  <main class="home">
    <section class="banner">
      <div class="container">
        <?php if (have_rows('banner')): ?>
          <div class="banner__wrap">
            <div class="banner-slider">
              <div class="swiper-wrapper">
                <?php while (have_rows('banner')) : the_row();
                  $banner_title = get_sub_field('title');
                  $banner_desc = get_sub_field('desc');
                  $img = get_sub_field('img');
                  ?>
                  <div class="swiper-slide">
                    <div class="banner__item">
                      <div class="banner__item-title"><?php echo $banner_title ?></div>
                      <?php if ($banner_desc): ?>
                        <div class="banner__item-desc"><?php echo $banner_desc; ?></div>
                      <?php endif; ?>
                      <div class="banner__item-buttonrow">
                        <div class="button button-blue open-callback" data-title="<?php echo $banner_title ?>">
                          Консультация
                        </div>
                        <?php if (get_sub_field('is-link')): ?>
                          <a href="<?php the_sub_field('button-link'); ?>"
                             class="button button-purple open-callback"><?php the_sub_field('button-text'); ?></a>
                        <?php endif; ?>
                      </div>
                      <?php if ($img && !wp_is_mobile()): ?>
                        <div class="banner__item-img img">
                          <img data-src="<?php the_sub_field('img'); ?>" alt="<?php echo $banner_title ?>"
                               class="swiper-lazy">
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                <?php endwhile; ?>
              </div>
              <div class="pagination"></div>
              <div class="banner__arrows">
                <svg class="swiper-arrow swiper-prev pointer">
                  <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-home.svg#banner-arrow"></use>
                </svg>
                <svg class="swiper-arrow swiper-next pointer">
                  <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-home.svg#banner-arrow"></use>
                </svg>
              </div>
            </div>
          </div>
        <?php endif; ?>
        <div class="banner__box-wrap tabletG-and-more">
          <div class="banner__box">
            <div class="banner__box-item">
              <svg class="banner__box-svg">
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-home.svg#banner-1"></use>
              </svg>
              <div class="banner__box-desc">Высококвалифицированные врачи решают ваши проблемы с зубами уже более 5
                лет
              </div>
            </div>
            <div class="banner__box-item">
              <svg class="banner__box-svg">
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-home.svg#banner-2"></use>
              </svg>
              <div class="banner__box-desc">В работе используется только лучшее оборудование и высококлассные
                материалы
              </div>
            </div>
            <div class="banner__box-item">
              <svg class="banner__box-svg">
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-home.svg#banner-3"></use>
              </svg>
              <div class="banner__box-desc">Расположение рядом с метро - Вы всегда можете добраться без пробок и потери
                времени
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="burning">
      <div class="container">
        <h2>Горящее время</h2>
        <div class="burning__wrap">
          <?php if (get_field('burning')): ?>
            <?php $current_date = date('d.m.Y'); ?>
            <div class="burning__list">
              <?php while (have_rows('burning')) : the_row();
                $title = get_sub_field('burning-title');
                $sale = get_sub_field('burning-sale');
                $date = get_sub_field('burning-date');
                list($cur_day, $cur_month, $cur_year) = explode(".", $date);
                $ru_date = $cur_day . ' ' . RU_MONTHS[(int)$cur_month] . ' ' . $cur_year;
                $time = get_sub_field('burning-time');
                $name = get_sub_field('burning-doctor');
                $href = get_sub_field('burning-img');
                $is_active = get_sub_field('is_active');
                ?>
                <?php if ($date > $current_date): ?>
                  <div class="burning__item">
                    <div class="burning__item-title burning__item-padding"><?php echo $title; ?></div>
                    <?php if (get_sub_field('is-sale') && $sale): ?>
                      <div class="burning__item-sale">Скидка <?php echo $sale ?>%</div>
                    <?php endif; ?>
                    <?php if ($date): ?>
                      <div class="burning__item-date burning__item-padding"><?php echo $ru_date . ', ' . $time ?></div>
                    <?php endif; ?>
                    <?php if ($name): ?>
                      <div class="burning__item-name burning__item-padding"><?php echo $name; ?></div>
                    <?php endif; ?>
                    <div class="burning__item-button button button-blue open-callback <?php if (!$is_active): ?>disabled <?php endif; ?>"
                         data-title="<?php echo 'Горящее время: ' . $title . '. ' . $ru_date . ', ' . $time . '. ' . $name ?>">
                      Забронировать
                    </div>
                    <?php if ($href): ?>
                      <img src="<?php echo $href; ?>" class="burning__item-img" alt="<?php echo $name; ?>">
                    <?php endif; ?>
                  </div>
                <?php endif; ?>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
          <?php if (get_field('burning-box')): ?>
            <div class="burning__box">
              <div class="burning__box-title">Экономьте время и деньги<br>вместе с нами</div>
              <?php while (have_rows('burning-box')) : the_row(); ?>
                <div class="burning__box-item">
                  <svg>
                    <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-home.svg#check"></use>
                  </svg>
                  <?php the_sub_field('text') ?>
                </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
        </div>
        <div class="burning__row">
          <a href="<?php echo get_post_type_archive_link('sale'); ?>" class="button button-blue">Узнать о всех
            скидках</a>
          <p class="tabletG-and-more">Вы можете не откладывать лечение зубов на потом,<br>
            а записаться на выгодных условиях уже сегодня.
          </p>
        </div>
      </div>
    </section>
    <section class="reviews">
      <div class="container">
        <h2>Клиенты рекомендуют нас</h2>
        <div class="reviews__desc"><?php the_field('reviews-desc'); ?></div>
        <?php get_template_part('template-parts/rating'); ?>
        <div class="reviews__wrap">
          <?php global $post;
          $myposts = get_posts([
              'posts_per_page' => -1,
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
    <section class="services">
      <div class="container">
        <h2>Популярные<br>стоматологические услуги</h2>
        <div class="services__wrap">
          <?php global $post;
          $myposts = get_posts([
              'posts_per_page' => 8,
              'post_type' => 'services',
          ]);
          foreach ($myposts as $post) {
            setup_postdata($post);
            ?>
            <a href="<?php the_permalink(); ?>" class="services__item">
              <img src="<?php the_post_thumbnail_url(); ?>" class="services__item-img">
              <div class="services__item-title"><?php the_title() ?></div>
            </a>
            <?php
          }
          wp_reset_postdata();
          ?>
        </div>
        <div class="services__buttonrow">
          <a href="/prices" class="button button-blue services__button">Узнать цены</a>
          <a href="/services" class="button button-white services__button services__button_all">
            <span>Все услуги</span>
            <svg>
              <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-home.svg#arrow-right-top"></use>
            </svg>
          </a>
        </div>
      </div>
    </section>
    <?php get_template_part('template-parts/callback'); ?>
    <?php if (get_field('text-block')): ?>
      <section class="home__text">
        <div class="container">
          <div class="home__text-wrap">
            <?php while (have_rows('text-block')) : the_row() ?>
              <div>
                <?php $title = get_sub_field('title') ?>
                <h3 class="home__text-title"><?php echo $title; ?></h3>
                <?php if (get_sub_field('content')): ?>
                  <?php while (have_rows('content')) : the_row() ?>
                    <div class="home__text-block">
                      <div class="home__text-content"><?php the_sub_field('text'); ?></div>
                      <?php if (get_sub_field('img')): ?>
                        <div class="home__text-img img"><img src="<?php the_sub_field('img'); ?>"
                                                             alt="<?php echo $title; ?>"></div>
                      <?php else: ?>
                        <div class="home__text-img home__text-img_empty"></div>
                      <?php endif; ?>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      </section>
      <section class="doctors">
        <div class="container">
          <h2>Наши стоматологи помогут решить самую сложную проблему с зубами</h2>
          <blockquote class="tabletG-and-more">
            <svg>
              <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-home.svg#quote"></use>
            </svg>
            <span>Наши врачи- наша гордость!</span>
          </blockquote>
          <div class="doctors__desc tabletG-and-more">Мы очень ответственно подходим к выбору врачей и гордимся нашей
            командой. В клинике
            “Флагманстом” работают только высококвалифицированные специалисты, поэтому мы даём гарантию на все работы
            специалистов и всегда отвечаем за результат
          </div>
          <div class="doctors__quotename tabletG-and-more">
            Главный врач<br>
            Гильфанов Динар Мансурович
          </div>
          <div class="doctors__slider">
            <div class="swiper-wrapper">
              <?php global $post;
              $myposts = get_posts([
                  'posts_per_page' => -1,
                  'post_type' => 'doctors',
                  'meta_key' => 'lead-doc',
                  'meta_value' => true
              ]);
              foreach ($myposts as $post) {
                setup_postdata($post);
                ?>
                <a href="<?php the_permalink(); ?>" class="doctors__item doctors__item_big swiper-slide">
                  <div class="doctors__item-wrap">
                    <div class="doctors__item-lead">
                      <span>Ведущий врач</span>
                    </div>
                    <?php
                    $title = get_the_title();
                    $surname = strtok($title, " ");
                    ?>
                    <div class="doctors__item-title">
                      <div class="surname"><?php echo $surname ?></div>
                      <?php echo str_replace($surname, '', $title) ?>
                    </div>
                    <div class="doctors__item-occupation"><?php the_field('spec'); ?></div>
                    <div class="doctors__item-exp">Опыт работы: <?php the_field('exp'); ?></div>
                    <div class="doctors__item-excerpt"><?php the_excerpt(); ?></div>
                  </div>
                  <?php if (has_post_thumbnail()): ?>
                    <div class="doctors__item-img img"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                    </div>
                  <?php endif; ?>
                </a>
                <?php
              }
              wp_reset_postdata();
              ?>
              <?php global $post;
              $myposts = get_posts([
                  'posts_per_page' => -1,
                  'post_type' => 'doctors',
                  'meta_key' => 'lead-doc',
                  'meta_value' => '0'
              ]);
              foreach ($myposts as $post) {
                setup_postdata($post);
                ?>

                <a href="<?php the_permalink(); ?>" class="doctors__item doctors__item_small swiper-slide">
                  <?php
                  $title = get_the_title();
                  $surname = strtok($title, " ");
                  ?>
                  <div class="doctors__item-title">
                    <div class="surname"><?php echo $surname ?></div>
                    <?php echo str_replace($surname, '', $title) ?>
                  </div>
                  <div class="doctors__item-wrap">
                    <div class="doctors__item-occupation"><?php the_field('spec'); ?></div>
                    <div class="doctors__item-exp">Опыт работы: <?php the_field('exp'); ?></div>
                  </div>
                  <?php if (has_post_thumbnail()): ?>
                    <div class="doctors__item-img img"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                    </div>
                  <?php endif; ?>
                </a>
                <?php
              }
              wp_reset_postdata();
              ?>
            </div>
            <div class="pagination"></div>
          </div>
          <a href="/doctors" class="doctors__all button button-white">показать всех врачей</a>
        </div>
      </section>
      <section class="excpectation">
        <div class="container container_big">
          <div class="excpectation__wrap">
            <h3>Что Вас ждёт при посещении клиники “Флагманстом”?</h3>
            <div class="excpectation__box">
              <div class="excpectation__item">
                <p>Дружелюбный административный персонал, который ответит на все Ваши вопросы</p>
              </div>
              <div class="excpectation__item">
                <p>Специалисты высокой квалификации подберут вам индивидуальный план лечения в соответсвии с вашими
                  требованиями</p>
              </div>
              <div class="excpectation__item">
                <p>Бережный процесс лечения на лучшем оборудовании с гарантией на оказанные услуги</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php endif; ?>
  </main>
<?php get_template_part('template-parts/footer/footer'); ?>