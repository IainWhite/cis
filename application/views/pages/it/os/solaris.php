<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Solaris'); ?>
        <p><strong>Solaris</strong> is a <?php echo $this->stencil->addLink('Unix', 'OS'); ?> operating system originally developed by <?php echo $this->stencil->addLink('Sun Microsystems', 'C'); ?>. It superseded their earlier <?php echo $this->stencil->addLink('SunOS', 'OS'); ?> in 1993.</p>
        <p><strong>Oracle Solaris</strong>, as it is now known, has been owned by <?php echo $this->stencil->addLink('Oracle Corporation', 'C'); ?> since Oracle's acquisition of Sun in January 2010.</p>
        <p>Solaris is known for its scalability, especially on <strong>SPARC</strong> systems, and for originating many innovative features such as DTrace, ZFS and Time Slider. Solaris supports SPARC based and <?php echo $this->stencil->addLink('x86', 'CPU'); ?> based workstations and servers from Oracle and other vendors, with efforts underway to port to additional platforms. Solaris is registered as compliant with the Single Unix Specification.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Solaris Versions</h2>
            <table class="table table-bordered table-hover table-striped">
                <tr><th>Solaris version</th><th>SunOS version</th><th>Release date</th></tr>
                <tr><td>1.x</td><td>4.1.x</td><td>1991 - 1994</td></tr>
                <tr><td>2.0</td><td>5.0</td><td>June 1992</td></tr>
                <tr><td>2.1</td><td>5.1</td><td>December 1992</td></tr>
                <tr><td>2.2</td><td>5.2</td><td>May 1993</td></tr>
                <tr><td>2.3</td><td>5.3</td><td>November 1993</td></tr>
                <tr><td>2.4</td><td>5.4</td><td>November 1994</td></tr>
                <tr><td>2.5</td><td>5.5</td><td>November 1995</td></tr>
                <tr><td>2.5.1</td><td>5.5.1</td><td>May 1996</td></tr>
                <tr><td>2.6</td><td>5.6</td><td>July 1997</td></tr>
                <tr><td>7</td><td>5.7</td><td>November 1998</td></tr>
                <tr><td>8</td><td>5.8</td><td>February 2000</td></tr>
                <tr><td>9</td><td>5.9</td><td>28 May 2002</td></tr>
                <tr><td>10</td><td>5.10</td><td>31 January 2005</td></tr>
                <tr><td>11 Express 2010.11</td><td>5.11</td><td>15 November 2010</td></tr>
                <tr><td>11</td><td>5.11</td><td>9 November 2011</td></tr>
            </table>
        </div>
    </div>
<?php endif; ?>