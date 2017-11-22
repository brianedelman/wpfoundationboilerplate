

<div class="page-wrapper">
  <div id="inner-content" class="row">
    <main id="main" class="small-12 columns" role="main">

    <?php // open the WordPress loop

      // are there any rows within within our flexible content?
      if( have_rows('page_content') ):

        // loop through all the rows of flexible content
        while ( have_rows('page_content') ) : the_row();

        // wyswig
        if( get_row_layout() == 'main_content' )
          get_template_part('flex-parts/main', 'content');

        // h1 tag
        if( get_row_layout() == 'header_large' )
          get_template_part('flex-parts/header', 'large');

        // h2 tag
        if( get_row_layout() == 'header_medium' )
          get_template_part('flex-parts/header', 'medium');

        // h3 tag
        if( get_row_layout() == 'header_small' )
          get_template_part('flex-parts/header', 'small');

          // h3 tag with text
          if( get_row_layout() == 'title_text' )
            get_template_part('flex-parts/section', 'title-text');

          if( get_row_layout() == 'section_left' )

          // text on left image on right
          if( get_row_layout() == 'section_left' )
            get_template_part('flex-parts/section', 'left-med-image');

          // text on right image on left
          if( get_row_layout() == 'section_right' )
            get_template_part('flex-parts/section', 'right-med-image');


        // image-left content right
        if( get_row_layout() == 'section_image_left' )
          get_template_part('flex-parts/image', 'left');

        // image-right content left
        if( get_row_layout() == 'section_image_right' )
          get_template_part('flex-parts/image', 'right');

        // image-right content left
        if( get_row_layout() == 'section_video' )
          get_template_part('flex-parts/section', 'video');

        // section with four columns
        if( get_row_layout() == 'section_columns' )
          get_template_part('flex-parts/section', 'columns');

        // section with four columns
        if( get_row_layout() == 'simple_columns' )
          get_template_part('flex-parts/simple', 'columns');

        // section with hero
        if( get_row_layout() == 'section_hero' )
          get_template_part('flex-parts/section', 'hero');

        // section divider
        if( get_row_layout() == 'divider' )
          get_template_part('flex-parts/section', 'divider');

        // section divider long and dashed
        if( get_row_layout() == 'divider_long' )
          get_template_part('flex-parts/section', 'divider-long');

        // section divider long and black
        if( get_row_layout() == 'divider_spaced' )
        get_template_part('flex-parts/section', 'spaced');

        // question answer row
        if( get_row_layout() == 'question_answer' )
          get_template_part('flex-parts/question', 'answer');

        // question answer row
        if( get_row_layout() == 'carousel_primary' )
          get_template_part('flex-parts/slider');


    endwhile; endif; // close the WordPress loop ?>


    </main> <!-- end #main -->
  </div>
</div> <!-- end #inner-content -->
