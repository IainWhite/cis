<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('IP Address'); ?>
        <p>An <strong>Internet Protocol address</strong> (<strong>IP address</strong>) is a numerical label assigned to each device (e.g., computer, printer) participating in a computer network that uses the <strong>Internet Protocol (<?php echo $this->stencil->addLink('IP', 'ITN'); ?>)</strong> for communication.</p>
        <p>An IP address serves two principal functions: host or network interface identification and location addressing.</p>
        <p>Its role has been characterized as follows: "<em>A name indicates what we seek. An address indicates where it is. A route indicates how to get there</em>".</p>
        <p>The designers of the Internet Protocol defined an IP address as a <?php echo $this->stencil->addLink('32-bit', 'IT'); ?> number consisting of 4 <?php echo $this->stencil->addLink('octets', 'IT'); ?> and this system, known as <strong>Internet Protocol Version 4 (<?php echo $this->stencil->addLink('IPv4', 'ITN'); ?>)</strong>, is still in use today.</p>
        <p>However, due to the enormous growth of the <?php echo $this->stencil->addLink('Internet', 'ITN'); ?> and the predicted depletion of available addresses, a new version of IP (<?php echo $this->stencil->addLink('IPv6', 'ITN'); ?>), using 128 bits for the address, was developed in 1995.</p>
        <p>IPv6 was standardized as <?php echo $this->stencil->addRFCLink('2460'); ?> in 1998, and its deployment has been ongoing since the mid 2000s.</p>
        <p>IP addresses are binary numbers, but they are usually stored in text files and displayed in human-readable notations, such as <code>172.16.254.1</code> (for IPv4), and <code>2001:db8:0:1234:0:567:8:1</code> (for IPv6).</p>
        <p>The <strong>Internet Assigned Numbers Authority (<?php echo $this->stencil->addLink('IANA', 'C'); ?>)</strong> manages the IP address space allocations globally and delegates five <strong>regional Internet registries (<?php echo $this->stencil->addLink('RIRs', 'C'); ?>)</strong> to allocate IP address blocks to local Internet registries (Internet service providers) and other entities.</p>
    </div>
</div>