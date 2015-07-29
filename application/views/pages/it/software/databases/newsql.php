<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('NewSQL'); ?>
        <p><strong>NewSQL</strong> is a class of modern relational database management systems that seek to provide the same scalable performance of <?php echo $this->stencil->addLink('NoSQL', 'DB'); ?> systems for on-line transaction processing (read-write) workloads while still maintaining the <?php echo $this->stencil->addLink('ACID', 'DB'); ?> guarantees of a traditional database system.</p>
        <p>The term was first used by 451 Group analyst <strong>Matthew Aslett</strong> in a 2011 research paper discussing the rise of new database systems as challengers to established vendors.</p>
        <p>Many enterprise systems that handle high-profile data (e.g., financial and order processing systems) also need to be able to scale but are unable to use NoSQL solutions because they cannot give up strong transactional and consistency requirements.</p>
        <p>The only options previously available for these organizations were to either purchase a more powerful single-node machine or develop custom middleware that distributes queries over traditional <?php echo $this->stencil->addLink('DBMS', 'DB'); ?> nodes.</p>
        <p>Both approaches are prohibitively expensive and thus are not an option for many.</p>
        <p>Thus, in this paper, Aslett discusses how NewSQL upstarts are poised to challenge the supremacy of commercial vendors, in particular <?php echo $this->stencil->addLink('Oracle', 'C'); ?>.</p>
        <p>Although NewSQL systems vary greatly in their internal architectures, the two distinguishing features common amongst them is that they all support the relational data model and use <?php echo $this->stencil->addLink('SQL', 'DB'); ?> as their primary interface.</p>
        <p>One of the first known NewSQL systems is the H-Store parallel database system.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <p>NewSQL systems can be loosely grouped into three categories:</p>

            <h2>New architectures</h2>
            <p>The first type of NewSQL systems are completely new database platforms.</p>
            <p>These are designed to operate in a distributed cluster of shared-nothing nodes, in which each node owns a subset of the data.</p>
            <p>Though many of the new databases have taken different design approaches, there are two primary categories evolving.</p>
            <p>The first type of system sends the execution of transactions and queries to the nodes that contain the needed data.</p>
            <p>SQL queries are split into query fragments and sent to the nodes that own the data.</p>
            <p>These databases are able to scale linearly as additional nodes are added.</p>

            <h2>General-purpose databases</h2>
            <p>These maintain the full functionality of traditional databases, handling all types of queries.</p>
            <p>These databases are often written from scratch with a distributed architecture in mind, and include components such as distributed concurrency control, flow control, and distributed query processing.</p>
            <p>This includes Google Spanner, Clustrix, FoundationDB, NuoDB, TransLattice and ActorDB.</p>

            <h2>In-memory databases</h2>
            <p>The applications targeted by these NewSQL systems are characterized as having a large number of transactions that are short-lived, touch a small subset of data using index lookups (i.e., no full table scans or large distributed joins), and are repetitive.</p>
            <p>These NewSQL systems achieve high performance and scalability by eschewing much of the legacy architecture of the original System R design, such as heavyweight recovery or concurrency control algorithms.</p>
            <p>Two example systems in this category are VoltDB and Pivotal's SQLFire & GemFire XD.</p>

            <h2>SQL Engines</h2>
            <p>The second category are highly optimized storage engines for SQL.</p>
            <p>These systems provide the same programming interface as SQL, but scale better than built-in engines, such as InnoDB.</p>
            <p>Examples of these new storage engines include TokuDB, InfiniDB, MemSQL, and Akiban.</p>

            <h2>Transparent sharding</h2>
            <p>These systems provide a sharding middleware layer to automatically split databases across multiple nodes.</p>
            <p>Examples of this type of system includes dbShards, Scalearc, ScaleBase and MySQL Cluster.</p>

            <h2>Transparent caching</h2>
            <p>These systems provide a result-based queries and stored procedures caching layer middleware for automated acceleration and scalability improvement of databases and applications, without requirement of adding special code to the application or the database.</p>
            <p>Such systems are either automated and maintaining full transaction data-integrity (automated dynamic caching) such as SafePeak, or manually activated caching with cache based on time-expiration such as Scalearc and GreenSQL.</p>
        </div>
    </div>
<?php endif; ?>