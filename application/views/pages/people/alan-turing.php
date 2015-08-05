<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Alan Turing'); ?>
        <?php echo $this->stencil->addHeadshot('Alan Turing', 'jpg', 'left'); ?>
        <p><strong>Alan Mathison Turing</strong>, OBE, FRS (23 June 1912 - 7 June 1954) was a British mathematician, logician, cryptanalyst, computer scientist and philosopher.</p>
        <p>He was highly influential in the development of computer science, giving a formalisation of the concepts of "algorithm" and "computation" with the <strong>Turing machine</strong>, which can be considered a model of a general purpose computer.</p>
        <blockquote class="text-right hero">Turing is widely considered to be the father of theoretical computer science and Artificial Intelligence.</blockquote>
        <p>During World War II, Turing worked for the <strong>Government Code and Cypher School (GC&amp;CS)</strong> at <?php echo $this->stencil->addLink('Bletchley Park', 'C'); ?>, Britain's code-breaking centre.</p>
        <p>For a time he led Hut 8, the section responsible for German naval cryptanalysis. He devised a number of techniques for breaking German ciphers, including improvements to the pre-war Polish <strong>bombe</strong> method, an electromechanical machine that could find settings for the <strong>Enigma</strong> machine.</p>
        <p>After the war, he worked at the National Physical Laboratory, where he designed the <strong>ACE</strong>, among the first designs for a stored-program computer. In 1948 Turing joined Max Newman's Computing Laboratory at Manchester University, where he assisted development of the Manchester computers and became interested in mathematical biology.</p>
        <p>He wrote a paper on the chemical basis of morphogenesis, and predicted oscillating chemical reactions such as the Belousov–Zhabotinsky reaction, first observed in the 1960s.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Automatic Computing Engine (ACE)</h2>
            <p><strong>The Automatic Computing Engine (ACE)</strong> was an early electronic stored program computer design produced by <strong>Alan Turing</strong> at the invitation of John R. Womersley, superintendent of the Mathematics Division of the National Physical Laboratory (NPL).</p>
            <p>The use of the word <em>Engine</em> was in homage to <?php echo $this->stencil->addLink('Charles Babbage', 'P'); ?> and his <?php echo $this->stencil->addLink('Difference Engine', 'ITH'); ?> and <?php echo $this->stencil->addLink('Analytical Engine', 'ITH'); ?>.</p>
            <p>Turing's technical design Proposed Electronic Calculator was the product of his theoretical work in 1936 "On Computable Numbers" and his wartime experience at <strong>Bletchley Park</strong> where the <strong>Colossus</strong> computers had been successful in breaking German military codes.</p>
            <p>In his 1936 paper, Turing described his idea as a "universal computing machine", but it is now known as the <strong>Universal Turing machine</strong>.</p>
        </div>
    </div>
<?php endif; ?>