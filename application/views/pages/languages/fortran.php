<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Fortran'); ?>
        <p><strong>Fortran</strong> (previously <strong>FORTRAN</strong>, derived from <strong>For</strong>mula <strong>Tran</strong>slating System) is a general-purpose, imperative programming language that is especially suited to numeric computation and scientific computing.</p>
        <p>Originally developed by <?php echo $this->stencil->addLink('IBM', 'C'); ?> in the 1950s for scientific and engineering applications, Fortran came to dominate this area of programming early on and has been in continuous use for over half a century in computationally intensive areas such as numerical weather prediction, finite element analysis, computational fluid dynamics, computational physics and computational chemistry.</p>
        <p>It is one of the most popular languages in the area of high-performance computing and is the language used for programs that benchmark and rank the world's fastest supercomputers.</p>
        <p>Fortran encompasses a lineage of versions, each of which evolved to add extensions to the language while usually retaining compatibility with previous versions. Successive versions have added support for structured programming and processing of character-based data (<strong>FORTRAN 77</strong>), array programming, modular programming and generic programming (Fortran 90), high performance Fortran (Fortran 95), object-oriented programming (Fortran 2003) and concurrent programming (Fortran 2008).</p>
        <p>The names of earlier versions of the language through FORTRAN 77 were conventionally spelled in all-caps (FORTRAN 77 was the version in which the use of lowercase letters in keywords was strictly nonstandard). The capitalisation has been dropped in referring to newer versions beginning with Fortran 90. The official language standards now refer to the language as "Fortran".</p>
        <p>Because the capitalisation was never completely consistent in actual usage, this article adopts the convention of using the all-caps FORTRAN in referring to versions of the language up to FORTRAN 77 and the title-caps Fortran in referring to versions of the language from Fortran 90 onward. This convention is reflected in the capitalisation of FORTRAN in the <?php echo $this->stencil->addLink('ANSI', 'C'); ?> X3.9-1966 (FORTRAN 66) and ANSI X3.9-1978 (FORTRAN 77) standards and the title caps Fortran in the ANSI X3.198-1992 (Fortran 90), ISO/IEC 1539-1:1997 (Fortran 95) and ISO/IEC 1539-1:2004 (Fortran 2003) standards.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <p>In late 1953, <?php echo $this->stencil->addLink('John Backus', 'P'); ?> submitted a proposal to his superiors at IBM to develop a more practical alternative to <?php echo $this->stencil->addLink('assembly language', 'L'); ?> for programming their IBM 704 mainframe computer.</p>
            <p>Backus' historic FORTRAN team consisted of programmers Richard Goldberg, Sheldon F. Best, Harlan Herrick, Peter Sheridan, Roy Nutt, Robert Nelson, Irving Ziller, Lois Haibt, and David Sayre.</p>
            <p>Its concepts included easier entry of equations into a computer, an idea developed by J. Halcombe Laning and demonstrated in his GEORGE compiler of 1952.</p>
            <p>A draft specification for The IBM Mathematical Formula Translating System was completed by mid-1954.</p>
            <p>The first manual for FORTRAN appeared in October 1956, with the first FORTRAN compiler delivered in April 1957.</p>
            <p>This was the first optimising compiler, because customers were reluctant to use a high-level programming language unless its compiler could generate code whose performance was comparable to that of hand-coded assembly language.</p>
            <p>While the community was sceptical that this new method could possibly outperform hand-coding, it reduced the number of programming statements necessary to operate a machine by a factor of 20, and quickly gained acceptance.</p>
            <p>John Backus said during a 1979 interview with Think, the IBM employee magazine, "<em>Much of my work has come from being lazy. I didn't like writing programs, and so, when I was working on the IBM 701, writing programs for computing missile trajectories, I started work on a programming system to make it easier to write programs.</em>".</p>
            <p>The language was widely adopted by scientists for writing numerically intensive programs, which encouraged compiler writers to produce compilers that could generate faster and more efficient code.</p>
            <p>The inclusion of a complex number data type in the language made Fortran especially suited to technical applications such as electrical engineering.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h3>Example of Fortran Code</h3>
            <?php echo $this->stencil->addCodeSnippet('fortran', 'fortran.txt'); ?>
        </div>
    </div>
<?php endif; ?>