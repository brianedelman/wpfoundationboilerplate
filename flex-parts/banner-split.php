<?php

  $image = get_field('logo');
  $title = get_field('title');

  ?>

  <?php if (!empty($title) || !empty($image)): ?>
    <div class="banner-plain">
      <div class="grid-x">
        <div class="small-12 medium-6 cell">
          <div class="hide-for-small-only">
            <?php if( !empty($image) ): ?>
               <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
            <?php endif; ?>

            <?php
            $text = get_field('text');

            if( !empty($title) ): ?>

              <h1><?php echo $title ?></h1>

            <?php endif; ?>
          </div>


          <?php if( !empty($text) ): ?>

            <p><?php echo $text ?></p>

          <?php endif; ?>
        </div>

        <div class="small-12 medium-6 cell center">
          <?php if( !empty($title) ): ?>
            <div class="show-for-small-only">
              <h1><?php echo $title ?></h1>
              <?php if( !empty($image) ): ?>
                 <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php
          $imgID  = get_post_thumbnail_id();
          $img    = wp_get_attachment_image_src($imgID,'full', false, '');
          $imgAlt = get_post_meta($imgID,'_wp_attachment_image_alt', true); ?>
          <img src="<?php echo $img[0] ?>" alt="<?php echo $imgAlt; ?>"/>
        </div>
      </div>
    </div>
  <?php endif;?>
