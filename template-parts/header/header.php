<?php require_once("head.php"); ?>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
  <div class="container">
    <div class="header__wrap">
      <div class="header__top">
        <a href="/" class="header__logo img">
          <img src="<?php echo wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0]; ?>"
               alt="ФлагманСтом">
        </a>
        <?php if (get_field('address', 38)): ?>
          <address class="header__address tabletG-and-more">
            <div class="city">г. Казань</div>
            <div class="street"><?php the_field('address', 38); ?></div>
          </address>
        <?php endif; ?>
        <?php $getPhone = get_field('phone', 38); ?>
        <?php if ($getPhone): ?>
          <a href="tel:<? echo preg_replace('/[' . PHONE_CHARS . ']/', '', $getPhone) ?>"
             class="header__phone">
            <svg>
              <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#phone"></use>
            </svg>
            <span class="tabletG-and-more"><?php echo $getPhone ?></span>
          </a>
        <?php endif; ?>
        <div class="button button-blue open-callback tabletG-and-more" data-title="Шапка">Записаться на приём</div>
        <div class="burger less-then-tabletG">
          <div></div>
        </div>
      </div>
      <?php wp_nav_menu([
          'theme_location' => '',
          'menu' => 'main',
          'container' => '',
          'menu_class' => 'header__menu tabletG-and-more',
      ]) ?>
    </div>
  </div>
  <div class="burger-menu hidden">
    <div class="container">
      <a href="tel:<? echo preg_replace('/[' . PHONE_CHARS . ']/', '', $getPhone) ?>"
         class="burger-menu__phone"><?php echo $getPhone; ?>
      </a>
      <?php wp_nav_menu([
          'theme_location' => '',
          'menu' => 'main',
          'container' => '',
          'menu_class' => 'burger-menu__menu',
      ]) ?>
    </div>
  </div>
</header>