<div class="grid-centered faq">
  <div class="small-12 medium-8 cell">
    <?php if( !empty(get_sub_field('question')) ): ?>

      <h3>
        <?php the_sub_field('question'); ?>
      </h3>

    <?php endif; ?>

    <?php if( !empty(get_sub_field('answer')) ): ?>

      <p>
        <?php the_sub_field('answer'); ?>
      </p>

    <?php endif; ?>
  </div>
</div>
