<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Local Area Transport (LAT)'); ?>
        <p><strong>Local Area Transport (LAT)</strong> is a non-routable (Data Link Layer) networking technology developed by <?php echo $this->stencil->addLink('Digital Equipment Corporation', 'C'); ?> to provide connection between the DECserver 90, 100, 200, 300, 500, 700 and DECserver 900 terminal servers and Digital's <?php echo $this->stencil->addLink('VAX', 'ITH'); ?> and Alpha and MIPS host computers via <?php echo $this->stencil->addLink('Ethernet', 'ITN'); ?>, giving communication between those hosts and serial devices such as video terminals and printers. The protocol itself was designed in such a manner as to maximize packet efficiency over Ethernet by bundling multiple characters from multiple ports into a single packet for Ethernet transport. Over time, other host implementations of the LAT protocol appeared allowing communications to a wide range of <?php echo $this->stencil->addLink('Unix', 'OS'); ?> and other non-Digital operating systems using the LAT protocol.</p>
        <p>In 1984, the first implementation of the LAT protocol connected a terminal server to a <?php echo $this->stencil->addLink('VMS', 'OS'); ?> <?php echo $this->stencil->addLink('VAXcluster', 'ITN'); ?> in Spit Brook Road, Nashua, NH. By "virtualising" the terminal port at the host end, a very large number of plug-and-play <?php echo $this->stencil->addLink('VT100', 'VT'); ?> class terminals could connect to each host computer system. Additionally, a single physical terminal could connect via multiple sessions to multiple hosts simultaneously. Future generations of terminal servers included both LAT and <?php echo $this->stencil->addLink('TELNET', 'IPA'); ?> protocols, one of the earliest protocols created to run on a burgeoning <?php echo $this->stencil->addLink('TCP/IP', 'ITN'); ?> based Internet. Additionally, the ability to create reverse direction pathways from users to non-traditional <?php echo $this->stencil->addLink('RS232', 'ITH'); ?> devices (i.e. UNIX Host TTYS1 operator ports) created an entirely new market for Terminal Servers, now known as console servers in the mid to late 1990s, year 2000 and beyond through today.</p>
        <p>LAT and VMS drove the initial surge of adoption of "thick-wire" Ethernet by the computer industry. By 1986, terminal server networks accounted for 10% of Digital's $10 billion revenue. These early Ethernet LANs scaled using Ethernet bridges (another DEC invention) as well as DECnet routers. Subsequently, Cisco routers, which implemented TCP-IP and <?php echo $this->stencil->addLink('DECnet', 'ITN'); ?>, emerged as a global connection between these packet-based Ethernet LANs.</p>
        <p>Over time, when terminals became less popular, terminal emulators had a built-in LAT client.</p>
    </div>
</div>