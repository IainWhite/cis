<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Paradox'); ?>
        <h2>Paradox for DOS</h2>
        <p><strong>Paradox for DOS</strong> was a relational database management system originally written by <strong>Richard Schwartz</strong> and <strong>Robert Shostak</strong>, and released by their company <strong>Ansa Software</strong> in 1985.</p>
        <p>In September 1987, <?php echo $this->stencil->addLink('Borland', 'C'); ?> purchased Ansa Software, including their Paradox/DOS 2.0 software. Notable classic versions were 3.5 and 4.5.</p>
        <p>Versions up to 3.5 were evolutions from 1.0. Version 4.0 and 4.5 were retooled in the <?php echo $this->stencil->addLink('Borland C++', 'LC'); ?> windowing toolkit and used a different extended memory access scheme.</p>
        <p>Paradox/DOS was a successful <?php echo $this->stencil->addLink('DOS', 'OS'); ?> based database of the late eighties and early nineties.</p>
        <p>At that time, <?php echo $this->stencil->addLink('dBase', 'DB'); ?> and its xBase clones (<?php echo $this->stencil->addLink('Foxpro', 'DB'); ?>, Clipper) dominated the market.</p>
        <p>The features that distinguished Paradox/DOS were:</p>
        <ul>
            <li>A visual <strong>Query by Example</strong> implementation that was supported by an AI engine.</li>
            <li>Effective use of memory (conventional as well as extended / expanded) - caching data tables, and particularly indexes, which caused Paradox to execute tasks very quickly in contrast to the explicit skills required for xBase performance optimisation.</li>
            <li>An innovative programming language the <strong>Paradox Application Language (PAL)</strong> that was readable, powerful, and could be recorded from keyboard actions (rather like <?php echo $this->stencil->addLink('Lotus 1-2-3', 'ITS'); ?> macro recording).</li>
            <li>Lotus-like text menus and windows which was the native interface (in contrast to dBase which had a command line interface with menus layered on top).</li>
            <li>Particularly in Paradox 1.0 and 2.0, the user and programming manuals won readability awards - they were copiously illustrated, well laid out and explanations were written in common English.</li>
        </ul>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Paradox for Windows</h2>
            <p><strong>Paradox for Windows</strong> is a distinctly different product from <strong>Paradox for DOS</strong>, and was produced by a different team of programmers.</p>
            <p>Although key features of the <?php echo $this->stencil->addLink('DOS', 'OS'); ?> product, the QBE and the database engine, were ports keeping the DOS code, there was a major break in compatibility from <strong>PAL</strong> to <strong>ObjectPAL</strong> and in the shift to a <?php echo $this->stencil->addLink('GUI', 'IT'); ?> design metaphor for Forms and Reports.</p>
            <p>The ObjectPAL changes were controversial but forced since PAL was based on keystroke recording actions that had no equivalent in <?php echo $this->stencil->addLink('Windows', 'OS'); ?>.</p>
            <p>An object-based language based on ideas from Hypercard was used in place of keystroke recording.</p>
            <p>The Forms and Reports designers used device independent scaling including ability to work in zoomed mode for detailed layout.</p>
            <p>The mouse right-click was used for access to Forms and Reports properties, inspired by the <?php echo $this->stencil->addLink('Xerox Alto', 'ITH'); ?> and <?php echo $this->stencil->addLink('Smalltalk', 'L'); ?>, in a way now almost universal to Windows programs.</p>
            <p>The ObjectPAL was (like Hypercard) associated with the visual objects - also revealed by right click. Property inspection and layout tools could be "pinned up" to stay on screen, an idea borrowed from the <?php echo $this->stencil->addLink('NeXT', 'ITH'); ?> and now fairly widely adopted in Windows.</p>
        </div>
    </div>
<?php endif; ?>