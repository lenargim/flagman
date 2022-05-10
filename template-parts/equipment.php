<?php $images = get_field('equipment', 38); ?>
<?php if ($images): ?>
  <div class="equipment block">
    <div class="container">
      <h2>В клинике используется только современное оборудование</h2>
      <div class="equipment__wrap">
        <?php foreach ($images as $image_id): ?>
          <div class="equipment__img img">
            <img src="<?php echo $image_id ?>">
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
<?php endif; ?>