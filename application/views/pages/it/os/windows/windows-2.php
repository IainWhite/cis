<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('MS Windows 2.x'); ?>
        <p><strong>Windows 2.0</strong> is a 16-bit <?php echo $this->stencil->addLink('Microsoft', 'C'); ?> <?php echo $this->stencil->addLink('Windows', 'OS'); ?> <?php echo $this->stencil->addLink('GUI', 'IT'); ?> based operating environment that was released on 9 December 1987 and is the successor to <?php echo $this->stencil->addLink('Windows 1', 'WIN'); ?>.</p>
        <p>Windows 2.0 allowed application windows to overlap each other unlike its predecessor <?php echo $this->stencil->addLink('Windows 1.0', 'WIN'); ?>, which could display only tiled windows.</p>
        <p>Windows 2.0 also introduced more sophisticated keyboard-shortcuts and the terminology of "<em>Minimize</em>" and "<em>Maximize</em>", as opposed to "<em>Iconize</em>" and "<em>Zoom</em>" in Windows 1.0.</p>
        <p>New features in Windows 2.0 included <?php echo $this->stencil->addLink('VGA', 'VID'); ?> graphics (although 16 colours only). It was also the last version of Windows that did not require a hard disk.</p>
        <p>Windows 2.0 was also the first Windows version to integrate the control panel.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Windows 2.1x</h2>
            <p><strong>Windows/286 2.10</strong> and <strong>Windows/386 2.10</strong> were released on 27 May 1988, less than a year after the release of <?php echo $this->stencil->addLink('Windows 2', 'WIN'); ?>. These versions can take advantage of the specific features of the <?php echo $this->stencil->addLink('Intel 80286', 'CPU'); ?> and <?php echo $this->stencil->addLink('Intel 80386', 'CPU'); ?> processors. A hard disk was required for the first time to install Windows.</p>

            <h2>Windows 2.11</h2>
            <p>On 13 March 1989, <strong>Windows 2.11</strong> was released in <strong>Windows/286</strong> and <strong>Windows/386</strong> editions, with some minor changes in memory management, <strong>AppleTalk</strong> support and faster printing and updated printer drivers.</p>
            <p>Windows 2.11 was superseded by <?php echo $this->stencil->addLink('Windows 3', 'WIN'); ?> in May 1990, but was supported by Microsoft for twelve years, until 31 December 2001.</p>
        </div>
    </div>
<?php endif; ?>