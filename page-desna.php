<?php
/*
Template name: Десна
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
            <h2>Когда стоит обратиться к стоматологу?</h2>
            <div class="services-detailed__text-desc">
              Предотвратить проблемы с деснами проще, чем их вылечить, поэтому, помните, лучше посетить стоматолога для
              профилактического осмотра раз в полгода, чем лечить заболевания. Кроме того, профилактический осмотр
              недорогая и быстрая процедура, которую можно пройти в нашей клинике. Звоните уже сегодня, и запишитесь на
              первую консультацию в нашей стоматологии.
            </div>
            <div class="services-detailed__text-last">
              <p>Основной причиной возникновения является скопление зубного налета, который затвердевает и образует
                зубной камень. Для профилактики рекомендуется регулярно проводить
                <a href="<?php echo get_post_permalink(159) ?>">профессиональную чистку полости рта</a>
              </p>
            </div>
          </div>
          <div class="services-detailed__aside">
            <div class="burning__box">
              <h4>Какие сигналы говорят о том, что пора лечить десна?</h4>
              <div class="burning__box-item">
                <svg>
                  <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
                </svg>
                <p>Повышенная кровоточивость десен при чистке зубов</p>
              </div>
              <div class="burning__box-item">
                <svg>
                  <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
                </svg>
                <p>Образование припухлости и болезненности десен</p>
              </div>
              <div class="burning__box-item">
                <svg>
                  <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
                </svg>
                <p>Оголение шейки зуба и появление расшатанности зубов</p>
              </div>
              <div class="burning__box-item">
                <svg>
                  <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
                </svg>
                <p>Изменение цвета десны, а также появление гнойняков и зуда</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="block">
        <?php get_template_part('template-parts/callback'); ?>
      </div>
      <div class="block">
        <div class="container">
          <h2>Какие заболевания дёсен бывают</h2>
          <div class="services-types">
            <div class="services-types__item">
              <div class="services-types__text">
                <h4>Гингивит</h4>
                <p>Воспалительное заболевание дёсен, которое <span class="bold">проявляется болезненностью, отёчностью, кровоточивостью</span>
                  и выделением экссудата (жидкости, которую продуцируют ткани в ответ на воспаление).</p>
                <p>Воспалённая десна становится мягкой, шероховатой, неплотно прилегает к коронкам зубов. По данным
                  Всемирной организации здравоохранения, более чем у 90-95 % взрослых людей присутствуют воспалительные
                  процессы мягких тканей ротовой полости, а утрата зубов из-за воспаления дёсен и пародонта (тканей,
                  окружающих зуб) случается в 5 раз чаще, чем от кариозных поражений</p>
              </div>
              <div class="services-types__img img">
                <img src="<?php echo IMAGES_PATH ?>/desna1.png" alt="Гингивит">
              </div>
              <div class="container container_small">
                <div class="warning">
                  Следует помнить, что воспалённая десна — это источник инфекции, которая может распространяться в
                  ротовой полости и вызывать серьёзные последствия. Именно поэтому при первых симптомах нужно обращаться
                  за медицинской помощью.
                </div>
              </div>
            </div>
            <div class="services-types__item">
              <div class="services-types__text">
                <h4>Пародонтит</h4>
                <p>Это воспалительное поражение окружающих тканей зуба, приводящее к нарушению и ослаблению связочного
                  аппарата зуба, что может привести к патологической сдвигаемости и расшатыванию зубов.</p>
                <p>Пародонтит может развиться, если вовремя не вылечить гингивит. Вызывается заболевание скоплениями
                  бактерий зубного налета вдоль линии десен. В дальнейшем <span class="bold">развитие болезни приводит к образованию
                  небольших “карманов”, в которых скапливается большое количество бактерий, провоцирующих инфекцию.</span>
                  Как последствие - расшатывание зуба и дальнейшее выпадение. </p>
              </div>
              <div class="services-types__img img">
                <img src="<?php echo IMAGES_PATH ?>/desna2.png" alt="Пародонтит">
              </div>
              <div class="container container_small">
                <div class="warning">
                  Основной причиной возникновения является скопление зубного налета, который затвердевает и образует
                  зубной камень. Для профилактики рекомендуется регулярно проводить профессиональную чистку полости рта
                </div>
              </div>
            </div>
            <div class="services-types__item">
              <div class="services-types__text">
                <h4>Флюс</h4>
                <p>Воспалительное поражение надкостницы зуба. Заболевание, называющееся также периостит, имеет
                  инфекционное происхождение, развивается, когда во внутренние ткани зуба или карман десны забиваются
                  пищевые частицы и начинают гнить. В итоге внутри десны происходит накопление значительного количества
                  гноя. Гнойный мешок расширяется, достигает надкостницы, вызывая отек и распухание мягких тканей десны
                  и внутренней стороны щеки.</p>
              </div>
              <div class="services-types__img img">
                <img src="<?php echo IMAGES_PATH ?>/desna1.png" alt="Флюс">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="block">
        <div class="container">
          <h2>Этапы лечения заболеваний десен</h2>
          <div class="stages">
            <div class="stages__box">
              <h4>Диагностика и построение плана лечения</h4>
              <p>Прежде чем приступить к работе стоматолог подробно объяснит ход лечения и распишет несколько вариантов
                лечения</p>
            </div>
            <div class="stages__box">
              <h4>Глубокая чистка коронок и пародонтальных каналов</h4>
              <p>Прежде чем приступить к непосредственному лечениею врач очищает зубы от налёта и зубного камня -
                главных провокаторов развития болезней дёсен</p>
            </div>
            <div class="stages__box">
              <h4>Аппаратное или хирургическое лечение</h4>
              <p>В зависимости от степени осложнения стоматолог проводит лечение, которое, при осложнениях, может быть
                проведено в несколько этапов</p>
            </div>
          </div>
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
      <?php if (get_field('cite-title')): ?>
        <div class="container container_big">
          <div class="services-detailed__cite block">
            <h3 class="services-detailed__cite-limit services-detailed__cite-title">
              <svg viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.11847 0.5C5.24531 0.5 3.55899 1.25196 2.15416 2.66147C0.749433 4.07097 0 5.6693 0 7.54882C0 9.2402 0.561899 10.8386 1.77983 12.248C2.90362 13.6575 4.87082 14.0339 6.46314 14.0339C6.18219 16.2897 4.96433 18.7331 3.65299 20.3309C3.46547 20.6128 3.27861 20.8947 2.997 21.0828C2.62262 21.4585 2.71606 22.0229 2.997 22.3986L5.61966 25.2183C5.99404 25.5939 6.65002 25.5939 7.02439 25.2183C8.14818 23.9963 9.17855 22.5867 10.2089 20.9891C12.8315 16.8537 14.1429 12.7183 14.1429 8.58287C14.1429 6.13944 13.3934 4.16561 11.9887 2.66169C10.6781 1.25219 9.08588 0.500218 7.11855 0.500218L7.11847 0.5Z"/>
                <path d="M22.9759 0.5C21.1027 0.5 19.4164 1.25196 18.0116 2.66147C16.6069 4.07097 15.8574 5.6693 15.8574 7.54882C15.8574 9.2402 16.4193 10.8386 17.6372 12.248C18.761 13.6575 20.7282 14.0339 22.3206 14.0339C22.0396 16.2897 20.8218 18.7331 19.5104 20.3309C19.3229 20.6128 19.136 20.8947 18.8544 21.0828C18.48 21.4585 18.5735 22.0229 18.8544 22.3986L21.4771 25.2183C21.8515 25.5939 22.5074 25.5939 22.8818 25.2183C24.0056 23.9963 25.036 22.5867 26.0663 20.9891C28.6889 16.8537 30.0003 12.7183 30.0003 8.58287C30.0003 6.13944 29.2509 4.16561 27.8461 2.66169C26.5355 1.25219 24.8491 0.500218 22.976 0.500218L22.9759 0.5Z"/>
              </svg>
              <?php the_field('cite-title'); ?>
            </h3>
            <div class="services-detailed__cite-limit services-detailed__cite-desc">
              <?php the_field('cite-desc'); ?></div>
            <div class="services-detailed__cite-limit services-detailed__cite-name">
              <?php the_field('cite-doctor'); ?></div>
            <img src="<?php the_field('cite-img'); ?>" alt="
      <?php the_field('cite-title'); ?>" class="services-detailed__cite-img">
          </div>
          <div class="signature">
            <img src="<?php echo IMAGES_PATH ?>/logo-big.png" alt="ФлагманСтом">
            <div>Заботимся о Ваших улыбках <span class="nowrap">с 2017 года</span></div>
          </div>
        </div>
      <?php endif; ?>
      <div class="services-detailed__doctors">
        <div class="container">
          <h2>Лечением зубов занимаются наши лучшие <span class="nowrap">стоматологи-терапевты</span></h2>
          <?php global $post;
          $myposts = get_posts([
              'posts_per_page' => -1,
              'post_type' => 'doctors',
              'tax_query' => [
                  [
                      'taxonomy' => 'specialisation',
                      'field' => 'slug',
                      'terms' => 'desna',
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
      <?php get_template_part('template-parts/faq'); ?>
    </div>
  </main>
<?php get_template_part('template-parts/footer/footer'); ?>