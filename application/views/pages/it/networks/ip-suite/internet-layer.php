<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Internet Layer'); ?>
        <p>The <strong>internet layer</strong> has the responsibility of sending packets across potentially multiple networks.</p>
        <p>Internetworking requires sending data from the source network to the destination network. This process is called routing.</p>
        <p>The Internet Protocol performs two basic functions:</p>
        <ul>
            <li>Host addressing and identification: This is accomplished with a hierarchical IP <?php echo $this->stencil->addLink('IP addressing', 'ITN'); ?> system.</li>
            <li>Packet routing: This is the basic task of sending packets of data (datagrams) from source to destination by forwarding them to the next network router closer to the final destination.</li>
        </ul>
    </div>
</div>