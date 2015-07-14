<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('URL - Uniform Resource Locator'); ?>
        <p>A <strong>Uniform Resource Locator (URL)</strong> is a reference to a resource that specifies the location of the resource on a computer network and a mechanism for retrieving it. A URL is a specific type of <strong>Uniform Resource Identifier (<?php echo $this->stencil->addLink('URI', 'WD'); ?>)</strong>, although many people use the two terms interchangeably. A URL implies the means to access an indicated resource, which is not true of every URI. URLs occur most commonly to reference web pages (<?php echo $this->stencil->addLink('HTTP', 'IPA'); ?>), but are also used for file transfer (<?php echo $this->stencil->addLink('FTP', 'IPA'); ?>), email (<?php echo $this->stencil->addLink('mailto', 'WD'); ?>), database access (<?php echo $this->stencil->addLink('JDBC', 'DB'); ?>), and many other applications.</p>
        <p>Most web browsers display the URL of a web page above the page in an address bar. A typical URL has the form <code>http://www.example.com/index.html</code>, which indicates the protocol type (<code>HTTP</code>), the domain name, (<code>www.example.com</code>), and the specific web page (<code>index.html</code>).</p>
        <p>The Uniform Resource Locator was standardised in 1994 by <?php echo $this->stencil->addLink('Tim Berners-Lee', 'P'); ?> and the URI working group of the Internet Engineering Task Force (<?php echo $this->stencil->addLink('IETF', 'C'); ?>) as an outcome of collaboration started at the IETF Living Documents "<em>Birds of a Feather</em>" session in 1992. The format combines the pre-existing system of domain names (created in 1985) with file path syntax, where slashes are used to separate directory and file names. Conventions already existed where server names could be prepended to complete file paths, preceded by a double-slash (<code>//</code>).</p>
        <p>Berners-Lee later regretted the use of dots to separate the parts of the domain name within URIs, wishing he had used slashes throughout. For example, <code>http://www.example.com/path/to/name</code> would have been written <code>http:com/example/www/path/to/name</code>. Berners-Lee has also said that, given the colon following the URI scheme, the two slashes before the domain name were also unnecessary.</p>

        <h2>Syntax</h2>
        <p>Every HTTP URL consists of the following, in the given order. Several schemes other than HTTP also share this general format, with some variation.</p>
        <ul>
            <li>The scheme name (commonly called protocol, although not every URL scheme is a protocol, e.g. mailto is not a protocol)</li>
            <li>A colon, two slashes,</li>
            <li>A host, normally given as a domain name For example, <code>http://www.example.com/path/to/name</code> would have been written <code>http:com/example/www/path/to/name</code> but sometimes as a literal IP address</li>
            <li>Optionally a colon followed by a port number</li>
            <li>The full path of the resource</li>
        </ul>

        <p>The scheme says how to connect, the host specifies where to connect, and the remainder specifies what to ask for.</p>

        <p>For programs such as <strong>Common Gateway Interface (<?php echo $this->stencil->addLink('CGI', 'WD'); ?>)</strong> scripts, this is followed by a query string, and an optional fragment identifier.</p>
        <p>The syntax is: <code>scheme://[user:password@]domain:port/path?query_string#fragment_id</code>

        <h2>Component Details:</h2>
        <ul>
            <li>The scheme, which in many cases is the name of a protocol (but not always), defines how the resource will be obtained. Examples include HTTP, HTTPS, FTP, file and many others. Although schemes are case-insensitive, the canonical form is lowercase.</li>
            <li>The domain name or literal numeric IP address gives the destination location for the URL. A literal numeric IPv6 address may be given, but must be enclosed in <code>[ ]</code> e.g. <code>[db8:0cec::99:123a]</code>.
                <ul>
                    <li>The domain <code>google.com</code>, or its numeric IP address <code>173.194.34.5</code>, is the address of Google's website.</li>
                </ul>
            </li>
            <li>The domain name portion of a URL is not case sensitive since DNS ignores case:
                <ul>
                <li><code>http://en.example.org/</code> and <code>HTTP://EN.EXAMPLE.ORG/</code> both open the same page.</li>
                </ul>
            </li>
            <li>The port number, given in decimal, is optional; if omitted, the default for the scheme is used.
                <ul>
                    <li>For example, <code>http://vnc.example.com:5800</code> connects to port <code>5800</code> of <code>vnc.example.com</code>, which may be appropriate for a VNC remote control session. If the port number is omitted for an http: URL, the browser will connect on port 80, the default HTTP port. The default port for an https: request is 443.</li>
                </ul>
            </li>
            <li>The path is used to specify and perhaps find the resource requested. This path may or may not describe folders on the file system in the web server. It may be very different from the arrangement of folders on the web server. It is case-sensitive, though it may be treated as case-insensitive by some servers, especially those based on Microsoft Windows.
                <ul>
                    <li>If the server is case sensitive and <code>http://en.example.org/wiki/URL</code> is correct, then <code>http://en.example.org/WIKI/URL</code> or <code>http://en.example.org/wiki/url</code> will display an HTTP 404 error page, unless these URLs point to valid resources themselves.</li>
                </ul>
            </li>
            <li>The query string contains data to be passed to software running on the server. It may contain name/value pairs separated by ampersands, for example
                <ul>
                    <li><code>?first_name=Iain&last_name=White</code>.</li>
                </ul>
            </li>
            <li>The fragment identifier, if present, specifies a part or a position within the overall resource or document.
                <ul>
                    <li>When used with HTML, it usually specifies a section or location within the page, and used in combination with Anchor elements or the "id" attribute of an element, the browser is scrolled to display that part of the page.</li>
                </ul>
            </li>
        </ul>

        <p>The scheme name defines the namespace, purpose, and the syntax of the remaining part of the URL. Software will try to process a URL according to its scheme and context. For example, a web browser will usually dereference the URL <code>http://example.org:80</code> by performing an HTTP request to the host at <code>example.org</code>, using port number 80.</p>
        <p>Other examples of scheme names include HTTPS, Gopher, Wais, FTP. URLs with HTTPS as a scheme (such as <code>https://example.com/</code>) require that requests and responses will be made over a secure connection to the website. Some schemes that require authentication allow a username, and perhaps a password too, to be embedded in the URL, for example <code>ftp://asmith@ftp.example.org</code>. Passwords embedded in this way are not conducive to security, but the full possible syntax is</p>
        <p><code>scheme://username:password@domain:port/path?query_string#fragment_id</code></p>
        <p>Other schemes do not follow the HTTP pattern. For example, the Mailto scheme only uses valid email addresses. When clicked on in an application, the URL <code>mailto:jim@example.com</code> may start an e-mail composer with the address <code>jim@example.com</code> in the To field. The tel scheme is even more different; it uses the public switched telephone network for addressing, instead of domain names representing Internet hosts.</p>

        <h2>Relationship to URI</h2>
        <p>A URL is a <?php echo $this->stencil->addLink('URI', 'WD'); ?> that, in addition to identifying a web resource, provides a means of locating the resource by describing its "primary access mechanism (e.g., its network location)".</p>

        <h2>Internet Hostnames</h2>
        <p>A hostname is a domain name assigned to a host computer. This is usually a combination of the host's local name with its parent domain's name. For example, <code>en.example.org</code> consists of a local hostname (<code>en</code>) and the domain name <code>example.org</code>. The hostname is translated into an IP address via the local hosts file, or the Domain Name System (<?php echo $this->stencil->addLink('DNS', 'IPA'); ?>) resolver. It is possible for a single host computer to have several hostnames; but generally the operating system of the host prefers to have one hostname that the host uses for itself.</p>
        <p>Any domain name can also be a hostname, as long as the restrictions mentioned below are followed. For example, both "<code>en.example.org</code>" and "<code>example.org</code>" can be hostnames if they both have IP addresses assigned to them. The domain name "<code>xyz.example.org</code>" may not be a hostname if it does not have an IP address, but "<code>aa.xyz.example.org</code>" may still be a hostname. All hostnames are domain names, but not all domain names are hostnames.</p>

        <h2>URL Protocols</h2>
        <p>The protocol, or scheme, of a URL defines how the resource will be obtained. Two common protocols on the web are <?php echo $this->stencil->addLink('HTTP', 'IPA'); ?> and <?php echo $this->stencil->addLink('HTTPS', 'IPA'); ?>. For various reasons, many sites have been switching to permitting access through both the HTTP and HTTPS protocols. Each protocol has advantages and disadvantages, including for some of the users that one or the other protocol either does not function, or is very undesirable. When a link contains a protocol specifier it results in the browser following the link using the specified protocol regardless of the potential desires of the user.</p>

        <h2>Protocol Relative URLs</h2>
        <p>It is possible to construct valid URLs without specifying a protocol which are called protocol relative links (PRL) or protocol relative URLs. Using PRLs on a page permits the viewer of the page to visit new pages using whichever protocol was used to obtain the page containing the link. This supports continuing to use whichever protocol the viewer has chosen to use for obtaining the current page when accessing new pages.</p>
    </div>
</div>