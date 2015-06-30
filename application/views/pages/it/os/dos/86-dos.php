<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('86-DOS'); ?>
        <p><strong>86-DOS</strong> was an operating system developed and marketed by <strong>Seattle Computer Products (SCP)</strong> for its <?php echo $this->stencil->addLink('Intel 8086', 'CPU'); ?> based computer kit. Initially known as <strong>QDOS</strong> (<strong>Quick and Dirty Operating System</strong>) the name was changed to 86-DOS once SCP started licensing the operating system in 1980.</p>
        <p>86-DOS had a command structure and application programming interface that imitated that of Digital Research's <?php echo $this->stencil->addLink('CP/M', 'OS'); ?> operating system, which made it easy to port programs from the latter. The system was purchased by <?php echo $this->stencil->addLink('Microsoft', 'C'); ?> and developed further as <?php echo $this->stencil->addLink('MS-DOS', 'DOS'); ?> and <?php echo $this->stencil->addLink('PC DOS', 'DOS'); ?>.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h3>86-DOS Versions</h3>
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th>Version</th>
                    <th>Release date</th>
                </tr>
                <tr><td>QDOS 0.10</td><td>07/1980</td></tr>
                <tr><td>QDOS 0.11</td><td>08/1980</td></tr>
                <tr><td>QDOS / 86-DOS 0.2</td><td>08/1980</td></tr>
                <tr><td>86-DOS 0.3</td><td>11/1980</td></tr>
                <tr><td>86-DOS 0.33</td><td>12/1980</td></tr>
                <tr><td>86-DOS 0.34</td><td>12/1980</td></tr>
                <tr><td>86-DOS 0.42</td><td>02/1981</td></tr>
                <tr><td>86-DOS 0.56</td><td>03/1981</td></tr>
                <tr><td>86-DOS 0.60</td><td>03/1981</td></tr>
                <tr><td>86-DOS 0.74</td><td>04/1981</td></tr>
                <tr><td>86-DOS 0.75</td><td>04/1981</td></tr>
                <tr><td>86-DOS 0.76</td><td>04/1981</td></tr>
                <tr><td>86-DOS 0.80</td><td>04/1981</td></tr>
                <tr><td>86-DOS 1.00</td><td>04/1981</td></tr>
                <tr><td>86-DOS 1.01</td><td>05/1981</td></tr>
                <tr><td>86-DOS 1.10</td><td>07/1981</td></tr>
                <tr><td>86-DOS 1.14</td><td>10/1981</td></tr>
            </table>
        </div>
    </div>
<?php endif; ?>