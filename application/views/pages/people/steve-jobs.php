<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Steve Jobs'); ?>
        <?php echo $this->stencil->addHeadshot('Steve Jobs', 'jpg', 'left'); ?>
        <p><strong>Steven Paul "Steve" Jobs</strong> (24 February 1955 - 5 October 2011) was an American entrepreneur, marketer, and inventor, who was the co-founder, chairman, and CEO of <?php echo $this->stencil->addLink('Apple Inc', 'C'); ?>.</p>
        <p>Jobs also co-founded and served as chief executive of <strong>Pixar Animation Studios</strong>; he became a member of the board of directors of <strong>The Walt Disney Company</strong> in 2006, when Disney acquired <strong>Pixar</strong>.</p>
        <p>Jobs was among the first to see the commercial potential of <strong>Xerox PARC's mouse-driven graphical user interface</strong>, which led to the creation of the <?php echo $this->stencil->addLink('Apple Lisa', 'ITH'); ?> and, a year later, the <?php echo $this->stencil->addLink('Macintosh', 'ITH'); ?>.</p>
        <p>He also played a role in introducing the <strong>LaserWriter</strong>, one of the first widely available laser printers, to the market.</p>
        <p>After a power struggle with the board of directors in 1985, Jobs left Apple and founded <?php echo $this->stencil->addLink('NeXT', 'C'); ?>, a computer platform development company specializing in the higher education and business markets.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <p>In 1986, he acquired the computer graphics division of <strong>Lucasfilm</strong>, which was spun off as Pixar.</p>
            <p>In 1996, after Apple had failed to deliver its operating system, Copland, Gil Amelio turned to NeXT Computer, and the <strong>NeXTSTEP</strong> platform became the foundation for the <?php echo $this->stencil->addLink('Mac OS X', 'OS'); ?>.</p>
            <p>Jobs returned to Apple as an advisor, and took control of the company as an interim CEO. Jobs brought Apple from near bankruptcy to profitability by 1998.</p>
            <p>As the new CEO of the company, Jobs oversaw the development of the <?php echo $this->stencil->addLink('Mac', 'ITH'); ?>, <?php echo $this->stencil->addLink('iTunes', 'IT'); ?>, <?php echo $this->stencil->addLink('iPod', 'ITH'); ?>, <?php echo $this->stencil->addLink('iPhone', 'ITH'); ?>, and <?php echo $this->stencil->addLink('iPad', 'ITH'); ?>, and on the services side, the company's Apple Retail Stores, iTunes Store and the <?php echo $this->stencil->addLink('App Store', 'MD'); ?>.</p>
            <p>The success of these products and services provided several years of stable financial returns, and propelled Apple to become the world's most valuable publicly traded company in 2011.</p>
            <p>The reinvigoration of the company is regarded by many commentators as one of the greatest turnarounds in business history.</p>
        </div>
    </div>
<?php endif; ?>