<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Windows Server 2012 R2'); ?>
        <p><strong>Windows Server 2012 R2</strong> was released on 18 October 2013. It was unveiled on 3 June 2013 at TechEd North America. According to Windows Server 2012 R2 datasheet published on 31 May 2013, there are four editions of this operating system: Foundation, Essentials, Standard and Datacenter. As with <?php echo $this->stencil->addLink('Windows Server 2012', 'WIS'); ?>, the Datacenter and Standard editions are feature identical, varying only based on licensing (particularly licensing of virtual instances). The Essentials edition has the same features as the Datacenter and Standard products, with some restrictions.</p>
        <p>A further update, formally designated Windows Server 2012 R2 Update, was released in April 2014.</p>

        <h2>Changes from Windows Server 2012</h2>
        <ul>
            <li>Automated Tiering: Storage Spaces stores most frequently accessed files on fastest physical media</li>
            <li>Deduplication for VHD: Reduces the storage space for VHD files with largely similar contents by storing the similar contents only once</li>
            <li>Windows PowerShell v4, which now includes a Desired State Configuration (DSC) feature</li>
            <li>Integrated Office 365 support (Essentials edition)</li>
            <li>User interface changes from Windows 8.1, including visible Start button.</li>
            <li>UEFI-based virtual machines</li>
            <li>Upgrades from driver emulators to synthetic hardware drivers to minimize legacy support</li>
            <li>Faster VM deployment (approximately half the time)</li>
            <li>Internet Information Services 8.5: Support for logging to Event Tracing for Windows and the ability to log any request/response headers. To improve scalability, if IIS is configured with 100 or more web sites, by default it will not automatically start any of them. Alongside this, a new "Idle Worker Process Page-Out" configuration option has been added to application pools to instruct Windows to page-out the process if it has been idle for the idle time-out period (by default, 20 minutes).</li>
            <li>Server Message Block: Performance and event logging quality improvements, support for Hyper-V Live Migration over SMB, bandwidth prioritization management, and the ability to remove SMB 1.0 support</li>
            <li>Windows Deployment Services: Support for managing WDS via PowerShell.</li>
            <li>Windows Defender is available in a Server Core installation, and is installed and enabled by default.</li>
            <li>IP Address Management (IPAM): Extended to support role-based access control, allowing for fine-grained control over which users can view or change configurations for DHCP reservations, scopes, IP address blocks, DNS resource records, etc. Additionally, IPAM can integrate with System Center Virtual Machine Manager 2012 R2 to have coordinated IP policy across both physical and virtual environments. The IPAM database can be stored in a SQL Server instance instead of Windows Internal Database.</li>
            <li>Group Policy has a new "Policy Cache" setting which allows domain-joined machines to store a copy of the group policy settings on the client machine and, depending on the speed of access to the domain controller, use those at startup time instead of waiting for the policy settings to download. This can improve startup times on machines that are disconnected from the company network.[77] New Group Policy settings have been added to cover new features in Windows 8.1 and Internet Explorer 11, such as enabling/disabling SPDY/3 support, configuring start screen layouts, and detecting phone numbers in web pages.</li>
            <li>TLS support is extended to support RFC 5077, "Transport Layer Security (TLS) Session Resumption without Server-Side State", which improves performance of long-running TLS-secured connections that need to reconnect due to session expiration.
            <li>Hyper-V role and Hyper-V management console are added to the Essentials edition.</li>
        </ul>
    </div>
</div>