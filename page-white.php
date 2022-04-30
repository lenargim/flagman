<?php
/*
Template name: Отбеливание
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
        <div class="services-detailed__white-wrap">
          <div class="services-detailed__text">
            <h2>Что такое химическое отбеливание</h2>
            <div class="services-detailed__text-desc">
              Химическое отбеливание - профессиональный вид отбеливания для которого используется специальный гель, в
              состав которого входит перекись. При этом гель работает либо сам по себе, либо под воздействием света
              ультрафиолетовой лампы, а также луча лазера. Такие виды называются фотоотбеливанием и лазерным
              отбеливанием. Непосредственно химическое отбеливание проводится без использования лампы.
            </div>
            <h4>Почему мы используем химическое отбеливание?</h4>
            <div class="services-detailed__text-block">
              <div class="services-detailed__text-info">
                При любом из способов отбеливания зубов используются химические компаненты, но в нашем случае во время
                терапии не используется никакой катализатор (ультрафиолетовое излучение, лазер), то перегрев эмали
                полностью исключается. Это существенное преимущество данного способа осветления.
              </div>
            </div>
          </div>
          <div class="services-detailed__text-img img"><img src="<?php echo IMAGES_PATH ?>/white.jpg"
                                                            alt="Что такое химическое отбеливание"></div>
        </div>
        <h4>Стоит ли доверять процедуре?</h4>
        <p>Так как во время терапии не используется никакой катализатор (ультрафиолетовое излучение, лазер), то перегрев
          эмали полностью исключается. Это существенное преимущество данного способа осветления. Но если не будут
          соблюдены правила безопасности, все равно могут возникнуть болевые ощущения.</p>
      </div>
      <div class="block">
        <div class="container container_small">
          <div class="warning">
            Именно поэтому доверять здоровье следует только опытным и высококвалифицированным<br>
            докторам. От самостоятельных домашних манипуляций лучше вовсе отказаться.
          </div>
        </div>
      </div>
      <div class="container">
        <div class="contraindications block">
          <div class="contraindications__wrap">
            <h4>Какие имеются противопоказания?</h4>
            <ul>
              <li>Детям до 14 лет</li>
              <li>Беременным и кормящим женщинам</li>
              <li>При сильном повреждении зубной эмали</li>
              <li>Людям с разрушенными зубами и оголенными корнями</li>
              <li>Людям с аллергией на гель</li>
            </ul>
          </div>
          <div class="services-detailed__text-img img"><img src="<?php echo IMAGES_PATH ?>/white2.jpg"
                                                            alt="Какие имеются противопоказания"></div>
        </div>
      </div>
      <?php if (get_field('cite-title')): ?>
        <div class="container container_big">
          <div class="services-detailed__cite block">
            <h3 class="services-detailed__cite-limit services-detailed__cite-title">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-heal.svg#cite"></use>
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
      <div class="services-detailed__advantages block">
        <div class="container">
          <h2>Достоинства химического отбеливания</h2>
          <div class="services-detailed__advantages-item">
            <span>Зубная эмаль за одну процедуру осветляется на 5-10 тонов. Такого результата можно достичь без травмирования эмали и сохраняется он на долгий период.</span>
          </div>
          <div class="services-detailed__advantages-item"><span>Химическое отбеливание не оказывается негативное влияние на состояние пломб. Их не придется менять или перекрашивать при помощи специальных составов</span>
          </div>
          <div class="services-detailed__advantages-item"><span>На химическое отбеливание зубов очень доступная цена, так как в этом случае не требуется задействовать дополнитильное оборудование</span>
          </div>
          <div class="services-detailed__advantages-item"><span>Для осветления эмали достаточно одного сеанса не чаще чем один раз в полгода. Это позволяет максимально быстро достичь результат и потратить минимальное количество усилий</span>
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
      <div class="block">
        <?php get_template_part('template-parts/callback'); ?>
      </div>
      <?php $faq = get_field('faq') ?>
      <?php if ($faq) ?>
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
      <?php ?>
    </div>
  </main>
<?php get_template_part('template-parts/footer/footer'); ?>