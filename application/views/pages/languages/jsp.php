<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('JSP - JavaServer Pages'); ?>
        <p><strong>JavaServer Pages</strong> (<strong>JSP</strong>) is a technology that helps software developers create dynamically generated web pages based on <?php echo $this->stencil->addLink('HTML', 'WD'); ?>, <?php echo $this->stencil->addLink('XML', 'WD'); ?>, or other document types.</p>
        <p>Released in 1999 by <?php echo $this->stencil->addLink('Sun Microsystems', 'C'); ?>, JSP is similar to <?php echo $this->stencil->addLink('PHP', 'L'); ?>, but it uses the <?php echo $this->stencil->addLink('Java', 'L'); ?> programming language.</p>
        <p>To deploy and run JavaServer Pages, a compatible <?php echo $this->stencil->addLink('Web server', 'WD'); ?> with a servlet container, such as <?php echo $this->stencil->addLink('Apache Tomcat', 'WS'); ?> or <?php echo $this->stencil->addLink('Jetty', 'WS'); ?>, is required.</p>
        <p>Architecturally, JSP may be viewed as a high-level abstraction of Java servlets.</p>
        <p>JSPs are translated into servlets at runtime; each JSP servlet is cached and re-used until the original JSP is modified.</p>
        <p>JSP can be used independently or as the view component of a server-side model–view–controller design, normally with JavaBeans as the model and Java servlets (or a framework such as Apache Struts) as the controller.</p>
        <p>JSP allows Java code and certain pre-defined actions to be interleaved with static web mark-up content, with the resulting page being compiled and executed on the server to deliver a document.</p>
        <p>The compiled pages, as well as any dependent Java libraries, use Java bytecode rather than a native software format.</p>
        <p>Like any other Java program, they must be executed within a Java virtual machine (<?php echo $this->stencil->addLink('JVM', 'LJ'); ?>) that integrates with the server's host operating system to provide an abstract platform-neutral environment.</p>
        <p>The Web container creates JSP implicit objects like pageContext, servletContext, session, request &amp; response.</p>
    </div>
</div>
