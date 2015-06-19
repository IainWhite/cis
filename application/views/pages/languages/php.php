<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('PHP (PHP: Hypertext Preprocessor)'); ?>
        <p><strong>PHP</strong> (<strong>P</strong>HP: <strong>H</strong>ypertext <strong>P</strong>reprocessor) is a scripting language used to create dynamic Web pages.</p>
        <p>With syntax from <?php echo $this->stencil->addLink('C', 'L'); ?>, <?php echo $this->stencil->addLink('Java', 'L'); ?> and <?php echo $this->stencil->addLink('Perl', 'L'); ?>, PHP code is embedded within <?php echo $this->stencil->addLink('HTML', 'WD'); ?> pages for server-side execution.</p>
        <p>It is commonly used to extract data out of a database and present it on a Web page.</p>
        <p>Windows and Unix Web servers support the language, and it is widely used with the <?php echo $this->stencil->addLink('MySQL', 'DB'); ?> database.</p>
        <p>PHP was originally known as "<strong>P</strong>ersonal <strong>H</strong>ome <strong>P</strong>age."</p>
        <p>PHP is the successor to <strong>PHP/FI</strong> created by <?php echo $this->stencil->addLink('Rasmus Lerdorf', 'P'); ?> in 1994.</p>
        <p>The very first version of PHP was a simple set of <?php echo $this->stencil->addLink('Common Gateway Interface', 'L'); ?> (CGI) binaries written in C, to enable Rasmus to track visits to his online resume.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Example of PHP Code</h2>
            <?php echo $this->stencil->addCodeSnippet('php', 'php.txt'); ?>
        </div>
    </div>
<?php endif; ?>