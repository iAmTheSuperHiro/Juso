<?php get_header(); ?>

    <div class="body container floatwrapper">
      <section id="content" class="floatleft">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
              <header>
                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <p><time datetime="<?php the_time('c'); ?>"><?php the_time('F jS, Y H:i a') ?></time></p>
              </header>
              <div>
                <?php adsensem_ad('ad-links'); ?>
                <?php the_content('Read the rest of this entry &raquo;'); ?>
                <?php adsensem_ad('ad-entry-bottom'); ?>
              </div>
              <footer>
                <p>
                  <?php edit_post_link('Edit', '', ''); ?>
                </p>
              </footer>
            </article>
          <?php endwhile; ?>
        <?php else : ?>
          <article>
            <header>
              <h2>Not Found</h2>
            </header>
            <div>
              <p>Sorry, no posts matched your criteria.</p>
            </div>
          </article>
        <?php endif; ?>
      </section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
