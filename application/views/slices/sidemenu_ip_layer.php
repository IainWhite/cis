<ul class="list-group sidebar-nav-v1 fa-fixed" id="sidebar-nav">
    <li class="list-group-item list-toggle <?php echo $this->stencil->addActive('Application', 'IPLayer'); ?>">
        <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-Application-Layer">Application Layer</a>
        <ul id="collapse-Application-Layer" class="collapse <?php echo $this->stencil->addIn('Application', 'IPLayer'); ?>">
            <li class="<?php echo $this->stencil->addActive('Application Layer', 'protical'); ?>"}><a href="/web-development/ip-layer/application-layer"><i class="fa fa-exchange"></i> Application Layer</a></li>
            <li class="<?php echo $this->stencil->addActive('DHCP', 'protical'); ?>"><a href="/web-development/ip-layer/dhcp"><i class="fa fa-bolt"></i> DHCP</a></li>
            <li class="<?php echo $this->stencil->addActive('DNS', 'protical'); ?>"><a href="/web-development/ip-layer/dns"><i class="fa fa-bolt"></i> DNS</a></li>
            <li class="<?php echo $this->stencil->addActive('FTP', 'protical'); ?>"><a href="/web-development/ip-layer/ftp"><i class="fa fa-bolt"></i> FTP</a></li>
            <li class="<?php echo $this->stencil->addActive('HTTP', 'protical'); ?>"><a href="/web-development/ip-layer/http"><i class="fa fa-bolt"></i> HTTP</a></li>
            <li class="<?php echo $this->stencil->addActive('IMAP', 'protical'); ?>"><a href="/web-development/ip-layer/imap"><i class="fa fa-bolt"></i> IMAP</a></li>
            <li class="<?php echo $this->stencil->addActive('POP', 'protical'); ?>"><a href="/web-development/ip-layer/pop3"><i class="fa fa-bolt"></i> POP</a></li>
            <li class="<?php echo $this->stencil->addActive('SMTP', 'protical'); ?>"><a href="/web-development/ip-layer/smtp"><i class="fa fa-bolt"></i> SMTP</a></li>
            <li class="<?php echo $this->stencil->addActive('SSH', 'protical'); ?>"><a href="/web-development/ip-layer/ssh"><i class="fa fa-bolt"></i> SSH</a></li>
            <li class="<?php echo $this->stencil->addActive('Telnet', 'protical'); ?>"><a href="/web-development/ip-layer/telnet"><i class="fa fa-bolt"></i> Telnet</a></li>
            <li class="<?php echo $this->stencil->addActive('SSL', 'protical'); ?>"><a href="/web-development/ip-layer/ssl"><i class="fa fa-bolt"></i> TLS/SSL</a></li>
            <li class="<?php echo $this->stencil->addActive('XMPP', 'protical'); ?>"><a href="/web-development/ip-layer/xmpp"><i class="fa fa-bolt"></i> XMPP</a></li>
        </ul>
    </li>
    <li class="list-group-item list-toggle <?php echo $this->stencil->addActive('Transport', 'IPLayer'); ?>">
        <a class="accordion-toggle" href="#collapse-Transport-Layer" data-toggle="collapse">Transport Layer</a>
        <ul id="collapse-Transport-Layer" class="collapse <?php echo $this->stencil->addin('Transport', 'IPLayer'); ?>">
            <li class="<?php echo $this->stencil->addActive('Transport Layer', 'protical'); ?>"><a href="/}web-development/ip-layer/transport-layer"><i class="fa fa-exchange"></i> Transport Layer</a></li>
            <li class="<?php echo $this->stencil->addActive('TCP', 'protical'); ?>"><a href="/}web-development/ip-layer/tcp"><i class="fa fa-bolt"></i> TCP</a></li>
        </ul>
    </li>
    <li class="list-group-item list-toggle <?php echo $this->stencil->addActive('Internet', 'IPLayer'); ?>">
        <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-Internet-Layer">Internet Layer</a>
        <ul id="collapse-Internet-Layer" class="collapse <?php echo $this->stencil->addIn('Internet', 'IPLayer'); ?>">
            <li class="<?php echo $this->stencil->addActive('Internet Layer', 'protical'); ?>"><a href="/web-development/ip-layer/internet-layer"><i class="fa fa-exchange"></i> Internet Layer</a></li>
            <li class="<?php echo $this->stencil->addActive('IP', 'protical'); ?>"><a href="/web-development/ip-layer/ip"><i class="fa fa-bolt"></i> IP</a></li>
        </ul>
    </li>
    <li class="list-group-item list-toggle <?php echo $this->stencil->addActive('Link', 'IPLayer'); ?>">
        <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-Link-Layer">Link Layer</a>
        <ul id="collapse-Link-Layer" class="collapse <?php echo $this->stencil->addIn('Link', 'IPLayer'); ?>">
            <li class="<?php echo $this->stencil->addActive('Link Layer', 'protical'); ?>"><a href="/web-development/ip-layer/link-layer"><i class="fa fa-exchange"></i> Link Layer</a></li>
            <li class="<?php echo $this->stencil->addActive('PPP', 'protical'); ?>"><a href="/web-development/ip-layer/ppp"><i class="fa fa-bolt"></i> PPP</a></li>
        </ul>
    </li>
</ul>
