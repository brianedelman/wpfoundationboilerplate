<?php

  $bg_image = get_field('background_image');
  $title = get_field('title');

  ?>

  <?php if (!empty($title) || !empty($bg_image)): ?>
    <div class="banner-wrapper">
      <div class="parallax-banner <?php if (isset($class_name)): echo $class_name; endif; ?>" <?php if( !empty($bg_image) ): ?>
         style="background-image:url(<?php echo $bg_image['url']; ?>)"
      <?php endif; ?>></div>
      <div class="grid-centered">
        <div class="small-12 medium-8 cell center">
          <?php
          $divider = get_field('divider');
          $sub_title = get_field('sub_title');

          if( !empty($title) ): ?>

            <h1><?php echo $title ?></h1>

          <?php endif; ?>

          <?php if( $divider == true ): ?>
            <div class="small-divider"></div>
          <?php endif; ?>

          <?php if( !empty($sub_title) ): ?>

            <h2 class="subtitle"><?php echo $sub_title ?></h2>

          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif;?>
