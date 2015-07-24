<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('MS Windows NT'); ?>
        <p><strong>Windows NT</strong> is a family of operating systems produced by <?php echo $this->stencil->addLink('Microsoft', 'C'); ?>, the first version of which was released in July 1993.</p>
        <p>It was a powerful high-level-language-based, processor-independent, multiprocessing, multi-user operating system. "<strong><em>NT</em></strong>" was expanded to "<em>New Technology</em>" for marketing purposes but no longer carries any specific meaning.</p>
        <p>It was intended to complement consumer versions of <?php echo $this->stencil->addLink('Windows', 'OS'); ?> that were based on <?php echo $this->stencil->addLink('MS-DOS', 'DOS'); ?>. NT was the first fully <?php echo $this->stencil->addLink('32-bit', 'IT'); ?> version of Windows, whereas its consumer-oriented counterparts, <?php echo $this->stencil->addLink('Windows 3', 'WIN'); ?> and <?php echo $this->stencil->addLink('Windows 98', 'WIN'); ?>, were 16-bit/32-bit hybrids.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Naming</h2>
            <p>It is popularly believed that <strong>Dave Cutler</strong> intended the initialism "<em>WNT</em>" as a pun on <?php echo $this->stencil->addLink('VMS', 'OS'); ?>, incrementing each letter by one. However, the project was originally intended as a follow-on to <?php echo $this->stencil->addLink('OS/2', 'OS'); ?> and was referred to as "<strong>NT OS/2</strong>" before receiving the Windows brand. One of the original NT developers, <strong>Mark Lucovsky</strong>, states that the name was taken from the original target processor the Intel i860, code-named N10 ("<em><strong>N</strong>-<strong>T</strong>en</em>").</p>
        </div>
    </div>
<?php endif; ?>
