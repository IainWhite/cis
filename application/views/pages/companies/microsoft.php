<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Microsoft'); ?>
        <p>The <strong>Microsoft Corporation</strong> is an American multinational corporation headquartered in Redmond, Washington, that develops, manufactures, licenses, supports and sells computer software, consumer electronics and personal computers and services.</p>
        <p>Its best known software products are the <?php echo $this->stencil->addLink('Microsoft Windows', 'OS'); ?> line of operating systems, <?php echo $this->stencil->addLink('Microsoft Office', 'ITS'); ?> suite and <?php echo $this->stencil->addLink('Internet Explorer', 'WB'); ?> web browser. Its flagship hardware products are <strong>XBox</strong> game console and the Microsoft Surface series of tablets.</p>
        <p>It is the world's largest software maker measured by revenues. It is also one of the world's most valuable companies.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <p>Microsoft was founded by <?php echo $this->stencil->addLink('Bill Gates', 'P'); ?> and <?php echo $this->stencil->addLink('Paul Allen', 'P'); ?> on 4 April 1975 to develop and sell <?php echo $this->stencil->addLink('BASIC', 'L'); ?> interpreters for <strong>Altair 8800</strong>. It rose to dominate the personal computer operating system market with <?php echo $this->stencil->addLink('MS-DOS', 'OS'); ?> in the mid-1980s, followed by the <?php echo $this->stencil->addLink('Microsoft Windows', 'OS'); ?>.</p>
        <p>The company's 1986 initial public offering, and subsequent rise in its share price, created an estimated three billionaires and 12,000 millionaires from Microsoft employees. Since the 1990s, it has increasingly diversified from the operating system market and has made a number of corporate acquisitions. In May 2011, Microsoft acquired <strong>Skype Technologies</strong> for $8.5 billion in its largest acquisition to date.</p>
        <p>As of 2013, Microsoft is market dominant in both the <?php echo $this->stencil->addLink('IBM PC compatible', 'ITH'); ?> operating system and office software suite markets (the latter with Microsoft Office). The company also produces a wide range of other software for desktops and servers, and is active in areas including internet search (with <strong>Bing</strong>), the video game industry (with the <strong>XBox</strong>, <strong>XBox 360</strong> and <strong>XBox One</strong> consoles), the digital services market (through <strong>MSN</strong>), and mobile phones (via the <strong>Windows Phone OS</strong>). In June 2012, Microsoft entered the personal computer production market for the first time, with the launch of the <strong>Microsoft Surface</strong>, a line of tablet computers.</p>
    </div>
</div>
<?php endif; ?>