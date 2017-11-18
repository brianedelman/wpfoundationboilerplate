

<div class="grid-x grid-margin-x align-spaced section-columns">
  <?php
  //find out how many columns have been made, and add a class based on that
  $allowed_classnames = array(
    1 => 'medium-12',
    2 => 'medium-6',
    3 => 'medium-4',
    4 => 'medium-3',
  );

  $number_of_cols = count( get_sub_field('column') );
  //set default to 4. so if there are 5 or more, we get 4 col layout
  $classname_to_use = $allowed_classnames[4];

  if ( array_key_exists( $number_of_cols , $allowed_classnames ) ) {
    $classname_to_use = $allowed_classnames[$number_of_cols];
  }

  if( have_rows('column') ):
    // loop through all the rows of flexible content
    while ( have_rows('column') ) : the_row();
     ?>

  <div class="small-12 <?php echo $classname_to_use; ?> cell flex-columns">
    <?php

    $image = get_sub_field('main_image');
    $link = get_sub_field('link');
    $video = get_sub_field('video');
    $title = get_sub_field('title');
    $text = get_sub_field('text');
    $file = get_sub_field('download_link');
    if (!empty($file)) {
      $new_link = $file['url'];
    } elseif (!empty($link)) {
      $new_link = $link;
    } else {
      $new_link = NULL;
    }

    if( !empty($image) && empty($video) ): ?>
      <?php if (!empty($new_link)):?>
        <a href="<?php echo $new_link; ?>">
      <?php endif; ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php if (!empty($new_link)):?>
        </a>
      <?php endif; ?>
        <?php if (!empty($title)): ?>
          <?php if (!empty($new_link)):?>
            <a href="<?php echo $new_link; ?>">
          <?php endif; ?>
          <h4 class="column-title"><?php echo $title; ?></h4>
          <?php if (!empty($new_link)):?>
            </a>
          <?php endif; ?>
        <?php endif; ?>


      <?php if (!empty($text)): ?>
        <p><?php echo $text; ?></p>
      <?php endif; ?>


    <?php endif; ?>

    <?php if( !empty($video) && empty($image) ): ?>
      <?php echo $video; ?>
      <?php if (!empty($title)): ?>
        <h4 class="column-title"><?php echo $title; ?></h4>
      <?php endif; ?>
      <?php if (!empty($text)): ?>
        <p><?php echo $text; ?></p>
      <?php endif; ?>
    <?php endif; ?>

    <?php
    $icon = get_sub_field('icon');

    if( !empty($title) &&
        empty($icon) &&
        empty($image) &&
        empty($video) ): ?>

      <?php if (!empty($new_link)):?>
        <a href="<?php echo $new_link; ?>">
      <?php endif; ?>
        <h3 class="column-title"><?php echo $title; ?></h3>
      <?php if (!empty($new_link)):?>
        </a>
      <?php endif; ?>

    <?php endif; ?>

    <?php if( !empty($icon) &&
              !empty($title) &&
              empty($image) &&
              empty($video) ): ?>
    <div class="icon-wrap">
      <i class="fa <?php echo $icon; ?>"></i>
      <div>
        <?php if (!empty($new_link)):?>
          <a href="<?php echo $new_link; ?>">
        <?php endif; ?>
          <h4 class="column-title"><?php echo $title; ?></h4>
        <?php if (!empty($new_link)):?>
          </a>
        <?php endif; ?>
        <p><?php echo $text; ?></p>
      </div>
    </div>
    <?php endif; ?>

    <?php if( !empty($icon) &&
              empty($title) &&
              empty($image) &&
              empty($video) ): ?>
    <div class="icon-wrap">
      <i class="fa <?php echo $icon; ?>"></i>
      <p><?php echo $text; ?></p>
    </div>
    <?php endif; ?>

    <?php if( !empty($text) &&
              !empty($title) &&
              empty($icon) &&
              empty($image) &&
              empty($video) ): ?>

      <p><?php echo $text; ?></p>

    <?php endif; ?>

  </div>
  <?php endwhile; ?>
<?php endif; ?>

</div>
