<?php
/*
Template name: Винир
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
    <div class="services-detailed">
      <div class="container">
        <div class="services-detailed__wrap">
          <div class="services-detailed__text">
            <h2>Создай улыбку мечты в кратчайшие сроки</h2>
            <div class="services-detailed__text-desc">
              <p>Современная стоматология не стоит на месте и решает даже, козалось бы, самые безнадежные случаи, и
                «ФлагманСтом» идет в ногу со временем! Сейчас уже не нужно терпеть дискомфорт от изъянов улыбки.
                Получить голливудскую улыбку у нас может каждый, вне зависимости от состояния зубов. Виниры повышенной
                эстетики — отличное решение, если вы хотите восстановить красоту улыбки и молодость быстро и с
                максимальным комфортом.</p>
              <p>Стомотологическая клиника «ФлагманСтом» специализируется на установке виниров по технологии E-max из
                безметалловой керамики, которые выглядят максимально естественно, удовлетворяя потребность в
                прочности.</p>
            </div>
            <div class="services-detailed__text-last">
              <img src="<?php echo IMAGES_PATH ?>/sprite-content/vinir.svg">
              <p>Клиника «ФлагманСтом» также поможем подобрать наиболее оптимальный вариант, ориентируясь на то, что
                важно именно Вам!</p>
            </div>
          </div>
          <div class="services-detailed__aside">
            <div class="burning__box">
              <h4>Какие проблемы решают виниры?</h4>
              <div class="burning__box-item">
                <svg>
                  <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-heal.svg#check"></use>
                </svg>
                <p>Помогают скорректировать форму и высоту зубов</p>
              </div>
              <div class="burning__box-item">
                <svg>
                  <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-heal.svg#check"></use>
                </svg>
                <p>Скрывают дефекты зубов, такие как трещины, сколы и пигментация</p>
              </div>
              <div class="burning__box-item">
                <svg>
                  <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-heal.svg#check"></use>
                </svg>
                <p>Старые, потемневшие пломбы на видимых участках коронки</p>
              </div>
              <div class="burning__box-item">
                <svg>
                  <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-heal.svg#check"></use>
                </svg>
                <p>Корректируют лёгкие дефекты прикуса</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="block">
        <?php get_template_part('template-parts/callback'); ?>
      </div>
      <div class="services-detailed__steps block">
        <div class="container">
          <h2>Этапы установки виниров</h2>
          <div class="services-detailed__steps-desc">Виниры - это мини-протезы, которые представляют собой накладки на
            зубы. Виниры устанавливаются на переднюю часть зубов, маскируют все дефекты, восстанавливается эстетика
            зубного ряда. Стоматология "ФлагманСтом" специализируется на установке виниров в Казани и наши специалисты
            будут рады предоставить Вам всю информацию, связанную с реставрацией зубов.
          </div>
          <ol class="services-detailed__steps-list">
            <li>
              <h4 class="services-detailed__steps-list-title">Удаление эмали</h4>
              <p class="services-detailed__steps-list-text">Удаление эмали проводится, чтобы освободить место для
                винира. Слой эмали, которую удаляют с зуба, обычно равен толщине заменяющей его пластинки. Процедура
                удаление эмали при установки виниров E-max проводится наиболее щадящим способом и никак не вредит вашему
                зубу.</p>
            </li>
            <li>
              <h4 class="services-detailed__steps-list-title">Подготовка формы</h4>
              <p class="services-detailed__steps-list-text">Ортодонт делает снимки и слепки рта. Иногда слепки снимают и
                отправляют их в отдельную лабораторию для изготовления винира. Возможно, пациенту придется подождать до
                четырех недель, прежде чем постоянные накладки будут отправлены обратно врачу.</p>
            </li>
            <li>
              <h4 class="services-detailed__steps-list-title">Фиксация винира</h4>
              <p class="services-detailed__steps-list-text">На этом этапе врач регулирует пластинки, для уверенности в
                фиксации пластинки на зубе. Далее на внутреннюю поверхность винира наносится специальный цемент и
                накладка фиксируется на отпрепарированную коронку. </p>
            </li>
          </ol>
        </div>
      </div>
      <div class="block">
        <div class="container container_big">
          <div class="result">
            <h2>Какого результата мы<br>добиваемся с помощью виниров?</h2>
            <div class="result__wrap">
              <div class="result__text">
                <div class="result__box">
                  <div class="result__title">
                    <svg>
                      <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-vinir.svg#vinir1"></use>
                    </svg>
                    <h4>Эффект anti-age</h4>
                  </div>
                  <p>Ваши зубы станут белыми, красивыми и ровными и Вы будете выглядить на несколько лет моложе!</p>
                </div>
                <div class="result__box">
                  <div class="result__title">
                    <svg>
                      <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-vinir.svg#vinir2"></use>
                    </svg>
                    <h4>Естественность</h4>
                  </div>
                  <p>Качественные виниры полностью повторяют анатомическую форму и иммитируют прозрачность эмали, что делает их незаметными для окружающих </p>
                </div>
                <div class="result__box">
                  <div class="result__title">
                    <svg>
                      <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-vinir.svg#vinir3"></use>
                    </svg>
                    <h4>Защита</h4>
                  </div>
                  <p>Ваши зубы приобретают дополнительную прочность, ведь накладки защищают ваши зубы от внешних негативных воздействий</p>
                </div>
              </div>
              <div class="result__img img"><img src="<?php echo IMAGES_PATH ?>/result.jpg" alt="Какого результата мы добиваемся с помощью виниров?"></div>
            </div>
            <div class="result__after">
              <span>Стоимость винира E-max</span>
              <div><?php echo the_field('e-max'); ?> ₽</div>
            </div>
          </div>
        </div>
      </div>

      <div class="services-detailed__doctors">
        <div class="container">
          <h2>Установкой виниров занимаются только<br>высококвалифицированные стоматолог- ортопеды</h2>
          <?php global $post;
          $myposts = get_posts([
              'posts_per_page' => -1,
              'post_type' => 'doctors',
              'tax_query' => [
                  [
                      'taxonomy' => 'specialisation',
                      'field' => 'slug',
                      'terms' => 'vinir',
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
      <?php if (get_field('prices')): ?>
        <div class="prices">
          <div class="container">
            <h2><?php the_field('price-title'); ?></h2>
            <div class="prices__wrap">
              <?php while (have_rows('prices')) : the_row() ?>
                <div class="prices__item">
                  <span><?php the_sub_field('service'); ?></span>
                  <span><?php the_sub_field('price'); ?> ₽</span>
                </div>
              <?php endwhile; ?>
            </div>
            <?php if (get_field('is-extra-price')): ?>
              <div class="prices__extra">
                <h4>Вам может быть интересно:</h4>
                <div class="prices__wrap">
                  <?php while (have_rows('extra-prices')) : the_row() ?>
                    <div class="prices__item">
                      <span><?php the_sub_field('service'); ?></span>
                      <span><?php the_sub_field('price'); ?> ₽</span>
                    </div>
                  <?php endwhile; ?>
                </div>
              </div>
            <?php endif; ?>
            <div class="prices__after"><?php the_field('price-after'); ?></div>
          </div>
        </div>
      <?php endif; ?>
      <?php $faq = get_field('faq'); ?>
      <?php if ($faq): ?>
        <div class="block faq">
          <div class="container">
            <h2>Ответы на часто задаваемые вопросы</h2>
            <div class="faq__wrap">
              <?php while (have_rows('faq')) : the_row() ?>
                <div class="faq__block">
                  <div class="faq__question"><?php the_sub_field('question'); ?></div>
                  <div class="faq__answer"><?php the_sub_field('answer'); ?></div>
                </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </main>
<?php get_template_part('template-parts/footer/footer'); ?>