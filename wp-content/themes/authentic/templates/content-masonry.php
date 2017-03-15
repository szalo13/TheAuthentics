<article <?php post_class('post-masonry'); ?>>

  <?php if ( has_post_thumbnail() ) { ?>
    <div class="post-thumbnail">
      <?php the_post_thumbnail('masonry'); ?>

      <div class="masonry-content post-meta">
        <?php the_post_category(); ?>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
      </div>
    </div>
  <?php } ?>
</article>
