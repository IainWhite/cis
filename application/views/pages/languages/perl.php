<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Perl Programming Language'); ?>
        <p><strong>Perl</strong> is a family of high-level, general-purpose, interpreted, dynamic programming languages. The languages in this family include <strong>Perl 5</strong> and <strong>Perl 6</strong>.</p>
        <p>Perl was originally developed by <?php echo $this->stencil->addLink('Larry Wall', 'P'); ?> in 1987 as a general-purpose Unix scripting language to make report processing easier. Since then, it has undergone many changes and revisions. Perl 6, which began as a redesign of Perl 5 in 2000, eventually evolved into a separate language. Both languages continue to be developed independently by different development teams and liberally borrow ideas from one another.</p>
        <p>The Perl languages borrow features from other programming languages including <?php echo $this->stencil->addLink('C', 'L'); ?>, shell scripting (sh), <?php echo $this->stencil->addLink('AWK', 'SW'); ?>, and <?php echo $this->stencil->addLink('sed', 'SW'); ?>. They provide powerful text processing facilities without the arbitrary data-length limits of many contemporary Unix commandline tools, facilitating easy manipulation of text files.</p>
        <p>Perl 5 gained widespread popularity in the late 1990s as a <?php echo $this->stencil->addLink('CGI', 'WD'); ?> scripting language, in part due to its parsing abilities.</p>
        <p>In addition to CGI, Perl 5 is used for graphics programming, system administration, network programming, finance, and other applications. It's nicknamed "<em>the Swiss Army chainsaw of scripting languages</em>" because of its flexibility and power, and possibly also because of its perceived "ugliness".</p>
        <p>In 1998, it was also referred to as the "<em>duct tape that holds the Internet together</em>", in reference to its ubiquitous use as a glue language and perceived inelegance.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Example of Perl Code</h2>
            <?php echo $this->stencil->addCodeSnippet('perl', 'perl.txt'); ?>
        </div>
    </div>
<?php endif; ?>