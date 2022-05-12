<?php get_template_part('template-parts/header/header'); ?>
<main class="text">
  <div class="contacts__logo"><img src="<?php echo IMAGES_PATH ?>/logo-white-big.png" alt="Флагманстом"></div>
  <div class="text__wrap">
    <div class="container">
      <h1><?php the_title() ?></h1>
      <?php the_content(); ?>
    </div>
  </div>
</main>
<?php get_template_part('template-parts/footer'); ?>