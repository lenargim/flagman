<?php
/*
Template name: Кариес
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
          <h2>Подробнее о кариесе</h2>
          <div class="services-detailed__text-desc">
            Наиболее распространенной стоматологической проблемой считается кариес. Это заболевание поражает и
            взрослых
            и детей, поэтому усилия стоматологов направлены на своевременное выявление заболевания зубов, и их
            эффективное устранение.<br>Лечение кариеса в Казани можно произвести в стоматологии "ФлагманСтом".
          </div>
          <h4>Стадии заболевания</h4>
          <div class="services-detailed__text-block">
            <div class="services-detailed__text-info">
              Начальный кариес, или стадия пятна – на поверхности зуба появляются первые признаки процесса
              деминерализации с образованием <span class="bold">белого или желтоватого пятна.</span>
            </div>
            <img src="<?php echo IMAGES_PATH ?>/heal1.png" alt="Начальный кариес" title="Начальный кариес">
          </div>
          <div class="services-detailed__text-block">
            <div class="services-detailed__text-info">
              Поверхностный кариес – на этой стадии начинается <span class="bold">разрушение эмали</span>, но глубокие
              слои дентина еще не
              затронуты, поэтому пораженные участки и процесс их лечения не вызывают боли и не требуют обезболивания
            </div>
            <img src="<?php echo IMAGES_PATH ?>/heal2.png" alt="Поверхностный кариес" title="Поверхностный кариес">
          </div>
          <div class="services-detailed__text-block">
            <div class="services-detailed__text-info">
              Стадия среднего кариеса является переходным состоянием между начальным и глубоким кариесом. При среднем
              кариесе наблюдается <span class="bold">разрушение эмали и структуры дентина</span>. Если своевременно не
              приступить к лечению, это
              приводит к разрушению зуба и дополнительным патологиям, например, к воспалению зубного нерва (пульпиту).
            </div>
            <img src="<?php echo IMAGES_PATH ?>/heal3.png" alt="Стадия среднего кариеса"
                 title="Стадия среднего кариеса">
          </div>
          <div class="services-detailed__text-block">
            <div class="services-detailed__text-info">
              Глубокий кариес последняя стадия кариозного процесса, характеризующаяся <span class="bold">обширным поражением твердых
                тканей зуба</span>, захватывающим глубокие слои дентина. Клинически глубокий кариес выражается
              разрушением
              коронки зуба, болевыми ощущениями при воздействии температурных, механических или химических
              раздражителей.
            </div>
            <img src="<?php echo IMAGES_PATH ?>/heal4.png" alt="Глубокий кариес" title="Глубокий кариес">
          </div>
        </div>
        <div class="services-detailed__aside">
          <div class="burning__box">
            <h4>Каких проблем можно избежать, если своевременно лечить кариес</h4>
            <div class="burning__box-item">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
              </svg>
              <p>Более глубокого заражения и возникновения осложнений</p>
            </div>
            <div class="burning__box-item">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
              </svg>
              <p>Предотвращение болевых ощущений как последствий развития кариеса</p>
            </div>
            <div class="burning__box-item">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
              </svg>
              <p>Восстановить внешний вид зубов и сохранить целостность </p>
            </div>
            <div class="burning__box-item">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
              </svg>
              <p>Вернуть комфорт при приеме пищи и забыть про неприятные ощущения</p>
            </div>
          </div>
          <div class="burning__box">
            <h4>Причины появления кариеса</h4>
            <div class="burning__box-item">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
              </svg>
              <p>Нерегулярный или некачественный уход за полостью рта повышает риски развития кариеса</p>
            </div>
            <div class="burning__box-item">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
              </svg>
              <p>Рацион - важная составляющая нашего здоровья. Избыток сахара и быстрых углеводов - одна из причин
                развития кариеса</p>
            </div>
            <div class="burning__box-item">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
              </svg>
              <p>Ношение брекетов и протезов затрудняют гигиену полости рта и могут привести к повреждению эмали</p>
            </div>
            <div class="burning__box-item">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#check"></use>
              </svg>
              <p>Предрасположенность к кариесу может быть наследственным фактором</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php get_template_part('template-parts/cite'); ?>
    <div class="services-detailed__steps block">
      <div class="container">
        <h2>Этапы лечения зубов в клинике «Флагманстом»</h2>
        <div class="services-detailed__steps-desc">В нашей клинике Вы можете пройти лечение
          <span class="blue">нескольких зубов за один день</span>
          - Вам не нужно будет&nbsp;приезжать&nbsp;несколько&nbsp;раз!
        </div>
        <ol class="services-detailed__steps-list">
          <li>
            <h4 class="services-detailed__steps-list-title">Предварительная санация</h4>
            <p class="services-detailed__steps-list-text">Перед началом лечения производится гигиеническая очистка
              зуба от зубного налета и камня. С этой целью используются ультразвуковые насадки для снятия массивных
              зубных отложений, а также специальные щетки и абразивные пасты для снятия мягкого микробного и
              пигментного налета.</p>
          </li>
          <li>
            <h4 class="services-detailed__steps-list-title">Подготовка к лечению</h4>
            <p class="services-detailed__steps-list-text">На данном этапе проводится обработка десны охлаждающим гелем
              и вводится анестезия. Далее терапевт-стоматолог накладывает специалный защитный материал —
              раббердама/коффердама. Он обеспечит абсолютную сухость рабочего поля и лучшее прилегание пломбы, а также
              защитит зуб от попадания микробов полости рта.</p>
          </li>
          <li>
            <h4 class="services-detailed__steps-list-title">Процесс лечения</h4>
            <p class="services-detailed__steps-list-text">Врач проводит раскрытие кариозной полости и удаляет
              пораженные ткани зуба.
              При необходимости проводится удаление пульпы, обрабатываются корневые каналы для устранения инфекции.
              Далее стоматолог-терапевт устанавливает и формирует пломбу, в завершении полируя её для Вашего
              комфорта.</p>
          </li>
          <span>*В некоторых случаях при необходимости врач может заложить в корневые каналы лекарство для полной антисептической обработки и устранения воспаления, закрыв временной пломбой. Через 2-3 дня пациент приходит снова для завершения лечениия.</span>
        </ol>
      </div>
    </div>
      <?php get_template_part('template-parts/callback'); ?>
    <?php get_template_part('template-parts/equipment'); ?>
    <?php get_template_part('template-parts/prices'); ?>
    <div class="services-detailed__doctors">
      <div class="container">
        <h2>Лечением зубов занимаются наши лучшие<br>стоматологи-терапевты</h2>
        <?php global $post;
        $myposts = get_posts([
            'posts_per_page' => -1,
            'post_type' => 'doctors',
            'tax_query' => [
                [
                    'taxonomy' => 'specialisation',
                    'field' => 'slug',
                    'terms' => 'terapevt',
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
    <div class="block">
      <?php get_template_part('template-parts/expectation'); ?>
    </div>
    <?php get_template_part('template-parts/faq'); ?>
  </main>
<?php get_template_part('template-parts/footer'); ?>