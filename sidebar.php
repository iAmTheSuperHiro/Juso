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
            <li><a href="http://twitter.com/mlhshino">Twitter</a></li>
            <li><a href="http://www.facebook.com/mlhshino">Facebook</a></li>
            <li><a href="http://www.linkedin.com/in/mlhshino">LinkedIn</a></li>
            <li><a href="http://foursquare.com/user/mlhshino">Foursquare</a></li>
            <li><a href="http://mlhshino.tumblr.com">Tumblr</a></li>
            <li><a href="http://www.ustream.tv/channel/mlhshino">Ustream</a></li>
            <li><a href="http://friendfeed.com/mlhshino">FriendFeed</a></li>
            <li><a href="http://www.google.com/profiles/mlhshino">Google Buzz</a></li>
            <li><a href="http://youtube.com/mlhshino">YouTube</a></li>
            <li><a href="http://vimeo.com/mlhshino/">Vimeo</a></li>
            <li><a href="http://flickr.com/people/psycho-spider/">Flickr</a></li>
            <li><a href="http://delicious.com/mlhshino">Delicious</a></li>
            <li><a href="http://digg.com/users/mlhshino">Digg</a></li>
            <li><a href="http://www.quora.com/Hiro-Shinohara">Quora</a></li>
            <li><a href="http://www.last.fm/user/mlhshino">Last.fm</a></li>
            <li><a href="http://mixi.jp/show_profile.pl?id=1305752">mixi</a></li>
            <li><a href="http://plancast.com/mlhshino">Plancast</a></li>
            <li><a href="http://www.dopplr.com/traveller/mlhshino">Dopplr</a></li>
          </ul>
        </div>
      </aside>
    </div>