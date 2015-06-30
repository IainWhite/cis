<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Same Origin Policy'); ?>
        <p>The <strong>same origin policy</strong> is an important concept in the web application security model.</p>
        <p>The policy permits scripts running on pages originating from the same site - a combination of scheme, hostname, and port number - to access each other's <?php echo $this->stencil->addLink('DOM', 'WD'); ?> with no specific restrictions, but prevents access to DOM on different sites.</p>
        <p>The same-origin policy also applies to <?php echo $this->stencil->addLink('XMLHttpRequest', 'WD'); ?> and to <?php echo $this->stencil->addLink('WebSockets', 'WD'); ?>.</p>
        <p>This mechanism bears a particular significance for modern web applications that extensively depend on <?php echo $this->stencil->addLink('HTTP cookies', 'WD'); ?> to maintain authenticated user sessions, as servers act based on the HTTP cookie information to reveal sensitive information or take state-changing actions.</p>
        <p>A strict separation between content provided by unrelated sites must be maintained on the client side to prevent the loss of data confidentiality or integrity.</p>
    </div>
</div>