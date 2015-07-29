<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Transport Layer'); ?>
        <p>The <strong>transport layer</strong> establishes a basic data channel that an application uses in its task specific data exchange.</p>
        <p>The layer establishes process-to-process connectivity, meaning it provides end-to-end services that are independent of the structure of user data and the logistics of exchanging information for any particular specific purpose.</p>
        <p>Its responsibility includes end-to-end message transfer independent of the underlying network, along with error control, segmentation, flow control, congestion control, and application addressing (port numbers).</p>
        <p>End to end message transmission or connecting applications at the transport layer can be categorized as either connection oriented, implemented in <?php echo $this->stencil->addLink('TCP', 'IPT'); ?>, or connectionless, implemented in <?php echo $this->stencil->addLink('UDP', 'IPT'); ?>.</p>
        <p>For the purpose of providing process-specific transmission channels for applications, the layer establishes the concept of the port. This is a numbered logical construct allocated specifically for each of the communication channels an application needs.</p>
        <p>For many types of services, these port numbers have been standardized so that client computers may address specific services of a server computer without the involvement of service announcements or directory services.</p>
        <p>Because IP provides only a best effort delivery, some transport layer protocols offer reliability.</p>
        <p>However, IP can run over a reliable data link protocol such as the High-Level Data Link Control (HDLC).</p>
        <p>For example, the TCP is a connection-oriented protocol that addresses numerous reliability issues in providing a reliable byte stream:</p>
        <ul>
            <li>Data arrives in-order</li>
            <li>Data has minimal error</li>
            <li>Duplicate data is discarded</li>
            <li>Lost or discarded packets are resent</li>
            <li>Includes traffic congestion control</li>
        </ul>
    </div>
</div>