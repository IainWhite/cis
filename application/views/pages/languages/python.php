<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Python Programming Language'); ?>
        <p><strong>Python</strong> is a widely used general-purpose, high-level programming language.</p>
        <p>Its design philosophy emphasises code readability, and its syntax allows programmers to express concepts in fewer lines of code than would be possible in languages such as <?php echo $this->stencil->addLink('C', 'L'); ?>.</p>
        <p>The language provides constructs intended to enable clear programs on both a small and large scale.</p>
        <p>Python supports multiple programming paradigms, including object-oriented, imperative and functional programming or procedural styles. It features a dynamic type system and automatic memory management and has a large and comprehensive standard library.</p>
        <p>Like other dynamic languages, Python is often used as a scripting language, but is also used in a wide range of non-scripting contexts.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Example of Python Code</h2>
            <?php echo $this->stencil->addCodeSnippet('python', 'python.txt'); ?>
        </div>
    </div>
<?php endif; ?>