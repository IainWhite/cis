<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Apache Ant'); ?>
        <p><strong>Apache Ant</strong> is a software tool for automating software build processes. It is similar to <?php echo $this->stencil->addLink('Make', 'SD'); ?> but is implemented using the <?php echo $this->stencil->addLink('Java', 'L'); ?> language, requires the Java platform, and is best suited to building Java projects.</p>
        <p>The most immediately noticeable difference between Ant and Make is that Ant uses <?php echo $this->stencil->addLink('XML', 'WD'); ?> to describe the build process and its dependencies, whereas Make uses <code>Makefile</code> format. By default the XML file is named <code>build.xml</code>.</p>
        <p>Ant ("<strong>Another Neat Tool</strong>") was conceived by <strong>James Duncan Davidson</strong> while preparing <?php echo $this->stencil->addLink('Sun', 'C'); ?>'s reference <?php echo $this->stencil->addLink('JSP', 'L'); ?> / Servlet engine, later <?php echo $this->stencil->addLink('Apache Tomcat', 'WS'); ?>, for release as open source. A proprietary version of make was used to build it on the <?php echo $this->stencil->addLink('Solaris', 'OS'); ?> Operating Environment, but in the open source world there was no way of controlling which platform was used to build Tomcat; so Ant was created as a simple platform-independent tool to build Tomcat from directives in an XML "build file”.</p>
        <p>Ant (version 1.1) was officially released as a stand-alone product on 19 July 2000.</p>
        <p>Because Ant made it trivial to integrate <?php echo $this->stencil->addLink('JUnit', 'LJ'); ?> tests with the build process, Ant made it easy for willing developers to adopt Test Driven Development (<?php echo $this->stencil->addLink('TDD', 'PMA'); ?>), and even <?php echo $this->stencil->addLink('Exstream Proframminh', 'PMA'); ?>.</p>
    </div>
</div>
