<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Stackdriver'); ?>
        <p><strong>Stackdriver</strong> is a cloud computing systems management firm based in Boston, Massachusetts. They aim to help DevOps manage large, distributed applications running in the public cloud. It visualizes application, system and infrastructure metrics and also provides a policy system to alert users when predefined thresholds are breached.</p>
        <p>The aim of <strong>Stackdriver Intelligent Monitoring</strong> is to improve the performance and availability of large, complex applications running in the public cloud. To that end, it provides metrics detailing every layer of the 'stack' in the form of charts and graphs, while also allowing users to receive alerts when these metrics breach normal levels.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <p>Stackdriver's features include:</p>
            <ul>
                <li>Compatible with <?php echo $this->stencil->addLink('AWS', 'IT'); ?> and <?php echo $this->stencil->addLink('Rackspace', 'IT'); ?></li>
                <li>Supporting application, system and infrastructure level metrics ('<strong>Full Stack Monitoring</strong>')</li>
                <li>Interactive colored graphs and charts of data</li>
                <li>Create and customize groups and dashboards</li>
                <li>Input custom metrics</li>
                <li>Receive alerts when there are anomalies</li>
            </ul>
        </div>
    </div>
<?php endif; ?>