<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Fully Qualified Domain Name (FQDN)'); ?>
        <p>A <strong>fully qualified domain name (FQDN)</strong>, sometimes also referred to as an absolute domain name, is a domain name that specifies its exact location in the tree hierarchy of the <strong>Domain Name System (<?php echo $this->stencil->addLink('DNS', 'IPA'); ?>)</strong>. It specifies all domain levels, including the <?php echo $this->stencil->addLink('top-level domain', 'ITN'); ?> and the root zone. A fully qualified domain name is distinguished by its lack of ambiguity: it can be interpreted only in one way.</p>
        <p>The DNS root domain is unnamed, which is expressed by the empty label, resulting in a fully qualified domain name ending with the dot character.</p>
        <p>In contrast to a domain name that is fully specified, a domain name that does not include the full path of labels up to the DNS root, is often call a partially qualified domain name.</p>
    </div>
</div>