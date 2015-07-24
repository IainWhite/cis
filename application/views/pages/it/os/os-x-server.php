<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('OS X Server'); ?>
        <p><strong>OS X Server</strong>, formerly <strong>Mac OS X Server</strong>, was a separately sold <?php echo $this->stencil->addLink('Unix', 'OS'); ?> server <?php echo $this->stencil->addLink('Operating System', 'IT'); ?> from <?php echo $this->stencil->addLink('Apple Inc', 'C'); ?> architecturally identical to its desktop counterpart <?php echo $this->stencil->addLink('OS X', 'OS'); ?> with additional server programs and management and administration tools.</p>
        <p>As of version 10.7 (Lion), Mac OS X and Mac OS X Server were combined into one release and re-branded as OS X. A separate "server" operating system is no longer sold; the server-specific server applications and work group management and administration software tools from Mac OS X Server are now offered as OS X Server, an add-on package for OS X sold through the Mac App Store along with Workgroup Manager 10.8, available from the Apple support web site.</p>
        <p>These tools simplify access to key network services, including a mail transfer agent, AFP and SMB servers, an LDAP server, a domain name server, and others. Also included (particularly in later versions) are numerous additional services and the tools to manage them, such as web server, wiki server, chat server, calendar server, and many others.</p>
    </div>
