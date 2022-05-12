<?php
//Template name: Контакты
?>
<?php get_template_part('template-parts/header/header'); ?>
  <main>
    <div class="contacts">
      <div class="contacts__logo"><img src="<?php echo IMAGES_PATH ?>/logo-white-big.png" alt="Флагманстом"></div>
      <div class="contacts__main">
        <div class="container">
          <h1>Наши контакты</h1>
          <div class="contacts__row">
            <div class="contacts__row-item">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-contacts.svg#contact1"></use>
              </svg>
              <div class="contacts__row-text">
                <div><span class="bold">Пн-пт</span> 8:00-20:00;</div>
                <div><span class="bold">Сб-вск</span> 9:00-17:00</div>
              </div>
            </div>
            <a href="tel:<? echo preg_replace('/[' . PHONE_CHARS . ']/', '', get_field('phone', 38)) ?>"
               class="contacts__row-item">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-contacts.svg#contact2"></use>
              </svg>
              <div class="contacts__row-link"><?php echo get_field('phone', 38) ?></div>
            </a>
            <a href="mailto:<?php the_field('mail', 38); ?>" class="contacts__row-item">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH ?>/sprite-contacts.svg#contact3"></use>
              </svg>
              <div class="contacts__row-link"><?php the_field('mail', 38); ?></div>
            </a>
            <div class="socials">
              <?php $vk = get_field('vk', 38); ?>
              <?php $tg = get_field('tg', 38); ?>
              <?php $address = get_field('address', 38); ?>
              <?php if ($vk): ?>
                <a href="<?php echo $vk; ?>" target="_blank">
                  <svg>
                    <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#vk"></use>
                  </svg>
                </a>
              <?php endif; ?>
              <?php if ($tg): ?>
                <a href="tg://resolve?domain=<?php echo $tg; ?>" target="_blank">
                  <svg>
                    <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#tg"></use>
                  </svg>
                </a>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="block">
          <div class="container">
            <div class="map">
              <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A95efda0bbed9d6a0fc944ba08dd7a26e81c0e35dbaa787b26b275d022ee50e16&amp;source=constructor"
                      width="100%" height="585" frameborder="0"></iframe>
            </div>
          </div>
        </div>
        <div class="block">
          <div class="container">
            <h2>Лицензия</h2>
            <p>Лицензия № ЛО-31-01-0040245 от 16.05.2017 г.<br>
              Выдана Министерством здравоохранения Республики Татарстан</p>
            <div class="contacts__licence">
              <?php $images = get_field('licence'); ?>
              <?php foreach ($images as $image_id): ?>
                <div class="contacts__licence-img img">
                  <img src="<?php echo $image_id ?>">
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php get_template_part('template-parts/footer'); ?>