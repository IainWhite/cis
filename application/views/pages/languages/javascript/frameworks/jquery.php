<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('jQuery'); ?>
        <p><strong>jQuery</strong> is a cross-platform <?php echo $this->stencil->addLink('JavaScript', 'L'); ?> library designed to simplify the client-side scripting of <?php echo $this->stencil->addLink('HTML', 'WD'); ?>.</p>
        <p>It was released in January 2006 at BarCamp NYC by <strong>John Resig</strong>.</p>
        <p>It is currently developed by a team of developers led by Dave Methvin.</p>
        <p>Used by over 80% of the 10,000 most visited websites, jQuery is the most popular JavaScript library in use today.</p>
        <p>jQuery is free, open source software, licensed under the MIT License.</p>
        <p>jQuery's syntax is designed to make it easier to navigate a document, select <?php echo $this->stencil->addLink('DOM', 'WD'); ?> elements, create animations, handle events, and develop <?php echo $this->stencil->addLink('AJAX', 'WD'); ?> applications.</p>
        <p>jQuery also provides capabilities for developers to create plug-ins on top of the JavaScript library. This enables developers to create abstractions for low-level interaction and animation, advanced effects and high-level, theme-able widgets.</p>
        <p>The modular approach to the jQuery library allows the creation of powerful dynamic web pages and web applications.</p>
        <p>The set of jQuery core features DOM element selections, traversal and manipulation enabled by its selector engine (named "<strong>Sizzle</strong>" from v1.3), created a new "programming style", fusing algorithms and DOM data structures; and influenced the architecture of other JavaScript frameworks like <?php echo $this->stencil->addLink('YUI', 'JS'); ?> v3 and <?php echo $this->stencil->addLink('Dojo', 'JS'); ?>.</p>
        <p><?php echo $this->stencil->addLink('Microsoft', 'C'); ?> and <?php echo $this->stencil->addLink('Nokia', 'C'); ?> bundle jQuery on their platforms. Microsoft includes it with <?php echo $this->stencil->addLink('Visual Studio', 'IDE'); ?> for use within Microsoft's ASP.NET AJAX framework and ASP.NET MVC Framework while Nokia has integrated it into the Web Run-Time widget development platform.</p>
        <p>jQuery has also been used in <?php echo $this->stencil->addLink('MediaWiki', 'WD'); ?> since version 1.16.</p>
    </div>
</div>


<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>jQuery Release History</h2>
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th>Version number</th>
                    <th>Release date</th>
                    <th>Additional notes</th>
                </tr>
                <tr><td>1.0</td><td>26 August 2006</td><td>First stable release</td></tr>
                <tr><td>1.1</td><td>14 January 2007</td><td></td></tr>
                <tr><td>1.2</td><td>10 September 2007</td><td></td></tr>
                <tr><td>1.3</td><td>14 January 2009</td><td>Sizzle Selector Engine introduced into core</td></tr>
                <tr><td>1.4</td><td>14 January 2010</td><td></td></tr>
                <tr><td>1.5</td><td>31 January 2011</td><td>Deferred callback management, AJAX module rewrite</td></tr>
                <tr><td>1.6</td><td>3 May 2011</td><td>Significant performance improvements to the <code>attr()</code> and <code>val()</code> functions</td></tr>
                <tr><td>1.7</td><td>3 November 2011</td><td>New Event APIs: <code>.on()</code> and <code>.off()</code>, while the old APIs are still supported.</td></tr>
                <tr><td>1.8</td><td>9 August 2012</td><td>Sizzle Selector Engine rewritten, improved animations and <code>$(html, props)</code> flexibility.</td></tr>
                <tr><td>1.9</td><td>15 January 2013</td><td>Removal of deprecated interfaces and code clean-up</td></tr>
                <tr><td>1.10</td><td>24 May 2013</td><td>Incorporated bug fixes and differences reported from both the 1.9 and 2.0 beta cycles</td></tr>
                <tr><td>1.11</td><td>24 January 2014)</td><td></td></tr>
                <tr><td>2.0</td><td>18 April 2013</td><td>Dropped IE 6 – 8 support for performance improvements and reduction in file size</td></tr>
                <tr><td>2.1</td><td>24 January 2014</td><td></td></tr>
            </table>
        </div>
    </div>
<?php endif; ?>
