<div class="grid-centered">
  <div class="small-12 cell">
    <?php if (get_sub_field('title')): ?>
      <h2>
        <?php the_sub_field('title'); ?>
      </h2>
    <?php endif; ?>

    <div class="responsive-embed">
      <?php the_sub_field('section_video'); ?>
    </div>

    <?php if (get_sub_field('caption')): ?>
      <p>
        <?php the_sub_field('caption'); ?>
      </p>
    <?php endif; ?>

  </div>
</div>
