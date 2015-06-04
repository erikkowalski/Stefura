<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>

<section id="projects">
  <div class="featured">

  <?php if ( has_post_thumbnail() ) {
	the_post_thumbnail(); } ?>
	 <?php get_template_part('templates/content', get_post_format()); ?>
</div>
</section>
<?php endwhile; ?>
<div class="clearfix" ></div>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav ">
    <ul class="pager ">
      <li class="previous "><?php next_posts_link(__('More projects &rarr;', 'roots')); ?></li>
      <li class="next "><?php previous_posts_link(__('&larr; Newer projects ', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>


<!--  left arrow,  right arrow -->
