<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('IE - Internet Explorer'); ?>
        <p><strong>Internet Explorer</strong> (formerly <strong>Microsoft Internet Explorer</strong> and <strong>Windows Internet Explorer</strong>, commonly abbreviated <strong>IE</strong> or <strong>MSIE</strong>) is a series of graphical web browsers developed by <?php echo $this->stencil->addLink('Microsoft', 'C'); ?> and included as part of the <?php echo $this->stencil->addLink('Microsoft Windows', 'OS'); ?> line of operating systems, starting in 1995.</p>
        <p>The first version of Internet Explorer, (at that time named Microsoft Internet Explorer, later referred to as <strong>Internet Explorer 1</strong>) made its debut on 16 August 1995.</p>
        <p>It was a reworked version of <?php echo $this->stencil->addLink('Spyglass Mosaic', 'WB'); ?>, which Microsoft licensed from <?php echo $this->stencil->addLink('Spyglass Inc', 'C'); ?>, like many other companies initiating browser development.</p>
        <p>It was first released as part of the add-on package <strong>Plus! for <?php echo $this->stencil->addLink('Windows 95', 'WIN'); ?></strong> that year.</p>
        <p>Later versions were available as free downloads, or in service packs, and included in the <?php echo $this->stencil->addLink('OEM', 'IT'); ?> service releases of Windows 95 and later versions of Windows.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Favicon</h2>
            <p>Support for favicons was first added in <?php echo $this->stencil->addLink('Internet Explorer 5', 'IE'); ?>.</p>
            <p>Internet Explorer supports favicons in PNG, static GIF and native Windows icon formats.</p>
            <p><?php echo $this->stencil->addLink('Windows Vista', 'WIN'); ?> and later, Internet Explorer can display native Windows icons that have embedded PNG files.</p>

            <h2>Internet Explorer Versions</h2>
            <table class="table table-bordered table-hover table-striped">
                <tr><th>Version</th><th>Year</th><th>Included with</th><th>Also</th></tr>
                <tr><td><?php echo $this->stencil->addLink('IE1', 'IE'); ?></td><td>1995</td><td>Windows 95 Plus!</td><td></td></tr>
                <tr><td><?php echo $this->stencil->addLink('IE1.5', 'IE'); ?></td><td>1996</td><td>-</td><td></td></tr>
                <tr><td><?php echo $this->stencil->addLink('IE2', 'IE'); ?></td><td>1995</td><td>Windows 95 OSR1</td><td>Mac, IBM OS/2</td></tr>
                <tr><td><?php echo $this->stencil->addLink('IE3', 'IE'); ?></td><td>1996</td><td>Windows 95 OSR2</td><td>Mac, IBM OS/2</td></tr>
                <tr><td><?php echo $this->stencil->addLink('IE4', 'IE'); ?></td><td>1997</td><td>Windows 98</td><td>Mac, Unix HP-UX</td></tr>
                <tr><td>IE4.5</td><td>1999</td><td>-</td><td> Mac</td></tr>
                <tr><td><?php echo $this->stencil->addLink('IE5', 'IE'); ?></td><td>1999</td><td>Windows 98 SE</td><td>Mac, Unix HP-UX</td></tr>
                <tr><td>IE5.5</td><td>2000</td><td>Windows Me</td><td></td></tr>
                <tr><td><?php echo $this->stencil->addLink('IE6', 'IE'); ?></td><td>2001</td><td>Windows XP</td><td></td></tr>
                <tr><td><?php echo $this->stencil->addLink('IE7', 'IE'); ?></td><td>2006</td><td>Windows Vista</td><td></td></tr>
                <tr><td><?php echo $this->stencil->addLink('IE8', 'IE'); ?></td><td>2009</td><td>Windows 7</td><td></td></tr>
                <tr><td><?php echo $this->stencil->addLink('IE9', 'IE'); ?></td><td>2011</td><td>Windows Vista SP2</td><td></td></tr>
                <tr><td><?php echo $this->stencil->addLink('IE10', 'IE'); ?></td><td>2012</td><td>Windows 8</td><td></td></tr>
                <tr><td><?php echo $this->stencil->addLink('IE11', 'IE'); ?></td><td>2013</td><td>Windows 8.1</td><td></td></tr>
            </table>
        </div>
    </div>
<?php endif; ?>