</div>
<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Mac OS X Server 1.0 (Rhapsody)</h2>
            <p>The first version of Mac OS X was Mac OS X Server 1.0. Mac OS X Server 1.0 - 1.2v3 were based on Rhapsody, a hybrid of OPENSTEP from <?php echo $this->stencil->addLink('NeXT Computer', 'C'); ?> and [Mac OS 8.5.1]. The GUI looked like a mixture of Mac OS 8's Platinum appearance with OPENSTEP's NeXT-based interface. It included a runtime layer called Blue Box for running legacy Mac OS-based applications within a separate window. There was discussion of implementing a 'transparent blue box' which would intermix Mac OS applications with those written for Rhapsody's Yellow Box environment, but this would not happen until Mac OS X's Classic environment. Apple File Services, Macintosh Manager, QuickTime Streaming Server, WebObjects and NetBoot were included with Mac OS X Server 1.0 - 1.2v3. It could not use FireWire devices.</p>

            <h2>Mac OS X Server 10.0 (Cheetah Server)</h2>
            <p>Released: 21 May 2001</p>
            <p>Mac OS X Server 10.0 included the new <?php echo $this->stencil->addLink('Aqua user interface', 'IT'); ?>, <?php echo $this->stencil->addLink('Apache', 'WS'); ?>, <?php echo $this->stencil->addLink('PHP', 'L'); ?>, <?php echo $this->stencil->addLink('MySQL', 'DB'); ?>, <?php echo $this->stencil->addLink('Tomcat', 'WS'); ?>, WebDAV support, Macintosh Manager and NetBoot.</p>

            <h2>Mac OS X Server 10.1 (Puma Server)</h2>
            <p>Released: 25 September 2001</p>

            <h2>Mac OS X Server 10.2 (Jaguar Server)</h2>
            <p>Released: 23 August 2002</p>
            <p>The 10.2 Mac OS X Server release includes updated Open Directory user and file management, which with this release is based on LDAP, beginning the deprecation of the NeXT-originated NetInfo architecture. The new Workgroup Manager interface improved configuration significantly. The release also saw major updates to NetBoot and NetInstall. Many common network services are provided such as NTP, SNMP, web server (Apache), mail server (Postfix and Cyrus), LDAP (OpenLDAP), AFP, and print server. The inclusion of Samba version 3 allows tight integration with Windows clients and servers. <?php echo $this->stencil->addLink('MySQL', 'DB'); ?> v4.0.16 and PHP v4.3.7 are also included.</p>

            <h2>Mac OS X Server 10.3 (Panther Server)</h2>
            <p>Released: 24 October 2003</p>
            <p>The 10.3 Mac OS X Server release includes updated Open Directory user and file management, which with this release is based on LDAP, beginning the deprecation of the NeXT-originated NetInfo architecture. The new Workgroup Manager interface improved configuration significantly. Many common network services are provided such as NTP, SNMP, web server (<?php echo $this->stencil->addLink('Apache', 'WS'); ?>), mail server (Postfix and Cyrus), LDAP (OpenLDAP), AFP, and print server. The inclusion of Samba version 3 allows tight integration with Windows clients and servers. <?php echo $this->stencil->addLink('MySQL', 'DB'); ?> v4.0.16 and <?php echo $this->stencil->addLink('PHP', 'L'); ?> v4.3.7 are also included.</p>

            <h2>Mac OS X Server 10.4 (Tiger Server)</h2>
            <p>Released: 29 April 2005</p>
            <p>The 10.4 release adds 64-bit application support, Access Control Lists, Xgrid, link aggregation, e-mail spam filtering (SpamAssassin), virus detection (ClamAV), Gateway Setup Assistant, and servers for Software Update, iChat Server using XMPP, Boot Camp Assistant, Dashboard and weblogs.</p>
            <p>On 10 August 2006 Apple announced the first Universal Binary release of Mac OS X Server, version 10.4.7, supporting both <?php echo $this->stencil->addLink('PowerPC', 'ITH'); ?> and <?php echo $this->stencil->addLink('Intel processors', 'ITH'); ?>. At the same time Apple announced the release of the Intel-based Mac Pro and Xserve systems.</p>

            <h2>Mac OS X Server 10.5 (Leopard Server)</h2>
            <p>Released: 26 October 2007</p>
            <p>The Mac OS X Leopard Server running Server Admin on Desktop. Leopard Server sold for $999, with an unlimited client license.</p>

            <h3>Features</h3>
            <p>RADIUS Server. Leopard Server includes FreeRADIUS for network authentication. It ships with support for wireless access stations however can be modified into a fully functioning FreeRADIUS server.</p>

            <h2>Mac OS X Server 10.6 (Snow Leopard Server)</h2>
            <p>Released: 28 August 2009</p>
            <p>Snow Leopard Server sold for $499 and included unlimited client licenses.</p>

            <h3>New Features:</h3>
            <p>Full 64-bit operating system. On appropriate systems with 4GB of RAM or more, Snow Leopard Server uses a 64-bit kernel to address up to a theoretical 16TB of RAM.</p>
            <p>iCal Server 2 with improved CalDAV support, a new web calendaring application, push notifications and the ability to send email invitations to non-iCal users.</p>
            <p>Address Book Server provides a central location for users to store and access personal contacts across multiple Macs and synchronised <?php echo $this->stencil->addLink('iPhone', 'ITH'); ?>. Based on the CardDAV protocol standard.</p>
            <p>Wiki Server 2, with server side Quick Look and the ability to view wiki content on iPhone.</p>
            <p>A new Mail server engine that supports push email so users receive immediate access to new messages. However, Apple's implementation of push email is not supported for Apple's iPhone.</p>
            <p>Podcast Producer 2 with dual-source video support. Also includes a new Podcast Composer application to automate the production process, making it simple to create podcasts with a customised, consistent look and feel. Podcast Composer creates a workflow to add titles, transitions and effects, save to a desired format and share to wikis, blogs, iTunes, iTunes U, Final Cut Server or Podcast Library.</p>
            <p>Mobile Access Server enables iPhone and Mac users to access secured network services, including corporate websites, online business applications, email, calendars and contacts. Without requiring additional software, Mobile Access Server acts as a reverse proxy server and provides SSL encryption and authentication between the user’s iPhone or Mac and a private network.</p>

            <h2>Mac OS X 10.7 (Lion Server)</h2>
            <p>Released: 20 July 2011</p>
            <p>In releasing the developer preview of Mac OS X Lion in February 2011, Apple indicated that beginning with Lion, Mac OS X Server would be bundled with the operating system and would not be marketed as a separate product. However, a few months later, the company said it would instead sell the server components as a US$49.99 add-on to Lion, distributed through the Mac App Store (as well as Lion itself). The combined cost of an upgrade to Lion and the purchase of the OS X Server add-on, which costs approximately US$50, was nonetheless significantly lower than the retail cost of Snow Leopard Server (US$499).</p>
            <p>Lion Server came with unlimited client licenses as did Snow Leopard Server.</p>
            <p>Lion Server includes new versions of iCal Server, Wiki Server, and Mail Server. More significantly, Lion Server can be used for <?php echo $this->stencil->addLink('iOS', 'OS'); ?> mobile device management.</p>

            <h2>OS X 10.8 (Mountain Lion Server)</h2>
            <p>Released: 25 July 2012.</p>
            <p>There was no separate server edition of Mountain Lion, just as there was no separate server edition of Lion. There was an OS X Server package for Mountain Lion, available from the Mac App Store for $19.99, that included a server management app called Server, as well as other additional administrative tools to manage client profiles and Xsan.</p>
            <p>Mountain Lion Server, like Lion Server, came with unlimited client licenses, and once purchased could be run on an unlimited number of machines.</p>

            <h2>OS X 10.9 (Mavericks Server)</h2>
            <p>Released: 22 October 2013.</p>
            <p>There is no separate server edition of Mavericks, just as there was no separate server edition of Mountain Lion. There is a package, available from the Mac App Store for $19.99, that includes a server management app called Server, as well as other additional administrative tools to manage client profiles and Xsan, and once purchased can be run on an unlimited number of machines. Those enrolled in the Mac or iOS developer programs are given a code to download OS X Server for free.</p>

            <h2>OS X 10.10 (Yosemite Server 4.0)</h2>
            <p>Released: 16 October 2014.</p>
            <p>There is no separate server edition of Yosemite, just as there was no separate server edition of Mavericks. There is a package, available from the Mac App Store for $19.99, that includes a server management app called Server, as well as other additional administrative tools to manage client profiles and Xsan, and once purchased can be run on an unlimited number of machines. Those enrolled in the Mac or iOS developer programs are given a code to download OS X Server for free.</p>

        </div>
    </div>
<?php endif; ?>