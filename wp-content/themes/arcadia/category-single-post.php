<?php
/**
* Template Name: Category Single
* Template Post Type: post
*/
get_header(); ?>

<button class="back-button" onclick="goBack()">&#8592; Return to home</button>

<div class="section single-section">
  <div class="columns features">
    <div class="column is-12">
      <div class="card-content">
        <div class="content">
          <h4><?php the_field('project_name'); ?></h4>
          <p><?php the_field('project_content'); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
