<?php if (get_field('prices')): ?>
  <div class="block">
    <div class="prices">
      <div class="container">
        <h2><?php the_field('price-title'); ?></h2>
        <div class="prices__wrap">
          <?php while (have_rows('prices')) : the_row() ?>
            <?php if (!get_sub_field('is-link')): ?>
              <div class="prices__item">
                <span><?php the_sub_field('service'); ?></span>
                <?php if (!get_sub_field('is-free')): ?>
                  <span><?php the_sub_field('price'); ?> ₽</span>
                <?php else: ?>
                  <span class="blue">бесплатно</span>
                <?php endif; ?>
              </div>
            <?php else: ?>
              <a href="<?php echo get_permalink(get_sub_field('link')->ID) ?>" class="prices__item">
                <span class="blue underline"><?php the_sub_field('service'); ?></span>
                <?php if (!get_sub_field('is-free')): ?>
                  <span class="black"><?php the_sub_field('price'); ?> ₽</span>
                <?php else: ?>
                  <span class="blue">бесплатно</span>
                <?php endif; ?>
              </a>
            <?php endif; ?>
          <?php endwhile; ?>
        </div>
        <?php if (get_field('is-extra-price')): ?>
          <div class="prices__extra">
            <h4>Вам может быть интересно:</h4>
            <div class="prices__wrap">
              <?php while (have_rows('extra-prices')) : the_row() ?>
                <?php if (!get_sub_field('is-link')): ?>
                  <div class="prices__item">
                    <span><?php the_sub_field('service'); ?></span>
                    <?php if (!get_sub_field('is-free')): ?>
                      <span><?php the_sub_field('price'); ?> ₽</span>
                    <?php else: ?>
                      <span class="blue">бесплатно</span>
                    <?php endif; ?>
                  </div>
                <?php else: ?>
                  <a href="<?php echo get_permalink(get_sub_field('link')->ID) ?>" class="prices__item">
                    <span class="blue underline"><?php the_sub_field('service'); ?></span>
                    <?php if (!get_sub_field('is-free')): ?>
                      <span class="black"><?php the_sub_field('price'); ?> ₽</span>
                    <?php else: ?>
                      <span class="blue">бесплатно</span>
                    <?php endif; ?>
                  </a>
                <?php endif; ?>
              <?php endwhile; ?>
            </div>
          </div>
        <?php endif; ?>
        <div class="prices__after"><?php the_field('price-after'); ?></div>
      </div>
    </div>
  </div>
<?php endif; ?>