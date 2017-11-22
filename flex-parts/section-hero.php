<?php

$bg_image = get_sub_field('background_image');

?>
<div class="section-hero" <?php if( !empty($bg_image) ): ?>
style="background-image:url(<?php echo $bg_image['url']; ?>)"
<?php endif; ?>>
  <div class="grid-center-middle">

    <div class="small-12 medium-8 cell">

      <?php

      $image = get_sub_field('image');

      if( !empty($image) ): ?>

      <?php
        $img_src = wp_get_attachment_image_url( $image['id'] );
        $img_srcset = wp_get_attachment_image_srcset( $image['id'] );
        $img_sizes = wp_calculate_image_sizes( 'medium' );
        ?>
        <img src="<?php echo esc_url( $img_src ); ?>"
       srcset="<?php echo esc_attr( $img_srcset ); ?>"
       sizes="(max-width: 50em) 87vw, 680px" alt="<?php $image['alt']; ?>">

      <?php endif; ?>

      <?php

      $title_large = get_sub_field('title_large');

      if( !empty($title_large) ): ?>

        <h1><?php echo $title_large ?></h1>

      <?php endif; ?>

      <?php

      $title_small = get_sub_field('title_small');

      if( !empty($title_small) ): ?>

        <h2><?php echo $title_small ?></h2>

      <?php endif; ?>

      <?php

      $text = get_sub_field('text');

      if( !empty($text) ): ?>

        <p><?php echo $text ?></p>

      <?php endif; ?>

    </div>

  </div>
</div>
