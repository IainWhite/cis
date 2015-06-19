<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('R Programming Language'); ?>
        <p><strong>R</strong> is a free software programming language and software environment for statistical computing and graphics.</p>
        <p>The R language is widely used among statisticians and data miners for developing statistical software and data analysis.</p>
        <p>R is an implementation of the <?php echo $this->stencil->addLink('S', 'L'); ?> programming language combined with lexical scoping semantics inspired by Scheme. S was created by <?php echo $this->stencil->addLink('John Chambers', 'P'); ?> while at <?php echo $this->stencil->addLink('Bell Labs', 'C'); ?>.</p>
        <p>R was created by <?php echo $this->stencil->addLink('Ross Ihaka', 'P'); ?> and <?php echo $this->stencil->addLink('Robert Gentleman', 'P'); ?> at the University of Auckland, New Zealand, and is currently developed by the <strong>R Development Core Team</strong>, of which Chambers is a member.</p>
        <p>R is named partly after the first names of the first two R authors and partly as a play on the name of S.</p>
        <p>R is freely available under the GNU General Public License, and pre-compiled binary versions are provided for various operating systems.</p>
        <p>R uses a command line interface; however, several graphical user interfaces are available for use with R.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Example of R Code</h2>
            <?php echo $this->stencil->addCodeSnippet('r', 'r.txt'); ?>
        </div>
    </div>
<?php endif; ?>