      <aside id="extras" class="floatright">
        <div class="extra">
          <header>
            <h3>Subscribe</h3>
          </header>
          <div>
            <form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=hiroyukishinohara/RpOL', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
              <input type="text" name="email" size="20" placeholder="Email Address" />
              <input type="hidden" value="hiroyukishinohara/RpOL" name="uri" />
              <input type="hidden" name="loc" value="en_US" />
              <input type="submit" value="Sign up" />
            </form>
            <p>
              <a href="http://feeds.feedburner.com/hiroyukishinohara/RpOL"><img src="http://feeds.feedburner.com/~fc/hiroyukishinohara/RpOL?bg=333333&amp;fg=FFFFFF&amp;anim=0" height="26" width="88" style="border:0" alt="RSS" /></a>
            </p>
          </div>
        </div>
        <div class="extra">
          <header>
            <h3>Search</h3>
          </header>
          <form method="get" action="http://www.google.co.jp/custom" target="_top">
            <input type="hidden" name="domains" value="www.hiroyukishinohara.com" />
            <input type="text" name="q" size="20" maxlength="255" value="" />
            <input type="submit" name="sa" value="Search" /><br />
            <input type="radio" name="sitesearch" value="" />Web
            <input type="radio" name="sitesearch" value="www.hiroyukishinohara.com" checked="checked" />this blog
            <input type="hidden" name="client" value="pub-4433430956875979" />
            <input type="hidden" name="forid" value="1" />
            <input type="hidden" name="ie" value="UTF-8" />
            <input type="hidden" name="oe" value="UTF-8" />
            <input type="hidden" name="cof" value="GALT:#008000;GL:1;DIV:#336699;VLC:663399;AH:center;BGC:FFFFFF;LBGC:336699;ALC:0000FF;LC:0000FF;T:000000;GFNT:0000FF;GIMP:0000FF;FORID:1;" />
            <input type="hidden" name="hl" value="ja" />
          </form>
        </div>
        <div class="extra">
          <header>
            <h3>Top Articles</h3>
          </header>
          <?php popular_posts(); ?>
        </div>
        <div class="extra">
          <header>
            <h3>Recent Articles</h3>
          </header>
          <ul>
            <?php get_archives('postbypost', '10', 'html', '', ''); ?>
          </ul>
        </div>
        <div class="extra">
          <header>
            <h3>Friend Me</h3>
          </header>
          <ul>
            <?php wp_list_bookmarks('title_before=&title_after&title_li=&categorize=0&orderby=rating'); ?>
          </ul>
        </div>
        <div class="extra">
          <header>
            <h3>Monthly Articles</h3>
          </header>
          <ul>
            <?php wp_get_archives('type=monthly'); ?>
          </ul>
        </div>
      </aside>
    </div>