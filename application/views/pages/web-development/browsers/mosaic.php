<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Mosaic Web Browser'); ?>
        <p>NCSA <strong>Mosaic</strong>, is the web browser credited with popularizing the <?php echo $this->stencil->addLink('World Wide Web', 'WD'); ?>.</p>
        <p>It was also a client for earlier protocols such as <?php echo $this->stencil->addLink('FTP', 'IPA'); ?>, <?php echo $this->stencil->addLink('NNTP', 'IPA'); ?>, and <?php echo $this->stencil->addLink('gopher', 'IPA'); ?>.</p>
        <p>The browser was named for its support of multiple internet protocols.</p>
        <p>Its intuitive interface, reliability, Windows port and simple installation all contributed to its popularity within the web, as well as on <?php echo $this->stencil->addLink('Microsoft', 'C'); ?> operating systems.</p>
        <p>Mosaic was also the first browser to display images in-line with text instead of displaying images in a separate window.</p>
        <p>While often described as the first graphical web browser, Mosaic was preceded by <?php echo $this->stencil->addLink('WorldWideWeb', 'WB'); ?>, the lesser-known <?php echo $this->stencil->addLink('Erwise', 'WB'); ?> and <?php echo $this->stencil->addLink('ViolaWWW', 'WB'); ?>.</p>
        <p>Mosaic was developed at the <strong>National Center for Supercomputing Applications (<?php echo $this->stencil->addLink('NCSA', 'C'); ?>)</strong> at the University of Illinois Urbana-Champaign beginning in late 1992.</p>
        <p>NCSA released the browser in 1993 and officially discontinued development and support on 7 January 1997.</p>
        <p><?php echo $this->stencil->addLink('Netscape Navigator', 'WB'); ?> was later developed by Netscape, which employed many of the original Mosaic authors; however, it intentionally shared no code with Mosaic. Netscape Navigator's code descendant is <?php echo $this->stencil->addLink('Mozilla Firefox', 'WB'); ?>.</p>
        <p>Twenty years after Mosaic's introduction, the most popular contemporary browsers, <?php echo $this->stencil->addLink('Google Chrome', 'WB'); ?>, <?php echo $this->stencil->addLink('Internet Explorer', 'WB'); ?>, <?php echo $this->stencil->addLink('Safari', 'WB'); ?>, and <?php echo $this->stencil->addLink('Mozilla Firefox', 'WB'); ?> retain many of the characteristics of the original Mosaic graphical user interface (<?php echo $this->stencil->addLink('GUI', 'IT'); ?>), such as the URL bar and forward/back/reload buttons, and interactive experience.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <p><?php echo $this->stencil->addLink('Spyglass', 'C'); ?> licensed the technology and trademarks from NCSA for producing their own web browser but never used any of the NCSA Mosaic source code.</p>
            <p>Microsoft licensed Spyglass Mosaic in 1995 for US$2 million, modified it, and renamed it Internet Explorer. After a later auditing dispute, Microsoft paid Spyglass $8 million.</p>
            <p>Versions of Internet Explorer before version 7 stated "<em>Based on NCSA Mosaic</em>" in the About box. Internet Explorer 7 was audited by Microsoft to ensure that it contained no Mosaic code, and thus no longer credits Spyglass or Mosaic.</p>
        </div>
    </div>
<?php endif; ?>