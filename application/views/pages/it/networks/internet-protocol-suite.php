<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('TCP/IP'); ?>
        <p>The <strong>Internet protocol</strong> suite is the networking model and a group of communications protocols used for the <?php echo $this->stencil->addLink('Internet', 'ITN'); ?> and similar networks.</p>
        <p>It is commonly known as <strong>TCP/IP</strong>, because its most important protocols, the <strong>Transmission Control Protocol</strong> (<?php echo $this->stencil->addLink('TCP', 'IPA'); ?>) and the <strong>Internet Protocol</strong> (<?php echo $this->stencil->addLink('IP', 'IP'); ?>), were the first networking protocols defined in this standard.</p>
        <p>It is occasionally known as the DoD model, because the development of the networking model was funded by DARPA, an agency of the United States Department of Defence.
        <p>TCP/IP provides end-to-end connectivity specifying how data should be formatted, addressed, transmitted, routed and received at the destination.</p>
        <p>This functionality has been organized into four abstraction layers which are used to sort all related protocols according to the scope of networking involved.</p>
        <p>From lowest to highest, the layers are the <?php echo $this->stencil->addLink('link layer', 'IP'); ?>, containing communication technologies for a single network segment (link), the <?php echo $this->stencil->addLink('internet layer', 'IP'); ?>, connecting hosts across independent networks, thus establishing internet working, the <?php echo $this->stencil->addLink('transport layer', 'IP'); ?> handling host-to-host communication, and the <?php echo $this->stencil->addLink('application layer', 'IP'); ?>, which provides process-to-process application data exchange.</p>
        <p>The TCP/IP model and related protocols are maintained by the <strong>Internet Engineering Task Force</strong> (<?php echo $this->stencil->addLink('IETF', 'C'); ?>).</p>
    </div>
</div>