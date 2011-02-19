<?php get_header(); ?>

    <div class="body container floatwrapper">
      <section id="content" class="floatleft">
        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
          <header>
            <h2>Error 404 - Not Found</h2>
          </header>
       </article>
     </section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>