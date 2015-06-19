<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Scala Programming Language'); ?>
        <p><strong>Scala</strong> is an object-functional programming and scripting language for general software applications, statically typed, designed to concisely express solutions in an elegant, type-safe and lightweight manner.</p>
        <p>Scala has full support for functional programming. It cleans up what are often considered poor design decisions in <?php echo $this->stencil->addLink('Java', 'L'); ?> to allow cleaner, more concise and more expressive code to be written.</p>
        <p>Scala was created by {'Martin Odersky'|link_urls:'/p'}<?php echo $this->stencil->addLink('Martin Odersky', 'P'); ?></p>
        <p><strong>Scala website:</strong> <?php echo $this->stencil->addExternalLink('www.scala-lang.org', 'http://www.scala-lang.org/'); ?></p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Example of Scala Code</h2>
            <?php echo $this->stencil->addCodeSnippet('scala', 'scala.txt'); ?>
        </div>
    </div>
<?php endif; ?>