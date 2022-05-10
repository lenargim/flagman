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
      <?php get_template_part('template-parts/faq'); ?>
    </div>
  </main>
<?php get_template_part('template-parts/footer/footer'); ?>