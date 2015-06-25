<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Blink Layout Engine'); ?>
        <p><strong>Blink</strong> is a web browser <?php echo $this->stencil->addLink('layout engine', 'WD'); ?> developed as part of the <?php echo $this->stencil->addLink('Chromium', 'WB'); ?> project by <?php echo $this->stencil->addLink('Google', 'C'); ?> with contributions from Opera Software ASA and others.</p>
        <p>It was first announced in April 2013.</p>
        <p>It is a fork of the <strong>WebCore</strong> component of <?php echo $this->stencil->addLink('WebKit', 'web-development/layout-engines'); ?> and is used in <?php echo $this->stencil->addLink('Chrome', 'WB'); ?> starting at version 28, <?php echo $this->stencil->addLink('Opera', 'WB'); ?> (15+) and other Chromium based browsers as well as Android's (4.4+) WebView and Qt's upcoming WebEngine.</p>
        <p>While Chrome's version of WebCore followed its development, a large amount of its code was dedicated to enabling features which Chrome does not use (such as its sandboxing and multi-process model in WebKit2, which differs from Chrome's implementation).</p>
        <p>The fork would allow developers to simplify the codebase by removing unneeded code, while also giving them greater flexibility in adding new features.</p>
        <p>Additionally, the fork will also deprecate vendor prefixes; experimental functionality will instead be enabled on an opt-in basis.</p>
        <p>Aside from these planned changes, Blink currently remains relatively similar to WebCore.</p>
        <p>Blink's naming was influenced by the non-standard presentational <code>blink</code> <?php echo $this->stencil->addLink('HTML', 'WD'); ?> tag, which was introduced by <?php echo $this->stencil->addLink('Netscape Navigator', 'WB'); ?>, and supported by <?php echo $this->stencil->addLink('Presto', 'web-development/layout-engines'); ?> and <?php echo $this->stencil->addLink('Gecko', 'web-development/layout-engines'); ?> based browsers until August 2013.</p>
    </div>
</div>