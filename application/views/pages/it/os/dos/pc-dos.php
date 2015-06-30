<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('PC-DOS'); ?>
        <p><strong>IBM PC DOS</strong> (The IBM Personal Computer Disk Operating System) is a <?php echo $this->stencil->addLink('DOS', 'OS'); ?> system for the <?php echo $this->stencil->addLink('IBM Personal Computer', 'ITH'); ?> and compatibles, manufactured and sold by <?php echo $this->stencil->addLink('IBM', 'C'); ?> from the 1980s to the 2000s. From its inception until 1993, PC DOS was a rebranded version of Microsoft <?php echo $this->stencil->addLink('MS-DOS', 'DOS'); ?>.</p>
        <p>The IBM task force assembled to develop the PC decided that critical components of the machine, including the operating system, would come from outside vendors. This radical break from company tradition of in-house development was the key decision that made the IBM PC an industry standard. But it was done out of necessity, to save time. <?php echo $this->stencil->addLink('Microsoft', 'C'); ?> was selected for the operating system.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h3>PC-DOS Versions</h3>
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th>Version</th>
                    <th>Release date</th>
                    <th>Key features</th>
                </tr>
                <tr><td>PC-DOS 1.0</td><td>Oct 1981</td><td>Original release, single sided drive</td></tr>
                <tr><td>PC-DOS 1.1</td><td>Jun 1982</td><td>Bugfix, double sided drive support</td></tr>
                <tr><td>PC-DOS 2.0</td><td>Mar 1983</td><td>PC/XT, added (hard drive &amp; UNIX features)</td></tr>
                <tr><td>PC-DOS 2.1</td><td>Oct 1983</td><td>PCjr &amp; portable mods, fixes for 2.0</td></tr>
                <tr><td>PC-DOS 3.0</td><td>Aug 1984</td><td>Support for 1.2 Mb drive (AT)</td></tr>
                <tr><td>PC-DOS 3.1</td><td>Nov 1984</td><td>Added network support, fixes for 3.0</td></tr>
                <tr><td>PC-DOS 3.2</td><td>Jul 1986</td><td>720k 3.5" drive support for Convertible</td></tr>
                <tr><td>PC-DOS 3.3</td><td>Apr 1987</td><td>PS/2, 1.44 disk support, mult. partitions</td></tr>
                <tr><td>PC-DOS 4.0</td><td>Aug 1988</td><td>Larger DOS partitions, EMS support</td></tr>
                <tr><td>PC-DOS 4.01</td><td>Nov 1988</td><td>Fixes for major bugs in 4.0</td></tr>
                <tr><td>PC-DOS 6.1</td><td>June 1993</td><td>New boot menu support and the new commands CHOICE, DELTREE and MOVE</td></tr>
                <tr><td>PC-DOS 6.3</td><td>Dec 1993</td><td>SuperStor disk compression technology </td></tr>
                <tr><td>PC-DOS 7.0</td><td>Apr 1994</td><td>Some OS/2 features</td></tr>
                <tr><td>PC-DOS 2000</td><td>1998</td><td>A year 2k fixed version of 7.0</td></tr>
                <tr><td>PC-DOS 7.10</td><td>2003</td><td>Supports FAT32, only for embedded systems, never sold separately</td></tr>
            </table>
        </div>
    </div>
<?php endif; ?>