<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Hiawatha Web Server'); ?>
        <p><strong>Hiawatha</strong> is a web server available for multiple platforms.</p>
        <p>Hiawatha started in January 2002 as a very small web server, suitable for servers with old hardware.</p>
        <p>It was written originally for Internet servers in student houses in Delft in South Holland, the Netherlands. Because the author was a computer science student with special interest in IT security, all sorts of experimental security features were included. This resulted in a web server with many interesting security features which have proven useful. The author has said "<em>I know for a long time that vulnerabilities [exist in other web servers] . [One thing] that bothers me: the runtime of a CGI. A CGI process [under other web servers] can run forever. A single CGI script can DoS a webserver. A system administrator is needed to kill the script. And what about a client [or hacker] that keeps on guessing passwords for HTTP authentication? These kind of issues inspired me to create Hiawatha, with settings for maximum request sending time, maximum CGI run time, client banning, etc. Features that, in my opinion, every daemon should have.</em>"</p>
        <br />
        <p><strong>Official Hiawatha Web Server website:<?php echo $this->stencil->addExternalLink('hiawatha-webserver.org', 'https://www.hiawatha-webserver.org/'); ?></p>
    </div>
</div>
