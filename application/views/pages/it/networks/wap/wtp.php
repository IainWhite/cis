<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Wireless Transaction Protocol (WTP)'); ?>
        <p><strong>Wireless Transaction Protocol (WTP)</strong> is a standard used in mobile telephony. It is a layer of the <strong>Wireless Application Protocol (<?php echo $this->stencil->addLink('WAP', 'ITN'); ?>)</strong> that is intended to bring Internet access to mobile phones. WTP provides functions to similar to <?php echo $this->stencil->addLink('TCP', 'IPA'); ?>, except that WTP has reduced amount of information needed for each transaction (e.g. does not include a provision for rearranging out-of-order packets). WTP runs on top of UDP and performs many of the same tasks as TCP but in a way optimised for wireless devices, which saves processing and memory cost as compared to TCP.</p>
        <p>It Supports 3 types of transaction:</p>
        <ol>
            <li>Unreliable One-Way Request</li>
            <li>Reliable One-Way Request</li>
            <li>Reliable Two-Way request</li>
        </ol>
    </div>
</div>