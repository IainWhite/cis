<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('ySlow'); ?>
        <p><strong>ySlow</strong> analyzes web pages and suggests ways to improve their performance based on a set of <a  rel="external" href="http://developer.yahoo.com/performance/rules.html">rules for high performance web pages</a>. Feature highlights:</p>
        <ul>
            <li>Grades web page based on one of three predefined ruleset or a user defined ruleset;</li>
            <li>It offers suggestions for improving the page's performance;</li>
            <li>Summarizes the page's components;</li>
            <li>Displays statistics about the page;</li>
            <li>Provides tools for performance analysis, including <strong>Smush.it</strong> and <?php echo $this->stencil->addLink('JSLint', 'JS'); ?>.</li>
        </ul>

        <h2>Web Performance Best Practices and Rules</h2>
        <p>Yahoo's Exceptional Performance team has identified 34 rules that affect web page performance. YSlow's web page analysis is based on the 23 of these 34 rules that are testable.</p>
        <ol>
            <li><a href="http://developer.yahoo.com/performance/rules.html#num_http">Minimize HTTP Requests</a></li>
            <li><a href="http://developer.yahoo.com/performance/rules.html#cdn">Use a Content Delivery Network</a></li>
            <li><a href="http://developer.yahoo.com/performance/rules.html#emptysrc">Avoid empty src or href</a></li>
            <li><a href="http://developer.yahoo.com/performance/rules.html#expires">Add an Expires or a Cache-Control Header</a></li>
            <li><a href="http://developer.yahoo.com/performance/rules.html#gzip">Gzip Components</a></li>
            <li><a href="http://developer.yahoo.com/performance/rules.html#css_top">Put StyleSheets at the Top</a></li>
            <li><a href="http://developer.yahoo.com/performance/rules.html#js_bottom">Put Scripts at the Bottom</a></li>
            <li><a href="http://developer.yahoo.com/performance/rules.html#css_expressions">Avoid CSS Expressions</a></li>
            <li><a href="http://developer.yahoo.com/performance/rules.html#external">Make JavaScript and CSS External</a></li>
            <li><a href="http://developer.yahoo.com/performance/rules.html#dns_lookups">Reduce DNS Lookups</a></li>
            <li><a href="http://developer.yahoo.com/performance/rules.html#minify">Minify JavaScript and CSS</a></li>
            <li><a href="http://developer.yahoo.com/performance/rules.html#redirects">Avoid Redirects</a></li>
            <li><a href="http://developer.yahoo.com/performance/rules.html#js_dupes">Remove Duplicate Scripts</a></li>
            <li><a href="http://developer.yahoo.com/performance/rules.html#etags">Configure ETags</a></li>
            <li><a href="http://developer.yahoo.com/performance/rules.html#cacheajax">Make AJAX Cacheable</a></li>
            <li><a href="http://developer.yahoo.com/performance/rules.html#ajax_get">Use GET for AJAX Requests</a></li>
            <li><a href="http://developer.yahoo.com/performance/rules.html#min_dom">Reduce the Number of DOM Elements</a></li>
            <li><a href="http://developer.yahoo.com/performance/rules.html#no404">No 404s</a></li>
            <li><a href="http://developer.yahoo.com/performance/rules.html#cookie_size">Reduce Cookie Size</a></li>
            <li><a href="http://developer.yahoo.com/performance/rules.html#cookie_free">Use Cookie-Free Domains for Components</a></li>
            <li><a href="http://developer.yahoo.com/performance/rules.html#no_filters">Avoid Filters</a></li>
            <li><a href="http://developer.yahoo.com/performance/rules.html#no_scale">Do Not Scale Images in HTML</a></li>
            <li><a href="http://developer.yahoo.com/performance/rules.html#favicon">Make favicon.ico Small and Cacheable</a></li>
        </ol>
        <p><strong>Official ySlow page:</strong> <?php echo $this->stencil->addExternalLink('developer.yahoo.com/yslow', 'http://developer.yahoo.com/yslow/'); ?></p>
    </div>
</div>