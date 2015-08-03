<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Relational Model for Database Management'); ?>
        <p>The <strong>relational model for database management</strong> is a database model based on first order predicate logic, first formulated and proposed in 1969 by <?php echo $this->stencil->addLink('E F Codd', 'P'); ?>.</p>
        <p>In the relational model of a database, all data is represented in terms of tuples, grouped into relations. A database organized in terms of the relational model is a relational database.</p>
        <p>In the relational model, related records are linked together with a "key".</p>
        <p>The purpose of the relational model is to provide a declarative method for specifying data and queries: users directly state what information the database contains and what information they want from it, and let the database management system software take care of describing data structures for storing the data and retrieval procedures for answering queries.</p>
        <p>Most relational databases use the <?php echo $this->stencil->addLink('SQL', 'DB'); ?> data definition and query language; these systems implement what can be regarded as an engineering approximation to the relational model.</p>
        <p>A table in an SQL database schema corresponds to a predicate variable; the contents of a table to a relation; key constraints, other constraints, and SQL queries correspond to predicates.</p>
        <p>However, SQL databases, including <?php echo $this->stencil->addLink('IBM DB2', 'DB'); ?>, deviate from the relational model in many details, and Codd fiercely argued against deviations that compromise the original principles.</p>
    </div>
</div>