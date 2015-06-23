<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('ASP - Active Server Pages'); ?>
        <p><strong>ASP</strong> or <strong>Active Server Pages</strong> was Microsoft’s first ever server-side scripting language used for generating dynamic and interactive web pages. Initially, <?php echo $this->stencil->addLink('Microsoft', 'C'); ?> added it as an add-on to the <?php echo $this->stencil->addLink('IIS', 'WS'); ?> (Internet Information Services) for Windows NT 4.0 but after its success, Microsoft included it as a free component of Windows Server after the release of the Microsoft Windows 2000 Server.</p>
        <p>Building websites with ASP consists of use various ASP built-in-objects. For instance, in ASP 2.0, there are six built-in objects; Server object, Session object, Response object, Server object, ASPError object and Application object.</p>
        <p>ASP pages are written in a scripting language. It is up to the developer, which scripting language to choose, however, most of the ASP developers around the world use <?php echo $this->stencil->addLink('VBScript', 'LB'); ?> and a few use <?php echo $this->stencil->addLink('JScript', 'JS'); ?> or <?php echo $this->stencil->addLink('PerlScript', 'L'); ?>.</p>
        <p>ASP was previously known as the <strong>dbWeb</strong> and it was developed by Aspect Software Engineering. It was the first WDE (Web application Development Environment) that incorporated the feature of integration of the web application directly into the web server.</p>
        <p><?php echo $this->stencil->addWikiLink('Active_Server_Pages'); ?>, <?php echo $this->stencil->addExternalLink('ASP on MSDN', 'http://msdn.microsoft.com/en-us/library/aa286483.aspx'); ?><br />
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h3>Versions of ASP</h3>
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th>Version</th>
                    <th>Distributed With</th>
                    <th>Date</th>
                </tr>
                <tr>
                    <td>ASP Version 1</td>
                    <td>Microsoft IIS 3.0</td>
                    <td>December 1996</td>
                </tr>
                <tr>
                    <td>ASP Version 2</td>
                    <td>Microsoft IIS 4.0</td>
                    <td>September 1997</td>
                </tr>
                <tr>
                    <td>ASP Version 3</td>
                    <td>Microsoft IIS 5.0</td>
                    <td>November 2000</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>ASP Objects</h2>
            <p>ASP provides various objects that can be used to design interactive and dynamic web pages. Following are the six objects of ASP along with their brief description:</p>

            <h3>Server Object</h3>
            <p>The ASP server object is used to access various properties and methods on the server, as the name implies.</p>

            <h3>Response Object</h3>
            <p>In response to the request made by the browser using ASP request object, the server respond using the ASP response object.</p>

            <h3>Request Object</h3>
            <p>As the name suggests, the request object handles the requests made from the browser for a page from the server. Asp request object get all the information from the user about the requested page.</p>

            <h3>Session Object</h3>
            <p>Whenever you use any application, you open it and finally you close it; this period is called as a Session. In order for the web server to know who are you and what you do, ASP provides a unique cookie which is created for every user. The cookie is stored at the client side and contains information that can be used to identify the user. The Session Object contains information like name, preferences and unique user id. Server creates session for every user and destroys it as soon as the session expires.</p>

            <h3>Application Object</h3>
            <p>Various ASP files, when grouped together, may result in a complete Application. Various ASP files work together in order to perform a common function. ASP object is used to hold all these common function files together.</p>

            <h3>Error Object</h3>
            <p>The ASP Error object was not included in ASP 1 and ASP 2. ASPError object was implemented in the latest release of ASP 3.0 and is also available in IIS version 5 and later. The basic purpose of the ASPError object is to display error messages and detailed information about any error that occurs while executing any script. The ASPError object is automatically created whenever <code>Server.GetLastError</code> is called.</p>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Example of ASP Code</h2>
            <?php echo $this->stencil->addCodeSnippet('asp', 'asp.txt'); ?>
        </div>
    </div>
<?php endif; ?>
