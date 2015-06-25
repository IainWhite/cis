<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Web Browser'); ?>
        <p>A <strong>web browser</strong> (commonly referred to just as a <strong>browser</strong>) is a software application for retrieving, presenting and traversing information resources on the <?php echo $this->stencil->addLink('World Wide Web', 'WD'); ?>.</p>
        <p>An information resource is identified by a Uniform Resource Identifier (<?php echo $this->stencil->addLink('URI', 'WD'); ?> / <?php echo $this->stencil->addLink('URL', 'WD'); ?>) and may be a web page, image, video or other piece of content.</p>
        <p>Hyperlinks present in resources enable users easily to navigate their browsers to related resources.</p>
        <p>Although browsers are primarily intended to use the World Wide Web, they can also be used to access information provided by <?php echo $this->stencil->addLink('Web servers', 'WD'); ?> in private networks or files in file systems.</p>
        <p>The major web browsers are <?php echo $this->stencil->addLink('Firefox', 'WB'); ?>, <?php echo $this->stencil->addLink('Internet Explorers', 'WB'); ?>, <?php echo $this->stencil->addLink('Google Chrome', 'WB'); ?>, <?php echo $this->stencil->addLink('Opera', 'WB'); ?>, and <?php echo $this->stencil->addLink('Safari', 'WB'); ?>.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <p>The first web browser was invented in 1990 by Sir <?php echo $this->stencil->addLink('Tim Berners-Lee', 'P'); ?>. It was called <?php echo $this->stencil->addLink('WorldWideWeb', 'WB'); ?> and was later renamed Nexus.</p>
            <p>The first commonly available web browser with a graphical user interface was <?php echo $this->stencil->addLink('Erwise', 'WB'); ?>. The development of Erwise was initiated by <?php echo $this->stencil->addLink('Robert Cailliau', 'P'); ?>.</p>
            <p>In 1993, browser software was further innovated by <?php echo $this->stencil->addLink('Marc Andreessen', 'P'); ?> with the release of <?php echo $this->stencil->addLink('Mosaic', 'WB'); ?>, "<em>the world's first popular browser</em>", which made the World Wide Web system easy to use and more accessible to the average person.</p>
            <p>Andreesen's browser sparked the Internet boom of the 1990s. The introduction of Mosaic in 1993 - one of the first graphical web browsers - led to an explosion in web use.</p>
            <p>Andreessen, the leader of the Mosaic team at NCSA, soon started his own company, named <?php echo $this->stencil->addLink('Netscape', 'C'); ?>, and released the Mosaic-influenced <?php echo $this->stencil->addLink('Netscape Navigator', 'WB'); ?> in 1994, which quickly became the world's most popular browser, accounting for 90% of all web use at its peak.</p>
            <p><?php echo $this->stencil->addLink('Microsoft', 'C'); ?> responded with its <?php echo $this->stencil->addLink('Internet Explorer', 'WB'); ?> in 1995, also heavily influenced by Mosaic, initiating the industry's <?php echo $this->stencil->addLink('first browser war', 'WD'); ?>.</p>
            <p>Bundled with <?php echo $this->stencil->addLink('Windows', 'OS'); ?>, Internet Explorer gained dominance in the web browser market. Internet Explorer usage share peaked at over 95% by 2002.</p>
            <p><?php echo $this->stencil->addLink('Opera', 'WB'); ?> debuted in 1996, it has never achieved widespread use, having less than 2% browser usage share as of February 2012.</p>
            <p>Opera is also available on several other embedded systems, including Nintendo's Wii video game console.</p>
            <p>In 1998, Netscape launched what was to become the <?php echo $this->stencil->addLink('Mozilla Foundation', 'C'); ?> in an attempt to produce a competitive browser using the open source software model.</p>
            <p>That browser would eventually evolve into <?php echo $this->stencil->addLink('Firefox', 'WB'); ?>, which developed a respectable following while still in the beta stage of development.</p>
            <p>Apple's <?php echo $this->stencil->addLink('Safari', 'WB'); ?> had its first beta release in January 2003.</p>
            <p>The most recent major entrant to the browser market is <?php echo $this->stencil->addLink('Google Chrome', 'WB'); ?>, first released in September 2008.</p>
        </div>
    </div>
<?php endif; ?>