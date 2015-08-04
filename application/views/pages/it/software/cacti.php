<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Cacti'); ?>
        <p><strong>Cacti</strong> is an open-source, web based network monitoring and graphing tool designed as a front-end application for the open-source, industry standard data logging tool <strong>RRDtool</strong>.</p>
        <p>Cacti allows a user to poll services at predetermined intervals and graph the resulting data. It is generally used to graph time series data of metrics such as CPU load and network bandwidth utilization.</p>
        <p>A common usage is to monitor network traffic by polling a network switch or router interface via simple network management protocol (<strong>SNMP</strong>).</p>
        <p>The front end can handle multiple users, each with their own graph sets, so it is sometimes used by web hosting providers to display bandwidth statistics for their customers. It can be used to configure the data collection itself, allowing certain setups to be monitored without any manual configuration of RRDtool.</p>
        <p>Cacti can be extended to monitor any source via shell scripts and executables.</p>
        <p>Cacti can use one of two back ends: <strong>cmd.php</strong> a <?php echo $this->stencil->addLink('PHP', 'L'); ?> script suitable for smaller installations, or <strong>Spine</strong> (formerly <strong>Cactid</strong>), a <?php echo $this->stencil->addLink('C', 'L'); ?> based poller which can scale to thousands of hosts.</p>
        <p>Cacti website: <?php echo $this->stencil->addExternalLink('www.cacti.net', 'http://www.cacti.net/'); ?></p>
    </div>
</div>