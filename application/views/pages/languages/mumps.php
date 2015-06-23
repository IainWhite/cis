<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('MUMPS Programming Language'); ?>
        <p><strong>MUMPS</strong> (<strong>M</strong>assachusetts General Hospital <strong>U</strong>tility <strong>M</strong>ulti-<strong>P</strong>rogramming <strong>S</strong>ystem, later: '<strong>M</strong>ulti-<strong>U</strong>ser <strong>M</strong>ulti-<strong>P</strong>rogramming <strong>S</strong>ystem') or alternatively <strong>M</strong>, is a general-purpose computer programming language that provides <strong>ACID</strong> (Atomic, Consistent, Isolated, and Durable) transaction processing. Its most unique and differentiating feature is its "built-in" database, enabling high-level access to disk storage using simple symbolic program variables (subscripted arrays), similar to the variables used by most languages to access main memory.</p>
        <p>The MUMPS database is a key-value database engine optimized for high-throughput transaction processing. As such it is in the class of "schema-less", "schema-free," or <strong>NoSQL</strong> databases. Internally, MUMPS stores data in multidimensional hierarchical sparse arrays (also known as key-value nodes, sub-trees, or associative memory). Each array may have up to 32 subscripts, or dimensions. A scalar can be thought of as an array element with zero subscripts. Nodes with varying numbers of subscripts (including one node with no subscripts) can freely co-exist in the same array.</p>
        <p>Perhaps the most unusual aspect of the MUMPS language is the notion that the database is accessed through variables, rather than queries or retrievals. This means that accessing volatile memory and non-volatile storage use the same basic syntax, enabling a function to work on either local (volatile) or global (non-volatile) variables. Practically, this provides for extremely high performance data access.</p>
        <p>Originally designed in 1966 for the healthcare industry, MUMPS continues to be used today by the largest hospitals and banks to provide extremely high transaction data processing.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h3>MUMPS vs. M Naming Debate</h3>
            <p>All of the following positions can be, and have been, supported by knowledgeable people at various times:</p>
            <ul>
                <li>The language's name became M in 1993 when the M Technology Association adopted it.</li>
                <li>The name became M on December 8, 1995 with the approval of ANSI X11.1-1995</li>
                <li>Both M and MUMPS are officially accepted names.</li>
                <li>M is only an "alternate name" or "nickname" for the language, and MUMPS is still the official name.</li>
            </ul>
            <p>Some of the contention arose in response to strong M advocacy on the part of one commercial interest, InterSystems, whose chief executive disliked the name MUMPS and felt that it represented a serious marketing obstacle. Thus, favoring M to some extent became identified as alignment with InterSystems. The dispute also reflected rivalry between organizations (the M Technology Association, the MUMPS Development Committee, the ANSI and ISO Standards Committees) as to who determines the "official" name of the language.</p>
            <p>Some writers have attempted to defuse the issue by referring to the language as MUMPS, square brackets being the customary notation for optional syntax elements. A leading authority, and the author of an open source MUMPS implementation, Professor Kevin O'Kane, uses only 'MUMPS'.</p>
            <p>The most recent standard (ISO/IEC 11756:1999, re-affirmed on 25 June 2010), still mentions both M and MUMPS as officially accepted names.</p>
        </div>
    </div>
<?php endif; ?>
