<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('JavaScript Engine'); ?>
        <p>A <strong>JavaScript engine</strong> is process virtual machine which interprets and executes <?php echo $this->stencil->addLink('JavaScript', 'L'); ?> (also known as <?php echo $this->stencil->addLink('ECMAScript', 'JS'); ?>).</p>
        <p>Although there are several uses for a JavaScript engine, it is most commonly used in <?php echo $this->stencil->addLink('Web browsers', 'WD'); ?>.</p>
        <p>Before the <?php echo $this->stencil->addLink('second browser war', 'WD'); ?> in 2008 - 2009, the JavaScript engine (also termed <strong>JavaScript interpreter</strong> or <strong>JavaScript implementation</strong>) was known as simply an interpreter that read and executed JavaScript source code.</p>
        <p>The first JavaScript engine was created by <?php echo $this->stencil->addLink('Brendan Eich', 'P'); ?> at <?php echo $this->stencil->addLink('Netscape Communications Corporation', 'C'); ?> for the <?php echo $this->stencil->addLink('Netscape Navigator', 'WB'); ?> web browser.</p>
        <p>The engine, code named <?php echo $this->stencil->addLink('SpiderMonkey', 'web-development/javascript-engines'); ?>, is implemented in <?php echo $this->stencil->addLink('C++', 'LC'); ?>.</p>
        <p>It has since been updated (in JavaScript 1.5) to conform to ECMA-262 Edition 3.</p>
        <p>The <?php echo $this->stencil->addLink('Rhino', 'web-development/javascript-engines'); ?> engine, created primarily by <strong>Norris Boyd</strong> (also at Netscape) is a JavaScript implementation in <?php echo $this->stencil->addLink('Java', 'L'); ?>. Like SpiderMonkey, Rhino is ECMA-262 Edition 3 compliant.</p>
        <p>Applications of the technology include <?php echo $this->stencil->addLink('Apple Safari 4', 'WB'); ?>'s <?php echo $this->stencil->addLink('Nitro', 'web-development/javascript-engines'); ?>, <?php echo $this->stencil->addLink('Google Chrome', 'WB'); ?>'s <?php echo $this->stencil->addLink('V8', 'web-development/javascript-engines'); ?> and <?php echo $this->stencil->addLink('Mozilla Firefox 3.5', 'WB'); ?>'s <?php echo $this->stencil->addLink('TraceMonkey', 'web-development/javascript-engines'); ?>.</p>
        <p>By far the most common host environment for JavaScript is a Web browser.</p>
        <p>Web browsers typically use the public application programming interface (<?php echo $this->stencil->addLink('API', 'WD'); ?>) to create "host objects" responsible for reflecting the Document Object Model (<?php echo $this->stencil->addLink('DOM', 'WD'); ?>) into JavaScript.</p>
        <p>The web server is another common application of the engine.</p>
        <p>A JavaScript web server exposes host objects representing an <?php echo $this->stencil->addLink('HTTP', 'IPA'); ?> request and response objects, which a JavaScript program then manipulates to dynamically generate web pages.</p>
        <p>Microsoft's <?php echo $this->stencil->addLink('ASP', 'L'); ?> technology for <?php echo $this->stencil->addLink('IIS', 'WS'); ?> allows server-side code to be written in <?php echo $this->stencil->addLink('VBScript', 'L'); ?> or <?php echo $this->stencil->addLink('JScript', 'JS'); ?> (Microsoft's implementation of JavaScript).</p>
        <p><strong>Jaxer</strong> is a web server that runs entirely on JavaScript; this has the benefit of allowing the same code to be shared on the server and on the client.</p>
    </div>
</div>