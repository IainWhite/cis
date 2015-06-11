<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Telnet'); ?>
        <p><strong>Telnet</strong> is a network protocol used on the <?php echo $this->stencil->addLink('Internet', '/it/networks'); ?> or local area networks to provide a bidirectional interactive text-oriented communication facility using a virtual terminal connection.</p>
        <p>User data is interspersed in-band with Telnet control information in an 8-bit byte oriented data connection over the <strong>Transmission Control Protocol</strong> (<?php echo $this->stencil->addLink('TCP', '/it/networks/internet-protocol-suite/transfer'); ?>).</p>
        <p>Historically, Telnet provided access to a Command-Line Interface (usually, of an operating system) on a remote host.</p>
        <p>Most network equipment and operating systems with a TCP/IP stack support a Telnet service for remote configuration. However, because of serious security issues when using Telnet over an open network such as the Internet, its use for this purpose has waned significantly in favour of <?php echo $this->stencil->addLink('SSH', '/it/networks/internet-protocol-suite/application'); ?>.</p>
    </div>
</div>