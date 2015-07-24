<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('MS Windows 3.x'); ?>
        <p><strong>Windows 3.0</strong>, a graphical environment, is the third major release of <?php echo $this->stencil->addLink('Microsoft Windows', 'OS'); ?>, and was released on 22 May 1990.</p>
        <p>Windows 3.0 succeeded <?php echo $this->stencil->addLink('Windows 2', 'WIN'); ?> and included a significantly revamped user interface as well as technical improvements to make better use of the memory management capabilities of <?php echo $this->stencil->addLink('Intel', 'C'); ?>'s <?php echo $this->stencil->addLink('80286', 'CPU'); ?> and <?php echo $this->stencil->addLink('80386', 'CPU'); ?> processors. Text-mode programs written for <?php echo $this->stencil->addLink('MS-DOS', 'DOS'); ?> could be run within a window (a feature previously available in a more limited form with <strong>Windows/386 2.1</strong>), making the system usable as a crude multitasking base for legacy programs.</p>
        <p>The MS-DOS Executive file manager / program launcher was replaced with the icon-based <strong>Program Manager</strong> and the list-based <strong>File Manager</strong>, splitting files and programs.</p>
        <p>The Windows icons and graphics support a full 16 colors in <?php echo $this->stencil->addLink('EGA', 'VID'); ?> and <?php echo $this->stencil->addLink('VGA', 'VID'); ?> mode while Windows 2.x only had colored menus and window boxes with in-application graphics being monochrome. 256 colour VGA mode was supported for the first time.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Windows 3.1</h2>
            <p><strong>Windows 3.1</strong> (codenamed "<strong><em>Janus</em></strong>"), is a series of 16-bit operating systems, produced by <?php echo $this->stencil->addLink('Microsoft', 'C'); ?> for use on personal computers.</p>
            <p><strong>Windows 3.1</strong> was originally released on 6 April 1992, official support for the Windows 3.1 family ended on 1 January 2002.</p>

            <h2>Windows for Workgroups</h2>
            <p><strong>Windows for Workgroups 3.1</strong> (originally codenamed "<strong><em>Winball</em></strong>" and later "<strong><em>Sparta</em></strong>"), released in October 1992, features native networking support. Windows for Workgroups 3.1 is an extended version of Windows 3.1 that comes with SMB file sharing support via the NetBIOS based NBF and / or IPX network transport protocols.</p>
            <p><strong>Windows for Workgroups 3.11</strong> (codenamed "<strong><em>Snowball</em></strong>") was released on 11 August 1993 and shipped in November 1993. It supported 32-bit file access, full 32-bit network redirectors, and the VCACHE.386 file cache.</p>

        </div>
    </div>
<?php endif; ?>
