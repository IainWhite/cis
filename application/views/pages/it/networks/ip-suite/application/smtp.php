<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('SMTP - Simple Mail Transfer Protocol'); ?>
        <p><strong>Simple Mail Transfer Protocol</strong> (<strong>SMTP</strong>) is an Internet standard for electronic mail (<?php echo $this->stencil->addLink('email', 'WD'); ?>) transmission.</p>
        <p>First defined by <?php echo $this->stencil->addRFCLink('821'); ?> in 1982, it was last updated in 2008 with the Extended SMTP additions by <?php echo $this->stencil->addRFCLink('5321'); ?> - which is the protocol in widespread use today.</p>
        <p>SMTP by default uses <?php echo $this->stencil->addLink('TCP', 'IPT'); ?> port 25. The protocol for mail submission is the same, but uses port 587. SMTP connections secured by <?php echo $this->stencil->addLink('SSL', 'IPA'); ?>, known as SMTPS, default to port 465.</p>
        <p>While electronic mail servers and other mail transfer agents use SMTP to send and receive mail messages, user-level client mail applications typically use SMTP only for sending messages to a mail server for relaying.</p>
        <p>For receiving messages, client applications usually use either the <?php echo $this->stencil->addLink('POP3', 'IPA'); ?> or the <?php echo $this->stencil->addLink('IMAP', 'IPA'); ?>.</p>
        <p>While proprietary systems (such as <?php echo $this->stencil->addLink('Microsoft Exchange', 'IT'); ?> and <?php echo $this->stencil->addLink('Lotus Notes', 'IT'); ?>) and webmail systems (such as <?php echo $this->stencil->addLink('Hotmail', 'URL'); ?> and <?php echo $this->stencil->addLink('GMail', 'URL'); ?>) use their own non-standard protocols to access mail box accounts on their own mail servers, all use SMTP when sending or receiving email from outside their own systems.</p>
    </div>
</div>