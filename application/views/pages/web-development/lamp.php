<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('LAMP'); ?>
        <p>The acronym <strong>LAMP</strong> refers to first letters of the components of the solution stack composed entirely of free and open-source software, suitable for building high availability heavy-duty dynamic web sites, and capable of serving tens of thousands of requests simultaneously.</p>
        <p>LAMP is an acronym for "<?php echo $this->stencil->addLink('Linux', 'OS'); ?>, <?php echo $this->stencil->addLink('Apache', 'WS'); ?>, <?php echo $this->stencil->addLink('MySQL', 'DB'); ?>, <?php echo $this->stencil->addLink('PHP', 'L'); ?>."</p>
        <p>
            <strong>L</strong>inux, the operating system.<br />
            <strong>A</strong>pache, the HTTP Web server.<br />
            <strong>M</strong>ySQL (or <?php echo $this->stencil->addLink('MariaDB', 'DB'); ?>), the database.<br />
            <strong>P</strong>HP (or <?php echo $this->stencil->addLink('Perl', 'L'); ?> or <?php echo $this->stencil->addLink('Python', 'L'); ?>), the scripting language.<br />
        </p>
        <h2>Variants</h2>
        <p>
            WAMP - <?php echo $this->stencil->addLink('Windows', 'OS'); ?>, Apache, MySQL, PHP<br />
            WIMP - Windows, <?php echo $this->stencil->addLink('IIS', 'WS'); ?>, MySQL, PHP<br />
            MAMP - <?php echo $this->stencil->addLink('Macintosh', 'ITH'); ?>, Apache, MySQL, PHP<br />
        </p>
    </div>
</div>