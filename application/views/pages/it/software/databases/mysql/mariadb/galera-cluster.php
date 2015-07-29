<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Galera Cluster'); ?>
        <p><strong>MariaDB Galera Cluster</strong> is a synchronous multi-master cluster for <?php echo $this->stencil->addLink('MariaDB', 'DB'); ?>.</p>
        <br />
        <p><strong>Official Galera website:</strong> <?php echo $this->stencil->addExternalLink('codership.com/content/using-galera-cluster', 'https://codership.com/content/using-galera-cluster'); ?></p>

        <h2>Features</h2>
        <ul>
            <li>Synchronous replication.</li>
            <li>Active-active multi-master topology.</li>
            <li>Read and write to any cluster node.</li>
            <li>Automatic membership control, failed nodes drop from the cluster.</li>
            <li>Automatic node joining.</li>
            <li>True parallel replication, on row level.</li>
            <li>Direct client connections, native <?php echo $this->stencil->addLink('MySQL', 'DB'); ?> look and feel.</li>
        </ul>

        <h2>Benefits</h2>
        <p>The above features yield several benefits for a DBMS clustering solution, including:</p>
        <ul>
            <li>No slave lag.</li>
            <li>No lost transactions.</li>
            <li>Both read and write scalability.</li>
            <li>Smaller client latencies.</li>
        </ul>
    </div>
</div>