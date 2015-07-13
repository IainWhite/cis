<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('IIS - Internet Information Server'); ?>
        <p><strong>Internet Information Services</strong> (<strong>IIS</strong>, formerly <strong>Internet Information Server</strong>) is an extensible <?php echo $this->stencil->addLink('Web server', 'WD'); ?> created by <?php echo $this->stencil->addLink('Microsoft', 'C'); ?> for use with <?php echo $this->stencil->addLink('Windows NT', 'WIn'); ?> family.</p>
        <p>IIS supports <?php echo $this->stencil->addLink('HTTP', 'IPA'); ?>, <?php echo $this->stencil->addLink('HTTPS', 'IPA'); ?>, <?php echo $this->stencil->addLink('FTP', 'IPA'); ?>, <?php echo $this->stencil->addLink('SMTP', 'IPA'); ?> and <?php echo $this->stencil->addLink('NNTP', 'IPA'); ?>.</p>
        <p>It has been an integral part of the Windows NT family since Windows NT 4.0, though it may be absent from some editions (e.g. Windows XP Home edition).</p>
        <p>IIS is not turned on by default when Windows is installed. The IIS Manager is accessed through the Microsoft Management Console or Administrative Tools in the Control Panel.</p>
        <p>The first Microsoft web server was a research project at the <strong>European Microsoft Windows NT Academic Centre (EMWAC)</strong>, part of the University of Edinburgh in Scotland, and was distributed as freeware.</p>
        <p>However, since the EMWAC server was unable to scale to handle the volume of traffic going to Microsoft.com, Microsoft was forced to develop its own web server, IIS.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <p>Almost every version of IIS was released either alongside or with a version of Microsoft Windows:</p>
            <ul>
                <li>IIS 1.0 was initially released as a free add-on for Windows NT 3.51.</li>
                <li>IIS 2.0 was included with Windows NT 4.0.</li>
                <li>IIS 3.0, which was included with Service Pack 2 of Windows NT 4.0, introduced the Active Server Pages dynamic scripting environment.</li>
                <li>IIS 4.0 was released as part of an "Option Pack" for Windows NT 4.0.</li>
                <li>IIS 5.0 shipped with Windows 2000 and introduced additional authentication methods, management enhancements including a new MMC-based administration application, support for the WebDAV protocol, and enhancements to ASP. IIS 5.0 also dropped support for the Gopher protocol</li>
                <li>IIS 5.1 was shipped with Windows XP Professional, and was nearly identical to IIS 5.0 on Windows 2000.</li>
                <li>IIS 6.0, included with Windows Server 2003 and Windows XP Professional x64 Edition, added support for IPv6 and included a new worker process model that increased security as well as reliability.</li>
                <li>IIS 7.0 was a complete redesign and rewrite of IIS, and was shipped with Windows Vista and Windows Server 2008. IIS 7.0 included a new modular design that allowed for a reduced attack surface and increased performance. It also introduced a hierarchical configuration system allowing for simpler site deploys, a new Windows Forms-based management application, new command-line management options and increased support for the .NET Framework. IIS 7.0 on Vista does not limit the number of allowed connections as IIS on XP did, but limits concurrent requests to 10 (Windows Vista Ultimate, Business, and Enterprise Editions) or 3 (Vista Home Premium). Additional requests are queued, which hampers performance, but they are not rejected as with XP.</li>
                <li>IIS 7.5 was included in Windows 7 (but it must be turned on in the side panel of Programs and Features) and Windows Server 2008 R2. IIS 7.5 improved WebDAV and FTP modules as well as command-line administration in PowerShell. It also introduced TLS 1.1 and TLS 1.2 support and the Best Practices Analyzer tool and process isolation for application pools.</li>
                <li>IIS 8.0 is only available in Windows Server 2012 and Windows 8. IIS 8.0 includes Application Initialization, centralized SSL certificate support, and multicore scaling on NUMA hardware, among other new features.
                <li>IIS 8.5 is included in Windows Server 2012 R2 and Windows 8.1. This version includes Idle worker-Process page-out, Dynamic Site Activation, Enhanced Logging, ETW logging, and Automatic Certificate Rebind.</li>
            </ul>
        </div>
    </div>
<?php endif; ?>
