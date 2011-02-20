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
                <?php the_content('Read the rest of this entry &raquo;'); ?>
              </div>
              <footer>
                <p class="small">
                  <?php edit_post_link('Edit', '', ' | '); ?><?php the_tags('Tags: ', ', ', ''); ?><br />
                  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
                </p>
              </footer>
            </article>
          <?php endwhile; ?>
          <nav class="floatwrapper">
            <p class="floatleft"><?php next_posts_link('&laquo; Older Entries') ?></p>
            <p class="floatright"><?php previous_posts_link('Newer Entries &raquo;') ?></p>
          </nav>
        <?php else : ?>
          <article>
            <header>
              <h2>Not Found</h2>
            </header>
            <div>
              <p>Sorry, but you are looking for something that isn't here.</p>
            </div>
          </article>
        <?php endif; ?>
      </section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
