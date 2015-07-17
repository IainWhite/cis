<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('MAC Address'); ?>
        <p>A <strong>Media Access Control address (MAC address)</strong> is a unique identifier assigned to network interfaces for communications on the physical network segment. MAC addresses are used as a network address for most IEEE 802 network technologies, including <?php echo $this->stencil->addLink('Ethernet', 'ITN'); ?> and <?php echo $this->stencil->addLink('WiFi', 'ITN'); ?>. Logically, MAC addresses are used in the media access control protocol sublayer of the OSI reference model.</p>
        <p>MAC addresses are most often assigned by the manufacturer of a <strong>network interface controller (NIC)</strong> and are stored in its hardware, such as the card's read-only memory or some other firmware mechanism. If assigned by the manufacturer, a MAC address usually encodes the manufacturer's registered identification number and may be referred to as the burned-in address (BIA). It may also be known as an <strong>Ethernet hardware address (EHA)</strong>, hardware address or physical address. This can be contrasted to a programmed address, where the host device issues commands to the NIC to use an arbitrary address.</p>
        <p>A network node may have multiple NICs and each NIC must have a unique MAC address.</p>
        <p>MAC addresses are formed according to the rules of one of three numbering name spaces managed by the <strong>Institute of Electrical and Electronics Engineers (<?php echo $this->stencil->addLink('IEEE', 'C'); ?>)</strong>: MAC-48, EUI-48, and EUI-64. The IEEE claims trademarks on the names EUI-48 and EUI-64, in which <strong>EUI</strong> is an abbreviation for <strong>Extended Unique Identifier</strong>.</p>
    </div>
</div>