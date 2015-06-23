<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('C++ (C Plus Plus)'); ?>
        <p><strong>C++</strong> (pronounced as "see plus plus") is a programming language that is general purpose, statically typed, free-form, multi-paradigm and compiled. It is regarded as an intermediate-level language, as it comprises both high-level and low-level language features.</p>
        <p>Developed by Bjarne Stroustrup starting in 1979 at <?php echo $this->stencil->addLink('Bell Labs', 'C'); ?>, C++ was originally named <strong>C with Classes</strong>, adding object oriented features, such as classes, and other enhancements to the <?php echo $this->stencil->addLink('C', 'L'); ?> programming language.</p>
        <p>The language was renamed C++ in 1983, as a pun involving the increment operator.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Example of C++ Code</h2>
            <?php echo $this->stencil->addCodeSnippet('c++', 'c-plus-plus.txt'); ?>
        </div>
    </div>
<?php endif; ?>