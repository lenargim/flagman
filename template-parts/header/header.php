<?php require_once("head.php"); ?>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
  <div class="container">
    <div class="header__wrap">
      <div class="header__top">
        <div class="header__logo">
          <?php the_custom_logo() ?>
        </div>
        <?php if (get_field('address', 38)): ?>
          <address class="header__address">
            <div class="city">г. Казань</div>
            <div class="street"><?php the_field('address', 38); ?></div>
          </address>
        <?php endif; ?>
        <?php if (get_field('phone', 38)): ?>
          <a href="tel:<? echo preg_replace('/[' . $phone_chars . ']/', '', get_field('phone', 38)) ?>"
             class="header__phone">
            <svg>
              <use xlink:href="<?php echo $images_path; ?>/sprite-common.svg#phone"></use>
            </svg>
            <span><?php the_field('phone', 38); ?></span>
          </a>
        <?php endif; ?>
        <div class="button button-blue open-callback" data-title="Шапка">Записаться на приём</div>
      </div>
      <?php wp_nav_menu([
          'theme_location' => '',
          'menu' => '',
          'container' => '',
          'menu_class' => 'header__menu',
      ]) ?>
    </div>
  </div>
</header>