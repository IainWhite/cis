<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Wireless Transport Layer Security (WTLS)'); ?>
        <p><strong>Wireless Transport Layer Security (WTLS)</strong> is a security protocol, part of the <strong>Wireless Application Protocol (<?php echo $this->stencil->addLink('WAP', 'ITN'); ?>)</strong> stack. It sits between the <?php echo $this->stencil->addLink('WTP', 'WAP'); ?> and <?php echo $this->stencil->addLink('WTP', 'WAP'); ?> layers in the WAP communications stack.</p>
        <p>WTLS is derived from <?php echo $this->stencil->addLink('TLS', 'IPA'); ?>. WTLS uses similar semantics adapted for a low bandwidth mobile device. The main changes are...</p>
        <ul>
            <li>Compressed data structures - Where possible packet sizes are reduced by using bit-fields, discarding redundancy and truncating some cryptographic elements.</li>
            <li>New certificate format - WTLS defines a compressed certificate format. This broadly follows the X.509 v3 certificate structure, but uses smaller data structures.</li>
            <li>Packet based design - TLS is designed for use over a data stream. WTLS adapts that design to be more appropriate on a packet based network. A significant amount of the design is based on a requirement that it be possible to use a packet network such as SMS as a data transport.</li>
        </ul>
        <p>WTLS has been superseded in the WAP Wireless Application Protocol 2.0 standard by the End-to-end Transport Layer Security Specification.</p>
    </div>
</div>