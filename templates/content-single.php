<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 style="font-size:1em;font-weight:500;color:#8da245;margin-bottom:0.5em;margin-top:2em;padding-left:0;background:white;" class="entry-title"><?php the_title(); ?></h1>

    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>

    </footer>

  </article>
<?php endwhile; ?>
