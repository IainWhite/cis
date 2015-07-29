<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('NoSQL'); ?>
        <p>A <strong>NoSQL</strong> or <strong>Not Only SQL</strong> database provides a mechanism for storage and retrieval of data that is modelled in means other than the tabular relations used in relational databases.</p>
        <p>Motivations for this approach include simplicity of design, horizontal scaling and finer control over availability.</p>
        <p>The data structure (e.g. key-value, graph, or document) differs from the <?php echo $this->stencil->addLink('RDMS', 'DB'); ?>, and therefore some operations are faster in NoSQL and some in RDBMS.</p>
        <p>There are differences though and the particular suitability of a given NoSQL DB depends on the problem to be solved.</p>
        <p>NoSQL databases are finding significant and growing industry use in big data and real-time web applications.</p>
        <p>NoSQL systems are also referred to as "Not only SQL" to emphasize that they may in fact allow <?php echo $this->stencil->addLink('SQL', 'DB'); ?> like query languages to be used.</p>
        <p>Many NoSQL stores compromise consistency (in the sense of the <?php echo $this->stencil->addLink('CAP theorem', 'IT'); ?>) in favour of availability and partition tolerance.</p>
        <p>Barriers to the greater adoption of NoSQL stores include the use of low-level query languages, the lack of standardized interfaces, and the huge investments already made in SQL by enterprises.</p>
        <p><strong>Carlo Strozzi</strong> used the term NoSQL in 1998 to name his lightweight, open-source relational database that did not expose the standard SQL interface.</p>
        <p>Strozzi suggests that, as the current NoSQL movement "<em>departs from the relational model altogether; it should therefore have been called more appropriately '<strong>NoREL</strong>'</em>".</p>
        <p><strong>Eric Evans</strong> reintroduced the term NoSQL in early 2009 when <strong>Johan Oskarsson</strong> of <code>Last.fm</code> wanted to organize an event to discuss open-source distributed databases.</p>
        <p>The name attempted to label the emergence of a growing number of non-relational, distributed data stores.</p>
        <p>Most of the early NoSQL systems did not attempt to provide atomicity, consistency, isolation and durability guarantees, contrary to the prevailing practice among relational database systems.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <p>There have been various approaches to classify NoSQL databases, each with different categories and subcategories.</p>
            <p>Because of the variety of approaches and overlaps it is difficult to get and maintain an overview of non-relational databases.</p>
            <p>Nevertheless, the basic classification that most would agree on is based on data model.</p>
            <p>A few examples in each category are:</p>
            <ul>
                <li><strong>Column:</strong> Accumulo, Cassandra, HBase</li>
                <li><strong>Document:</strong>  Clusterpoint, Couchbase, MarkLogic, MongoDB</li>
                <li><strong>Key-value:</strong>  Dynamo, FoundationDB, MemcacheDB, Redis, Riak, FairCom c-treeACE</li>
                <li><strong>Graph:</strong> Allegro, Neo4J, OrientDB, Virtuoso</li>
            </ul>
        </div>
    </div>
<?php endif; ?>