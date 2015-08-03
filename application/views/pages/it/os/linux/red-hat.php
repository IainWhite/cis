<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Red Hat Linux'); ?>
        <p><strong>Red Hat Linux</strong> (<strong>RHL</strong>), assembled by the company <strong>Red Hat</strong>, was a popular <?php echo $this->stencil->addLink('Linux', 'OS'); ?> based operating system until its discontinuation in 2004.</p>
        <p>Early releases of Red Hat Linux were called <strong>Red Hat Commercial Linux</strong>. Red Hat first published the software on 3 November 1994. It was the first Linux distribution to use the <strong>RPM</strong> Package Manager as its packaging format, and over time has served as the starting point for several other distributions, such as <strong>Mandriva Linux</strong> and <strong>Yellow Dog Linux</strong>.</p>
        <p>Red Hat discontinued the Red Hat Linux line in favor of <?php echo $this->stencil->addLink('Red hat Enterprise Linux', 'LIN'); ?> (<strong>RHEL</strong>) for enterprise environments. <?php echo $this->stencil->addLink('Fedora', 'LIN'); ?>, developed by the community supported <strong>Fedora Project</strong> and sponsored by Red Hat, is the free version best suited for home use. Red Hat Linux 9, the final release, hit its official end-of-life on 30 April 2004.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Red Hat Linux Versions</h2>
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th>Version</th>
                    <th>Name</th>
                    <th>Release date</th>
                </tr>
                <tr><td>0.9</td><td>Halloween</td><td>31 October 1994</td></tr>
                <tr><td>1.0</td><td>Mother's Day</td><td>12 November 1994</td></tr>
                <tr><td>1.1</td><td>Mother's Day + 0.1</td><td>2 August 1995</td></tr>
                <tr><td>2.0</td><td>?</td><td>20 September 1995</td></tr>
                <tr><td>2.1</td><td>Bluesky</td><td>23 November 1995</td></tr>
                <tr><td>3.0.3</td><td>Picasso</td><td>1 May 1996</td></tr>
                <tr><td>4.0</td><td>Colgate</td><td>3 October 1996</td></tr>
                <tr><td>4.1</td><td>Vanderbilt</td><td>3 February 1997</td></tr>
                <tr><td>4.2</td><td>Biltmore</td><td>19 May 1997</td></tr>
                <tr><td>5.0</td><td>Hurricane</td><td>1 December 1997</td></tr>
                <tr><td>5.1</td><td>Manhattan</td><td>22 May 1998</td></tr>
                <tr><td>5.2</td><td>Apollo</td><td>2 November 1998</td></tr>
                <tr><td>6.0</td><td>Hedwig</td><td>26 April 1999</td></tr>
                <tr><td>6.1</td><td>Cartman</td><td>4 October 1999</td></tr>
                <tr><td>6.2</td><td>Zoot</td><td>3 April 2000</td></tr>
                <tr><td>7</td><td>Guinness</td><td>25 September 2000</td></tr>
                <tr><td>7.1</td><td>Seawolf</td><td>16 April 2001</td></tr>
                <tr><td>7.2</td><td>Enigma</td><td>22 October 2001</td></tr>
                <tr><td>7.3</td><td>Valhalla</td><td>6 May 2002</td></tr>
                <tr><td>8.0</td><td>Psyche</td><td>30 September 2002</td></tr>
                <tr><td>9.0</td><td>Shrike</td><td>31 March 2003</td></tr>
            </table>
            <p>The Fedora and Red Hat Projects were merged on 22 September 2003.</p>
        </div>
    </div>
<?php endif; ?>