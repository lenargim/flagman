<?php if (get_field('ratings', 38)): ?>
  <div class="ratings">
    <?php while (have_rows('ratings', 38)) : the_row() ?>
      <a href="<?php the_sub_field('link'); ?>" class="ratings__item" target="_blank">
        <img class="ratings__item-logo" src="<?php the_sub_field('logo'); ?>" alt="<?php the_sub_field('platform'); ?>">
        <span class="ratings__item-rating"><?php the_sub_field('rating'); ?> из 5</span>
      </a>
    <?php endwhile; ?>
  </div>
<?php endif; ?>