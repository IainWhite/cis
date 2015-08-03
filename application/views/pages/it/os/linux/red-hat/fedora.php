<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Fedora'); ?>
        <p><strong>Fedora</strong>, formerly <strong>Fedora Core</strong>, is an RPM based, general purpose collection of software, including an operating system based on the <?php echo $this->stencil->addLink('Linux kernel', 'OS'); ?>, developed by the community supported <strong>Fedora Project</strong> and owned by <strong>Red Hat</strong>.</p>
        <p>The Fedora Project's mission is to lead the advancement of free and open source software and content as a collaborative community.</p>
        <p>The Fedora Project was created in late 2003, when <?php echo $this->stencil->addLink('Red Hat Linux', 'LIN'); ?> was discontinued. <?php echo $this->stencil->addLink('Red Hat Enterprise Linux', 'LIN'); ?> was to be Red Hat's only officially supported Linux distribution, while Fedora was to be a community distribution. Red Hat Enterprise Linux branches its releases from versions of Fedora.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Fedora Versions</h2>
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th>Name</th>
                    <th>Codename</th>
                    <th>Release date</th>
                </tr>
                <tr><td>Fedora Core 1</td><td>Yarrow</td><td>05/11/2003</td></tr>
                <tr><td>Fedora Core 2</td><td>Tettnang</td><td>18/05/2004</td></tr>
                <tr><td>Fedora Core 3</td><td>Heidelberg</td><td>08/11/2004</td></tr>
                <tr><td>Fedora Core 4</td><td>Stentz</td><td>13/06/2005</td></tr>
                <tr><td>Fedora Core 5</td><td>Bordeaux</td><td>20/03/2006</td></tr>
                <tr><td>Fedora Core 6</td><td>Zod</td><td>25/10/2006</td></tr>
                <tr><td>Fedora 7</td><td>Moonshine</td><td>31/05/2007</td></tr>
                <tr><td>Fedora 8</td><td>Werewolf</td><td>11/08/2007</td></tr>
                <tr><td>Fedora 9</td><td>Sulphur</td><td>13/05/2008</td></tr>
                <tr><td>Fedora 10</td><td>Cambridge</td><td>25/11/2008</td></tr>
                <tr><td>Fedora 11</td><td>Leonidas</td><td>09/06/2009</td></tr>
                <tr><td>Fedora 12</td><td>Constantine</td><td>17/11/2009</td></tr>
                <tr><td>Fedora 13</td><td>Goddard</td><td>25/05/2010</td></tr>
                <tr><td>Fedora 14</td><td>Laughlin</td><td>02/11/2010</td></tr>
                <tr><td>Fedora 15</td><td>Lovelock</td><td>24/05/2011</td></tr>
                <tr><td>Fedora 16</td><td>Verne</td><td>08/11/2011</td></tr>
                <tr><td>Fedora 17</td><td>Beefy Miracle</td><td>29/05/2012</td></tr>
                <tr><td>Fedora 18</td><td>Spherical Cow</td><td>15/01/2013</td></tr>
                <tr><td>Fedora 19</td><td>Schrödinger's Cat</td><td>02/07/2013</td></tr>
            </table>

        </div>
    </div>
<?php endif; ?>