<?php get_header(); ?>

    <div class="body container floatwrapper">
      <section id="content" class="floatleft">
        <?php if (have_posts()) : ?>
          <div id="pagetitle">
            <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
            <?php /* If this is a category archive */ if (is_category()) { ?>
              <h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
            <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
              <h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
            <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
              <h2>Archive for <?php the_time('F jS, Y'); ?></h2>
            <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
              <h2>Archive for <?php the_time('F, Y'); ?></h2>
            <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
              <h2>Archive for <?php the_time('Y'); ?></h2>
            <?php /* If this is an author archive */ } elseif (is_author()) { ?>
              <h2>Author Archive</h2>
            <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
              <h2>Blog Archives</h2>
            <?php } ?>
          </div>
          <nav class="floatwrapper">
            <p class="floatleft"><?php previous_post_link('&laquo; %link') ?></p>
            <p class="floatright"><?php next_post_link('%link &raquo;') ?></p>
          </nav>
          <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
              <header>
                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <p><time datetime="<?php the_time('c'); ?>"><?php the_time('F jS, Y H:i a') ?></time></p>
              </header>
              <div>
                <?php the_content() ?>
              </div>
              <footer>
                <p>
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
              <?php
                if ( is_category() ) { // If this is a category archive
                  printf("<h2>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
                } else if ( is_date() ) { // If this is a date archive
                  echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
                } else if ( is_author() ) { // If this is a category archive
                  $userdata = get_userdatabylogin(get_query_var('author_name'));
                  printf("<h2>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
                } else {
                  echo("<h2>No posts found.</h2>");
                }
              ?>
            </header>
          </article>
        <?php endif; ?>
      </section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
