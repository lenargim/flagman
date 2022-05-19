<?php get_template_part('template-parts/header/header'); ?>
<main>
  <section class="page-banner">
    <div class="container">
      <div class="page-banner__wrap">
        <div class="page-banner__text">
          <h1>Отзывы о нашей работе</h1>
          <div class="page-banner__desc">В стоматологической клинике «Флагманстом» особое внимание уделяется здоровью
            зубов, но бывают случаи, когда возможности сохранить зуб уже нет. В нашей клинике работают только
            высококвалифицированные хирурги, способные справиться с удалением любой сложности без неприятных
            последствий для вашего здоровья.
          </div>
          <div class="page-banner__buttonrow">
            <div class="button button-blue open-callback" data-title="Страница Отзывов">Записаться на прием</div>
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
  <div class="reviews-page">
    <div class="container">
      <div class="reviews-page__desc">
        <h2>В нашей клинике работают лучшие врачи, чтобы Вам было не страшно</h2>
        <div class="reviews-page__img img">
          <img src="<?php echo IMAGES_PATH ?>/reviews1.jpg"
               alt="В нашей клинике работают лучшие врачи, чтобы Вам было не страшно">
        </div>
        <div class="reviews-page__text">
          <p>Повседневная практика показывает, что укрепление и развитие структуры позволяет выполнять важные задания
            по
            разработке системы обучения кадров, соответствует насущным потребностям. Не следует, однако забывать, что
            рамки и место обучения кадров способствует подготовки и реализации систем массового участия. </p>
          <p>Повседневная практика показывает, что рамки и место обучения кадров в значительной степени обуславливает
            создание существенных финансовых и административных условий. Таким образом постоянный количественный рост
            и
            сфера нашей активности позволяет оценить значение дальнейших направлений развития.</p>
        </div>
      </div>
    </div>
    <div class="reviews-page__rating">
      <div class="container">
        <h2>Вы всегда можете ознакомиться с отзывами<br>на независимых ресурсах</h2>
        <?php get_template_part('template-parts/rating'); ?>
        <?php if (have_posts()): ?>
          <div class="reviews-page__wrap">
            <?php while (have_posts()) : the_post(); ?>
              <div class="reviews-page__item">
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
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
        <?php if (get_field('prodoktorov', 38)): ?>
          <a href="<?php echo get_field('prodoktorov', 38) ?>" target="_blank"
             class="button button-white reviews-page__link">
            <span>оставить отзыв</span>
            <svg>
              <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-common.svg#arrow-right-top"></use>
            </svg>
          </a>
        <?php endif; ?>
      </div>
    </div>
    <?php get_template_part('template-parts/callback'); ?>
  </div>
</main>
<?php get_template_part('template-parts/footer'); ?>

