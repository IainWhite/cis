<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('C Programming Language'); ?>
        <p><strong>C</strong> is a general-purpose programming language initially developed by <?php echo $this->stencil->addLink('Dennis Ritchie', 'P'); ?> between 1969 and 1973 at AT&amp;T Bell Labs.</p>
        <p>C has facilities for structured programming and allows lexical variable scope and recursion, while a static type system prevents many unintended operations. Its design provides constructs that map efficiently to typical machine instructions, and therefore it has found lasting use in applications that had formerly been coded in assembly language, most notably system software like the <?php echo $this->stencil->addLink('Unix', 'OS'); ?> computer operating system.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Example of C Code</h2>
            <?php echo $this->stencil->addCodeSnippet('c', 'c.txt'); ?>
        </div>
    </div>

    <?php echo $this->stencil->sub('languages/c/c++', NULL, TRUE); ?>
    <?php echo $this->stencil->sub('languages/c/c#', NULL, TRUE); ?>
<?php endif; ?>