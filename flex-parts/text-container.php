<?php if (get_sub_field('title')): ?>
  <?php $title_tag = get_sub_field('type_of_title_tag');?>
  <<?php echo $title_tag; ?>>
    <?php the_sub_field('title'); ?>
  </<?php echo $title_tag; ?>>
<?php endif; ?>

<?php if (get_sub_field('text')): ?>
  <p>
    <?php the_sub_field('text'); ?>
  </p>
<?php endif; ?>
