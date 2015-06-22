<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Secure By Design'); ?>
        <p><strong>Secure by design</strong>, in software engineering, means that the software has been designed from the ground up to be secure. Malicious practices are taken for granted and care is taken to minimize impact when a security vulnerability is discovered or on invalid user input.</p>
        <p>Generally, designs that work well do not rely on being secret. It is not mandatory, but proper security usually means that everyone is allowed to know and understand the design because it is secure. This has the advantage that many people are looking at the code, and this improves the odds that any flaws will be found sooner (Linus' law). Of course, attackers can also obtain the code, which makes it easier for them to find vulnerabilities as well.</p>
        <p>Also, it is very important that everything works with the least amount of privileges possible (principle of least privilege). For example a Web server that runs as the administrative user (root or admin) can have the privilege to remove files and users that do not belong to itself. Thus, a flaw in that program could put the entire system at risk. On the other hand, a Web server that runs inside an isolated environment and only has the privileges for required network and filesystem functions, cannot compromise the system it runs on unless the security around it is in itself also flawed.</p>
    </div>
</div>
