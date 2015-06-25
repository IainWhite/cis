<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Trident Layout Engine'); ?>
        <p><strong>Trident</strong> (also known as <strong>MSHTML</strong>) is the name of the <?php echo $this->stencil->addLink('layout engine', 'WD'); ?>  for the <?php echo $this->stencil->addLink('Microsoft Windows', 'OS'); ?>  version of <?php echo $this->stencil->addLink('Internet Explorer', 'WB'); ?>.</p>
        <p>It was first introduced with the release of Internet Explorer version 4.0 in October 1997; it has been steadily upgraded and remains in use today.</p>
        <p>For versions 7 and 8 of Internet Explorer, <?php echo $this->stencil->addLink('Microsoft', 'C'); ?>  made significant changes to the Trident layout engine to improve compliance with web standards and add support for new technologies.</p>
        <p>Since then, Microsoft intends to comply with many modern web standards, and also intends to significantly update the layout engine to be more competitive and modern compared to other current layout engines.<p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Trident Versions</h2>
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th>Trident version</th>
                    <th>MSHTML.dll version</th>
                    <th>Internet Explorer version</th>
                    <th>Internet Explorer Mobile version</th>
                    <th>Notes</th>
                </tr>
                <tr><td rowspan="6">No version</td><td>4.0.x</td><td>4.0</td><td>N/A</td><td>Initial version.</td></tr>
                <tr><td>5.0.x</td><td>5.0</td><td>N/A</td><td>Improved CSS 1 support and had sweeping changes in CSS 2 rendering.</td></tr>
                <tr><td>5.5.x</td><td>5.5</td><td>N/A</td><td>Corrected issues with CSS handling.</td></tr>
                <tr><td>6.0.x</td><td>6.0</td><td>N/A</td><td>Corrected the box model and added quirks mode with DTD switching.</td></tr>
                <tr><td>7.0.x</td><td>7.0</td><td>N/A</td><td>Fixed many CSS rendering issues and added partial PNG alpha support.</td></tr>
                <tr><td>N/A</td><td>N/A</td><td>6.0</td><td>IEMobile 6 combines many features of IE 6, 7, and 8.</td></tr>
                <tr><td>3.1</td><td>7.0</td><td>N/A</td><td>7.0</td><td>Second port on a mobile system of Trident. IE Mobile version for Windows Phone 7.</td></tr>
                <tr><td>4.0</td><td>8.0.x</td><td>8.0</td><td>N/A</td><td>First version to pass the Acid 2 test. Added full support for CSS 2.1.</td></tr>
                <tr><td>5.0</td><td>9.0.x</td><td>9.0</td><td>9.0</td><td>Added support for SVG, XHTML, HTML5, and CSS 3. Added a new hardware-accelerated JScript engine named Chakra. Scores 100/100 on the Acid3 test. Included with IE 9 Mobile in Windows Phone 7.5 "Mango".</td></tr>
                <tr><td>6.0</td><td>10.0.x</td><td>10.0</td><td>10.0</td><td>More support for CSS 3, HTML5 and ES5. Included in Windows Phone 8.</td></tr>
                <tr><td>7.0</td><td>11.0.x</td><td>11.0</td><td>11.0</td><td>Support for WebGL and SPDY. Improved support for HTML5. Speed improvement. Included in Windows Phone 8.1.</td></tr>
            </table>
        </div>
    </div>
<?php endif; ?>