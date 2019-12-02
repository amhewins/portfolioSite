<?php
/**
* Category Template
*/
get_header(); ?>

<div class="section">
  <div class="columns features">

  <?php
    if ( have_posts() ) : $count = 0; while ( have_posts() ) : the_post();
    $count++;
    if ( $count == 4 || $count == 8 ) :
  ?>
  </div>
</div>
  <div class="section">
  <div class="columns features">
    <a href="<?php the_permalink() ?>">
      <div class="column link is-4">
        <div class="card-image">
          <img src="<?php the_field('project_image'); ?>" />
        </div>
        <div class="card-content">
          <div class="content">
            <h4><?php the_field('project_name'); ?></h4>
            <p><?php the_category(', '); ?></p>
          </div>
        </div>
      </div>
    </a>

<?php else : ?>

    <a href="<?php the_permalink() ?>">
      <div class="column link is-4">
        <div class="card-image">
          <img src="<?php the_field('project_image'); ?>" />
        </div>
        <div class="card-content">
          <div class="content">
            <h4><?php the_field('project_name'); ?></h4>
            <p><?php the_category(', '); ?></p>
          </div>
        </div>
      </div>
    </a>

  <?php endif; endwhile; endif; ?>

  </div>
</div>

<?php get_footer(); ?>
