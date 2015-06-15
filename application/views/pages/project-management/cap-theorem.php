<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('CAP Theorem'); ?>
        <p><strong>CAP Theorem</strong>, also known as <strong>Brewer's Theorem</strong>, states that it is impossible for a distributed computer system to simultaneously provide all three of the following guarantees:</p>
        <ul>
            <li><strong>Consistency</strong> (all nodes see the same data at the same time)</li>
            <li><strong>Availability</strong> (a guarantee that every request receives a response about whether it was successful or failed)</li>
            <li><strong>Partition tolerance</strong> (the system continues to operate despite arbitrary message loss or failure of part of the system)</li>
        </ul>
        <p>According to the theorem, a distributed system cannot satisfy all three of these guarantees at the same time.</p>
        <p>The theorem began as a conjecture made by University of California, Berkeley computer scientist <?php echo $this->stencil->addLink('Eric Brewer', 'P'); ?> at the 2000 Symposium on Principles of Distributed Computing (PODC).</p>
        <p>In 2002, Seth Gilbert and Nancy Lynch of MIT published a formal proof of Brewer's conjecture, rendering it a theorem.</p>
        <p>The proof of the CAP theorem by Gilbert and Lynch is a bit narrower than that which Brewer had in mind.</p>
        <p>The theorem sets up a scenario in which a replicated service is presented with two conflicting requests arriving at distinct locations at a time when a link between them is failed.</p>
        <p>The obligation to provide availability despite partitioning failures leads the services to respond; at least one of these responses shall necessarily be inconsistent with what a service implementing a true one-copy replication semantic would have done.</p>
        <p>In May 2012 Brewer clarified some of his positions, including why the oft-used "two out of three" concept can be misleading or misapplied, and the different definition of consistency used in CAP relative to the one used in <?php echo $this->stencil->addLink('ACID', 'DB'); ?>.</p>
    </div>
</div>