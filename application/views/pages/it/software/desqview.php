<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('DESQview'); ?>
        <p><strong>DESQview (DV)</strong> was a text mode multitasking operating environment developed by <strong>Quarterdeck Office Systems</strong> which enjoyed modest popularity in the late 1980s and early 1990s. Running on top of <?php echo $this->stencil->addLink('DOS', 'OS'); ?>, it allowed users to run multiple DOS programs concurrently in multiple windows.</p>
        <p></p>Quarterdeck's predecessor to DESQview was a task switching product called <strong>Desq</strong> (shipped late April or May 1984) which allowed users to switch between running programs. Quarterdeck revamped its package, bringing multitasking in, and adding TopView compatibility.</p>
        <p>DESQview was released in July 1985, four months before <?php echo $this->stencil->addLink('Microsoft', 'C'); ?> introduced the first version of <?php echo $this->stencil->addLink('Windows', 'OS'); ?>. It was widely thought to be the first program to bring multitasking and windowing capabilities to DOS, but in fact there was a predecessor, <?php echo $this->stencil->addLink('IBM', 'C'); ?>'s <?php echo $this->stencil->addLink('TopView', 'SW'); ?>, shipped March 1985, from which DESQview inherited the pop-up menu.</p>
        <p>Under DESQview, well behaved DOS programs could be run concurrently in resizable, overlapping windows (something the first version of <?php echo $this->stencil->addLink('Microsoft Windows', 'OS'); ?> could not do). A simple hide able menu allowed cutting and pasting between programs. DESQview provided support for simple editable macros as well. Quarterdeck also developed a set of optional utilities for DESQview, including a notepad and dialer. Later versions allowed graphics mode programs to be loaded as well, but only run in full screen mode.</p>
        <p>DESQview was not a <?php echo $this->stencil->addLink('GUI', 'IT'); ?> (Graphical User Interface) operating system. Rather, it was a non-graphical, windowed shell that ran in real mode on top of DOS, although it could run on any <?php echo $this->stencil->addLink('Intel 8086', 'CPU'); ?> or <?php echo $this->stencil->addLink('Intel 80286', 'CPU'); ?> based <?php echo $this->stencil->addLink('PC', 'ITH'); ?>. It could also use expanded memory add-ons to work around the 640KB RAM limit of conventional memory on early PCs. DESQview really came into its own on <?php echo $this->stencil->addLink('Intel 80386', 'CPU'); ?> machines, which were better at utilising memory above DOS's limit. However, in either case, it ran in real mode rather than protected mode, meaning that a misbehaving program could still crash the system.</p>
        <p>To make maximum use of <?php echo $this->stencil->addLink('extended memory', 'IT'); ?> on Intel 80386 processors, by transforming it into <?php echo $this->stencil->addLink('expanded memory', 'IT'); ?> and <?php echo $this->stencil->addLink('upper memory blocks', 'IT'); ?> (UMBs) accessible to DESQview and other real-mode programs, Quarterdeck developed a sophisticated memory manager. Owing to the foresight of its marketing manager, Quarterdeck marketed it as a separate product, <?php echo $this->stencil->addLink('QEMM-386', 'SW'); ?> (Quarterdeck Expanded Memory Manager 386). It became more popular than DESQview itself, and sold steadily for many years, generating over US$150 million in sales from 1987 through 1994. After the release of the <?php echo $this->stencil->addLink('Intel Pentium', 'CPU'); ?> processor, the 386 in QEMM was dropped. The combination package of DESQview and QEMM-386 was called DESQview 386 (DV386).</p>
        <p>With the introduction of the 80386, the memory management features were enhanced to allow the system to be shifted into protected mode but also allowing the addresses to be configured in a virtual 8086 mode so that the extended memory could be mapped into addressing frames and accessible to real-mode programs such as <?php echo $this->stencil->addLink('MS-DOS', 'OS'); ?>. This allowed a 386 to implement the LIM (Lotus, Intel, Microsoft) EMS (expanded memory specification). The memory manager was easily controlled by the user with DOS program QEMM.COM.</p>
        <p>DESQview was able to use QEMM's features far beyond just the LIM EMS API, mapping most of the "conventional" address space (below 640KB) into multiple extended memory blocks such that each could execute transparently during its context. The main copy of DOS and any device and networking drivers had to be loaded before DESQview. The resulting space was the largest single program that could run, but DESQview under QEMM could run as many instances of those programs as the EMS would allow. So an 8MB system could generally have a dozen full-sized MS-DOS programs running concurrently; a 16MB system could run over twenty, and so on.</p>
    </div>
</div>