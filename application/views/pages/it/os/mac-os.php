<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Mac OS'); ?>
        <p><strong>Mac OS</strong> is a series of graphical user interface-based operating systems developed by <?php echo $this->stencil->addLink('Apple inc', 'C'); ?> for their <?php echo $this->stencil->addLink('Macintosh', 'ITH'); ?> line of computer systems.</p>
        <p>Original version was the integral and unnamed system software first introduced in 1984 with the original Macintosh, and referred to simply as the "<em>System</em>" software.</p>
        <p>The Macintosh system software gained an official name in 1996, when Apple branded version 7.6 as Mac OS as part of their Macintosh clone program.</p>
        <p>The Macintosh, specifically its system software, is credited with popularizing the graphical user interface concept.</p>
        <p>Macintosh operating systems have been released in two major series.</p>
        <p>Up to major revision 9, from 1984 to 2000, it is historically known as <strong>Classic Mac OS</strong>.</p>
        <p>Major revision 10, from 2001 to present, is branded as <?php echo $this->stencil->addLink('OS X', 'OS'); ?>.
        <p>Major revisions to the Macintosh OS are now issued as point revisions, that is to say, 10.2 is substantially different from 10.5.</p>
        <p>Both series share a general interface design and some shared application frameworks for compatibility, but also have deeply different architectures.</p>
        <p>Early versions of Mac OS were compatible only with Motorola <?php echo $this->stencil->addLink('Motorola 68000', 'CPU'); ?> family Macintoshes.</p>
        <p>As Apple introduced computers with <?php echo $this->stencil->addLink('PowerPC', 'CPU'); ?> hardware, the OS was ported to support this architecture.</p>
        <p>Mac OS 8.1 was the last version that could run on a "68K" processor (the 68040).</p>
        <p>OS X, which has superseded the "<em>Classic</em>" Mac OS, is compatible with only PowerPC processors from version 10.0 ("<?php echo $this->stencil->addLink('Cheetah', 'OSX'); ?>") to version 10.3 ("<?php echo $this->stencil->addLink('Panther', 'OSX'); ?>").</p>
        <p>Both PowerPC and <?php echo $this->stencil->addLink('Intel', 'C'); ?> processors are supported in version 10.4 ("<?php echo $this->stencil->addLink('Tiger', 'OSX'); ?>", Intel only supported after an update) and version 10.5 ("<?php echo $this->stencil->addLink('Leopard', 'OSX'); ?>").</p>
        <p>10.6 and later versions support only Intel processors.</p>
        <p>The early Macintosh operating system initially consisted of two pieces of software, called "<em>System</em>" and "<em>Finder</em>", each with its own version number.</p>
        <p><?php echo $this->stencil->addLink('System 7.5.1', 'MOS'); ?> was the first to include the Mac OS logo and Mac OS 7.6 was the first to be named "<em>Mac OS</em>".</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <ul>
                <li><?php echo $this->stencil->addLink('System 1', 'MOS'); ?></li>
                <li><?php echo $this->stencil->addLink('System 5', 'MOS'); ?></li>
                <li><?php echo $this->stencil->addLink('System 6', 'MOS'); ?></li>
                <li><?php echo $this->stencil->addLink('System 7', 'MOS'); ?></li>
                <li><?php echo $this->stencil->addLink('Mac OS 8', 'MOS'); ?></li>
                <li><?php echo $this->stencil->addLink('Mac OS 9', 'MOS'); ?></li>
            </ul>
        </div>
    </div>
<?php endif; ?>