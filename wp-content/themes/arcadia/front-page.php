<?php
  get_header();
?>

<div class="section">
  <div class="columns features">
<?php
   // the query
   $the_query = new WP_Query( array(
     'category_name' => 'design, dev, ux',
      'posts_per_page' => 3,
   ));
?>

<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <div class="column link is-4">
        <a href="<?php the_permalink() ?>">
          <div class="card-image">
            <img src="<?php the_field('project_image'); ?>" />
          </div>
          <div class="card-content">
            <div class="content">
              <h4><?php the_field('project_name'); ?></h4>
            </div>
          </div>
        </a>
      </div>


  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php __('No News'); ?></p>
<?php endif; ?>

  </div>
</div>

<div class="section">
  <div class="columns features">
    <div class="column is-4">
      <div class="invisible-card">
        <div class="card-content">
          <div class="content">
            <h2>Skills/Interests</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="column is-4">
      <div class="card-content">
        <div class="content">
          <div class="capability">
            <div class="capability-name">
              <?php the_field('skill_name_a'); ?>
            </div>
            <div class="capability-description">
              <?php the_field('skill_description_a'); ?>
            </div>
          </div>
          <div class="capability">
            <div class="capability-name">
              <?php the_field('skill_name_b'); ?>
            </div>
            <div class="capability-description">
              <?php the_field('skill_description_b'); ?>
            </div>
          </div>
          <div class="capability">
            <div class="capability-name">
              <?php the_field('skill_name_c'); ?>
            </div>
            <div class="capability-description">
              <?php the_field('skill_description_c'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="column is-4">
      <div class="card-content">
        <div class="content">
          <div class="capability">
            <div class="capability-name">
              <?php the_field('skill_name_d'); ?>
            </div>
            <div class="capability-description">
              <?php the_field('skill_description_d'); ?>
            </div>
          </div>
          <div class="capability">
            <div class="capability-name">
              <?php the_field('skill_name_e'); ?>
            </div>
            <div class="capability-description">
              <?php the_field('skill_description_e'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  get_footer();
?>
