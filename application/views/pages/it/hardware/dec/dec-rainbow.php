<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('DEC Rainbow 100'); ?>
        <p>The <strong>Rainbow 100</strong> was a microcomputer introduced by <strong>Digital Equipment Corporation (<?php echo $this->stencil->addLink('DEC', 'C'); ?>)</strong> in 1982. This desktop unit had the video-terminal display circuitry from the <?php echo $this->stencil->addLink('VT102', 'VT'); ?>, a video monitor similar to the <?php echo $this->stencil->addLink('VT220', 'VT'); ?> in a dual-CPU box with both 4MHz <?php echo $this->stencil->addLink('Zilog Z80', 'CPU'); ?> and 4.81MHz <?php echo $this->stencil->addLink('Intel 8088', 'CPU'); ?> CPUs. The Rainbow 100 was a triple use machine: VT100 mode (industry standard dumb terminal for interacting with DEC's own <?php echo $this->stencil->addLink('VAX', 'ITH'); ?>), <?php echo $this->stencil->addLink('8-bit', 'IT'); ?> <?php echo $this->stencil->addLink('CP/M', 'OS'); ?> mode (using the Z80), and <?php echo $this->stencil->addLink('16-bit', 'IT'); ?> <?php echo $this->stencil->addLink('CP/M-86', 'OS'); ?> or <?php echo $this->stencil->addLink('MS-DOS', 'DOS'); ?> mode using the 8088.</p>

        <h2>Models</h2>
        <p>The Rainbow came in three models, the 100A, 100B and 100+. The "A" model was the first released, followed later by the "B" model. The most noticeable differences between the two models were the firmware and slight hardware changes. The systems were referred to with model numbers PC-100A and PC-100B respectively; later "B" models were also designated PC-100B2.</p>

        <h3>PC-100A</h3>
        <p>The "A" model was the first produced by Digital. The distinguishing characteristic of the "A" model from an end-user perspective was that the earlier firmware did not support booting from a hard disk. Other distinguishing hardware features included the three 2764 ROM chips holding the system firmware and the case fan / power supply combinations. Versions of the 100A shipped outside the USA included a user changeable ROM chip in a special casing. The user changed the built-in ROM for this one to support their keyboard layout and language of the boot screen.</p>

        <h3>PC-100B</h3>
        <p>The "B" model followed the "A" model, and introduced a number of changes. The "B" model featured the ability to boot from a hard disk (referred to as the Winchester drive) via the boot menu due to updated firmware. The hardware changes included bigger firmware stored on two 27128 ROMs (16kB) and an improved case fan / power supply.</p>
        <p>The "100+" model was actually a marketing designation signifying that the system shipped with a hard drive installed; the "100+" and "B" models were identical in all other respects. When a hard-disk option was installed on the Rainbow, the kit included the 100+ emblem for the computer's case.</p>

        <h2>Software</h2>
        <p>The Rainbow runs the CP/M 86/80 operating system, which detects whether software is written for 8-bit CP/M and 16-bit CP/M-86 and runs it on the appropriate processor. DEC later released MS-DOS, but little <?php echo $this->stencil->addLink('DOS', 'OS'); ?> software was released on Rainbow media, and there were subtle differences between Rainbow's MS-DOS implementation and <?php echo $this->stencil->addLink('MS-DOS', 'OS'); ?> (or <?php echo $this->stencil->addLink('PC DOS', 'DOS'); ?>) running on true <?php echo $this->stencil->addLink('IBM PC compatibles', 'PC'); ?>. Towards the end of its life, Rainbow users were able to run IBM PC-compatible MS-DOS software using an emulation application called <strong><em>Code Blue</em></strong>.</p>
        <p>MS-DOS compatibility was added late in the design, so hardware interrupts and MS-DOS software interrupts overlapped. One DEC documentation pack for developers included a listing of Microsoft assembly code to handle this. The theory was that hardware interrupts would interrupt again but software interrupts would only happen once.</p>
        <p>DEC itself ported <?php echo $this->stencil->addLink('Microsoft Windows 1.0', 'WIN'); ?> to the Rainbow. There was also a third-party upgrade that included a <?php echo $this->stencil->addLink('286', 'CPU'); ?> processor board and a modified version of <?php echo $this->stencil->addLink('Windows 3.0', 'WIN'); ?>.</p>

        <h2>In The Movies</h2>
        <p>A television advertisement for the DEC Rainbow appears in movie <strong>The Philadelphia Experiment</strong>.</p>
        <p>The DEC Rainbow 100 can be seen in the 1984 film <strong>Ghostbusters</strong>. Janine uses the Rainbow at the Ghostbusters reception.</p>
    </div>
</div>