
  <div class="small-12 medium-4 cell">
    <?php $image = get_sub_field('image');
    if (!empty($image)): ?>
      <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt']?>">
    <?php endif;?>

  </div>
