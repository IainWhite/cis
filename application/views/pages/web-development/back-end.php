<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Back-End / Server-Side'); ?>
        <p>Typically, a server is a computer program, such as a <?php echo $this->stencil->addLink('Web server', 'WD'); ?>, that runs on a remote server, reachable from a user's local computer or workstation.</p>
        <p>Operations may be performed <strong>server-side</strong> because they require access to information or functionality that is not available on the client, or require typical behaviour that is unreliable when it is done <?php echo $this->stencil->addLink('client-side', 'WD'); ?>.</p>
        <p>Server-side operations also include processing and storage of data from a client to a server, which can be viewed by a group of clients.</p>
        <p>Examples of server-side processing include the creation and adaptation of a database using <?php echo $this->stencil->addLink('MySQL', 'DB'); ?>.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Server-side Scripting</h2>
            <p><strong>Server-side</strong> scripting is a technique used in website design which involves embedding scripts in an <?php echo $this->stencil->addLink('HTML', 'WD'); ?> source code which results in a user's (client's) request to the server website being handled by a script running on the server-side before the server responds to the client's request.</p>
            <p>Scripts can be written in any of a number of server-side scripting languages that are available.</p>
            <p>Server-side scripting differs from client-side scripting where embedded scripts, such as JavaScript, are run client-side in a web browser.</p>
            <p>Server-side scripting is usually used to provide an interface for the client and to limit client access to proprietary databases or other data sources.</p>
            <p>These scripts may assemble client characteristics for use in customizing the response based on those characteristics, the user's requirements, access rights, etc.</p>
            <p>Server-side scripting also enables the website owner to reduce user access to the source code of server-side scripts which may be proprietary and valuable in itself.</p>
            <p>The down-side to the use of server-side scripting is that the server website computer needs to provide most of the computing resources before sending a page to the client computer for display via its web browser.</p>
            <p>When the server serves data in a commonly used manner, for example according to the <?php echo $this->stencil->addLink('HTTP', 'IPA'); ?> or <?php echo $this->stencil->addLink('FTP', 'IPA'); ?> protocols, users may have their choice of a number of client programs (most modern web browsers can request and receive data using both of those protocols).</p>
            <p>In the case of more specialized applications, programmers may write their own server, client, and communications protocol, that can only be used with one another.</p>
            <p>Programs that run on a user's local computer without ever sending or receiving data over a network are not considered clients, and so the operations of such programs would not be considered client-side operations.</p>
            <p><?php echo $this->stencil->addLink('Netscape', 'C'); ?> introduced an implementation of <strong>JavaScript for server-side (<?php echo $this->stencil->addLink('JSS', 'JS'); ?>)</strong> scripting with <strong>Netscape Enterprise Server</strong>, first released in December, 1994 (soon after releasing <?php echo $this->stencil->addLink('JavaScript', 'L'); ?> for browsers).</p>
            <p>Server-side scripting was later used in early 1995 by <strong>Fred DuFresne</strong> while developing the first web site for Boston, MA television station WCVB. The technology is described in US patent 5835712. The patent was issued in 1998 and is now owned by Open Invention Network (OIN).</p>
            <p>In 2010 OIN named Fred DuFresne a "<em>Distinguished Inventor</em>" for his work on server-side scripting.</p>
            <p>Today, a variety of services use server-side scripting to deliver results back to a client as a paid or free service.</p>
            <p>An example would be WolframAlpha, which is a computational knowledge engine that computes results outside the clients environment and returns the computed result back.</p>
            <p>A more commonly used service is <?php echo $this->stencil->addLink('Google', 'C'); ?>'s proprietary search engine, which searches millions of cached results related to the user specified keyword and returns an ordered list of links back to the client.</p>
            <p>Apple's Siri application also employs server-side scripting outside of a web application.</p>
            <p>The application takes an input, computes a result, and returns the result back to the client.</p>
            <p>In the earlier days of the web, server-side scripting was almost exclusively performed by using a combination of <?php echo $this->stencil->addLink('C', 'L'); ?> programs, <?php echo $this->stencil->addLink('Perl', 'L'); ?> scripts, and <?php echo $this->stencil->addLink('shell scripts', 'L'); ?> using the <strong>Common Gateway Interface (<?php echo $this->stencil->addLink('CGI', 'WD'); ?>)</strong>.</p>
            <p>Those scripts were executed by the operating system, and the results were served back by the web server. Many modern web servers can directly execute on-line scripting languages such as <?php echo $this->stencil->addLink('ASP', 'L'); ?> and <?php echo $this->stencil->addLink('PHP', 'L'); ?> either by the Web server itself or via extension modules (e.g. <code>mod_perl</code> or <code>mod_php</code>) to the Web server.</p>
            <p>For example, WebDNA includes its own embedded database system. Either form of scripting (i.e., CGI or direct execution) can be used to build up complex multi-page sites, but direct execution usually results in lower overhead due to the lack of calls to external interpreters.</p>
            <p>Dynamic websites sometimes use custom web application servers, such as the <?php echo $this->stencil->addLink('Python', 'L'); ?> "Base HTTP Server" library, although some may not consider this to be server-side scripting.</p>
            <p>When designing using dynamic web-based scripting technics, like classic ASP or PHP, developers must have a keen understanding of the logical, temporal, and physical separation between the client and the server.</p>
            <p>For a user's action to trigger the execution of server-side code, for example, a developer working with classic ASP must explicitly cause the user's browser to make a request back to the web server.</p>
            <p>Creating such interactions can easily consume much development time and lead to unreadable code.</p>
            <p>Server side scripts are totally processed by the servers instead of clients.</p>
            <p>When clients request a page containing server side scripts then that server processes the scripts and returns an HTML page to the client.</p>
            <p>For example, a PHP page is not processed by the browser; instead it is interpreted by the server which can process PHP scripts and return an HTML page to the client.</p>
        </div>
    </div>
<?php endif; ?>