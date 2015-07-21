<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('WAP (Wireless Application Protocol)'); ?>
        <p><strong>Wireless Application Protocol (WAP)</strong> is a technical standard for accessing information over a mobile wireless network. A WAP browser is a web browser for mobile devices such as mobile phones that uses the protocol.</p>
        <h2>WAP Protocol Suite</h2>
        <ul>
            <li><?php echo $this->stencil->addLink('Wireless Application Environment', 'WAP'); ?> (WAE)</li>
            <li><?php echo $this->stencil->addLink('Wireless Session Protocol', 'WAP'); ?> (WSP)</li>
            <li><?php echo $this->stencil->addLink('Wireless Transaction Protocol', 'WAP'); ?> (WTP)</li>
            <li><?php echo $this->stencil->addLink('Wireless Transport Layer Security', 'WAP'); ?> (WTLS)</li>
            <li><?php echo $this->stencil->addLink('Wireless Datagram Protocol', 'WAP'); ?> (WDP)</li>
        </ul>
        <p>The bottom most protocol in the suite, the <strong>WAP Datagram Protocol (<?php echo $this->stencil->addLink('WDp', 'WAP'); ?>)</strong>, functions as an adaptation layer that makes every data network look a bit like UDP to the upper layers by providing unreliable transport of data with two 16-bit port numbers (origin and destination). All the upper layers view WDP as one and the same protocol, which has several "technical realisations" on top of other "data bearers" such as SMS, USSD, etc. On native IP bearers such as GPRS, UMTS packet-radio service, or PPP on top of a circuit-switched data connection, WDP is in fact exactly UDP.</p>
        <p><?php echo $this->stencil->addLink('WTLS', 'WAP'); ?>, an optional layer, provides a public-key cryptography based security mechanism similar to <?php echo $this->stencil->addLink('TLS', 'IPA'); ?>.</p>
        <p><?php echo $this->stencil->addLink('WTP', 'WAP'); ?> provides transaction support (reliable request / response) adapted to the wireless world. WTP supports more effectively than <?php echo $this->stencil->addLink('TCP', 'IPA'); ?> the problem of packet loss, which occurs commonly in 2G wireless technologies in most radio conditions, but is misinterpreted by TCP as network congestion.</p>
        <p>Finally, one can think of <?php echo $this->stencil->addLink('WSp', 'WAP'); ?> initially as a compressed version of <?php echo $this->stencil->addLink('HTTP', 'IPA'); ?>.</p>
        <p>This protocol suite allows a terminal to transmit requests that have an HTTP or HTTPS equivalent to a WAP gateway; the gateway translates requests into plain HTTP.</p>

        <h2>WAP 2.0</h2>
        <p>A re-engineered 2.0 version was released in 2002. It uses a cut-down version of <?php echo $this->stencil->addLink('XHTML', 'WD'); ?> with end-to-end <?php echo $this->stencil->addLink('HTTP', 'IPA'); ?>, dropping the gateway and custom protocol suite used to communicate with it. A WAP gateway can be used in conjunction with WAP 2.0; however, in this scenario, it is used as a standard proxy server. The WAP gateway's role would then shift from one of translation to adding additional information to each request. This would be configured by the operator and could include telephone numbers, location, billing information, and handset information.</p>
        <p>Mobile devices process <strong><?php echo $this->stencil->addLink('XHTML Mobile Profile', 'WD'); ?> (XHTML MP)</strong>, the markup language defined in WAP 2.0. It is a subset of XHTML and a superset of <?php echo $this->stencil->addLink('XHTML Basic', 'WD'); ?>. A version of Cascading Style Sheets (<?php echo $this->stencil->addLink('CSS', 'WD'); ?>) called <strong>WAP CSS</strong> is supported by XHTML MP.</p>
    </div>
</div>