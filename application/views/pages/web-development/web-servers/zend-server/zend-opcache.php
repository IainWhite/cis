<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('The Zend Opcache'); ?>
        <p><strong>Zend Opcache</strong> is an open source component of <?php echo $this->stencil->addLink('Zend Server', 'WS'); ?> and Zend Server Community Edition.</p>
        <p>Zend Opcache speeds up <?php echo $this->stencil->addLink('PHP', 'L'); ?> execution by opcode caching and optimization.</p>
        <p>It stores precompiled script bytecode in shared memory. This eliminates the stages of reading code from the disk and compiling it on future access.</p>
        <p>For further performance improvements, the stored bytecode is optimized for faster execution. Unlike Zend Optimizer, Zend Opcache doesn't load files encoded by Zend Guard.</p>
        <p>Zend provides another component, Zend Guard Loader, in order to load encoded applications with Zend Server and Zend Server Community Edition.</p>
        <p>Zend Optimizer+ was renamed to Zend Opcache mid of March 2013.</p>
        <p>Starting with PHP 5.5 the Zend Opcache is integrated and shipped with PHP.</p>
    </div>
</div>
