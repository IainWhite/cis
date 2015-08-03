<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('SunOS'); ?>
        <p><strong>SunOS</strong> is a version of the <?php echo $this->stencil->addLink('Unix', 'OS'); ?> operating system developed by <?php echo $this->stencil->addLink('Sun Microsystems', 'C'); ?> for their workstation and server computer systems.</p>
        <p>The SunOS name is usually only used to refer to versions 1.0 to 4.1.4 of SunOS. These versions were based on <strong>BSD</strong>, while SunOS version 5.0 and later are based on <strong>UNIX System V Release 4</strong>, and are marketed under the brand name <?php echo $this->stencil->addLink('Solaris', 'OS'); ?>.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>SunOS Versions</h2>
            <table class="table table-bordered table-hover table-striped">
                <tr><th>SunOS Version</th><th>Release Date</th></tr>
                <tr><td>SunUNIX0.7</td><td>1982</td></tr>
                <tr><td>SunOS1.0</td><td>1983</td></tr>
                <tr><td>SunOS1.1</td><td>Apr 1984</td></tr>
                <tr><td>SunOS1.2</td><td>Jan 1985</td></tr>
                <tr><td>SunOS2.0</td><td>May 1985</td></tr>
                <tr><td>SunOS3.0</td><td>Feb 1986</td></tr>
                <tr><td>SunOS3.2</td><td>Sep 1986</td></tr>
                <tr><td>SunOS3.5</td><td>Jan 1988</td></tr>
                <tr><td>SunOS4.0</td><td>Dec 1988</td></tr>
                <tr><td>SunOS4.0.1</td><td>Dec 1988</td></tr>
                <tr><td>SunOS4.0.2</td><td>Sep 1989</td></tr>
                <tr><td>SunOS4.0.3</td><td>May 1989</td></tr>
                <tr><td>SunOS4.0.3c</td><td>Jun 1989</td></tr>
                <tr><td>SunOS4.1</td><td>Mar 1990</td></tr>
                <tr><td>SunOS4.1e</td><td>Apr 1991</td></tr>
                <tr><td>SunOS4.1.1</td><td>Mar 1990</td></tr>
                <tr><td>SunOS4.1.1B</td><td>Feb 1991</td></tr>
                <tr><td>SunOS4.1.1.1</td><td>Jul 1991</td></tr>
                <tr><td>SunOS4.1.1_U1</td><td>Nov 1991</td></tr>
                <tr><td>SunOS4.1.2</td><td>Dec 1991</td></tr>
                <tr><td>SunOS4.1.3</td><td>Aug 1992</td></tr>
                <tr><td>SunOS4.1.3C</td><td>Nov 1993</td></tr>
                <tr><td>SunOS4.1.3_U1</td><td>Dec 1993</td></tr>
                <tr><td>SunOS4.1.3_U1B</td><td>Feb 1994</td></tr>
                <tr><td>SunOS4.1.4</td><td>Nov 1994</td></tr>
                <tr><td>SunOS5.<em>x</em></td><td>Jun 1992</td></tr>
            </table>
        </div>
    </div>
<?php endif; ?>