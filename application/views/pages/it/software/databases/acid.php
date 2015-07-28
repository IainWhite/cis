<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('ACID'); ?>
        <p><strong>ACID</strong> (<strong>A</strong>tomicity, <strong>C</strong>onsistency, <strong>I</strong>solation, <strong>D</strong>urability) is a set of properties that guarantee that database transactions are processed reliably.</p>
        <p>In the context of databases, a single logical operation on the data is called a transaction.</p>
        <p>For example, a transfer of funds from one bank account to another, even involving multiple changes such as debiting one account and crediting another, is a single transaction.</p>
        <p>Jim Gray defined these properties of a reliable transaction system in the late 1970s and developed technologies to achieve them automatically.</p>
        <p>In 1983, Andreas Reuter and Theo Härder coined the acronym ACID to describe them.</p>

        <h2>Atomicity</h2>
        <p>Atomicity requires that each transaction is "all or nothing": if one part of the transaction fails, the entire transaction fails, and the database state is left unchanged.</p>
        <p>An atomic system must guarantee atomicity in each and every situation, including power failures, errors, and crashes.</p>
        <p>To the outside world, a committed transaction appears (by its effects on the database) to be indivisible ("atomic"), and an aborted transaction does not happen.</p>

        <h2>Consistency</h2>
        <p>The consistency property ensures that any transaction will bring the database from one valid state to another.</p>
        <p>Any data written to the database must be valid according to all defined rules, including but not limited to constraints, cascades, triggers, and any combination thereof.</p>
        <p>This does not guarantee correctness of the transaction in all ways the application programmer might have wanted (that is the responsibility of application-level code) but merely that any programming errors do not violate any defined rules.</p>

        <h2>Isolation</h2>
        <p>The isolation property ensures that the concurrent execution of transactions results in a system state that would be obtained if transactions were executed serially, i.e. one after the other.</p>
        <p>Providing isolation is the main goal of concurrency control.</p>
        <p>Depending on concurrency control method, the effects of an incomplete transaction might not even be visible to another transaction.</p>

        <h2>Durability</h2>
        <p>Durability means that once a transaction has been committed, it will remain so, even in the event of power loss, crashes, or errors.</p>
        <p>In a relational database, for instance, once a group of <?php echo $this->stencil->addLink('SQL', 'DB'); ?> statements execute, the results need to be stored permanently (even if the database crashes immediately thereafter).</p>
        <p>To defend against power loss, transactions (or their effects) must be recorded in a non-volatile memory.</p>
    </div>
</div>