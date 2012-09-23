      <aside id="extras" class="floatright">
        <div class="extra">
          <header>
            <h3>Hello</h3>
          </header>
          <div class="floatwrapper">
            <div class="floatleft">
              <img src="<?php bloginfo('template_directory');?>/images/logo.jpg" alt="Hiro SHINOHARA" />
            </div>
            <p>
              <?php the_author_meta('description', 1); ?>
            </p>
          </div>
        </div>
        <div class="extra">
          <header>
            <h3>Follow</h3>
          </header>
          <nav>
            <ul>
              <li><a href="http://twitter.com/mlhshino">Twitter</a></li>
              <li><a href="http://www.facebook.com/mlhshino">Facebook</a></li>
              <li><a href="http://plus.google.com/u/0/104649052317741879480/posts">Google+</a></li>
              <li><a href="<?php bloginfo('rss2_url'); ?>">RSS</a></li>
            </ul>
          </nav>
          <div>
            <form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo get_feed_id(); ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
              <input type="text" name="email" size="20" maxlength="255" title="Enter your email" />
              <input type="hidden" value="<?php echo get_feed_id(); ?>" name="uri" />
              <input type="hidden" name="loc" value="<?php echo get_current_language_code(); ?>"/>
              <input type="submit" value="Subscribe" />
            </form>
          </div>
        </div>
        <div class="extra">
          <header>
            <h3>Top Articles</h3>
          </header>
          <?php popular_posts(); ?>
        </div>
        <?php if (get_current_language_code === "ja_JP") : ?>
        <div class="extra">
          <header>
            <h3>Contributed Articles</h3>
          </header>
          <ul>
          <?php
          $defaults = array(
            'title_li' => '',
            'categorize' => 0,
          );
          wp_list_bookmarks($defaults);
          ?>
          </ul>
        </div>
        <?php endif; ?>
      </aside>
    </div>