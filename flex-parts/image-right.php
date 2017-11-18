<div class="grid-center-middle grid-margin-x">
  <div class="small-12 medium-6 cell">

  <?get_template_part('flex-parts/text', 'container'); ?>

  </div>
  <div class="small-12 medium-6 cell">

    <?php if (get_sub_field('image')):
      $image = get_sub_field('image');?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    <?php endif; ?>

  </div>
</div>
