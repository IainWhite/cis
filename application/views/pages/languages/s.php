<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('S Programming Language'); ?>
        <p><strong>S</strong> is a statistical programming language developed primarily by <?php echo $this->stencil->addLink('John Chambers', 'P'); ?> and (in earlier versions) Rick Becker and Allan Wilks of <?php echo $this->stencil->addLink('Bell Labs', 'C'); ?>.</p>
        <p>The aim of the language, as expressed by John Chambers, is "<em>to turn ideas into software, quickly and faithfully</em>".</p>
        <p>The two modern implementations of S are <?php echo $this->stencil->addLink('R', 'L'); ?> and S-PLUS.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Example of S Code</h2>
            <?php echo $this->stencil->addCodeSnippet('s', 's.txt'); ?>
        </div>
    </div>
<?php endif; ?>