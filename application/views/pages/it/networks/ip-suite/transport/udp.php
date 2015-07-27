<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('UDP - User Datagram Protocol'); ?>
        <p>The <strong>User Datagram Protocol</strong> (<strong>UDP</strong>) is one of the core members of the <?php echo $this->stencil->addLink('Internet protocol suite', 'ITN'); ?> (the set of network protocols used for the <?php echo $this->stencil->addLink('Internet', 'ITN'); ?>).</p>
        <p>With UDP, computer applications can send messages, in this case referred to as datagrams, to other hosts on an <strong>Internet Protocol (<?php echo $this->stencil->addLink('IP', 'IPA'); ?>)</strong> network without prior communications to set up special transmission channels or data paths.</p>
        <p>The protocol was designed by David P. Reed in 1980 and formally defined in <?php echo $this->stencil->addRFCLink('768'); ?>.</p>
        <p>UDP uses a simple transmission model with a minimum of protocol mechanism. It has no handshaking dialogues, and thus exposes any unreliability of the underlying network protocol to the user's program.</p>
        <p>As this is normally IP over unreliable media, there is no guarantee of delivery, ordering, or duplicate protection. UDP provides checksums for data integrity, and port numbers for addressing different functions at the source and destination of the datagram.</p>
        <p>UDP is suitable for purposes where error checking and correction is either not necessary or performed in the application, avoiding the overhead of such processing at the network interface level.</p>
        <p>Time sensitive applications often use UDP because dropping packets is preferable to waiting for delayed packets, which may not be an option in a real-time system.</p>
        <p>If error correction facilities are needed at the network interface level, an application may use the <strong>Transmission Control Protocol (<?php echo $this->stencil->addLink('TCP', 'IPA'); ?>)</strong> which is designed for this purpose.</p>
    </div>
</div>