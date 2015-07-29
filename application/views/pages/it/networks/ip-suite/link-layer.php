<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Link Layer'); ?>
        <p>The <strong>link layer</strong> has the networking scope of the local network connection to which a host is attached.</p>
        <p>This regime is called the link in <?php echo $this->stencil->addLink('TCP/IP', 'ITN'); ?> literature.</p>
        <p>It is the lowest component layer of the Internet protocols, as TCP/IP is designed to be hardware independent. As a result TCP/IP may be implemented on top of virtually any hardware networking technology.</p>
        <p>The link layer is used to move packets between the Internet layer interfaces of two different hosts on the same link.</p>
        <p>The processes of transmitting and receiving packets on a given link can be controlled both in the software device driver for the network card, as well as on firmware or specialized chipsets.</p>
        <p>These perform data link functions such as adding a packet header to prepare it for transmission, then actually transmit the frame over a physical medium.</p>
        <p>The TCP/IP model includes specifications of translating the network addressing methods used in the Internet Protocol to data link addressing, such as Media Access Control (MAC).</p>
        <p>All other aspects below that level, however, are implicitly assumed to exist in the link layer, but are not explicitly defined.</p>
    </div>
</div>