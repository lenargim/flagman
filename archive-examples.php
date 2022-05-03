<?php get_template_part('template-parts/header/header'); ?>
  <main>
    <section class="page-banner">
      <div class="container">
        <div class="page-banner__wrap">
          <div class="page-banner__text">
            <h1>Примеры наших работ:<br>до и после</h1>
            <div class="page-banner__desc">Лучше всего о мастерстве наших врачей расскажут их<br>работы. Посмотрите на
              эти
              улыбки и оцените результат.
            </div>
            <div class="page-banner__buttonrow">
              <div class="button button-blue open-callback" data-title="Страница Примеров работ">Записаться на прием
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
    <div class="examples">
      <div class="container">
        <h2>Фотографии работ наших врачей</h2>
        <p>В галерее работ можно посмотреть лучшие образцы того, как работает команда профессионалов клиники Dental
          Solutions. Используя новейшие технологии и современные композитные материалы, врачи — стоматологи в буквальном
          смысле «творят чудеса». Применяя на практике опыт, полученный в результате врачебной деятельности и постоянно
          пополняя свой арсенал новыми методиками, специалисты стоматологии делают возможным лечение, имплантацию и
          протезирование даже в сложных случаях.</p>
      </div>
      <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="block">
            <div class="container">
              <h2><?php the_title() ?></h2>
              <div class="examples__wrap">
                <?php while (have_rows('examples')): the_row() ?>
                  <div class="examples__item">
                    <div class="examples__gallery">
                      <?php $images = get_sub_field('example-images') ?>
                      <?php foreach ($images as $image_id): ?>
                        <div class="examples__img img">
                          <img src="<?php echo $image_id ?>" alt="<?php the_sub_field('doc'); ?>">
                        </div>
                      <?php endforeach; ?>
                    </div>
                    <h4 class="examples__title"><?php the_sub_field('title'); ?></h4>
                    <div class="examples__desc"><?php the_sub_field('desc'); ?></div>
                    <?php $link = get_sub_field('doctor', false, false);
                    $name = get_the_title($link);
                    $arr = explode(' ', $name);
                    $shortName = $arr[0] . ' ' . substr($arr[1], 0, 2) . '.' . substr($arr[2], 0, 2) . '.';
                    ?>
                    <a href="<?php echo get_the_permalink($link) ?>" class="examples__doctor">Лечащий
                      врач: <?php echo $shortName; ?></a>
                  </div>
                <?php endwhile; ?>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <div class="block">
        <?php get_template_part('template-parts/callback'); ?>
      </div>
    </div>
  </main>
<?php get_template_part('template-parts/footer/footer'); ?>