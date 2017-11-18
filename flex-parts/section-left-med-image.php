<div class="grid-x grid-margin-x header-small text">
  <?php  get_template_part('flex-parts/medium', 'image'); ?>
  <div class="small-12 medium-8 cell">
    <?php if (get_sub_field('title')): ?>
      <?php $title_tag = get_sub_field('type_of_title_tag');?>
      <<?php echo $title_tag; ?> style="color:<?php the_sub_field('title_color'); ?>">
        <?php the_sub_field('title'); ?>
      </<?php echo $title_tag; ?>>
    <?php endif; ?>
    <p><?php the_sub_field('text'); ?></p>
  </div>
</div>
