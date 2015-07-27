<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('AJAX'); ?>
        <p><strong>AJAX</strong> is an acronym for <strong>A</strong>synchronous <strong>J</strong>avaScript and <strong>X</strong>ML.</p>
        <p>It is a group of interrelated Web development techniques used on the client-side to create asynchronous web applications.</p>
        <p>With AJAX, web applications can send data to, and retrieve data from, a server asynchronously (in the background) without interfering with the display and behaviour of the existing page.</p>
        <p>Data can be retrieved using the <?php echo $this->stencil->addLink('XMLHttpRequest', 'WD'); ?> object. Despite the name, the use of <?php echo $this->stencil->addLink('XHTML', 'WD'); ?> is not required, <?php echo $this->stencil->addLink('JSON', 'WD'); ?> is often used instead, and the requests do not need to be asynchronous.</p>
        <p>AJAX is not a single technology, but a group of technologies. <?php echo $this->stencil->addLink('HTML', 'WD'); ?> and <?php echo $this->stencil->addLink('CSS', 'WD'); ?> can be used in combination to mark up and style information.</p>
        <p>The DOM is accessed with <?php echo $this->stencil->addLink('JavaScript', 'L'); ?> to dynamically display, and allow the user to interact with, the information presented.</p>
        <p>JavaScript and the XMLHttpRequest object provide a method for exchanging data asynchronously between browser and server to avoid full page reloads.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <p>In the 1990s, most web sites were based on complete HTML pages. Each user action required that a complete page be loaded from the server. This process was inefficient, as reflected by the user experience: all page content disappeared, then reappeared. Each time the browser reloaded a page because of a partial change, all of the content had to be re-sent, even though only some of the information had changed. This placed additional load on the server and used excessive bandwidth.</p>
            <p>In 1996, the <code>iFrame</code> tag was introduced by <?php echo $this->stencil->addLink('Internet Explorer', 'WB'); ?> to load or to fetch content asynchronously.</p>
            <p>In 1998, <strong>Microsoft Outlook Web App</strong> team implemented the first component XMLHTTP by client script.</p>
            <p>In 1999, <?php echo $this->stencil->addLink('Microsoft', 'C'); ?> used its iFrame technology to dynamically update the news stories and stock quotes on the default page for Internet Explorer, and created the XMLHTTP ActiveX control in <?php echo $this->stencil->addLink('Internet Explorer 5', 'IE'); ?>, which was later adopted by <?php echo $this->stencil->addLink('Mozilla', 'WB'); ?>, <?php echo $this->stencil->addLink('Safari', 'WB'); ?>, <?php echo $this->stencil->addLink('Opera', 'WB'); ?> and other browsers as the XMLHttpRequest JavaScript object.</p>
            <p>Microsoft has adopted the native XMLHttpRequest model as of <?php echo $this->stencil->addLink('Internet Explorer 7', 'IE'); ?>, though the ActiveX version is still supported.</p>
            <p>The utility of background HTTP requests to the server and asynchronous web technologies remained fairly obscure until it started appearing in full scale on-line applications such as Outlook Web App (2000) and Oddpost (2002).</p>
            <p><?php echo $this->stencil->addLink('Google', 'C'); ?> made a wide deployment of standards compliant, cross browser AJAX with <?php echo $this->stencil->addLink('Gmail', 'URL'); ?> (2004) and <?php echo $this->stencil->addLink('Google Maps', 'URL'); ?> (2005).</p>
            <p>The term "<em>AJAX<em>" was publicly stated on 18 February 2005 by <?php echo $this->stencil->addLink('Jesse Garrett', 'P'); ?> in an article titled "<strong><em>Ajax: A New Approach to Web Applications</em></strong>", based on techniques used on Google pages.</p>
        </div>
    </div>
<?php endif; ?>