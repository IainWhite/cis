<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('XMLHttpRequest'); ?>
        <p><strong>XMLHttpRequest</strong> (<strong>XHR</strong>) is an <?php echo $this->stencil->addLink('API', 'IT'); ?> available to web browser scripting languages such as <?php echo $this->stencil->addLink('JavaScript', 'L'); ?>.</p>
        <p>It is used to send <?php echo $this->stencil->addLink('HTTP', 'IP'); ?> or <?php echo $this->stencil->addLink('HTTPS', 'IP'); ?> requests to a web server and load the server response data back into the script.</p>
        <p>The name was standardized to XMLHttpRequest for compatibility.</p>
        <p>It may be misleading, in particular because any textual data may be received from the server, not just <?php echo $this->stencil->addLink('XML', 'WD'); ?>. Data are also commonly received as <?php echo $this->stencil->addLink('JSON', 'WD'); ?>, <?php echo $this->stencil->addLink('HTML', 'WD'); ?>, or as plain text.</p>
        <p>Data from the response can be used to alter the current document in the browser window without loading a new web page.</p>
        <p>The response data can also be evaluated by client-side scripting.</p>
        <p>For example, if it was formatted as JSON by the web server, it can be converted into a client-side data object for further use.</p>
        <p>XMLHttpRequest has an important role in the <?php echo $this->stencil->addLink('AJAX', 'WD'); ?> web development technique. It is currently used by many websites to implement responsive and dynamic web applications.</p>
        <p>XMLHttpRequest is subject to the browser's <?php echo $this->stencil->addLink('same origin policy', 'WD'); ?>: for security reasons, requests will only succeed if they are made to the same server that served the original web page.</p>
    </div>
</div>