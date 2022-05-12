<?php if (get_field('prices')): ?>
  <div class="block">
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
  </div>
<?php endif; ?>