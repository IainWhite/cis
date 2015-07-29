<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('SQL'); ?>
        <p><strong>SQL</strong> (<strong>Structured Query Language</strong>) is a special purpose programming language designed for managing data held in a relational database management system (<?php echo $this->stencil->addLink('RDBMS', 'DB'); ?>).</p>
        <p>Originally based upon relational algebra and tuple relational calculus, SQL consists of a data definition language and a data manipulation language.</p>
        <p>The scope of SQL includes data insert, query, update and delete, schema creation and modification, and data access control.</p>
        <p>Although SQL is often described as, and to a great extent is, a declarative language (4GL), it also includes procedural elements.</p>
        <p>SQL was one of the first commercial languages for <?php echo $this->stencil->addLink('E F Codd', 'P'); ?>'s <?php echo $this->stencil->addLink('relational model', 'IT'); ?>, as described in his influential 1970 paper, "<em>A Relational Model of Data for Large Shared Data Banks</em>".</p>
        <p>Despite not entirely adhering to the relational model as described by Codd, it became the most widely used database language.</p>
        <p>SQL became a standard of the <strong>American National Standards Institute (<?php echo $this->stencil->addLink('ANSI', 'C'); ?>)</strong> in 1986, and of the <strong>International Organization for Standardization (<?php echo $this->stencil->addLink('ISO', 'C'); ?>)</strong> in 1987.</p>
        <p>Since then, the standard has been enhanced several times with added features.</p>
        <p>Despite these standards, code is not completely portable among different database systems, which can lead to vendor lock-in.</p>
        <p>The different makers do not perfectly adhere to the standard, for instance by adding extensions, and the standard itself is sometimes ambiguous.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <p>SQL was initially developed at <?php echo $this->stencil->addLink('IBM', 'C'); ?> by Donald D. Chamberlin and Raymond F. Boyce in the early 1970s.</p>
            <p>This version, initially called <strong>SEQUEL</strong> (<strong>Structured English Query Language</strong>), was designed to manipulate and retrieve data stored in IBM's original quasi-relational database management system, System R, which a group at IBM San Jose Research Laboratory had developed during the 1970s.</p>
            <p>The acronym SEQUEL was later changed to SQL because "SEQUEL" was a trademark of the UK based Hawker Siddeley aircraft company.</p>
            <p>In the late 1970s, Relational Software, Inc (now <?php echo $this->stencil->addLink('Oracle Corporation', 'C'); ?>) saw the potential of the concepts described by Codd, Chamberlin, and Boyce and developed their own SQL based RDBMS with aspirations of selling it to the U.S. Navy, Central Intelligence Agency, and other U.S. government agencies.</p>
            <p>In June 1979, Relational Software, Inc. introduced the first commercially available implementation of SQL, Oracle V2 (Version2) for <?php echo $this->stencil->addLink('VAX', 'ITH'); ?> computers.</p>
            <p>After testing SQL at customer test sites to determine the usefulness and practicality of the system, IBM began developing commercial products based on their System R prototype including System/38, SQL/DS, and DB2, which were commercially available in 1979, 1981, and 1983, respectively.</p>
        </div>
    </div>
<?php endif; ?>