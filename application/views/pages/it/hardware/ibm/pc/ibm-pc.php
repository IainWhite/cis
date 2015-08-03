<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('IBM Personal Computer'); ?>
        <p>The <strong>IBM Personal Computer</strong>, commonly known as the <strong>IBM PC</strong>, is the original version and progenitor of the <?php echo $this->stencil->addLink('IBM PC compatible', 'PC'); ?> hardware platform.</p>
        <p>It is <?php echo $this->stencil->addLink('IBM', 'C'); ?> model number 5150, and was introduced on 12 August 1981.</p>
        <p>It was created by a team of engineers and designers under the direction of Don Estridge of the IBM Entry Systems Division in Boca Raton, Florida.</p>
        <p>The generic term "<em>personal computer</em>" (<strong>PC</strong>) was in use before 1981, applied as early as 1972 to the <?php echo $this->stencil->addLink('Xerox PARC', 'C'); ?>'s <?php echo $this->stencil->addLink('Alto', 'ITH'); ?>. However, because of the success of the IBM Personal Computer, the term PC came to mean more specifically a desktop microcomputer compatible with IBM's PC products.</p>
        <p>Within a short time of the introduction, third-party suppliers of peripheral devices, expansion cards, and software proliferated; the influence of the IBM PC on the personal computer market was substantial in standardizing a platform for personal computers.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>IBM PC Models</h2>
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th>Model name</th>
                    <th>Model No.</th>
                    <th>Introduced</th>
                    <th>CPU</th>
                    <th>Features</th>
                </tr>
                <tr>
                    <td>PC</td>
                    <td>5150</td>
                    <td>August 1981</td>
                    <td><?php echo $this->stencil->addLink('8088', 'CPU'); ?></td>
                    <td>Floppy disk or cassette system. One or two internal floppy drives were optional.
                </tr>
                <tr>
                    <td><?php echo $this->stencil->addLink('XT', 'PC'); ?></td>
                    <td>5160</td>
                    <td>March 1983</td>
                    <td>8088</td>
                    <td>First IBM PC to come with an internal hard drive as standard.</td>
                </tr>
                <tr>
                    <td>XT/370</td>
                    <td>5160/588</td>
                    <td>October 1983</td>
                    <td>8088</td>
                    <td>5160 with XT/370 Option Kit and 3277 Emulation Adapter</td>
                </tr>
                <tr>
                    <td>3270 PC</td>
                    <td>5271</td>
                    <td>October 1983</td>
                    <td>8088</td>
                    <td>With 3270 terminal emulation, 20 function key keyboard</td>
                </tr>
                <tr>
                    <td><?php echo $this->stencil->addLink('PCjr', 'PC'); ?></td>
                    <td>4860</td>
                    <td>November 1983</td>
                    <td>8088</td>
                    <td>Floppy-based home computer, infra-red keyboard</td>
                </tr>
                <tr>
                    <td>Portable</td>
                    <td>5155</td>
                    <td>February 1984</td>
                    <td>8088</td>
                    <td>Floppy-based portable</td>
                </tr>
                <tr>
                    <td><?php echo $this->stencil->addLink('AT', 'PC'); ?></td>
                    <td>5170</td>
                    <td>August 1984</td>
                    <td><?php echo $this->stencil->addLink('80286', 'CPU'); ?></td>
                    <td>Faster processor, faster system bus (6&#160;MHz, later 8&#160;MHz, vs 4.77&#160;MHz), jumperless configuration, real-time clock</td>
                </tr>
                <tr>
                    <td>AT/370</td>
                    <td>5170/599</td>
                    <td>October 1984</td>
                    <td>80286</td>
                    <td>5170 with AT/370 Option Kit and 3277 Emulation Adapter</td>
                </tr>
                <tr>
                    <td>3270 AT</td>
                    <td>5281</td>
                    <td>June 1985</td>
                    <td>80286</td>
                    <td>With 3270 terminal emulation</td>
                </tr>
                <tr>
                    <td>Convertible</td>
                    <td>5140</td>
                    <td>April 1986</td>
                    <td>8088</td>
                    <td>Microfloppy laptop portable</td>
                </tr>
                <tr>
                    <td>XT 286</td>
                    <td>5162</td>
                    <td>September 1986</td>
                    <td>80286</td>
                    <td>Slow hard disk, but zero wait state memory on the motherboard. This 6&#160;MHz machine was actually faster than the 8&#160;MHz ATs (when using planar memory) because of the zero wait states</td>
                </tr>
            </table>
            <p>All IBM personal computers are software backwards compatible with each other in general, but not every program will work in every machine.</p>
            <p>Some programs are time sensitive to a particular speed class.</p>
            <p>Older programs will not take advantage of newer higher-resolution and higher colour display standards, while some newer programs require newer display adapters.</p>
            <p>A few programs, typically very early ones, are written for and require a specific version of the IBM PC BIOS ROM. Most notably, <?php echo $this->stencil->addLink('BASICA', 'BAS'); ?> which was dependent on the BIOS ROM had a sister program called <?php echo $this->stencil->addLink('GW-BASIC', 'BAS'); ?> which supported more functions and was 100% backwards compatible and could run independent from the BIOS ROM.</p>
        </div>
    </div>
<?php endif; ?>