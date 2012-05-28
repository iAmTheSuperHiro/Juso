      <aside id="extras" class="floatright">
        <div class="extra">
          <header>
            <h3>Search</h3>
          </header>
          <form method="get" action="http://www.google.co.jp/custom" target="_top">
            <input type="hidden" name="domains" value="www.hiroyukishinohara.com" />
            <input type="text" name="q" size="20" maxlength="255" value="" />
            <input type="submit" name="sa" value="Search" /><br />
            <input type="hidden" name="client" value="pub-4433430956875979" />
            <input type="hidden" name="forid" value="1" />
            <input type="hidden" name="ie" value="UTF-8" />
            <input type="hidden" name="oe" value="UTF-8" />
            <input type="hidden" name="cof" value="GALT:#008000;GL:1;DIV:#336699;VLC:663399;AH:center;BGC:FFFFFF;LBGC:336699;ALC:0000FF;LC:0000FF;T:000000;GFNT:0000FF;GIMP:0000FF;FORID:1;" />
            <input type="hidden" name="hl" value="ja" />
            <input type="hidden" name="sitesearch" value="www.hiroyukishinohara.com" />
          </form>
        </div>
        <div class="extra">
          <header>
            <h3>Top Articles</h3>
          </header>
          <?php popular_posts(); ?>
        </div>
      </aside>
    </div>