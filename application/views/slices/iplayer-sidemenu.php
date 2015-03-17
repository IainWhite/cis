<ul class="list-group sidebar-nav-v1 fa-fixed" id="sidebar-nav">
    <li class="list-group-item list-toggle {if $IPLayer == 'Application'}active{/if}">
        <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-Application-Layer">Application Layer</a>
        <ul id="collapse-Application-Layer" class="collapse {if $IPLayer == 'Application'}in{/if}">
            <li {if $protical == 'Application Layer'}class="active"{/if}><a href="{$base_url}web-development/application-layer"><i class="fa fa-exchange"></i> Application Layer</a></li>
            <li {if $protical == 'DHCP'}class="active"{/if}><a href="{$base_url}web-development/dhcp"><i class="fa fa-bolt"></i> DHCP</a></li>
            <li {if $protical == 'DNS'}class="active"{/if}><a href="{$base_url}web-development/dns"><i class="fa fa-bolt"></i> DNS</a></li>
            <li {if $protical == 'FTP'}class="active"{/if}><a href="{$base_url}web-development/ftp"><i class="fa fa-bolt"></i> FTP</a></li>
            <li {if $protical == 'HTTP'}class="active"{/if}><a href="{$base_url}web-development/http"><i class="fa fa-bolt"></i> HTTP</a></li>
            <li {if $protical == 'IMAP'}class="active"{/if}><a href="{$base_url}web-development/imap"><i class="fa fa-bolt"></i> IMAP</a></li>
            <li {if $protical == 'POP'}class="active"{/if}><a href="{$base_url}web-development/pop3"><i class="fa fa-bolt"></i> POP</a></li>
            <li {if $protical == 'SMTP'}class="active"{/if}><a href="{$base_url}web-development/smtp"><i class="fa fa-bolt"></i> SMTP</a></li>
            <li {if $protical == 'SSH'}class="active"{/if}><a href="{$base_url}web-development/ssh"><i class="fa fa-bolt"></i> SSH</a></li>
            <li {if $protical == 'Telnet'}class="active"{/if}><a href="{$base_url}web-development/telnet"><i class="fa fa-bolt"></i> Telnet</a></li>
            <li {if $protical == 'SSL'}class="active"{/if}><a href="{$base_url}web-development/ssl"><i class="fa fa-bolt"></i> TLS/SSL</a></li>
            <li {if $protical == 'XMPP'}class="active"{/if}><a href="{$base_url}web-development/xmpp"><i class="fa fa-bolt"></i> XMPP</a></li>
        </ul>
    </li>
    <li class="list-group-item list-toggle {if $IPLayer == 'Transport'}active{/if}">
        <a class="accordion-toggle" href="#collapse-Transport-Layer" data-toggle="collapse">Transport Layer</a>
        <ul id="collapse-Transport-Layer" class="collapse {if $IPLayer == 'Transport'}in{/if}">
            <li {if $protical == 'Transport Layer'}class="active"{/if}><a href="{$base_url}web-development/transport-layer"><i class="fa fa-exchange"></i> Transport Layer</a></li>
            <li {if $protical == 'TCP'}class="active"{/if}><a href="{$base_url}web-development/tcp"><i class="fa fa-bolt"></i> TCP</a></li>
        </ul>
    </li>
    <li class="list-group-item list-toggle {if $IPLayer == 'Internet'}active{/if}">
        <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-Internet-Layer">Internet Layer</a>
        <ul id="collapse-Internet-Layer" class="collapse {if $IPLayer == 'Internet'}in{/if}">
            <li {if $protical == 'Internet Layer'}class="active"{/if}><a href="{$base_url}web-development/internet-layer"><i class="fa fa-exchange"></i> Internet Layer</a></li>
            <li {if $protical == 'IP'}class="active"{/if}><a href="{$base_url}web-development/ip"><i class="fa fa-bolt"></i> IP</a></li>
        </ul>
    </li>
    <li class="list-group-item list-toggle {if $IPLayer == 'Link'}active{/if}">
        <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-Link-Layer">Link Layer</a>
        <ul id="collapse-Link-Layer" class="collapse {if $IPLayer == 'Link'}in{/if}">
            <li {if $protical == 'Link Layer'}class="active"{/if}><a href="{$base_url}web-development/link-layer"><i class="fa fa-exchange"></i> Link Layer</a></li>
            <li {if $protical == 'PPP'}class="active"{/if}><a href="{$base_url}web-development/ppp"><i class="fa fa-bolt"></i> PPP</a></li>
        </ul>
    </li>
</ul>