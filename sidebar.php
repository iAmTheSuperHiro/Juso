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
              <li><a href="http://www.facebook.com/iamhiroshinohara">Facebook</a></li>
              <li><a href="http://plus.google.com/u/0/104649052317741879480/posts">Google+</a></li>
              <li><a href="#">RSS</a></li>
            </ul>
          </nav>
          <div>
            <form>
              <input type="text" size="20" maxlength="255" />
              <input type="submit" value="Subscribe" /><br />
            </form>
          </div>
        </div>
        <div class="extra">
          <header>
            <h3>Top Articles</h3>
          </header>
          <?php popular_posts(); ?>
        </div>
      </aside>
    </div>