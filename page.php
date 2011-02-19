<?php get_header(); ?>

  <div id="content" role="main">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">
    <h2><?php the_title(); ?></h2>
      <div class="entry">
        <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

        <div class="postmetadata">
          <?php the_tags('Tags: ', ', ', ''); ?></span><?php edit_post_link('Edit', ' | ', ''); ?>
        </div>

       </div>
    </div>
    <?php endwhile; endif; ?>

  </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
