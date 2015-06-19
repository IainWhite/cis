<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('JScript'); ?>
        <p><strong>JScript</strong> is <?php echo $this->stencil->addLink('Microsoft', 'C'); ?>'s dialect of the <?php echo $this->stencil->addLink('ECMAScript', 'JS'); ?> standard that is used in Microsoft's <?php echo $this->stencil->addLink('Internet Explorer', 'WB'); ?>.</p>
        <p>JScript is implemented as a <strong>Active Scripting engine</strong>. This means that it can be "plugged in" to OLE Automation applications that support Active Scripting, such as <strong>Internet Explorer</strong>, <strong>Active Server Pages</strong> (<?php echo $this->stencil->addLink('ASP', 'L'); ?>), and <strong>Windows Script Host</strong>.</p>
        <p>It also means such applications can use multiple Active Scripting languages (e.g., JScript, <?php echo $this->stencil->addLink('VBScript', 'L'); ?> and <?php echo $this->stencil->addLink('PerlScript', 'L'); ?>).</p>
        <p>JScript was first supported in the Internet Explorer 3.0 browser released in August 1996.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>JScript.NET</h2>
            <p>JScript 10.0 is a separate dialect, also known as <strong>JScript.NET</strong>, which adds several new features from the abandoned fourth edition of the ECMAScript standard.</p>
            <p>It must be compiled for <?php echo $this->stencil->addLink('.NET Framework', 'L'); ?> version 2 or version 4, but static type annotations are optional.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>JScript Versions</h2>
            <table class="table table-bordered table-hover table-striped">
                <tr><th>Version</th><th>Date</th><th>Introduced with</th><th>Similar JavaScript version</th></tr>
                <tr><td>1.0</td><td>Aug 1996</td><td>Internet Explorer 3.0</td><td>1</td></tr>
                <tr><td>2.0</td><td>Jan 1997</td><td>Windows IIS 3.0</td><td>1.1</td></tr>
                <tr><td>3.0</td><td>Oct 1997</td><td>Internet Explorer 4.0</td><td>1.3</td></tr>
                <tr><td>4.0</td><td>-</td><td>Visual Studio 6.0 (as part of Visual InterDev)</td><td>1.3</td></tr>
                <tr><td>5.0</td><td>Mar 1999</td><td>Internet Explorer 5.0</td><td>1.4</td></tr>
                <tr><td>5.1</td><td>-</td><td>Internet Explorer 5.01</td><td>1.4</td></tr>
                <tr><td>5.5</td><td>Jul 2000</td><td>Internet Explorer 5.5 &amp; Windows CE 4.2</td><td>1.5</td></tr>
                <tr><td>5.6</td><td>Oct 2001</td><td>Internet Explorer 6.0 &amp; Windows CE 5.0</td><td>1.5</td></tr>
                <tr><td>5.7</td><td>Nov 2006</td><td>Internet Explorer 7.0</td><td>1.5</td></tr>
                <tr><td>5.8</td><td>Mar 2009</td><td>Internet Explorer 8.0 &amp; Internet Explorer Mobile 6.0</td><td>1.5</td></tr>
                <tr><td>9.0</td><td>Mar 2011</td><td>Internet Explorer 9.0</td><td>1.8.1</td></tr>
            </table>
        </div>
    </div>
<?php endif; ?>
