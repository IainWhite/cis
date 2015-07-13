<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Apache Tomcat'); ?>
        <p><strong>Apache Tomcat</strong> (or simply <strong>Tomcat</strong>, formerly <strong>Jakarta Tomcat</strong>) is an open source <?php echo $this->stencil->addLink('Web Server', 'WD'); ?> and servlet container developed by the <?php echo $this->stencil->addLink('Apache Software Foundation', 'C'); ?> (ASF).</p>
        <p>Tomcat implements the <?php echo $this->stencil->addLink('Java', 'L'); ?> Servlet and the <strong>JavaServer Pages (<?php echo $this->stencil->addLink('JSP', 'L'); ?>)</strong> specifications from <?php echo $this->stencil->addLink('Sun Microsystems', 'C'); ?>, and provides a "pure Java" <?php echo $this->stencil->addLink('HTTP', 'IPA'); ?> web server environment for Java code to run in.</p>
        <p>In the simplest config Tomcat runs in a single operating system process. The process runs a Java virtual machine (<?php echo $this->stencil->addLink('JVM', 'LJ'); ?>).</p>
        <p>Every single HTTP request from a browser to Tomcat is processed in the Tomcat process in a separate thread.</p>
    </div>
</div>
