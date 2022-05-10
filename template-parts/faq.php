<?php $faq = get_field('faq') ?>
<?php if ($faq): ?>
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
<?php endif; ?>