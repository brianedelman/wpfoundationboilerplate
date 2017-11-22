
  <div class="small-12 medium-4 cell">
    <?php $image = get_sub_field('image');
    if (!empty($image)): ?>
    <?php
      $img_src = wp_get_attachment_image_url( $image['id'] );
      $img_srcset = wp_get_attachment_image_srcset( $image['id'] );
      $img_sizes = wp_calculate_image_sizes( 'medium' );
      ?>
      <img src="<?php echo esc_url( $img_src ); ?>"
     srcset="<?php echo esc_attr( $img_srcset ); ?>"
     sizes="(max-width: 50em) 87vw, 680px" alt="<?php $image['alt']; ?>">
    <?php endif;?>

  </div>
