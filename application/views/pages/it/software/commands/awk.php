<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('AWK'); ?>
        <p><strong>AWK</strong> is an interpreted programming language designed for text processing and typically used as a data extraction and reporting tool. It is a standard feature of most <?php echo $this->stencil->addLink('Unix like', 'OS'); ?> operating systems. AWK was very popular in the late 1970s and 1980s, but from the 1990s has largely been replaced by <?php echo $this->stencil->addLink('Perl', 'L'); ?>, on which AWK had a strong influence.</p>
        <p>AWK was created at <?php echo $this->stencil->addLink('Bell Labs', 'C'); ?> in the 1970s, and its name is derived from the family names of its authors - Alfred <strong>A</strong>ho, Peter <strong>W</strong>einberger, and Brian <strong>K</strong>ernighan. The acronym is pronounced the same as the name of the bird, <em>auk</em> (which acts as an emblem of the language such as on The AWK Programming Language book cover - the book is often referred to by the abbreviation <em>TAPL</em>).</p>
        <p>When written in all lowercase letters, as <code>awk</code>, it refers to the <?php echo $this->stencil->addLink('Unix', 'OS'); ?> or <?php echo $this->stencil->addLink('Plan 9', 'OS'); ?> program that runs scripts written in the AWK programming language.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <p>The AWK language is a data driven scripting language consisting of a set of actions to be taken against streams of textual data - either run directly on files or used as part of a pipeline - for purposes of extracting or transforming text, such as producing formatted reports. The language extensively uses the string datatype, associative arrays (that is, arrays indexed by key strings), and regular expressions. While AWK has a limited intended application domain, and was especially designed to support one liner programs, the language is Turing complete, and even the early Bell Labs users of AWK often wrote well structured large AWK programs.</p>
        </div>
    </div>
<?php endif; ?>
