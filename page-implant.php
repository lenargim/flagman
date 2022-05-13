<?php
/*
Template name: Имплантация
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
          <h2>Подробнее про имплантацию зубов</h2>
          <div class="services-detailed__text-desc">
            <p>Потерянный зуб, может не только испортить улыбку, но и доставить со временем много неудобств и проблем.
              Особенно это касается жевательных коронок, отсутствие которых усиливает на противоположные и соседние
              зубы нагрузку.В результате они расшатываются, изменяется прикус, быстрее развивается кариес. Решить эту
              проблему можно с помощью имплантации, которая на сегодняшний день является новейшей прогрессивной
              методикой по восстановлению утраченных зубов.</p>
          </div>
        </div>
        <div class="services-detailed__aside">
          <div class="burning__box">
            <h4>Какие проблемы решает имплантация зуба?</h4>
            <div class="burning__box-item">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
              </svg>
              <p>Отсутствие даже одного зуба вызывает искревление зубного ряда</p>
            </div>
            <div class="burning__box-item">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
              </svg>
              <p>Отсуствие зуба может изменить черты лица</p>
            </div>
            <div class="burning__box-item">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
              </svg>
              <p>Разрушение здоровых зубов в следствие перераспределния жевательной нагрузки</p>
            </div>
            <div class="burning__box-item">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
              </svg>
              <p>Восстанавливает здоровую улыбку и комфорт при общении</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="implant block">
      <div class="container">
        <h2>Имплантация зубов включает в себя<br>несколько этапов</h2>
        <ol class="implant__list">
          <li class="implant__item">
            <h4 class="implant__item-title">Вживление искусственного корня</h4>
            <div class="implant__item-info">
              <p>С помощью стоматологического сверла в челюстной кости формируется ложе, глубина которого измеряется
                специальным иструментом. В отвертсие устанавливается <span class="bold">титановый штифт</span> - он
                будет выполнять функцию
                искусственного корня зуба. Устанавливается винт-заглушка для защиты от механических раздражителей и
                микробов. После процедуры дается время на приживление имплантата от 2 месяцев до полугода, в
                зависимости
                от челюсти и самого имплантата.</p>
              <div class="implant__item-img img"><img src="<?php echo IMAGES_PATH ?>/implant1.png"
                                                      alt="Вживление искусственного корня"></div>
            </div>
          </li>
          <li class="implant__item">
            <h4 class="implant__item-title">Установка формирователя десны</h4>
            <div class="implant__item-info">
              <p>На поверхность импланта врастает костная ткань, имплант раскрывается под местной анестезией – на
                десне
                формируется отверстие, через которое в имплант вкручивается <span
                        class="bold">формирователь десны</span>. В течении последующих
                10-12 дней вокруг формирователя десны образуется ровный овальный контур десны , который в дальнейшем
                будет окружать коронку.</p>
              <div class="implant__item-img img"><img src="<?php echo IMAGES_PATH ?>/implant2.png"
                                                      alt="Установка формирователя десны"></div>
            </div>
          </li>
          <li class="implant__item">
            <h4 class="implant__item-title">Установка абатмента</h4>
            <div class="implant__item-info">
              <p>Через 14 дней формирователь десны заменяется на <span class="bold">абатмент</span> — накостный
                элемент
                имплантата, необходимый
                для фиксации ортопедической конструкции). Врач снимает слепки для изготовления коронки. Временный
                абатмент заменяется на постоянный и проводится фиксация ортопедической конструкции.</p>
              <div class="implant__item-img img"><img src="<?php echo IMAGES_PATH ?>/implant3.png"
                                                      alt="Установка абатмента"></div>
            </div>
          </li>
          <li class="implant__item">
            <h4 class="implant__item-title">Установка коронки</h4>
            <div class="implant__item-info">
              <p>На импланты могут быть установлены как одиночные <span class="bold">коронки</span>, так и 2-3
                единичные
                мостовидные конструкции.
                Протез крепится сразу на абатмент при помощи специального материала.</p>
              <div class="implant__item-img img"><img src="<?php echo IMAGES_PATH ?>/implant4.png"
                                                      alt="Установка коронки"></div>
            </div>
          </li>
        </ol>
      </div>
    </div>
    <div class="block">
      <div class="container container_big">
        <div class="implant__after">
          <h3>Итоговая стоимость за готовый <span class="uppercase"><br>
                зуб с коронкой</span></h3>
          <div class="implant__after-price"><?php the_field('service-price'); ?> ₽</div>
        </div>
      </div>
    </div>
    <div class="block">
      <div class="container container_big">
        <h2>Цена зависит от способа имплантации.<br>Существует три основных вида</h2>
        <div class="implant__slider">
          <div class="implant__slider-pagination swiper-custom">
            <span class="swiper-pagination-bullet button button-white active">Шаблонная</span>
            <span class="swiper-pagination-bullet button button-white">Одномоментная</span>
            <span class="swiper-pagination-bullet button button-white">Классическая</span>
          </div>
          <div class="implant__slider-arrows">
            <svg class="swiper-arrow swiper-prev pointer">
              <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-implant.svg#arrow"></use>
            </svg>
            <svg class="swiper-arrow swiper-next pointer">
              <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-implant.svg#arrow"></use>
            </svg>
          </div>
          <div class="swiper-wrapper">
            <div class="swiper-slide implant__slider-item">
              <h3>Шаблонная имплантация R2Gate</h3>
              <div class="implant__slider-wrap">
                <div class="implant__slider-info">
                  <p class="implant__slider-desc"><?php the_field('slider-text-1'); ?></p>
                  <h4>Показания:</h4>
                  <div class="implant__slider-feature-wrap">
                    <div class="implant__slider-feature">
                      <img src="<?php echo IMAGES_PATH ?>/implant5.jpg" class="implant__slider-feature-img"
                           alt="Частичное или полное отсутствие зуба">
                      <span class="bold">Частичное или полное отсутствие зуба</span>
                    </div>
                    <div class="implant__slider-feature">
                      <img src="<?php echo IMAGES_PATH ?>/implant6.jpg" class="implant__slider-feature-img"
                           alt="Недостаток кости или сложное строение челюсти">
                      <span class="bold">Недостаток кости или сложное строение челюсти</span>
                    </div>
                  </div>
                </div>
                <div class="implant__slider-img img"><img class="swiper-lazy"
                                                          data-src="<?php echo IMAGES_PATH ?>/implant-slider1.jpg"
                                                          alt="Шаблонная имплантация R2Gate"></div>
              </div>
              <h4>Особенности:</h4>
              <div class="implant__slider-box">
                <div class="implant__slider-box-item">
                  <svg>
                    <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-implant.svg#implant1"></use>
                  </svg>
                  <span>Возможность установки зуба за один день</span>
                </div>
                <div class="implant__slider-box-item">
                  <svg>
                    <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-implant.svg#implant2"></use>
                  </svg>
                  <span>Быстрая установка и ускоренное заживление</span>
                </div>
                <div class="implant__slider-box-item">
                  <svg>
                    <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-implant.svg#implant3"></use>
                  </svg>
                  <span>Идеальный эстетический результат</span>
                </div>
              </div>
            </div>
            <div class="swiper-slide implant__slider-item">
              <h3>Одномоментная имплантация</h3>
              <div class="implant__slider-wrap">
                <div class="implant__slider-info">
                  <p class="implant__slider-desc"><?php the_field('slider-text-2'); ?></p>
                  <h4>Показания:</h4>
                  <div class="implant__slider-feature-wrap">
                    <div class="implant__slider-feature">
                      <img src="<?php echo IMAGES_PATH ?>/implant7.jpg" class="implant__slider-feature-img"
                           alt="Используется сразу после удаления зуба">
                      <span class="bold">Используется сразу после удаления зуба</span>
                    </div>
                    <div class="implant__slider-feature">
                      <img src="<?php echo IMAGES_PATH ?>/implant8.jpg" class="implant__slider-feature-img"
                           alt="Отсутсвует необходимость наращивания кости">
                      <span class="bold">Отсутсвует необходимость наращивания кости</span>
                    </div>
                  </div>
                </div>
                <div class="implant__slider-img img"><img class="swiper-lazy"
                                                          data-src="<?php echo IMAGES_PATH ?>/implant-slider2.jpg"
                                                          alt="Одномоментная имплантация"></div>
              </div>
              <h4>Особенности:</h4>
              <div class="implant__slider-box">
                <div class="implant__slider-box-item">
                  <svg>
                    <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-implant.svg#implant1"></use>
                  </svg>
                  <span>Быстрое восстановление и 100% приживаемость</span>
                </div>
                <div class="implant__slider-box-item">
                  <svg>
                    <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-implant.svg#implant2"></use>
                  </svg>
                  <span>Установка и коронки и импланта за один час</span>
                </div>
                <div class="implant__slider-box-item">
                  <svg>
                    <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-implant.svg#implant4"></use>
                  </svg>
                  <span>Идеальный эстетический результат</span>
                </div>
              </div>
            </div>
            <div class="swiper-slide implant__slider-item">
              <h3>Классическая имплантация</h3>
              <div class="implant__slider-wrap">
                <div class="implant__slider-info">
                  <p class="implant__slider-desc"><?php the_field('slider-text-3'); ?></p>
                  <h4>Показания:</h4>
                  <div class="implant__slider-feature-wrap">
                    <div class="implant__slider-feature">
                      <img src="<?php echo IMAGES_PATH ?>/implant9.jpg" class="implant__slider-feature-img"
                           alt="Зуб отсутствует уже длительное время">
                      <span class="bold">Зуб отсутствует уже длительное время</span>
                    </div>
                    <div class="implant__slider-feature">
                      <img src="<?php echo IMAGES_PATH ?>/implant10.jpg" class="implant__slider-feature-img"
                           alt="Недостаток кости или сложное строение челюсти">
                      <span class="bold">Недостаток кости или сложное строение челюсти</span>
                    </div>
                  </div>
                </div>
                <div class="implant__slider-img img"><img class="swiper-lazy"
                                                          data-src="<?php echo IMAGES_PATH ?>/implant-slider3.jpg"
                                                          alt="Классическая имплантация"></div>
              </div>
              <h4>Особенности:</h4>
              <div class="implant__slider-box">
                <div class="implant__slider-box-item">
                  <svg>
                    <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-implant.svg#implant5"></use>
                  </svg>
                  <span>Надежный метод имплантации</span>
                </div>
                <div class="implant__slider-box-item">
                  <svg>
                    <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-implant.svg#implant6"></use>
                  </svg>
                  <span>Применяется при наращивании костной ткани</span>
                </div>
                <div class="implant__slider-box-item">
                  <svg>
                    <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-implant.svg#implant7"></use>
                  </svg>
                  <span>Срок приживания до 6 месяцев</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
    </div>
    <div class="block">
      <div class="container">
        <h2>Как происходит установка и протезирование имплантата</h2>
        <div class="youtube">
          <iframe width="100%" height="100%"
                  src="https://www.youtube.com/embed/mQ7DQoOFcLk"
                  title="Как происходит установка и протезирование имплантата" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <div class="block">
      <div class="container">
        <h2>Для вас мы собрали <span class="blue">самые оптимальные варианты</span><br>имплантатов из разных ценовых
          категорий </h2>
        <?php if (get_field('implant-prices')): ?>
          <div class="implant__prices">
            <?php while (have_rows('implant-prices')): the_row() ?>
              <div class="implant__prices-item">
                <div class="implant__prices-top">
                  <div class="implant__prices-title">
                    <h4><?php the_sub_field('title'); ?></h4>
                    <span class="country"><?php the_sub_field('country'); ?></span>
                  </div>
                  <div class="flag img"><img src="<?php the_sub_field('flag'); ?>"
                                             alt="<?php the_sub_field('title'); ?>"></div>
                </div>
                <div class="implant__prices-free">Консультация бесплатно!</div>
                <div class="implant__prices-box">
                  <div class="implant__prices-row">
                    <span>Цена за один имплант<br>с установкой</span>
                    <span><?php the_sub_field('row-1'); ?> ₽</span>
                  </div>
                  <div class="implant__prices-row">
                    <span>Формирователь<br>десны</span>
                    <span><?php the_sub_field('row-2'); ?> ₽</span>
                  </div>
                  <div class="implant__prices-row">
                    <span><?php the_sub_field('type'); ?></span>
                    <span><?php the_sub_field('row-3'); ?> ₽</span>
                  </div>
                  <div class="implant__prices-row">
                    <span>Гарантия<br>на работу врача</span>
                    <span><?php the_sub_field('row-4'); ?></span>
                  </div>
                  <div class="implant__prices-row">
                    <span>Гарантия<br>на имплантат</span>
                    <span><?php the_sub_field('row-5'); ?></span>
                  </div>
                  <div class="implant__prices-row">
                    <span>Время<br>приживления</span>
                    <span><?php the_sub_field('row-6'); ?></span>
                  </div>
                </div>
                <?php if (get_sub_field('is-sale')): ?>
                  <div class="implant__prices-old-price">
                    <?php the_sub_field('old-price'); ?> ₽
                  </div>
                <?php endif; ?>
                <div class="implant__prices-total">
                  <span>Итоговая цена:</span>
                  <span><?php the_sub_field('total'); ?> ₽</span>
                </div>
                <?php if (get_sub_field('is-sale') && get_sub_field('notification')): ?>
                  <div class="implant__prices-notification">
                    <?php the_sub_field('notification'); ?>
                  </div>
                <?php endif; ?>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <?php get_template_part('template-parts/cite'); ?>

    <div class="block">
      <div class="container">
        <div class="implant__info">
          <div class="implant__info-text">
            <h2>Какие дополнительные траты возможны при имплантации зуба</h2>
            <p>При имплантации зубов могут быть необходимы дополнительные процедуры, о которых часто сообщается
              достаточно поздно. Некоторые процедуры необходимы (например, наращивание костной ткани), а некоторые
              делаются только при вашем желании. На нашей бесплатной консультации врач подробно проконсультирует по
              вашей ситуации и произведет подробный рассчет.</p>
          </div>
          <div class="implant__info-box">
            <h4>Какие процедуры<br>могут понадобиться?</h4>
            <div class="implant__info-row">
              <span>Удаление поврежденного зуба</span>
              <span>от 3000 ₽</span>
            </div>
            <div class="implant__info-row">
              <span>Закрытый синус-лифтинг</span>
              <span>от 17275 ₽</span>
            </div>
            <div class="implant__info-row">
              <span>Открытый синус-лифтинг</span>
              <span>от 48960 ₽</span>
            </div>
            <div class="implant__info-row">
              <span>Временная коронка</span>
              <span>от 3675 ₽</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="block">
      <div class="container">
        <div class="implant__info-after">
          <div class="implant__info-after-title">Хотите избежать костной<br>пластики? Спросите нас как!</div>
          <div class="button button-white open-callback"
               data-title="Страница имплантации. Хотите избежать костной пластики? Спросите нас как">обратный звонок
          </div>
        </div>
      </div>
    </div>

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