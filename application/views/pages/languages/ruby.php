<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Ruby Programming Language'); ?>
        <p><strong>Ruby</strong> is a dynamic, reflective, object-oriented, general-purpose programming language.</p>
        <p>It was designed and developed in the mid 1990s by <strong>Yukihiro "Matz" Matsumoto</strong> in Japan.</p>
        <p>According to its authors, Ruby was influenced by <?php echo $this->stencil->addLink('Perl', 'L'); ?>, <?php echo $this->stencil->addLink('Smalltalk', 'L'); ?>, <?php echo $this->stencil->addLink('Eiffel', 'L'); ?>, <?php echo $this->stencil->addLink('Ada', 'L'); ?>, and <?php echo $this->stencil->addLink('Lisp', 'L'); ?>.</p>
        <p>It supports multiple programming paradigms, including functional, object-oriented, and imperative. It also has a dynamic type system and automatic memory management.</p>
        <p>The name "<em>Ruby</em>" originated during an on-line chat session between Matsumoto and Keiju Ishitsuka on 24 February 1993, before any code had been written for the language.</p>
        <p>Initially two names were proposed: "<em>Coral</em>" and "<em>Ruby</em>". Matsumoto chose the latter in a later e-mail to Ishitsuka.</p>
        <p>Matsumoto later noted a factor in choosing the name "<em>Ruby</em>" – it was the birthstone of one of his colleagues.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Example of Ruby Code</h2>
            <?php echo $this->stencil->addCodeSnippet('ruby', 'ruby.txt'); ?>
        </div>
    </div>
<?php endif; ?>