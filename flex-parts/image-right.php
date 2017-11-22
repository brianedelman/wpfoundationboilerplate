<div class="grid-center-middle grid-margin-x">
  <div class="small-12 medium-6 cell">

  <?get_template_part('flex-parts/text', 'container'); ?>

  </div>
  <div class="small-12 medium-6 cell">

    <?php if (get_sub_field('image')):
      $image = get_sub_field('image');?>
      <?php
        $img_src = wp_get_attachment_image_url( $image['id'] );
        $img_srcset = wp_get_attachment_image_srcset( $image['id'] );
        $img_sizes = wp_calculate_image_sizes( 'medium' );
        ?>
        <img src="<?php echo esc_url( $img_src ); ?>"
       srcset="<?php echo esc_attr( $img_srcset ); ?>"
       sizes="(max-width: 50em) 87vw, 680px" alt="<?php $image['alt']; ?>">
    <?php endif; ?>

  </div>
</div>
