<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('CGI - Common Gateway Interface'); ?>
        <p><strong>Common Gateway Interface (CGI)</strong> is a standard method used to generate dynamic content on web pages and web applications.</p>
        <p>CGI, when implemented on a <?php echo $this->stencil->addLink('Web server', 'WD'); ?>, provides an interface between the web server and programs that generate the web content.</p>
        <p>These programs are known as CGI scripts or simply CGIs; they are usually written in a scripting language, but can be written in any programming language.</p>
        <p>In 1993, the <?php echo $this->stencil->addLink('World Wide Web', 'WD'); ?> was small but flourishing. WWW software developers and Web site developers kept in touch on the <strong>www-talk mailing list</strong>, so it was there that a standard for calling command line executables was agreed upon.</p>
        <p>The <strong>NCSA</strong> team wrote the specification; however, NCSA no longer hosts this.</p>
        <p>The other Web server developers adopted it, and it has been a standard for Web servers ever since.</p>
        <p>A work group chaired by Ken Coar started in November 1997 to get the NCSA definition of CGI more formally defined. This work resulted in <?php echo $this->stencil->addRFCLink('3875'); ?>, which specified CGI Version 1.1.</p>
        <p>Specifically mentioned in the RFC are the following contributors:</p>
        <ul>
            <li><strong>Rob McCool</strong> (author of the NCSA httpd Web server)</li>
            <li><strong>John Franks</strong> (author of the GN Web server)</li>
            <li><strong>Ari Luotonen</strong> (the developer of the <?php echo $this->stencil->addLink('CERN', 'C'); ?> httpd Web server)</li>
            <li><strong>Tony Sanders</strong> (author of the Plexus Web server)</li>
            <li><strong>George Phillips</strong> (Web server maintainer at the University of British Columbia)</li>
        </ul>
        <p>A web server that supports CGI can be configured to interpret a URL that it serves as a reference to a CGI script.</p>
        <p>A common convention is to have a <code>cgi-bin/</code> directory at the base of the directory tree and treat all executable files within this directory as CGI scripts.</p>
        <p>Another popular convention is to use filename extensions; for instance, if CGI scripts are consistently given the extension <code>.cgi</code>, the web server can be configured to interpret all such files as CGI scripts.</p>
        <p>While convenient, and required by many pre-packaged scripts, it opens the server to attack if a remote user can upload executable code with the proper extension.</p>
        <p>In the case of HTTP PUT or POSTs, the user-submitted data is provided to the program via the standard input.</p>
        <p>The web server creates a subset of the environment variables passed to it and adds details pertinent to the HTTP environment.</p>
    </div>
</div>