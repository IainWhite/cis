<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Venkman JavaScript Debugger'); ?>
        <p><strong>Venkman</strong> is the <?php echo $this->stencil->addLink('JavaScript', 'L'); ?> debugger component of the <?php echo $this->stencil->addLink('Mozilla Application Suite', 'WB'); ?>.</p>
        <p>It is also available as a <?php echo $this->stencil->addLink('Mozilla Firefox', 'WB'); ?> extension.</p>
        <p>Venkman is named after the character Dr. Peter Venkman, played by Bill Murray in the movies <strong>Ghostbusters</strong> and <strong>Ghostbusters II</strong>.</p>
        <p>In 1998, John Bandhauer was in charge of creating the <?php echo $this->stencil->addLink('Netscape', 'WB'); ?> 4x JavaScript debugger. In order to keep things modular, he began by creating a mid-level JavaScript debugging application programming interface (<?php echo $this->stencil->addLink('API', 'WB'); ?>) known as <strong>js/jsd</strong>.</p>
        <p>This API augments the existing JavaScript API, providing clients with a useful set of debugger functionality implemented in <?php echo $this->stencil->addLink('C', 'L'); ?>.</p>
        <p>Bandhauer then went on to reflect that API into <?php echo $this->stencil->addLink('Java', 'L'); ?> and create his cross-platform front end, eventually producing Netscape JavaScript Debugger 1.0 and 1.1.</p>
        <p>In April 2001, Robert Ginda began work on a JavaScript debugger for <?php echo $this->stencil->addLink('Mozilla', 'WB'); ?>, called Venkman.</p>
        <p>Venkman builds on the js/jsd portion of Bandhauer's 1998 work, exposing it as an XPCOM component.</p>
        <p>This allows the user interface be written in JavaScript and <?php echo $this->stencil->addLink('XUL', 'WB'); ?>, which allows Venkman to be fully cross-platform.</p>
    </div>
</div>
