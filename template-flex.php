<?php
/**
 * Template Name: Flex Template
 */
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part( 'flex-parts/top', 'banner' ); ?>
  <?php get_template_part( 'template-parts/flex', 'page' ); ?>
<?php endwhile; ?>

<?php get_footer(); ?>
