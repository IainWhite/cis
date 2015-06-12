<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Dry'); ?>
        <p><strong>Don't Repeat Yourself</strong> (<strong>DRY</strong>) is a principle of software development, a principle aimed at reducing repetition of information of all kinds, especially useful in multi-tier architectures.</p>
        <p>The DRY principle is stated as "<em>Every piece of knowledge must have a single, unambiguous, authoritative representation within a system</em>".</p>
        <p>The principle has been formulated by <?php echo $this->stencil->addLink('Andy Hunt', 'P'); ?> and <?php echo $this->stencil->addLink('Dave Thomas', 'P'); ?> in their book <?php echo $this->stencil->addLink('The Pragmatic Programmer', 'B'); ?>.</p>
        <p>They apply it quite broadly to include "database schemas, test plans, the build system, even documentation".</p>
        <p>When the DRY principle is applied successfully, a modification of any single element of a system does not require a change in other logically unrelated elements.</p>
        <p>Additionally, elements that are logically related all change predictably and uniformly, and are thus kept in sync.</p>
        <p>Besides using methods and subroutines in their code, Thomas and Hunt rely on code generators, automatic build systems, and scripting languages to observe the DRY principle across layers.</p>
        <p>Violations of DRY are typically referred to as <strong>WET</strong> solutions, which is commonly taken to stand for either "<em>write everything twice</em>" or "<em>we enjoy typing</em>".</p>
    </div>
</div>