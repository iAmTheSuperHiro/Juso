<?php get_header(); ?>

    <div class="body container floatwrapper">
      <section id="content" class="floatleft">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
              <header>
                <nav class="floatwrapper">
                  <p class="floatleft"><?php previous_post_link('&laquo; %link') ?></p>
                  <p class="floatright"><?php next_post_link('%link &raquo;') ?></p>
                </nav>
                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <p><time datetime="<?php the_time('c'); ?>"><?php the_time('F jS, Y H:i a') ?></time></p>
              </header>
              <div>
                <?php the_content('Read the rest of this entry &raquo;'); ?>
              </div>
              <footer>
                <p class="small">
                  <?php edit_post_link('Edit', '', ' | '); ?><?php the_tags('Tags: ', ', ', ''); ?>
                </p>
                <p class="small">
                  You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.<br />
                  <?php if ( comments_open() && pings_open() ) { ?>
                    You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.
                  <?php } elseif ( !comments_open() && pings_open() ) { ?>
                    Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.
                  <?php } elseif ( comments_open() && !pings_open() ) { ?>
                    You can skip to the end and leave a response. Pinging is currently not allowed.
                  <?php } elseif ( !comments_open() && !pings_open() ) { ?>
                    Both comments and pings are currently closed.
                  <?php } ?>
                </p>
                <?php comments_template(); ?>
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
