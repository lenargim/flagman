<?php
// Template name: Главная


$phone_chars = '-() ';
$theme_path = get_template_directory_uri();
$images_path = $theme_path . '/assets/images';

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
                      <div class="banner__item-img img">
                        <img  data-src="<?php the_sub_field('img'); ?>" alt="<?php echo $banner_title ?>" class="swiper-lazy">
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
              </div>
              <div class="pagination">
              </div>
              <div class="banner__arrows">
                <svg class="swiper-arrow swiper-prev pointer">
                  <use xlink:href="<?php echo $images_path; ?>/sprite-home.svg#banner-arrow"></use>
                </svg>
                <svg class="swiper-arrow swiper-next pointer">
                  <use xlink:href="<?php echo $images_path; ?>/sprite-home.svg#banner-arrow"></use>
                </svg>
              </div>
            </div>
          </div>
        <?php endif; ?>
        <div class="banner__box-wrap">
          <div class="banner__box">
            <div class="banner__box-item">
              <svg class="banner__box-svg">
                <use xlink:href="<?php echo $images_path; ?>/sprite-home.svg#banner-1"></use>
              </svg>
              <div class="banner__box-desc">Высококвалифицированные врачи решают ваши проблемы с зубами уже более 5
                лет
              </div>
            </div>
            <div class="banner__box-item">
              <svg class="banner__box-svg">
                <use xlink:href="<?php echo $images_path; ?>/sprite-home.svg#banner-2"></use>
              </svg>
              <div class="banner__box-desc">В работе используется только лучшее оборудование и высококлассные
                материалы
              </div>
            </div>
            <div class="banner__box-item">
              <svg class="banner__box-svg">
                <use xlink:href="<?php echo $images_path; ?>/sprite-home.svg#banner-3"></use>
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
            <div class="burning__list">
              <?php while (have_rows('burning')) : the_row();
                $title = get_sub_field('burning-title');
                $sale = get_sub_field('burning-sale');
                $date = get_sub_field('burning-date');
                $time = get_sub_field('burning-time');
                $name = get_sub_field('burning-doctor');
                $href = get_sub_field('burning-img');
                ?>
                <div class="burning__item">
                  <div class="burning__item-title burning__item-padding"><?php echo $title; ?></div>
                  <?php if (get_sub_field('is-sale') && $sale): ?>
                    <div class="burning__item-sale">Скидка <?php echo $sale ?>%</div>
                  <?php endif; ?>
                  <?php if ($date): ?>
                    <div class="burning__item-date burning__item-padding"><?php echo $date . ', ' . $time ?></div>
                  <?php endif; ?>
                  <?php if ($name): ?>
                    <div class="burning__item-name burning__item-padding"><?php echo $name; ?></div>
                  <?php endif; ?>
                  <div class="burning__item-button button button-blue open-callback"
                       data-title="<?php echo 'Горящее время: ' . $title . '. ' . $date . ', ' . $time . '. ' . $name ?>">
                    Забронировать
                  </div>
                  <?php if ($href): ?>
                    <img src="<?php echo $href; ?>" class="burning__item-img" alt="<?php echo $name; ?>">
                  <?php endif; ?>
                </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
          <?php if (get_field('burning-box')): ?>
            <div class="burning__box">
              <div class="burning__box-title">Экономьте время и деньги<br>вместе с нами</div>
              <?php while (have_rows('burning-box')) : the_row(); ?>
                <div class="burning__box-item">
                  <svg>
                    <use xlink:href="<?php echo $images_path; ?>/sprite-home.svg#check"></use>
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
          <p>Вы можете не откладывать лечение зубов на потом,<br>
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
                <div class="reviews__item-name reviews__item-text"><?php the_title() ?></div>
                <div class="reviews__item-date reviews__item-text"><?php the_date() ?></div>
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
        <a href="<?php echo get_post_type_archive_link('reviews') ?>" class="reviews__more button button-white">Посмотреть все отзывы</a>
      </div>
    </section>
  </main>
<?php get_template_part('template-parts/footer/footer'); ?>