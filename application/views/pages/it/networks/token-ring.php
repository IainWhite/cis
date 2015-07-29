<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Token Ring Local Area Network'); ?>
        <p><strong>Token Ring Local Area Network</strong> (<?php echo $this->stencil->addLink('LAN', 'ITN'); ?>) technology is a protocol which resides at the data link layer of the <?php echo $this->stencil->addLink('OSI model', 'ITN'); ?>.</p>
        <p>It used a special three byte frame called a token that travels around the ring. Token possession grants the possessor permission to transmit on the medium. Token ring frames travel completely around the loop.</p>
        <p>Initially used only in <?php echo $this->stencil->addLink('IBM', 'C'); ?> computers, it was eventually standardized with protocol <?php echo $this->stencil->addLink('IEEE', 'C'); ?> 802.5.</p>
        <p>The data transmission process goes as follows:</p>
        <ul>
            <li>Empty information frames are continuously circulated on the ring.</li>
            <li>When a computer has a message to send, it seizes the token. The computer will then be able to send the frame.</li>
            <li>The frame is then examined by each successive workstation. The workstation that identifies itself to be the destination for the message copies it from the frame and changes the token back to 0.</li>
            <li>When the frame gets back to the originator, it sees that the token has been changed to 0 and that the message has been copied and received. It removes the message from the frame.</li>
            <li>The frame continues to circulate as an "empty" frame, ready to be taken by a workstation when it has a message to send.</li>
        </ul>
    </div>
</div>