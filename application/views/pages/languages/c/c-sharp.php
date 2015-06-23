<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('C#'); ?>
        <p><strong>C#</strong> (pronounced as "see sharp") is a multi-paradigm programming language encompassing strong typing, imperative, declarative, functional, procedural, generic, object-oriented (class-based), and component-oriented programming disciplines. It was developed by <?php echo $this->stencil->addLink('Microsoft', 'C'); ?> within its <?php echo $this->stencil->addLink('.Net', 'L'); ?> initiative and later approved as a standard by Ecma and ISO.</p>
        <p>C# is one of the programming languages designed for the Common Language Infrastructure.</p>
        <p>The name "C sharp" was inspired by musical notation where a sharp indicates that the written note should be made a semitone higher in pitch. This is similar to the language name of <?php echo $this->stencil->addLink('C++', 'LC'); ?>, where "++" indicates that a variable should be incremented by 1.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Example of C# Code</h2>
            <?php echo $this->stencil->addCodeSnippet('c#', 'c-sharp.txt'); ?>
        </div>
    </div>
<?php endif; ?>