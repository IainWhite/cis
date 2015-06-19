<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('CFML - ColdFusion Markup Language'); ?>
        <p><strong>ColdFusion Markup Language</strong>, more commonly known as <strong>CFML</strong>, is a scripting language for web development that runs on the <?php echo $this->stencil->addLink('JVM', 'LJ'); ?>, the <?php echo $this->stencil->addLink('.NET Framework', 'L'); ?>, and Google App Engine.</p>
        <p>In its simplest form, like many other web scripting languages CFML augments standard <?php echo $this->stencil->addLink('HTML', 'WD'); ?> files with database commands, conditional operators, high-level formatting functions, and other elements to produce web applications.</p>
        <p>CFML also includes numerous other constructs including ColdFusion Components (CFCs), CFML's version of objects, that allow for separation of business logic from presentation.</p>
        <p>CFML can be written using either tags or CFScript, which is an ECMAscript style language.</p>
        <p>The pages in a CFML application include the server-side CFML tags and functions in addition to HTML tags, and modern CFML applications also tend to have CFCs that are accessed by the CFML pages for executing business logic.</p>
        <p>When a web browser requests a page in a ColdFusion application, it is automatically pre-processed by the ColdFusion application server.</p>
        <p>CFML can also be used to generate other languages, aside from HTML, such as <?php echo $this->stencil->addLink('XML', 'WD'); ?>, <?php echo $this->stencil->addLink('JavaScript', 'L'); ?>, <?php echo $this->stencil->addLink('CSS', 'WD'); ?>, and so on.</p>
        <p>Despite the name, CFML is not a mark-up language. It is also not SGML, since certain core CFML features prevent it from complying.</p>
        <p>The CFML engine is configured in such a way that certain file extensions on the server (.cfm, .cfc) are handed off to the CFML engine for processing.</p>
        <p>The CFML engine only processes CFML tags and functions; it returns text outside of CFML tags and functions to the web server unchanged.</p>
    </div>
</div>
