<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<footer class="footer">
  <div class="footer__callback">
    <div class="container">
      <div class="footer__callback-wrap">
        <div class="footer__callback-text">
          <span>Остались вопросы?</span>
          <p>Администратор клиники с радостью проконсультирует<br>вас по любому вопросу</p>
        </div>
        <div class="footer__callback-contact">
          <?php if (get_field('phone', 38)): ?>
            <a href="tel:<? echo preg_replace('/[' . PHONE_CHARS . ']/', '', get_field('phone', 38)) ?>"
               class="header__phone hidden-on-mobile">
              <svg>
                <use xlink:href="<?php echo IMAGES_PATH; ?>/sprite-common.svg#phone"></use>
              </svg>
              <span><?php the_field('phone', 38); ?></span>
            </a>
          <?php endif; ?>
          <div class="button button-blue footer__callback-button open-callback" data-title="Кнопка 'Обратный звонок' подвала">обратный звонок</div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__main">
    <div class="container">
      <div class="footer__main-wrap">
        <div class="footer__main-info">
          <a href="/" class="footer__main-logo"></a>
          <div class="footer__main-desc tabletG-and-more">Наша стоматология продолжает прием в обычном режиме, но с соблюдением правил в
            условиях предельной безопасности!
          </div>
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
          <?php if ($address): ?>
            <div class="footer__main-address-title">Наш адрес:</div>
            <address class="footer__main-address">г. Казань<br><?php echo $address; ?></address>
          <?php endif; ?>
        </div>
        <div class="footer__main-menu">
          <div class="footer__menu-title">Наши услуги:</div>
          <?php wp_nav_menu([
              'theme_location' => '',
              'menu' => 'footer',
              'container' => '',
              'menu_class' => 'footer__menu',
          ]) ?>
        </div>
        <div class="footer__main-schedule">
          <div class="footer__menu-title">График работы:</div>
          <table class="footer__menu-table">
            <?php while (have_rows('schedule', 38)) : the_row() ?>
              <tr>
                <td><?php the_sub_field('day'); ?></td>
                <td><?php the_sub_field('time'); ?></td>
              </tr>
            <?php endwhile; ?>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__after">
    <?php $footer_text = get_field('footer-text', 38) ?>
    <?php if ($footer_text): ?>
      <div class="footer__after-text">
        <?php echo $footer_text; ?>
      </div>
    <?php endif; ?>
  </div>
</footer>
<div class="overlay">
  <div class="modal modal-callback">
    <div class="modal__close"></div>
    <div class="modal__title">Обратный звонок</div>
    <?php echo do_shortcode('[contact-form-7 id="164" title="Callback block"]')?>
    <span class="form__policy">Нажимая кнопку, вы даёте согласие на обработку персональных данных в соответствии с <a
          href="/policy" target="_blank">Политикой конфиденциальности</a></span>
  </div>
  <div class="modal modal-thx">
    <div class="modal__close"></div>
    <div class="modal-thx__title">Администраторы<br>получили Вашу заявку</div>
    <div class="modal-thx__desc">
      Мы перезвоним вам ближайшее время и проконсультируем<br>
      по всем имеющимся вопросам.
    </div>
    <div class="modal-thx__notime">Нет времени ждать звонка? Вы можете позвонить нам:</div>
    <?php $getPhone = get_field('phone', 38); ?>
    <a href="tel:<? echo preg_replace('/[' . PHONE_CHARS . ']/', '', $getPhone) ?>"
       class="modal-thx__phone"><?php echo $getPhone; ?>
    </a>
  </div>
</div>
<?php wp_footer(); ?>

</body>
</html>
