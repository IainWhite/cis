<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Lighttpd Web Server'); ?>
        <p><strong>Lighttpd</strong> (pronounced "<em>lighty</em>") is an open-source web server optimised for speed-critical environments while remaining standards-compliant, secure and flexible.</p>
        <p>It was originally written by Jan Kneschke as a proof of concept of the c10k problem - how to handle 10,000 connections in parallel on one server, but has gained worldwide popularity.</p>
        <p>The low memory footprint (compared to other web servers), small CPU load and speed optimisations make lighttpd suitable for servers that are suffering load problems, or for serving static media separately from dynamic content. lighttpd is free software / open source, and is distributed under the BSD license. It runs natively on <?php echo $this->stencil->addLink('Unix', 'OS'); ?>-like operating systems as well as <?php echo $this->stencil->addLink('Microsoft Windows', 'OS'); ?>.</p>
        <p>Lighttpd supports the FastCGI, SCGI and CGI interfaces to external programs, permitting web applications written in any programming language to be used with the server. As a particularly popular language, <?php echo $this->stencil->addLink('PHP', 'L'); ?> performance has received special attention. Lighttpd's FastCGI can be configured to support PHP with opcode caches (like APC) properly and efficiently. Additionally, it has received attention from its popularity within the <?php echo $this->stencil->addLink('Python', 'L'); ?>, <?php echo $this->stencil->addLink('Perl', 'L'); ?>, <?php echo $this->stencil->addLink('Ruby', 'L'); ?> and Lua communities. Lighttpd also supports WebDNA, the resilient in-memory database system designed to build database-driven websites. It is a popular web server for the <strong>Catalyst</strong> and <strong>Ruby on Rails</strong> web frameworks. <strong>Lighttpd does not support ISAPI</strong>.
        <p>Lighttpd (1.4.x) officially does not support sending large files from CGI, FastCGI, or proxies unless <strong>X-Sendfile</strong> is used.</p>
        <br />
        <p><strong>Official Lighttpd website:</strong> {'lighttpd.net'|link_urls:'x':'http://www.lighttpd.net/'}</p>
        <p><strong>Official Lighttpd website:<?php echo $this->stencil->addExternalLink('lighttpd.net/', 'http://www.lighttpd.net/'); ?></p>
    </div>
</div>
