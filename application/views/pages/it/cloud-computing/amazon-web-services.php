<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('AWS - Amazon Web Services'); ?>
        <p><strong>Amazon Web Services</strong> (<strong>AWS</strong>) is a collection of remote computing services (also called web services) that together make up a cloud computing platform, offered over the Internet by Amazon.com. The most central and well known of these services are <strong>Amazon EC2</strong> and <strong>Amazon S3</strong>. The service is advertised as providing a large computing capacity (potentially many servers) much faster and cheaper than building a physical server farm.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Amazon Elastic Compute Cloud (EC2)</h2>
            <p><strong>Amazon Elastic Compute Cloud</strong> (<strong>EC2</strong>) is a central part of Amazon.com's cloud computing platform Amazon Web Services. EC2 allows users to rent virtual computers on which to run their own computer applications. EC2 allows scalable deployment of applications by providing a Web service through which a user can boot an Amazon Machine Image to create a virtual machine, which Amazon calls an "instance", containing any software desired. A user can create, launch, and terminate server instances as needed, paying by the hour for active servers, hence the term "elastic". EC2 provides users with control over the geographical location of instances that allows for latency optimization and high levels of redundancy.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Amazon Simple Storage Service (S3)</h2>
            <p><strong>Amazon S3</strong> (<strong>Simple Storage Service</strong>) is an online file storage web service offered by Amazon Web Services. Amazon S3 provides storage through web services interfaces (REST, SOAP, and BitTorrent). Amazon launched S3, its first publicly available web service, in the United States in March 2006 and in Europe in November 2007.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Amazon Redshift</h2>
            <p><strong>Amazon Redshift</strong> is a hosted data warehouse product which is part of the larger cloud computing platform Amazon Web Services. It was built on top of technology from Massive parallel processing (MPP) data warehouse vendor ParAccel. Redshift differs from Amazon's other hosted database offering Amazon RDS by being able to handle analytics workloads on large scale datasets.</p>
        </div>
    </div>

<?php endif; ?>