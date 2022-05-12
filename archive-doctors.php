<?php get_template_part('template-parts/header/header'); ?>
  <main>
    <?php
    $object = get_queried_object();
    $desc = get_field('desc', $object->name);
    $text = get_field('text', $object->name);
    ?>
    <section class="page-banner">
      <div class="container">
        <div class="page-banner__wrap">
          <div class="page-banner__text">
            <h1>Стоматологи клиники «Флагманстом» </h1>
            <div class="page-banner__desc"><?php echo $desc ?></div>
            <div class="page-banner__buttonrow">
              <div class="button button-blue open-callback" data-title="Страница Врачей">Записаться на прием</div>
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
    <div class="doctors-page">
      <div class="container">
        <h2>Наши стоматологи помогут решить самые<br>сложные проблемы с зубами</h2>
        <div class="doctors-page__desc"><?php echo $text ?></div>
        <div class="doctors-page__box">
          <div class="doctors-page__type">
            <svg>
              <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-doctor.svg#doc1"></use>
            </svg>
            <div class="doctors-page__type-text">
              <div class="doctors-page__type-title">Терапевты</div>
              <p>Диагностика и лечение кариеса и его последствий, таких как пульпит и периодонтит. Реставрация зубов
                путем пломбирования специальными материалами для восстановления эстетики зуба</p>
            </div>
          </div>
          <div class="doctors-page__type">
            <svg>
              <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-doctor.svg#doc2"></use>
            </svg>
            <div class="doctors-page__type-text">
              <div class="doctors-page__type-title">Имплантологи</div>
              <p>Восстановление утраченных зубов с помощью имплантов. Восстановление привлекательности улыбки и
                фукциональности, несъемное протезирование всей челюсти</p>
            </div>
          </div>
          <div class="doctors-page__type">
            <svg>
              <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-doctor.svg#doc3"></use>
            </svg>
            <div class="doctors-page__type-text">
              <div class="doctors-page__type-title">Ортопеды</div>
              <p>Восстанавление зуба при наличии здорового корня с помощью коронок и эстетических накладок. Также врач
                ортопед занимается протезированием имплантата.</p>
            </div>
          </div>
          <div class="doctors-page__type">
            <svg>
              <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-doctor.svg#doc4"></use>
            </svg>
            <div class="doctors-page__type-text">
              <div class="doctors-page__type-title">Детские стоматологи</div>
              <p>Лечение молочных и уже кореных зубов проводится на основе знаний особенностей возраста, для дальнейшего
                развития здорового челюстнолицевого аппарата.</p>
            </div>
          </div>
          <div class="doctors-page__type">
            <svg>
              <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-doctor.svg#doc5"></use>
            </svg>
            <div class="doctors-page__type-text">
              <div class="doctors-page__type-title">Ортодонты</div>
              <p>Коррекция зубов с помощью брекет-сиистем у взрослых и детей, а также исправление прикуса, приводящих к
                нарушении симметрии лица и развитию заболеваний</p>
            </div>
          </div>
          <div class="doctors-page__type">
            <svg>
              <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-doctor.svg#doc6"></use>
            </svg>
            <div class="doctors-page__type-text">
              <div class="doctors-page__type-title">Хирурги</div>
              <p>Процедуры удаления зубов, а также сложные операции по сохранению зуба. Также
                стоматолог-хирургзанимается рассечением уздечек, а также десневые процедуры</p>
            </div>
          </div>
          <div class="doctors-page__type">
            <svg>
              <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-doctor.svg#doc7"></use>
            </svg>
            <div class="doctors-page__type-text">
              <div class="doctors-page__type-title">Пародонтолог</div>
              <p>Диагностика, лечение и профилактика заболеваний пародонта - совокупность тканей, которые окружают и
                фиксируют зуб.</p>
            </div>
          </div>
          <div class="doctors-page__type">
            <svg>
              <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-doctor.svg#doc8"></use>
            </svg>
            <div class="doctors-page__type-text">
              <div class="doctors-page__type-title">Гигиенисты</div>
              <p>Профилактика заболеваний, индивидуальный подбор средств личной гигиены и проведение профессиональной
                гигиены полости рта</p>
            </div>
          </div>
        </div>
      </div>


      <div class="block">
        <div class="container">
          <div class="doctors-page__wrap">
            <?php while (have_posts()) : the_post() ?>
              <div class="doctors-page__item">
                <?php if (get_field('lead-doc')): ?>
                  <div class="lead">
                    <span>Ведущий врач</span>
                  </div>
                <?php endif; ?>
                <div class="doctors-page__item-box">
                  <div class="doctors-page__item-title"><?php the_title() ?></div>
                  <div class="doctors-page__item-occupation"><?php the_field('spec'); ?></div>
                  <div class="doctors-page__item-exp">Опыт работы: <?php the_field('exp'); ?></div>
                  <div class="doctors-page__item-excerpt"><?php the_excerpt(); ?></div>
                </div>
                <a href="<?php the_permalink(); ?>" class="doctors-page__item-link button button-blue">
                  <span>подробнее</span>
                  <svg>
                    <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-common.svg#arrow-right-top"></use>
                  </svg>
                </a>
                <?php if (has_post_thumbnail()): ?>
                  <div class="doctors-page__item-img img">
                    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
                  </div>
                <?php endif; ?>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php get_template_part('template-parts/footer'); ?>