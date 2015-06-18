<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Clojure Programming Language'); ?>
        <p><strong>Clojure</strong> (pronounced like "<em>closure</em>") is a dialect of the <?php echo $this->stencil->addLink('Lisp', 'L'); ?> programming language created by <strong>Rich Hickey</strong>.</p>
        <p>Clojure is a general-purpose programming language with an emphasis on functional programming.</p>
        <p>It runs on the <strong>Java Virtual Machine</strong> (<?php echo $this->stencil->addLink('JVM', 'LJ'); ?>), Common Language Runtime, and JavaScript engines.</p>
        <p>Like other Lisps, Clojure treats code as data and has a macro system.</p>
        <p>Clojure's focus on programming with immutable values and explicit progression-of-time constructs are intended to facilitate the development of more robust programs, particularly multithreaded ones.</p>
        <p>Rich Hickey is the creator of the Clojure programming language, with work experience on scheduling systems, broadcast automation, audio analysis and fingerprinting, database design, yield management, exit poll systems, and machine listening.</p>
        <p>Before Clojure, he developed <strong>dotLisp</strong>, a similar project based on the <?php echo $this->stencil->addLink('.NET', 'L'); ?> platform.</p>
        <p>Hickey developed Clojure because he wanted a modern Lisp for functional programming, symbiotic with the established <?php echo $this->stencil->addLink('Java', 'L'); ?> platform, and designed for concurrency.</p>
        <p>Clojure's approach to State is characterized by the concept of identities, which represent it as a series of immutable states over time.</p>
        <p>Since states are immutable values, any number of workers can operate on them in parallel, and concurrency becomes a question of managing changes from one state to another.</p>
        <p>For this purpose, Clojure provides several mutable reference types, each having well-defined semantics for the transition between states.</p>
    </div>
</div>
