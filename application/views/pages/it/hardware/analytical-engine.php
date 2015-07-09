<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Analytical Engine'); ?>
        <p>The <strong>Analytical Engine</strong> was a proposed mechanical general purpose computer designed by English mathematician <?php echo $this->stencil->addLink('Charles Babbage', 'P'); ?>.</p>
        <p>It was first described in 1837 as the successor to Babbage's <?php echo $this->stencil->addLink('Difference Engine', 'ITH'); ?>, a design for a mechanical computer.</p>
        <p>The Analytical Engine incorporated an arithmetic logic unit, control flow in the form of conditional branching and loops, and integrated memory, making it the first design for a general-purpose computer that could be described in modern terms as Turing-complete.</p>
        <p>Babbage was never able to complete construction of any of his machines due to conflicts with his chief engineer and inadequate funding.</p>
        <p>It was not until the 1940s that the first general-purpose computers were actually built.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <p>During Babbage's difference engine project, he realized that a much more general design, the <strong>Analytical Engine</strong>, was possible.</p>
            <p>The input (programs and data) was to be provided to the machine via punched cards, a method being used at the time to direct mechanical looms such as the Jacquard loom.</p>
            <p>For output, the machine would have a printer, a curve plotter and a bell. The machine would also be able to punch numbers onto cards to be read in later.</p>
            <p>It employed ordinary base-10 fixed-point arithmetic. There was to be a store (a memory) capable of holding 1,000 numbers of 40 decimal digits each. An arithmetical unit (the "<em>mill</em>") would be able to perform all four arithmetic operations, plus comparisons and optionally square roots.</p>
            <p>Like the central processing unit (CPU) in a modern computer, the <em>mill</em> would rely upon its own internal procedures, to be stored in the form of pegs inserted into rotating drums called "<em>barrels</em>", to carry out some of the more complex instructions the user's program might specify.</p>
            <p>The programming language to be employed by users was akin to modern day assembly languages. Loops and conditional branching were possible, and so the language as conceived would have been Turing-complete as later defined by <?php echo $this->stencil->addLink('Alan Turing', 'P'); ?>.</p>
            <p>Three different types of punch cards were used: one for arithmetical operations, one for numerical constants, and one for load and store operations, transferring numbers from the store to the arithmetical unit or back. There were three separate readers for the three types of cards.</p>
            <p>In 1842, the Italian mathematician <strong>Luigi Menabrea</strong>, whom Babbage had met while travelling in Italy, wrote a description of the engine in French.</p>
            <p>In 1843, the description was translated into English and extensively annotated by <?php echo $this->stencil->addLink('Ada Lovelace', 'P'); ?>, who had become interested in the engine eight years earlier.</p>
            <p>In recognition of her additions to Menabrea's paper, which included a way to calculate Bernoulli numbers using the machine, she has been described as the first computer programmer.</p>
        </div>
    </div>
<?php endif; ?>