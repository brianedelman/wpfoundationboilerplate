<div id="carousel-primary">
  <?php if( have_rows('carousel') ):
        while ( have_rows('carousel') ) : the_row();
            $slide = get_sub_field('slide');
            ?>
            <?php
              $img_src = wp_get_attachment_image_url( $slide['id'] );
              $img_srcset = wp_get_attachment_image_srcset( $slide['id'] );
              $img_sizes = wp_calculate_image_sizes( 'medium' );
              ?>
              <img src="<?php echo esc_url( $img_src ); ?>"
             srcset="<?php echo esc_attr( $img_srcset ); ?>"
             sizes="(max-width: 50em) 87vw, 680px" alt="<?php $image['alt']; ?>">
        <?php endwhile;
    endif; ?>
</div>
